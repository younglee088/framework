<!DOCTYPE html>
<html>
  <head>
    <title>Web-Forms</title>
    <link rel="stylesheet" href="style.css" />

    <style type="text/css">
    <!--
    div#contactForm {
    position:         static;
    width:            350px;
    height:           250px;
    border:           thin solid black;
    background-color: #F0F0F0;
    }
    -->
    </style>
  
  </head>
  <body>

    <div id="contactForm">

<?php
      if ( $formError ) {
           print $formMesg;
      }     
?>

    <form action="processForm.php" method="post">

      <h3>Check Out</h3>

      <label>Name:</label>
      <input type="text" id="name" name="name" value="<?php print $_POST["name"]; ?>" />
      <br />
      <br />
      
      <label>eMail:</label>
      <input type="text" id="email" name="email" value="<?php print $_POST["email"]; ?>" />
      <br />
      <br />
      
      <label>eMailConfirm:</label>
      <input type="text" id="emailConfirm" name="emailConfirm" value="<?php print $_POST["emailConfirm"]; ?>" />
      <br />
      <br />
      
      <button type="submit" id="submit" name="submit">Submit</button>

    </form>
    </div>

  </body>
  <script type="text/javascript">

    function validate() {

      formValidate = true;

      if ( "" == document.getElementById('name').value ) {
        formValidate = false;
      }

      if ( "" == document.getElementById('email').value ) {
        formValidate = false;
      }

      if ( false == formValidate ) {
        alert ( "You have form errors!" )
      }

    }

  </script>  
</html>