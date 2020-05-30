<?php
include_once "DB.php";

function edit_get($ps){
    $db=db();
    $sql="SELECT * FROM post WHERE id=$ps";
    $result=mysqli_query($db,$sql);
    return $result;
}

function post_data_get($id,$pagename,$start){
    $ids=$id;
    $pg=$pagename;
    $dc=db();
    if(!$dc){
        return false;
    }else{
        return get($ids,$pg,$start);
    }
}

function rows_count($page,$type){
    if($type==1 && $page==0){
        $db=db();
        $sql="SELECT * FROM post";
        $result=mysqli_query($db,$sql);
        $counts=mysqli_num_rows($result);
        return $counts;

    }else{
        $db=db();
        $sql="SELECT * FROM post WHERE subject=$page AND type=$type";
        $result=mysqli_query($db,$sql);
        $counts=mysqli_num_rows($result);
        return $counts;
    }

}

function get($ids,$pg,$start){
    $db=db();
    if($ids==1 && $pg==0){
        $sql="SELECT * FROM post LIMIT $start,5";
        $result=mysqli_query($db,$sql);
        return $result;
    }else{
        $sql="SELECT * FROM post WHERE type=$ids OR type=$ids AND subject=$pg LIMIT $start,5";
        $result=mysqli_query($db,$sql);;
        return $result;
}
}

function subject_get(){
    $db=db();
    $sql="SELECT * FROM subject ";
    $result=mysqli_query($db,$sql);
    return $result;
}
?>