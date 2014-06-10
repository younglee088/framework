<!DOCTYPE html>
<html>
  <body>
   <div id="footer">
     <div id="checkout">
       <a href="view/webform.php?q=checkout">Check Out</a>
     </div>   
   </div><!-- Close Content Main Wrapper div -->
    <?php
        if (DEBUG >= 1) {
            print "<pre>";
            print_r($_SESSION);
            print "</pre>";
        }
    ?>
  </body>
</html>