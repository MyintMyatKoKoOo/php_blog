<!--    *********Navigation_Start***********-->
        <nav class="navbar sticky-top" style="border-bottom: 2px solid white;background-color:#10707f;">
            <div id="particles-js">
            <div class="btn btn-light text-center mr-auto " id="lc" style="position: absolute;left: 20px;top:10px">
                Language Choice</div>

            <div class="navbar-brand m-auto logo text-light" style="position: absolute;left:600px;">
                <a href="index.php" class="btn-light btn text-dark">Home</a></div>


            <div class=" flag flag1  text-center">
                <div class="m-auto flag_control">
                <img src="flag/myanmar-flag.png" class="flag_img" alt="">
                </div>

                <span class="flag_text">Myanmar</span>
            </div>
            <div class=" flag flag2  text-center">
                <div class="m-auto flag_control">
                    <img src="flag/indian_flag.png" class="flag_img" alt="">
                </div>

                <span class="flag_text">Indian</span>
            </div>
            <div class=" flag flag3  text-center">
                <div class="m-auto flag_control">
                    <img src="flag/japan_flag.jpg" class="flag_img" alt="">
                </div>

                <span class="flag_text">Japan</span>
            </div>
            <div class=" flag flag4  text-center">
                <div class="m-auto flag_control">
                    <img src="flag/thai_flag.png" class="flag_img" alt="">
                </div>

                <span class="flag_text">Thai</span>
            </div>
            <div class=" flag flag5 text-center">
                <div class="m-auto flag_control">
                    <img src="flag/korea_flag.jpg" class="flag_img" alt="">
                </div>

                <span class="flag_text">Korea</span>
            </div>
            <div class=" flag flag6  text-center">
                <div class="m-auto flag_control">
                    <img src="flag/laos_flag.png" class="flag_img" alt="">
                </div>

                <span class="flag_text">Laos</span>
            </div>
            <div class=" flag flag7  text-center">
                <div class="m-auto flag_control">
                    <img src="flag/china_flag.png" class="flag_img" alt="">
                </div>

                <span class="flag_text">China</span>
            </div>

            <div class="btn dropdown ml-auto" style="position: absolute;right: 20px;top:10px">
                <p class="dropdown-toggle btn-sm btn-light" data-toggle="dropdown" data-target="#dd">
                    <?php
                    if(isset($_SESSION['username'])){
                        echo ucfirst($_SESSION['username']);
                    }else{
                        echo "Admin";
                    }
                    ?>
                </p>
                <ul class="dropdown-menu" id="dd">
                    <?php
                    if(isset($_SESSION['username'])) {


                        if ($_SESSION['username'] == 'owner') {


                            echo <<<S

          <li class="dropdown-item"><a href="login.php" id="admin">Login</a></li>
                    <li class="dropdown-item"><a href="logout.php" id="admin">Logout</a></li>
                    <li class="dropdown-item"><a href="post_create_form.php" id="admin">Creat Post</a>
                    </li>
                    <li class="dropdown-item"><a href="post_show_edit.php" id="admin">All Post</a></li>
                   
                   


S;
                        } else {

                            echo <<<S

          <li class="dropdown-item"><a href="login.php" id="admin">Login</a></li>
                    <li class="dropdown-item"><a href="logout.php" id="admin">Logout</a></li>
                 
                   
                    


S;


                        }
                    }else{


                        echo <<<S

          <li class="dropdown-item"><a href="register.php" id="admin">Register</a></li>
                    <li class="dropdown-item"><a href="login.php" id="admin">Login</a></li> 
                  
                 
                   
                    


S;
                    }

                    ?>
                </ul>
            </div>

            </div>
        </nav>
<!--    *********Navigation_End***********-->