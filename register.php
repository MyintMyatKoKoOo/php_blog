<?php
session_start();
include_once "html_header.php";
include_once "database_engine/checkinput.php";
include_once "database_engine/database_set.php";
include_once "navigation.php";

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $pass=$_POST['password'];
    $confi_pass=$_POST['confi_pass'];
    $result=check_form($name,$email,$pass,$confi_pass);
    if($result){
       data_set($name,$email,$pass,$confi_pass);
       $_SESSION['username']=$name;
       $_SESSION['email']=$email;

       echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
  <strong>Data Set Success!</strong> 
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button>
</div>";

    }else{
        echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
  <strong>Data Set Fail!</strong> 
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button>
</div>";
    }
header("Location:register.php");

}

?>

    <!--**********Form_Start**********-->
    <form action="" method="post" class="my-5 form-group formheight">

        <h2 class="font-weight-light text-center mt-3 text-success">Register User</h2>
        <div class="d-flex my-5">
            <div class="input-group col-md-6 my-2">
                <p for="name" class="input-group-append" >
                    <i class="input-group-text inputname bg-primary text-light">
                        Name
                    </i>
                </p>
                <input type="text" name="name" class="form-control inputname">
            </div>
            <div class="input-group col-md-6 my-2">
                <p for="name" class="input-group-append" >
                    <i class="input-group-text inputname bg-primary text-light">
    Email
                    </i>
                </p>
                <input type="email" name="email" class="form-control inputname">
            </div>
        </div>
        <div class="d-flex my-5">
            <div class="input-group col-md-6 my-2">
                <p for="name" class="input-group-append" >
                    <i class="input-group-text inputname bg-primary text-light">
    Password
                    </i>
                </p>
                <input type="password" name="password" class="form-control inputname">
            </div>
            <div class="input-group col-md-6 my-2">
                <p for="name" class="input-group-append" >
                    <i class="input-group-text inputname bg-primary text-light">
    Confirmation Pass
    </i>
                </p>
                <input type="password" name="confi_pass" class="form-control inputname">
            </div>

        </div>
        <div class="col-12 d-flex justify-content-end ">
            <button type="reset" class="btn btn-outline-primary text-dark rounded-0 mx-2" name="reset" value="reset">Cancel</button>
            <button type="submit" class="btn bg-primary rounded-0 mx-2" name="submit" value="submit">Register</button>
        </div>
    </form>
    <!--**********Form_End**********-->

<?php
include_once "page_footer.php";
include_once "html_footer.php";
?>