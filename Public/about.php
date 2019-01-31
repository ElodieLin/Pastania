<?php include __DIR__ . '/__html_head.php' ?>
<?php include __DIR__ . '/__navbar.php' ?>

  <head>
    <title>About Us</title>

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous"> -->
    <!-- 以下是特效 -->
    <link rel="stylesheet" href="css/aos.css">

    <style>
      /* -----------以下是模組------------- */

      /* 以下是英文字型，是標題大小，其他如果要改字級大小(參考ＸＤ檔)再去要改的class設定 (只有食譜細節頁的標題會改粗體可以直接在html裡加粗體的標籤)*/
      .en_font {
        font-family: 'Lao MN', 'Arya';
        font-size: 2rem;
        color: #5C7880;
      }

      /* 以下是中文字型＿light，內文用，其他如果要改字級大小(參考ＸＤ檔)再去要改的class設定 */
      .noto_light {
        font-family: 'Noto Sans TC';
        font-weight: 300;
        /* 這是次細的(light) */
        letter-spacing: 2px;
        font-size: 1.3rem;
        color: #5C7880;

      }

      /* 以下是中文字型_thin，次要內文用，其他如果要改字級大小(參考ＸＤ檔)再去要改的class設定 */
      .noto_thin {
        font-family: 'Noto Sans TC';
        font-weight: 100;
        /* 這是最細的(thin) */
        letter-spacing: 2px;
        /* font-size: 1.3rem;
        color: #5C7880; */

      }

      /* 以下是中文字型標題大小 regular，頁面大標題用，如果要改字級大小(參考ＸＤ檔)再去要改的class設定 */
      .noto_regular {
        font-family: 'Noto Sans TC';
        letter-spacing: 2px;
        font-size: 2rem;
        color: #5C7880;

      }

      .cursor {
        cursor: pointer;
      }


      /* btn 模組 */
      .e_btn {
        width: 372px;
        height: 70px;
        border: 0;
        background-color: #E67348;
        color: #fff;
        font-size: 1.3rem;
        border-radius: 5px;
        text-align: center;
        cursor: pointer;
      }

      .e_btn:hover {
        background-color: #D3554A;

      }

      .e_btn:focus {
        outline: none;
      }


      .e_btn_outline {
        width: 372px;
        height: 70px;
        background-color: #fff;
        border: 2px solid #E67348;
        color: #E67348;
        font-size: 1.3rem;
        border-radius: 5px;
        text-align: center;
        cursor: pointer;

      }

      .e_btn_outline:hover {
        background-color: #E67348;
        color: #fff;
      }

      .e_btn_outline:focus {
        outline: none;
      }

      .e_cart_btn {
        margin-top: 50px;
        margin-bottom: 100px;
        display: flex;
        justify-content: space-between;
      }


      @media screen and (max-width: 992px) {
        .e_btn {
          width: 100%;
        }

        .e_btn_outline {
          width: 100%;
          margin-bottom: 20px;
        }
      }

      /* -----------以上是模組------------- */


      /* ----------以下為cover大圖設定---------- */
      .e_cover {
        width: 100vw;
        height: 30vh;
        background: url(img/pages/about/aboutus_cover.jpg) center 250px;
        background-size: cover;
        background-attachment: fixed;

      }

      .e_title {
        margin: auto;
        text-align: center;
        width: 25%;
        padding: 80px 0px 40px 0px;
      }

      .e_title_line {
        border-bottom: #5C7880 1px solid;
        padding: 20px 0px;
      }

      .e_aboutus_seciton1 {
        display: flex;
      }

      .e_img1 {
        width: 35%;
        padding: 0 70px 0 0;
      }

      .e_img1 img {
        width: 100%;
      }

      .e_section1_text {
        width: 51%;
        padding-top: 18%
      }

      .e_section1_text h2,
      .e_seciton2_text h2 {
        margin-bottom: 25px;
      }

      .e_section1_text p {
        margin-bottom: 0;
      }

      .e_illustration {
        width: 38%;
        margin: 70px 0 0 auto;

      }

      .e_illustration img {
        width: 100%;

      }

      .e_seciton2_text h2 {
        line-height: 48px;
      }

      .e_seciton2_text {
        width: 49%;
        margin-bottom: 50px;
      }

      .e_aboutus_seciton2_img {
        width: 100%;
        display: flex;
        justify-content: space-between;

      }

      .e_col-4 {
        max-width: 30%;
      }

      .e_aboutus_seciton2_img img {
        width: 100%;
        object-fit: contain;
      }

      .e_consultant_wrap {
        margin-bottom: 70px;
        margin-top: 70px;
        position: relative;
      }

      .e_consultant {
        width: 430px;
        height: 430px;
        margin: 0 auto;
        /* background: #ccc; */
        clip-path: polygon(50% 0%, 100% 50%, 50% 100%, 0% 50%);
      }

      .e_consultant img {
        width: 100%;
      }

      .e_consultant_intro {
        position: absolute;
        bottom: 0px;
        left: 20%;
      }

      .e_consultant_title {
        font-size: 1.6rem;
      }

      .e_consultant_text {
        /* width: 50%; */
        font-size: 1.2rem;
        text-shadow: 0.5px 0.5px 0px #fff;
      }

      .e_our_team {
        width: 20%;
        margin: 0 10% 0 auto;
        margin-bottom: 100px;
        position: relative;
      }

      .e_our_team img {
        width: 100%;
      }

      .e_line {
        display: block;
        width: 95%;
        border: .5px solid #5C7880;
        transform: rotate(-35deg);
        position: absolute;
        right: 137%;
      }


      /* ---------------以下為組員--------------- */
      .e_member {
        display: flex;
        margin-bottom: 100px;
      }

      .e_member_picture_wrapper {
        width: 40%;
        position: relative;
      }

      .e_member_picture_left {
        position: absolute;
        z-index: 2;
        width: 100%;
      }

      .e_member_picture_right {
        position: absolute;
        z-index: 2;
        width: 100%;
        text-align: right;
      }

      .e_member_picture_wrapper img {
        width: 90%;
        object-fit: contain;
      }

      .e_member_bg_left {
        width: 90%;
        height: 90%;
        position: absolute;
        bottom: 0;
        right: 0;
      }

      .e_member_bg_right {
        width: 90%;
        height: 90%;
        position: absolute;
        bottom: 0;
        left: 0;
      }

      .e_member_bg_left img {
        width: 100%;
        object-fit: contain;

      }

      .e_member_bg_right img {
        width: 100%;
        object-fit: contain;

      }

      .e_bg_blue {
        background: #C8DBD8;

      }

      .e_bg_yellow {
        background: rgba(246, 208, 105, 0.598);
      }

      .e_bg_orange {
        background: rgba(230, 114, 72, 0.605);
      }

      .e_member_left_intro {
        width: 60%;
        margin-left: 70px;
        padding-top: 20%;
        border-bottom: 1px solid #5C7880;

      }

      .e_member_right_intro {
        width: 60%;
        margin-right: 70px;
        padding-top: 20%;
        border-bottom: 1px solid #5C7880;

      }

      .e_align_right {
        text-align: right
      }

      .e_member .noto_light {
        font-size: 1.2rem;
      }


      /* ---------------以下是義麵之旅---------------- */

      .e_journey_title_outer_wrapper {
        display: flex;
        justify-content: center;
        margin-top: 150px;
        margin-bottom: 70px;
      }

      .e_journey_title_wrap {
        width: 65px;
      }

      .e_journey_title_wrap img {
        width: 100%;
        vertical-align: middle;
      }

      .e_journey_title_outer_wrapper h2 {
        margin-left: 30px;

      }

      .e_pasta_journey_img {
        max-width: 90%;
        margin: 0 auto;
        text-align: center;
      }

      .e_pasta_journey_img img {
        width: 100%;
      }

      .e_pasta_journey_text {
        max-width: 80%;
        margin: 0 auto;
        margin-top: 70px;
      }

      .e_pasta_journey_btn {
        text-align: center;
        margin-top: 100px;
      }


      /* －－－－－－－－－－ＲＷＤ－－－－－－－－－－ */

      @media screen and (max-width: 1200px) {
        .e_section1_text {
          padding-top: 10%;
        }
      }

      @media screen and (max-width: 992px) {
        .e_aboutus_seciton1 {
          justify-content: space-between;
        }

        .e_img1 {
          padding: 0;
          padding-top: 10%;
        }

        .e_member_left_intro,
        .e_member_right_intro {
          padding-top: 13%;
        }

      }

      @media screen and (max-width: 900px) {
        .noto_regular {
          font-size: 1.2rem;
        }

        .en_font {
          font-size: 1.2rem;
        }

        .noto_light {
          font-size: 1.1rem;
        }

        .e_title_line {
          margin-top: 20px;
          padding: 15px 0px;
        }

        .e_seciton2_text h2 {
          line-height: 35px;
        }

        .e_seciton2_text {
          width: 100%;
        }

        .e_consultant {
          width: 400px;
          height: 400px;
        }

        .e_member_left_intro,
        .e_member_right_intro {
          padding-top: 17%;
        }

        .e_journey_title_outer_wrapper h2 {
          line-height: 33px;
        }

      }

      @media screen and (max-width: 768px) {
        .noto_light {
          font-size: 1rem;
        }

        .e_aboutus_seciton1 {
          flex-direction: column;
        }

        .e_img1 {
          width: 55%;
          padding: 0;
          margin: 0 auto;
        }

        .e_section1_text {
          width: 100%;
          padding-top: 12%;
        }

        .e_illustration {
          width: 45%;
          margin: 0 auto;
          margin-top: 60px;
        }

        .e_aboutus_seciton2 {
          display: flex;
          flex-direction: column;
        }

        .e_seciton2_text {
          order: 1;
        }

        .e_col-4 {
          max-width: 33%;
        }

        .e_aboutus_seciton2_img img {
          margin-bottom: -40px;
        }

        .e_consultant_intro {
          position: static;
          margin: 0 55px;
        }

        .e_consultant_text {
          width: 100%;
        }

        .e_member_left_intro,
        .e_member_right_intro {
          padding-top: 10%;
        }

        .e_journey_title_wrap {
          width: 55px;
        }

        .e_journey_title_outer_wrapper h2 {
          margin: 0;
          margin-left: 20px;
          letter-spacing: 0;

        }

      }


      @media screen and (max-width: 700px) {

        .e_cover {
          height: 160px;

        }
      }

      @media screen and (max-width: 675px) {
        .e_consultant {
          width: 330px;
          height: 330px;
        }

        .e_consultant_intro {
          margin: 0 20px;
        }

        .e_our_team {
          width: 28%;
          margin: 0 5% 20% auto;
        }

        .e_line {
          width: 70%;
          right: 120%;
        }
      }

      @media screen and (max-width: 675px) {

        .e_member_left_intro {
          padding-top: 0;
          margin-left: 20px;
        }

        .e_member_right_intro {
          padding-top: 0;
          margin-right: 20px;
        }

        .e_member .noto_light {
          font-size: 1rem;
        }
      }
    </style>
  </head>

  <body>

  <header>
    <div class=" e_cover"></div>
  </header>

  <div class="container">
    <div class="e_title">
      <p class="noto_regular  e_title_line">關於我們</p>
      <p class="en_font">About US</p>
    </div>

    <div class="e_aboutus_seciton1">
      <div class="e_img1">
        <img src="img/pages/about/aboutus_img1.png" alt="">
      </div>
      <div class="e_section1_text">
        <h2 class="noto_regular">與麵共生，以食為趣</h2>
        <p class="noto_light">一群熱愛義大利麵的我們在2018年創立了Pastnia，致力
          給熱愛生活、迷戀義國風情的你，提供多樣性麵種以及經
          典義式醬料，讓你在吃麵時，瞬間就跳脫日常，感受義式
          生活美學，這裡的美好不只在美食，更瀰漫在生活的每一
          處。
        </p>
      </div>

    </div>

    <div class="e_illustration" data-aos="flip-right" data-aos-offset="200">
      <img src="img/pages/about/aboutus_cooking.svg" alt="">
    </div>

    <div class="e_aboutus_seciton2">
      <div class="e_seciton2_text">
        <h2 class="noto_regular">
          Pastania漫步於歷史<br>
          傳統與創意的纏綿交織
        </h2>
        <p class="noto_light">
          Pastania提供多元化的義大利麵種，來到這才發現各種形
          體的義大利麵，背後都有屬於自己的故事，才知道嚐的不
          只是一道美味佳餚，更是探索一段段歷史。<br>
          Pastania延續傳統家鄉風味，使用純義大利生產的100%
          杜蘭麵粉以及使用百年手工造麵技術，持續創作與挖掘義
          大利麵菜餚，在傳統中找到新巧思，分秒感受極致講究的
          細膩。
        </p>
      </div>
      <div class="e_aboutus_seciton2_img">
        <img class="e_col-4" data-aos="flip-down" src="img/pages/about/aboutus_img2.png" alt="">
        <img class="e_col-4" data-aos="flip-up" src="img/pages/about/aboutus_img3.png" alt="">
        <img class="e_col-4" data-aos="flip-down" src="img/pages/about/aboutus_img4.png" alt="">
      </div>

    </div>

    <!-- member introdction -->

    <div class="e_consultant_wrap">
      <div class="e_consultant" data-aos="flip-right">
        <img src="img/pages/about/d.png" alt="">
      </div>

      <div class="e_consultant_intro">
        <h2 class="noto_regular e_consultant_title">義國顧問</h2>
        <h2 class="en_font e_consultant_title">Daniel Daffara</h2>
        <p class="noto_light e_consultant_text">
          知名美食部落客兼 Pastina 特別顧問<br>
          Thanks for his participation.
        </p>
      </div>
    </div>

    <div class="e_our_team">
      <img src="img/pages/about/aboutus_our_team.svg" alt="">
      <span class="e_line"></span>
    </div>

    <div class="e_member" data-aos="fade-left" data-aos-offset="200" data-aos-duration="400">
      <div class="e_member_picture_wrapper">
        <div class="e_member_picture_left">
          <img src="img/pages/about/member_i.jpg" alt="">
        </div>
        <div class="e_member_bg_left ">
          <img class="e_bg_blue" src="img/pages/about/picture_bg.png" alt="">
        </div>
      </div>

      <div class="e_member_left_intro">
        <h2 class="noto_regular e_consultant_title">專案經理</h2>
        <h2 class="en_font">Elodie Lin</h2>
        <p class="noto_light ">
          如何打造出高品質使用者體驗的產品一直以來是團隊共同的目標，在理性的探討之下激發團隊間的腦力激盪，讓設計作品琢至完美境界。
        </p>
      </div>
    </div>

    <div class="e_member" data-aos="fade-right" data-aos-offset="200" data-aos-duration="400">
      <div class="e_member_right_intro">
        <h2 class="noto_regular e_consultant_title e_align_right">技術總監</h2>
        <h2 class="en_font e_align_right">Reg Huang</h2>
        <p class="noto_light e_align_right">
          面向技術，往往不是只有深度，還需要有足夠的廣度，當面對看似艱澀難懂的複雜問題時，或許只要轉個彎， 就會豁然開朗得找到出口。
        </p>
      </div>

      <div class="e_member_picture_wrapper">
        <div class="e_member_picture_right">
          <img src="img/pages/about/member_r.jpg" alt="">
        </div>
        <div class="e_member_bg_right ">
          <img class="e_bg_orange" src="img/pages/about/picture_bg.png" alt="">
        </div>
      </div>
    </div>

    <div class="e_member" data-aos="fade-left" data-aos-offset="200" data-aos-duration="400">
      <div class="e_member_picture_wrapper">
        <div class="e_member_picture_left">
          <img src="img/pages/about/member_w.jpg" alt="">
        </div>
        <div class="e_member_bg_left ">
          <img class="e_bg_yellow" src="img/pages/about/picture_bg.png" alt="">
        </div>
      </div>

      <div class="e_member_left_intro">
        <h2 class="noto_regular e_consultant_title">設計總監</h2>
        <h2 class="en_font">Joanna Chen</h2>
        <p class="noto_light ">
          創意，源自於瞬間的感動，真心的投入就會非常有感覺，用心聆聽客戶的需求，從中捕捉最真實的”感動”。
        </p>
      </div>
    </div>

    <div class="e_member" data-aos="fade-right" data-aos-offset="200" data-aos-duration="400">
      <div class="e_member_right_intro">
        <h2 class="noto_regular e_consultant_title e_align_right">創意總監</h2>
        <h2 class="en_font e_align_right">Enya Shih</h2>
        <p class="noto_light e_align_right">
          運用多元符號，來塑造設計的獨特性，重新詮釋各類型的文化題材與元素得已突破單一手法的市場慣性設計。
        </p>
      </div>

      <div class="e_member_picture_wrapper">
        <div class="e_member_picture_right">
          <img src="img/pages/about/member_e.jpg" alt="">
        </div>
        <div class="e_member_bg_right  ">
          <img class="e_bg_blue" src="img/pages/about/picture_bg.png" alt="">
        </div>
      </div>
    </div>


    <div class="e_member" data-aos="fade-left" data-aos-offset="200" data-aos-duration="400">
      <div class="e_member_picture_wrapper">
        <div class="e_member_picture_left">
          <img src="img/pages/about/member_t.jpg" alt="">
        </div>
        <div class="e_member_bg_left ">
          <img class="e_bg_orange" src="img/pages/about/picture_bg.png" alt="">

        </div>
      </div>

      <div class="e_member_left_intro">
        <h2 class="noto_regular e_consultant_title">行銷設計總監</h2>
        <h2 class="en_font">Tim Chen</h2>
        <p class="noto_light ">
          設計提供的除了是美學之外還應該提供人性化功能，只要能夠多投入一點心靈上的巧思，設計便得以更深入人心， 才能值得稱為佳作。
        </p>
      </div>
    </div>


    <!-- 以下是 Pastania領路 與你玩味菜餚 -->

    <div class="e_pasta_journey">
      <div class="e_journey_title_outer_wrapper">
        <div class="e_journey_title_wrap">
          <img src="img/pages/about/aboutus_italy_flag.svg" alt="">
        </div>
        <h2 class="noto_regular">Pastania領路 與你玩味菜餚</h2>
      </div>
      <div class="e_pasta_journey_img">
        <img src="img/pages/about/aboutus_img5.png" alt="">
      </div>
      <p class="noto_light e_pasta_journey_text">
        不論是選擇新鮮香料搭配而成的鰹魚細麵沙拉，揭開義國美食的
        序幕，抑或是大快朵頤享用經典拿波里紅醬麵，感受南方盛情之
        味，在Pastania都能尋找到各式道地義大利麵菜餚與食譜，吸引
        每一位熱愛生活、迷戀義國風情的你，為忙碌的生活添加樂趣與
        活力。
      </p>
      <div class="e_pasta_journey_btn">
        <a href="pasta_map.php">
          <button class="e_btn noto_light">前 往 義 麵 之 旅</button>
        </a>
      </div>


    </div>


  </div>


  <script>
      $(function () {
          AOS.init({
              delay: 200
          });
      });
  </script>


  </body>

<?php include __DIR__ . '/__html_foot.php' ?>