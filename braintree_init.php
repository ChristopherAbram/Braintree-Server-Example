<?php

// Set Braintree autoload:
require_once 'lib/autoload.php';

// Set up braintree credentials:
Braintree\Configuration::environment(BT_ENVIRONMENT);
Braintree\Configuration::merchantId(BT_MERCHANT_ID);
Braintree\Configuration::publicKey(BT_PUBLIC_KEY);
Braintree\Configuration::privateKey(BT_PRIVATE_KEY);