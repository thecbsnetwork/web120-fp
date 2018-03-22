<?php
/*
fp-config.php
configuration info WEB120 Final Project
The Stay-Up Late Show with Rebecca M. Davis
*/

//other include files referenced here
include 'fp-credentials.php';

define('DEBUG',TRUE); #we want to see all the errors

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

$nav1['index.php'] = "Home";
$nav1['about.php'] = "About";
$nav1['photos.php'] = "Photos";
$nav1['merch.php'] = "Merch";
$nav1['contact.php'] = "Contact";
$nav1['https://btbd.brownpapertickets.com/'] = "Tickets";
$nav1['https://www.facebook.com/groups/23130851221/'] = "Facebook";

switch(THIS_PAGE){
        
    case 'index.php':
        $title = 'Home';
        $pageTitle = 'Welcome to The Stay-Up Late Show';
    break;
                
    case 'about.php':
        $title = 'About';
        $pageTitle = 'About The Stay-Up Late Show';
    break;
        
    case 'photos.php':
        $title = 'Photos';
        $pageTitle = 'Photos of The Stay-Up Late Show';
    break;
        
    case 'merch.php':
        $title = 'Merch';
        $pageTitle = 'Merchandise for The Stay-Up Late Show';
    break;

    case 'contact.php':
        $title = 'Contact';
        $pageTitle = 'Contact The Stay-Up Late Show';
    break;
        
    default:
        $title = THIS_PAGE;   
        $pageTitle = THIS_PAGE;   
}//end page switch

function myerror($myFile, $myLine, $errorMsg)
{
    if(defind('DEBUG') && DEBUG)
    {
        echo "Error in file: <b>" . $myFile . "</b> on line: <b>" . $myLine . "</b><br />";
        echo "Error Message: <b>" . $errorMsg . "</b><br />";
        die();
    }else{
        echo "I'm sorry, we have encountered an error. Would you like to buy some coffee?";
        die();
    }
}//end myerror()

function stayup_links($nav1){
    foreach($nav1 as $url => $text){
        if (THIS_PAGE == $url){
            echo '
            <a href="' . $url . '">' . $text . '</a>';
        }else{
            echo '
            <a href="' . $url . '">' . $text . '</a>';
        }
    }
}//stayup_links()

?>