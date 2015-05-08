jQuery(document).ready(function($) {
    $('.penguinsltd_select_from').change(function() {
        var penguinsltd_select_to = $(this).parents('form').find('.penguinsltd_select_to');
        //alert(penguinsltd_select_to);
        
        penguinsltd_select_to.removeAttr('disabled');

        var value = $('option:selected', this).attr('value');
        var group = $('option:selected', this).attr('type');
        
        penguinsltd_select_to.find('optgroup, option').show();
        penguinsltd_select_to.find('option[value="'+value+'"]').hide();

        if (group == 'london-postcodes') {
            $('.postcode_break').hide();
            penguinsltd_select_to.find('optgroup[label="London Postcodes"]').hide();
            penguinsltd_select_to.find('option[type="london-postcodes"]').hide();
        }
    }).trigger('change');
});