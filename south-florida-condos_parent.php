<?php
/*
*  Home Parent Template
*/

get_header();
?>

    <!-- Page Head -->
    <?php get_template_part("banners/default_page_banner"); ?>
<!-- <h1>Home Parent (Condo city Template)</h1> -->
    <!-- Content -->
    <div class="container contents single">


    <!--=============================================
    =            Moose Breadcrumbs Block            =
    ==============================================-->

    <section class="bread-search-block row-fluid">

        <article class="span8 text-center">

            <div class="breadcrumbs pull-left" typeof="BreadcrumbList" vocab="http://schema.org/">
                <?php if(function_exists('bcn_display'))
                {
                    bcn_display();
                }?>
            </div>
            
        </article>
        <article class="span4">

            <?php //echo get_search_form(); ?>
            
          <div class="aps-search-form">
                <form role="search" method="get" class="pure-form" action="http://mical.local/">
                    <input id="type-post-name" autofocus="" type="text" name="s" placeholder="Search Site..." data-sc="[object HTMLDivElement]" autocomplete="off">
                    <input type="submit" value="Go" class="search-submit">
                </form>
            </div>       
            <script>
                var demo1 = new autoComplete({
                    selector: '#type-post-name',
                    minChars: 1,
                    source: function(term, suggest){
                        term = term.toLowerCase();
                        var choices = ['Lighthouse Point Waterfront Homes', 'Lighthouse Point Ocean Access Homes', 'Pompano Beach Beachfront Homes', 'Pompano Beach Waterfront Homes', 'Pompano Beach Ocean Access', 'HIllsboro Beach Beachfront Homes', 'HIllsboro Beach Waterfront Homes', 'HIllsboro Beach Ocean Access Homes', 'Fort Lauderdale Beach Front Homes', 'Fort Lauderdale Waterfront Homes', 'Fort Lauderdale Ocean Access Homes', 'Coral Ridge Country Club Beachfront Homes', 'Coral Ridge Country Club Waterfront Homes', 'Coral Ridge Country Club Ocean Access Homes', 'Poinsettia Heights Beachfront Homes', 'Poinsettia Heights Waterfront Homes', 'Poinsettia Heights Ocean Access Homes', 'The Landings Beachfront Homes', 'The Landings Waterfront Homes', 'The Landings Ocean Access', 'Victoria Park Beachfront Homes', 'Victoria Park Waterfront Homes', 'Victoria Park Ocean Access', 'Fort Lauderdale Beachfront Condos', 'Fort Lauderdale Waterfront Condos', 'Fort Lauderdale Ocean Access Condos', 'Pompano Beach Beachfront Condos', 'Pompano Beach Waterfront Condos', 'Pompano Beach Ocean Access Condos', 'Deerfield Beach Beachfront Condos', 'Deerfield Beach Ocean Access Condos', 'Deerfield Beach Waterfront Condos', 'Lighthouse Point Beachfront Condos', 'Lighthouse Point Waterfront Condos', 'Lighthouse Point Ocean Access Condos', 'HIllsboro Beach Beachfront Condos', 'HIllsboro Beach Ocean Access Condos', 'HIllsboro Beach Waterfront Condos', 'Deerfield Beach Beachfront homes', 'Deerfield Beach Waterfront Homes', 'Deerfield Beach Ocean Access Homes', 'Lighthouse Point', 'Home', 'Harborage Isle homes for sale $450k to $1 million', 'Contact Page Form', 'Deerfield Beach Waterfront Homes for sale $450k to $1 Million', 'Deerfield Beach Waterfront Homes for sale $1 Million to $1.5 Million', 'Deerfield Beach Waterfront Homes for sale $1.5 Million to $7 Million', 'Pompano Beach Waterfront Homes for sale $450k to $1 Million', 'Pompano Beach Waterfront Homes for sale $1 Million to $1.5 Million', 'Pompano Beach Waterfront Homes for sale $1.5 Million to $7 Million', 'Las Olas Isles homes for sale $450k to $1 Million', 'Las Olas Isles homes for sale $1 million to $1.5 Million', 'Las Olas Isles home for sale $1.5 Million to $7 Million', 'Harbor Beach homes for sale $450k to $1 Million', 'Harbor Beach homes for sale $1 Million to $1.5 Million', 'Harbor Beach homes for sale $1.5 Million to $7 Million', 'Rio Vista homes for sale $450k to $1 Million', 'Rio Vista homes for sale $1 Million to $1.5 Million', 'Rio Vista homes for sale $1.5 Million to $7 Million', 'Las Olas by the Sea homes for sale $450k to $1 Million', 'Las Olas by the Sea homes for sale $1 Million to $1.5 Million', 'Las Olas by the Sea homes for sale $1.5 Million to $7 Million', 'Coral Ridge Country Club homes for sale $450k to $1 Million', 'Coral Ridge Country Club homes for sale $1 Million to $1.5 Million', 'Coral Ridge Country Club homes for sale $1.5 Million to $7 Million', 'Victoria Park homes for sale $450k to $1 Million', 'Victoria Park homes for sale $1 Million to $1.5 Million', 'Victoria Park homes for sale $1.5 Million to $7 Million', 'Victoria Isles homes for sale $450k to $1 Million', 'Victoria Isles homes for sale $1 Million to $1.5 Million', 'Victoria Isles homes for sale $1.5 Million to $7 Million', 'The Landings homes for sale $450k to $1 Million', 'The Landings homes for sale $1 Million to $1.5 Million', 'The Landings homes for sale $1.5 Million to $7 Million', 'Lighthouse Point homes for sale $450k to $1 Million', 'Lighthouse Point homes for sale $1 Million to $1.5 Million', 'Lighthouse Point homes for sale $1.5 Million to $7 Million', 'Sea Ranch Lakes homes for sale $450k to $1 Million', 'Sea Ranch Lakes homes for sale $1 Million to $1.5 Million', 'Sea Ranch Lakes homes for sale $1.5 Million to $7 Million', 'Condo Post Links', 'Condo Post Link 1', 'Condo Post Link 1 Text', 'Condo Post Link 2', 'Condo Post Link 2 Text', 'Condo Post Link 3', 'Condo Post Link 3 Text', 'Contact Form_buyer', 'Sellers Page Contact Form', 'Contact form 1', 'Moose Wrapper', 'Address', 'Advanced Search', 'Basic Search', 'Email Update Signup', 'Listing ID', 'Map Search', 'Featured', 'Featured Open Houses', 'Featured Virtual Tours', 'Results', 'Sold/Pending', 'Supplemental', 'Details', 'Link Showcase', 'Mortgage Calculator', 'Contact', 'Home Valuation', 'My Account', 'User Login', 'User Signup', 'Browse by City', 'Sitemap', 'XML Sitemap', 'Muse Residences &#8211; Muse Sunny Isles Condo', 'Coconut Grove Pre construction', 'Grove at Grand Bay &#8211; Grove at Grand Bay Condos for Sale', 'Park Grove Condo &#8211; Park Grove Condos for Sale Coconut Grove', 'Peloro Miami Beach Condo &#8211; Miami Beach Waterfront Condos', 'Tropic Isle Homes for Sale &#8211; Tropic Isle Waterfront Homes', 'Williams Island Condos for Sale &#8211; Aventura Waterfront Condos', 'autoNumeric.min.js?ver=4.5.2', 'ninja forms display.min.js?nf_ver=2.9.42.1&#038;ver=4.5.2', 'jquery.maskedinput.min.js?ver=4.5.2', 'jquery.maskedinput.min.js', 'Title 1', 'Ft. Lauderdale Waterfront Homes &#8211; South Florida Luxury Homes', 'Balboa Beach Houses &#8211; Beach Homes for Sale in Hollywood', '101 Key Biscayne &#8211; 101 Key Biscayne Lofts for Sale', 'Harbour Park Condo &#8211; Harbour Park Condo in Bay Harbor Island', 'Kai at Bay Harbor &#8211; Kai at Bay Harbor Condos for Sale', 'Turnberry Ocean Club &#8211; Turnberry Ocean Club Condo', 'Louver House Condo &#8211; Louver House Miami Beach', 'Jade Signature Condos for Sale -Sunny Isles Oceanfront Condo', 'Mansions at Acqualina Condos for Sale &#8211; Sunny Isles Ocean', 'O Residences &#8211; O Residences Condo in Bay Harbor Island', 'Bal Harbour Pre construction', 'Oceana Bal Harbour Condo &#8211; Bal Harbour Oceanfront Condo', 'Ritz Carlton Residences Miami Beach- Ritz Carlton Miami', 'Acqua Marina Residences &#8211; Ft. Lauderdale Waterfront Townhomes', 'Hollywood Pre construction Condos Hollywood Preconstruction', 'H3 Hollywood &#8211; H3 Hollywood Condos for Sale', 'Sky Harbor Hollywood Condos for Sale &#8211; Sky Harbor', 'Sage Beach Condos for Sale &#8211; Hollywood Oceanfront Condos', 'Costa Hollywood Condo &#8211; Hollywood Preconstruction Condo', 'Hyde Beach Resort &#038; Residences Condos for Sale in Hollywood', 'Oceanbleau Condo &#8211; Luxury Waterfront Condo in Hollywood', 'Hyde Beach House Condo &#8211; Hollywood Intracoastal Condo', 'Miami Preconstruction Condos for Sale: built 2016   2018', 'Miami Beach Pre construction', 'Sunny Isles Pre construction', 'One Ocean Condo &#8211; One Ocean South Beach Condos for Sale', 'Chateau Beach Residences &#8211; Sunny Isles Oceanfront Condo', 'Fisher Island Pre construction', 'Porsche Design Tower Miami &#8211; Porsche Design Residences', 'L&#8217;Atelier Miami Beach Condo &#8211; LAtelier Condo', 'Palau Sunset Harbour &#8211; Miami Beach Waterfront Condo', 'Atlantic 15 &#8211; Sunny Isles Homes for Sale', 'The Bath Club Estates &#8211; A Miami Beach Oceanfront Condo', 'Surfside Pre construction', 'Beach House 8 Condo &#8211; Miami Beach Oceanfront Condos', 'Iris on the Bay &#8211; Miami Beach Waterfront Townhomes for Sale', 'Key Biscayne Pre construction', 'Ritz Carlton Residences Sunny Isles Beach', 'Bay Harbor Island Pre construction', 'Fendi Chateau Residences for Sale &#8211; Fendi Chateau Condo', 'Villa Diamante Villas &#8211; Jupiter, FL Townhomes near the Beach', 'Pompano Beach Pre construction', 'Four Seasons Ft. Lauderdale Residences &#8211; Four Seasons', '14th &#038; Ocean Townhomes &#8211; Pompano Beach Townhomes', 'Sabbia Beach Condo &#8211; Pompano Beach Oceanfront Condo', 'Seagate Yacht Club Residences Delray Waterfront Townhome', 'Auberge Beach Residences and Spa &#8211; Ft. Lauderdale Condo', 'The Ocean Resort Residences &#8211; Conrad Ft. Lauderdale', 'Paramount Residences &#8211; Ft. Lauderdale Oceanfront Condos', 'Aventura Pre construction', 'Echo Aventura Condo &#8211; Aventura Waterfront Condos', 'Botaniko Weston &#8211; Modern Luxury New Homes in Weston', 'Adagio Ft. Lauderdale Beach &#8211; Adagio Fort Lauderdale Beach Condo', 'Privé Condos for Sale in Aventura &#8211; Aventura Waterfront Condo', 'Water Club North Palm Beach &#8211; Palm Beach Preconstruction', 'Marina Palms &#8211; Marina Palms Condos for Sale with Boat Slips', 'Lauderdale by the Sea Pre construction', 'Gale Ft. Lauderdale Residences &#8211; Gale Ft. Lauderdale Condo', 'Sky 230 &#8211; Sky 230 Townhomes in Lauderdale by the Sea', 'Aquamar Las Olas Condo &#8211; Las Olas Waterfront Condo', 'Bay Colony Juno Beach Condo &#8211; Juno Beach Bay Colony', 'Villas by the Sea new Condos scheduled for delivery in 2016', 'Akoya at Boca West Condo &#8211; Boca Raton Luxury Condos', '321 at Water&#8217;s Edge &#8211; 321 Ft. Lauderdale Condo', '3200 South Ocean Condo &#8211; Highland Beach Intracoastal Condo', 'Las Olas by the Sea Homes for Sale &#8211; Fort Lauderdale Beach Homes', 'Bermuda Riviera Homes for Sale &#8211; East Ft. Lauderdale Homes', 'The Cove Homes for Sale in Deerfield Beach- The Cove', 'Sunrise Key Homes for Sale &#8211; Homes for Sale in Sunrise Key', 'Bay Colony Homes for Sale &#8211; Homes for Sale in Bay Colony', 'South Florida Oceanfront Homes &#8211; Beachfront Homes', 'South Florida Preconstruction Condos', 'Palm Beach Preconstruction Condos &#8211; Palm Beach Condos', 'Tower 155 Condo &#8211; East Boca Pre construction Luxury Condo', 'Ft. Lauderdale Preconstruction Condos &#8211; Ft. Lauderdale Condos', 'Aquarius 15 Condo &#8211; Ft. Lauderdale Waterfront Condo', 'Riva Condo &#8211; Riva Condos for Sale in Ft. Lauderdale', 'AquaBlu Condo &#8211; Modern Ft. Lauderdale Intracoastal Condo', 'Ocean Eighteen Condo &#8211; Palm Beach Oceanfront Condo', 'Azure Palm Beaches &#8211; Palm Beach Waterfront Condo', 'Aqualuna Las Olas Condos for Sale &#8211; Aqualuna Las Olas', 'Palms on Venice Condo &#8211; Ft. Lauderdale Waterfront Condo', 'Lauderdale by the Sea Homes for Sale &#8211; LBTS Homes for Sale', 'Parkland Golf and Country Club Homes for Sale  PGCC Homes', 'Tropical Point Homes for Sale &#8211; Ft. Lauderdale Waterfront Home', 'Coral Ridge Country Club Homes for Sale &#8211; Coral Ridge Country Club', 'Sea Ranch Lakes Homes for Sale &#8211; Sea Ranch Lakes', 'Harborage Isle Homes for Sale &#8211; The Harborage Homes for Sale', 'Harbor Islands Homes for Sale &#8211; Harbor Islands in Hollywood, FL', 'Sunrise Intracoastal Homes &#8211; Fort Lauderdale Waterfront Homes', 'Victoria Isles Homes for Sale &#8211; Homes for Sale in Victoria Isles', 'The Landings Homes for Sale &#8211; The Landings in Ft. Lauderdale', 'Deerfield Beach Waterfront Homes &#8211; East Deerfield Homes', 'Hollywood Lakes Homes for Sale &#8211; East Hollywood, FL Homes', 'Las Olas Homes &#8211; Las Olas Isles Homes for Sale', 'Lighthouse Point Waterfront Homes &#8211; Lighthouse Point Homes', 'Victoria Park Homes for Sale &#8211; Homes for Sale in Victoria Park', 'Luna Ocean Residences Condo -Pompano Beach Oceanfront', 'Tiara East Condo &#8211; Deerfield Beach Oceanfront Condos', 'Harbour House Condo &#8211; Bal Harbour Oceanfront Condos', 'South Florida Luxury Homes', 'East Ft. Lauderdale Homes &#8211; Homes in East Fort Lauderdale', 'Hillsboro Beach Oceanfront Homes &#8211; Hillsboro Mile Homes', 'Golden Isles Homes for Sale &#8211; Hallandale Waterfront Homes', 'Pompano Beach Waterfront Homes &#8211; East Pompano Beach Homes', 'Boca Raton Waterfront Homes &#8211; East Boca Homes for Sale', 'Harbor Beach Homes for Sale in East Ft. Lauderdale', 'Idlewyld Homes for Sale &#8211; Ft. Lauderdale Waterfront Homes', 'Parkland Homes for Sale &#8211; Parkland Gated Communities', 'Hollywood Homes for Sale &#8211; East Hollywood Homes for Sale', 'Rio Vista Isles Homes &#8211; Rio Vista Homes for Sale in Ft. Lauderdale', 'Fort Lauderdale Oceanfront Homes &#8211; Lauderdale Beach Homes', 'Golden Beach Homes for Sale &#8211; Golden Beach Homes', 'Heron Bay Homes for Sale Heron Bay Parkland &#038; Coral Springs', 'Delray Beach Waterfront Homes for Sale &#8211; East Delray Beach Homes', 'Nobel Point Condo &#8211; Pompano Beach Waterfront Condos', 'Residences at the Ritz Carlton Coconut Grove', 'Oasis Singer Island Condo &#8211; Palm Beach Oceanfront Condo', 'Coconut Grove Residences Condo &#8211; Ft. Lauderdale Oceanfront Condo', 'Kenilworth Condos for Sale &#8211; Bal Harbour Oceanfront Condo', 'Key Colony Condos for Sale &#8211; Key Biscayne Oceanfront Condo', 'Jackson Tower Condo &#8211; Las Olas Condos for Sale', 'One Singer Island Condo &#8211; Palm Beach Oceanfront Condos', 'Cristelle Condos for Sale &#8211; Lauderdale by the Sea Condo', 'Las Olas Grand Condo &#8211; Condos for Sale in Las Olas Grand', 'La Rive Condo in Fort Lauderdale &#8211; La Rive Condos for Sale', 'Turnberry Ocean Colony &#8211; Sunny Isles Oceanfront Condo', 'Luxuria Condos for Sale &#8211; Boca Raton Oceanfront Condo', 'Aquazul Condo &#8211; Aquazul Condos for Sale', 'Sands Pointe Condo &#8211; Sunny Isles Oceanfront Condo', 'The Astor Condo &#8211; Astor Condos for Sale in Delray Beach', 'Bal Harbour 101 Condo &#8211; Bal Harbour Oceanfront Condos', 'Ocean Seven Residences &#8211; Surfside Oceanfront Townhomes', 'Champlain Towers Condo &#8211; Champlain Towers Condos for Sale', 'Solimar Condo &#8211; Solimar Condos for Sale in Surfside', 'Water&#8217;s Edge Estates Townhomes for Sale in Hillsboro Beach', 'Atlantic Hotel Ft. Lauderdale &#8211; Atlantic Condotel', '1200 Hillsboro Mile &#8211; 1200 Hillsboro Mile Condos for Sale', 'Villa Octagon Condo &#8211; Ft. Lauderdale Oceanfront Condos', 'Hampton Beach Club Condo &#8211; Hampton Beach Club Condos', 'Diplomat Oceanfront Residences Condos for Sale', 'Trump Towers Condo &#8211; Sunny Isles Oceanfront Condo', 'Beach Club Condos for Sale &#8211; Beach Club Condo Hallandale', '1 Ocean Blvd Condo &#8211; East Deerfield Beach Condo', 'Mizner Grand Condo &#8211; Boca Raton Waterfront Condos', 'Pinnacle Condos for Sale &#8211; Sunny Isles Oceanfront Condo', 'Ocean Grande Condos for Sale &#8211; Hillsboro Beach condos', 'Symphony Condos for Sale &#8211; Las Olas Condos', 'Ocean Four Condo', 'Oriana by the Sea Condo &#8211; Lauderdale by the Sea Oceanfront Condo', 'Adagio on the Bay Condo &#8211; Ft. Lauderdale Waterfront Condos', 'Apogee South Beach Condo &#8211; Apogee Condos for Sale', 'ICON South Beach Condos for Sale &#8211; ICON South Beach', 'Fisher Island Homes &#8211; Fisher Island Oceanfront Condos', 'Athena Condos for Sale &#8211; Boca Raton Oceanfront Condos', 'Ocean Palms Condos for Sale &#8211; Hollywood Oceanfront Condo', 'Alhambra Place Condo &#8211; Alhambra Place Condos for Sale', 'Surfside Condos', 'Cloisters on the Bay- Cloisters on the Bay Townhomes for Sale', 'Waverly at Surfside Beach Condo &#8211; Surfside Oceanfront Condo', 'Azure Condo &#8211; Azure Condos for Sale in Surfside', 'Mirage Condo &#8211; Mirage Condos for Sale in Surfside', 'Peninsula on the Intracoastal Boynton Beach Waterfront Condo', 'Ritz Carlton Residences Singer Island Condo -2700 N Ocean', 'Hillsboro Bay by the Sea &#8211; Pompano Beach Oceanfront', 'Ocean Breeze Townhomes &#8211; Ocean Ridge Townhomes', 'The Pointe at Pompano Beach Condo -Pompano Beach Waterfront', 'Via Delfino Condo &#8211; Singer Island Oceanfront Condos', 'Marina Grande Condo &#8211; Palm Beach Intracoastal Condo', 'Ocean&#8217;s Edge Condo &#8211; Singer Island Oceanfront Condo', 'The Plaza at Oceanside Pompano Beach Condos for Sale', 'Toscana Condos for Sale &#8211; Highland Beach Oceanfront Condo', 'Sonata Beach Club Condo &#8211; Pompano Beach Oceanfront Condo', 'One Watermark Place Condo &#8211; West Palm Beach Intracoastal', 'Bermuda Isles at Santa Barbara Townhome in Pompano Beach', 'Riverside Grande Condo &#8211; Pompano Beach Intracoastal Condo', 'Ocean Pearl Townhomes for Sale in Pompano Beach', 'Mizner Court Condo &#8211; Boca Raton Waterfront Condos', 'Beachfront at Singer Island Condo &#8211; Palm Beach Oceanfront', 'Santa Barbara Estates Townhomes Pompano Beach Waterfront', 'Bellaria Condo &#8211; Palm Beach Oceanfront Condos for Sale', 'Mizner Tower Condo &#8211; Boca Raton Waterfront Condos', 'South Pointe Tower Condos for Sale &#8211; Miami Bayfront Condos', 'Palm Beach Oceanfront Condos &#8211; Palm Beach Luxury Condos', 'Pompano Beach Waterfront Condos &#8211; East Pompano Beach', '4001 North Ocean Condos &#8211; Gulfstream Oceanfront Condo', 'Casa Costa Condo &#8211; Boynton Beach Waterfront Condos', 'The Addison Condo &#8211; Boca Raton Oceanfront Condos', 'The Estuary &#8211; Estuary Townhomes in Delray Beach', 'Captain&#8217;s Walk Condos &#038; Townhomes in Pelican Harbor', 'Le Sanctuaire Condo &#8211; Boca Raton Oceanfront Condos', 'The Excelsior Condo &#8211; Boca Raton Oceanfront Condo', 'Aragon Condo &#8211; Boca Raton Oceanfront Condos', 'Seagate Residences &#8211; Seagate Residences Condos for Sale', 'One Thousand Ocean Condo &#8211; Palm Beach Oceanfront Condo', 'Trump Plaza Condo &#8211; West Palm Beach Luxury Condo', 'Aqua Lofts Townhomes for Sale &#8211; Pompano Beach Waterfront', 'Dolcevita Condo &#8211; Singer Island Oceanfront Condos', 'Ritz Carlton Fort Lauderdale &#8211; Ft. Lauderdale Ritz Carlton', 'Ocean Vue Townhomes Deerfield Beach Waterfront Townhomes', 'Setai Condo &#8211; Setai Resort &#038; Residences Condos for Sale', 'Continuum Condos for Sale &#8211; Continuum South Tower Condos', 'Acqualina Condos for Sale -Sunny Isles Oceanfront Condos', 'Oceania Condo &#8211; Sunny Isles Oceanfront Condo', 'Europa by the Sea Condos for Sale &#8211; Lauderdale by the Sea', 'Portofino Tower- Portofino Tower Condos for Sale', 'Regalia Condos for Sale &#8211; Sunny Isles Oceanfront Condo', 'Puerta del Sol Condo &#8211; East Deerfield Beach Condo', 'Ocean House Condo &#8211; Ocean House Condos for Sale', 'Apogee Beach Condos for Sale &#8211; Hollywood Oceanfront Condo', 'Aventura Waterfront Condos &#8211; Aventura Luxury Condos', 'Akoya Condos for Sale &#8211; Miami Oceanfront Condos', 'Watergarden Condo &#8211; Las Olas Condos for Sale', 'Residences at Vizcaya &#8211; Coconut Grove Waterfront Condo', 'Ocean One Condo', 'Ocean Plaza Condo &#8211; Deerfield Beach Oceanfront Condo', 'Pelican Grand Beach Resort- Pelican Grand Condotel', 'Orchid Beach Condo &#8211; Deerfield Beach Oceanfront Condo', 'The Palace at Bal Harbour Condo &#8211; Bal Harbour Oceanfront Condo', 'Fountains on Ocean Blvd Condos for Sale in Ft. Lauderdale', 'Aquavita Las Olas Condos for Sale &#8211; Las Olas Condos', 'La Perla Condo &#8211; Sunny Isles Oceanfront Condo', 'Edition Residences &#8211; Edition Miami Beach Condo', 'Il Villaggio Condos for Sale in Miami Beach- Il Villaggio Condo', 'Sapphire Condo in Ft. Lauderdale &#8211; Sapphire Condos for Sale', 'Hillsboro Beach Oceanfront Condos -Hillsboro Beach Waterfront', 'Bal Harbour Condos', 'Mediterranea Condos for Sale -Hillsboro Beach Condo', 'Kingsley Arms Condo &#8211; Hillsboro Beach Oceanfront Condo', 'Ritz Carlton Bal Harbour Condo &#8211; Bal Harbour Oceanfront Condo', 'Bellini Bal Harbour Condo &#8211; Bal Harbour Oceanfront Condo', 'Majestic Tower Condo &#8211; Bal Harbour Oceanfront Condo', 'St. Regis Bal Harbour Condo -Bal Harbour Oceanfront Condos', 'Aria at Las Olas Condo &#8211; Aria Condo &#8211; Las Olas Condos', 'Lauderdale by the Sea Oceanfront Condos &#8211; LBTS Condos', 'Corniche Condos for Sale &#8211; Lauderdale by the Sea Condos', 'Sea Ranch Club Condo &#8211; Sea Ranch Club Condos for Sale', 'Cristelle Cay Condo &#8211; Condos for Sale in Cristelle Cay', 'Villas of Sunrise Bay Condo &#8211; Ft. Lauderdale Waterfront Condo', 'Murano at Portofino Condo &#8211; Miami Beach Condos', 'La Cascade Condos for Sale Ft. Lauderdale Intracoastal Condo', 'Island Point Condo &#8211; Deerfield Beach Oceanfront Condos', 'Renaissance on the Ocean &#8211; Hollywood Oceanfront Condo', 'Grovenor House Condo &#8211; Grovenor House Condos for Sale', 'Oceana Key Biscayne Condos for Sale Oceana Key Biscayne', 'Point of Americas Condo &#8211; Ft. Lauderdale Oceanfront Condo', '1200 The Ocean Condo &#8211; Hillsboro Beach Oceanfront Condos', 'Miami Beach Condos', 'Bath Club Residences- Bath Club Condos for Sale', 'Blue Diamond Condo &#8211; Blue and Green Diamond Condo', 'Glass Condo &#8211; Glass 120 Ocean &#8211; Glass Miami Beach Condo', 'Mosaic Condo &#8211; Mosaic Condos for Sale', '1 Hotel and Homes &#8211; 1 Hotel and Homes Condos for Sale', 'MEi Condo &#8211; MEi Condos for Sale in Miami Beach', 'Palazzo Del Sol Condo in Fisher Island- Fisher Island Condo', '1500 Ocean Drive Condo &#8211; 1500 Ocean Drive Condos for Sale', 'Murano Grande Condo &#8211; Miami Beach Waterfront Condo', 'Continuum Condos for Sale &#8211; Continuum North Tower Condos', 'Bentley Bay Condo &#8211; Bentley Bay Condos for Sale', 'Green Diamond Condos for Sale &#8211; Blue and Green Diamond', 'Faena House Condos for Sale &#8211; Faena House', 'Birch Pointe Condo &#8211; Ft. Lauderdale Intracoastal Condo', 'Waverly Las Olas Condo &#8211; Waverly Condo &#8211; Las Olas Condo', 'Jade Ocean Condos for Sale &#8211; Sunny Isles Oceanfront Condos', 'Key Biscayne Condos', 'Grand Bay Tower Condos for Sale &#8211; Key Biscayne Oceanfront', 'Towers of Key Biscayne Condos for Sale &#8211; Key Biscayne Condo', 'Sayan Condo &#8211; Sunny Isles Oceanfront Condo', 'Trump Palace Condo &#8211; Sunny Isles Oceanfront Condos', 'Kinsale by the Sea Condo &#8211; Deerfield Beach Oceanfront Condo', 'The Port Condos for sale in Ft. Lauderdale near the Beach', 'Hollywood Oceanfront Condos', 'Trump Hollywood Condos for Sale &#8211; Oceanfront Condos', 'Villas by the Sea Residences- Villas by the Sea Condos for Sale', 'Villas of Positano Condos- Hollywood Oceanfront Condos', 'Positano Beach Condo &#8211; Positano Beach Condos for Sale', 'Le Club Condos for Sale &#8211; Le Club International Condo', 'Trump International Condo Hotel &#8211; Sunny Isles Oceanfront', 'L&#8217;Hermitage Condos for Sale &#8211; Ft. Lauderdale Oceanfront Condo', 'Nu River Landing Condos for Sale &#8211; Las Olas Waterfront Condos', 'Poinciana Island Yacht &#038; Racquet Club &#8211; Sunny Isles Condo', 'Lighthouse Point Townhomes and Condos', 'Jade Beach Condos for Sale &#8211; Sunny Isles Oceanfront Condos', 'Tillotson Square Townhomes &#8211; Lighthouse Point Townhomes', 'The Vue Condo &#8211; Vue Condo Ft. Lauderdale Beach', 'Ocean Two Condos for Sale &#8211; Sunny Isles Oceanfront Condos', 'Deerfield Beach Oceanfront Condos &#8211; East Deerfield Condos', 'Trump Royale Condo &#8211; Sunny Isles Oceanfront Condo', 'Island Breeze Condo &#8211; East Deerfield Condo near the Beach', 'Hemingway at Deerfield Beach Condo &#8211; Beach Area Condo', 'Miami Luxury Condos &#8211; Miami Oceanfront Condos', 'Oceania Intracoastal Condo &#8211; Sunny Isles Intracoastal Condo', 'Las Olas Beach Club Condos- Condos in Las Olas Beach Club- Ft. Lauderdale Oceanfront Condo', 'Sunny Isles Oceanfront Condos', 'Ocean Point Beach Club &#8211; Sunny Isles Oceanfront Condotel', 'L&#8217;Ambiance Condo &#8211; Ft. Lauderdale Oceanfront Condo', 'Coconut Grove Condos', 'Bay Harbor Island Condos', 'Il Lugano Condos for Sale &#8211; Ft. Lauderdale Intracoastal Condo', 'Ocean Three Condo &#8211; Sunny Isles Oceanfront Condo', 'Riva Bay Harbor- Riva Bay Harbor Condos for Sale', 'Millenium Condo &#8211; Sunny Isles Oceanfront Condos for Sale', 'Las Olas River House Condo &#8211; Las Olas Condos for Sale', 'Hilton Resort Fort Lauderdale &#8211; Ft. Lauderdale Condotel', 'Cymbrinas Cay Condo &#8211; Ft. Lauderdale Waterfront Condo', 'Vela Vista Condos for Sale &#8211; Ft. Lauderdale Waterfront Condos', 'Las Olas Condos Condos for Sale on Las Olas in Ft Lauderdale', 'Las Olas Isles Condos &#8211; Las Olas Isles Townhomes', 'Palm Beach Oceanfront Homes &#8211; Palm Beach Luxury Homes', 'Property Taxes', 'Hertz Realty &#8211; South Florida Luxury Realtor', 'Selling', 'Ft. Lauderdale Luxury Condos &#8211; Broward Luxury Condos', 'Harbourage Place Condo &#8211; Ft. Lauderdale Intracoastal Condos', 'Venetian Condo &#8211; Venetian Las Olas Condo', 'The Palms Condo &#8211; Fort Lauderdale Oceanfront Condo', 'W Fort Lauderdale Residences- Ft. Lauderdale Condotel', '350 Las Olas Place Condo &#8211; Las Olas Condos for Sale', 'Ft. Lauderdale Intracoastal Homes &#8211; Ft. Lauderdale Waterfront', 'Ft. Lauderdale Oceanfront Condos &#8211; Ft. Lauderdale Beach', 'Ft. Lauderdale Riverfront Homes &#8211; New River Homes', 'Ft. Lauderdale Waterfront Condos &#8211; Fort Lauderdale Condos', 'Ft. Lauderdale Waterfront Homes &#8211; Waterfront Properties', 'Ft. Lauderdale Waterfront Townhomes', 'Hillsboro Shores Homes – Pompano Beach Oceanfront Homes', 'Home Buyer Tips', 'Bellini Williams Island Condo -Aventura Waterfront Condos', 'Information for South Florida Buyers &#8211; Realtor Hertz Realty', 'Buying property in South Florida as a Foreign Buyer', 'Coconut Creek Homes for Sale &#8211; Homes in Coconut Creek', 'Condo Checklist for Buyers', 'Coral Springs Homes for Sale &#8211; Homes in Coral Springs', 'Eagle Trace Homes for Sale &#8211; Coral Springs Homes for Sale', 'Delray Beach Waterfront Condos &#8211; East Delray Condos', 'Ft. Lauderdale Waterfront Condos with Docks', 'Ft. Lauderdale Condotels', 'Ft. Lauderdale Intracoastal Condos &#8211; Condos near the Beach'];
                        var suggestions = [];
                        var noresult = 'No post found';
                        for (i=0;i<choices.length;i++)
                            if (~choices[i].toLowerCase().indexOf(term)) suggestions.push(choices[i]);
                        suggest(suggestions);
                    }
                });
            </script>                      
            
        </article>


    </section>    

    
        <div class="row">
            <?php //get_sidebar('condominium'); ?>

            <div class="span12 main-wrap">
                <!-- Main Content -->
                <div id="sf-condo-parent" class="main">

                    <div class="inner-wrapper">
                    <h1 class="page-title text-center"><?php wp_title(''); ?></h1>
                   
                        <?php if ( has_post_thumbnail() ) : ?> 
                            
                            <div class="page-top-img">
                                <a href="<?php the_permalink(); ?>" title=""><?php the_post_thumbnail( 'full', array('class' => 'img-responsive'));  ?></a>

                            </div>

                        <?php endif; ?>

                    <!--====================================================
                    =            This is the theme default loop            =
                    =====================================================-->
                    
                        <?php
                        if ( have_posts() ) :
                            while ( have_posts() ) :
                                the_post();
                                ?>
                                <article id="post-<?php the_ID(); ?>" <?php post_class("clearfix"); ?>>
                                        <?php
                                        $title_display = get_post_meta( $post->ID, 'REAL_HOMES_page_title_display', true );
                                        if( $title_display != 'hide' ){
                                            ?>
                                            <h3 class="post-title"><?php //the_title(); ?></h3>
                                            <hr/>
                                            <?php
                                        }

                                        the_content();

                                        // WordPress Link Pages
                                        wp_link_pages(array('before' => '<div class="pages-nav clearfix">', 'after' => '</div>', 'next_or_number' => 'next'));
                                        ?>
                                </article>
                                <?php
                            endwhile;
                            comments_template();
                        endif;
                        ?>                                            

 
                    <!--========================================
                    =            This is Moose Loop            =
                    =========================================-->
                    
                    <?php 

                        $args = array(
                            'post_type' => 'south-florida-condos',
                            'posts_per_page' => -1,
                            'post_status' => 'publish',
                            'order' => 'ASC',
                            'post_parent' => get_the_ID()
                        );
                        $the_query = new WP_Query( $args ); 

                        // print_r( $the_query );

                    ?>        
                    
                   <article id="post-<?php the_ID(); ?>" <?php post_class("clearfix"); ?>>
 
                   <?php 
                        // The Loop

                        if ( $the_query->have_posts() ) :

                            while ( $the_query->have_posts() ) : $the_query->the_post(); ?>


                        <section class="">
                    
                            <article class="col-md-moose">
                                    <link rel="stylesheet" type="text/css" href="/wp-content/themes/mical-realhomes-child/_masonry-css/style.css">
                                    <link rel="stylesheet" type="text/css" href="/wp-content/themes/mical-realhomes-child/_masonry-css/media_query.css">

                                <div id="masonry-grid" class="">


                                    <div class="grid-sizer"></div>

                                    <div class="grid-item">
                                        <article class="content-block">
                                        
                                            <h3 class="post-title text-center"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

                                            <!-- <img src="http://lorempixel.com/200/100/city/1" class="img-thumbnail img-responsive"> -->
                                            <?php if ( has_post_thumbnail() ) : ?> 
                                                
                                                <div class="featured-img">
                                                    <a href="<?php the_permalink(); ?>" title=""><?php the_post_thumbnail( 'custom-post-index', array('class' => 'img-responsive'));  ?></a>

                                                </div>
                                            <?php else : ?> 
                                               
                                                    <a href="<?php the_permalink(); ?>" title=""><img class="img-responsive" src="/wp-content/uploads/2016/08/mical-default-img.jpg" alt=""></a>

                                            <?php endif; ?>

                                            <!-- <p> -->

                                                <!-- <hr/>    -->
                                                                           
                                                <?php the_excerpt(); ?>     
                                                <a class="pull-right" href="<?php the_permalink(); ?>">Read More ...</a>     

                                            <!-- </p> -->
                                        </article>
                                    </div>

                       <?php 
                            endwhile;

                        endif;

                        // Reset Post Data

                        wp_reset_postdata();

                    ?>


                                <script src="/wp-content/themes/mical-realhomes-child/_masonry-js/imagesloaded.pkgd.min.js"></script>
                                <script src="//cdnjs.cloudflare.com/ajax/libs/masonry/3.1.5/masonry.pkgd.min.js"></script>
                                <script src="/wp-content/themes/mical-realhomes-child/_masonry-js/script.js"></script>

                                </div>
                                <!-- End of Masonry Grid  -->
                            </article>


                        </section>                                            

                    </article>                  
   
     

                    </div> <!-- END inner-wrapper -->

                </div><!-- End Main Content -->

            </div> <!-- End span12 -->
            <footer id="footer-wrapper-condos">

                   <!-- <div id="footer" class="container hidden-phone hidden-tablet">

                            <div class="row text-center">

                                    <div class="span3">
                                        <?php if ( ! dynamic_sidebar( 'footer-first-column' ) ) : ?>
                                        <?php endif; ?>
                                    </div>

                                    <div class="span3">
                                        <?php if ( ! dynamic_sidebar( 'footer-second-column' ) ) : ?>
                                        <?php endif; ?>
                                    </div>

                                    <div class="clearfix visible-tablet"></div>

                                    <div class="span3">
                                        <?php if ( ! dynamic_sidebar( 'footer-third-column' ) ) : ?>
                                        <?php endif; ?>
                                    </div>

                                    <div class="span3">
                                        <?php if ( ! dynamic_sidebar( 'footer-fourth-column' ) ) : ?>
                                        <?php endif; ?>
                                    </div>
                            </div>
                           <div class="row text-center">
                                    <div class="span6">
                                        <?php
                                        $copyright_text = get_option( 'theme_copyright_text' );
                                        echo ( $copyright_text ) ? '<p class="copyright">' . $copyright_text . '</p>' : '';
                                        ?>
                                    </div>
                                    <div class="span6">
                                        <?php
                                        $designed_by_text = get_option( 'theme_designed_by_text' );
                                        echo ( $designed_by_text ) ? '<p class="designed-by">' . $designed_by_text . '</p>' : '';
                                        ?>
                                    </div>
                            </div>                

                    </div> -->
                    <div id="footer-bottom" class="row">
                        <div class="span1"></div>
                            <div class="span5">
                                <?php
                                $copyright_text = get_option( 'theme_copyright_text' );
                                echo ( $copyright_text ) ? '<p class="copyright">' . $copyright_text . '</p>' : '';
                                ?>
                            </div>
                            <div class="span5">
                                <?php
                                $designed_by_text = get_option( 'theme_designed_by_text' );
                                echo ( $designed_by_text ) ? '<p class="designed-by">' . $designed_by_text . '</p>' : '';
                                ?>
                            </div>
                        <div class="span1"></div>    
                    </div>                                   

            </footer><!-- End Footer -->


        </div><!-- End contents row -->

    </div><!-- End Content -->

            

