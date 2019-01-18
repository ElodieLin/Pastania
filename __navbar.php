<!-- <head><link rel="stylesheet" href="./bootstrap/css/bootstrap.css"></head> -->

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

  @media screen and (max-width: 900px) {
    .w_nav li{
      transform: scale(.8);
    }
  }

  @media screen and (max-width: 650px) {
    .w_nav li{
      transform: scale(.6);
    }
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
    width: 140px;
  }


  @media screen and (max-width: 900px) {
    .w_nav_logo_box img {
      width: 100px;
    }
  }

  /*@media screen and (max-width: 650px) {*/
    /*.w_nav_logo_box img*/
      /*width: 150px;*/
    /*}*/
  /*}*/





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

  @media screen and (max-width: 900px) {
    .w_nav_icon_box {
      transform: scale(.8);
    }
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
    background: transparent;
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

  .r_just_a {
    justify-content: space-around;
  }

  .r_btn {
    text-align: center;
  }

  .r_btn a {
    background-color: #E67348;
    color: #ffffff !important;
  }

  .r_btn:hover {
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

  .nav-link {
    padding: 0 !important;
    /*蓋掉bs*/
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

  .r_cart_list li:hover {
    background-color: #DCDCDC;
  }

  .r_cart_list::before {
    transform: translate(750%, 0);
  }

  .r_cart_flex {
    justify-content: flex-end;
  }

  .r_cart_flex p {
    padding-left: 30px;
    padding-right: 20px;
  }

  .r_cart_list li:last-child {
    border-radius: 0 0 5px 5px;
  }

  .r_cart_btn {
    margin: 0 20px 15px;
    border-radius: 5px;
  }

  .r_cart_y {
    transform: translateY(-5%);
  }

  /*--------- 以上為購物車選單---------*/








  /* ～～～～～～～以下漢堡選單區域～～～～～～～ */


  .ham-wrapper {
    display: none;
    /* 在電腦時，版手機版關閉 */
  }

  @media screen and (max-width: 575.98px) {

    .w_nav_wrapper {
      display: none;
    }

    .ham-wrapper {
      display: flex;
      justify-content: center;
      align-content: center;
      width: 100%;
      border-bottom: #5C7880 1px solid;
      background-color: rgba(255, 255, 255, 0.788);
      box-shadow: 0 3px 6px rgba(88, 88, 88, 0.329);
    }
    .ham-wrapper-a {
      width: 80%;
      justify-content: center;
    }


    .ham-wrapper img {
      width: 50%;
      transform: translate(20%);
      padding: 8px 0;
    }


    .menu-btn {
      display: flex;
      cursor: pointer;
      width: 20%;
      align-items: center;
      justify-content: center;
      z-index: 3;
    }

    .menu-btn ul {
      background: #ffffff;
      width: 150px;
      opacity: 0;
      max-height: 0;
      overflow: hidden;
      background-color: antiquewhite;
    }

    .menu-btn > ul {
      position: absolute;
      right: 0;
      top: 100%;
      transition: opacity .4s;
    }

    .menu-btn.active ul {
      opacity: 1;
      max-height: 800px;
      width: 100vw;
      background-color: #DCDCDC;

    }

    .menu-btn ul li a {
      font-size: 20px;
      display: flex;
      padding: 10px 22px;
      color: #5C7880 !important;
    }



    ul,
    li {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    a {
      display: block;
    }

    .bar-box {
      width: 45px;
      background: transparent;
      border-radius: 3px;

    }

    .bar {
      width: 26px;
      height: 2px;
      background: #5C7880;
      margin: 6px auto;
      border-radius: 2px;
      transition: .2s;
    }

    .active .bar1 {
      transform: rotate(-45deg) translate(-9px, 9px);
    }

    .active .bar2 {
      opacity: 0;
    }

    .active .bar3 {
      transform: rotate(45deg) translate(-2px, -2px);
    }

    .sub-menu {
      display: none;
      opacity: 1;
      max-height: 0;
      overflow: hidden;
    }

    .r_arrow_icon {
      justify-content: space-between;
      align-items: center;
    }
  }

  /* ～～～～～～～以上漢堡選單區域～～～～～～～ */


  /* ～～～～～～～以下手機選單區域～～～～～～～ */
  @media screen and (min-width: 576px) {
    .r_phone_button {
      display: none;
    }
  }

  .r_phone_button {
    background-color: #C8D8D8;
    position: fixed;
    width: 100%;
    z-index: 99;
    bottom: 0;
  }

  .r_phone_button ul li {
    padding: 20px;
  }

  .r_phone_button ul li a img {
    width: 40px;
  }


  /* ～～～～～～～以上手機選單區域～～～～～～～ */
  /* bootstrap modal size */
  .modal-lg {
    /* max-width: 40% !important; */
  }

  .modal-title {
    /* max-width:30%; */
    /* height:30px; */

  }

  .logo_img {
    max-width: 100%;
    height: 50px;
  }

  .close {
    position: absolute;
    right: 1rem;
  }

  h3, h5, h6, .form-check-label, .label_text {
    color: #5C7880;
  }

  span.red, small {
    color: red;
  }

  .btn.btn-primary {
    background-color: #E67348;
    border: 0;
  }

  .forgot {
    color: #5C7880;
    text-decoration: underline;
  }

  .forgot:hover {
    color: #D3554A;
    text-decoration: none;
  }

  input::placeholder {
    color: #C9C9C9 !important;
  }

  /* 地址城市selector 字形顏色 */

  /* .form-control.pre_option {
      color: #C9C9C9;
  } */
  .form-control option {
    color: #5C7880;
  }

  input, select {
    color: #5C7880 !important;
  }

  .agree_underline {
    text-decoration: underline !important;
    color: #5C7880;
    display: inline-block !important;
  }

  .navbar {
    padding: 0.1rem;

  }

  .fixed-nav-bar, .ham-wrapper {
    position: fixed;
    top: 0;
    left: 0;
    z-index: 5;
    width: 100%;

  }

</style>
<nav>
  <div class="w_menubar fixed-nav-bar">
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
          <!-- 以下為下拉選單區域 -->
          <ul class="w_nav_sub noto_regular transition">
            <li class="w_nav_noto_regular_sub"><a href="#">品牌介紹</a></li>
            <li class="w_nav_noto_regular_sub"><a href="#">義麵地圖</a></li>
          </ul>
          <!-- 以上為下拉選單區域 -->

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
            <li class="w_nav_en_font_sub"><a href="product_list_long.php">Long 長麵</a></li>
            <li class="w_nav_en_font_sub"><a href="product_short_cut.php">Short Cut 短麵</a></li>
            <li class="w_nav_en_font_sub"><a href="product_list_minute.php">Minute 粒狀麵</a></li>
            <li class="w_nav_en_font_sub"><a href="product_list_stuffed.php">Stuffed 夾餡款</a></li>
            <li class="w_nav_en_font_sub"><a href="product_list_specialty.php">Specialty 特別款</a></li>
            <li class="w_nav_en_font_sub"><a href="product_list_sauce.php">Sauce 義大利麵醬</a></li>
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
            <li class="w_nav_en_font_sub r_btn r_cart_y">
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
  <!-- /* ～～～～～～～以下漢堡選單區域～～～～～～～ */ -->
  <div class="ham-wrapper">
    <a class="r_flex ham-wrapper-a" href="./">
    <img src="img/icon/pastania_logo.svg"  alt="">
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
          <a class="r_arrow_icon ">Events<i class="fas fa-angle-right r_arrow_icon"></i></a>
          <ul class="sub-menu ">
            <li><a>親子同樂玩pasta</a></li>
            <li><a>白色情人節特輯</a></li>
          </ul>
        </li>
        <li>
          <a class="r_arrow_icon ">Products<i class="fas fa-angle-right r_arrow_icon"></i></a>
          <ul class="sub-menu">
            <li><a href="product_list_long.php">Long 長麵</a></li>
            <li><a href="product_short_cut.php">Short cut 短麵</a></li>
            <li><a href="product_list_minute.php">Minute 粒狀麵</a></li>
            <li><a href="product_list_stuffed.php">Stuffed 夾餡款</a></li>
            <li><a href="product_list_specialty.php">Specialty 特別款</a></li>
            <li><a href="product_list_sauce.php">Sauce 義大利麵醬</a></li>
            <li><a>Gift Set 組合包</a></li>
          </ul>
        </li>
        <li>
          <a class="r_arrow_icon ">Recipes<i class="fas fa-angle-right r_arrow_icon"></i></a>
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
  <!-- /* ～～～～～～～以上為漢堡選單區域～～～～～～～ */ -->
  <!-- /* ～～～～～～～以下為手機版icon選單區域～～～～～～～ */ -->
  <div class="r_phone_button">
    <ul class="r_flex r_just_a">
      <li>
        <a href="">
          <img src="img/icon/search.svg" alt="">
        </a>
      </li>
      <li>
        <a href="">
          <img src="img/icon/member.svg" alt="">
        </a>
      </li>
      <li>
        <a href="">
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
  <!-- /* ～～～～～～～以上為手機版icon選單區域～～～～～～～ */ -->


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

            <a href="#" class="col-12 modal-title mx-auto text-center"><img src="img/icon/pastania_logo.svg"
                                                                            class="logo_img" alt=""></a>

            <button type="button" class="close " data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>


          </div>
          <h5 class="card-title text-center pt-4">SIGN UP</h5>
          <h6 class="card-title text-center pb-4">加入會員</h6>
          <form name="form1" method="post" onsubmit="return formCheck()">


            <div class="form-group col-md-10 row mx-auto">
              <label for="email" class="col-md-3 label_text"> 電子郵箱<span class="red ">*</span></label>
              <input type="text" class="form-control col-md-9" id="email" name="email"
                     placeholder="E-mail將會成為您的會員帳號，請務必確認是否填寫正確">
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
              <label for="exampleFormControlSelect1 label_text" class="col-md-3 label_text my-1">地址<span
                        class="red">*</span></label>
              <input type="email" class="form-control col-sm-2 mr-4 my-1" id="exampleFormControlInput1"
                     placeholder="郵遞區號">
              <select require class="form-control col-sm-3 mr-4 pre_option my-1" id="id_mySelect">
                <option class="pre">請選擇城市</option>
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
              <label class="form-check-label" for="exampleCheck1">我同意接受<a href="#"
                                                                          class="agree_underline">Pastania服務條款</a>和<a
                        href="#" class="agree_underline">隱私權政策</a></label>
            </div>

            <div class="col-md-8 justify-content-lg-between text-center mx-auto">

              <button type="button" class="btn btn-primary col-md-12 mx-auto mb-5 " data-toggle="modal"
                      data-target=".regeister-modal-lg">註冊
              </button>
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
        $(this).find(".w_nav_sub").stop(true, true).slideUp(300);
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

    //漢堡選單
    $(".menu-btn .bar-box").click(function () {
      $(".menu-btn").toggleClass('active');
      $(".menu-btn ul ul").slideUp(0);
    });

    $(".menu-btn a").click(function () {
      if ($(this).siblings('ul').length) {
        $(this).siblings('ul').slideToggle(400);
      } else {
        $(".menu-btn").toggleClass('active');
        $(".menu-btn ul ul").slideUp(0);
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


    // 城市&區域select 控制
  </script>