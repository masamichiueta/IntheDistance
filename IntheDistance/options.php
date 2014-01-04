<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 * By default it uses the theme name, in lowercase and without spaces, but this can be changed if needed.
 * If the identifier changes, it'll appear as if the options have been reset.
 *
 */
 
 /*
 * Helper function to return the theme option value. If no value has been saved, it returns $default.
 * Needed because options are saved as serialized strings.
 *
 * This code allows the theme to work without errors if the Options Framework plugin has been disabled.
 */

function optionsframework_option_name() {

	// This gets the theme name from the stylesheet (lowercase and without spaces)
	$themename = get_option( 'stylesheet' );
	$themename = preg_replace("/\W/", "_", strtolower($themename) );

	$optionsframework_settings = get_option('optionsframework');
	$optionsframework_settings['id'] = $themename;
	update_option('optionsframework', $optionsframework_settings);

	// echo $themename;
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the 'id' fields, make sure to use all lowercase and no spaces.
 *
 */

function optionsframework_options() {

	// If using image radio buttons, define a directory path
	$imagepath =  get_template_directory_uri() . '/images/';
	
	// Options array	
	$options = array();
		
	$options[] = array( 'name' => __('General Options','inthedistance'),
                    	'type' => 'heading');
						
	$options['logo'] = array( 'name' => __('Custom Logo','inthedistance'),
						'desc' => __('Upload a logo image. Height 59px is recommended.','inthedistance'),
						'id' => 'logo',
						'type' => 'upload');
						
	$options[] = array( 'name' => __('Custom Favicon','inthedistance'),
						'desc' => __('Upload a 16px x 16px Png/Gif image to represent your website.','inthedistance'),
						'id' => 'custom_favicon',
						'type' => 'upload');
						
	$options[] = array( 'name' => __('Apple touch icon','inthedistance'),
						'desc' => __('Upload a 500px x 50px Png/Gif image for smartphone icon.','inthedistance'),
						'id' => 'apple_touch_icon',
						'type' => 'upload');
						
	$options[] = array( 'name' => __('Footer copyright', 'inthedistance'),
						'desc' => __('Footer copyright.', 'inthedistance'),
						'id' => 'footer_copyright',
						'std' => '',
						'type' => 'text');
						
	$options[] = array( 'name' => __('Github account url', 'inthedistance'),
						'desc' => __('Github account url.', 'inthedistance'),
						'id' => 'github_account_url',
						'std' => '',
						'type' => 'text');
						
	$options[] = array( 'name' => __('Twitter account url', 'inthedistance'),
						'desc' => __('Twitter account url.', 'inthedistance'),
						'id' => 'twitter_account_url',
						'std' => '',
						'type' => 'text');
						
	$options[] = array( 'name' => __('Facebook account url', 'inthedistance'),
						'desc' => __('Facebook account url.', 'inthedistance'),
						'id' => 'facebook_account_url',
						'std' => '',
						'type' => 'text');
						
	$options[] = array( "name" => __('Home Page Options','inthedistance'),
						"type" => "heading");
						
	$options[] = array( 'name' => __('Home Page Image','inthedistance'),
						'desc' => __('Upload a Png/Gif image (recommends 300px x 300px) to represent your home page.','inthedistance'),
						'id' => 'homepage_image',
						'type' => 'upload');
						
	$options[] = array( 'name' => __('Heading', 'inthedistance'),
						'desc' => __('Heading of your homepage.', 'inthedistance'),
						'id' => 'homepage_heading',
						'std' => '',
						'type' => 'text');
						
	$options[] = array( 'name' => __('Description', 'inthedistance'),
						'desc' => __('Description of your homepage, your biography etc.', 'inthedistance'),
						'id' => 'homepage_description',
						'std' => '',
						'type' => 'textarea');


	return $options;
}