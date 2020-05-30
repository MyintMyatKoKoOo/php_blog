<?php
include_once "html_header.php";
include_once "navigation.php";
include_once "database_engine/post_data_get.php";
include_once "database_engine/post_data_set.php";
if(isset($_GET['ps'])){
    $pid=$_GET['ps'];
    $result=edit_get($pid);
    $subject=subject_get();
    $post=[];
    foreach ($result as $item) {
        $post['title']=$item['title'];
        $post['content']=$item['content'];
        $post['type']=$item['type'];
        $post['subject']=$item['subject'];
    }

}


?>

    <!-- *******Post_Form_Start*******-->
    <div class="col-6 offset-3 my-5 mb-5">
        <form action="database_engine/post_form_update.php?pss=<?php echo $_GET['ps']?>" method="post">
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-append">
                        <span class="input-group-text bg-primary">Title</span>
                    </div>
                    <input type="text" class="form-control" name="title" value=<?php echo $post['title']?>>
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-append">
                        <span class="input-group-text bg-primary">Type</span>
                    </div>
                    <select class="custom-select" name="type">
                        <?php
                        if($post['type']==0){

                         echo <<<A
    
       <option value="0" selected >Free post</option>
                        <option value="1">Paid post</option>
A;
                        }else{
                            echo <<<A
    
       <option value="0"  >Free post</option>
                        <option value="1" selected>Paid post</option>
A;

                        }

                        ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-append">
                        <span class="input-group-text bg-primary">Type</span>
                    </div>
                    <select class="custom-select" name="subject">
                        <?php
                        foreach($subject as $s){

                        switch ($post['subject']) {
                            case $s['id']:
                                echo <<<S
                                
                                <option value="{$s['id']}" selected >{$s['name']}</option>
S;
                            default:echo  <<<S
                                
                                <option value="{$s['id']}">{$s['name']}</option>
S;
                            }
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
                    <textarea name="content" id="" cols="50" rows="4" class=""><?php
                        echo $post['content'];
                        ?></textarea>
                </div>
            </div>
            <div class="form-group justify-content-end d-flex ">
                <input type="reset" class="btn btn-outline-primary mx-3" value="Cancel" >
                <input type="submit" class="btn btn-primary" name="submit" value="Edit">
            </div>
        </form>
    </div>
    <!-- *******Post_Form_End*******-->

<?php
include_once "page_footer.php";
include_once "html_footer.php";
?>
