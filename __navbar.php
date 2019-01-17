<style>

  .w_nav_en_font {
            font-family: 'Lao MN', 'Arya';
            font-size: 1rem;
            letter-spacing: 2px;
            color: #5C7880;
        }

        .w_nav_noto_regular {
            font-family: 'Noto Sans TC';
            letter-spacing: 2px;
            font-size: 1rem;
            color: #5C7880;
        }

        .w_nav_en_font_sub {
            font-family: 'Lao MN', 'Arya';
            font-size: 0.9rem;
            letter-spacing: 2px;
            color: #5C7880;
        }

        .w_nav_noto_regular_sub {
            font-family: 'Noto Sans TC';
            letter-spacing: 2px;
            font-size: 0.9rem;
            color: #5C7880;
        }

        /*--------- 以下為內容物大盒子 ---------*/
        .w_nav_wrapper {
            width: 90%;
            margin: 0 auto;
            display: flex;
        }

        .w_nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 12px 0px;
            width: 70%;
        }

        /*--------- 以下上為內容物大盒子 ---------*/

        /*--------- 以下為白色背景 ---------*/
        .w_menubar {
            max-width: 100%;
            margin: 0 auto;
            background-color: rgba(255, 255, 255, 0.788);
            box-shadow: 0 3px 6px rgba(88, 88, 88, 0.329);
        }

        /*--------- 以上為白色背景 ---------*/

        /*--------- 以下為logo區域 ---------*/
        .w_nav_logo_box {
            width: 11%;
            margin-right: 8%;
            margin-bottom: 5px;
        }

        .w_nav_logo_box img {
            width: 100%;
        }

        /*--------- 以上為logo區域 ---------*/

        /* -------以下為按鈕區域------- */
        .transition {
            transition: all .3s;
            -webkit-transition: all .3s;
        }

        a {
            list-style-type: none;
            text-decoration: none !important;
            color: #5C7880;
            display: block;
        }

        .w_nav > .w_nav_word > a .w_nav_translate_ch {
            display: flex;
            opacity: 0;

        }

        .w_nav > .w_nav_word > a:hover .w_nav_translate_ch {
            opacity: 10;
            
        }

        .w_nav > .w_nav_word > a .w_nav_translate_en {
            margin-top: -21px;
            display: flex;
        }

        .w_nav > .w_nav_word > a:hover .w_nav_translate_en {
            opacity: 0;
        }

        /* -------以上為按鈕區域------- */

        /* -------以下為下拉選單區域------- */
        .w_nav_sub > li:hover {
            background-color: #F6D169;
        }

        /*.w_nav_sub {*/
        /*position: relative;*/
        /*}*/
        /*這段被後面的abs蓋掉了喔*/

        li:hover .w_nav_sub {
            max-height: 400px;
        }

        .w_nav_sub {
            position: absolute;
            background-color: #DCDCDC;
            top: 25px;
            width: 200px;
            max-height: 0;
            margin-top: 35px;
            overflow: hidden;
            border-radius: 5px;
        }

        .w_nav_sub a {
            padding: 8px 18px;
            display: block;
        }

        .w_nav_sub > li > a:hover {
            color: #E67348;
        }

        /* -------以上為下拉選單區域------- */

        /*--------- 以下為icon區域 ---------*/
        .w_nav_icon_box {
            width: 30%;
            display: flex;
            justify-content: flex-end;
            align-items: center;
        }

        .w_nav_icon_boxin {
            margin-left: 30px;
            position: relative;
        }

        .w_nav_icon_boxin img {
            width: 20px;
        }

        .w_nav_icon_boxin > a .w_nav_icon_after {
            display: none;
        }

        .w_nav_icon_boxin > a:hover .w_nav_icon_after {
            display: block;
        }

        .w_nav_icon_boxin > a .w_nav_icon_before {
            margin-right: -24px;
        }

        .w_nav_icon_boxin > a:hover .w_nav_icon_before {
            display: none;
        }

        /*--------- 以上為icon區域 ---------*/

        /*---------- search_bar -----------*/
        .r_search_box {
            display: flex;
        }

        .r_search {
            border: none;
            border-bottom: 1px solid #5C7880;
            max-width: 0;
        }

        .r_btn_s {
            cursor: pointer;
        }

        .r_s_hide {
            max-width: 100px;
        }

        input[type=search]:focus {
            outline: none;
        }

        /*移除search的x*/
        input[type="search"]::-webkit-search-cancel-button,
        input[type="search"]::-webkit-search-decoration {
            -webkit-appearance: none;
        }

        /*------------icon列下拉通用功能----------------*/
        .r_iocnbox {
            left: 50%;
            top: 100%;
            max-height: none !important;
            background-color: transparent;
            margin-top: 0;
            padding-top: 10px;
            transform: translate(-50%);
            overflow: visible;
            display: none;
        }

        .r_iocnbox::before {
            position: absolute;
            left: 50%;
            top: 0;
            width: 0;
            height: 0;
            border-width: 0 10px 10px;
            transform: translate(-50%, 0);
            border-color: transparent transparent #DCDCDC transparent;
            border-style: solid;
            content: '';
        }

        .r_iocnbox li {
            background-color: #DCDCDC;
            border: #DCDCDC 1px solid;
        }

        .r_iocnbox li:first-child {
            border-radius: 5px 5px 0 0;
        }

        .r_flex {
            display: flex;
        }

        .r_f_center {
            align-items: center;
        }

        .r_btn {
            text-align: center;
        }

        .r_btn a {
            background-color: #E67348;
            color: #ffffff;
        }

        .r_btn:hover{
            background-color: #DCDCDC !important;
        }

        .r_btn a:hover {
            background-color: #d3554a;
            color: #ffffff !important;
        }

        /*------------icon列下拉通用功能----------------*/

        /*--------- 以下為會員選單---------*/

        .r_login li:first-child:hover, .r_login li:last-child:hover {
            background-color: #DCDCDC;
        }

        .r_login li:last-child {
            border-radius: 0 0 5px 5px;
        }

        .r_login li:last-child a {
            border-radius: 5px;
        }

        .r_login li:first-child, .r_login li:last-child {
            padding: 15px 18px;
        }

        .r_login li p::before {
            content: "您好: ";
        }

        /*--------- 以上為會員選單---------*/

        /*--------- 以下為最愛選單---------*/

        .r_wish_list {
            width: 400px;
            transform: translate(-80%);
        }

        .r_wish_list::before {
            transform: translate(550%, 0);
        }

        .r_wish_list p:hover, .r_wish_list li:hover {
            background-color: #DCDCDC;
        }

        .r_wish_list li:last-child {
            border-radius: 0 0 5px 5px;
        }

        .r_wish_tittle {
            padding: 15px 18px 0;
            text-align: center;
        }

        .r_wish_u_line {
            border-bottom: 1px solid #5C7880;
        }

        .r_wish_p {
            width: 100px !important;
        }

        .r_wish_ml {
            margin-left: 20px;
        }

        .r_wish_delet_p {
            padding: 0 !important;
        }

        /*--------- 以上為最愛選單---------*/
        /*--------- 以下為購物車選單---------*/
        .r_cart_list {
            width: 400px;
            transform: translate(-90%);
        }

        .r_cart_list li:hover{
            background-color: #DCDCDC;
        }

        .r_cart_list::before {
            transform: translate(750%, 0);
        }

        .r_cart_flex {
            flex-grow: 2;
            justify-content: flex-end;
        }

        .r_cart_flex p {
            padding-right: 20px;
        }

        .r_cart_list li:last-child {
            border-radius: 0 0 5px 5px;
        }

        .r_cart_btn{
            margin: 0 20px 15px;
            border-radius: 5px;
        }

        /*--------- 以上為購物車選單---------*/
  
/* bootstrap modal size */
.modal-lg {
    /* max-width: 40% !important; */
}
.modal-title{
    /* max-width:30%; */
    /* height:30px; */
  
}
.logo_img {
    max-width: 100%;
    height:50px;
}
.close { 
  position: absolute; 
  right: 1rem;
}
h3, h5, h6, .form-check-label, .label_text{
            color:#5C7880;
        }
        span.red, small {
            color: red; 
        }
        .btn.btn-primary {
            background-color:#E67348;
            border:0;
        }
        .forgot {
            color:#5C7880;
            text-decoration: underline;
        }
        .forgot:hover {
            color:#D3554A;
            text-decoration: none;
        }
        input::placeholder { 
            color: #C9C9C9 !important; 
        }

        /* 地址城市selector 字形顏色 */

        /* .form-control.pre_option {
            color: #C9C9C9;
        } */
        .form-control option{
            color: #5C7880;
        }

        input, select{
            color: #5C7880 !important;
        }

        .agree_underline{
         text-decoration:underline !important;
         color: #5C7880;
         display:inline-block !important;
     }

</style>
<nav>
<div class="w_menubar">
        <div class="w_nav_wrapper">
            <ul class="w_nav en_font">
                <!-- 以下為logo區域 -->
                <li class="w_nav_logo_box">
                    <a href="./"><img src="img/icon/pastania_logo.svg" alt=""></a>
                </li>
                <!-- 以上為logo區域 -->

                <!-- 以下為按鈕區域 -->
                <!-- 關於我們 -->
                <li class="w_nav_word">
                    <a href="#">
                        <span class="w_nav_translate_ch  w_nav_noto_regular">關於我們</span>
                        <span class="w_nav_translate_en  w_nav_en_font">About Us</span>
                    </a>
                </li>
                <!-- 活動 -->
                <li class="w_nav_word">
                    <a href="#">
                        <span class="w_nav_translate_ch  w_nav_noto_regular">特別活動</span>
                        <span class="w_nav_translate_en  w_nav_en_font">Events</span>
                    </a>
                    <!-- 以下為下拉選單區域 -->
                    <ul class="w_nav_sub noto_regular transition">
                        <li class="w_nav_noto_regular_sub"><a href="#">親子同樂玩pasta</a></li>
                        <li class="w_nav_noto_regular_sub"><a href="#">白色情人節特輯</a></li>
                    </ul>
                    <!-- 以上為下拉選單區域 -->
                </li>
                <!-- 產品 -->
                <li class="w_nav_word">
                    <a href="#">
                        <span class="w_nav_translate_ch  w_nav_noto_regular">產品種類</span>
                        <span class="w_nav_translate_en  w_nav_en_font">Products</span>
                    </a>
                    <!-- 以下為下拉選單區域 -->
                    <ul class="w_nav_sub transition">
                        <li class="w_nav_en_font_sub"><a href="">Long 長麵</a></li>
                        <li class="w_nav_en_font_sub"><a href="">Short Cut 短麵</a></li>
                        <li class="w_nav_en_font_sub"><a href="">Minute 粒狀麵</a></li>
                        <li class="w_nav_en_font_sub"><a href="">Stuffed 夾餡款</a></li>
                        <li class="w_nav_en_font_sub"><a href="">Specialty 特別款</a></li>
                        <li class="w_nav_en_font_sub"><a href="">Sauce 義大利麵醬</a></li>
                        <li class="w_nav_en_font_sub"><a href="">Gift Set 組合包</a></li>
                    </ul>
                    <!-- 以上為下拉選單區域 -->
                </li>
                <!-- 食譜 -->
                <li class="w_nav_word">
                    <a href="#">
                        <span class="w_nav_translate_ch  w_nav_noto_regular">食譜種類</span>
                        <span class="w_nav_translate_en  w_nav_en_font">Recipes</span>
                    </a>
                    <!-- 以下為下拉選單區域 -->
                    <ul class="w_nav_sub transition">
                        <li class="w_nav_en_font_sub"><a href="">Party 週末派對</a></li>
                        <li class="w_nav_en_font_sub"><a href="">Occasion 特殊節慶</a></li>
                        <li class="w_nav_en_font_sub"><a href="">Light 健康輕食</a></li>
                        <li class="w_nav_en_font_sub"><a href="">Starter 開胃前菜</a></li>
                        <li class="w_nav_en_font_sub"><a href="">Typical 義國風情</a></li>
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
                <!-- 收藏清單按鈕 -->
                <li class="w_nav_icon_boxin w_list r_btn_i">
                    <a href="">
                                <span class="w_nav_icon_before">
                                    <img src="img/icon/like.svg" alt=""></span>
                        <span class="w_nav_icon_after">
                                    <img src="img/icon/like_red.svg" alt=""></span>
                    </a>
                    <!--以下為收藏內容-->
                    <ul class="w_nav_sub r_iocnbox r_wish_list">
                        <li class="w_nav_en_font_sub r_wish_tittle">
                            <p class="w_nav_en_font r_wish_u_line">Wish List</p>
                        </li>
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
                                        <li class="w_nav_en_font_sub"><p>NT＄ 109</p></li>
                                    </ul>
                                </li>
                                <li class="r_flex r_f_center r_wish_ml">
                                    <a href=""><img src="img/icon/shopping_bag.svg" alt=""></a>
                                </li>
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
                <!-- 購物車按鈕 -->
                <li class="w_nav_icon_boxin r_btn_i">
                    <a href="">
                                <span class="w_nav_icon_before">
                                    <img src="img/icon/shopping_bag.svg" alt=""></span>
                        <span class="w_nav_icon_after">
                                    <img src="img/icon/shopping_bag_red.svg" alt=""></span>
                    </a>
                    <!--以下為購物車內容-->
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
                        <li class="w_nav_en_font_sub r_btn">
                            <a class="w_nav_en_font_sub r_cart_btn">結帳</a>
                        </li>
                        </li>
                    </ul>
                    <!--以上為購物車內容-->
                </li>
            </ul>
            <!-- 以上為右邊小icon符號區域 -->
        </div>
    </div>

</nav>


<nav class="navbar navbar-expand-lg navbar-light bg-light">

<div class="container">

  <a class="navbar-brand" href="./">Pastania</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">

    <ul class="navbar-nav mr-auto">
      <li class="nav-item <?= $page_name=='product_list' ? 'active' : '' ?>">
                    <a class="nav-link" href="product_list.php">商品列表</a>
      </li>
      <li class="nav-item <?= $page_name=='cart' ? 'active' : '' ?>">
                    <a class="nav-link" href="cart.php">購物車
                        <span class="badge badge-pill badge-info">0</span>
                    </a>
                </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
    <ul class="navbar-nav">

    <!-- 設定登入時,navbar上登入字改成user nickname和登出 -->
    <?php if(isset($_SESSION['user'])): ?>
    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?= $_SESSION['user']['nickname'] ?>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="edit_me.php">編輯個人資料</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">修改密碼</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">登出</a>
                    </li>
      <?php else: ?>
                                    <!-- 頁籤標題會隨著換頁更動 -->
                <li class="nav-item <?= $page_name=='login' ? 'active' : '' ?>"> 
                    <a class="nav-link" href="login.php" data-toggle="modal" data-target=".bd-example-modal-lg">登入</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="register.php">註冊</a>
                </li>
      <?php endif ?>
            </ul>
    </div>

    <!-- bootstrap Modal start (SIGN IN) -->
    <div class="modal fade bd-example-modal-lg sign_in"  id="myModal">
        <div class="modal-dialog modal-lg modal-dialog-centered " role="document">
            <div class="modal-content container">
                 <div class="modal-header">
                    <!-- <h5 class="col-md-12 modal-title text-center">PASTANIA</h5> -->
                    <a href="#" class="col-12 modal-title mx-auto text-center"><img src="img/icon/pastania_logo.svg" class="logo_img" alt=""></a>
                    
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
                    <h6 class="card-title text-center pb-4">登入會員即可快速結帳</h6>
            <form name="form1" method="post" onsubmit="return formCheck()" class="row">

            
                        <div class="form-group col-md-8 mx-auto">
                            <!-- <label for="email"><span class="red">*</span> 電子信箱</label> -->
                            <input type="text" class="form-control" id="email" name="email" placeholder="會員帳號 / 會員信箱">
                            <small id="emailHelp" class="form-text"></small>
                        </div>

                        <div class="form-group col-md-8 mx-auto">
                            <!-- <label for="password"><span class="red">*</span> 密碼</label> -->
                            <input type="text" class="form-control" id="password" name="password" placeholder="會員密碼">
                            <small id="passwordHelp" class="form-text"></small>
                        </div>

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
                <button type="button" class="btn btn-primary col-md-12 mx-auto ">登入</button>
                <hr class="col-md-10 ">
                <h6 class="col-md-12 card-title text-center pb-2">還不是會員?</h6>
                <button type="button" class="btn btn-primary col-md-12 mx-auto mb-5 " data-toggle="modal" data-target=".register-modal-lg" id="goRegister">註冊</button>
                </div>

            </form>
        </div>
  </div>

</div>
<!-- bootstrap Modal end (SIGN IN)-->

 <!-- bootstrap Modal start (Register) -->

 <div class="modal fade register-modal-lg"  id="signup">
        <div class="modal-dialog modal-lg modal-dialog-centered " role="document">
            <div class="modal-content container">
                 <div class="modal-header">
                    
                    <a href="#" class="col-12 modal-title mx-auto text-center"><img src="img/icon/pastania_logo.svg" class="logo_img" alt=""></a>
                    
                    <button type="button" class="close " data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                    
                    
            </div>
            <h5 class="card-title text-center pt-4">SIGN UP</h5>
                    <h6 class="card-title text-center pb-4">加入會員</h6>
            <form name="form1" method="post" onsubmit="return formCheck()">

            
            <div class="form-group col-md-10 row mx-auto">
                            <label for="email" class="col-md-3 label_text"> 電子郵箱<span class="red ">*</span></label>
                            <input type="text" class="form-control col-md-9" id="email" name="email" placeholder="E-mail將會成為您的會員帳號，請務必確認是否填寫正確">
                            <small id="emailHelp" class="form-text"></small>
                        </div>

                        <div class="form-group col-md-10 row mx-auto">
                            <label for="nickname" class="col-md-3 label_text">會員暱稱<span class="red">*</span></label>
                            <input type="text" class="form-control col-md-9" id="nickname" name="nickname" placeholder="請輸入您的暱稱">
                            <small id="nicknameHelp" class="form-text"></small>
                        </div>
                        <div class="form-group col-md-10 row mx-auto">
                            <label for="password" class="col-md-3 label_text">設定密碼<span class="red">*</span></label>
                            <input type="text" class="form-control col-md-9" id="password" name="password" placeholder="請輸入6個字元以上密碼">
                            <small id="passwordHelp" class="form-text"></small>
                        </div>
                        <!-- 新加的start -->
                        <div class="form-group col-md-10 row mx-auto">
                            <label for="password" class="col-md-3 label_text">密碼確認<span class="red">*</span></label>
                            <input type="text" class="form-control col-md-9" id="password" name="password" placeholder="請重新輸入預設密碼">
                            <small id="passwordHelp" class="form-text"></small>
                        </div>
                        <!-- 新加的end -->
                        <div class="form-group col-md-10 row mx-auto">
                             <label for="exampleFormControlSelect1 label_text" class="col-md-3 label_text my-1">地址<span class="red">*</span></label>
                             <input type="email" class="form-control col-sm-2 mr-4 my-1" id="exampleFormControlInput1" placeholder="郵遞區號">
                            <select require class="form-control col-sm-3 mr-4 pre_option my-1" id="id_mySelect">
                            <option class="pre" >請選擇城市</option>
                            <option>台北市</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            </select>

                            <select class="form-control col-sm-3 pre_option my-1" id="exampleFormControlSelect1">
                            <option>請選擇區域</option>
                            <option>北投區</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            </select>
                        </div>
                        <div class="form-group col-md-10 row mx-auto">
                            <label for="" class="col-md-3"></label>
                            <input type="text" class="form-control col-md-9" id="" name="">
                            <small id="passwordHelp" class="form-text"></small>
                        </div>
                        <div class="form-group form-check col-md-10 mx-auto text-center pt-2 pb-4">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">我同意接受<a href="#" class="agree_underline">Pastania服務條款</a>和<a href="#" class="agree_underline">隱私權政策</a></label>
                        </div>
   
               <div class="col-md-8 justify-content-lg-between text-center mx-auto">
            
                <button type="button" class="btn btn-primary col-md-12 mx-auto mb-5 " data-toggle="modal" data-target=".regeister-modal-lg">註冊</button>
                </div>
            
            </form>
        </div>

 <!-- bootstrap Modal end (Register) -->
  </div>
</nav>
<style>
    li.nav-item.active {
        background-color: beige;
    }
</style>


<script>
 // icon下拉選單
 $(document).ready(function () {
            $(".r_btn_i").hover(function () {
                $(this).find(".w_nav_sub").stop(true, true).slideDown(300);
            }, function () {
//                 $(this).find(".w_nav_sub").stop(true, true).slideUp(300);
            });
        });
        // icon下拉選單

        // search的按鈕
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






  // cart badge顯示 
    var badge_pill = $('.badge-pill');

    function cart_count(obj){
        var s, t=0;
        for(s in obj){
            t += 1 
            // 只加購買種類, 不是累加全部購買數量
        }
        badge_pill.text(t);
    }
    
// ajax
    $.get('add_to_cart.php', function(data){
        cart_count(data);
    }, 'json');

// bootstrap modal
$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})

$('#goRegister').click(function(){
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


// 城市&區域select 控制
</script>