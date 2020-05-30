<?php
function check($title,$content){
    $title_bol=check_title($title);
    $content_bol=check_content($content);
    if($title_bol && $content_bol){
        return true;
    }
    else{
        return false;
    }

}
function check_title($title){
    $reg="/^([^\space])([\w\d\space_']+){1,}$/";
    $bol=preg_match($reg,$title);
    if($bol)
    {
        return true;
    }else{
        return false;
    }

}
function check_content($content){
    $reg="/^([\w\d\space_'\W\D]+){1,}$/";
    $bol=preg_match($reg,$content);
    if($bol)
    {
        return true;
    }else{
        return false;
    }
}
?>
