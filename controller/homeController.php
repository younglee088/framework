<?php



# Include html header
include(APP_VIEW . "/header.php");

# Include main navigation
include(APP_VIEW . "/nav.php");


switch ( $_GET["q"] ) {

    case "home":
        include( APP_VIEW ."/home/subNav.php" );
        include( APP_VIEW ."/home/home.php" );
        break;

    default:
        include( APP_VIEW ."/home/subNav.php" );
        include( APP_VIEW ."/home/home.php" );
        break;
}


# Include html footer
include(APP_VIEW . "/footer.php");
