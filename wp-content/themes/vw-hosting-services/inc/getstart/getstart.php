<?php
//about theme info
add_action( 'admin_menu', 'vw_hosting_services_gettingstarted' );
function vw_hosting_services_gettingstarted() {
	add_theme_page( esc_html__('About VW Hosting Services ', 'vw-hosting-services'), esc_html__('About VW Hosting Services ', 'vw-hosting-services'), 'edit_theme_options', 'vw_hosting_services_guide', 'vw_hosting_services_mostrar_guide');
}

// Add a Custom CSS file to WP Admin Area
function vw_hosting_services_admin_theme_style() {
	wp_enqueue_style('vw-hosting-services-custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/getstart/getstart.css');
	wp_enqueue_script('vw-hosting-services-tabs', esc_url(get_template_directory_uri()) . '/inc/getstart/js/tab.js');
}
add_action('admin_enqueue_scripts', 'vw_hosting_services_admin_theme_style');

//guidline for about theme
function vw_hosting_services_mostrar_guide() { 
	//custom function about theme customizer
	$vw_hosting_services_return = add_query_arg( array()) ;
	$vw_hosting_services_theme = wp_get_theme( 'vw-hosting-services' );
?>

<div class="wrapper-info">
    <div class="col-left sshot-section">
    	<h2><?php esc_html_e( 'Welcome to VW Hosting Services ', 'vw-hosting-services' ); ?> <span class="version"><?php esc_html_e( 'Version', 'vw-hosting-services' ); ?>: <?php echo esc_html($vw_hosting_services_theme['Version']);?></span></h2>
    	<p><?php esc_html_e('All our WordPress themes are modern, minimalist, 100% responsive, seo-friendly,feature-rich, and multipurpose that best suit designers, bloggers and other professionals who are working in the creative fields.','vw-hosting-services'); ?></p>
    </div>
	<div class="col-right coupen-section">
    	<div class="logo-section">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/screenshot.png" alt="" />
		</div>
		<div class="logo-right">			
			<div class="update-now">
				<h4><?php esc_html_e('Try Premium ','vw-hosting-services'); ?></h4>
				<h4><?php esc_html_e('VW Hosting Services Theme','vw-hosting-services'); ?></h4>
				<h4 class="disc-text"><?php esc_html_e('at 20% Discount','vw-hosting-services'); ?></h4>
				<h4><?php esc_html_e('Use Coupon','vw-hosting-services'); ?> ( <span><?php esc_html_e('vwpro20','vw-hosting-services'); ?></span> ) </h4> 
				<div class="info-link">
					<a href="<?php echo esc_url( VW_HOSTING_SERVICES_BUY_NOW ); ?>" target="_blank"> <?php esc_html_e( 'Upgrade to Pro', 'vw-hosting-services' ); ?></a>
				</div>
			</div>
		</div>   
		<div class="logo-img">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/final-logo.png" alt="" />
		</div>
    </div>

    <div class="tab-sec">
    	<div class="tab">
			<button class="tablinks" onclick="vw_hosting_services_open_tab(event, 'lite_theme')"><?php esc_html_e( 'Setup With Customizer', 'vw-hosting-services' ); ?></button>
			
			<button class="tablinks" onclick="vw_hosting_services_open_tab(event, 'theme_pro')"><?php esc_html_e( 'Get Premium', 'vw-hosting-services' ); ?></button>
			<button class="tablinks" onclick="vw_hosting_services_open_tab(event, 'free_pro')"><?php esc_html_e( 'Free Vs Premium', 'vw-hosting-services' ); ?></button>
			<button class="tablinks" onclick="vw_hosting_services_open_tab(event, 'get_bundle')"><?php esc_html_e( 'Get 250+ Themes Bundle at $99', 'vw-hosting-services' ); ?></button>
		</div>

		<?php 
			$vw_hosting_services_plugin_custom_css = '';
			if(class_exists('Ibtana_Visual_Editor_Menu_Class')){
				$vw_hosting_services_plugin_custom_css ='display: block';
			}
		?>
		<div id="lite_theme" class="tabcontent open">
			<?php if(!class_exists('Ibtana_Visual_Editor_Menu_Class')){ 
				$plugin_ins = VW_Hosting_Services_Plugin_Activation_Settings::get_instance();
				$vw_hosting_services_actions = $plugin_ins->recommended_actions;
				?>
				<div class="vw-hosting-services-recommended-plugins">
				    <div class="vw-hosting-services-action-list">
				        <?php if ($vw_hosting_services_actions): foreach ($vw_hosting_services_actions as $key => $vw_hosting_services_actionValue): ?>
				                <div class="vw-hosting-services-action" id="<?php echo esc_attr($vw_hosting_services_actionValue['id']);?>">
			                        <div class="action-inner">
			                            <h3 class="action-title"><?php echo esc_html($vw_hosting_services_actionValue['title']); ?></h3>
			                            <div class="action-desc"><?php echo esc_html($vw_hosting_services_actionValue['desc']); ?></div>
			                            <?php echo wp_kses_post($vw_hosting_services_actionValue['link']); ?>
			                            <a class="ibtana-skip-btn" get-start-tab-id="lite-theme-tab" href="javascript:void(0);"><?php esc_html_e('Skip','vw-hosting-services'); ?></a>
			                        </div>
				                </div>
				            <?php endforeach;
				        endif; ?>
				    </div>
				</div>
			<?php } ?>
			<div class="lite-theme-tab" style="<?php echo esc_attr($vw_hosting_services_plugin_custom_css); ?>">
				<h3><?php esc_html_e( 'Lite Theme Information', 'vw-hosting-services' ); ?></h3>
				<hr class="h3hr">
				<p><?php esc_html_e('VW Hosting Services is a versatile digital solution tailored for hosting service providers and web technology companies. It offers an organized and visually engaging platform for delivering hosting services and information to a global audience. This theme’s clean, intuitive layout is designed to present hosting-related information professionally. It ensures seamless access and understanding of hosting services, making it user-friendly for both providers and visitors. Whether you are web hosting service providers, cloud hosting, domain registration, WordPress hosting, domain registration, shared hosting, vps, whmcs, hosting provider, multipurpose hosting, single hosting, software hosting, vps hosting, website hosting, dedicated servers, domain and hosting, domain check, one page hosting, business hosting,Business, Hosting, Services, Web, Solutions, hosting company, hosting review, web host, website hosting,domain search, VPN providers this theme is for you. The theme’s responsive design stands out for ensuring a seamless and user-friendly experience across a wide range of devices. It caters to the preferences of visitors using desktops, tablets, and smartphones, thus accommodating a diverse audience. Additionally, the theme offers easy customization, allowing users to personalize the website according to their branding. Versatile design choices for colors, fonts, layouts, and more ensure alignment with the company’s unique identity. The theme supports multimedia integration, enabling hosting service providers to enhance their content with high-quality images, videos, and interactive elements, making complex hosting solutions more accessible to the audience. The VW Hosting Services WordPress Theme is the ideal solution for hosting service providers and technology companies looking to establish a professional online presence. With its responsive design, customization options, multimedia integration capabilities, and professional layout, it offers a comprehensive platform for delivering hosting services and information effectively.','vw-hosting-services'); ?></p>
			  	<div class="col-left-inner">
			  		<h4><?php esc_html_e( 'Theme Documentation', 'vw-hosting-services' ); ?></h4>
					<p><?php esc_html_e( 'If you need any assistance regarding setting up and configuring the Theme, our documentation is there.', 'vw-hosting-services' ); ?></p>
					<div class="info-link">
						<a href="<?php echo esc_url( VW_HOSTING_SERVICES_FREE_THEME_DOC ); ?>" target="_blank"> <?php esc_html_e( 'Documentation', 'vw-hosting-services' ); ?></a>
					</div>
					<hr>
					<h4><?php esc_html_e('Theme Customizer', 'vw-hosting-services'); ?></h4>
					<p> <?php esc_html_e('To begin customizing your website, start by clicking "Customize".', 'vw-hosting-services'); ?></p>
					<div class="info-link">
						<a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e('Customizing', 'vw-hosting-services'); ?></a>
					</div>
					<hr>
					<h4><?php esc_html_e('Having Trouble, Need Support?', 'vw-hosting-services'); ?></h4>
					<p> <?php esc_html_e('Our dedicated team is well prepared to help you out in case of queries and doubts regarding our theme.', 'vw-hosting-services'); ?></p>
					<div class="info-link">
						<a href="<?php echo esc_url( VW_HOSTING_SERVICES_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Support Forum', 'vw-hosting-services'); ?></a>
					</div>
					<hr>
					<h4><?php esc_html_e('Reviews & Testimonials', 'vw-hosting-services'); ?></h4>
					<p> <?php esc_html_e('All the features and aspects of this WordPress Theme are phenomenal. I\'d recommend this theme to all.', 'vw-hosting-services'); ?></p>
					<div class="info-link">
						<a href="<?php echo esc_url( VW_HOSTING_SERVICES_REVIEW ); ?>" target="_blank"><?php esc_html_e('Reviews', 'vw-hosting-services'); ?></a>
					</div>

					<div class="link-customizer">
						<h3><?php esc_html_e( 'Link to customizer', 'vw-hosting-services' ); ?></h3>
						<hr class="h3hr">
						<div class="first-row">
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-buddicons-buddypress-logo"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[control]=custom_logo') ); ?>" target="_blank"><?php esc_html_e('Upload your logo','vw-hosting-services'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-format-gallery"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_hosting_services_post_settings') ); ?>" target="_blank"><?php esc_html_e('Post settings','vw-hosting-services'); ?></a>
								</div>
							</div>

							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-slides"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_hosting_services_slidersettings') ); ?>" target="_blank"><?php esc_html_e('Banner Settings','vw-hosting-services'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-category"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_hosting_services_product_section') ); ?>" target="_blank"><?php esc_html_e('Product Section','vw-hosting-services'); ?></a>
								</div>
							</div>
						
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-menu"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=nav_menus') ); ?>" target="_blank"><?php esc_html_e('Menus','vw-hosting-services'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-screenoptions"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=widgets') ); ?>" target="_blank"><?php esc_html_e('Footer Widget','vw-hosting-services'); ?></a>
								</div>
							</div>
							
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-admin-generic"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_hosting_services_left_right') ); ?>" target="_blank"><?php esc_html_e('General Settings','vw-hosting-services'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-text-page"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_hosting_services_footer') ); ?>" target="_blank"><?php esc_html_e('Footer Text','vw-hosting-services'); ?></a>
								</div>
							</div>
						</div>
					</div>
			  	</div>
				<div class="col-right-inner">
					<h3 class="page-template"><?php esc_html_e('How to set up Home Page Template','vw-hosting-services'); ?></h3>
				  	<hr class="h3hr">
					<p><?php esc_html_e('Follow these instructions to setup Home page.','vw-hosting-services'); ?></p>
                  	<p><span class="strong"><?php esc_html_e('1. Create a new page :','vw-hosting-services'); ?></span><?php esc_html_e(' Go to ','vw-hosting-services'); ?>
					  	<b><?php esc_html_e(' Dashboard >> Pages >> Add New Page','vw-hosting-services'); ?></b></p>
                  	<p><?php esc_html_e('Name it as "Home" then select the template "Custom Home Page".','vw-hosting-services'); ?></p>
                  	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/home-page-template.png" alt="" />
                  	<p><span class="strong"><?php esc_html_e('2. Set the front page:','vw-hosting-services'); ?></span><?php esc_html_e(' Go to ','vw-hosting-services'); ?>
					  	<b><?php esc_html_e(' Settings >> Reading ','vw-hosting-services'); ?></b></p>
				  	<p><?php esc_html_e('Select the option of Static Page, now select the page you created to be the homepage, while another page to be your default page.','vw-hosting-services'); ?></p>
                  	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/set-front-page.png" alt="" />
                  	<p><?php esc_html_e(' Once you are done with setup, then follow the','vw-hosting-services'); ?> <a class="doc-links" href="<?php echo esc_url( VW_HOSTING_SERVICES_FREE_THEME_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation','vw-hosting-services'); ?></a></p>
			  	</div>
			</div>
		</div>


		<div id="theme_pro" class="tabcontent">
		  	<h3><?php esc_html_e( 'Premium Theme Information', 'vw-hosting-services' ); ?></h3>
			<hr class="h3hr">
		    <div class="col-left-pro">
		    	<p><?php esc_html_e('VW Hosting Services is a versatile digital solution tailored for hosting service providers and web technology companies. It offers an organized and visually engaging platform for delivering hosting services and information to a global audience. This themes clean, intuitive layout is designed to present hosting-related information professionally. It ensures seamless access and understanding of hosting services, making it user-friendly for both providers and visitors. The themes responsive design stands out for ensuring a seamless and user-friendly experience across a wide range of devices. It caters to the preferences of visitors using desktops, tablets, and smartphones, thus accommodating a diverse audience. Additionally, the theme offers easy customization, allowing users to personalize the website according to their branding. Versatile design choices for colors, fonts, layouts, and more ensure alignment with the companys unique identity. The theme supports multimedia integration, enabling hosting service providers to enhance their content with high-quality images, videos, and interactive elements, making complex hosting solutions more accessible to the audience. The VW Hosting Services WordPress Theme is the ideal solution for hosting service providers and technology companies looking to establish a professional online presence. With its responsive design, customization options, multimedia integration capabilities, and professional layout, it offers a comprehensive platform for delivering hosting services and information effectively.','vw-hosting-services'); ?></p>
		    	
		    </div>
		    <div class="col-right-pro">
		    	<div class="pro-links">
			    	<a href="<?php echo esc_url( VW_HOSTING_SERVICES_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'vw-hosting-services'); ?></a>
					<a href="<?php echo esc_url( VW_HOSTING_SERVICES_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Buy Pro', 'vw-hosting-services'); ?></a>
					<a href="<?php echo esc_url( VW_HOSTING_SERVICES_PRO_DOC ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'vw-hosting-services'); ?></a>
					<a href="<?php echo esc_url( VW_HOSTING_SERVICES_THEME_BUNDLE_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Get 250+ Themes Bundle at $99', 'vw-hosting-services'); ?></a>
				</div>
		    	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/responsive.png" alt="" />
		    </div>
		    
		</div>

		<div id="free_pro" class="tabcontent">
		  	<div class="featurebox">
			    <h3><?php esc_html_e( 'Theme Features', 'vw-hosting-services' ); ?></h3>
				<hr class="h3hr">
				<div class="table-image">
					<table class="tablebox">
						<thead>
							<tr>
								<th></th>
								<th><?php esc_html_e('Free Themes', 'vw-hosting-services'); ?></th>
								<th><?php esc_html_e('Premium Themes', 'vw-hosting-services'); ?></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><?php esc_html_e('Theme Customization', 'vw-hosting-services'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Responsive Design', 'vw-hosting-services'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Logo Upload', 'vw-hosting-services'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Social Media Links', 'vw-hosting-services'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Banner Settings', 'vw-hosting-services'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Template Pages', 'vw-hosting-services'); ?></td>
								<td class="table-img"><?php esc_html_e('1', 'vw-hosting-services'); ?></td>
								<td class="table-img"><?php esc_html_e('21', 'vw-hosting-services'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Home Page Template', 'vw-hosting-services'); ?></td>
								<td class="table-img"><?php esc_html_e('1', 'vw-hosting-services'); ?></td>
								<td class="table-img"><?php esc_html_e('1', 'vw-hosting-services'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Theme sections', 'vw-hosting-services'); ?></td>
								<td class="table-img"><?php esc_html_e('2', 'vw-hosting-services'); ?></td>
								<td class="table-img"><?php esc_html_e('11', 'vw-hosting-services'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Contact us Page Template', 'vw-hosting-services'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('1', 'vw-hosting-services'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Blog Templates & Layout', 'vw-hosting-services'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('3(Full width/Left/Right Sidebar)', 'vw-hosting-services'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Page Templates & Layout', 'vw-hosting-services'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('2(Left/Right Sidebar)', 'vw-hosting-services'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Color Pallete For Particular Sections', 'vw-hosting-services'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Global Color Option', 'vw-hosting-services'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Domain Checker', 'vw-hosting-services'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Detailed Hosting Pages', 'vw-hosting-services'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Section Reordering', 'vw-hosting-services'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Demo Importer', 'vw-hosting-services'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Allow To Set Site Title, Tagline, Logo', 'vw-hosting-services'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Enable Disable Options On All Sections, Logo', 'vw-hosting-services'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Full Documentation', 'vw-hosting-services'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Latest WordPress Compatibility', 'vw-hosting-services'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Woo-Commerce Compatibility', 'vw-hosting-services'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Support 3rd Party Plugins', 'vw-hosting-services'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Secure and Optimized Code', 'vw-hosting-services'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Exclusive Functionalities', 'vw-hosting-services'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Section Enable / Disable', 'vw-hosting-services'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Section Google Font Choices', 'vw-hosting-services'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Gallery', 'vw-hosting-services'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Simple & Mega Menu Option', 'vw-hosting-services'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Support to add custom CSS / JS ', 'vw-hosting-services'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Shortcodes', 'vw-hosting-services'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Custom Background, Colors, Header, Logo & Menu', 'vw-hosting-services'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Premium Membership', 'vw-hosting-services'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Budget Friendly Value', 'vw-hosting-services'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Priority Error Fixing', 'vw-hosting-services'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Custom Feature Addition', 'vw-hosting-services'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('All Access Theme Pass', 'vw-hosting-services'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Seamless Customer Support', 'vw-hosting-services'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('WordPress 6.4 or later', 'vw-hosting-services'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('PHP 8.2 or 8.3', 'vw-hosting-services'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('MySQL 5.6 (or greater) | MariaDB 10.0 (or greater)', 'vw-hosting-services'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td></td>
								<td class="table-img"></td>
								<td class="update-link"><a href="<?php echo esc_url( VW_HOSTING_SERVICES_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Upgrade to Pro', 'vw-hosting-services'); ?></a></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<div id="get_bundle" class="tabcontent">		  	
		   <div class="col-left-pro">
		   	<h3><?php esc_html_e( 'WP Theme Bundle', 'vw-hosting-services' ); ?></h3>
		    	<p><?php esc_html_e('Enhance your website effortlessly with our WP Theme Bundle. Get access to 250+ premium WordPress themes and 5+ powerful plugins, all designed to meet diverse business needs. Enjoy seamless integration with any plugins, ultimate customization flexibility, and regular updates to keep your site current and secure. Plus, benefit from our dedicated customer support, ensuring a smooth and professional web experience.','vw-hosting-services'); ?></p>
		    	<div class="feature">
		    		<h4><?php esc_html_e( 'Features:', 'vw-hosting-services' ); ?></h4>
		    		<p><?php esc_html_e('250+ Premium Themes & 5+ Plugins.', 'vw-hosting-services'); ?></p>
		    		<p><?php esc_html_e('Seamless Integration.', 'vw-hosting-services'); ?></p>
		    		<p><?php esc_html_e('Customization Flexibility.', 'vw-hosting-services'); ?></p>
		    		<p><?php esc_html_e('Regular Updates.', 'vw-hosting-services'); ?></p>
		    		<p><?php esc_html_e('Dedicated Support.', 'vw-hosting-services'); ?></p>
		    	</div>
		    	<p>Upgrade now and give your website the professional edge it deserves, all at an unbeatable price of $99!</p>
		    	<div class="pro-links">
					<a href="<?php echo esc_url( VW_HOSTING_SERVICES_THEME_BUNDLE_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Buy Now', 'vw-hosting-services'); ?></a>
					<a href="<?php echo esc_url( VW_HOSTING_SERVICES_THEME_BUNDLE_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation', 'vw-hosting-services'); ?></a>
				</div>
		   </div>
		   <div class="col-right-pro">
		    	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/bundle.png" alt="" />
		   </div>		    
		</div>

	</div>
</div>

<?php } ?>