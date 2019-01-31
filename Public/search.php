
<?php include __DIR__ . '/__html_head.php' ?>
<?php include __DIR__ . '/__navbar.php' ?>


  <link rel="stylesheet" href="css/search.css">
</head>

<body>
<section>
  <!------------ 以下為title區域 ------------>
  <div class="container">
    <div class="r_product_search_title">
      <p class="w_noto_light">未找到搜尋結果</p>
      <p class="w_noto_light_small">請再輸入其他文字</p>
    </div>
  </div>
  <!------------ 以上為title區域 ------------>


  <div class="container d-flex">
    <div class="row">
      <div class="input-group m-4">
        <div class="input-group-prepend">
          <span class="input-group-text" id="basic-serach"><img src="img/icon/search.svg" alt="" style="width: 20px"></span>
        </div>
        <input type="search" class="form-control input_s" id="search-bar" name="search-bar" placeholder="請輸入關鍵字搜尋" aria-label="search" aria-describedby="basic-serach">
      </div>

      <div class="w_product_list_wrapper col-md-4 col-6">
        <div class="w_product_list_bg">
          <!------------ 此處換商品照片 ------------>
          <img src="img/product/s/M4_Anellini _s.png" alt="">

        </div>
        <div class="w_product_list_word_bg">
          <!------------ 此處為商品照片連結 （電腦版）------------>
          <a href="" class="">
            <p class="w_noto_light_small    w_product_list_word_center    padding-r">粒狀麵</p>
            <p class="w_en_font_small    w_product_list_word_center    padding-r">Minute</p>
            <div class="w_product_list_arrow    padding-r"><img class="" src="img/icon/arrow.svg" alt=""></div>
          </a>
        </div>
        <div class="w_product_list_word_mobil">
          <!------------ 此處為商品照片連結（手機版） ------------>
          <a href="">
            <p class="w_noto_light_small    padding-r">粒狀麵</p>
            <p class="w_en_font_small    padding-r">Minute</p>
          </a>
        </div>
      </div>


      <div class="w_product_list_wrapper col-md-4 col-6">
        <div class="w_product_list_bg">
          <!------------ 此處換商品照片 ------------>
          <img src="img/product/s/M4_Anellini _s.png" alt="">

        </div>
        <div class="w_product_list_word_bg">
          <!------------ 此處為商品照片連結 （電腦版）------------>
          <a href="" class="">
            <p class="w_noto_light_small    w_product_list_word_center    padding-r">粒狀麵</p>
            <p class="w_en_font_small    w_product_list_word_center    padding-r">Minute</p>
            <div class="w_product_list_arrow    padding-r"><img class="" src="img/icon/arrow.svg" alt=""></div>
          </a>
        </div>
        <div class="w_product_list_word_mobil">
          <!------------ 此處為商品照片連結（手機版） ------------>
          <a href="">
            <p class="w_noto_light_small    padding-r">粒狀麵</p>
            <p class="w_en_font_small    padding-r">Minute</p>
          </a>
        </div>
      </div>


      <div class="w_product_list_wrapper col-md-4 col-6">
        <div class="w_product_list_bg">
          <!------------ 此處換商品照片 ------------>
          <img src="img/product/s/M4_Anellini _s.png" alt="">

        </div>
        <div class="w_product_list_word_bg">
          <!------------ 此處為商品照片連結 （電腦版）------------>
          <a href="" class="">
            <p class="w_noto_light_small    w_product_list_word_center    padding-r">粒狀麵</p>
            <p class="w_en_font_small    w_product_list_word_center    padding-r">Minute</p>
            <div class="w_product_list_arrow    padding-r"><img class="" src="img/icon/arrow.svg" alt=""></div>
          </a>
        </div>
        <div class="w_product_list_word_mobil">
          <!------------ 此處為商品照片連結（手機版） ------------>
          <a href="">
            <p class="w_noto_light_small    padding-r">粒狀麵</p>
            <p class="w_en_font_small    padding-r">Minute</p>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>



<script src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous">
</script>
<script>
</script>

<?php include __DIR__ . '/__html_foot.php' ?>