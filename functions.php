<?php
/*
Author: 		Div Truth LLC
Developer URI:  http://www.DivTruth.com
Description:    Project functions, used as a control panel for the different functions and features included in the theme

Use this file to include/hook the files needed for this child theme
*/
  
/************************************
 * Load active features
 ************************************/
function theme_active_features(){
	/********************************************
	 * FEATURE: ACF FIELDS
	 * @description: Export any ACF fields
	 *		created for this theme to custom PHP
	 * 		files and include using this file
	 ********************************************/
    require_once(THEME_FEATURES_DIR.'/acf-fields.php');         
    
    /********************************************
	 * FEATURE: THEME SUPPORT OPTIONS
	 * @description: Setup for all theme support 
	 *		options for this child theme
	 ********************************************/
    require_once(THEME_FEATURES_DIR.'/theme-support.php');

    /********************************************
	 * FEATURE: SIDEBARS
	 * @description: Used to register new sidebars
	 *		specifically for this theme
	 ********************************************/
    require_once(THEME_FEATURES_DIR.'/sidebars.php');

    /********************************************
	 * FEATURE: SHORTCODES
	 * @description: All theme related shortcodes
	 *		should be developed and called out
	 *		through this file
	 ********************************************/
    require_once(THEME_FEATURES_DIR.'/shortcodes.php');

}
add_action('after_setup_theme', 'theme_active_features');