<?php
include_once "DB.php";

function post_data_set($title,$content,$type,$sub){
    $dc=db();
    if(!$dc){
        return false;
    }else{
        return set($title,$content,$type,$sub);
    }


}
function update($title,$content,$type,$sub,$ps){

    $db=db();
    $update_time=cur_time();
    $sql="UPDATE post SET title='$title',content='$content',type='$type',subject=$sub,updated_at='$update_time' WHERE id='$ps'";
    $result=mysqli_query($db,$sql);
    return $result;

}
//update("Book_edit","Hello","0",1);
function set($title,$content,$type,$sub){
    $db=db();
    $create_time=cur_time();
    $sql="INSERT INTO post(title,content,type,subject,created_at) VALUES('$title','$content','$type','$sub','$create_time')";
    $result=mysqli_query($db,$sql);
    return $result;
}
function cur_time(){
    $cutime=date('Y-m-d H:m:s',time());
    return  $cutime;
}
?>
