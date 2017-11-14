<?php

// Load private settings:
require_once realpath( dirname(__FILE__).'/private/load.php' );

try {
    // Start client session;
    \session_start();
    
    // Initialize Braintree:
    require_once realpath( dirname(__FILE__).'/braintree_init.php' );
    
    // CGI runtime application in php:
    include_once realpath( dirname(__FILE__).'/controller.php' );
    
} catch( \ErrorException $error ){
    // output XML communique when error occurred:
    echo $error->getCommunique( );
    exit( 0 );
}