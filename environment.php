<?php

if(! defined('ENVIRONMENT') )
{
    $domain = strtolower($_SERVER['HTTP_HOST']);

    switch($domain) {
        case 'arcsystems.ng' :
        case 'www.arcsystems.ng':
            define('ENVIRONMENT', 'production');
            break;
        default :
            define('ENVIRONMENT', 'development');
            break;
    }
}