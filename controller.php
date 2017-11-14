<?php

try {
    // Retrieve command:
    $cmd = isset($_GET['cmd']) ? $_GET['cmd'] : '';
    
    if(!empty($cmd)){
        if($cmd == "clientToken"){
            // Generate Braintree client token:
            require_once realpath( dirname(__FILE__).'/client_token.php' );
        }
        else if($cmd == "transaction"){
            require_once realpath( dirname(__FILE__).'/transaction.php' );
        }
    }
    else {
        // Error ...
    }
    
    //var_dump($_GET);
    
} catch(Exception $e){
    echo $e->getMessage();
}