<?php

require_once 'whatsprot.class.php';

/*  [[[[[[[[[[[[[[[       ]]]]]]]]]]]]]]]
    [::::::::::::::       ::::::::::::::]
    [::::::::::::::       ::::::::::::::]
    [::::::[[[[[[[:       :]]]]]]]::::::]
    [:::::[                       ]:::::]
    [:::::[                       ]:::::]
    [:::::[                       ]:::::]
    [:::::[                       ]:::::]
    [:::::[  WhatsApp Application ]:::::]
    [:::::[ Through Web Interface ]:::::]
    [:::::[     Done by : Malik   ]:::::]
    [:::::[                       ]:::::]
    [:::::[                       ]:::::]
    [:::::[                       ]:::::]
    [::::::[[[[[[[:       :]]]]]]]::::::]
    [::::::::::::::       ::::::::::::::]
    [::::::::::::::       ::::::::::::::]
    [[[[[[[[[[[[[[[       ]]]]]]]]]]]]]]] */


$username = '96171313908';                    // Your number with country code, ie: 34123456789
$nickname = 'Malik';                          // Your nickname, it will appear in push notifications
$debug    = true;                             // You can see nodes and more information if you set it to true, if not, set it to false.
$log      = true;                             // Enables log file, this is set to false if not specified

$w = new WhatsProt($username, $nickname, $debug, $log);     //Instance of WhatsProt


$r = new Registration($username, $debug);
$r->codeRequest('sms');                       // could be 'voice' too       //$r->codeRequest('voice');

//$r->codeRequest($method, $carrier);         //You can use this to be more accurate, select the name of your carrier from NetworkInfo excel sheet

//When requesting the code, you can do it via SMS or voice call, in both cases you will receive a code like 123-456, that we will use for register the number.

//Sometimes the message is 'sent' but never arrives, this is because of the mobile networks, you can check the F.A.Q. for more information about this. If you want to request code again with the same number, you will have to wait the retry_after, in this case 10805 seconds.

//At this step, we should receive out code, we can register it using this:

//If you received the code like this 123-456 you should register like this '123456'

//$code = '123456';

//$r->codeRegister($code);

?>