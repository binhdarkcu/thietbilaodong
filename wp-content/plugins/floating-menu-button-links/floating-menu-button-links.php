<?php
/**
 * Plugin Name: 		Floating Menu Button Links
 * Plugin URI:          https://floatingmenu.blocksera.com
 * Author: 				Blocksera
 * Author URI:			https://blocksera.com
 * Description: 		Add Static floating button type Links to your web pages
 * Version: 			1.0
 * Requires at least:   4.0
 * Tested up to:        5.1.1
 * License: 			GPL v3
 * Text Domain:			floating-menu-button-links
 * Domain Path: 		/languages
 *
**/

define('PLUGIN_URL', plugin_dir_url(__FILE__));
define('PLUGIN_PATH', plugin_dir_path(__FILE__));

register_activation_hook( __FILE__, 'fmbl_plugin_activation' );
register_deactivation_hook( __FILE__, 'fmbl_plugin_deactivation' );

function fmbl_plugin_activation(){
    add_option('fmbl_activate_option', 'activate');
    add_option('fmbl_option_1', get_admin_url());
    add_option('fmbl_option_6', 'cog');
    add_option('fmbl_option_11', 'bars');
    add_option('fmbl_radio_option_1', 'right');
    add_option('fmbl_isize_option', '24');
    add_option('fmbl_radio_option_2', 'pixel');
    add_option('fmbl_normal_color', '#3e87ec');
    add_option('fmbl_icolor_option', '#ffffff');
    add_option('fmbl_bcolor_option', '#a53125');
    add_option('fmbl_hover_color', '#a54f45');
}

function fmbl_plugin_deactivation(){
    
}

///////////////////////////////

add_action( 'admin_init', function() {
    
    register_setting( 'floating-button-settings', 'fmbl_option_1' );
    register_setting( 'floating-button-settings', 'fmbl_option_2' );
    register_setting( 'floating-button-settings', 'fmbl_option_3' );
    register_setting( 'floating-button-settings', 'fmbl_option_4' );
    register_setting( 'floating-button-settings', 'fmbl_option_5' );
    register_setting( 'floating-button-settings', 'fmbl_option_6' );
    register_setting( 'floating-button-settings', 'fmbl_option_7' );
    register_setting( 'floating-button-settings', 'fmbl_option_8' );
    register_setting( 'floating-button-settings', 'fmbl_option_9' );
    register_setting( 'floating-button-settings', 'fmbl_option_10' );
    register_setting( 'floating-button-settings', 'fmbl_option_11' );
    register_setting( 'floating-button-settings', 'fmbl_radio_option_1' );
    register_setting( 'floating-button-settings', 'fmbl_isize_option' );
    register_setting( 'floating-button-settings', 'fmbl_radio_option_2' );
    register_setting( 'floating-button-settings', 'fmbl_normal_color' );
    register_setting( 'floating-button-settings', 'fmbl_hover_color' );    
    register_setting( 'floating-button-settings', 'fmbl_icolor_option' );
    register_setting( 'floating-button-settings', 'fmbl_bcolor_option' );
    register_setting( 'floating-button-settings', 'fmbl_activate_option' );
});

///////////////////////////////

add_action('admin_menu', function() {
    add_options_page( 'Floating Menu Button Links', 'Floating Buttons', 'manage_options', 'floating-menu-button-links', 'floating_menu_button_links' );
});

function floating_menu_button_links() {
    require_once(PLUGIN_PATH.'/includes/fontawesome-list.php');
    require_once(PLUGIN_PATH.'/includes/admin-settings.php');
}

///////////////////////////////

function register_admin_styles() {
    wp_enqueue_style( 'options_style', PLUGIN_URL  . 'assets/css/options_style.css', 'all', '1.0');
    wp_enqueue_style( 'prefix-font-awesome', PLUGIN_URL  . 'assets/css/font-awesome.min.css', 'all', '1.0' );
    wp_enqueue_script( 'fmbl-selecticon', PLUGIN_URL  . 'assets/js/fmbl-selecticon.js', array('jquery', 'wp-color-picker'), 'all', '1.1',true);
    wp_enqueue_style( 'wp-color-picker' ); 
}
add_action( 'admin_enqueue_scripts', 'register_admin_styles' );

function register_output_styles() {
    wp_enqueue_style( 'prefix-font-awesome', PLUGIN_URL  . 'assets/css/font-awesome.min.css', 'all', '1.0' );
    wp_enqueue_style( 'floatstyle', PLUGIN_URL  . 'assets/css/floatstyle.css', 'all', '1.2');
    wp_enqueue_script( 'float', PLUGIN_URL  . 'assets/js/float.js',array('jquery'), 'all', '1.1',true);
}
add_action( 'wp_enqueue_scripts', 'register_output_styles' );


///////////////////////////////

function fmbl_your_function() {    
    $link1 = esc_url(get_option('fmbl_option_1','')); 
    $link2 = esc_url(get_option('fmbl_option_2','')); 
    $link3 = esc_url(get_option('fmbl_option_3','')); 
    $link4 = esc_url(get_option('fmbl_option_4','')); 
    $link5 = esc_url(get_option('fmbl_option_5','')); 
    $icon1 = esc_attr(get_option('fmbl_option_6','')); 
    $icon2 = esc_attr(get_option('fmbl_option_7','')); 
    $icon3 = esc_attr(get_option('fmbl_option_8','')); 
    $icon4 = esc_attr(get_option('fmbl_option_9','')); 
    $icon5 = esc_attr(get_option('fmbl_option_10','')); 
    $icon_menu = esc_attr(get_option('fmbl_option_11',''));
    $font_type = esc_attr(get_option('fmbl_radio_option_2','')); 
    $icon_size = (int) get_option('fmbl_isize_option',''); 
    $radio_option_1 = esc_attr(get_option('fmbl_radio_option_1','')); 
    $icon_color         = esc_attr(get_option('fmbl_icolor_option','')); 
    $icon_bg_color      = esc_attr(get_option('fmbl_bcolor_option','')); 
    $icon_normal_color  = esc_attr(get_option('fmbl_normal_color','')); 
    $icon_hover_color   = esc_attr(get_option('fmbl_hover_color','')); 

    $output = '<div class="fmbl-menu-cover pos-' . $radio_option_1 . '">
                   <style type="text/css">

                        .floating-menu-link li {';
                            $output .= 'background-color: '. $icon_bg_color . ';';
                            if(!empty($icon_size)){
                                if($font_type == "pixel") {
                                    $output .=  'font-size: ' .$icon_size .'px;';
                                    $output .=  'width: calc('.$icon_size . ' * 2px);';
                                    $output .=  'height: calc('.$icon_size . ' * 2px);';
                                }
                                else if($font_type == "enum") {
                                    $output .=  'font-size: ' .$icon_size .'em;';
                                    $output .=  'width: calc('.$icon_size . ' * 2em);';
                                    $output .=  'height: calc('.$icon_size . ' * 2em);';
                                }
                            }
                        $output .= '}

                        .floating-menu-link li:hover {
                            background-color: '. $icon_hover_color . ';
                        }

                        .floating-menu-link i {                            
                            color: '.  $icon_color . ';  
                        }

                        .floating-menu {';
                            $output .= 'background-color: '. $icon_normal_color . ';   
                                                   color: '.  $icon_color . ';';
                            if(!empty($icon_size)){
                                if($font_type == "pixel") {
                                    $output .=  'font-size: ' .$icon_size .'px;';
                                    $output .=  'width: calc('.$icon_size . ' * 2px);';
                                    $output .=  'height: calc('.$icon_size . ' * 2px);';
                                }
                                else if($font_type == "enum") {
                                    $output .=  'font-size: ' .$icon_size .'em;';
                                    $output .=  'width: calc('.$icon_size . ' * 2em);';
                                    $output .=  'height: calc('.$icon_size . ' * 2em);';
                                }
                            }
                            $output .= '}

                        .floating-menu-cover {';
                            
                            if(!empty($icon_size)){
                                if($font_type == "pixel") {
                                    $output .=  'width: calc('.$icon_size . 'px);';
                                    $output .=  'height: calc('.$icon_size . 'px);';
                                }
                                else if($font_type == "enum") {
                                    $output .=  'width: calc('.$icon_size . 'em);';
                                    $output .=  'height: calc('.$icon_size . 'em);';
                                }
                            }            
                        $output .= '}

                   </style>
                    <ul class="floating-menu-link">';
                    
                    if(!empty($link1)){                    
                        $output .=  '<li><a href="' . $link1 . '" target="_blank"><i class="fa fa-' . $icon1 . '"></i></a></li>';
                    }
                    if(!empty($link2)){                    
                        $output .=  '<li><a href="' . $link2 . '" target="_blank"><i class="fa fa-' . $icon2 . '"></i></a></li>';
                    }
                    if(!empty($link3)){                    
                        $output .=  '<li><a href="' . $link3 . '" target="_blank"><i class="fa fa-' . $icon3 . '"></i></a></li>';
                    }
                    if(!empty($link4)){                    
                        $output .=  '<li><a href="' . $link4 . '" target="_blank"><i class="fa fa-' . $icon4 . '"></i></a></li>';
                    }
                    if(!empty($link5)){                    
                        $output .=  '<li><a href="' . $link5 . '" target="_blank"><i class="fa fa-' . $icon5 . '"></i></a></li>';
                    }                    
                    $output .= '</ul>
                    
                    <div class="floating-menu">
                        <div class="floating-menu-cover"><i class="fa fa-' . $icon_menu . '"></i></div>
                    </div>
                </div>'; 
    // $option = '<div class="floating-menu-link link1"><a href="' . $link1 . '"><i class="fa fa-user"></i></a></div>'; 
    echo $output;
}
if('activate' == ( esc_attr(get_option('fmbl_activate_option') ))){
    add_action( 'wp_footer', 'fmbl_your_function' );        
}

///////////////////////////////
