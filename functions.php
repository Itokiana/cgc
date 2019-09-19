<?php
function display_hello() {
    echo "Coucou tout le monde";
}


add_action('wp_head', 'include_stylesheet');
function include_stylesheet(){
    echo '<link href="'.get_bloginfo('template_directory') . '/css/themify-icons.css" rel="stylesheet">';
    echo '<link href="'.get_bloginfo('template_directory') . '/css/build.css" rel="stylesheet">';
    echo '<link href="'.get_bloginfo('template_directory') . '/css/style.css" rel="stylesheet">';
    echo '<link href="'.get_bloginfo('template_directory') . '/css/animate.css" rel="stylesheet">';
    echo '<link href="'.get_bloginfo('template_directory') . '/css/aos.css" rel="stylesheet">';
}

add_action('wp_footer', 'include_scripts_file');
function include_scripts_file(){
    echo '<script src="'.get_bloginfo('template_directory') . '/js/jquery.min.js"></script>';
    echo '<script src="'.get_bloginfo('template_directory') . '/js/bootstrap.min.js"></script>';
    echo '<script src="'.get_bloginfo('template_directory') . '/js/aos.js"></script>';
    echo '<script src="'.get_bloginfo('template_directory') . '/js/main.js"></script>';
    // echo '<script src="'.get_bloginfo('template_directory') . '/js/easypiechart-data.js"></script>';
}
?>