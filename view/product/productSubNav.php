<!-- sub navigation -->

      <div id="subNav">
          <h3>Categories:</h3>
        <?php

          foreach ( $categories as $key => $cat ) {
            $url = "index.php?q=product&a=category&id=" . $cat["id"];
            $alt = $cat["description"];
            print '<a href="' . $url . '" alt="' . $alt . '">' . $cat["name"] . '</a><br />' . "\n";
          }

        ?>

      </div>
      <!-- end sub navigation -->