<?php
require __DIR__ . '/__connect_db.php';
$page_name = 'login';
$page_title = '登入';

if (empty($_SERVER['HTTP_REFERER'])) {
    $come_from = './';
} else {
    $come_from = $_SERVER['HTTP_REFERER'];
}


?>


<!-- <head><link rel="stylesheet" href="./bootstrap/css/bootstrap.css"></head> -->
<head>
    <link rel="stylesheet" href="css/__navbar.css">
    <style>

        /* login alert style */
        .login_pop {
            color: red;
        }

        /* login success style */
        .login_success {
            color: blue;
        }

        /* sign up alert style */
        .signup_alert {
            color: red;
        }

        /* sign up success style */
        .signup_success {
            color: blue;
        }

    </style>

</head>

<nav>
    <div class="w_menubar fixed-nav-bar">
        <div class="w_nav_wrapper">
            <ul class="w_nav en_font">
                <!-- 以下為logo區域 -->
                <li class="w_nav_logo_box">
                    <a href="./"><img src="img/icon/pastania_logo.svg" alt=""></a>
                </li>
                <!-- 以上為logo區域 -->

                <!-- 以下為按鈕區域 nav items-->
                <!-- 關於我們 about us-->
                <li class="w_nav_word">
                    <a href="about.php">
                        <span class="w_nav_translate_ch  w_nav_noto_regular">關於我們</span>
                        <span class="w_nav_translate_en  w_nav_en_font">About Us</span>
                    </a>
                    <!-- 以下為下拉選單區域 collapse-->
                    <ul class="w_nav_sub noto_regular transition">
                        <li class="w_nav_noto_regular_sub"><a href="about.php">品牌介紹</a></li>
                        <li class="w_nav_noto_regular_sub"><a href="map.php">義麵地圖</a></li>
                    </ul>
                    <!-- 以上為下拉選單區域 -->

                </li>
                <!-- 活動 Event-->
                <li class="w_nav_word">
                    <a href="#">
                        <span class="w_nav_translate_ch  w_nav_noto_regular">特別活動</span>
                        <span class="w_nav_translate_en  w_nav_en_font">Events</span>
                    </a>
                    <!-- 以下為下拉選單區域 collapse-->
                    <ul class="w_nav_sub noto_regular transition">
                        <li class="w_nav_noto_regular_sub"><a href="event_j.php">親子同樂玩pasta</a></li>
                        <li class="w_nav_noto_regular_sub"><a href="event_f.php">白色情人節特輯</a></li>
                    </ul>
                    <!-- 以上為下拉選單區域 -->
                </li>
                <!-- 產品 Products-->
                <li class="w_nav_word">
                    <a href="products_cate.php">
                        <span class="w_nav_translate_ch  w_nav_noto_regular">產品種類</span>
                        <span class="w_nav_translate_en  w_nav_en_font">Products</span>
                    </a>
                    <!-- 以下為下拉選單區域 collapse-->
                    <ul class="w_nav_sub transition">
                        <li class="w_nav_en_font_sub"><a href="product_list_long.php">Long 長麵</a></li>
                        <li class="w_nav_en_font_sub"><a href="product_short_cut.php">Short Cut 短麵</a></li>
                        <li class="w_nav_en_font_sub"><a href="product_list_minute.php">Minute 粒狀麵</a></li>
                        <li class="w_nav_en_font_sub"><a href="product_list_stuffed.php">Stuffed 夾餡款</a></li>
                        <li class="w_nav_en_font_sub"><a href="product_list_specialty.php">Specialty 特別款</a></li>
                        <li class="w_nav_en_font_sub"><a href="product_list_sauce.php">Sauce 義大利麵醬</a></li>
                        <li class="w_nav_en_font_sub"><a href="product_list_gift_set.php">Gift Set 組合包</a></li>
                    </ul>
                    <!-- 以上為下拉選單區域 -->
                </li>
                <!-- 食譜 Recipes-->
                <li class="w_nav_word">
                    <a href="recipes_cate.php">
                        <span class="w_nav_translate_ch  w_nav_noto_regular">食譜種類</span>
                        <span class="w_nav_translate_en  w_nav_en_font">Recipes</span>
                    </a>
                    <!-- 以下為下拉選單區域 collapse-->
                    <ul class="w_nav_sub transition">

                        <!-- recipe connect to db start -->
                        <?php

                        $p_sql = sprintf("SELECT * FROM recipe_list ORDER BY sid ASC");
                        $p_stmt = $pdo->query($p_sql);

                        ?>

                        <?php while ($row = $p_stmt->fetch(PDO::FETCH_ASSOC)): ?>

                            <li class="w_nav_en_font_sub"><a
                                        href="recipe_list.php?category=<?php echo $row['sid']; ?>"><?php echo $row['recipe_type_en']; ?><?php echo $row['recipe_type_ch']; ?></a>
                            </li>

                        <?php endwhile; ?>
                        <!-- recipe connect to db end -->


                    </ul>
                    <!-- 以上為下拉選單區域 -->
                </li>
                <!-- 以上為按鈕區域 -->


            </ul>
            <!-- 以下為右邊小icon符號區域 -->
            <ul class="w_nav_icon_box">
                <!-- 搜尋按鈕 -->
                <li class="w_nav_icon_boxin r_search_box">
                    <input type="search" autocomplete="off" placeholder="&nbsp;search" required
                           class="r_search transition">
                    <a class="r_btn_s">
                                <span class="w_nav_icon_before">
                                    <img src="img/icon/search.svg" alt=""></span>
                        <span class="w_nav_icon_after">
                                    <img src="img/icon/search_red.svg" alt=""></span>
                    </a>
                </li>
                <!-- 會員按鈕 -->
                <li class="w_nav_icon_boxin r_btn_i">
                    <a class="nav-link" href="login.php" data-toggle="modal" data-target=".bd-example-modal-lg">
                                <span class="w_nav_icon_before">
                                    <img src="img/icon/member.svg" alt=""></span>
                        <span class="w_nav_icon_after">
                                    <img src="img/icon/member_red.svg" alt=""></span>
                    </a>
                    <!--以下會員登入後選單-->
                    <ul class="w_nav_sub r_iocnbox r_login">
                        <li class="w_nav_en_font_sub"><p>會員姓名</p></li>
                        <li class="w_nav_en_font_sub"><a href="">帳號設定</a></li>
                        <li class="w_nav_en_font_sub"><a href="">訂單查詢</a></li>
                        <li class="w_nav_en_font_sub r_btn"><a style="color:white">登出</a></li>
                    </ul>
                    <!--以上會員登入後選單-->
                </li>
                <!-- 收藏清單按鈕 wishlist btn-->
                <li class="w_nav_icon_boxin w_list r_btn_i">
                    <a href="">
                                <span class="w_nav_icon_before">
                                    <img src="img/icon/like.svg" alt=""></span>
                        <span class="w_nav_icon_after">
                                    <img src="img/icon/like_red.svg" alt=""></span>
                    </a>
                    <!--以下為收藏內容 wishlist content-->
                    <ul class="w_nav_sub r_iocnbox r_wish_list">
                        <li class="w_nav_en_font_sub r_wish_tittle">
                            <p class="w_nav_en_font r_wish_u_line">Wish List</p>
                        </li>
                        <li class="w_nav_en_font_sub">
                            <ul class="r_flex">
                                <li>
                                    <a href="#">
                                        <img src="img/product/l/F1_Agnolotti.png" alt="" class="r_wish_p">
                                    </a>
                                </li>
                                <li class="r_flex r_f_center">
                                    <ul>
                                        <li class="w_nav_en_font_sub"><p>Farfalle nº 87</p></li>
                                        <li class="w_nav_en_font_sub"><p>蝴蝶麵</p></li>
                                        <li class="w_nav_en_font_sub"><p>NT＄ 109</p></li>
                                    </ul>
                                </li>

                                <!-- wishlist item move to cart icon -->
                                <li class="r_flex r_f_center r_wish_ml">
                                    <a href=""><img src="img/icon/shopping_bag.svg" alt=""></a>
                                </li>

                                <!-- wishlist item delete icon -->
                                <li class="r_flex r_f_center">
                                    <a href="" class="r_wish_delet_p">
                                        <img src="img/icon/delete.svg" alt="">
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <!--以上為收藏內容-->
                </li>
                <!-- 購物車按鈕 cart btn-->
                <li class="w_nav_icon_boxin r_btn_i <?= $page_name == 'cart' ? 'active' : '' ?>">
                    <a href="cart.php">
                                <span class="w_nav_icon_before cart_icon_position">
                                    <img src="img/icon/shopping_bag.svg" alt=""></span>
                        <span class="w_nav_icon_after">
                                    <img src="img/icon/shopping_bag_red.svg" alt=""></span>

                    </a>

                    <!-- qty badge -->
                    <a href=""><span class="badge badge_position">0</span></a>

                    <!--以下為購物車內容 cart content-->
                    <ul class="w_nav_sub r_iocnbox r_cart_list">
                        <li class="w_nav_en_font_sub">
                            <ul class="r_flex">
                                <li>
                                    <a href="">
                                        <img src="img/product/l/F1_Agnolotti.png" alt="" class="r_wish_p">
                                    </a>
                                </li>
                                <li class="r_flex r_f_center">
                                    <ul>
                                        <li class="w_nav_en_font_sub"><p>Farfalle nº 87</p></li>
                                        <li class="w_nav_en_font_sub"><p>蝴蝶麵</p></li>
                                        <li class="w_nav_en_font_sub"><p>數量:1</p></li>
                                    </ul>
                                </li>
                                <li class="w_nav_en_font_sub r_flex r_f_center r_cart_flex">
                                    <p>NT＄ 109</p>
                                </li>
                            </ul>

                            <!-- checkout btn -->
                        <li class="w_nav_en_font_sub r_btn r_cart_y">
                            <a class="w_nav_en_font_sub r_cart_btn" href="cart.php">結帳</a>
                        </li>
                        </li>
                    </ul>
                    <!--以上為購物車內容-->
                </li>
            </ul>
            <!-- 以上為右邊小icon符號區域 -->
        </div>
    </div>
    <!-- /* ～～～～～～～以下漢堡選單區域 rwd hamburger menu～～～～～～～ */ -->
    <div class="ham-wrapper">
        <a class="r_flex ham-wrapper-a" href="./">
            <img src="img/icon/pastania_logo.svg" alt="">
        </a>
        <div class="menu-btn ">
            <div class="bar-box">
                <div class="bar bar1 "></div>
                <div class="bar bar2 "></div>
                <div class="bar bar3 "></div>
            </div>
            <ul>
                <li class=""><a href="">About Us</a></li>
                <li>
                    <a class="r_arrow_icon ">Events<i class="fas fa-angle-right r_arrow_icon transition"></i></a>
                    <ul class="sub-menu ">
                        <li><a href="event_j.php">親子同樂玩pasta</a></li>
                        <li><a href="event_f.php">白色情人節特輯</a></li>
                    </ul>
                </li>
                <li>
                    <a class="r_arrow_icon">Products<i class="fas fa-angle-right r_arrow_icon transition"></i></a>
                    <ul class="sub-menu">
                        <li><a href="product_list_long.php">Long 長麵</a></li>
                        <li><a href="product_short_cut.php">Short cut 短麵</a></li>
                        <li><a href="product_list_minute.php">Minute 粒狀麵</a></li>
                        <li><a href="product_list_stuffed.php">Stuffed 夾餡款</a></li>
                        <li><a href="product_list_specialty.php">Specialty 特別款</a></li>
                        <li><a href="product_list_sauce.php">Sauce 義大利麵醬</a></li>
                        <li><a href="product_list_gift_set.php">Gift Set 組合包</a></li>
                    </ul>
                </li>
                <li>
                    <a class="r_arrow_icon ">Recipes<i class="fas fa-angle-right r_arrow_icon transition"></i></a>
                    <ul class="sub-menu">

                        <li><a>Party 週末派對</a></li>
                        <li><a>Occasion 特殊節慶</a></li>
                        <li><a>Light 健康輕食</a></li>
                        <li><a>Starter 開胃前菜</a></li>
                        <li><a>Typical 義國風情</a></li>


                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!-- /* ～～～～～～～以上為漢堡選單區域 hamgurger end～～～～～～～ */ -->
    <!-- /* ～～～～～～～以下為手機版icon選單區域 mobile icons start～～～～～～～ */ -->
    <div class="r_phone_button">
        <ul class="r_flex r_just_a">
            <li>
                <a href="" class="" data-toggle="modal" data-target="#searchModalCenter">
                    <img src="img/icon/search.svg" alt="">
                </a>
            </li>
            <li>
                <a href="">
                    <img src="img/icon/member.svg" alt="">
                </a>
            </li>
            <li>
                <a href="" data-toggle="modal" data-target="#wishModalCenter">
                    <img src="img/icon/like.svg" alt="">
                </a>
            </li>
            <li>
                <a href="">
                    <img src="img/icon/shopping_bag.svg" alt="">
                </a>
            </li>
        </ul>
    </div>
    <!-- /* ～～～～～～～以上為手機版icon選單區域 mobile icons end～～～～～～～ */ -->

    <!-- /* ～～～～～～～以下為手機版search model～～～～～～～ */ -->
    <!-- Modal -->
    <div class="modal fade" id="searchModalCenter" tabindex="-1" role="dialog"
         aria-labelledby="srarchModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <a href="#" class="col-12 modal-title mx-auto text-center">
                        <img src="img/icon/pastania_logo.svg" class="logo_img" alt="">
                    </a>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h4 class="card-title text-center pt-4 pb-2">未找到 餛飩 相關產品</h4>
                    <h6 class="card-title text-center pb-2">請輸入關鍵字搜尋</h6>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
              <span class="input-group-text" id="basic-serach"><img src="img/icon/search.svg" alt=""
                                                                    style="width: 20px"></span>
                        </div>
                        <input type="search" class="form-control" id="search-bar" name="search-bar" placeholder="請輸入關鍵字搜尋"
                               aria-label="search" aria-describedby="basic-serach">
                    </div>
                </div>
                <div class="modal-footer pt-0 border-top-0">
                    <button type="button" class="btn btn-primary col-md-12 mx-auto pt-3 pb-3 mt-0 mb-3">前往搜尋</button>
                </div>
            </div>
        </div>
    </div>

    <!-- /* ～～～～～～～以上為手機版search model～～～～～～～ */ -->
    <!-- /* ～～～～～～～以下為手機版wish model～～～～～～～ */ -->
    <div class="modal fade" id="wishModalCenter" tabindex="-1" role="dialog"
         aria-labelledby="wishModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <a href="#" class="col-12 modal-title mx-auto text-center">
                        <img src="img/icon/pastania_logo.svg" class="logo_img" alt="">
                    </a>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h5 class="card-title text-center pt-4 pb-2">收藏清單</h5>
                    <ul class="r_flex r_just_a">
                        <li>
                            <a href="./">
                                <img src="img/product/l/F1_Agnolotti.png" alt="" class="r_wish_p">
                            </a>
                        </li>
                        <li class="r_flex r_f_center mr-2">
                            <ul>
                                <li class="w_nav_en_font_sub"><p>Farfalle nº 87</p></li>
                                <li class="w_nav_en_font_sub"><p>蝴蝶麵</p></li>
                                <li class="w_nav_en_font_sub"><p>NT＄ 109</p></li>
                            </ul>
                        </li>
                        <li class="r_flex r_f_center">
                            <a href=""><img class="r_icon_w" src="img/icon/shopping_bag.svg" alt=""></a>
                        </li>
                        <li class="r_flex r_f_center">
                            <a href="" class="r_wish_delet_p">
                                <img class="r_icon_w" src="img/icon/delete.svg" alt="">
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="modal-footer pt-0 border-top-0">
                </div>
            </div>
        </div>
    </div>


    <!-- /* ～～～～～～～以上為手機版wish model～～～～～～～ */ -->





    <nav class="navbar navbar-expand-lg navbar-light bg-transparent">

        <!-- bootstrap Modal start (SIGN IN) -->
        <div class="modal fade bd-example-modal-lg sign_in" id="myModal">
            <div class="modal-dialog modal-lg modal-dialog-centered " role="document">
                <div class="modal-content container">
                    <div class="modal-header">
                        <!-- <h5 class="col-md-12 modal-title text-center">PASTANIA</h5> -->
                        <a href="#" class="col-12 modal-title mx-auto text-center"><img src="img/icon/pastania_logo.svg"
                                                                                        class="logo_img" alt=""></a>

                        <button type="button" class="close " data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>

                        <!-- <h3 class="card-title text-center"><img src="" alt="">PASTANIA</h3>
                        <hr>
                        <h5 class="card-title text-center pt-3">SIGN UP</h5>
                        <h6 class="card-title text-center pb-4">登入會員即可快速結帳</h6>
                        <div class="card-text"> -->
                    </div>
                    <h5 class="card-title text-center pt-4">SIGN IN</h5>
                    <h6 class="card-title text-center pb-4">已是會員？登入快速結帳！</h6>
                    <div id="info" class="login_alert text-center pb-4" style="display: none"></div>
                    <form name="form1" method="post" onsubmit="return formCheck()" class="row">

                        <!-- email -->
                        <div class="form-group col-md-8 mx-auto">
                            <!-- <label for="email"><span class="red">*</span> 電子信箱</label> -->
                            <input type="text" class="form-control" id="email" name="email" placeholder="會員帳號 / 會員信箱">
                            <small id="emailHelp" class="form-text"></small>
                        </div>

                        <!-- password -->
                        <div class="form-group col-md-8 mx-auto">
                            <!-- <label for="password"><span class="red">*</span> 密碼</label> -->
                            <input type="password" class="form-control" id="password" name="password"
                                   placeholder="會員密碼">
                            <small id="passwordHelp" class="form-text"></small>
                        </div>

                        <!-- remember me checkbox -->
                        <div class="form-check pb-3 col-md-8 d-flex justify-content-lg-between text-center mx-auto">
                            <div class="col-md-4">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    記住我
                                </label>
                            </div>
                            <div class="col-md-12">
                                <a href="#" class="forgot">忘記密碼</a>
                            </div>
                        </div>


                        <!-- modal-footer -->

                        <div class="col-md-8 justify-content-lg-between text-center mx-auto">
                            <!-- login btn -->
                            <button type="submit" id="login_submit" class="btn btn-primary col-md-12 mx-auto ">登入
                            </button>
                            <hr class="col-md-10 ">
                            <h6 class="col-md-12 card-title text-center pb-2">還不是會員?</h6>

                            <!-- register btn -->
                            <button type="button" class="btn btn-primary col-md-12 mx-auto mb-5 " data-toggle="modal"
                                    data-target=".register-modal-lg" id="goRegister">註冊
                            </button>
                        </div>

                    </form>
                </div>
            </div>

        </div>
        <!-- bootstrap Modal end (SIGN IN)-->

        <!-- bootstrap Modal start (Register) -->

        <div class="modal fade register-modal-lg" id="signup">
            <div class="modal-dialog modal-lg modal-dialog-centered " role="document">
                <div class="modal-content container">
                    <div class="modal-header">

                        <a href="./" class="col-12 modal-title mx-auto text-center"><img
                                    src="img/icon/pastania_logo.svg"
                                    class="logo_img" alt=""></a>

                        <button type="button" class="close " data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>


                    </div>
                    <h5 class="card-title text-center pt-4">SIGN UP</h5>
                    <h6 class="card-title text-center pb-4">加入會員</h6>
                    <div id="re_info" class="login_alert text-center pb-4" style="display: none"></div>
                    <form name="form2" method="post" onsubmit="return formCheck_2()" class="row">


                        <div class="form-group col-md-10 row mx-auto">
                            <label for="email" class="col-md-3 label_text"> 電子郵箱<span class="red ">*</span></label>
                            <input type="text" class="form-control col-md-9" id="email2" name="email"
                                   placeholder="E-mail將會成為您的會員帳號，請務必確認是否填寫正確">
                            <div class="col-md-3"></div>
                            <small id="email2Help" class="form-text col-md-9 pl-0"></small>

                        </div>

                        <div class="form-group col-md-10 row mx-auto">
                            <label for="nickname" class="col-md-3 label_text">會員暱稱<span class="red">*</span></label>
                            <input type="text" class="form-control col-md-9" id="nickname" name="nickname"
                                   placeholder="請輸入您的暱稱">
                            <div class="col-md-3"></div>
                            <small id="nicknameHelp" class="form-text col-md-9 pl-0"></small>
                        </div>
                        <div class="form-group col-md-10 row mx-auto">
                            <label for="password" class="col-md-3 label_text">設定密碼<span class="red">*</span></label>
                            <input type="text" class="form-control col-md-9" id="password2" name="password"
                                   placeholder="請輸入6個字元以上密碼">
                            <div class="col-md-3"></div>
                            <small id="password2Help" class="form-text col-md-9 pl-0"></small>
                        </div>
                        <!-- 新加的 password confirmation start -->
                        <div class="form-group col-md-10 row mx-auto">
                            <label for="password" class="col-md-3 label_text">密碼確認<span class="red">*</span></label>
                            <input type="text" class="form-control col-md-9" id="password3" name="password"
                                   placeholder="請重新輸入預設密碼">
                            <div class="col-md-3"></div>
                            <small id="password3Help" class="form-text col-md-9 pl-0"></small>
                        </div>
                        <!-- 新加的 password confirmation end -->
                        <div class="form-group col-md-10 row mx-auto">
                            <label for="exampleFormControlSelect1 label_text" class="col-md-3 label_text my-1">地址<span
                                        class="red">*</span></label>

                            <!-- postcode select start  -->
                            <input type="email" class="form-control col-sm-2 mr-4 my-1" id="exampleFormControlInput1"
                                   placeholder="郵遞區號">
                            <!-- with selected city & district -->

                            <!-- select city -->


                            <select require class="form-control col-sm-3 mr-4 pre_option my-1" id="id_mySelect"
                                    name="City">

                                <?php

                                // 取得分類資料
                                $c_sql = "SELECT * FROM tw_postcode ORDER BY zipcode ASC";
                                $c_stmt = $pdo->query($c_sql);

                                while ($row = $c_stmt->fetch()) {
                                    $cityName = sprintf('%s %s %s', $row['City'], $row['Area'], $row['ZipCode']);
                                    printf('<option value="%s">%s</option>', $row['id'], $cityName);
                                }


                                ?>

                            </select>
                            <!-- select district -->
                            <select class="form-control col-sm-3 pre_option my-1" id="exampleFormControlSelect1">
                                <option>請選擇區域</option>
                                <option>北投區</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                            <!-- postcode select end  -->

                        </div>


                        <div class="form-group col-md-10 row mx-auto">
                            <label for="" class="col-md-3"></label>
                            <input type="text" class="form-control col-md-9" id="address" name="address">
                            <div class="col-md-3"></div>
                            <small id="addressHelp" class="form-text col-md-9 pl-0"></small>
                        </div>

                        <!-- agreement start  -->
                        <div class="form-group form-check col-md-10 mx-auto text-center pt-2 pb-4">
                            <input type="checkbox" class="form-check-input js-checkbox-agreement" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">我同意接受<a href="#"
                                                                                        class="agree_underline">Pastania服務條款</a>和<a
                                        href="#" class="agree_underline">隱私權政策</a></label>
                        </div>
                        <!-- agreement end  -->


                        <!-- regeister btn start-->
                        <div class="col-md-8 justify-content-lg-between text-center mx-auto">

                            <button type="submit" class="btn btn-primary col-md-12 mx-auto mb-5 js-button-register"
                                    data-toggle="modal"
                                    data-target=".regeister-modal-lg" id="re_submit">註冊
                            </button>
                        </div>
                        <!-- regeister btn end-->

                    </form>
                </div>

                <!-- bootstrap Modal end (Register) -->
            </div>
    </nav>


    <script>


        // icon下拉選單 (icon sildedown)
        $(document).ready(function () {
            $(".r_btn_i").hover(function () {
                $(this).find(".w_nav_sub").stop(true, true).slideDown(300);
            }, function () {
                $(this).find(".w_nav_sub").stop(true, true).slideUp(300);
            });

            $('.js-button-register').prop('disabled', true);

            $('.js-checkbox-agreement').on('change', function () {
                if ($(this).is(':checked')) {
                    $('.js-button-register').prop('disabled', false);
                } else {
                    $('.js-button-register').prop('disabled', true);
                }
            });
        });
        // icon下拉選單

        // search的按鈕 (search btn)
        $(document).ready(function () {
            $(".r_btn_s").click(function (e) {
                e.stopPropagation();
                $(".r_search").toggleClass("r_s_hide");
            });
            $(".r_search").click(function (e) {
                e.stopPropagation();
            });
            $(document).click(function () {
                $(".r_search").removeClass("r_s_hide");
            });
        });

        //漢堡選單 (hamburger menu)
        $(".menu-btn .bar-box").click(function () {
            $(".menu-btn").toggleClass('active');
            $(".r_arrow_icon").find('i').removeClass("ar_turn");
            $(".sub-menu ").slideUp(300);
        });

        $(".menu-btn a").click(function () {
            $(".sub-menu ").slideUp(300);
            if ($(this).next(".sub-menu ").is(':hidden')) {
                $(this).next(".sub-menu ").slideDown(300);
                $(".r_arrow_icon").find('i').removeClass("ar_turn");
            }
        });

        $(".r_arrow_icon").click(function () {
            $(this).find('i').toggleClass("ar_turn");
        });


        // cart badge顯示
        var badge_pill = $('.badge-pill');

        function cart_count(obj) {
            var s, t = 0;
            for (s in obj) {
                t += 1
                // 只加購買種類, 不是累加全部購買數量
            }
            badge_pill.text(t);
        }

        // ajax
        $.get('add_to_cart.php', function (data) {
            cart_count(data);
        }, 'json');


        // bootstrap modal
        $('#myModal').on('shown.bs.modal', function () {
            $('#myInput').trigger('focus')
        })

        $('#goRegister').click(function () {
            $('#myModal').modal('hide');
            $('.modal-backdrop').hide();

        });
        // 關閉sign up modal 跳回原畫面
        // $('#signup').click(function(){
        //     $('#myModal').hide().modal('hide');
        // $('.modal-backdrop').hide();
        // $('#signup').hide();
        // $('#myModal').remove();

        // $("#myModal").remove()

        // $('#myModal');
        // });


        // 城市&區域select 控制 (postcode select)


        //log-in start
        var fields = ['email', 'password'];
        // var i, s;
        // var info = $('#info');

        // 登入後跳轉 
        var submit_btn = $('button[type=submit]');
        var come_from = '<?= $come_from ?>';


        function formCheck() {

            // info.hide();
            // 讓每一欄都恢復原來的狀態
            // for(s in fields){
            //     cancelAlert(fields[s]);
            // }

            var isPass = true;
            var email_pattern = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;


            if (!email_pattern.test(document.form1.email.value)) {
                setAlert('email', '請輸入正確的 email 格式');
                isPass = false;
            }
            if (document.form1.password.value.length < 6) {
                setAlert('password', '密碼請輸入六個字以上');
                isPass = false;
            }

            if (isPass) {

                $.post('login_api.php', $(document.form1).serialize(), function (data) {
                    var alertType = 'login_pop';

                    info.removeClass('login_pop');
                    info.removeClass('login_success');
                    // console.log(data)
                    if (data.success) {
                        alertType = 'login_success';
                        // 設定登入成功後自動跳轉頁時間
                        //     setTimeout(function(){
                        //         location.href = come_from;
                        //     }, 1000);
                    } else {
                        alertType = 'login_pop';
                    }
                    info.addClass(alertType);
                    if (data.info) {
                        info.html(data.info);
                        info.slideDown();
                    }


                }, 'json');

            }

            return false;
        }

        // 設定警示 set alert
        function setAlert(fieldName, msg) {
            $('#' + fieldName).css('border', '1px solid red');
            $('#' + fieldName + 'Help').text(msg);
        }

        // 取消警示 cancel alert
        function cancelAlert(fieldName) {
            $('#' + fieldName).css('border', '1px solid #cccccc');
            $('#' + fieldName + 'Help').text('');
        }


        // log in submit and close modal


    </script>


    <!-- register -->
    <script>

        var fields = ['nickname', 'email2', 'password2', 'password3', 'address'];
        var i, s;
        var info = $('#re_info');

        function formCheck_2() {
            info.hide();
            // 讓每一欄都恢復原來的狀態
            for (s in fields) {
                cancelAlert(fields[s]);
            }

            var isPass = true;
            var email_pattern = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;

            if (document.form2.nickname.value.length < 2) {
                setAlert('nickname', '請輸入正確的暱稱');
                isPass = false;
            }

            if (!email_pattern.test(document.form2.email2.value)) {
                setAlert('email2', '請輸入正確的 email 格式');
                isPass = false;
            }
            if (document.form2.password2.value.length < 6) {
                setAlert('password2', '密碼請輸入六個字以上');
                isPass = false;
            }

            // email confirm check
            if (document.form2.password3.value.length < 6) {
                setAlert('password3', '請輸入與設定密碼相同字符');
                isPass = false;
            }
            // address format check
            if (document.form2.address.value.length < 1) {
                setAlert('address', '請輸入完整地址');
                isPass = false;
            }

            if (isPass) {

                $.post('register_api.php', $(document.form2).serialize(), function (data) {
                    var alertType = 'signup_alert';

                    info.removeClass('signup_alert');
                    info.removeClass('signup_success');

                    if (data.success) {
                        alertType = 'signup_success';
                    } else {
                        alertType = 'signup_alert';
                    }
                    info.addClass(alertType);
                    if (data.info) {
                        info.html(data.info);
                        info.slideDown();
                    }

                    setTimeout(function () {
                        location.href = come_from;
                        $("#signup").modal("hide");
                    }, 1000);


                }, 'json');


            }

            return false;
        }

        // 設定警示
        function setAlert(fieldName, msg) {
            $('#' + fieldName).css('border', '1px solid red');
            $('#' + fieldName + 'Help').text(msg);
        }

        // 取消警示
        function cancelAlert(fieldName) {
            $('#' + fieldName).css('border', '1px solid #cccccc');
            $('#' + fieldName + 'Help').text('');
        }


        // submit and close modal
        // $('#re_submit').click(function(e)){
        //   e.preventDefault();
        //       // alert($('#form2').val());
        // })

    </script>