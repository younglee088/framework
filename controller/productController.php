<?php
 
 # Include html header
 include(APP_VIEW . "/header.php");
 
 # Include main navigation
 include(APP_VIEW . "/nav.php");
 
 
 switch ( $_GET["a"] ) {
 
     case "category":
         $categories = loadCategories();
         $products   = loadProductsByCategory($_GET["id"]);
         include( APP_VIEW ."/product/productSubNav.php" );
         include( APP_VIEW ."/product/productView.php" );
         break;
 
     case "list":
         $categories = loadCategories();
         include( APP_VIEW ."/product/productSubNav.php" );
         include( APP_VIEW ."/product/productView.php" );
         break;
 
     default:
         $categories = loadCategories();
         include( APP_VIEW ."/product/productSubNav.php" );
         include( APP_VIEW ."/product/productView.php" );
         break;
}


 #Include html footer
 include(APP_VIEW . "/footer.php");
 
 
 ##########################################################
 ########      Local Functions                      #######
 ##########################################################
 
 
 function loadCategories() {
 
     $catagories = array();
 
     $sql = "SELECT *
             FROM category
             ORDER BY name";
 
     $res = mysql_query($sql);
 
     $i = 0;
     while( $row = mysql_fetch_assoc($res) ) {
         $catagories[$i]["id"]                = $row["id"];
         $catagories[$i]["name"]          = $row["name"];
         $catagories[$i]["description"] = $row["description"];
         $i++;
     }
 
     return $catagories;
 }
 
 function loadProductsByCategory($category) {
 
     $products = array();
 
     $sql = "SELECT *
             FROM product
             WHERE category_id = $category
             ORDER BY name";
 
     $res = mysql_query($sql);
 
     $i = 0;
     while( $row = mysql_fetch_assoc($res) ) {
         $products[$i]["id"]                 = $row["id"];
         $products[$i]["name"]           = $row["name"];
         $products[$i]["description"] = $row["description"];
         $i++;
     }
 
     return $products;
 }       