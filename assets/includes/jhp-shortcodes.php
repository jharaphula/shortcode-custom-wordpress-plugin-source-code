<?php
if (!defined('WPINC')) { die; }

/* Display Anywhere using Shortcode: [i20_Sidebar_Widgets] */

if (!function_exists('itsw_plugin_form_display')) {
	function itsw_plugin_form_display($atts, $content = NULL){
		extract(shortcode_atts(array(
		'el_class' => '',
		'el_id' => '',
		),$atts));
		
		$connected = @fsockopen("www.jharaphula.com", 80); 
		if ($connected){
			$itsw_feedurls = [];
		
			if (get_option('itsw_category_miscellaneous') == "itsw_category_miscellaneous") {
				array_push($itsw_feedurls, "https://jharaphula.com/category/miscellaneous/feed/");
			}
			
			if (get_option('itsw_category_digitalization') == "itsw_category_digitalization") {
				array_push($itsw_feedurls, "https://jharaphula.com/category/computer-digitalization/feed/");
			}
			
			if (get_option('itsw_category_health') == "itsw_category_health") {
				array_push($itsw_feedurls, "https://jharaphula.com/category/health-care-news/feed/");
			}
			
			if (get_option('itsw_category_business_bay') == "itsw_category_business_bay") {
				array_push($itsw_feedurls, "https://jharaphula.com/category/business-radar/feed/");
			}
			
			if (get_option('itsw_category_automobiles') == "itsw_category_automobiles") {
				array_push($itsw_feedurls, "https://jharaphula.com/category/automobiles/feed/");
			}
			
			if (get_option('itsw_category_horoscope') == "itsw_category_horoscope") {
				array_push($itsw_feedurls, "https://jharaphula.com/category/horoscope-astrology-signs/feed/");
			}
			
			if (get_option('itsw_category_makeup') == "itsw_category_makeup") {
				array_push($itsw_feedurls, "https://jharaphula.com/category/tips-for-women/makeup-beauty-tips/feed/");
			}
			
			if (get_option('itsw_category_tourism') == "itsw_category_tourism") {
				array_push($itsw_feedurls, "https://jharaphula.com/category/guide-for-travel-tourism/feed/");
			}
			
			if (get_option('itsw_category_career') == "itsw_category_career") {
				array_push($itsw_feedurls, "https://jharaphula.com/category/career-job-seekers/feed/");
			}
			
			if (get_option('itsw_category_financial_advisor') == "itsw_category_financial_advisor") {
				array_push($itsw_feedurls, "https://jharaphula.com/category/financial-help/feed/");
			}
			
			if (get_option('itsw_category_educational') == "itsw_category_educational") {
				array_push($itsw_feedurls, "https://jharaphula.com/category/online-education/feed/");
			}
			
			if (get_option('itsw_category_insurance') == "itsw_category_insurance") {
				array_push($itsw_feedurls, "https://jharaphula.com/category/insurance-handbook/feed/");
			}
			
			if (get_option('itsw_category_home_decor') == "itsw_category_home_decor") {
				array_push($itsw_feedurls, "https://jharaphula.com/category/home-decor/feed/");
			}
			
			if (get_option('itsw_category_skincare') == "itsw_category_skincare") {
				array_push($itsw_feedurls, "https://jharaphula.com/category/health-care-news/skin-care-tips/feed/");
			}
			
			if (get_option('itsw_category_blogging') == "itsw_category_blogging") {
				array_push($itsw_feedurls, "https://jharaphula.com/category/blog-board/feed/");
			}
			
			if (get_option('itsw_category_real_estate') == "itsw_category_real_estate") {
				array_push($itsw_feedurls, "https://jharaphula.com/category/real-estate/feed/");
			}
			
			if (get_option('itsw_category_technologies') == "itsw_category_technologies") {
				array_push($itsw_feedurls, "https://jharaphula.com/category/world-of-technologies/feed/");
			}
			
			if (get_option('itsw_category_shopping') == "itsw_category_shopping") {
				array_push($itsw_feedurls, "https://jharaphula.com/category/shopping-tips/feed/");
			}
			
			if (get_option('itsw_category_sports') == "itsw_category_sports") {
				array_push($itsw_feedurls, "https://jharaphula.com/category/for-sports-lovers/feed/");
			}
			
			if (get_option('itsw_category_meditation') == "itsw_category_meditation") {
				array_push($itsw_feedurls, "https://jharaphula.com/category/yoga-meditation/feed/");
			}
			
			if (get_option('itsw_category_hair_care') == "itsw_category_hair_care") { 
				array_push($itsw_feedurls, "https://jharaphula.com/category/hair-care-solutions/feed/");
			}	
			
			if (get_option('itsw_category_recipes') == "itsw_category_recipes") {
				array_push($itsw_feedurls, "https://jharaphula.com/category/awesome-recipes/feed/");
			}
			
			if (get_option('itsw_category_dating') == "itsw_category_dating") {
				array_push($itsw_feedurls, "https://jharaphula.com/category/love-dating-romance/feed/");
			}
			
			if (get_option('itsw_category_kids') == "itsw_category_kids") {
				array_push($itsw_feedurls, "https://jharaphula.com/category/lessons-for-kids/feed/");
			}
			
			if (get_option('itsw_category_digital_marketing') == "itsw_category_digital_marketing") {
				array_push($itsw_feedurls, "https://jharaphula.com/category/digital-marketing-solutions/feed/");
			}
			
			if (get_option('itsw_category_fashion') == "itsw_category_fashion") {
				array_push($itsw_feedurls, "https://jharaphula.com/category/fashion-brings-fantacy/feed/");
			}
			
			if (get_option('itsw_category_weight_loss') == "itsw_category_weight_loss") {
				array_push($itsw_feedurls, "https://jharaphula.com/category/weight-loss-solutions/feed/");
			}
			
			if (get_option('itsw_category_seo_blog') == "itsw_category_seo_blog") {
				array_push($itsw_feedurls, "https://jharaphula.com/category/free-seo-training-tools/feed/");
			}
			
			if (count($itsw_feedurls) == 0) {
				array_push($itsw_feedurls, "https://jharaphula.com/feed/");
			}
			
			shuffle($itsw_feedurls);
			
			$itsw_rss_feed = simplexml_load_file($itsw_feedurls[wp_rand(0,count($itsw_feedurls) - 1)]);
			
			$itsw_str ='';	
			
			if (get_option('itsw_dropdown_border') == 1) { 
				$itsw_str .='<div class="border-onestop" style="height: ' . get_option('itsw_height_of_i20_sidebar') . 'px;">';
			} else {
				$itsw_str .='<div class="noborder-onestop" style="height: ' . get_option('itsw_height_of_i20_sidebar') . 'px;">';
			}
			
			if (!empty($itsw_rss_feed)) { 
			
			$i = 0;
			
			foreach ($itsw_rss_feed->channel->item as $itsw_feed_item) {
			
				if ($i >= 60) break; 
				{
					$itsw_totalrecords[$i] = [$itsw_feed_item->link, array_slice(explode('<p>', $itsw_feed_item->description), 0, 20)[0], $itsw_feed_item->title, substr(array_slice(explode('<p>', $itsw_feed_item->description), 0, 20)[1], 0, -7)];
				}
			
				$i ++; 
			}
			
			shuffle($itsw_totalrecords);
			
			for ($k = 0; $k < get_option('itsw_how_many_records'); $k++) {
				
				$itsw_str .='<div class="osclearfix"><div class="entryimg"><a rel="nofollow" target="_blank" href="';
				$itsw_str .= $itsw_totalrecords[$k][0];	
				$itsw_str .='">';
				$itsw_str .=  $itsw_totalrecords[$k][1];
				$itsw_str .='</a></div><div><div class="entrytitle"><a class="widgettextsize" rel="nofollow" target="_blank" href="';	
				$itsw_str .= $itsw_totalrecords[$k][0];
				$itsw_str .='">';	
				$itsw_str .= $itsw_totalrecords[$k][2];
				$itsw_str .='</a></div><div class="entrydescrip widgettextsizemar">';
				$itsw_str .= $itsw_totalrecords[$k][3] . '..';		
				$itsw_str .='</div></div></div>';
				
			}	
			}
			
			$itsw_str .='</div>';
			return $itsw_str;
			fclose($connected);
		}else{
			return "No internet Connection.";
		}
			
	}
}
/* Register All Shorcodes At Once */
add_action( 'init', 'itsw_register_shortcodes');

if (!function_exists('itsw_register_shortcodes')) {
	function itsw_register_shortcodes(){
		// Registered Shortcodes
		add_shortcode ('i20_Sidebar_Widgets', 'itsw_plugin_form_display');
	};
}

if (!function_exists('itsw_plugin_register_settings')) {
	function itsw_plugin_register_settings() {
		register_setting('itsw_plugin_options_group', 'itsw_how_many_records');
		register_setting('itsw_plugin_options_group', 'itsw_height_of_i20_sidebar');
		register_setting('itsw_plugin_options_group', 'itsw_dropdown_border');	
		register_setting('itsw_plugin_options_group', 'itsw_category_miscellaneous');
		register_setting('itsw_plugin_options_group', 'itsw_category_digitalization');	
		register_setting('itsw_plugin_options_group', 'itsw_category_health');
		register_setting('itsw_plugin_options_group', 'itsw_category_business_bay');
		register_setting('itsw_plugin_options_group', 'itsw_category_automobiles');
		register_setting('itsw_plugin_options_group', 'itsw_category_horoscope');
		register_setting('itsw_plugin_options_group', 'itsw_category_makeup');	
		register_setting('itsw_plugin_options_group', 'itsw_category_tourism');
		register_setting('itsw_plugin_options_group', 'itsw_category_career');
		register_setting('itsw_plugin_options_group', 'itsw_category_financial_advisor');
		register_setting('itsw_plugin_options_group', 'itsw_category_educational');	
		register_setting('itsw_plugin_options_group', 'itsw_category_insurance');
		register_setting('itsw_plugin_options_group', 'itsw_category_home_decor');
		register_setting('itsw_plugin_options_group', 'itsw_category_skincare');
		register_setting('itsw_plugin_options_group', 'itsw_category_blogging');
		register_setting('itsw_plugin_options_group', 'itsw_category_real_estate');
		register_setting('itsw_plugin_options_group', 'itsw_category_technologies');
		register_setting('itsw_plugin_options_group', 'itsw_category_shopping');	
		register_setting('itsw_plugin_options_group', 'itsw_category_sports');
		register_setting('itsw_plugin_options_group', 'itsw_category_meditation');
		register_setting('itsw_plugin_options_group', 'itsw_category_hair_care');	
		register_setting('itsw_plugin_options_group', 'itsw_category_recipes');
		register_setting('itsw_plugin_options_group', 'itsw_category_dating');
		register_setting('itsw_plugin_options_group', 'itsw_category_kids');
		register_setting('itsw_plugin_options_group', 'itsw_category_digital_marketing');	
		register_setting('itsw_plugin_options_group', 'itsw_category_fashion');
		register_setting('itsw_plugin_options_group', 'itsw_category_weight_loss');
		register_setting('itsw_plugin_options_group', 'itsw_category_seo_blog');
	}
}

add_action('admin_init', 'itsw_plugin_register_settings');

if (!function_exists('itsw_plugin_setting_page')) {
	function itsw_plugin_setting_page() {
	  // add_options_page(string $page_title, string $menu_title, string $capability, string $menu_slug, callable $function = '')
	   add_options_page('Custom Plugin', 'i20 Sidebar Widgets', 'manage_options', 'itsw-plugin-setting-url', 'itsw_page_html_form');
	}
}

if (!function_exists('itsw_page_html_form')) {
function itsw_page_html_form() { ?>
    <div class="wrap">
        <h2>i20 Sidebar Widgets Settings</h2>
        <form method="post" action="options.php">
            <?php settings_fields('itsw_plugin_options_group'); ?>

            <table class="form-table">			
				<tr>
                    <th><label for="third_field_id">Categories</label></th>
                    <td>
                        <div class="fleftmargin">
							<div class="gapbetweencategories">
								<div class="fleftcss"><input <?php if (get_option('itsw_category_miscellaneous') == "itsw_category_miscellaneous") { ?> checked <?php } ?> value="itsw_category_miscellaneous" type="checkbox" name="itsw_category_miscellaneous" id="itsw_category_miscellaneous" /></div>
								<div class="fleftcss">Miscellaneous</div>
							</div>
							<div class="gapbetweencategories">
								<div class="fleftcss"><input <?php if (get_option('itsw_category_digitalization') == "itsw_category_digitalization") { ?> checked <?php } ?> value="itsw_category_digitalization" type="checkbox" name="itsw_category_digitalization" id="itsw_category_digitalization" /></div>
								<div class="fleftcss">Digitalization</div>
							</div>
							<div class="gapbetweencategories">
								<div class="fleftcss"><input <?php if (get_option('itsw_category_health') == "itsw_category_health") { ?> checked <?php } ?> value="itsw_category_health" type="checkbox" name="itsw_category_health" id="itsw_category_health" /></div>
								<div class="fleftcss">Health & Fitness</div>
							</div>
							<div class="gapbetweencategories">
								<div class="fleftcss"><input <?php if (get_option('itsw_category_business_bay') == "itsw_category_business_bay") { ?> checked <?php } ?> value="itsw_category_business_bay" type="checkbox" name="itsw_category_business_bay" id="itsw_category_business_bay" /></div>
								<div class="fleftcss">Business Bay</div>
							</div>
							<div class="gapbetweencategories">
								<div class="fleftcss"><input <?php if (get_option('itsw_category_automobiles') == "itsw_category_automobiles") { ?> checked <?php } ?> value="itsw_category_automobiles" type="checkbox" name="itsw_category_automobiles" id="itsw_category_automobiles" /></div>
								<div class="fleftcss">Automobiles</div>
							</div>	
							<div class="gapbetweencategories">
								<div class="fleftcss"><input <?php if (get_option('itsw_category_horoscope') == "itsw_category_horoscope") { ?> checked <?php } ?> value="itsw_category_horoscope" type="checkbox" name="itsw_category_horoscope" id="itsw_category_horoscope" /></div>
								<div class="fleftcss">Free Horoscope</div>
							</div>	
							<div class="gapbetweencategories">
								<div class="fleftcss"><input <?php if (get_option('itsw_category_makeup') == "itsw_category_makeup") { ?> checked <?php } ?> value="itsw_category_makeup" type="checkbox" name="itsw_category_makeup" id="itsw_category_makeup" /></div>
								<div class="fleftcss">Makeup Ideas</div>
							</div>
						</div>
						<div class="fleftmargin">
							<div>
								<div class="fleftcss"><input <?php if (get_option('itsw_category_tourism') == "itsw_category_tourism") { ?> checked <?php } ?> value="itsw_category_tourism" type="checkbox" name="itsw_category_tourism" id="itsw_category_tourism" /></div>
								<div class="fleftcss">Travel & Tourism</div>
							</div>
							<div class="gapbetweencategories">
								<div class="fleftcss"><input <?php if (get_option('itsw_category_career') == "itsw_category_career") { ?> checked <?php } ?> value="itsw_category_career" type="checkbox" name="itsw_category_career" id="itsw_category_career" /></div>
								<div class="fleftcss">Tips for Career</div>
							</div>
							<div class="gapbetweencategories">
								<div class="fleftcss"><input <?php if (get_option('itsw_category_financial_advisor') == "itsw_category_financial_advisor") { ?> checked <?php } ?> value="itsw_category_financial_advisor" type="checkbox" name="itsw_category_financial_advisor" id="itsw_category_financial_advisor" /></div>
								<div class="fleftcss">Financial Advisor</div>
							</div>
							<div class="gapbetweencategories">
								<div class="fleftcss"><input <?php if (get_option('itsw_category_educational') == "itsw_category_educational") { ?> checked <?php } ?> value="itsw_category_educational" type="checkbox" name="itsw_category_educational" id="itsw_category_educational" /></div>
								<div class="fleftcss">Educational Resources</div>
							</div>
							<div class="gapbetweencategories">
								<div class="fleftcss"><input <?php if (get_option('itsw_category_insurance') == "itsw_category_insurance") { ?> checked <?php } ?> value="itsw_category_insurance" type="checkbox" name="itsw_category_insurance" id="itsw_category_insurance" /></div>
								<div class="fleftcss">Insurance Handbook</div>
							</div>
							<div class="gapbetweencategories">
								<div class="fleftcss"><input <?php if (get_option('itsw_category_home_decor') == "itsw_category_home_decor") { ?> checked <?php } ?> value="itsw_category_home_decor" type="checkbox" name="itsw_category_home_decor" id="itsw_category_home_decor" /></div>
								<div class="fleftcss">Home Decor</div>
							</div>
							<div class="gapbetweencategories">
								<div class="fleftcss"><input <?php if (get_option('itsw_category_skincare') == "itsw_category_skincare") { ?> checked <?php } ?> value="itsw_category_skincare" type="checkbox" name="itsw_category_skincare" id="itsw_category_skincare" /></div>
								<div class="fleftcss">Skincare Tips</div>
							</div>
						</div>
						<div class="fleftmargin">
							<div>
								<div class="fleftcss"><input <?php if (get_option('itsw_category_blogging') == "itsw_category_blogging") { ?> checked <?php } ?> value="itsw_category_blogging" type="checkbox" name="itsw_category_blogging" id="itsw_category_blogging" /></div>
								<div class="fleftcss">Blogging Tips</div>
							</div>
							<div class="gapbetweencategories">
								<div class="fleftcss"><input <?php if (get_option('itsw_category_real_estate') == "itsw_category_real_estate") { ?> checked <?php } ?> value="itsw_category_real_estate" type="checkbox" name="itsw_category_real_estate" id="itsw_category_real_estate" /></div>
								<div class="fleftcss">Real Estate Consulting</div>
							</div>
							<div class="gapbetweencategories">
								<div class="fleftcss"><input <?php if (get_option('itsw_category_technologies') == "itsw_category_technologies") { ?> checked <?php } ?> value="itsw_category_technologies" type="checkbox" name="itsw_category_technologies" id="itsw_category_technologies" /></div>
								<div class="fleftcss">Technologies</div>
							</div>
							<div class="gapbetweencategories">
								<div class="fleftcss"><input <?php if (get_option('itsw_category_shopping') == "itsw_category_shopping") { ?> checked <?php } ?> value="itsw_category_shopping" type="checkbox" name="itsw_category_shopping" id="itsw_category_shopping" /></div>
								<div class="fleftcss">Shopping</div>
							</div>
							<div class="gapbetweencategories">
								<div class="fleftcss"><input <?php if (get_option('itsw_category_sports') == "itsw_category_sports") { ?> checked <?php } ?> value="itsw_category_sports" type="checkbox" name="itsw_category_sports" id="itsw_category_sports" /></div>
								<div class="fleftcss">For Sports Lovers</div>
							</div>
							<div class="gapbetweencategories">
								<div class="fleftcss"><input <?php if (get_option('itsw_category_meditation') == "itsw_category_meditation") { ?> checked <?php } ?> value="itsw_category_meditation" type="checkbox" name="itsw_category_meditation" id="itsw_category_meditation" /></div>
								<div class="fleftcss">Yoga & Meditation</div>
							</div>
							<div class="gapbetweencategories">
								<div class="fleftcss"><input <?php if (get_option('itsw_category_hair_care') == "itsw_category_hair_care") { ?> checked <?php } ?> value="itsw_category_hair_care" type="checkbox" name="itsw_category_hair_care" id="itsw_category_hair_care" /></div>
								<div class="fleftcss">Hair Care Tips</div>
							</div>
						</div>
						<div class="fleftcss">
							<div>
								<div class="fleftcss"><input <?php if (get_option('itsw_category_recipes') == "itsw_category_recipes") { ?> checked <?php } ?> value="itsw_category_recipes" type="checkbox" name="itsw_category_recipes" id="itsw_category_recipes" /></div>
								<div class="fleftcss">Easy Recipes</div>
							</div>
							<div class="gapbetweencategories">
								<div class="fleftcss"><input <?php if (get_option('itsw_category_dating') == "itsw_category_dating") { ?> checked <?php } ?> value="itsw_category_dating" type="checkbox" name="itsw_category_dating" id="itsw_category_dating" /></div>
								<div class="fleftcss">Love & Dating</div>
							</div>
							<div class="gapbetweencategories">
								<div class="fleftcss"><input <?php if (get_option('itsw_category_kids') == "itsw_category_kids") { ?> checked <?php } ?> value="itsw_category_kids" type="checkbox" name="itsw_category_kids" id="itsw_category_kids" /></div>
								<div class="fleftcss">Care for Kids</div>
							</div>
							<div class="gapbetweencategories">
								<div class="fleftcss"><input <?php if (get_option('itsw_category_digital_marketing') == "itsw_category_digital_marketing") { ?> checked <?php } ?> value="itsw_category_digital_marketing" type="checkbox" name="itsw_category_digital_marketing" id="itsw_category_digital_marketing" /></div>
								<div class="fleftcss">Digital Marketing</div>
							</div>
							<div class="gapbetweencategories">
								<div class="fleftcss"><input <?php if (get_option('itsw_category_fashion') == "itsw_category_fashion") { ?> checked <?php } ?> value="itsw_category_fashion" type="checkbox" name="itsw_category_fashion" id="itsw_category_fashion" /></div>
								<div class="fleftcss">Fashion & Fantacy</div>
							</div>
							<div class="gapbetweencategories">
								<div class="fleftcss"><input <?php if (get_option('itsw_category_weight_loss') == "itsw_category_weight_loss") { ?> checked <?php } ?> value="itsw_category_weight_loss" type="checkbox" name="itsw_category_weight_loss" id="itsw_category_weight_loss" /></div>
								<div class="fleftcss">Weight Loss Solution</div>
							</div>
							<div class="gapbetweencategories">
								<div class="fleftcss"><input <?php if (get_option('itsw_category_seo_blog') == "itsw_category_seo_blog") { ?> checked <?php } ?> value="itsw_category_seo_blog" type="checkbox" name="itsw_category_seo_blog" id="itsw_category_seo_blog" /></div>
								<div class="fleftcss">SEO Blog</div>
							</div>
						</div>						
                    </td>
                </tr>
			
				<tr>
                    <th><label for="itsw_height_of_i20_sidebar">Height of i20 Sidebar</label></th>
                    <td>
                        <input type='text' class="height_of_i20_sidebar" id="itsw_height_of_i20_sidebar" name="itsw_height_of_i20_sidebar" value="<?php echo esc_attr(get_option('itsw_height_of_i20_sidebar')); ?>" onkeypress="return itsw_isNumber(event);" maxlength="4" onkeyup="this.value = itsw_minmax(this.value, 0, 1200)" />
						<span class="msgtouser">px</span>
                    </td>
                </tr>
				
                <tr>
                    <th><label for="first_field_id">How many Records?</label></th>
                    <td>
                        <input type='text' class="how_many_records" id="itsw_how_many_records" name="itsw_how_many_records" value="<?php echo esc_attr(get_option('itsw_how_many_records')); ?>" onkeypress="return itsw_isNumber(event);" maxlength="2" onkeyup="this.value = itsw_minmax(this.value, 0, 20)" />
						<span class="msgtouser">(Maximum 20 records)</span>
                    </td>
                </tr>

                <tr>
                    <th><label for="third_field_id">Border</label></th>
                    <td>
						<select id="itsw_dropdown_border" name="itsw_dropdown_border" class="itsw_dropdown_border">
							<option <?php if (get_option('itsw_dropdown_border') == 1) { ?> selected <?php } ?> value="1">Yes</option>
							<option <?php if (get_option('itsw_dropdown_border') == 0) { ?> selected <?php } ?> value="0">No</option>
						</select>						
                    </td>
                </tr>				
				
            </table>

			<div><span class="mandatorysymcolor">*</span> Display Anywhere using Shortcode [i20_Sidebar_Widgets]</div>

            <?php submit_button(); ?>
    </div>
<?php }
} ?>

<?php
add_action('admin_menu', 'itsw_plugin_setting_page');