<?php

include_once "post_data_set.php";

if(isset($_POST['submit'])){
    $title=$_POST['title'];
    $content=$_POST['content'];
    $type=$_POST['type'];
    $sub=$_POST['subject'];
    $pid=$_GET['pss'];
    update($title,$content,$type,$sub,$pid);
    header("Location:index.php");
}

?>