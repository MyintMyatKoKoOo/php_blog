<?php
include_once "checkinput.php";
include_once "DB.php";

function db_connect()
{
    $database=mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
    if(mysqli_connect_errno()){
        echo "DisConnected!";
    }else{
        return $database;
    }
}
function data_set($name,$email,$pass,$confi_pass)
{
    $pass=pass_crypt($pass);
    $confi_pass=pass_crypt($confi_pass);

    $quary="INSERT INTO user(name,email,password,confi_password) VALUES('$name','$email','$pass','$confi_pass')";
    $db=db_connect();
    $bol=mysqli_query($db,$quary);
    return $bol;

}
function pass_crypt($pass){
    $pass=md5($pass);
    $pass=sha1($pass);
    $pass=crypt($pass,$pass);
    return $pass;

}



?>