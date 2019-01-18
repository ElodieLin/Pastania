<?php include __DIR__. '/__html_head.php' ?>
<?php include __DIR__. '/__navbar.php' ?>
   <style>
        .container-fluid {
            padding-left: 0;
            padding-right: 0;
        }

        .en_font {
            font-family: 'Lao MN', 'Arya';
            font-size: 2rem;
            color: #5C7880;
        }

        .noto_regular {
            font-family: 'Noto Sans TC';
            letter-spacing: 2px;
            font-size: 2rem;
            color: #5C7880;

        }


        /* ----------以下為小字體設定---------- */
        .w_en_font_small {
            font-family: 'Lao MN', 'Arya';
            font-size: 1.5rem;
            color: #5C7880;
        }

        .w_pd_en_font_small_red {
            font-family: 'Lao MN', 'Arya';
            font-size: 1.5rem;
            color: #D3554A;
            margin-top:-10px; /* for align arrow icon */
        }

        .w_noto_light_small {
            font-family: 'Noto Sans TC';
            font-weight: 300;
            /* 這是次細的(light) */
            letter-spacing: 2px;
            font-size: 1.5rem;
            color: #5C7880;
        }



        /* ----------以上為小字體設定---------- */



        /* ----------以下為cover大圖設定---------- */
        .w_product_list_cover {
            width: 100%;
            height: 30vh;
            background: url(img/pages/product_list/long_cover.jpg) center 100%;
            background-size: cover;
            background-attachment: fixed;
            margin-top: -3px;/* fixed top margin */
        }


        /* ----------以上為cover大圖設定---------- */





        /* ----------以下為大標叉子圖設定---------- */
        .w_product_list_title {
            margin: auto;
            text-align: center;
            width: 25%;
            padding: 40px 0px;

        }

        .w_product_list_title_img {
            width: 60%;
            margin-right: 30px;
            /* margin-top: -22px; */

        }

        /* ----------以上為大標叉子圖設定---------- */





        /* ----------以下為商品圖、文字設定---------- */
        .w_product_list_word_mobil {
            display: none;
        }

        .col-md-4 {
            padding: 0 25px;
            margin-bottom: 20px;

        }

        .w_product_list_bg img {
            width: 100%;
            height: 100%;
            background: url(img/pages/product_list/product_list_bg.svg) center no-repeat;
            object-fit: contain;

        }

        .w_product_list_word_center {
            text-align: center;
        }

        .w_product_list_arrow {
            width: 40px;
            height: 40px;
            margin: 0 auto;
            margin-top: 45px;
        }

        .w_product_list_arrow img {
            width: 100%;
            object-fit: contain;
            text-align: center;
        }

        .w_product_list_word_bg {
            position: absolute;
            width: 100%;
            height: 100%;
            padding-right: 10px;
            background-color: rgba(255, 255, 255, 0.377);
            padding: 0;
            top: 0;
            left: 0;
            opacity: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .w_product_list_word_bg:hover {
            opacity: 1;
        }

        .w_product_list_word_bg a {
            padding: 0 5rem;
        }

        .w_product_list_wrapper {
            position: relative;
        }

        .w_product_list_wrapper a {
            text-decoration: none;
        }





        /* ----------以上為商品圖、文字設定---------- */






        /* ----------以下為底部換頁面按鈕設定---------- */

        .w_prodiuct_list_page {
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding-bottom: 30px; /* padding between footer */
        }

        .w_prodiuct_list_page_number {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 20px;
        }

        .w_prodiuct_list_page_number a {
            color: #D3554A;
            padding: 0px 6px;
            text-decoration: none;
        }

        .w_prodiuct_list_page_number a:hover {
            color: rgba(230, 114, 72, 0.6);

        }

        .w_prodiuct_list_page_back img {
            width: 20%;
            margin-left: 50%;
        }

        .w_prodiuct_list_page_next img {
            width: 20%;
            margin-right: 50%;
        }

        /* ----------以上為底部換頁面按鈕設定---------- */



        @media screen and (max-width: 992px) {
            .w_product_list_arrow {
                margin-top: 0;
            }

            .w_product_list_word_bg .w_product_list_arrow {
                margin-top: 0;
            }

        }



        @media screen and (max-width:700px) {


            /* ----------以下為文字字體設定---------- */
            .en_font {
                font-size: 1.2rem;
            }

            .noto_regular {
                font-size: 1.2rem !important;

            }

            .w_en_font_small {
                font-size: 1rem;
            }

            .w_noto_light_small {
                font-size: 1rem;
            }

            .w_pd_en_font_small_red {
                font-size: 1rem;
            }

            /* ----------以上為文字字體設定---------- */





            /* ----------以下為cover大圖設定---------- */
            .w_product_list_cover {
                height: 160px;
            }

            /* ----------以上為cover大圖設定---------- */



            /* ----------以下為大標叉子圖設定---------- */
            .w_product_list_title {
                padding-top: 20px;
                padding-bottom: 0px;
            }

            .w_product_list_title_img {
                width: 100%;

            }

            /* ----------以上為大標叉子圖設定---------- */


            /* ----------以下為商品圖、文字設定---------- */

            .w_product_list_word_bg:hover {
                opacity: 0;

            }

            /* .w_product_list_word_bg {
                display: none;
            } */

            .w_product_list_word_mobil {
                text-align: center;
                display: inline;
            }

            .w_product_list_word_mobil:active p {
                color: #D3554A;
            }

        }

        /* ----------以上為商品圖、文字設定---------- */
    </style>
</head>

<body>
    <header>
        <div class="w_product_list_cover"></div>
    </header>
    <section>
        <!------------ 以下為title區域 ------------>
        <div class="container">
            <div class="w_product_list_title">

                <p class="noto_regular">長麵</p>
                <img class="w_product_list_title_img" src="img/pages/product_list/long_title.svg" alt="">
                <p class="en_font">Long</p>

            </div>
        </div>
        <!------------ 以上為title區域 ------------>


        <div class="container d-flex">
            <div class="row">
                <div class="w_product_list_wrapper col-md-4 col-6">
                    <div class="w_product_list_bg">
                        <!------------ 此處換商品照片 ------------>
                        <img src="img/product/s/L2_Bucatini_s.png" alt="">

                    </div>
                    <div class="w_product_list_word_bg">
                        <!------------ 此處為商品照片連結 （電腦版）------------>
                        <a href="" class="">
                            <p class="w_noto_light_small    w_product_list_word_center    padding-r">長麵</p>
                            <p class="w_en_font_small    w_product_list_word_center    padding-r">Long</p>
                            <div class="w_product_list_arrow    padding-r"><img class="" src="img/icon/arrow.svg" alt=""></div>
                        </a>
                    </div>
                    <div class="w_product_list_word_mobil">
                        <!------------ 此處為商品照片連結（手機版） ------------>
                        <a href="">
                            <p class="w_noto_light_small    padding-r">長麵</p>
                            <p class="w_en_font_small    padding-r">Long</p>
                        </a>
                    </div>
                </div>


                <div class="w_product_list_wrapper col-md-4 col-6">
                    <div class="w_product_list_bg">
                        <!------------ 此處換商品照片 ------------>
                        <img src="img/product/s/L2_Bucatini_s.png" alt="">

                    </div>
                    <div class="w_product_list_word_bg">
                        <!------------ 此處為商品照片連結 （電腦版）------------>
                        <a href="" class="">
                            <p class="w_noto_light_small    w_product_list_word_center    padding-r">長麵</p>
                            <p class="w_en_font_small    w_product_list_word_center    padding-r">Long</p>
                            <div class="w_product_list_arrow    padding-r"><img class="" src="img/icon/arrow.svg" alt=""></div>
                        </a>
                    </div>
                    <div class="w_product_list_word_mobil">
                        <!------------ 此處為商品照片連結（手機版） ------------>
                        <a href="">
                            <p class="w_noto_light_small    padding-r">長麵</p>
                            <p class="w_en_font_small    padding-r">Long</p>
                        </a>
                    </div>
                </div>


                <div class="w_product_list_wrapper col-md-4 col-6">
                    <div class="w_product_list_bg">
                        <!------------ 此處換商品照片 ------------>
                        <img src="img/product/s/L2_Bucatini_s.png" alt="">

                    </div>
                    <div class="w_product_list_word_bg">
                        <!------------ 此處為商品照片連結 （電腦版）------------>
                        <a href="" class="">
                            <p class="w_noto_light_small    w_product_list_word_center    padding-r">長麵</p>
                            <p class="w_en_font_small    w_product_list_word_center    padding-r">Long</p>
                            <div class="w_product_list_arrow    padding-r"><img class="" src="img/icon/arrow.svg" alt=""></div>
                        </a>
                    </div>
                    <div class="w_product_list_word_mobil">
                        <!------------ 此處為商品照片連結（手機版） ------------>
                        <a href="">
                            <p class="w_noto_light_small    padding-r">長麵</p>
                            <p class="w_en_font_small    padding-r">Long</p>
                        </a>
                    </div>
                </div>












            </div>

        </div>




        <div class="container">
            <div class="row">
                <div class="w_prodiuct_list_page">
                    <div class="w_prodiuct_list_page_back">
                        <a href="">
                            <img src="img/icon/arrow_red_back.svg" alt="">
                        </a>
                    </div>
                    <div class="w_prodiuct_list_page_number">
                        <p class="w_prodiuct_list_page_number_one   w_pd_en_font_small_red">
                            <a href="">1</a>
                        </p>
                        <p class="w_prodiuct_list_page_number_two   w_pd_en_font_small_red">
                            <a href="">2</a>
                        </p>
                        <p class="w_prodiuct_list_page_number_three   w_pd_en_font_small_red">
                            <a href="">3</a>
                        </p>
                    </div>

                    <div class="w_prodiuct_list_page_next">
                        <a href="">
                            <img src="img/icon/arrow_red_next.svg" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>



    </section>








    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous">
        </script>
    <script>
    </script>

</body>
<?php include __DIR__. '/__html_foot.php' ?>