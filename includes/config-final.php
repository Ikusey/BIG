<?php
/*
config final.php

Used to store all of our WEB120 configuration information

*/

//this helps us avoid PHP date errors:
date_default_timezone_set('America/Los_Angeles');


define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE){

    case 'index.php':
        $title = "Azriel's WEB120 Home Page";
        $logo = 'fa-home';
        $PageID = 'Welcome';
    break;
    
    case 'flexbox.php':
        $title = "Azriel's WEB120 Felxbox Research";
        $logo = 'fa-th-large';
        $PageID = 'Flexbox';
    break;
        
    case 'galleries.php':
        $title = "Azriel's WEB120 Galleries Research";
        $logo = 'fa-photo';
        $PageID = 'Galleries';
    break;
        
    case 'shoppingcarts.php':
        $title = "Azriel's WEB120 Shopping Cart Research";
        $logo = 'fa-shopping-cart';
        $PageID = 'ShoppingCart';
    break;
    
    case 'calendar.php':
        $title = "Azriel's WEB120 Calendar Page";
        $logo = 'fa-calendar';
        $PageID = 'Calendar';
    break;
        
    case 'map.php':
        $title = "Azriel's WEB120 Map Page";
        $logo = 'fa-map';
        $PageID = 'Map';
    break;
        
    case 'youtube.php':
        $title = "Azriel's WEB120 Web Accessibility Page";
        $logo = 'fa-youtube';
        $PageID = 'Youtube';
    break;
        
    case 'webcam.php':
        $title = "Azriel's WEB120 Webcam Page";
        $logo = 'fa-video-camera';
        $PageID = 'Webcam';
    break;
        
    case 'siteapp.php':
        $title = "Azriel's WEB120 Responsive Website vs Mobile App Research";
        $logo = 'fa-mobile';
        $PageID = 'Siteapp';
    break;
        

    default:
        $title = THIS_PAGE;
        $logo = 'fa-home';
        $PageID = 'Welcome';
   }

/* 
Creating a function to generate links and apply the class=selected to currently called page

      <li><a href="index.php" class="selected">Welcome</a></li>
      <li><a href="big/index.php">Big</a></li>
      <li><a href="aia.php">AIA</a></li>
      <li><a href="flowchart.php">Flowchart</a></li>
      <li><a href="fp/index.php">Final Project</a></li>
      <li><a href="contactme.php">Contact Sara</a></li>
*/
?>
