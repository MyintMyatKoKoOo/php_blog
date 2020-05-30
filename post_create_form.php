<?php
session_start();
include_once "html_header.php";
include_once "navigation.php";
include_once "database_engine/post_check.php";
include_once "database_engine/post_data_set.php";
include_once "database_engine/post_data_get.php";
$subjs=subject_get();
if(isset($_POST["submit"])){
    $title=$_POST['title'];
    $content=$_POST['content'];
    $type=$_POST['type'];
    $sub=$_POST['subject'];
    $res_bol=check($title,$content);

if($res_bol){
    $bol=post_data_set($title,$content,$type,$sub);
    if(!$bol){
        echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
  <strong>Data Set Fail!</strong>
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button>
</div>";
    }else{
        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
  <strong>Data Set Success!</strong>
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button>
</div>";
    }

}else{
    echo "Fail!";
}
}

?>

    <!-- *******Post_Form_Start*******-->
    <div class="col-6 offset-3 my-5 mb-5">
        <form action="" method="post">
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-append">
                        <span class="input-group-text bg-primary">Title</span>
                    </div>
                    <input type="text" class="form-control" name="title">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-append">
                        <span class="input-group-text bg-primary">Type</span>
                    </div>
                    <select class="custom-select" name="type">
                        <option value="0" >Free post</option>
                        <option value="1">Paid post</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-append">
                        <span class="input-group-text bg-primary">Subject</span>
                    </div>
                    <select class="custom-select" name="subject">
                        <?php
                        foreach ($subjs as $subj){
                            echo <<<B
                            <option value="{$subj['id']}" >{$subj['name']}</option>
B;
                        }


                        ?>

                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-append">
                        <span class="input-group-text bg-primary">Content</span>
                    </div>
                    <textarea name="content" id="" cols="50" rows="4" class=""></textarea>
                </div>
            </div>
            <div class="form-group justify-content-end d-flex ">
                <input type="reset" class="btn btn-outline-primary mx-3" value="Cancel" >
                <input type="submit" class="btn btn-primary" name="submit" value="Login">
            </div>
        </form>
    </div>
    <!-- *******Post_Form_End*******-->

<?php
include_once "page_footer.php";
include_once "html_footer.php";
?>


