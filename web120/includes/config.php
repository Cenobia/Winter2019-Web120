<?php
// LINK TO CONFIG.PHP

//reCAPTCHA LOCATED HERE:
include 'credentials.php';

//echo basename($_SERVER['PHP_SELF']);
define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//Helps prevent date errors
date_default_timezone_set('America/Los_Angeles');

//echo THIS_PAGE;

//die;

$title = THIS_PAGE;

switch(THIS_PAGE){

    case 'index.php':
    $title = 'Jordan\'s Web Portal';
    $logo = "fa-home";
    break;

    case 'contactme.php':
    $title = 'Contact Jordan';
    $logo = "fa-paper-plane-o";
    break;

    case 'aia.php':
    $title = 'Audience Issues and Approach';
    $logo = "fa-question-circle";
    break;
}

//place URL & labels in the array here for navigation:
$nav1['index.php'] = "Welcome";
$nav1['big/index.php'] = "Big";
$nav1['aia.php'] = "AIA";
$nav1['https://docs.google.com/document/d/17nXcFfGNcPjKSRcSyP0vLJFuhYGRnr3px-cjXwCBp5Q/edit?usp=sharing'] = "Flowchart";
$nav1['fp/index.php'] = "Final Project";
$nav1['contactme.php'] = "Contact Jordan";

/*
makeLinks function will create our dynamic nav when called.
Call like this:
echo makeLinks($nav1); #in which $nav1 is an associative array of links
*/
function makeLinks($linkArray)
{
    $myReturn = '';

    foreach($linkArray as $url => $text)
    {
        if($url == THIS_PAGE)
        {//selected page - add class reference
	    	$myReturn .= '<li><a class="selected" href="' . $url . '">' . $text . '</a></li>' . PHP_EOL;
    	}else{
	    	$myReturn .= '<li><a href="' . $url . '">' . $text . '</a></li>'  . PHP_EOL;
    	}    
    }
      
    return $myReturn;    
}

?>