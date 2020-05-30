<?php
session_start();
include_once "html_header.php";
include_once "navigation.php";
include_once "database_engine/post_data_get.php";
$counts=0;
$start=0;
if(isset($_GET['start'])) $start=$_GET['start'];
$pot=[];
if(isset($_SESSION['username']))
{
    $result=post_data_get(1,0,$start);
    $counts=rows_count(0,1);
    foreach($result as $items){
//        echo "<pre>".print_r($items['title'],true)."</pre>";

        array_push($pot,$items);

    }
}
else
    {
        $counts=rows_count(0,0);
    $result=post_data_get(0,0,$start);
        foreach($result as $items){

            array_push($pot,$items);
        }
}
//echo "<pre>".print_r($pot,true)."</pre>";
?>

    <!--*************Jumbotron_Start*****-->
    <div class="jumbotron jumbotron-fluid text-center" id="" style="background-color: #10707f;">
        <h1 class="display-4 text-light welcome">Welcome Myanmar Translation Page</h1>
    </div>
    <!--*************Jumbotron_End*******-->


    <!--**********Content_Start**********-->
    <div class="col-md-3 float-left">
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
    <div class="col-9  row">
    <?php

        foreach ($pot as $a) {
            echo <<<S
                <div class='card col-md-5 offset-1 mb-5'>
                <div class='card-title text-center'>
                {$a['title']}
                </div>
                <div class='card-body'>
               {$a['content']}
                </div>
            </div>
        
S;

        }

        ?>
    </div>
    <!--**********Content_End**********-->


    <!--**************Pagination_Start***********-->
        <div class="container mb-5">
    <div class="pagination justify-content-center">
        <?php
        for($p=0;$p<$counts;$p+=5){
            static $i=0;
            $i++;
            echo <<<D
            <div class="page-item">
                <a href="index.php?start={$p}" class="page-link">{$i}</a>
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
