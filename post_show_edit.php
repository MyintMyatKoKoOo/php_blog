<?php
session_start();
include_once "html_header.php";
include_once "navigation.php";
include_once "database_engine/database_get.php";
$posts=get_data();
?>

        <!--Content_START********-->
            <div class="container row mt-5">
            <?php
            foreach ($posts as $item) {
                echo <<<S
            <div class='card col-md-5 offset-1 mb-5'>
                <div class='card-title'>
                    {$item['title']}
                </div>
                <div class='card-body'>
                    {$item['content']}
                </div>
                <div class="card-footer d-flex justify-content-end">
                <a href="post_form_edit.php?ps={$item['id']}" class="btn btn-info">Edit</a>
                </div>
            </div>
S;
            }
            ?>
            </div>
        <!--Content_END********-->


<?php
include_once "page_footer.php";
include_once "html_footer.php";
?>
