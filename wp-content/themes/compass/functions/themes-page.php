<?php
// Add scripts and stylesheet
function enqueue_styles() {
    global $themename, $themeslug, $options;
    wp_register_style($themeslug . 'storecss', get_template_directory_uri() . '/functions/theme-page-style.css');
    wp_enqueue_style($themeslug . 'storecss');
}
// Add page to the menu
function inkthemes_add_menu() {
    $page = add_theme_page('InkThemes Themes Page', 'InkThemes Themes', 'administrator', 'themes', 'inkthemes_page_init');
    add_action('admin_print_styles-' . $page, 'enqueue_styles');
}
add_action('admin_menu', 'inkthemes_add_menu');
// Create the page
function inkthemes_page_init() {
   $root = get_template_directory_uri();
    $pro_theme_url = 'http://www.inkthemes.com/wp-themes/featured-content-slider-wordpress-theme/';
    $pro_theme_demo = 'http://www.inkthemes.com/compass-wordpress-business-theme-previews/';
    $site_url = 'http://www.inkthemes.com';
    ?>
    <div id="contain">
        <div id="themesheader">
        <div style="clear: both;"></div>
        </div>
        <div id="container" class="theme_container">
		<div class="top_banner">
		<a href="<?php echo esc_url('http://www.inkthemes.com'); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/functions/images/ink.png"/></a>
		<h1><?php _e('join inkthemes membership', 'compass'); ?></h1>
		<div class="ruler"></div>
		<p><?php _e('Get 100% complete access to our entire collection of 47+ WordPress Themes for only $147', 'compass'); ?></p>
		<a class="btn" target="_blank" href="<?php echo esc_url('http://www.inkthemes.com/offers/inkthemes-membership'); ?>" target="_blank"><?php _e('GRAB THIS OFFER $147 ONLY', 'compass'); ?></a>
		<br />
		<a target="_blank" class="visit_site" href="<?php echo esc_url('http://www.inkthemes.com/'); ?>"><?php _e('Visit Site', 'compass'); ?></a>
		</div>       
		<div class="page_feature_wrapper">
		<div class="page_feature">
		<h2><?php _e('What You Will Get', 'compass'); ?></h2>
		<div class="ruler"></div>
		<div class="clear"></div>
		<div class="feature_item one odd">
		<img src="<?php echo get_template_directory_uri(); ?>/functions/images/ico1.png" />
		<h3><?php _e('Get Access to All InkThemes', 'compass'); ?></h3>
		<p><?php _e('Launch your new site in few minutes with 47+ fully functional WordPress Themes.', 'compass'); ?></p>
		</div> 
		<div class="feature_item two even">
		<img src="<?php echo get_template_directory_uri(); ?>/functions/images/ico2.png" />
		<h3><?php _e('Forum Support', 'compass'); ?></h3>
		<p><?php _e('Unparalleled technical support will make your website building hassle free.', 'compass'); ?></p>
		</div>
		<div class="feature_item three odd">
		<img src="<?php echo get_template_directory_uri(); ?>/functions/images/ico3.png" />
		<h3><?php _e('Use on Multiple Domains', 'compass'); ?></h3>
		<p><?php _e('Use the themes on multiple domains for yourself or for your clients.', 'compass'); ?></p>
		</div>
		<div class="feature_item four even">
		<img src="<?php echo get_template_directory_uri(); ?>/functions/images/ico4.png" />
		<h3><?php _e('Consistent Updates', 'compass'); ?></h3>
		<p><?php _e('We bring your needs into action with regular updates to bring the best themes for you.', 'compass'); ?></p>
		</div>
		<div class="feature_item five odd">
		<img src="<?php echo get_template_directory_uri(); ?>/functions/images/ico5.png" />
		<h3><?php _e('Photoshop Files', 'compass'); ?></h3>
		<p><?php _e('Do design edits easily. Get layered photoshop files for all the themes.', 'compass'); ?></p>
		</div>
		<div class="feature_item six even">
		<img src="<?php echo get_template_directory_uri(); ?>/functions/images/ico6.png" />
		<h3><?php _e('One Click Install', 'compass'); ?></h3>
		<p><?php _e('Preloaded with sample data. You are just a click away from building astounding website.', 'compass'); ?></p>
		</div>
		</div> 
		<div class="theme_feature">
		<h2><?php _e('popular wordpress Themes from inkthemes', 'compass'); ?></h2>
		<div class="ruler"></div>
		<ul>
		<li>
		<div class="item animated">
		<img src="<?php echo get_template_directory_uri(); ?>/functions/images/th1.png" />
		<span class="zoom"><a href="<?php echo esc_url('http://www.inkthemes.com/wp-themes/corporate-wordpress-theme/'); ?>" target="_blank"><?php _e('Read More', 'compass'); ?></a></span>
		</div>
		<p><?php _e('Business & Blog', 'compass'); ?></p>
		<span class="detail"><?php _e('WordPress Themes', 'compass'); ?></span>
		</li>
		<li>
		<div class="item animated">
		<img src="<?php echo get_template_directory_uri(); ?>/functions/images/th2.png" />
		<span class="zoom"><a href="<?php echo esc_url('http://www.inkthemes.com/wp-themes/geocraft-directory-listing-wordpress-theme/'); ?>" target="_blank"><?php _e('Read More', 'compass'); ?></a></span>
		</div>
		<p><?php _e('Directory & Classified', 'compass'); ?></p>
		<span class="detail"><?php _e('WordPress Themes', 'compass'); ?></span>
		</li>
		<li>
		<div class="item animated">
		<img src="<?php echo get_template_directory_uri(); ?>/functions/images/th3.png" />
		<span class="zoom"><a href="<?php echo esc_url('http://www.inkthemes.com/wp-themes/videocraft-wordpress-theme/'); ?>" target="_blank"><?php _e('Read More', 'compass'); ?></a></span>
		</div>
		<p><?php _e('Video & Membership', 'compass'); ?></p>
		<span class="detail"><?php _e('WordPress Themes', 'compass'); ?></span>
		</li>
		<li>
		<div class="item animated">
		<img src="<?php echo get_template_directory_uri(); ?>/functions/images/th4.png" />
		<span class="zoom"><a href="<?php echo esc_url('http://www.inkthemes.com/wp-themes/appointway-wordpress-theme/'); ?>" target="_blank"><?php _e('Read More', 'compass'); ?></a></span>
		</div>
		<p><?php _e('Appointment & Lead', 'compass'); ?></p>
		<span class="detail"><?php _e('WordPress Themes', 'compass'); ?></span>
		</li>
		<li>
		<div class="item animated">
		<img src="<?php echo get_template_directory_uri(); ?>/functions/images/th5.png" />
		<span class="zoom"><a href="<?php echo esc_url('http://www.inkthemes.com/wp-themes/wordpress-marketplace-theme/'); ?>" target="_blank"><?php _e('Read More', 'compass'); ?></a></span>
		</div>
		<p><?php _e('Ecommerce & Sales', 'compass'); ?></p>
		<span class="detail"><?php _e('WordPress Themes', 'compass'); ?></span>
		</li>
		</ul>
		<h4><a href="<?php echo esc_url('http://www.inkthemes.com/'); ?>" target="_blank"><?php _e('And many More...', 'compass'); ?></a></h4>
		</div> 	
		<div class="bottom_feature">
		<h1><?php _e('BUMPER BONUSES (OVER $820) FOR FREE', 'compass'); ?></h1>
		</div> 
		</div> 
        </div>
    </div>
<div class="inkthemes_advert" id="inkthemes_advert">	
        <div class="inkthemes_block_wrapper">
            <h3><?php _e('Compass Pro Version Features', 'compass'); ?></h3>
            <div class="inkthemes_block block_two">				
                <ul>						
                    <li><div class="dashicons dashicons-controls-play"></div><?php _e('8 Built in Color Schemes', 'compass'); ?></li>
                    <li><div class="dashicons dashicons-controls-play"></div><?php _e('PDF/Video Documentations', 'compass'); ?></li>
                    <li><div class="dashicons dashicons-controls-play"></div><?php _e('Cool Styling Features', 'compass'); ?></li>
                    <li><div class="dashicons dashicons-controls-play"></div><?php _e('Multiple Slider Options', 'compass'); ?></li>
                </ul>
            </div>
            <div class="inkthemes_block block_three">
                <ul>
                    <li><div class="dashicons dashicons-controls-play"></div><?php _e('Seo optimized Theme', 'compass'); ?></li>
                    <li><div class="dashicons dashicons-controls-play"></div><?php _e('Translation Ready', 'compass'); ?></li>
                    <li><div class="dashicons dashicons-controls-play"></div><?php _e('Improved Gallery Effect', 'compass'); ?></li>
                    <li><div class="dashicons dashicons-controls-play"></div><?php _e('Gallery & Contact Page', 'compass'); ?></li>						
                </ul>
            </div>
            <a href="<?php echo esc_url($pro_theme_demo); ?>" target="blank" class="btn btn-demo"><?php _e('View Pro Demo', 'compass'); ?></a>
            <a href="<?php echo esc_url($pro_theme_url); ?>" target="_blank" class="btn btn-upgrade"><?php _e('Upgrade to Pro', 'compass'); ?></a>
        </div>
        <div class="inkthemes_block block_four">				
            <img class="inkthemes_img_responsive " src="<?php echo get_template_directory_uri(); ?>/images/advert.png">				
        </div>
    </div>
    <div class="clear"></div>
    <div id="contain" class="theme_page">
        <div id="themesheader">
            <a href="<?php echo esc_url("http://www.inkthemes.com/"); ?>" target="_blank"><img src="<?php echo $root; ?>/functions/images/inkthemes-logo.png" /></a>
            <br/>           
            <div style="clear: both;"></div>
        </div>
        <div id="container">
		<div class="theme-item colorway">
            <div class="theme-image">
                <a href="<?php echo esc_url("http://www.inkthemes.com/wp-themes/colorway-wp-theme/"); ?>" target="_blank">
                    <img src="<?php echo $root; ?>/functions/images/colorway.jpg" />
                </a>
            </div>
            <div class="theme-desc">
                <div class="theme-title">
                    <a href="<?php echo esc_url("http://www.inkthemes.com/wp-themes/colorway-wp-theme/"); ?>" target="_blank">
                        <?php _e('Colorway Theme', 'compass'); ?>
                    </a>
                </div>
                <br />
                <?php _e('The best thing about Colorway Theme is the ease with the help of which you can convert your Website in various different Niches. &#8220;Your Clients Would Love Their Site & You Would smile in the back thinking about the Time That You Spend Building their Sites.&#8221;', 'compass'); ?>
                <br /><br />
                <?php _e('Colorway   Theme is perfect for quick and easy blogging with a clean and modern interface and tons of features. The layout does not distract from your content, which is vital for a site devoted to business & blogging.', 'compass'); ?> <br /><br />
                <div class="buy">
                    <a class="button-primary" href="<?php echo esc_url("http://www.inkthemes.com/wp-themes/colorway-wp-theme/"); ?>" target="_blank">
                        <?php _e('Buy Colorway Theme', 'compass'); ?>
                    </a>
                    &nbsp;&nbsp;&nbsp;
                    <a class="button-primary" href="<?php echo esc_url("http://wordpress.org/extend/themes/colorway"); ?>" target="_blank"><?php _e('Try Colorway Lite for FREE', 'compass'); ?></a>
                </div>
            </div>
			</div>
			<div class="theme-item">
            <div class="theme-image">
                <a href="<?php echo esc_url("http://www.inkthemes.com/wp-themes/featured-content-slider-wordpress-theme/"); ?>" target="_blank">
                    <img src="<?php echo $root; ?>/functions/images/compass.png" />
                </a>
            </div>
            <div class="theme-desc">
                <div class="theme-title">
                    <a href="<?php echo esc_url("http://www.inkthemes.com/wp-themes/featured-content-slider-wordpress-theme/"); ?>" target="_blank">
                        <?php _e('Compass Theme', 'compass'); ?>
                    </a>
                </div>
                <br />
                <?php _e('Compass is an awesome Professional Business WordPress theme with featured content sliders. It helps you to effectively showcase your business to your website visitors. The most rocking part is, it has got amazing animation effect in almost every part of its feature.', 'compass'); ?> 
                <br /><br />
                <?php _e('Compass is packed with some amazing features such as attractive multiple image Slider, facility to add video/testimonials on the homepage, showing portfolios, several page templates. Got a wonderful featured content moving sliders. Various fab icons with dynamic effect to show up your services in three-column featured area. And much more..', 'compass'); ?>
                <br /><br />
                <div class="buy">
                    <a class="button-primary" href="<?php echo esc_url("http://www.inkthemes.com/wp-themes/featured-content-slider-wordpress-theme/"); ?>" target="_blank">
                        <?php _e('Buy Compass Theme', 'compass'); ?>
                    </a>
                    &nbsp;&nbsp;&nbsp;
                    <a class="button-primary" href="<?php echo esc_url("http://wordpress.org/extend/themes/compass"); ?>" target="_blank">
                        <?php _e('Try Compass Lite for FREE', 'compass'); ?>
                    </a>
                </div>
            </div>
			</div>
			<div class="theme-item">
            <div class="theme-image">
                <a href="<?php echo esc_url("http://www.inkthemes.com/wp-themes/interior-design-wordpress-theme/"); ?>" target="_blank">
                    <img src="<?php echo $root; ?>/functions/images/blackwell.png" />
                </a>
            </div>
            <div class="theme-desc">
                <div class="theme-title">
                    <a href="<?php echo esc_url("http://www.inkthemes.com/wp-themes/interior-design-wordpress-theme/"); ?>" target="_blank">
                        <?php _e('BlackWell Theme', 'compass'); ?>
                    </a>
                </div>
                <br />
                <?php _e('BlackWell is a highly professional One Page WordPress Theme for creating interior designing websites. It provides an eye catching look showcasing most important features of your work.', 'compass'); ?> 
                <br/>
                <br/>
                <?php _e('Cool thing about BlackWell home page is it comes with a single page scrolling effect which grabs visitors attention and makes site look attractive. A start up loading timer is also there to engage the user while your site is getting loaded.', 'compass'); ?>   
					<br/><br/>
                <div class="buy">
                    <a class="button-primary" href="<?php echo esc_url("http://www.inkthemes.com/wp-themes/interior-design-wordpress-theme/"); ?>" target="_blank">
                        <?php _e('Buy BlackWell Theme', 'compass'); ?>
                    </a>
                    &nbsp;&nbsp;&nbsp;
                    <a class="button-primary" href="<?php echo esc_url("http://wordpress.org/extend/themes/blackwell"); ?>" target="_blank">
                        <?php _e('Try BlackWell Lite for FREE', 'compass'); ?>
                    </a>
                </div>
            </div>
			</div>
			<div class="theme-item">
            <div class="theme-image">
                <a href="<?php echo esc_url("http://www.inkthemes.com/wp-themes/lead-generation-wordpress-theme/"); ?>" target="_blank">
                    <img src="<?php echo $root; ?>/functions/images/blackrider.png" />
                </a>
            </div>
            <div class="theme-desc">
                <div class="theme-title">
                    <a href="<?php echo esc_url("http://www.inkthemes.com/wp-themes/lead-generation-wordpress-theme/"); ?>" target="_blank">
                        <?php _e('BlackRider Theme', 'compass'); ?>
                    </a>
                </div>
                <br />
                <?php _e('BlackRiders is one of best WordPress themes for lead generation. It gives an amazing look to your website and grabs leads for your business. You can easily capture leads from the homepage of your website. BlackRiders lets you create your business website within a minute. You can build up a very attractive business website to showcase your products and services in a better way.', 'compass'); ?>
                <br/>
                <br/>
                <?php _e('The theme comes  integrated with lead capture WordPress plugin. Just activate the plugin after installing the theme and start  getting leads. The plugin dispatches a beautiful lead capture form on your website.', 'compass'); ?>
                <br /> <br />
                <div class="buy">
                    <a class="button-primary" href="<?php echo esc_url("http://www.inkthemes.com/wp-themes/lead-generation-wordpress-theme/"); ?>" target="_blank">
                        <?php _e('Buy BlackRider Theme', 'compass'); ?>
                    </a>
                    &nbsp;&nbsp;&nbsp;
                    <a class="button-primary" href="<?php echo esc_url("http://wordpress.org/extend/themes/black-rider/"); ?>" target="_blank">
                        <?php _e('Try BlackRider Lite for FREE', 'compass'); ?>
                    </a>
                </div>
            </div>
			</div>
			<div class="theme-item">
            <div class="theme-image">
                <a href="<?php echo esc_url("http://www.inkthemes.com/wp-themes/corporate-wordpress-theme/"); ?>" target="_blank">
                    <img src="<?php echo $root; ?>/functions/images/butterbelly.png" />
                </a>
            </div>
            <div class="theme-desc">
                <div class="theme-title">
                    <a href="<?php echo esc_url("http://www.inkthemes.com/wp-themes/corporate-wordpress-theme/"); ?>" target="_blank">
                        <?php _e('Butterbelly Theme', 'compass'); ?>
                    </a>
                </div>
                <br />
                <?php _e('For creating a informative corporate WordPress website that perfectly highlights your company profile, business services, attract new visitors, generate leads etc, one need to have a awesome corporate WordPress theme like ButterBelly.', 'compass'); ?> 
                <br/><br/>
                <?php _e('ButterBelly is a clean, elegant and fully responsive Corporate WordPress Theme, designed specially for corporate websites. The theme is very easy to use and simple to handle. It makes easier for you to get your site ready in few minutes.', 'compass'); ?>
                <br /> <br />
                <div class="buy">
                    <a class="button-primary" href="<?php echo esc_url("http://www.inkthemes.com/wp-themes/corporate-wordpress-theme/"); ?>" target="_blank">
                        <?php _e('Buy ButterBelly Theme', 'compass'); ?>
                    </a>
                    &nbsp;&nbsp;&nbsp;
                    <a class="button-primary" target="_blank" href="<?php echo esc_url("http://wordpress.org/extend/themes/butterbelly"); ?>">
                        <?php _e('Try ButterBelly Lite for FREE', 'compass'); ?>
                    </a>
                </div>
            </div>
        </div>
            <div class="theme-item">
            <div class="theme-image">
                <a href="<?php echo esc_url("http://www.inkthemes.com/wp-themes/wordpress-photography-theme/"); ?>" target="_blank">
                    <img src="<?php echo $root; ?>/functions/images/photomaker.png" />
                </a>
            </div>
            <div class="theme-desc">
                <div class="theme-title">
                    <a href="<?php echo esc_url("http://www.inkthemes.com/wp-themes/wordpress-photography-theme/"); ?>" target="_blank">
                        <?php _e('Photomaker Theme', 'compass'); ?>
                    </a>
                </div>
                <br />
                <?php _e('As a Photographer one must need to display their work online, as it is the best means of demonstrating your high quality photographs and arts which makes you stand out among all.', 'compass'); ?> 
                <br/><br/>
                <?php _e('We have very carefully designed and crafted this theme to make your photos look elegant and spectacular on any device. Now you can market your work with this photography theme and can showcase your collection on your WordPress website.', 'compass'); ?>
                <br /> <br />
                <div class="buy">
                    <a class="button-primary" href="<?php echo esc_url("http://www.inkthemes.com/wp-themes/wordpress-photography-theme/"); ?>" target="_blank">
                        <?php _e('Buy Photomaker Theme', 'compass'); ?>
                    </a>
                    &nbsp;&nbsp;&nbsp;
                    <a class="button-primary" target="_blank" href="<?php echo esc_url("http://wordpress.org/extend/themes/photomaker"); ?>">
                        <?php _e('Try Photomaker Lite for FREE', 'compass'); ?>
                    </a>
                </div>
            </div>
        </div>
            <div class="theme-item">
            <div class="theme-image">
                <a href="<?php echo esc_url("http://www.inkthemes.com/wp-themes/wordpress-business-theme/"); ?>" target="_blank">
                    <img src="<?php echo $root; ?>/functions/images/harrington.png" />
                </a>
            </div>
            <div class="theme-desc">
                <div class="theme-title">
                    <a href="<?php echo esc_url("http://www.inkthemes.com/wp-themes/wordpress-business-theme/"); ?>" target="_blank">
                        <?php _e('Harrington Theme', 'compass'); ?>
                    </a>
                </div>
                <br />
                <?php _e('Harrington is a nice, clean and one of the super WordPress themes for business that comes with a variable slider on home page which gives a moving effect to your images.', 'compass'); ?> 
                <br/><br/>
                <?php _e('Harrington comes with Ken Burns slider which gives animation effects to your slider images.. That makes Harrington completely outstanding as compared to other WordPress themes. You can adjust the speed of slider as well from the theme option panel', 'compass'); ?>
                <br /> <br />
                <div class="buy">
                    <a class="button-primary" href="<?php echo esc_url("http://www.inkthemes.com/wp-themes/wordpress-business-theme/"); ?>" target="_blank">
                        <?php _e('Buy Harrington Theme', 'compass'); ?>
                    </a>
                    &nbsp;&nbsp;&nbsp;
                    <a class="button-primary" target="_blank" href="<?php echo esc_url("http://wordpress.org/extend/themes/harrington"); ?>">
                        <?php _e('Try Harrington Lite for FREE', 'compass'); ?>
                    </a>
                </div>
            </div>
        </div>
        <div class="theme-item">
            <div class="theme-image">
                <a href="<?php echo esc_url("http://www.inkthemes.com/wp-themes/geocraft-directory-listing-wordpress-theme/"); ?>" target="_blank">
                    <img src="<?php echo $root; ?>/functions/images/geocraft.png" />
                </a>
            </div>
            <div class="theme-desc">
                <div class="theme-title">
                    <a href="<?php echo esc_url("http://www.inkthemes.com/wp-themes/geocraft-directory-listing-wordpress-theme/"); ?>" target="_blank">
                        <?php _e('GeoCraft Directory Theme', 'compass'); ?>
                    </a>
                </div>
                <br />
                <?php _e('Now you can easily setup a WP directory listing website and start earning online. GeoCraft v2 Theme lets you get your City Business Directory Website online within minutes.', 'compass'); ?> 
                <br/><br/>
                <?php _e('Fully Responsive WordPress Business Directory Theme, One Click Auto Install. Extremely Easy to use. You can create Featured Business Listing. Can generate revenue for you via Paypal (Complete Integrated System) You can create Free/Paid Business Listing. Fully Integrated with User Submission System and much more', 'compass'); ?>
                <br/><br/>
                <div class="buy">
                    <a class="button-primary" href="<?php echo esc_url("http://www.inkthemes.com/wp-themes/geocraft-directory-listing-wordpress-theme/"); ?>" target="_blank">
                        <?php _e('Buy GeoCraft Theme', 'compass'); ?>
                    </a>
                    &nbsp;&nbsp;&nbsp;
                    <a class="button-primary" target="_blank" href="<?php echo esc_url("http://wordpress.org/extend/themes/business-directory"); ?>">
                        <?php _e('Try GeoCraft Lite for FREE', 'compass'); ?>
                    </a>
                </div>
            </div>
        </div>
		</div>		
    </div>
	 <div class="inkthemes-admin-sidebar">
		 <div class="theme-notification">
        <div class="postbox-container" id="main">
            <div class="notification-box">
                <h3><?php _e("Get Themes email updates and a free WordPress ebook", 'compass'); ?></h3>
                <p><?php _e("We'll send you new updates about themes and WordPress and a free WordPress tips & tricks ebook!", 'compass'); ?>
                </p>
                <div class = "form-container">
                    <form accept-charset="UTF-8" action="//www.formget.com/mailget/signups/subscribe/IjgwNCI_3D " name="mailget_form" method="post" onsubmit="return v_mailget()" >
                        <div class="form-button-container">
                            <input name="utf8" type="hidden" value="?"/>
                            <input name="subs_set_url" type="hidden" value="<?php echo esc_url($site_url); ?>"/>
                            <input name="subs_name" type="text" placeholder="<?php _e('Your Name', 'compass'); ?>" required />
                            <input name="subs_email" type="email" value="<?php echo get_option('admin_email', 'email address'); ?>" required/>
                        </div>                           
                        <input type="submit" value="Subscribe and get a free ebook" name="subscribe" class="button button-primary">
                    </form>
                </div>
            </div>
            <div class="horizontal-line"></div>
            <div>
                <h3><?php _e('Get the Compass Pro Theme', 'compass'); ?></h3>
                <p><?php _e('You are using the Lite Version of compass Theme. Upgrade to Pro for extra features like Home Page Slider Contact Page, Gallery Features, Portfolio Page Template, FullWidth Page Templates, Multiple Color Options and much more.', 'compass'); ?></p>
                <a class="button-primary" href="<?php echo esc_url($pro_theme_url); ?>" target="_blank"><?php _e('Get the Compass Pro', 'compass'); ?></a>
            </div>
            <div class="horizontal-line"></div>
            <div>
                <h3><?php _e('Rate us on WordPress.org ', 'compass'); ?></h3>
                <p><?php _e('Get Best Theme support. We are always ready to solve your queries. Just started your query at InkThemes.com', 'compass'); ?></p>
                <a class="button-primary" href="<?php echo esc_url('http://www.inkthemes.com/community'); ?>" target="_blank"><?php _e('Get Free Support', 'compass'); ?></a>
            </div>
        </div>
    </div>
	</div>
    <?php
}