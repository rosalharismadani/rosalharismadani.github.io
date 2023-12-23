<?php

add_action( 'wp_enqueue_scripts', 'building_construction_architecture_chld_thm_parent_css' );
function building_construction_architecture_chld_thm_parent_css() {

    wp_enqueue_style( 
    	'building_construction_architecture_chld_css', 
    	trailingslashit( get_template_directory_uri() ) . 'style.css', 
    	array( 
    		'bootstrap',
    		'font-awesome-5',
    		'bizberg-main',
    		'bizberg-component',
    		'bizberg-style2',
    		'bizberg-responsive' 
    	) 
    );
    
}

/**
* Change the theme color
*/
add_filter( 'bizberg_theme_color', 'building_construction_architecture_change_theme_color' );
add_filter( 'bizberg_header_menu_color_hover_sticky_menu', 'building_construction_architecture_change_theme_color' );
add_filter( 'bizberg_header_button_color_sticky_menu', 'building_construction_architecture_change_theme_color' );
add_filter( 'bizberg_header_button_color_hover_sticky_menu', 'building_construction_architecture_change_theme_color' );
function building_construction_architecture_change_theme_color(){
    return '#fcb80b';
}

add_filter( 'bizberg_header_button_border_color', 'building_construction_architecture_btn_border_color' );
add_filter( 'bizberg_header_button_border_color_sticky_menu', 'building_construction_architecture_btn_border_color' );
function building_construction_architecture_btn_border_color(){
    return '#db9e04';
}


/**
* Change the header menu color hover
*/
add_filter( 'bizberg_header_menu_color_hover', 'building_construction_architecture_header_menu_color_hover' );
function building_construction_architecture_header_menu_color_hover(){
    return '#fcb80b';
}

/**
* Change the button color of header
*/
add_filter( 'bizberg_header_button_color', 'building_construction_architecture_header_button_color' );
function building_construction_architecture_header_button_color(){
    return '#fcb80b';
}

/**
* Change the button hover color of header
*/
add_filter( 'bizberg_header_button_color_hover', 'building_construction_architecture_header_button_color_hover' );
function building_construction_architecture_header_button_color_hover(){
    return '#fcb80b';
}

add_filter( 'bizberg_slider_title_box_highlight_color', function(){
    return '#fcb80b';
});

add_filter( 'bizberg_slider_arrow_background_color', function(){
    return '#fcb80b';
});

add_filter( 'bizberg_slider_dot_active_color', function(){
    return '#fcb80b';
});

add_filter( 'bizberg_slider_gradient_primary_color', function(){
    return 'rgba(252,184,11,0.65)';
});

add_filter( 'bizberg_read_more_background_color', function(){
    return '#fcb80b';
});

add_filter( 'bizberg_read_more_background_color_2', function(){
    return '#fcb80b';
});

add_filter( 'bizberg_link_color', function(){
    return '#fcb80b';
});

add_filter( 'bizberg_link_color_hover', function(){
    return '#fcb80b';
});

add_filter( 'bizberg_blog_listing_pagination_active_hover_color', function(){
    return '#fcb80b';
});

add_filter( 'bizberg_sidebar_widget_link_color_hover', function(){
    return '#fcb80b';
});

add_filter( 'bizberg_sidebar_widget_title_color', function(){
    return '#fcb80b';
});

add_filter( 'bizberg_footer_social_icon_background', function(){
    return '#fcb80b';
});

add_filter( 'bizberg_footer_social_icon_color', function(){
    return '#fff';
});

add_filter( 'bizberg_getting_started_screenshot', function(){
    return true;
});

add_filter( 'bizberg_banner_title', 'building_construction_architecture_banner_title' );
function building_construction_architecture_banner_title(){
    return current_user_can( 'edit_theme_options' ) ? esc_html__( 'Martin Peterson' , 'building-construction-architecture' ) : '';
}

add_action( 'after_setup_theme', 'building_construction_architecture_setup_theme' );
function building_construction_architecture_setup_theme() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'automatic-feed-links' );
}