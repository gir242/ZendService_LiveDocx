<?php

include_once realpath('../../../../Bootstrap.php');


use ZendService\LiveDocx\DemoHelper as Helper;
use ZendService\LiveDocx\MailMerge;

Helper::printLine(
    PHP_EOL . 'Using LiveDocx Fully Licensed' .
    PHP_EOL .
    PHP_EOL . 'This sample application illustrates how to use the Zend Framework LiveDocx component with the LiveDocx running in your own network.' .
    PHP_EOL .
    PHP_EOL
);

// -----------------------------------------------------------------------------

// Pass login credentials using set methods

$mailMerge = new MailMerge();

$mailMerge->setUsername(DEMOS_ZENDSERVICE_LIVEDOCX_FULLY_LICENSED_USERNAME)  // set your username here
          ->setPassword(DEMOS_ZENDSERVICE_LIVEDOCX_FULLY_LICENSED_PASSWORD)  // set your password here
          ->setWsdl    (DEMOS_ZENDSERVICE_LIVEDOCX_FULLY_LICENSED_WSDL);     // set the WSDL of your locally installed,
                                                                             // LiveDocx Fully Licensed server here
$mailMerge->getTemplateFormats(); // then call methods as usual

printf('Username : %s%sPassword : %s%s    WSDL : %s%s%s',
    $mailMerge->getUsername(),
    PHP_EOL,
    $mailMerge->getPassword(),
    PHP_EOL,
    $mailMerge->getWsdl(),
    PHP_EOL,
    PHP_EOL
);

unset($mailMerge);

// -----------------------------------------------------------------------------

// Pass login credentials using constructor

$mailMerge = new MailMerge();

$mailMerge = new MailMerge(array(
    'username' => DEMOS_ZENDSERVICE_LIVEDOCX_FULLY_LICENSED_USERNAME,        // set your username here
    'password' => DEMOS_ZENDSERVICE_LIVEDOCX_FULLY_LICENSED_PASSWORD,        // set your password here
        'wsdl' => DEMOS_ZENDSERVICE_LIVEDOCX_FULLY_LICENSED_WSDL));          // set the WSDL of your
                                                                             // LiveDocx Fully Licensed server here
$mailMerge->getTemplateFormats(); // then call methods as usual

printf('Username : %s%sPassword : %s%s    WSDL : %s%s%s',
    $mailMerge->getUsername(),
    PHP_EOL,
    $mailMerge->getPassword(),
    PHP_EOL,
    $mailMerge->getWsdl(),
    PHP_EOL,
    PHP_EOL
);

unset($mailMerge);

// -----------------------------------------------------------------------------