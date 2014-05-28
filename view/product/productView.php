
<!-- page content -->
      <div id="page">

        <?php
          foreach ( $products as $key => $product) {

            print "<p>";
            print "Product: " . $product["name"] ."<br />";
            print "Description: " . $product["description"] ."<br />";
            print "</p>";
          }
        ?>

      </div>
      <!-- End page content -->