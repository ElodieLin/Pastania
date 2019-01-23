<?php

require __DIR__ . '/__connect_db.php';

$productID = $_GET['product'];

$p_sql = sprintf("SELECT * FROM sauce_info WHERE sid = $productID LIMIT 1");
$p_stmt = $pdo->query($p_sql);

while ($row = $p_stmt->fetch(PDO::FETCH_ASSOC)) {
    $product = $row;
}

?>

<?php include __DIR__ . '/__html_head.php' ?>
<?php include __DIR__ . '/__navbar.php' ?>

<head>
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/product_detail.css">
</head>

<head>

    <link rel="stylesheet" href="css/animate.css">

    <style>
        body {
            overflow-x: hidden;
        }

        .noto_thin {
            font-family: 'Noto Sans TC';
            font-weight: 100;
            /* 這是最細的(thin) */
            letter-spacing: 2px;
            font-size: 1.3rem;
            color: #5C7880;

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
        .product_detail_big_en_font {
            font-family: 'Lao MN', 'Arya';
            font-size: 1.5rem;
            letter-spacing: 2px;
            color: #5C7880;
        }

        .product_detail_big_en_font_r {
            font-family: 'Lao MN', 'Arya';
            font-size: 1.6rem;
            letter-spacing: 2px;
            color: #E67348;
        }

        .product_detail_big_two_en_font_b {
            font-family: 'Lao MN', 'Arya';
            font-size: 1.6rem;
            letter-spacing: 2px;
            color: #5C7880;
        }

        .product_detail_small_noto_thin {
            font-family: 'Noto Sans TC';
            font-weight: 100;
            /* 這是最細的(thin) */
            letter-spacing: 2px;
            font-size: 1rem;
            color: #E67348;
        }

        .product_detail_small_noto_thin_b {
            font-family: 'Noto Sans TC';
            font-weight: 100;
            /* 這是最細的(thin) */
            letter-spacing: 2px;
            font-size: 1rem;
            color: #5C7880;
        }

        .product_detail_small_en_font {
            font-family: 'Lao MN', 'Arya';
            font-size: 1rem;
            letter-spacing: 2px;
            color: #E67348;
        }

        .product_detail_big_en_font {
            font-family: 'Lao MN', 'Arya';
            font-size: 2rem;
            letter-spacing: 2px;
            color: #E67348;
        }

        .product_detail_big_en_font_b2 {
            font-family: 'Lao MN', 'Arya';
            font-size: 2rem;
            letter-spacing: 2px;
            color: #5C7880;
        }

        .product_detail_big_en_font_b {
            font-family: 'Lao MN', 'Arya';
            font-size: 2.5rem;
            letter-spacing: 2px;
            color: #5C7880;
        }

        .product_detail_small_en_font_b {
            font-family: 'Lao MN', 'Arya';
            font-size: 1rem;
            letter-spacing: 2px;
            color: #5C7880;
        }

        .product_detail_small_two_en_font_b {
            font-family: 'Lao MN', 'Arya';
            font-size: 1.3rem;
            letter-spacing: 2px;
            color: #5C7880;
        }

        .product_detail_small_two_en_font_r {
            font-family: 'Lao MN', 'Arya';
            font-size: 1.3rem;
            letter-spacing: 2px;
            color: #E67348;
        }

        .product_detail_noto_light_big {
            font-family: 'Noto Sans TC';
            font-weight: 300;
            /* 這是次細的(light) */
            letter-spacing: 2px;
            font-size: 1.6rem;
            color: #5C7880;
        }

        /* ----------以上為非模組字體設定---------- */


        .w_product_sauce_detail_transition {
            transition: all .2s;
            -webkit-transition: all .2s ease;
        }


        /* ----------------------------------以下區域大盒子設定------------------------------------ */

        .w_product_sauce_detail_wrapper_one {
            margin: 0 auto;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .w_product_sauce_detail_wrapper_two {
            width: 100%;
            margin: 0 auto;
        }


        .w_product_sauce_detail_wrapper_three {
            width: 90%;
            margin: 0 auto;
        }

        .w_product_sauce_detail_wrapper_three_two {
            /* 底部評價區域最大盒子 */
            width: 75%;
            margin: 0 auto;
        }

        .w_product_sauce_detail_wrapper_four {
            /* ----------此為寫評論、送出按鈕區域---------- */
            width: 90%;
            margin: 0 auto;
            /* display: none; */
            text-align: center;
        }

        .w_product_sauce_detail_wrapper_five {
            /* ----------此為寫評價按鈕區域(隱藏中)---------- */
            width: 90%;
            margin: 0 auto;
            text-align: center;
            display: none;
        }

        .w_product_sauce_detail_wrapper_six {
            /* ----------此為為購買提醒、立即購買按鈕區域(隱藏中)---------- */
            width: 90%;
            margin: 0 auto;
            text-align: center;
            display: none;
        }

        /* ----------------------------------以上區域大盒子設定------------------------------------ */


        /* ----------以下為商品照片灰色背景---------- */
        .w_product_sauce_detail_bg {
            width: 60vw;
            height: 100vh;
            background-color: #DCDCDC;
        }

        /* ----------以上為商品照片灰色背景---------- */


        /* ----------以下為商品照片---------- */
        .w_product_sauce_detail_img_box {
            width: 60vw;
            margin: auto;
        }

        .w_product_sauce_detail_img {
            width: 60vw;
            height: 100vh;
            margin: auto;
            object-fit: cover;
            display: block;
        }

        /* ----------以上為商品照片---------- */


        /*--------- 以下為麵包屑的設定 --------- */
        .w_product_sauce_detail_word {
            padding-top: 3%;
            padding-right: 0%;
            padding-left: 5%;
            width: 50vw;
            word-wrap: break-word;
        }

        .w_product_sauce_detail_breadcrumbs_box {
            display: flex;
            border-bottom: #5C7880 1px solid;
            padding-bottom: 2%;
            margin-bottom: 10%;
        }

        .w_product_sauce_detail_breadcrumbs_box > a {
            text-decoration: none;
            color: #5C7880;
        }

        .w_product_sauce_detail_breadcrumbs_ch,
        .w_product_sauce_detail_breadcrumbs_en {
            padding-right: 10px;
            padding-left: 10px;
        }

        .w_product_sauce_detail_word > .w_product_sauce_detail_breadcrumbs_box > a > .w_product_sauce_detail_breadcrumbs_ch {
            display: none;
        }

        .w_product_sauce_detail_word > .w_product_sauce_detail_breadcrumbs_box > a:hover .w_product_sauce_detail_breadcrumbs_ch {
            display: block;
            color: #E67348;
        }

        .w_product_sauce_detail_word > .w_product_sauce_detail_breadcrumbs_box > a > .w_product_sauce_detail_breadcrumbs_en {
            margin-top: -26px;
        }

        .w_product_sauce_detail_word > .w_product_sauce_detail_breadcrumbs_box > a:hover .w_product_sauce_detail_breadcrumbs_en {
            display: none;
        }

        /*--------- 以上為麵包屑的設定 --------- */


        /*--------- 以下為大標、愛心設定--------- */
        .w_product_sauce_detail_bigtitle {
            display: flex;
            align-items: center;
            word-wrap: break-word;
            width: 30vw;
        }

        .w_product_sauce_detail_bigtitle img {
            width: 6%;
            margin-left: 3%;
            margin-right: 10%;
            margin-bottom: 16%;
        }

        .w_product_sauce_detail_bigtitle p {
            margin-bottom: -4px;
        }

        /*--------- 以上為大標、愛心設定--------- */


        /*---------- 以下為星星旁邊的數字設定（2 Reviews） ----------*/

        .star_padi_one {
            padding-top: 20px;
            padding-right: 6px;
            padding-left: 10px;
        }

        .star_padi_two {
            padding-top: 18px;
            padding-left: 20px;
        }

        /*---------- 以上為星星旁邊的數字設定（2 Reviews） ----------*/


        /*---------- 以下為星星設定---------- */
        .w_product_sauce_detail_star_box_in {
            display: flex;
            align-items: center;
            margin-top: 5px;
        }

        .w_review2,
        .w_review1 {
            width: 5%;
            margin-right: 5px;
        }

        /*---------- 以上為星星設定 ----------*/


        /* ----------以下為金額、免運文字設定---------- */

        .w_product_sauce_detail_star_box_in_money p {
            margin-bottom: -10px;
        }

        /* ----------以上為金額、免運文字設定---------- */


        /* ----------以下為500g (7人份)、數量按鍵盒子設定---------- */

        .w_product_sauce_detail_word_box_in {
            display: flex;
            align-items: center;
            margin: 10% 0% 5% 0%;
        }

        .w_product_sauce_detail_number {
            /* border: #5C7880 1px solid; */
            margin-left: 50px;
            margin-bottom: 10px;
            padding: 20px 65px;
        }

        .input-box {
            display: inline-block;
            min-width: 50px;
            /* border: 1px solid #ccc; */
            padding-top: 1px;
            padding-bottom: 2px;
            border-top: #5C7880 1px solid;
            border-bottom: #5C7880 1px solid;
            text-align: center;
        }

        .input-box:focus {
            outline: none;
        }

        .number-box button:focus {
            outline: none;
            box-shadow: 0 0 0 0.2rem #C8DBD8;
        }

        .w_input_change_style {
            /* ----------數量按鍵樣式設定---------- */
            background: rgb(255, 255, 255);
            border: #5C7880 1px solid;
        }


        /* ----------以上為500g (7人份)、數量按鍵盒子設定---------- */


        /*---------- 以下為加入購物車橘色大按鈕---------- */

        .w_product_sauce_detail_cart_btn a {
            margin: 0 auto;
            width: 100%;
            height: 70px;
            padding: 4% 20%;
            background-color: #E67348;
            border-radius: 5px;
            text-align: center;
            color: #ffffff;
            text-decoration: none;
        }

        .w_product_sauce_detail_cart_btn:hover a {
            background-color: #D3554A;
        }

        /*---------- 以上為加入購物車橘色大按鈕---------- */


        /*----------------------------------- 以下開始為商品介紹設定（從商品介紹開始） ------------------------------------- */

        /*--------- 以下為商品介紹、原料區域設定 --------- */
        .w_product_sauce_detail_wrapper_orange {
            width: 90%;
            margin: 120px 0px 0px 0px;
            border: #E67348 1px solid;
            margin-right: 15%;
            padding: 40px 0px;
            /* margin-bottom: 0px; */
        }

        .w_product_sauce_detail_cook_step {
            display: flex;
            flex-direction: column;
            text-align: justify;
            padding: 30px 30px 30px 100px;
            word-break: break-all;
        }

        .w_product_sauce_detail_cook_material {
            width: 130%;
            background-color: rgba(85, 85, 85, 0.192);
            padding: 30px;
            display: flex;
            flex-direction: column;
            word-break: break-all;
        }

        .w_product_sauce_detail_cook_material p {
            width: 70%;
        }

        .w_product_sauce_detail_cook_title_line {
            border-bottom: #5C7880 1px solid;
            margin-bottom: 12px;
        }

        .w_product_sauce_detail_cook_title_line_two {
            border-bottom: #5C7880 1px solid;
            margin-bottom: 12px;
            margin-right: 180px;
        }

        /*--------- 以上為商品介紹、區域設定 --------- */


        /* ----------以下為大標文字設定---------- */
        .w_product_sauce_detail_title {
            margin: 0 auto;
            text-align: center;
            width: 20%;
            padding: 70px 0px 40px 0px;
        }

        .w_product_sauce_detail_title_line {
            border-bottom: #5C7880 1px solid;
            padding: 15px 0px;
        }

        /* ----------以上為大標文字設定---------- */


        /* ----------以下為推薦食譜區域---------- */
        .w_product_sauce_detail_recipe_bg {
            position: relative;
            z-index: 1;
        }

        .w_product_sauce_detail_recipe_bg img {
            margin: 70px auto;
            width: 100%;
            height: 600px;
            object-fit: cover;
        }

        .w_product_sauce_detail_recipe_title {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 50px 0px;
            background-color: #ffffffd8;
            margin: auto;
            position: absolute;
            z-index: 2;
        }

        .w_product_sauce_detail_recipe_title img {
            width: 35%;
            height: 35%;
        }

        .w_product_sauce_detail_recipe_title_btn {
            padding: 3% 18%;
            margin-top: 20px;
            border-radius: 5px;
            text-align: center;
            border: #E67348 1px solid;
        }

        .w_product_sauce_detail_recipe_title_btn a {
            text-decoration: none;
            color: #E67348;

        }

        /* ----------以上為推薦食譜區域---------- */


        /* ----------以下為你可能喜歡區域---------- */

        .w_product_sauce_detail_like {
            display: flex;
            justify-content: space-between;
            position: relative;
            z-index: 4;
            margin-top: 40px;
        }

        .w_product_sauce_detail_like_word_box {
            width: 50%;
        }

        .w_product_sauce_detail_like_word_one {
            width: 70%;
            margin-bottom: 25px;
        }

        .w_product_sauce_detail_like_word_one p {
            display: flex;
            justify-content: flex-end;
        }

        .w_product_sauce_detail_like_word_two {
            border: #5C7880 1px solid;
            width: 90%;
        }

        .w_product_sauce_detail_like_word_two_word {
            margin-top: 13%;
            margin-left: 42%;
            width: 50%;
        }

        .w_product_sauce_detail_like_word_btn {
            padding: 3% 18%;
            margin-top: 10%;
            margin-bottom: 10%;
            border-radius: 5px;
            text-align: center;
            width: 70%;
            border: #E67348 1px solid;
        }

        .w_product_sauce_detail_like_word_btn a {
            text-decoration: none;
            color: #E67348;
        }

        .w_product_sauce_detail_like_img_box {
            width: 50%;
        }

        .w_product_sauce_detail_like_img_box img {
            margin-top: -30%;
            width: 100%;
        }

        .w_product_sauce_detail_like_img_box_bg {
            position: absolute;
            z-index: 3;
            width: 80%;
            height: 300px;
            display: flex;
            margin-left: 10%;
            margin-top: -300px;

        }

        .w_product_sauce_detail_like_img_box_bg img {
            width: 100%;
            object-fit: cover;

        }

        .w_product_sauce_detail_like_word_line {
            border-bottom: #5C7880 1px solid;
            padding: 15px 0px;

        }

        /* ----------以上為你可能喜歡區域---------- */


        /* ----------以下為底部評價區域---------- */
        .w_product_sauce_detail_wrapper_three_two {
            /* 底部評價區域最大盒子 */
            width: 75%;
            margin: auto;
        }


        .w_bottom_review_word_box {
            /* 底部評價區域小盒子 */
            display: flex;
            justify-content: space-between;
            margin: 40px 0px;
        }

        .w_bottom_review_star_box {
            /* 評價區域標題單顆星星盒子 */
            text-align: center;
            margin: auto;
            display: flex;
            align-items: center;
            justify-content: center;

        }

        .w_bottom_review_star_box img {
            /* 評價區域標題單顆星星 */
            width: 2.5%;
            margin-right: 10px;
            margin-bottom: 24px;
        }

        .w_bottom_review_star_bigbox_in {
            /* 評價區域標題5顆星星盒子 */
            display: flex;
            align-items: center;
            margin-top: 10px;
        }

        .w_bottom_review2,
        .w_bottom_review1 {
            /* 評價區域標題5顆星星 */
            width: 7%;
            margin-right: 5px;
        }

        .w_product_sauce_detail_star_box_wordin {
            /* 評價區域標題5顆星星 */
            text-align: justify;
        }

        .w_bottom_review_ciecle_box {
            /* 橘色圓形盒子 */
            display: flex;
            align-items: center;
            text-align: center;
            margin-bottom: 20%;
        }

        .w_bottom_review_ciecle {
            /* 橘色圓形邊線 */
            border: #E67348 1px solid;
            width: 60px;
            height: 60px;
            border-radius: 100%;
            padding-top: 10%;
        }

        .w_bottom_review_word_two {
            width: 35%;
        }

        .w_bottom_review_word_line {
            /* 文字底線 */
            border: #5C7880 0.5px solid;
        }

        /* ----------以上為底部評價區域---------- */


        /* ----------以下為顧客寫評價區域---------- */
        .w_writing_review_name_box {
            display: flex;
            width: 100%;
            padding: 20px;
            border: #5C7880 1px solid;
            border-bottom: none;
        }

        .w_writing_review_name {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        .w_writing_review_name_date {
            width: 85%;
            /* display: flex; */
            text-align: right;
        }

        .w_writing_review_star_box {
            text-align: start;
        }

        .w_writing_review_star_box img {
            width: 3%;
        }

        .w_writing_review_box textarea {
            padding: 30px;
            width: 100%;
            margin-bottom: 30px;
            color: #DBDBDB;
        }

        /* ----------以上為顧客寫評價區域---------- */


        /* ----------以下為送出按鈕區域---------- */

        .w_btn {
            margin: auto;
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

        .w_btn:hover {
            background-color: #D3554A;

        }

        .w_btn:focus {
            outline: none;
        }

        /* ----------以上為送出按鈕區域---------- */


        /* ----------以下為撰寫評價按鈕區域---------- */
        .w_outline_btn {
            width: 372px;
            height: 70px;
            border: #E67348 1px solid;
            background-color: rgb(255, 255, 255);
            color: #E67348;
            font-size: 1.3rem;
            border-radius: 5px;
            cursor: pointer;
        }

        .w_outline_btn:focus {
            outline: none;
        }

        /* ----------以下為撰寫評價按鈕區域---------- */


        /* ----------以下為購買提醒、立即購買按鈕區域---------- */
        .w_product_sauce_detail_attention {
            padding: 100px 0px 50px 0px;
        }

        /* ----------以上為購買提醒、立即購買按鈕區域---------- */


        @media screen and (max-width: 575.98px) {

            /* ----------以下為寫評論、送出區域(隱藏中)---------- */
            .w_product_sauce_detail_wrapper_four {
                display: none;
            }

            /* ----------以上為寫評論、送出區域(隱藏中)---------- */
            /* ----------以下為麵包屑(隱藏中)---------- */
            .w_product_sauce_detail_breadcrumbs_box {
                display: none;
            }

            /* ----------以上為麵包屑(隱藏中)---------- */
            .noto_thin {
                font-size: 1rem;
            }

            .noto_light {
                font-size: 1rem;
            }

            .en_font {
                font-size: 1.2rem;
            }

            .noto_regular {
                font-size: 1.2rem;
            }


            /* ----------以下為非模組字體設定---------- */
            .product_detail_big_en_font {
                font-size: 1rem;
            }

            .product_detail_big_en_font_r {
                font-size: 1.2rem;
            }

            .product_detail_small_noto_thin {
                font-size: 1rem;
            }

            .product_detail_small_noto_thin_b {
                font-size: 1rem;
            }

            .product_detail_big_en_font_b2 {
                font-size: 1.4rem;
            }

            .product_detail_small_en_font {
                font-size: 1rem;
            }

            .product_detail_big_en_font {
                font-size: 1.2rem;
            }

            .product_detail_big_en_font_b {
                font-size: 1.4rem;
            }

            .product_detail_small_en_font_b {
                font-size: 1rem;
            }

            .product_detail_small_two_en_font_b {
                font-size: 1rem;
            }

            .product_detail_noto_light_big {
                /* 這是次細的(light) */
                font-size: 1.2rem;
            }

            .product_detail_small_two_en_font_r {
                font-size: 1rem;
            }

            /* ----------以上為非模組字體設定---------- */
            .w_product_sauce_detail_wrapper_one {
                flex-direction: column;

            }

            .w_product_sauce_detail_word {
                padding: 30px 10px;
                width: 90%;
            }


            /* ----------以下為商品照片灰色背景---------- */
            .w_product_sauce_detail_bg {
                width: 100vw;
                height: 55vh;
            }

            /* ----------以上為商品照片灰色背景---------- */
            /* ----------以下為商品照片---------- */
            .w_product_sauce_detail_img_box {
                width: 100vw;
                height: 55vh;
            }

            .w_product_sauce_detail_img {
                width: 100vw;
                height: 55vh;
            }

            /* ----------以上為商品照片---------- */
            /*--------- 以下為大標、愛心設定--------- */
            .w_product_sauce_detail_bigtitle {
                width: 80vw;
            }

            .w_product_sauce_detail_bigtitle img {
                width: 6%;
                margin-left: 10%;
                margin-right: 5%;
                margin-bottom: 17%;
            }


            .w_product_sauce_detail_bigtitle p {
                margin-bottom: 0px;
            }

            /*--------- 以上為大標、愛心設定--------- */
            /*---------- 以下為星星旁邊的數字設定（2 Reviews） ----------*/
            .star_padi_one {
                padding-top: 23px;
            }

            .star_padi_two {
                padding-top: 22px;

            }

            /*---------- 以上為星星旁邊的數字設定（2 Reviews） ----------*/
            /*---------- 以下為星星設定---------- */
            .w_product_sauce_detail_star_box_in {
                margin-top: 14px;
            }

            /*---------- 以上為星星設定 ----------*/
            /* ----------以下為金額、免運文字設定---------- */
            .w_product_sauce_detail_star_box_in_money p {
                margin-bottom: -5px;
            }

            /* ----------以上為金額、免運文字設定---------- */
            /* ----------以下為500g (7人份)、數量按鍵盒子設定---------- */
            .w_product_sauce_detail_word_box_in {
                margin: 10% 0%;
            }

            .w_product_sauce_detail_number {
                /* border: #5C7880 1px solid; */
                margin-left: 20px;
                margin-bottom: 10px;
                padding: 20px 45px;
            }

            /* ----------以上為500g (7人份)、數量按鍵盒子設定---------- */
            /*---------- 以下為加入購物車橘色大按鈕---------- */
            .w_product_sauce_detail_cart_btn {
                width: 100%;
                display: flex;
                align-items: center;
                justify-content: center;
                margin-top: -20px;
            }

            .w_product_sauce_detail_cart_btn a {
                text-align: center;
                padding: 7% 0%;
            }

            /*---------- 以上為加入購物車橘色大按鈕---------- */
            /* ----------以下為大標文字設定---------- */
            .w_product_sauce_detail_title p {
                padding: 0px 0px 10px 0px;
            }

            .w_product_sauce_detail_title {
                width: 50%;
            }

            .w_product_sauce_detail_title_line {
                padding: 0px;
            }

            /* ----------以上為大標文字設定---------- */
            /*--------- 以下為商品介紹、原料區域設定 --------- */
            .w_product_sauce_detail_wrapper_orange {
                width: 95%;
                margin: 40px 0px 50px 0px;
                padding: 30px 0px;
            }

            .w_product_sauce_detail_cook_step {
                padding: 20px 20px 20px 40px;
            }

            .w_product_sauce_detail_cook_material {
                width: 115%;
                padding: 20px 20px 20px 40px;
            }

            /*--------- 以上為商品介紹、區域設定 --------- */
            /* ----------以下為推薦食譜區域---------- */
            .w_product_sauce_detail_recipe_bg {
                height: 30%;
            }

            .w_product_sauce_detail_recipe_bg img {
                margin: 10px auto;
                width: 100%;
                height: 50%;
            }

            .w_product_sauce_detail_recipe_title {
                padding: 50px 0px;
                width: 50%;
            }

            .w_product_sauce_detail_recipe_title img {
                width: 15%;
                height: 15%;
            }

            /* ----------以上為推薦食譜區域---------- */
            /* ----------以下為你可能喜歡區域---------- */
            .w_product_sauce_detail_like {
                flex-direction: column;
                text-align: center;
            }

            .w_product_sauce_detail_like_word_box {
                width: 90%;
                text-align: start;
                margin: auto;
            }

            .w_product_sauce_detail_like_word_one {
                width: 100%;
            }

            .w_product_sauce_detail_like_word_two {
                margin-top: 15%;
                width: 100%;
            }

            .w_product_sauce_detail_like_word_two_word {
                margin-top: 15%;
                margin-left: 6%;
                width: 50%;
            }

            .w_product_sauce_detail_like_word_btn {
                margin-left: 10;
                width: 100%;
            }

            .w_product_sauce_detail_like_img_box img {
                margin-top: -150%;
                margin-left: 100%;
            }

            .w_product_sauce_detail_like_img_box_bg {
                position: absolute;
                z-index: 3;
                width: 100%;
                height: 180px;
                display: flex;
                margin-left: -5%;
                margin-top: -170px;
            }

            /* ----------以上為你可能喜歡區域---------- */
            /* ----------以下為底部評價區域---------- */
            .w_product_sauce_detail_wrapper_three_two {
                /* 底部評價區域最大盒子 */
                width: 75%;
                margin: auto;
            }


            .w_bottom_review_word_box {
                /* 底部評價區域小盒子 */
                display: flex;
                justify-content: space-between;
                margin: 40px 0px;
            }

            .w_bottom_review_star_box {
                /* 評價區域標題單顆星星盒子 */
                text-align: center;
                margin: auto;
                display: flex;
                align-items: center;
                justify-content: center;

            }

            .w_bottom_review_star_box img {
                /* 評價區域標題單顆星星 */
                width: 2.5%;
                margin-right: 10px;
                margin-bottom: 5px;
            }

            .w_bottom_review_star_bigbox_in {
                /* 評價區域標題5顆星星盒子 */
                display: flex;
                align-items: center;
                margin-top: 10px;
            }

            .w_bottom_review2,
            .w_bottom_review1 {
                /* 評價區域標題5顆星星 */
                width: 7%;
                margin-right: 5px;
            }

            .w_product_sauce_detail_star_box_wordin {
                /* 評價區域標題5顆星星 */
                text-align: justify;
            }

            .w_bottom_review_ciecle_box {
                /* 橘色圓形盒子 */
                display: flex;
                align-items: center;
                text-align: center;
                margin-bottom: 20%;
            }

            .w_bottom_review_ciecle {
                /* 橘色圓形邊線 */
                border: #E67348 1px solid;
                width: 60px;
                height: 60px;
                border-radius: 100%;
                padding-top: 10%;
            }

            .w_bottom_review_word_two {
                width: 35%;
            }

            .w_bottom_review_word_line {
                /* 文字底線 */
                border: #5C7880 0.5px solid;
            }

            /* ----------以上為底部評價區域---------- */
            /* ----------以下為底部評價區域---------- */
            .w_product_sauce_detail_wrapper_three_two {
                /* 底部評價區域最大盒子 */
                width: 90%;
                margin: auto;
            }


            .w_bottom_review_word_box {
                /* 底部評價區域小盒子 */
                flex-direction: column;
                align-items: center;
            }

            .w_bottom_review_star_box {
                /* 評價區域標題單顆星星盒子 */
                margin-top: -40px;
            }

            .w_bottom_review_star_box img {
                /* 評價區域標題單顆星星 */
                width: 5%;
                margin-bottom: 20px;
            }

            .w_bottom_review_star_bigbox_in {
                /* 評價區域標題5顆星星盒子 */
                justify-content: center;
            }

            .w_bottom_review2,
            .w_bottom_review1 {
                /* 評價區域標題5顆星星 */
                width: 5%;
            }

            .w_bottom_review_ciecle {
                /* 橘色圓形邊線 */
                padding-top: 20%;
                margin: auto;
            }

            .w_bottom_review_word_one {
                order: 1;
            }

            .w_bottom_review_word_two {
                width: 90%;
                order: 3;
            }

            .w_bottom_review_word_three {
                margin: 0px 0px 10px 0px;
                order: 2;
            }

            /* ----------以上為底部評價區域---------- */
            /* ----------以下為送出按鈕區域---------- */
            .w_btn {
                width: 100%;
            }

            /* ----------以上為送出按鈕區域---------- */


        }
    </style>
</head>

<body>
<div class="w_container">
    <div class="w_product_sauce_detail_wrapper_one">
        <div class="w_product_sauce_detail_bg">
            <div class="w_product_sauce_detail_img_box">
                <!-- 以下醬料圖片位置 -->
                <img class="w_product_sauce_detail_img" src="img/sauce/l/<?= $product['image']; ?>.png">
            </div>
        </div>


        <div class="w_product_sauce_detail_word">
            <!-- 以下為麵包屑區域 -->
            <div class="w_product_sauce_detail_breadcrumbs_box   product_detail_small_noto_thin_b">
                <a href="">
                    <span class="w_product_sauce_detail_breadcrumbs_ch">產品種類</span>
                    <span class="w_product_sauce_detail_breadcrumbs_en">Products</span>
                </a>
                <span>></span>

                <a href="product_list_sauce.php">
                    <span class="w_product_sauce_detail_breadcrumbs_ch">義大利麵醬</span>
                    <span class="w_product_sauce_detail_breadcrumbs_en">Sauce</span>
                </a>
                <span>></span>

                <a href="">
                    <span class="w_product_sauce_detail_breadcrumbs_ch"><?= $product['Name_Ch']; ?></span>
                    <span class="w_product_sauce_detail_breadcrumbs_en"><?= $product['Name_En']; ?></span>
                </a>
            </div>
            <!-- 以上為麵包屑區域 -->


            <!-- 以下為品名區域 -->
            <div class="w_product_sauce_detail_bigtitle">
                <div class="en_font">
                    <p><?= $product['Name_En']; ?></p>
                    <p class="noto_thin"><?= $product['Name_Ch']; ?></p>
                </div>
                <img src="img/icon/like.svg" alt="">
            </div>
            <!-- 以上為品名區域 -->


            <div class="w_product_sauce_detail_star_box">
                <div class="w_product_sauce_detail_star_box_in">
                    <img class="w_review2" src="img/icon/review2_red.svg" alt=""><!-- 填滿的星星 -->
                    <img class="w_review2" src="img/icon/review2_red.svg" alt=""><!-- 填滿的星星 -->
                    <img class="w_review2" src="img/icon/review2_red.svg" alt=""><!-- 填滿的星星 -->
                    <img class="w_review2" src="img/icon/review2_red.svg" alt=""><!-- 填滿的星星 -->
                    <img class="w_review1" src="img/icon/review1_red.svg" alt=""><!-- 空的星星 -->
                    <p class="product_detail_small_en_font_b   star_padi_one">4</p>
                    <p class="product_detail_small_en_font   star_padi_two">|</p>
                    <p class="product_detail_small_en_font_b   star_padi_two"> 2 Reviews</p>
                </div>
                <br>
                <div class="w_product_sauce_detail_star_box_in_money">
                    <p class="product_detail_big_en_font_b2">NT＄ <?= $product['Price']; ?></p>
                    <p class="product_detail_small_noto_thin">全站購物滿千免運</p>
                </div>
            </div>


            <div class="w_product_sauce_detail_word_box_in">
                <br>
                <p class="product_detail_small_noto_thin_b">淨重：500g</p>
                <!-- <span class="w_product_detail_number"></span> -->
                <div class="w_product_sauce_detail_number">
                    <!-- 在這裡插入加減數字欄位 -->
                    <input type="text" class="input-number">
                </div>

            </div>
            <br>
            <div class="w_product_sauce_detail_cart_btn    product_detail_noto_light_big">
                <a class="w_product_sauce_detail_transition" href="">加入購物車</a>
                <!-------- 橘色大按鈕連結------->
            </div>
        </div>
    </div>
</div>


<!------- 以下為商品介紹、原料區域設定 ------->
<div class="w_product_sauce_detail_wrapper_orange">
    <div class="row">
        <div class="col-md-7">
            <div class="w_product_sauce_detail_cook_step">
                <p class="noto_regular">商品介紹</p>
                <div class="w_product_sauce_detail_cook_title_line"></div>
                <p class="en_font">Description</p>
                <!------- 商品介紹文字 ------->
                <p class="noto_thin"><?= $product['Description']; ?>
                </p>
            </div>
        </div>
        <div class="col-md-5">
            <div class="w_product_sauce_detail_cook_material">
                <p class="noto_regular">原料</p>
                <div class="w_product_sauce_detail_cook_title_line_two"></div>
                <p class="en_font">Ingredient</p>
                <!------- 原料文字 ------->
                <p class="noto_thin"><?= $product['Ingredient']; ?>
                </p>
            </div>
        </div>
    </div>
</div>
</div>
<!------- 以上為商品介紹、原料區域設定 ------->


<div class="w_product_sauce_detail_wrapper_two">
    <!------------ 以下為推薦食譜區域 ------------>
    <div class="w_product_sauce_detail_wrapper_one">
        <div class="w_product_sauce_detail_recipe_bg">
            <img src="img/pages/others/product_detail_recipe_bg.jpg" alt="">
        </div>
        <div class="col-md-3 w_product_sauce_detail_recipe_title">
            <img src="img/icon/chef2.svg" alt="">
            <p class="product_detail_noto_light_big">推 薦 食 譜</p>


            <div class="w_product_sauce_detail_recipe_title_btn">
                <a class="w_product_sauce_detail_transition" href="">了解更多</a>
            </div>
        </div>
    </div>
    <!------------ 以上為推薦食譜區域 ------------>


    <!------------ 以下為你可能會喜歡區域 ------------>
    <div class="w_product_sauce_detail_wrapper_three">

        <div class="w_product_sauce_detail_like">
            <div class="w_product_sauce_detail_like_word_box">


                <!------ 以下為大標文字和線區域 ------->
                <div class="w_pproduct_sauce_detail_like_word_one ">
                    <p class="noto_regular    w_product_sauce_detail_like_word_line">可搭配麵種</p>
                    <p class="product_detail_big_en_font">Recommended with</p>
                </div>
                <!------ 以上為大標文字和線區域 ------->


                <!------ 以下為產品名稱和按鈕區域 ------->
                <div class="w_product_sauce_detail_like_word_two">
                    <div class="w_product_sauce_detail_like_word_two_word">
                        <p class="product_detail_big_en_font_b">Farfalle nº 87</p>
                        <p class="product_detail_noto_light_big">蝴蝶麵</p>

                        <div class="w_product_sauce_detail_like_word_btn ">
                            <a class="w_product_detail_transition" href="">了解更多</a>
                        </div>
                    </div>
                </div>
                <!------ 以上為產品名稱和按鈕區域 ------->
            </div>


            <!------ 以下為你可能會喜歡產品照片區域 ------->
            <div class="w_product_sauce_detail_like_img_box">
                <img src="img/product/l/P1_Farfalle_Tricolore.png" alt="">
            </div>
            <!------ 以上為你可能會喜歡產品照片區域 ------->
        </div>


        <!------ 以下為你可能會喜歡背景區域 ------->
        <div class="w_product_sauce_detail_like_img_box_bg">
            <img src="img/pages/others/product_detail_recommend_bg.png" alt="">
        </div>
        <!------ 以下為你可能會喜歡背景區域 ------->
    </div>
    <!------------ 以上為你可能會喜歡區域 ------------>


    <!--------------------- 以下為評價區域 --------------------->
    <div class="w_product_sauce_detail_wrapper_three_two">
        <!------------ 以下為評價title區域 ------------>
        <div class="col-md-6 w_product_sauce_detail_title">
            <p class="noto_regular  w_product_sauce_detail_title_line">評價</p>
            <p class="en_font">Reviews</p>
        </div>
        <!------------ 以上為評價title區域 ------------>
        <div class="row">
            <div class="col w_bottom_review_star_box">
                <img src="img/icon/review2_red.svg" alt="">
                <p class="product_detail_small_two_en_font_b">4 | 2 Reviews</p>
            </div>
        </div>


        <div class="w_bottom_review_word_box">


            <div class="w_bottom_review_word_one">
                <div class="w_bottom_review_ciecle_box">
                    <div class="w_bottom_review_ciecle   product_detail_big_en_font_r ">L</div>
                </div>
                <p class="product_detail_big_en_font_r ">Miss Lee</p>
            </div>


            <div class="w_bottom_review_word_two">
                <!-- 以下這邊沿用最上面使用過的星星 -->
                <div class="w_bottom_review_star_bigbox">
                    <div class="w_bottom_review_star_bigbox_in">
                        <img class="w_bottom_review2" src="img/icon/review2_red.svg" alt=""><!-- 填滿的星星 -->
                        <img class="w_bottom_review2" src="img/icon/review2_red.svg" alt=""><!-- 填滿的星星 -->
                        <img class="w_bottom_review2" src="img/icon/review2_red.svg" alt=""><!-- 填滿的星星 -->
                        <img class="w_bottom_review2" src="img/icon/review2_red.svg" alt=""><!-- 填滿的星星 -->
                        <img class="w_bottom_review1" src="img/icon/review1_red.svg" alt=""><!-- 空的星星 -->
                    </div>
                </div>
                <!-- 以上這邊沿用最上面使用過的星星 -->
                <br>
                <div class="w_product_sauce_detail_star_box_wordin">
                    <p class="noto_thin">無意間發現的義大利麵品牌，又有食譜教學
                        對沒有習慣自炊小資族簡單輕鬆好上手！
                        口感吃起來沒話說！推！</p>
                </div>
            </div>


            <div class="w_bottom_review_word_three">
                <p class="product_detail_big_en_font_r ">12/03/2018</p>
            </div>


        </div>
        <div class="w_bottom_review_word_line"></div><!-- 平價欄位區隔線 -->


        <div class="w_bottom_review_word_box">


            <div class="w_bottom_review_word_one">
                <div class="w_bottom_review_ciecle_box">
                    <div class="w_bottom_review_ciecle   product_detail_big_en_font_r ">L</div>
                </div>
                <p class="product_detail_big_en_font_r ">Miss Lee</p>
            </div>


            <div class="w_bottom_review_word_two">
                <!-- 以下這邊沿用最上面使用過的星星 -->
                <div class="w_bottom_review_star_bigbox">
                    <div class="w_bottom_review_star_bigbox_in">
                        <img class="w_bottom_review2" src="img/icon/review2_red.svg" alt=""><!-- 填滿的星星 -->
                        <img class="w_bottom_review2" src="img/icon/review2_red.svg" alt=""><!-- 填滿的星星 -->
                        <img class="w_bottom_review2" src="img/icon/review2_red.svg" alt=""><!-- 填滿的星星 -->
                        <img class="w_bottom_review2" src="img/icon/review2_red.svg" alt=""><!-- 填滿的星星 -->
                        <img class="w_bottom_review1" src="img/icon/review1_red.svg" alt=""><!-- 空的星星 -->
                    </div>
                </div>
                <!-- 以上這邊沿用最上面使用過的星星 -->
                <br>
                <div class="w_product_sauce_detail_star_box_wordin">
                    <p class="noto_thin">無意間發現的義大利麵品牌，又有食譜教學
                        對沒有習慣自炊小資族簡單輕鬆好上手！
                        口感吃起來沒話說！推！</p>
                </div>
            </div>


            <div class="w_bottom_review_word_three">
                <p class="product_detail_big_en_font_r ">12/03/2018</p>
            </div>

        </div>

    </div>
    <!--------------------- 以上為評價區域 --------------------->


    <!------------------------ 以下為底部撰寫評價區域 ------------------------>

    <div class="w_product_sauce_detail_wrapper_four">

        <div class="col-md-6 w_product_sauce_detail_title">
            <p class="noto_regular">寫評價</p>
        </div>

        <div class="w_writing_review_name_box">


            <div class="w_writing_review_name">
                <p class="product_detail_big_two_en_font_b">Miss Lee</p>
                <div class="w_writing_review_star_box">
                    <img src="img/icon/review2_red.svg" alt=""><!-- 填滿的星星 -->
                    <img src="img/icon/review2_red.svg" alt=""><!-- 填滿的星星 -->
                    <img src="img/icon/review2_red.svg" alt=""><!-- 填滿的星星 -->
                    <img src="img/icon/review2_red.svg" alt=""><!-- 填滿的星星 -->
                    <img src="img/icon/review1_red.svg" alt=""><!-- 空的星星 -->
                </div>
            </div>


            <div class="w_writing_review_name_date   product_detail_small_noto_thin_b">
                <p>購買日期：12/03/2018</p>
            </div>


        </div>
        <div class="w_writing_review_box">
            <textarea name="" id="" cols="30" rows="5" class="noto_light">顧客寫評價區</textarea>
        </div>


        <div class="w_btn_box">
            <div class="w_btn">
                <a href="">
                    <button class="w_btn  product_detail_noto_light_big   w_product_sauce_detail_transition">送出</button>
                </a>
            </div>
        </div>
    </div>
    <!------------------------ 以下為底部撰寫評價區域 ------------------------>


    <!------------------------ 以下為寫評價按鈕區域 ------------------------>
    <div class="w_product_sauce_detail_wrapper_five">
        <div class="w_outline_btn_box">
            <a href="">
                <button class="w_outline_btn   product_detail_noto_light_big   w_product_sauce_detail_transition">寫評價
                </button>
            </a>
        </div>
    </div>
    <!------------------------ 以上為寫評價按鈕區域 ------------------------>


    <!------------------------ 以下為購買提醒、立即購買按鈕區域 ------------------------>


    <div class="w_product_sauce_detail_wrapper_six">
        <p class="w_product_sauce_detail_attention   product_detail_small_two_en_font_r">提醒：完成此商品訂單之會員即可發表評價！</p>
        <div class="w_outline_btn_box">
            <a href="">
                <button class="w_outline_btn   product_detail_noto_light_big   w_product_sauce_detail_transition">立即購買
                </button>
            </a>
        </div>
    </div>
    <!------------------------ 以上為購買提醒、立即購買按鈕區域 ------------------------>


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
        initInputBox($('.input-number'), 1, 20);

        function initInputBox(elem, min, max) {
            elem.each(function () {
                var $input = $(this);
                var $wrap, $inputBox, $add, $minus;

                $input.hide().wrap('<div class="number-box"></div>');

                $wrap = $(this).parent();

                $wrap.append('<button type="button" class="minus w_input_change_style">-</button>' +
                    '<div class="input-box" contenteditable="true"></div>' +
                    '<button type="button" class="add w_input_change_style">+</button>');

                $add = $wrap.find('.add');
                $minus = $wrap.find('.minus');
                $inputBox = $wrap.find('.input-box');

                $inputBox.text(min);

                function add() {
                    if (parseInt($inputBox.text()) < max) {
                        $inputBox.text(parseInt($inputBox.text()) + 1);
                    }
                }

                function minus() {
                    if (parseInt($inputBox.text()) > min) {
                        $inputBox.text(parseInt($inputBox.text()) - 1);
                    }
                }

                $add.click(add);
                $minus.click(minus);

                $inputBox
                    .blur(function () {
                        var regex = /[^\d]*/g;
                        var numVal = $(this).text().replace(regex, "");
                        console.log(numVal)
                        numVal = isNaN(parseInt(numVal)) ? 1 : parseInt(numVal);
                        numVal = numVal < min ?
                            min : numVal > max ?
                                max : numVal;
                        $(this).text(numVal);
                    })
                    .keydown(function (e) {
                        var _key = e.keyCode;
                        console.log(_key)
                        // 左邊數字鍵 0-9 的 keycode 分別是 48-57
                        // 右邊數字鍵 0-9 的 keycode 分別是 96-105
                        // enter: 13 & 108, backspace: 8, delete: 46, esc:27
                        // 上: 38, 下: 40, 左: 37, 右: 39

                        if (_key == 13 || _key == 108 || _key == 27) {
                            // 按下 enter / esc 就 blur
                            $(this).blur();
                        } else if (_key == 37 || _key == 39 || _key == 8 || _key == 46 || (_key >= 48 && _key <= 57) || (_key >= 96 && _key <= 105)) {
                            // 數字鍵、刪除鍵、左右鍵可輸入
                            return true;
                        } else if (_key == 38) {
                            // 向上加一
                            add();
                            return false;
                        } else if (_key == 40) {
                            // 向下減一
                            minus();
                            return false;
                        } else {
                            // 其他按鍵全部無作用
                            return false;
                        }

                    })
                    .keyup(function () {
                        var regex = /[^\d]/;
                        var numVal = $(this).text();

                        // 裡面含有非法文字才做取代的動作
                        if ($(this).text().search(regex) == 0) {
                            console.log('要取代')
                            numVal = numVal.replace(regex, "");
                            numVal = isNaN(parseInt(numVal)) ? '' : parseInt(numVal);
                            if (numVal > max) {
                                numVal = max;
                            }
                            $(this).text(numVal);
                        }
                    });

            })
        }


    </script>

</body>
<?php include __DIR__ . '/__html_foot.php' ?>
