
<!-- page content -->
      <div id="page">
          <h3>Product Details and Descriptions:</h3>
        <?php
          foreach ( $products as $key => $product) {

            $cartUrlAdd = $cartBaseUrlAdd . "&prodId=" . $product["id"];
            $cartUrlRem = $cartBaseUrlRem . "&prodId=" . $product["id"];

            print "<p>";
            print "Product: " . $product["name"] ."<br />";
            print "Description: " . $product["description"] ."<br />";
            print '<a href="' . $cartUrlAdd . '" /> + </a> / ';
            print '<a href="' . $cartUrlRem . '" /> - </a> | ';
            print ' In Cart: ' . $_SESSION["cart"][$product["id"]] . "<br />";
            print "</p>";
          }
        ?>

      </div>
      <!-- End page content -->