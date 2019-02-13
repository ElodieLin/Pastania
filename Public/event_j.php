<?php
if (!isset($_SESSION)) {
    session_start();
}
?>
<?php include __DIR__ . '/__html_head.php' ?>
<?php include __DIR__ . '/__navbar.php' ?>

 
    <title>Pastania - 親子同樂玩pasta</title>
    <!-- Required meta tags -->


    <style>
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


      /* 這是我設定的 container （套nav 跟footer 用）看你要不要同步用一樣的class name */
      .e_container {
        max-width: 90%;
        margin: 0 auto;
      }

      /* 以上是模組 */

      /* －－－－－－－－－－－－－以下是背景－－－－－－－－－－－－ */
      .e_ja_bg {
        width: 100vw;
        /* height: 150vw; */
        background: url(img/pages/event/ja/event_j_bg.png) no-repeat center;
        background-size: cover;
        position: relative;
        margin-top: 76px; /*  */
        margin-bottom: -76px;
      }

      .e_ill_1 {
        width: 57%;
        position: absolute;
        top: 0;
        left: 0.5%;
      }

      .e_ill_2 {
        width: 15%;
        position: absolute;
        top: 0;
        right: 0;
      }

      .e_ill_3 {
        width: 20%;
        position: absolute;
        bottom: 0;
        left: 0;
      }

      .e_ill_4 {
        width: 35%;
        position: absolute;
        right: 0;
        top: 43%;

      }

      .e_ill_5 {
        width: 30%;
        position: absolute;
        left: 0;
        bottom: 22%;

      }

      .e_ill_1 img,
      .e_ill_2 img,
      .e_ill_3 img,
      .e_ill_4 img,
      .e_ill_5 img {
        width: 100%;
      }

      .container {
        position: relative;
        z-index: 4; /*  */
      }


      /* ------------title style----------- */
      .e_title_wrap {
        padding-top: 30px;
        padding-left: 50px;
      }

      .ja_title {
        font-size: 1.6rem;
        font-family: 'Noto Sans TC';
        letter-spacing: 2px;
        color: #fff;

      }

      .ja_title_yellow {
        color: #F6D169;

      }

      .ja_title_yellow_en {
        font-family: 'Lao MN', 'Arya';

      }

      .ja_subtitle {
        font-size: 1.3rem;
        font-weight: 300;
        font-family: 'Noto Sans TC';
        letter-spacing: 2px;
        color: #fff;

      }


      /* ------------ 以下是內文 ----------- */
      .section1 {
        display: flex;
        margin-top: 100px;
      }

      .event_text {
        width: 54%;
        padding-left: 50px;
        margin-right: 50px;

      }

      .event_text p {
        font-size: 1.2rem;
        margin-top: 100px;

      }

      .ja_picture {
        width: 30%;

      }

      .ja_picture img:first-child {
        width: 100%;

      }

      .ja_caption_wrap {
        width: 100%;

        position: relative;
      }

      .ja_caption_bg {
        padding: 10px;
        padding-right: 20px;
        position: absolute;
        bottom: -65px;
        left: 53%;
      }

      .ja_caption {
        font-size: 1.2rem;
        font-weight: 300;
        font-family: 'Noto Sans TC';
        letter-spacing: 2px;
        color: #fff;
        position: absolute;
        bottom: -35px;
        right: -18%;


      }


      /* --------以下為活動照片------------ */
      .section2 {
        margin-bottom: 70px;
      }

      .event_img {
        width: 77%;
        height: 20%;
        padding-left: 50px;
        margin: 0 auto 0 0;
        margin-top: 130px;
        display: flex;
        justify-content: space-between;
      }

      .event_img img {
        height: 100%;
        object-fit: contain;
      }


      /* ------------以下是報名資訊-------------- */
      .section3 {
        padding-bottom: 70px;
      }

      .singup {
        margin: 0 0 0 auto;
        background: rgba(230, 114, 72, 0.612);
        border-radius: 20px;
        width: 60%;
        padding: 30px 40px;

      }

      .singup ul {
        padding: 0;
      }

      .singup ul li {
        list-style: none;
        padding-bottom: 3px;
      }

      .singup_info {
        font-size: 1.2rem;
        font-weight: 300;
        font-family: 'Noto Sans TC';
        letter-spacing: 2px;
        color: #fff;

      }

      .info_title {
        font-size: 1.5rem;
        font-weight: 400;
        margin-bottom: 10px;


      }

      @media screen and (min-width: 1441px) {

        .ja_title{
          font-size: 2rem;
        }

        .e_ill_1 {
          width: 49%;
          left: 9.5%;
        }

        .e_title_wrap,
        .event_text,
        .event_img {
          padding-left: 0;
        }

        .ja_caption {
          bottom: -11px;
          right: -23%;        }

        .e_margin {
          margin: 0 10px;
        }

        .singup {
          width: 70%;
        }
      }





      @media screen and (max-width: 1200px) {
        .e_ill_1 {
          width: 59%;
          left: -1.5%;
        }

        .e_title_wrap,
        .event_text,
        .event_img {
          padding-left: 0;
        }

        .ja_caption {
          bottom: -43px;
          right: -27%;
        }

        .e_margin {
          margin: 0 10px;
        }

        .singup {
          width: 70%;
        }
      }


      @media screen and (max-width: 992px) {
        .container {
          max-width: 795px;
        }

        .e_title_wrap {
          padding-top: 15px;

        }

        .ja_subtitle {
          font-size: 1.1rem;
        }

        .ja_caption_bg {
          padding: 0;
          padding-right: 20px;
          bottom: -46px;
        }

        .ja_caption {
          bottom: -37px;
          font-size: 1rem;
        }

        .singup_info {
          font-size: 1rem;
        }
      }

      @media screen and (max-width: 900px) {
        .e_ill_1 {
          width: 100%;
          left: -8.5%;
        }
      }

      @media screen and (max-width: 768px) {
        .container {
          max-width: 540px;
        }


        .e_ill_2 {
          display: none;
        }

        .e_ill_4 {
          top: 57%;
          width: 50%;
        }

        .e_ill_5 {
          width: 47%;
          bottom: 3%;
        }

        .section1 {
          flex-direction: column;
        }

        .event_text {
          width: 100%;
          margin: 0;
        }

        .event_text p {
          margin-top: 50px;
        }

        .ja_picture {
          width: 75%;
        }

        .ja_caption_wrap {
          width: 80%;
        }

        .ja_caption_bg {
          padding: 20px;
          left: 59%;
        }

        .ja_caption {
          bottom: 0px;
        }

        .event_img {
          width: 100%;
        }

        .event_img img {
          width: 38%;
        }

        .section2 .event_img .e_width {
          width: 20.5%;
        }

        .section3 {
          padding-bottom: 150px;
        }

        .singup {
          width: 100%;
          padding: 30px 35px;
        }

      }

      @media screen and (max-width: 576px) {
        /* adjust for navbar height */
        .e_ja_bg {
          margin-top: 65px;
        }


        .e_ill_4 {
          top: 53%;
          width: 71%;
        }

        .e_ill_5 {
          width: 67%;
        }

        .section1 {
          margin: 0;
        }

        .ja_title {
          font-size: 1.3rem;

        }

        .ja_subtitle {
          font-size: 1rem;
        }

        .event_text p {
          margin-top: 70px;
          margin-bottom: 50px;
          font-size: 1rem;
        }

        .ja_caption_bg {
          padding: 0;
          bottom: -37px;
        }

        .ja_caption {
          right: -34%;
          top: -63px;
        }

        .event_img img {
          width: 36%;
        }

        .section2 .event_img .e_width {
          width: 19.5%;
        }
      }
    </style>


  <div class="e_ja_bg">
    <div class="e_ill_1">
      <img src="img/pages/event/ja/event_j_t01.png" alt="">
    </div>
    <div class="e_ill_2">
      <img src="img/pages/event/ja/event_j_t03-01.png" alt="">
    </div>
    <div class="e_ill_3">
      <img src="img/pages/event/ja/event_j_t04.png" alt="">
    </div>
    <div class="e_ill_4">
      <img src="img/pages/event/ja/event_j_noodle.png" alt="">
    </div>
    <div class="e_ill_5">
      <img src="img/pages/event/ja/event_j_noodle.png" alt="">
    </div>

    <div class="container ">
      <div class="e_title_wrap">
        <h2 class="ja_title">親子同樂 <span class="ja_title_yellow">玩<span
                    class="ja_title_yellow_en">pasta</span></span></h2>
        <h3 class="ja_subtitle">給孩子講故事不如與孩子一起創造故事</h3>
      </div>

      <div class="section1">
        <div class="event_text">
          <p class="noto_light">
            你是否曾經發現當你在廚房準備料理時，孩子們會在一旁探頭觀望？<br>
            <br>
            也許當孩子們在享用餐點、看著餐桌上的各式菜色時，他們的小腦袋中有著你不知道的奇思妙想。
            <br>
            <br>
            今年兒童節（2019/4/4)，Pastnia特別與Jamie’s Italian餐廳合作，提供專屬的手作料理玩樂舞台，由英國型男主廚傑米奧利佛Jamie
            Oliver手把手帶領你及孩子，一起手作及享用營養美味的義大利麵。

          </p>
        </div>
        <div class="ja_picture">
          <img src="img/pages/event/ja/event_j.png" alt="">
          <div class="ja_caption_wrap">
            <img class="ja_caption_bg" src="img/pages/event/ja/event_j_t02.png" alt="">
            <p class="ja_caption">
              兒童節<br>
              傑米奧利佛帶你<br>
              製作義大利麵<br>
            </p>
          </div>
        </div>

      </div>

      <div class="section2">
        <div class="event_img">
          <img class="" src="img/pages/event/ja/event_j_1.png" alt="">
          <img class="e_margin" src="img/pages/event/ja/event_j_2.png" alt="">
          <img class="e_width" src="img/pages/event/ja/event_j_3.png" alt="">
        </div>
      </div>

      <div class="section3">
        <div class="singup">
          <ul class="singup_info">
            <li class="info_title">報名資訊</li>
            <li>名額限定：20位孩童</li>
            <li>時間：2019/4/4 AM10:00-PM13:00</li>
            <li> 地址：110台北市信義區松壽路11號新光三越台北信義新天地A11, 3樓（新光三越台北信義新天地A11）</li>
            <li>報名請洽：02 894 1668</li>
            <li>報名費用：2000元 含材料</li>
          </ul>

        </div>

      </div>
    </div>


  </div>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
 

<?php include __DIR__ . '/__html_foot.php' ?>