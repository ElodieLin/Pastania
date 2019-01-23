<?php

require __DIR__ . '/__connect_db.php';

// $productID = $_GET['product'];

// $p_sql = sprintf("SELECT * FROM recipe_info WHERE sid = $productID LIMIT 1");
// $p_stmt = $pdo->query($p_sql);

// while($row = $p_stmt->fetch(PDO::FETCH_ASSOC))
// {
//     $product = $row;
// }

?>


<?php include __DIR__ . '/__html_head.php' ?>
<?php include __DIR__ . '/__navbar.php' ?>

<head>

    <link rel="stylesheet" href="css/animate.css">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous"> -->

    <style>
        body {
            overflow-x: hidden;
        }

        /* classname add <p> to avoid footer conflict */
        p.noto_thin {
            font-family: 'Noto Sans TC';
            font-weight: 100;
            /* 這是最細的(thin) */
            letter-spacing: 2px;
            font-size: 1.3rem;
            color: #5C7880;
            padding-top: 15px;
        }

        .noto_light {
            font-family: 'Noto Sans TC';
            font-weight: 300;
            /* 這是次細的(light) */
            letter-spacing: 2px;
            font-size: 1.3rem;
            color: #5C7880;

        }

        .en_font {
            font-family: 'Lao MN', 'Arya';
            font-size: 2rem;
            letter-spacing: 2px;
            color: #5C7880;
        }

        .noto_regular {
            font-family: 'Noto Sans TC';
            letter-spacing: 2px;
            font-size: 2rem;
            color: #5C7880;
        }


        /* ----------以下為非模組字體設定---------- */
        .w_recipes_detail_title_en_font {
            font-family: 'Lao MN', 'Arya';
            font-size: 4rem;
            letter-spacing: 2px;
            color: #5C7880;
        }

        .w_recipes_detail_title_noto_light {
            font-family: 'Noto Sans TC';
            font-weight: 300;
            /* 這是次細的(light) */
            letter-spacing: 2px;
            font-size: 2rem;
            color: #5C7880;
        }

        .w_recipes_detail_best_en_font {
            font-family: 'Lao MN', 'Arya';
            font-size: 1.3rem;
            letter-spacing: 2px;
            color: #5C7880;
        }

        .product_detail_small_noto_thin_b {
            font-family: 'Noto Sans TC';
            font-weight: 100;
            /* 這是最細的(thin) */
            letter-spacing: 2px;
            font-size: 1rem;
            color: #5C7880;
        }


        /* ----------以上為非模組字體設定---------- */


        /*--------- 以下為麵包屑的設定 --------- */
        .w_recipes_detail_breadcrumbs_word_big_box {
            display: flex;
            justify-content: flex-end;
        }

        .w_recipes_detail_breadcrumbs_word {
            padding-top: 9%;
            padding-right: 0%;
            width: 35vw;
        }

        .w_recipes_detail_breadcrumbs_box {
            display: flex;
            border-bottom: #5C7880 1px solid;
            padding-bottom: 2%;
            /* margin-bottom: 10%; */
        }

        .w_recipes_detail_breadcrumbs_box > a {
            text-decoration: none;
            color: #5C7880;
        }

        .w_recipes_detail_breadcrumbs_ch,
        .w_recipes_detail_breadcrumbs_en {
            padding-right: 10px;
            padding-left: 10px;
        }

        .w_recipes_detail_breadcrumbs_word > .w_recipes_detail_breadcrumbs_box > a > .w_recipes_detail_breadcrumbs_ch {
            display: none;
        }

        .w_recipes_detail_breadcrumbs_word > .w_recipes_detail_breadcrumbs_box > a:hover .w_recipes_detail_breadcrumbs_ch {
            display: block;
            color: #E67348;
        }

        .w_recipes_detail_breadcrumbs_word > .w_recipes_detail_breadcrumbs_box > a > .w_recipes_detail_breadcrumbs_en {
            margin-top: -26px;
        }

        .w_recipes_detail_breadcrumbs_word > .w_recipes_detail_breadcrumbs_box > a:hover .w_recipes_detail_breadcrumbs_en {
            display: none;
        }

        /*--------- 以上為麵包屑的設定 --------- */


        /*--------- 以下為菜色照片、標題文字的設定 --------- */
        .w_recipes_detail_wrapper_one {
            width: 100%;
            margin: auto;
            /* background-color: aquamarine; */
            display: flex;
            justify-content: space-between;
        }

        .w_recipes_detail_big_img_box {
            /* margin-top: -30px; */
            width: 55vw;
            height: 70vh;
            /* background-color: rgb(177, 177, 177); */
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            align-items: flex-end;
            position: relative;
            /* margin-top: 8%; */
        }

        .w_recipes_detail_big_img_box img {
            width: 100%;
            object-fit: cover;
        }

        .w_recipes_detail_big_word_box {
            width: 45vw;
            display: flex;
            justify-content: center;
            flex-direction: column;
            position: absolute;
            margin-left: 50%;
            margin-top: 10%;
            word-break: normal;
        }

        .w_recipes_detail_big_word_opacity {
            padding: 5%;
            background-color: rgba(255, 255, 255, 0.685);
        }

        /*--------- 以上為菜色照片、標題文字的設定 --------- */


        /*--------- 以下為介紹內文設定 --------- */
        .w_recipes_detail_wrapper_two {
            width: 90%;
            margin: auto;
            display: flex;
            justify-content: center;
        }

        .w_recipes_detail_introduction {
            width: 60%;
            text-align: justify;
            margin: 80px 0px 60px 0px;
        }

        /*--------- 以上為介紹內文設定 --------- */


        /*--------- 以下為三個icon設定 --------- */
        .w_recipes_detail_icon {
            display: flex;
            margin: 40px 0px;
            text-align: center;
        }

        .w_recipes_detail_icon img {
            width: 25%;
        }

        /*--------- 以上為三個icon設定 --------- */


        /*--------- 以下為烹煮步驟、材料區域設定 --------- */
        .w_recipes_detail_wrapper_three {
            width: 90%;
            margin: auto;
            border: #E67348 1px solid;
            margin-right: 15%;
            margin-bottom: 80px;
        }

        .w_recipes_detail_cook_step {
            display: flex;
            flex-direction: column;
            text-align: justify;
            padding: 30px 30px 30px 100px;
            word-break: break-all;
        }

        .w_recipes_detail_cook_material {
            width: 130%;
            background-color: rgba(85, 85, 85, 0.192);
            padding: 30px;
            margin-bottom: 40px;
            display: flex;
            flex-direction: column;
            word-break: break-all;
        }

        .w_recipes_detail_cook_material p {
            width: 70%;
        }

        .w_recipes_detail_cook_title_in {
            border-bottom: #5C7880 1px solid;
        }

        /*--------- 以上為烹煮步驟、材料區域設定 --------- */


        /*--------- 以下為最佳搭配區域設定 --------- */
        .w_recipes_detail_wrapper_four {
            width: 90%;
            margin: auto;
            margin-bottom: 80px;
        }

        .w_recipes_detail_best a {
            text-decoration: none;
        }

        .w_recipes_detail_best img {
            margin-top: 15px;
            width: 100%;
            object-fit: contain;
            background-color: #DBDBDB;
        }

        .w_recipes_detail_best_word_box {
            margin-top: 15px;
        }

        .w_recipes_detail_best p {
            margin-bottom: 0px;
        }

        .w_recipes_detail_best_money {
            margin-top: 20px;
        }

        /*--------- 以上為最佳搭配區域設定 --------- */


        @media (max-width: 1200px) {

            /*--------- 以下為麵包屑的設定 --------- */
            .w_recipes_detail_breadcrumbs_word_big_box {
                margin-bottom: 20px;
            }

            .w_recipes_detail_breadcrumbs_word {
                width: 60vw;
            }

            /*--------- 以上為麵包屑的設定 --------- */
            /*--------- 以下為菜色照片、標題文字的設定 --------- */
            .w_recipes_detail_big_img_box {
                width: 85vw;
            }

            .w_recipes_detail_big_img_box img {
                width: 100%;
                height: 55vh;
            }

            .w_recipes_detail_big_word_box {
                margin-top: 0%;
            }

            /*--------- 以上為菜色照片、標題文字的設定 --------- */

        }


        @media (max-width: 800px) {
            .w_recipes_detail_breadcrumbs_word_big_box {
                display: none;
            }

            p.noto_thin {
                font-size: 1rem;
            }

            .noto_light {
                font-size: 1rem;
            }

            .en_font {
                font-size: 1rem;
            }

            .noto_regular {
                font-size: 1.2rem;
            }


            /* ----------以下為非模組字體設定---------- */
            .w_recipes_detail_title_en_font {
                font-size: 2.2rem;
                line-height: 40px;
            }

            .w_recipes_detail_title_noto_light {
                /* 這是次細的(light) */
                font-size: 1.3rem;
            }

            .w_recipes_detail_best_en_font {
                font-size: 1rem;
            }

            /* ----------以上為非模組字體設定---------- */
            /*--------- 以下為菜色照片、標題文字的設定 --------- */
            .w_recipes_detail_wrapper_one {
                display: flex;
                justify-content: center;
                flex-direction: column;
            }

            .w_recipes_detail_big_img_box {
                width: 100vw;
                height: 55vh;
                display: flex;
                flex-direction: initial;
                justify-content: initial;
                align-items: initial;
                position: initial;
            }

            .w_recipes_detail_big_word_box {
                width: 100vw;
                justify-content: initial;
                position: initial;
                margin-left: 5%;
                margin-top: 5%;
            }

            /*--------- 以上為菜色照片、標題文字的設定 --------- */
            /*--------- 以下為介紹內文設定 --------- */
            .w_recipes_detail_introduction {
                width: 90%;
                margin: 20px 0px 50px 0px;
            }

            /*--------- 以上為介紹內文設定 --------- */
            /*--------- 以下為三個icon設定 --------- */
            .w_recipes_detail_icon {
                margin: 30px 0px 10px 0px;
            }

            .w_recipes_detail_icon img {
                width: 50%;
            }

            /*--------- 以上為三個icon設定 --------- */
            /*--------- 以下為烹煮步驟、材料區域設定 --------- */
            .w_recipes_detail_wrapper_three {
                width: 95%;
                margin-right: 5%;
                margin-bottom: 80px;
            }

            .w_recipes_detail_cook_step {
                padding: 0px 30px 10px 40px;
            }

            .w_recipes_detail_cook_material {
                width: 105%;
                padding: 30px 30px 10px 40px;
                margin-bottom: 40px;
            }

            .w_recipes_detail_cook_material p {
                width: 90%;
            }

            /*--------- 以上為烹煮步驟、材料區域設定 --------- */
            /*--------- 以下為最佳搭配區域設定 --------- */
            .w_recipes_detail_wrapper_four {
                margin-bottom: 40px;
            }

            /*--------- 以上為最佳搭配區域設定 --------- */

        }
    </style>
</head>

<body>
<div class="w_recipes_detail_breadcrumbs_word_big_box">
    <div class="w_recipes_detail_breadcrumbs_word">
        <!-- 以下為麵包屑區域 -->
        <div class="w_recipes_detail_breadcrumbs_box   product_detail_small_noto_thin_b">
            <a href="recipes_cate.php">
                <span class="w_recipes_detail_breadcrumbs_ch">食譜種類</span>
                <span class="w_recipes_detail_breadcrumbs_en">Recipes</span>
            </a>
            <span>></span>
            <a href="recipe_list_party.php">
                <span class="w_recipes_detail_breadcrumbs_ch">週末派對</span>
                <span class="w_recipes_detail_breadcrumbs_en">Party</span>
            </a>
            <span>></span>
            <a href="recipe_detail.php">
                <span class="w_recipes_detail_breadcrumbs_ch">波隆那肉醬千層麵</span>
                <span class="w_recipes_detail_breadcrumbs_en">Lasagne alla Bolognese</span>
            </a>
        </div>
        <!-- 以上為麵包屑區域 -->
    </div>
</div>


<!------- 以下為介紹內文設定 ------->
<div class="w_recipes_detail_wrapper_one">
    <div class="w_recipes_detail_big_img_box">
        <img src="img/recipe/51_typical_AWBS.jpg" alt="">
    </div>
    <div class="w_recipes_detail_big_word_box">
        <div class="w_recipes_detail_big_word_opacity">
            <!------- 標題文字 ------->
            <p class="w_recipes_detail_title_en_font">Lasagne alla Bolognese</p>
            <p class="w_recipes_detail_title_noto_light">波隆那肉醬千層麵</p>
        </div>
    </div>
</div>
<div class="w_recipes_detail_wrapper_two">
    <div class="w_recipes_detail_introduction">
        <!------- 介紹文字 ------->
        <p class="noto_thin distric_into">艾米利亞-羅馬涅大區人口約4百萬，人口密度為180人/平方公里，是義大利最發達的大區之一，
            亦是義大利著名的美食天堂。波隆那肉醬千層麵為該地經典的義式美食，為著名卡通明星加菲貓
            的最愛。</p>
    </div>
</div>
<!------- 以上為介紹內文設定 ------->


<div class="w_recipes_detail_wrapper_three">
    <!------- 以下以為三個icon設定 ------->
    <div class="row w_recipes_detail_icon">
        <div class="col-md-4 col-4">
            <img src="img/icon/recipe_portion.svg" alt="">
            <p class="noto_light">4人份</p>
        </div>
        <div class="col-md-4 col-4">
            <img src="img/icon/recipe_time.svg" alt="">
            <p class="noto_light">15 mins</p>
        </div>
        <div class="col-md-4 col-4">
            <img src="img/icon/recipe_medium.svg" alt="">
            <p class="noto_light">難易度 簡單</p>
        </div>
    </div>
    <!------- 以上以為三個icon設定 ------->


    <!------- 以下為烹煮步驟、材料區域設定 ------->
    <div class="row">
        <div class="col-md-7">
            <div class="w_recipes_detail_cook_step">
                <p class="w_recipes_detail_cook_title_in   noto_regular">烹煮步驟</p>
                <!------- 烹煮步驟文字 ------->
                <p class="noto_thin">1.將牛奶倒入鍋中加熱，同時用另一個鍋子將奶油融化。奶油融
                    化後加入篩過的麵粉均勻攪拌。
                    <br>
                    <br>
                    2. 牛奶加熱後加入磨碎的肉豆蔻與少許鹽調味，倒入另一個鍋
                    中均勻攪拌約5-6分鐘，直到它呈現稠狀，完成調味醬。
                    <br>
                    <br>
                    3.取一個30x20厘米大小的烤盤，先於底部塗上適量調味醬，放
                    上麵條撲滿烤盤，再塗上調味醬、帕馬森起司與波隆那肉醬。
                    重複動作直到烤盤邊緣。
                    <br>
                    <br>
                    4.於頂層撒上帕馬森起司，放入在預熱的烤箱中以200°烘烤約25分鐘，完成!
                </p>
            </div>
        </div>
        <div class="col-md-5">
            <div class="w_recipes_detail_cook_material">
                <p class="w_recipes_detail_cook_title_in   noto_regular">材料</p>
                <!------- 材料文字 ------->
                <p class="noto_thin ingredients">．1包(500克)Lasagne Ricce麵條<br>
                    ．Pastania波隆那肉醬一罐(600克)<br>
                    ．全脂牛奶1公升<br>
                    ．奶油100 公克<br>
                    ．高筋麵粉100公克<br>
                    ．肉荳蔻 少許<br>
                    ．鹽少許<br>
                    ．帕馬森起司250公克<br>
                    ．1包(500克)Lasagne Ricce麵條<br>
                    ．Pastania波隆那肉醬一罐(600克)<br>
                    ．全脂牛奶1公升<br>
                    ．奶油100 公克<br>
                    ．高筋麵粉100公克<br>
                    ．肉荳蔻 少許<br>
                    ．鹽少許<br>
                    ．帕馬森起司250公克</p>
                </p>
            </div>
        </div>
    </div>
</div>
<!------- 以上為烹煮步驟、材料區域設定 ------->


<!------- 以下最佳搭配設定 Best with ------->
<div class="w_recipes_detail_wrapper_four">
    <div class="row">
        <div class="col-md-4">
            <p class="w_recipes_detail_cook_title_in  noto_regular">最佳搭配</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3  col-6   w_recipes_detail_best">
            <!------- 最佳搭配商品圖片 ------->
            <a href="product_detail.php"><img src="img/product/l/P3_Ballerine.png" alt="">
                <!-- direct to random pasta detail page  -->
                <div class="w_recipes_detail_best_word_box">
                    <!------- 最佳搭配品名、金額 ------->
                    <p class="w_recipes_detail_best_en_font">Farfalle nº 87</p>
                    <p class="noto_light">蝴蝶麵</p>
                    <p class="w_recipes_detail_best_en_font    w_recipes_detail_best_money">NT＄ 109</p>
                </div>
            </a>
        </div>
        <div class="col-md-3  col-6  w_recipes_detail_best">
            <!------- 最佳搭配商品圖片 ------->
            <a href="product_detail.php"><img src="img/product/l/P3_Ballerine.png" alt="">
                <!-- direct to random pasta detail page  -->
                <div class="w_recipes_detail_best_word_box">
                    <!------- 最佳搭配品名、金額 ------->
                    <p class="w_recipes_detail_best_en_font">Farfalle nº 87</p>
                    <p class="noto_light">蝴蝶麵</p>
                    <p class="w_recipes_detail_best_en_font    w_recipes_detail_best_money">NT＄ 109</p>
                </div>
            </a>
        </div>
        <div class="col-md-3   col-6   w_recipes_detail_best">
            <!------- 最佳搭配商品圖片 ------->
            <a href="product_detail.php"><img src="img/product/l/P3_Ballerine.png" alt="">
                <!-- direct to random pasta detail page  -->
                <div class="w_recipes_detail_best_word_box">
                    <!------- 最佳搭配品名、金額 ------->
                    <p class="w_recipes_detail_best_en_font">Farfalle nº 87</p>
                    <p class="noto_light">蝴蝶麵</p>
                    <p class="w_recipes_detail_best_en_font    w_recipes_detail_best_money">NT＄ 109</p>
                </div>
            </a>
        </div>
        <div class="col-md-3   col-6   w_recipes_detail_best">
            <!------- 最佳搭配商品圖片 ------->
            <a href="product_detail.php"><img src="img/product/l/P3_Ballerine.png" alt="">
                <!-- direct to random pasta detail page  -->
                <div class="w_recipes_detail_best_word_box">
                    <!------- 最佳搭配品名、金額 ------->
                    <p class="w_recipes_detail_best_en_font">Farfalle nº 87</p>
                    <p class="noto_light">蝴蝶麵</p>
                    <p class="w_recipes_detail_best_en_font    w_recipes_detail_best_money">NT＄ 109</p>
                </div>
            </a>
        </div>
    </div>
</div>
<!------- 以上最佳搭配設定 ------->


<script src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
<script>

</script>

</body>

<?php include __DIR__ . '/__html_foot.php' ?>
