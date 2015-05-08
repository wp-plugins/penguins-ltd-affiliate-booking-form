<?php
if( basename($_SERVER['PHP_SELF']) == basename(__FILE__) ) exit;

// Pickup & Drop Off Points
function default_penguins_pick_and_drop_off_select_options() {
    ob_start();
?>
	<option selected="selected" value="">Select</option>
	<optgroup label="&nbsp;"></optgroup><optgroup label="Airports"></optgroup>
	<option type="airports" value="airports@city-airport">City Airport</option>
	<option type="airports" value="airports@gatwick">Gatwick</option>
	<option type="airports" value="airports@heathrow">Heathrow</option>
	<option type="airports" value="airports@luton">Luton</option>
	<option type="airports" value="airports@southend">Southend</option>
	<option type="airports" value="airports@stansted">Stansted</option>
	<optgroup label="&nbsp;"></optgroup><optgroup label="Cruise Ports"></optgroup>
	<option type="cruise-ports" value="cruise-ports@dover">Dover</option>
	<option type="cruise-ports" value="cruise-ports@harwich">Harwich</option>
	<option type="cruise-ports" value="cruise-ports@portsmouth">Portsmouth</option>
	<option type="cruise-ports" value="cruise-ports@southampton">Southampton</option>
	<option type="cruise-ports" value="cruise-ports@tilbury">Tilbury</option>
	<optgroup label="&nbsp;"></optgroup><optgroup label="London Postcodes"></optgroup>
	<option type="london-postcodes" value="london-postcodes@1">BR1 - Bromley</option>
	<option type="london-postcodes" value="london-postcodes@2">BR2 - Keston</option>
	<option type="london-postcodes" value="london-postcodes@3">BR3 - Beckenham</option>
	<option type="london-postcodes" value="london-postcodes@4">BR4 - West Wickham</option>
	<option type="london-postcodes" value="london-postcodes@5">BR5 - St Mary Cray</option>
	<option type="london-postcodes" value="london-postcodes@6">BR6 - Orpington</option>
	<option type="london-postcodes" value="london-postcodes@7">BR7 - Chislehurst</option>
	<option type="london-postcodes" value="london-postcodes@8">BR8 - Swanley</option>
	<optgroup class="postcode_break" label="---------------------"></optgroup>
	<option type="london-postcodes" value="london-postcodes@9">CR0 - Croydon</option>
	<option type="london-postcodes" value="london-postcodes@10">CR2 - South Croydon</option>
	<option type="london-postcodes" value="london-postcodes@11">CR3 - Caterham</option>
	<option type="london-postcodes" value="london-postcodes@12">CR4 - Mitcham</option>
	<option type="london-postcodes" value="london-postcodes@13">CR5 - Coulsdon</option>
	<option type="london-postcodes" value="london-postcodes@14">CR6 - Warlingham</option>
	<option type="london-postcodes" value="london-postcodes@15">CR7 - Thornton Heath</option>
	<option type="london-postcodes" value="london-postcodes@16">CR8 - Purley</option>
	<option type="london-postcodes" value="london-postcodes@17">CR9 - Croydon (Large Users)</option>
	<optgroup class="postcode_break" label="---------------------"></optgroup>
	<option type="london-postcodes" value="london-postcodes@18">DA1 - Dartford</option>
	<option type="london-postcodes" value="london-postcodes@19">DA2 - Dartford</option>
	<option type="london-postcodes" value="london-postcodes@20">DA3 - Longfield</option>
	<option type="london-postcodes" value="london-postcodes@21">DA4 - Dartford</option>
	<option type="london-postcodes" value="london-postcodes@22">DA5 - Bexley</option>
	<option type="london-postcodes" value="london-postcodes@23">DA6 - Bexleyheath</option>
	<option type="london-postcodes" value="london-postcodes@24">DA7 - Barnehurst</option>
	<option type="london-postcodes" value="london-postcodes@25">DA8 - Erith</option>
	<option type="london-postcodes" value="london-postcodes@26">DA9 - Greenhithe</option>
	<option type="london-postcodes" value="london-postcodes@27">DA10 - Swanscombe</option>
	<option type="london-postcodes" value="london-postcodes@28">DA11 - Norhfleet</option>
	<option type="london-postcodes" value="london-postcodes@29">DA12 - Gravesend</option>
	<option type="london-postcodes" value="london-postcodes@30">DA13 - Meopham</option>
	<option type="london-postcodes" value="london-postcodes@31">DA14 - Sidcup</option>
	<option type="london-postcodes" value="london-postcodes@32">DA15 - Blackfen</option>
	<option type="london-postcodes" value="london-postcodes@33">DA16 - Welling</option>
	<option type="london-postcodes" value="london-postcodes@34">DA17 - Belvedere</option>
	<option type="london-postcodes" value="london-postcodes@35">DA18 - Erith Marshes</option>
	<optgroup class="postcode_break" label="---------------------"></optgroup>
	<option type="london-postcodes" value="london-postcodes@36">E1 - Whitechapel, Stepney, Mile End</option>
	<option type="london-postcodes" value="london-postcodes@37">E2 - Bethnal Green, Shoreditch</option>
	<option type="london-postcodes" value="london-postcodes@38">E3 - Bow, Bromley-by-Bow</option>
	<option type="london-postcodes" value="london-postcodes@39">E4 - Chingford, Highams Park</option>
	<option type="london-postcodes" value="london-postcodes@40">E5 - Clapton</option>
	<option type="london-postcodes" value="london-postcodes@41">E6 - East Ham</option>
	<option type="london-postcodes" value="london-postcodes@42">E7 - Forest Gate, Upton Park</option>
	<option type="london-postcodes" value="london-postcodes@43">E8 - Hackney, Dalston</option>
	<option type="london-postcodes" value="london-postcodes@44">E9 - Hackney, Homerton</option>
	<option type="london-postcodes" value="london-postcodes@45">E10 - Leyton</option>
	<option type="london-postcodes" value="london-postcodes@46">E11 - Leytonstone</option>
	<option type="london-postcodes" value="london-postcodes@47">E12 - Manor Park</option>
	<option type="london-postcodes" value="london-postcodes@48">E13 - Plaistow</option>
	<option type="london-postcodes" value="london-postcodes@49">E14 - Poplar, Millwall, Isle of Dogs, Docklands</option>
	<option type="london-postcodes" value="london-postcodes@50">E15 - Stratford, West Ham</option>
	<option type="london-postcodes" value="london-postcodes@51">E16 - Canning Town, North Woolwich, Docklands</option>
	<option type="london-postcodes" value="london-postcodes@52">E17 - Walthamstow</option>
	<option type="london-postcodes" value="london-postcodes@53">E18 - South Woodford</option>
	<optgroup class="postcode_break" label="---------------------"></optgroup>
	<option type="london-postcodes" value="london-postcodes@54">EC1 - Clerkenwell, Finsbury, Barbican</option>
	<option type="london-postcodes" value="london-postcodes@55">EC2 - Moorgate, Liverpool Street</option>
	<option type="london-postcodes" value="london-postcodes@56">EC3 - Monument, Tower Hill, Aldgate</option>
	<option type="london-postcodes" value="london-postcodes@57">EC4 - Fleet Street, St. Paul's</option>
	<optgroup class="postcode_break" label="---------------------"></optgroup>
	<option type="london-postcodes" value="london-postcodes@58">EN1 - Enfield</option>
	<option type="london-postcodes" value="london-postcodes@59">EN2 - Enfield Town</option>
	<option type="london-postcodes" value="london-postcodes@60">EN3 - Ponders End</option>
	<option type="london-postcodes" value="london-postcodes@61">EN4 - Barnet</option>
	<option type="london-postcodes" value="london-postcodes@62">EN5 - Arkley</option>
	<option type="london-postcodes" value="london-postcodes@63">EN6 - Potters Bar</option>
	<option type="london-postcodes" value="london-postcodes@64">EN7 - Cheshunt</option>
	<option type="london-postcodes" value="london-postcodes@65">EN8 - Waltham Cross</option>
	<option type="london-postcodes" value="london-postcodes@66">EN9 - Waltham Abbey</option>
	<option type="london-postcodes" value="london-postcodes@67">EN10 - Broxbourne</option>
	<option type="london-postcodes" value="london-postcodes@68">EN11 - Hoddesdon</option>
	<optgroup class="postcode_break" label="---------------------"></optgroup>
	<option type="london-postcodes" value="london-postcodes@69">HA0 - Wembley</option>
	<option type="london-postcodes" value="london-postcodes@70">HA1 - Harrow</option>
	<option type="london-postcodes" value="london-postcodes@71">HA2 - Harrow</option>
	<option type="london-postcodes" value="london-postcodes@72">HA3 - Wealdstone</option>
	<option type="london-postcodes" value="london-postcodes@73">HA4 - Ruislip</option>
	<option type="london-postcodes" value="london-postcodes@74">HA5 - Pinner</option>
	<option type="london-postcodes" value="london-postcodes@75">HA6 - Northwood</option>
	<option type="london-postcodes" value="london-postcodes@76">HA7 - Stanmore</option>
	<option type="london-postcodes" value="london-postcodes@77">HA8 - Edgware</option>
	<option type="london-postcodes" value="london-postcodes@78">HA9 - Wembley</option>
	<optgroup class="postcode_break" label="---------------------"></optgroup>
	<option type="london-postcodes" value="london-postcodes@79">IG1 - Ilford</option>
	<option type="london-postcodes" value="london-postcodes@80">IG2 - Gants Hill</option>
	<option type="london-postcodes" value="london-postcodes@81">IG3 - Seven Kings</option>
	<option type="london-postcodes" value="london-postcodes@82">IG4 - Redbridge</option>
	<option type="london-postcodes" value="london-postcodes@83">IG5 - Clayhall</option>
	<option type="london-postcodes" value="london-postcodes@84">IG6 - Barkingside</option>
	<option type="london-postcodes" value="london-postcodes@85">IG7 - Chigwell</option>
	<option type="london-postcodes" value="london-postcodes@86">IG8 - Woodford Green</option>
	<option type="london-postcodes" value="london-postcodes@87">IG9 - Buckhurst Hill</option>
	<option type="london-postcodes" value="london-postcodes@88">IG10 - Loughton</option>
	<option type="london-postcodes" value="london-postcodes@89">IG11 - Barking </option>
	<optgroup class="postcode_break" label="---------------------"></optgroup>
	<option type="london-postcodes" value="london-postcodes@90">KT1 - Kingston Upon Thames</option>
	<option type="london-postcodes" value="london-postcodes@91">KT2 - Norbiton</option>
	<option type="london-postcodes" value="london-postcodes@92">KT3 - New Malden</option>
	<option type="london-postcodes" value="london-postcodes@93">KT4 - Worcester Park</option>
	<option type="london-postcodes" value="london-postcodes@94">KT5 - Berrylands</option>
	<option type="london-postcodes" value="london-postcodes@95">KT6 - Surbiton</option>
	<option type="london-postcodes" value="london-postcodes@96">KT7 - Thames Ditton</option>
	<option type="london-postcodes" value="london-postcodes@97">KT8 - East Molesey</option>
	<option type="london-postcodes" value="london-postcodes@98">KT9 - Chessington</option>
	<option type="london-postcodes" value="london-postcodes@99">KT10 - Esher</option>
	<option type="london-postcodes" value="london-postcodes@100">KT11 - Cobham</option>
	<option type="london-postcodes" value="london-postcodes@101">KT12 - Walton On Thames</option>
	<option type="london-postcodes" value="london-postcodes@102">KT13 - Weybridge</option>
	<option type="london-postcodes" value="london-postcodes@103">KT14 - Byfleet</option>
	<option type="london-postcodes" value="london-postcodes@104">KT15 - Addlestone</option>
	<option type="london-postcodes" value="london-postcodes@105">KT16 - Chertsey</option>
	<option type="london-postcodes" value="london-postcodes@106">KT17 - Epsom</option>
	<option type="london-postcodes" value="london-postcodes@107">KT18 - Headley</option>
	<option type="london-postcodes" value="london-postcodes@108">KT19 - Horton</option>
	<option type="london-postcodes" value="london-postcodes@109">KT20 - Tadworth</option>
	<option type="london-postcodes" value="london-postcodes@110">KT21 - Ashtead</option>
	<option type="london-postcodes" value="london-postcodes@111">KT22 - Leatherhead</option>
	<option type="london-postcodes" value="london-postcodes@112">KT23 - The Bookhams</option>
	<option type="london-postcodes" value="london-postcodes@113">KT24 - Effingham</option>
	<optgroup class="postcode_break" label="---------------------"></optgroup>
	<option type="london-postcodes" value="london-postcodes@114">N1 - Islington, Barnsbury, Canonbury</option>
	<option type="london-postcodes" value="london-postcodes@115">N2 - East Finchley</option>
	<option type="london-postcodes" value="london-postcodes@116">N3 - Finchley Central</option>
	<option type="london-postcodes" value="london-postcodes@117">N4 - Finsbury Park, Manor House</option>
	<option type="london-postcodes" value="london-postcodes@118">N5 - Highbury</option>
	<option type="london-postcodes" value="london-postcodes@119">N6 - Highgate</option>
	<option type="london-postcodes" value="london-postcodes@120">N7 - Holloway</option>
	<option type="london-postcodes" value="london-postcodes@121">N8 - Hornsey, Crouch End</option>
	<option type="london-postcodes" value="london-postcodes@122">N9 - Lower Edmonton</option>
	<option type="london-postcodes" value="london-postcodes@123">N10 - Muswell Hill</option>
	<option type="london-postcodes" value="london-postcodes@124">N11 - Friern Barnet, New Southgate</option>
	<option type="london-postcodes" value="london-postcodes@125">N12 - North Finchley, Woodside Park</option>
	<option type="london-postcodes" value="london-postcodes@126">N13 - Palmers Green</option>
	<option type="london-postcodes" value="london-postcodes@127">N14 - Southgate</option>
	<option type="london-postcodes" value="london-postcodes@128">N15 - Seven Sisters</option>
	<option type="london-postcodes" value="london-postcodes@129">N16 - Stoke Newington, Stamford Hill</option>
	<option type="london-postcodes" value="london-postcodes@130">N17 - Tottenham</option>
	<option type="london-postcodes" value="london-postcodes@131">N18 - Upper Edmonton</option>
	<option type="london-postcodes" value="london-postcodes@132">N19 - Archway, Tufnell Park</option>
	<option type="london-postcodes" value="london-postcodes@133">N20 - Whetstone, Totteridge</option>
	<option type="london-postcodes" value="london-postcodes@134">N21 - Winchmore Hill</option>
	<option type="london-postcodes" value="london-postcodes@135">N22 - Wood Green, Alexandra Palace</option>
	<optgroup class="postcode_break" label="---------------------"></optgroup>
	<option type="london-postcodes" value="london-postcodes@136">NW1 - Regent's Park, Camden Town</option>
	<option type="london-postcodes" value="london-postcodes@137">NW2 - Cricklewood, Neasden</option>
	<option type="london-postcodes" value="london-postcodes@138">NW3 - Hampstead, Swiss Cottage</option>
	<option type="london-postcodes" value="london-postcodes@139">NW4 - Hendon, Brent Cross</option>
	<option type="london-postcodes" value="london-postcodes@140">NW5 - Kentish Town</option>
	<option type="london-postcodes" value="london-postcodes@141">NW6 - West Hampstead, Kilburn, Queens Park</option>
	<option type="london-postcodes" value="london-postcodes@142">NW7 - Mill Hill</option>
	<option type="london-postcodes" value="london-postcodes@143">NW8 - St John?s Wood</option>
	<option type="london-postcodes" value="london-postcodes@144">NW9 - Kinsbury, Colindale</option>
	<option type="london-postcodes" value="london-postcodes@145">NW10 - Willesden, Harlesden, Kensal Green</option>
	<option type="london-postcodes" value="london-postcodes@146">NW11 - Golders Green, Hampstead Gdn Suburb</option>
	<optgroup class="postcode_break" label="---------------------"></optgroup>
	<option type="london-postcodes" value="london-postcodes@147">RH1 - Redhill</option>
	<option type="london-postcodes" value="london-postcodes@148">RH2 - Reigate</option>
	<option type="london-postcodes" value="london-postcodes@149">RH3 - Betchworth</option>
	<option type="london-postcodes" value="london-postcodes@150">RH4 - Dorking</option>
	<option type="london-postcodes" value="london-postcodes@151">RH5 - Dorking</option>
	<option type="london-postcodes" value="london-postcodes@152">RH6 - Horley</option>
	<option type="london-postcodes" value="london-postcodes@153">RH7 - Lingfield</option>
	<option type="london-postcodes" value="london-postcodes@154">RH8 - Oxted</option>
	<option type="london-postcodes" value="london-postcodes@155">RH9 - Godstone</option>
	<option type="london-postcodes" value="london-postcodes@156">RH10 - Crawley</option>
	<option type="london-postcodes" value="london-postcodes@157">RH11 - Crawley</option>
	<option type="london-postcodes" value="london-postcodes@158">RH12 - Horsham</option>
	<option type="london-postcodes" value="london-postcodes@159">RH13 - Horsham</option>
	<option type="london-postcodes" value="london-postcodes@160">RH14 - Billingshurts</option>
	<option type="london-postcodes" value="london-postcodes@161">RH15 - Burgess Hill</option>
	<option type="london-postcodes" value="london-postcodes@162">RH16 - Haywards Heath</option>
	<option type="london-postcodes" value="london-postcodes@163">RH17 - Haywards Heath</option>
	<option type="london-postcodes" value="london-postcodes@164">RH18 - Forest Row</option>
	<option type="london-postcodes" value="london-postcodes@165">RH19 - East Grinstead</option>
	<option type="london-postcodes" value="london-postcodes@166">RH20 - Pulborough</option>
	<optgroup class="postcode_break" label="---------------------"></optgroup>
	<option type="london-postcodes" value="london-postcodes@167">RM1 - Romford</option>
	<option type="london-postcodes" value="london-postcodes@168">RM2 - Gidea Park</option>
	<option type="london-postcodes" value="london-postcodes@169">RM3 - Harold Wood</option>
	<option type="london-postcodes" value="london-postcodes@170">RM4 - Havering Atte Bower</option>
	<option type="london-postcodes" value="london-postcodes@171">RM5 - Collier Row</option>
	<option type="london-postcodes" value="london-postcodes@172">RM6 - Chadwell Heath</option>
	<option type="london-postcodes" value="london-postcodes@173">RM7 - Rush Green</option>
	<option type="london-postcodes" value="london-postcodes@174">RM8 - Becontree Heath</option>
	<option type="london-postcodes" value="london-postcodes@175">RM9 - Becontree</option>
	<option type="london-postcodes" value="london-postcodes@176">RM10 - Dagenham</option>
	<option type="london-postcodes" value="london-postcodes@177">RM11 - Hornchurch</option>
	<option type="london-postcodes" value="london-postcodes@178">RM12 - Elm Park</option>
	<option type="london-postcodes" value="london-postcodes@179">RM13 - Rainham</option>
	<option type="london-postcodes" value="london-postcodes@180">RM14 - Upminster</option>
	<option type="london-postcodes" value="london-postcodes@181">RM15 - South Ockendon</option>
	<option type="london-postcodes" value="london-postcodes@182">RM16 - Chafford Hundred</option>
	<option type="london-postcodes" value="london-postcodes@183">RM17 - Grays</option>
	<option type="london-postcodes" value="london-postcodes@184">RM18 - Tilbury</option>
	<option type="london-postcodes" value="london-postcodes@185">RM19 - Purfleet</option>
	<option type="london-postcodes" value="london-postcodes@186">RM20 - West Thurrock</option>
	<optgroup class="postcode_break" label="---------------------"></optgroup>
	<option type="london-postcodes" value="london-postcodes@187">SE1 - Waterloo, Bermondsey, Southwark, Borough</option>
	<option type="london-postcodes" value="london-postcodes@188">SE2 - Abbey Wood</option>
	<option type="london-postcodes" value="london-postcodes@189">SE3 - Blackheath, Westcombe Park</option>
	<option type="london-postcodes" value="london-postcodes@190">SE4 - Brockley, Crofton Park, Honor Oak Park</option>
	<option type="london-postcodes" value="london-postcodes@191">SE5 - Camberwell</option>
	<option type="london-postcodes" value="london-postcodes@192">SE6 - Catford, Hither Green, Bellingham</option>
	<option type="london-postcodes" value="london-postcodes@193">SE7 - Charlton</option>
	<option type="london-postcodes" value="london-postcodes@194">SE8 - Deptford</option>
	<option type="london-postcodes" value="london-postcodes@195">SE9 - Eltham, Mottingham</option>
	<option type="london-postcodes" value="london-postcodes@196">SE10 - Greenwich</option>
	<option type="london-postcodes" value="london-postcodes@197">SE11 - Lambeth</option>
	<option type="london-postcodes" value="london-postcodes@198">SE12 - Lee, Grove Park</option>
	<option type="london-postcodes" value="london-postcodes@199">SE13 - Lewisham, Hither Green</option>
	<option type="london-postcodes" value="london-postcodes@200">SE14 - New Cross, New Cross Gate</option>
	<option type="london-postcodes" value="london-postcodes@201">SE15 - Peckham, Nunhead</option>
	<option type="london-postcodes" value="london-postcodes@202">SE16 - Rotherhithe, South Bermonsey, Surrey Docks</option>
	<option type="london-postcodes" value="london-postcodes@203">SE17 - Walworth, Elephant &amp; Castle</option>
	<option type="london-postcodes" value="london-postcodes@204">SE18 - Woolwich, Plumstead</option>
	<option type="london-postcodes" value="london-postcodes@205">SE19 - Upper Norwood, Crystal Palace</option>
	<option type="london-postcodes" value="london-postcodes@206">SE20 - Penge, Anerley</option>
	<option type="london-postcodes" value="london-postcodes@207">SE21 - Dulwich</option>
	<option type="london-postcodes" value="london-postcodes@208">SE22 - East Dulwich</option>
	<option type="london-postcodes" value="london-postcodes@209">SE23 - Forest Hill</option>
	<option type="london-postcodes" value="london-postcodes@210">SE24 - Herne Hill</option>
	<option type="london-postcodes" value="london-postcodes@211">SE25 - South Norwood</option>
	<option type="london-postcodes" value="london-postcodes@212">SE26 - Sydenham</option>
	<option type="london-postcodes" value="london-postcodes@213">SE27 - West Norwood, Tulse Hill</option>
	<option type="london-postcodes" value="london-postcodes@214">SE28 - Thamesmead</option>
	<optgroup class="postcode_break" label="---------------------"></optgroup>
	<option type="london-postcodes" value="london-postcodes@215">SL0 - Iver</option>
	<option type="london-postcodes" value="london-postcodes@216">SL1 - Slough</option>
	<option type="london-postcodes" value="london-postcodes@217">SL2 - Slough</option>
	<option type="london-postcodes" value="london-postcodes@218">SL3 - Slough</option>
	<option type="london-postcodes" value="london-postcodes@219">SL4 - Windsor</option>
	<option type="london-postcodes" value="london-postcodes@220">SL5 - Ascot</option>
	<option type="london-postcodes" value="london-postcodes@221">SL6 - Maidenhead</option>
	<option type="london-postcodes" value="london-postcodes@222">SL7 - Marlow</option>
	<option type="london-postcodes" value="london-postcodes@223">SL8 - Bourne End</option>
	<option type="london-postcodes" value="london-postcodes@224">SL9 - Gerrards Cross</option>
	<optgroup class="postcode_break" label="---------------------"></optgroup>
	<option type="london-postcodes" value="london-postcodes@225">SM1 - Sutton</option>
	<option type="london-postcodes" value="london-postcodes@226">SM2 - Belmont</option>
	<option type="london-postcodes" value="london-postcodes@227">SM3 - Cheam</option>
	<option type="london-postcodes" value="london-postcodes@228">SM4 - Morden</option>
	<option type="london-postcodes" value="london-postcodes@229">SM5 - Carshalton</option>
	<option type="london-postcodes" value="london-postcodes@230">SM6 - Wallington</option>
	<option type="london-postcodes" value="london-postcodes@231">SM7 - Banstead</option>
	<optgroup class="postcode_break" label="---------------------"></optgroup>
	<option type="london-postcodes" value="london-postcodes@232">SW1 - Westminster, Belgravia, Pimlico</option>
	<option type="london-postcodes" value="london-postcodes@233">SW2 - Brixton, Streatham Hill</option>
	<option type="london-postcodes" value="london-postcodes@234">SW3 - Chelsea, Brompton</option>
	<option type="london-postcodes" value="london-postcodes@235">SW4 - Clapham</option>
	<option type="london-postcodes" value="london-postcodes@236">SW5 - Earl?s Court</option>
	<option type="london-postcodes" value="london-postcodes@237">SW6 - Fulham, Parson's Green</option>
	<option type="london-postcodes" value="london-postcodes@238">SW7 - South Kensington</option>
	<option type="london-postcodes" value="london-postcodes@239">SW8 - South Lambeth, Nine Elms</option>
	<option type="london-postcodes" value="london-postcodes@240">SW9 - Stockwell, Brixton</option>
	<option type="london-postcodes" value="london-postcodes@241">SW10 - West Brompton, World's End</option>
	<option type="london-postcodes" value="london-postcodes@242">SW11 - Battersea, Clapham Junction</option>
	<option type="london-postcodes" value="london-postcodes@243">SW12 - Balham</option>
	<option type="london-postcodes" value="london-postcodes@244">SW13 - Barnes, Castelnau</option>
	<option type="london-postcodes" value="london-postcodes@245">SW14 - Mortlake, East Sheen</option>
	<option type="london-postcodes" value="london-postcodes@246">SW15 - Putney, Roehampton</option>
	<option type="london-postcodes" value="london-postcodes@247">SW16 - Streatham, Norbury</option>
	<option type="london-postcodes" value="london-postcodes@248">SW17 - Tooting</option>
	<option type="london-postcodes" value="london-postcodes@249">SW18 - Wandsworth, Earlsfield</option>
	<option type="london-postcodes" value="london-postcodes@250">SW19 - Wimbledon, Merton</option>
	<option type="london-postcodes" value="london-postcodes@251">SW20 - South Wimbledon, Raynes Park</option>
	<optgroup class="postcode_break" label="---------------------"></optgroup>
	<option type="london-postcodes" value="london-postcodes@252">TW1 - Twickenham</option>
	<option type="london-postcodes" value="london-postcodes@253">TW2 - Whitton</option>
	<option type="london-postcodes" value="london-postcodes@254">TW3 - Hounslow</option>
	<option type="london-postcodes" value="london-postcodes@255">TW4 - Hounslow</option>
	<option type="london-postcodes" value="london-postcodes@256">TW5 - Heston</option>
	<option type="london-postcodes" value="london-postcodes@257">TW6 - Heathrow</option>
	<option type="london-postcodes" value="london-postcodes@258">TW7 - Isleworth</option>
	<option type="london-postcodes" value="london-postcodes@259">TW8 - Brentford</option>
	<option type="london-postcodes" value="london-postcodes@260">TW9 - Richmond Upon Thames</option>
	<option type="london-postcodes" value="london-postcodes@261">TW10 - Ham</option>
	<option type="london-postcodes" value="london-postcodes@262">TW11 - Teddington</option>
	<option type="london-postcodes" value="london-postcodes@263">TW12 - Hampton</option>
	<option type="london-postcodes" value="london-postcodes@264">TW13 - Feltham</option>
	<option type="london-postcodes" value="london-postcodes@265">TW14 - Hatton</option>
	<option type="london-postcodes" value="london-postcodes@266">TW15 - Ashford</option>
	<option type="london-postcodes" value="london-postcodes@267">TW16 - Sunbury On Thames</option>
	<option type="london-postcodes" value="london-postcodes@268">TW17 - Shepperton</option>
	<option type="london-postcodes" value="london-postcodes@269">TW18 - Staines</option>
	<option type="london-postcodes" value="london-postcodes@270">TW19 - Stanwell</option>
	<option type="london-postcodes" value="london-postcodes@271">TW20 - Egham</option>
	<optgroup class="postcode_break" label="---------------------"></optgroup>
	<option type="london-postcodes" value="london-postcodes@272">UB1 - Southall</option>
	<option type="london-postcodes" value="london-postcodes@273">UB2 - Norwood Green</option>
	<option type="london-postcodes" value="london-postcodes@274">UB3 - Hayes</option>
	<option type="london-postcodes" value="london-postcodes@275">UB4 - Yeading</option>
	<option type="london-postcodes" value="london-postcodes@276">UB5 - Norholt</option>
	<option type="london-postcodes" value="london-postcodes@277">UB6 - Greenford</option>
	<option type="london-postcodes" value="london-postcodes@278">UB7 - West Drayton</option>
	<option type="london-postcodes" value="london-postcodes@279">UB8 - Uxbridge</option>
	<option type="london-postcodes" value="london-postcodes@280">UB9 - Denham</option>
	<option type="london-postcodes" value="london-postcodes@281">UB10 - Hillingdon</option>
	<option type="london-postcodes" value="london-postcodes@282">UB11 - Uxbridge</option>
	<optgroup class="postcode_break" label="---------------------"></optgroup>
	<option type="london-postcodes" value="london-postcodes@283">W1 - Mayfair, Marylebone, Soho</option>
	<option type="london-postcodes" value="london-postcodes@284">W2 - Bayswater, Paddington</option>
	<option type="london-postcodes" value="london-postcodes@285">W3 - Acton</option>
	<option type="london-postcodes" value="london-postcodes@286">W4 - Chiswick</option>
	<option type="london-postcodes" value="london-postcodes@287">W5 - Ealing</option>
	<option type="london-postcodes" value="london-postcodes@288">W6 - Hammersmith</option>
	<option type="london-postcodes" value="london-postcodes@289">W7 - Hanwell</option>
	<option type="london-postcodes" value="london-postcodes@290">W8 - Kensington</option>
	<option type="london-postcodes" value="london-postcodes@291">W9 - Maida Vale, Warwick Avenue</option>
	<option type="london-postcodes" value="london-postcodes@292">W10 - Ladbroke Grove, North Kensington</option>
	<option type="london-postcodes" value="london-postcodes@293">W11 - Notting Hill, Holland Park</option>
	<option type="london-postcodes" value="london-postcodes@294">W12 - Shepherd's Bush</option>
	<option type="london-postcodes" value="london-postcodes@295">W13 - West Ealing</option>
	<option type="london-postcodes" value="london-postcodes@296">W14 - West Kensington</option>
	<optgroup class="postcode_break" label="---------------------"></optgroup>
	<option type="london-postcodes" value="london-postcodes@297">WC1 - Bloomsbury, Gray's Inn</option>
	<option type="london-postcodes" value="london-postcodes@298">WC2 - Covent Garden, Holborn, Strand</option>
	<optgroup class="postcode_break" label="---------------------"></optgroup>
	<option type="london-postcodes" value="london-postcodes@299">WD3 - Rickmansworth</option>
	<option type="london-postcodes" value="london-postcodes@300">WD4 - Kings Langley</option>
	<option type="london-postcodes" value="london-postcodes@301">WD5 - Abbots Langley</option>
	<option type="london-postcodes" value="london-postcodes@302">WD6 - Borehamwood</option>
	<option type="london-postcodes" value="london-postcodes@303">WD7 - Radlett</option>
	<option type="london-postcodes" value="london-postcodes@304">WD17 - Watford</option>
	<option type="london-postcodes" value="london-postcodes@305">WD18 - Watford</option>
	<option type="london-postcodes" value="london-postcodes@306">WD19 - Watford</option>
	<option type="london-postcodes" value="london-postcodes@307">WD23 - Bushey</option>
	<option type="london-postcodes" value="london-postcodes@308">WD24 - Watford</option>
	<option type="london-postcodes" value="london-postcodes@309">WD25 - Watford</option>
<?php
    $out = ob_get_contents();
    ob_end_clean();
    
    return $out;
}

function penguins_booking_form() {
    ob_start();
?>
<div class="penguins_booking_form_area">

    <div style="margin: 0px 0 15px 0;" align="left"><a target="_blank" href="http://www.penguinsltd.co.uk/?ref_id={ref_id}"><img src="{bbf_plugin_url}/images/penguinsltd-logo.png" width="130" height="39" alt="" /></a></div>
    
    <div class="widget-title">Book airport transfer</div>
    
    <div style="margin: 0 0 10px 0;">Looking for airport transfer? Get the instant quote now!</div>
    
    <form target="{bbf_form_target}" method="post" class="penguins_bookings_quote_form" action="http://www.penguinsltd.co.uk/cars.html">
            <div><strong>Pick-Up Point</strong></div>
            <div>
               <select required="required" class="penguinsltd_select_from" name="txtfrom" class="req">
                {destinations_dd_options}
               </select>
            </div>

            <div><strong>Drop Off Point</strong></div>
            <div>
                <select required="required" class="penguinsltd_select_to" name="txtto" class="req">
                {destinations_dd_options}
                </select>
            </div>

            <div><strong>Passengers</strong> <em style="font-size:11px; margin-top:40px;">(including children)</em></div>
            <div>
                <select required="required" class="optpeople req" name="optpeople">
                    <option value="" selected="selected">Select</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                </select>
            </div>

            <div style="margin: 10px 0;">
                <input type="submit" name="submit_form_btn" value="Get A Quote" />
            </div>

            <div>Any other destination? <a target="_blank" href="http://www.penguinsltd.co.uk/en/contact.html?ref_id={ref_id}">Contact us!</a></div>
            
            <input type="hidden" name="ref_id" value="{ref_id}" />
    </form>      
</div>
<?php
    $out = ob_get_contents();
    ob_end_clean();
    
    return $out;
}
?>