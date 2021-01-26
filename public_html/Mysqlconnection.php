<?php
    $sqllink=mysqli_connect("shareddb-z.hosting.stackcp.net","mypersonal_DB-3136358bce","Admin@741","mypersonal_DB-3136358bce");
    if(mysqli_connect_error()){
        $error.="connection Error";
        die("Database Connection Error not connecting");
    }
?>