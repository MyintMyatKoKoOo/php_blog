$lc=document.querySelector("#lc");

$flag1=document.querySelector(".flag1");
$flag2=document.querySelector(".flag2");
$flag3=document.querySelector(".flag3");
$flag4=document.querySelector(".flag4");
$flag5=document.querySelector(".flag5");
$flag6=document.querySelector(".flag6");
$flag7=document.querySelector(".flag7");
$divflag=document.querySelector(".divflag");

$logo=document.querySelector(".logo");

$lc.addEventListener("click",()=> {

        $logo.classList.toggle("none");
        $flag1.classList.toggle("show");
        $flag2.classList.toggle("show");
        $flag3.classList.toggle("show");
        $flag4.classList.toggle("show");
        $flag5.classList.toggle("show");
        $flag6.classList.toggle("show");
        $flag7.classList.toggle("show");
         $divflag.classList.toggle("block");


});
