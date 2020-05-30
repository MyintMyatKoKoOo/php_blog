<?php

include_once "DB.php";

function get_data(){
    $db=db_con();
    $sql="SELECT * FROM post";
    $data_result=mysqli_query($db,$sql);
    return $data_result;
}

function check_data($name,$email,$pass)
{
    $pass = md5($pass);
    $pass = sha1($pass);
    $pass = crypt($pass, $pass);
    $db = db_con();
    if ($db == "Fail") {
        return "Fail";
    } else {
        $sql = "SELECT * FROM user WHERE name='$name' AND email='$email' AND password='$pass'";
        $data_result = mysqli_query($db, $sql);
        $id = "";
        foreach ($data_result as $item) {
            $id = $item['id'];
        }
        if ($id > 0) {
            return $data_result;
        } else {
            return "Fail";
        }
    }
}

function db_con(){
    $db=mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
    if(mysqli_connect_errno()){
        return "Fail";
    }else{
        return $db;
    }
}

?>