<?php

function authCheck($array) {

    if ($array["userId"]) {
        return true;
    }
    else {
        return false;
    }
}

function processAuth($array) {

    $username = mysql_escape_string($array["userId"]);
    
    $sql = "SELECT 
               *
             FROM  
              auth_user
             WHERE 
               username = '" . $username . "'";

    $res = mysql_query($sql);
       
    $row = mysql_fetch_assoc($res);

    if (!$row)  {
        return false;
    }

    elseif ( md5($array["password"]) != $row["password"] ){
        return false;
    }
    
    else {
        $_SESSION["userId"] = $array["userId"];
        return true;
    }
    
}