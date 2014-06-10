<?php

$formError = false;
$formMesg   = "";

if ( "" == $_POST["name"]) {
     $formError = true;
     $formMesg .= "Name is required <br />";
}

if ( "" == $_POST["email"]) {
     $formError = true;
     $formMesg .= "email is required <br />";
}

if ( $_POST["email"] != $_POST["emailConfirm"]) {
     $formError = true;
     $formMesg .= "email and emailConfirm don't match <br />";
}

if ( $formError) {
	include ("webform.php");
}
else {
	print "<h3>Thanks!</h3>";
}

print "<pre>";
print_r($_POST);
print "</pre>";