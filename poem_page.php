<?php
session_start();
include_once "html_header.php";
include_once "navigation.php";
include_once "database_engine/post_data_get.php";
$counts=0;
$start=0;
if(isset($_GET['start'])) $start=$_GET['start'];
if(isset($_SESSION['username'])){
    $items=post_data_get(1,1,$start);
    $counts=rows_count(1,1);
}else{
    $items=post_data_get(0,1,$start);
    $counts=rows_count(1,0);
}

?>

    <!--****************Poem_Post_Start**********-->
    <div class="container d-flex">

        <div class="col-4 my-4">
            <div class="row">
                <div class="list-group rounded-0 col-md-6">
                    <div class="list-group-item">Country About</div>
                    <div class="list-group-item">
                        <a href="poem_page.php"><span style="font-weight: 500;color:crimson">Poem</span></a>
                    </div>
                    <div class="list-group-item">Songs</div>
                    <div class="list-group-item">Books</div>
                    <div class="list-group-item">News</div>
                    <div class="list-group-item">Traditional</div>
                    <div class="list-group-item ">Policy</div>
                    <div class="list-group-item ">Famous Place</div>
                </div>
                <div class="list_group rounded-0 col-md-6">
                    <div class="list-group-item">Myanmar</div>
                    <div class="list-group-item">English</div>
                    <div class="list-group-item">Japan</div>
                    <div class="list-group-item ">Korea</div>
                    <div class="list-group-item ">China</div>
                    <div class="list-group-item ">Thai</div>
                    <div class="list-group-item ">Israel</div>
                    <div class="list-group-item ">France</div>
                </div>
            </div>

        </div>

        <div class="col-8">
            <div class="row my-3" >
                <?php
                foreach ($items as $item) {
                    echo <<<S
            
                <div class="col-md-6" >
                    <div class="card" >
                        <div class="card-title" >
                                {$item['title']}
                        </div >
                        <div class="card-body" >
                                {$item['content']}
                        </div >
                    </div >
                </div >
       
S;

                }
                ?>
            </div >
        </div>

    </div>
    <!--****************Poem_Post_End**********-->

    <!--**************Pagination_Start***********-->
    <div class="container mb-5">
        <div class="pagination justify-content-center">
            <?php
            for($p=0;$p<$counts;$p+=5){
                static $i=0;
                $i++;
                echo <<<D
                <div class="page-item">
                    <a href="poem_page.php?start={$p}" class="page-link">{$i}</a>
                </div>
D;

            }
            ?>
        </div>
    </div>
    <!--**************Pagination_End***********-->

<?php
include_once "page_footer.php";
include_once "html_footer.php";
?>
