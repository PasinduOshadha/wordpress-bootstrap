<?php

/*
TODO
Check ACF free installed
Check ACF PRO > V5.8.0 installed
*/

function check(){
    return false;
}

add_action('wp_footer', 'check');