<?php
define("DB_HOST","localhost");
define("DB_USER","root");
define("DB_PASS","");
define("DB_NAME","php_basic");


function db(){

    $database=mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
    if(mysqli_connect_errno()){
        return false;
    }else{
        return $database;
    }
}
?>