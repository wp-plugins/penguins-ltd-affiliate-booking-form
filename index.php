<?php
/**
 * @package Penguins_Booking_Form
 * @version 1
 */
/*
Plugin Name: Penguins LTD Booking Form
Plugin URI: http://wordpress.org/extend/plugins/penguins-ltd-booking-form/
Description: This plugin allows you to setup a Penguins LTD booking form on your website that will point (on submit) to PenguinsLTD.co.uk.
Author: Gabriel Comarita
Version: 1
Author URI: http://www.penguinsltd.co.uk/
*/

define('BBF_PLUGIN_URL', plugin_dir_url(__FILE__));

function penguinsltd_create_menu() {
    $appID = 'penguinsltd-booking-form';
    
    // Create new top-level menu
    add_menu_page('PenguinsLTD Form Settings', 'Booking Form', 'administrator', $appID, 'penguinsltd_booking_form_settings_page', plugins_url('/images/icon-penguins.png', __FILE__));

    add_submenu_page( $appID, 'Settings', '&#187; Settings', 'administrator', $appID, 'penguinsltd_booking_form_settings_page' ); 
    add_submenu_page( $appID, 'Help', '&#187; Help', 'administrator', $appID.'-help', 'penguinsltd_booking_form_help_page' );    
    
    // Make the right calls
    add_action( 'admin_init', 'register_penguinsltd_settings' );      
}

wp_enqueue_style( 'penguins_booking_css', plugins_url('stylesheet.css', __FILE__) ); 

add_action('admin_menu', 'penguinsltd_create_menu');  

function register_penguinsltd_settings() {
    // Register our settings
    register_setting( 'penguinsltd-settings-group', 'penguinsltd_referral_id' );
    register_setting( 'penguinsltd-settings-group', 'penguins_submit_form_target' );
    register_setting( 'penguinsltd-settings-group', 'penguins_destinations_dd_options' );
    register_setting( 'penguinsltd-settings-group', 'penguins_booking_form' );
}

function penguinsltd_booking_form_settings_page() {
    require_once 'form-options.php';

    // Add Default Options if the option has no value
    if(get_option('penguins_destinations_dd_options') == '') {
        update_option('penguins_destinations_dd_options', default_penguins_pick_and_drop_off_select_options());
    }

    if(get_option('penguins_booking_form') == '') {
        update_option('penguins_booking_form', penguins_booking_form());
    }      
    ?>

    <div class="wrap penguins-booking-page">
    <h2>PenguinsLTD Booking Form</h2>

    <div style="padding: 10px; background-color: white; border: 1px solid green;">
        <ul>
            <li>"Referral ID" is used as your reference. You should have received it by e-mail from us.</li>
            <li>Your Referal URL is <code>http://www.penguinsltd.co.uk/?ref_id={ref_id}</code> - In the form that you edit {ref_id} gets replaced with the "Referral ID" in the first box.</li>
        </ul>
    </div> 
    
    <form method="post" action="options.php">
        <?php settings_fields( 'penguinsltd-settings-group' ); ?>
        <table class="form-table">
            
            <tr valign="top">
                <th scope="row">Referral ID <font color="red">*</font></th>
                <td>
                    <?php
                    $referral_id = get_option('penguinsltd_referral_id');
                    ?>
                    <input size="2" required="required" type="text" name="penguinsltd_referral_id" value="<?php echo $referral_id; ?>" /><br />
                </td>
            </tr>
            
            <tr valign="top">
                <th scope="row">How to Submit the Form?</th>
                <td>
                    <?php
                    $penguins_submit_form_target = get_option('penguins_submit_form_target');
                    ?>
                    <select name="penguins_submit_form_target">
                        <option value="" <?php if($penguins_submit_form_target == '') { echo 'selected="selected"'; } ?>>[Select...]</option>
                        <option value="_parent" <?php if($penguins_submit_form_target == '_parent') { echo 'selected="selected"'; } ?>>In the same page</option>
                        <option value="_blank" <?php if($penguins_submit_form_target == '_blank') { echo 'selected="selected"'; } ?>>In a new page</option>
                    </select>
                </td>
            </tr>

            <tr valign="top">
                <th scope="row">Pick-Up and Drop-Off Drop-Down</th>
                <td>
                    <?php
                    $penguins_destinations_dd_options = get_option('penguins_destinations_dd_options');
                    ?>
                    <textarea name="penguins_destinations_dd_options" rows="20" cols="150">
                    <?php
                    echo $penguins_destinations_dd_options; 
                    ?>
                    </textarea>
                </td>
            </tr>  
            
            <tr valign="top">
                <th scope="row">Booking Form</th>
                <td>
                    <?php
                    $penguins_booking_form = get_option('penguins_booking_form');
                    ?>
                    <textarea name="penguins_booking_form" rows="20" cols="150">
                    <?php
                    echo $penguins_booking_form; 
                    ?>
                    </textarea>
                </td>
            </tr>   
            
            <tr>
                <td>&nbsp;</td>
                <td><?php submit_button(); ?></td>
            </tr>
            
        </table>
        
    </form>
    </div>
<?php
}

function penguinsltd_booking_form_help_page() {
    ?>
    <div class="wrap penguins-booking-page">
        <h2>PenguinsLTD Booking Form: WIKI</h2>
        
        <h3>Integration Instructions</h3>
        
        <div style="margin: 0 0 10px 0;"><strong>1.</strong> Into Post/Page</div>
        <div>Just use the shortcode <code>[penguins_booking_form]</code> to implement the form into any post or page.</div><br />
        
        <div style="margin: 0 0 10px 0;"><strong>2.</strong> Into Sidebar Widget</div>
        <div>Go to "Appearance &gt; Widgets", drag the "Text" widget into the right side (sidebar of your choice), then use the <code>shortcode</code> [penguins_booking_form] into the textarea.</div>
        
        <div style="margin: 20px 0 10px 0;"><strong>3.</strong> In a Custom Location</div>
        <div>To implement the form outside a post/page/widget area, you can do it by using the following PHP code: <code>&lt;?php echo do_shortcode(&#39;[penguins_booking_form]&#39;); ?&gt;</code></div>
    </div>
    <?php
}

// Create Shortcode
function penguins_booking_form_shortcode() {
    $replacements = array(
        '{bbf_plugin_url}' => BBF_PLUGIN_URL,
        '{bbf_form_target}' => get_option('penguins_submit_form_target'),
        '{destinations_dd_options}' => get_option('penguins_destinations_dd_options'),
        '{ref_id}' => get_option('penguinsltd_referral_id')
    );
    
    $penguins_booking_form = str_ireplace(array_keys($replacements), array_values($replacements), get_option('penguins_booking_form'));
    
    return $penguins_booking_form;
}

add_shortcode( 'penguins_booking_form', 'penguins_booking_form_shortcode' );

if( ! is_admin() ) {
    wp_enqueue_script('jquery');
    wp_enqueue_script('penguins_booking_form_script', BBF_PLUGIN_URL.'script.js', 'jquery');
}
?>