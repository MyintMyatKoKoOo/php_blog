<?php

function check_form($name,$email,$password,$confi_pass){
    $name_check_ans=name_check($name);
    $email_check_ans=email_check($email);
    $pass_check_ans=pass_check($password);
    $confi_check_ans=confi_check($password,$confi_pass);

    if($name_check_ans==="Check Success!" &&
        $email_check_ans==="Check Success!" &&
        $pass_check_ans==="Check Success!" &&
        $confi_check_ans==="Check Success!"
    ){
        return true;

    }else{
        return false;
    }

};
function name_check($name){
    $regname="/^([\w]){3,}$/";
    $bol= preg_match($regname,$name);
    if($bol){
        return "Check Success!";
    }else{
        return "Check Fail!";
    }

};
function email_check($email){
//    mko123@gmail.com
    $regemail="/^([a-zA-Z0-9_]){3,15}@([a-zA-Z]+)\.([a-z]){2,4}$/";
    $bol= preg_match($regemail,$email);
    if($bol){
        return "Check Success!";
    }else{
        return "Check Fail!";
    }

};
function pass_check($password){

//    aA1@s
    if(strlen($password)>=6) {
        $regpass = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*([^\w]))(?=.*\d).+$/";
        $bol = preg_match($regpass, $password);
        if ($bol) {
            return "Check Success!";
        } else {
            return "Check Fail!";
        }
    }else{
        return "Check Fail!";
    }

}
function confi_check($password,$confi_pass){
    return $password===$confi_pass ? "Check Success!" : "Check Fail!";
}

?>
