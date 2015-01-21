<?php

function custom_excerpt_length($length)
{
return 25;
}

add_filter('excerpt_length', 'custom_excerpt_length');

add_theme_support( 'post-thumbnails' );



//gravatar

add_filter( 'avatar_defaults', 'newgravatar' );

function newgravatar ($avatar_defaults) {
    $myavatar = get_bloginfo('template_directory') . '/images/gravatar.jpg';
    $avatar_defaults[$myavatar] = "LessHyperSounds";
    return $avatar_defaults;
}

?>