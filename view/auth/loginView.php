
      <!-- page content -->
      <div id="pageFullWidth">
        <form id="loginForm" method="post" action="index.php?q=auth&a=processAuth">
          <div class="login">
            <div class="error"><?php print $formError; ?></div>
            <label>Username:</label>
            <input type="text" id="userId" name="userId" />
            <label>Password:</label>
            <input type="password" id="password" name="password" />
            <button id="login" name="login">Login</button>
            <br class="clear" />
          </div>
        </form>
      </div>
      <!-- End page content -->