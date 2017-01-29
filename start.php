<?php

elgg_register_event_handler( 'init', 'system', 'elgg_social_login_init' );

function elgg_social_login_init()
{
        // Register a page handler, so we can have nice URLs
        elgg_register_page_handler('authenticate', 'elgg_social_login_page_handler');
    
        elgg_extend_view( 'forms/login'   , 'elgg_social_login/login' );
        elgg_extend_view( 'forms/register', 'elgg_social_login/login' );
}

/**
 *  Dispatches authenticate pages.
 *
 * @param array $page
 * @return bool
 */
function elgg_social_login_page_handler($page) {
    
    $page_type = elgg_extract(0, $page, '');
    $resource_vars = [
        'provider' => $page_type,
    ];    
    
    echo elgg_view_resource('elgg_social_login/authenticate', $resource_vars);
    
    return true;
}