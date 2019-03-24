<?php
// LINK TO CONFIG.PHP

//echo basename($_SERVER['PHP_SELF']);
define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//Helps prevent date errors
date_default_timezone_set('America/Los_Angeles');

//reCAPTCHA codes
$siteKey = "6LeIjZkUAAAAAD5ra2z9AAS6ZU0XuJANlBF4Xw2E";
$secretKey = "6LeIjZkUAAAAACVDvMjTLh7ykNth8M9k6_CK3xxb";

$title = THIS_PAGE;

switch(THIS_PAGE){

    case 'index.php':
    $title = 'Of The Mountain';
    break;

    case 'contact.php':
    $title = 'Contact JadeRode';
    break;

    case 'about.php':
    $title = 'About JadeRode';
    break;

    case 'schedule.php':
    $title = 'Streaming Schedule';
    break;
}

?>