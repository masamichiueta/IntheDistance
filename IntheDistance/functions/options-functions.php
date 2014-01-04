<?php
/**
 * @package IntheDistance
 */
 
/**
 * Theme options require the "Options Framework" plugin to be installed in order to display.
 * If it's not installed, default settings will be used.
 */
 
 
if ( !function_exists( 'of_get_option' ) ) {
	function of_get_option($name, $default = false) {
		
		$optionsframework_settings = get_option('optionsframework');
		
		// Gets the unique option id
		$option_name = $optionsframework_settings['id'];
		
		if ( get_option($option_name) ) {
			$options = get_option($option_name);
		}
			
		if ( isset($options[$name]) ) {
			return $options[$name];
		} else {
			return $default;
		}
	}
}


if ( !function_exists( 'optionsframework_init' ) && current_user_can('edit_theme_options') ) {
	function portfolio_options_default() {
		add_theme_page(__('Theme Options','inthedistance'), __('Theme Options','inthedistance'), 'edit_theme_options', 'options-framework','optionsframework_page_notice');
	}
	add_action('admin_menu', 'inthedisatance_options_default');
}

/**
 * Displays a notice on the theme options page if the Options Framework plugin is not installed
 */

if ( !function_exists( 'optionsframework_page_notice' ) ) {
	function optionsframework_page_notice() { ?>
	
		<div class="wrap">
		<?php screen_icon( 'themes' ); ?>
		<h2><?php _e('Theme Options','inthedistance'); ?></h2>
        <p><b><?php printf( __( 'If you would like to use the IntheDistance theme options, please install the %s plugin.', 'inthedistance' ), '<a href="http://wptheming.com/">Options Framework</a>' ); ?></b></p>
        <p><?php _e('Once the plugin is activated you will have option to:','inthedistance'); ?></p>
        <ul class="ul-disc">
        <li><?php _e('Upload a logo image','inthedistance'); ?></li>
        <li><?php _e('Upload a custom favicon','inthedistance'); ?></li>
        <li><?php _e('Upload a apple touch icon','inthedistance'); ?></li>
        <li><?php _e('Update the footer text','inthedistance'); ?></li>
        <li><?php _e('Update the github url','inthedistance'); ?></li>
        <li><?php _e('Update the twitter url','inthedistance'); ?></li>
        <li><?php _e('Update the facebook url','inthedistance'); ?></li>
        </ul>
        
        <p><?php _e('If you don\'t need these options, the plugin is not required and default settings will be used.','inthedistance'); ?></p>
		</div>
	<?php
	}
}

/**
 * Additional content to display after the options panel
 * if it is installed
 */

function inthedistance_panel_info() { ?>
    <p>In the Distance. Simple and Beautiful Theme. Created by <a href="http://www.uetamasamichi.com">Masamichi Ueta</a>.</p>
<?php }

add_action('optionsframework_after','inthedistance_panel_info', 100);


?>