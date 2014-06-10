<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8" />

    <!--[if lt IE 9]>
        <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <link href="css/style.css" media="all" rel="stylesheet" type="text/css" />
    <title>CIS295CMS Project</title />
  </head>
  <body>
    <div id="content"><!-- Main Content Wraper Div -->
      <div id="topPage">
           <h1>Gresham Food Center</h1>
        <div id="userArea">
          <?php
            if ($_SESSION["userId"]) {
                $logout = ' ( <a href="index.php?q=auth&a=logout">Logout</a> )';
                print "Welcome " . $_SESSION["userId"] . $logout;
            }
            else {
                print '<a href="index.php?q=auth&a=login">Login</a>';
            }
          ?>
        </div>
      </div>
