<?php

$post = $wp_query->post;

if ( in_category('2') ) {

include(TEMPLATEPATH . '/single-bandas.php'); 

}else {

include(TEMPLATEPATH . '/single-default.php');

}

?>