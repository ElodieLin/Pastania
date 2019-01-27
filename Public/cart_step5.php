<?php include __DIR__ . '/__html_head.php' ?>
<?php include __DIR__ . '/__navbar.php'; ?>
<?php require __DIR__ . '/__connect_db.php';
//寫入資料庫
$products = $_SESSION['products'];
$order = $_SESSION['order'];

$sql = "INSERT INTO `orders` (`delivery_way`) VALUES (?)";
$pdo->prepare($sql)->execute([
        $order['delivery_way']
]);

session_destroy();
?>

<head>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">

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
            font-size: 1.3rem;
            color: #5C7880;

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


        .e_cart_hr {
            background-color: #5C7880;
            margin-bottom: 50px;

        }

        .e_cart {
            margin-top: 100px;
        }

        .e_cart p {
            margin: 0 auto;
            margin-bottom: 80px;
            text-align: center;
            font-size: 1.8rem;
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


            .e_cart_btn {
                flex-direction: column;
            }

            .e_btn {
                width: 100%;
            }

            .e_btn_outline {
                width: 100%;
                margin-bottom: 20px;
            }
        }


        /* -----------以上是模組------------- */



        /* --------------- Process Styles ------------ */
        .process_wrap {
            width: 50%;
            margin: 0 auto;
            margin-top: 50px;
        }

        .process_main {
            width: 100%;
            display: flex;
            margin-bottom: 100px;
        }

        .e_col_5 {
            width: 20%;
            margin-left: 10px;
            margin-right: 10px;
            position: relative;
        }

        .process_main .e_col_5:not(:first-child):before {
            content: "";
            display: block;
            position: absolute;
            width: 100%;
            height: 1px;
            top: 30px;
            left: calc(-50%);
            right: 0;
            background: #5C7880;
            transition: .4s;
        }

        .process_step_cont {
            text-decoration: none;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            align-content: space-between;
        }

        .process_step {
            font-size: 2rem;
            border-radius: 100%;
            background: #C8DBD8;
            text-align: center;
            line-height: 2;
            justify-content: center;
            align-self: center;
            display: flex;
            color: #fff;
            width: 60px;
            height: 60px;
            margin-bottom: 15px;
            z-index: 4;
            cursor: pointer;
        }


        .process_label {
            width: 100%;
            text-align: center;
        }

        .process_dot_cont {
            display: flex;
            justify-content: space-around;
            align-items: stretch;
            width: 60%;
            padding-top: 5px;
        }

        /* --------控制 process bar 第幾顆變色--------- */

        .active_step .e_col_5:nth-child(5) .process_step {
            background-color: #E67348;

        }

        @media screen and (max-width: 992px) {
            .process_step {
                font-size: 1.6rem;
                width: 50px;
                height: 50px;

            }

            .process_main .e_col_5:not(:first-child):before {
                top: 25px;

            }

            .process_wrap {
                width: 90%;
            }

            .process_main {
                margin-bottom: 100px;
            }
        }

        @media screen and (max-width: 576px) {

            .process_label {
                display: none;
            }

            .process_main {
                margin-bottom: 50px;
            }

        }

        /* -------------- Process Styles end ---------------*/


        /* ------- 感謝購買 -------- */


        .e_thanks {
            margin-bottom: 10rem;
        }

        .e_thanks p {
            text-align: center;
        }



        /* ----------ATM轉帳資訊----------  */

        /* not show ATM轉帳資訊欄位 */
        .e_selected_ATM {
            display: none;
        }

        /* not show ATM轉帳資訊欄位 */



        .e_ATM_info {
            background: #C8DBD8;
            padding: 3rem 0;
            /* margin-bottom: 6rem; */
            border-radius: .25rem;
        }

        .e_ATM_info_title {
            font-weight: 400;
        }

        .e_ATM_info hr {
            background: #5C7880;
            margin-bottom: 2rem;
        }

        .e_ATM_info p {
            padding: 0 4rem;
            margin-bottom: .75rem;

        }

        @media screen and (max-width: 768px) {
            .e_ATM_info p {
                padding: 0 2rem;
                font-size: 1.1rem;

            }

            .e_fontsize {
                font-size: 1.1rem;
            }
        }
    </style>

</head>

<body>
    <div class="container e_cart">
        <p class="noto_light">購 物 車</p>
    </div>

    <div class="process_wrap active_step">
        <div class="process_main">
            <div class="e_col_5 ">
                <div class="process_step_cont">
                    <div class="process_step step-1 en_font ">1</div>
                    <span class="process_label noto_light">購物車清單</span>
                </div>
            </div>
            <div class="e_col_5 ">
                <div class="process_step_cont">
                    <div class="process_step step-2 en_font">2</div>
                    <span class="process_label noto_light">取貨方式</span>
                </div>
            </div>
            <div class="e_col_5">
                <div class="process_step_cont">
                    <div class="process_step step-3 en_font">3</div>
                    <span class="process_label noto_light">付款方式</span>
                </div>
            </div>
            <div class="e_col_5">
                <div class="process_step_cont">
                    <div class="process_step step-4 en_font">4</div>
                    <span class="process_label noto_light">確認購物</span>
                </div>
            </div>
            <div class="e_col_5">
                <div class="process_step_cont">
                    <div class="process_step step-5 en_font">5</div>
                    <span class="process_label noto_light">完成</span>
                </div>
            </div>
        </div>
    </div>


    <div class="container">


        <!-- 感謝購買-->
        <div class="e_thanks">
            <p class="noto_light ">感謝您的購買</p>
            <hr class="e_cart_hr">
            <p class="noto_light">訂單編號：T20181222000445</p>
            <p class="noto_light">訂單購買確認信已經寄送到您的信箱，詳細購買明細及發票資訊請查閱電子郵件。</p>
        </div>


        <!-- ATM轉帳資訊 （card&超取不顯示）-->
        <div class="e_selected_ATM">
            <p class="noto_light ">付款方式 - ATM</p>
            <hr class="e_cart_hr">
            <p class="noto_light e_fontsize">※請在兩天內匯款，若在兩天內沒收到匯款資訊系統會自動取消訂單。</p>

            <div class="e_ATM_info" role="">
                <p class="noto_light e_ATM_info_title">ATM轉帳資訊</p>
                <hr>
                <p class="noto_light e_info_confirm">銀行名稱： 013國泰世華銀行 </p>
                <p class="noto_light e_info_confirm">匯款帳號： 1234-5678-999900</p>
                <p class="noto_light e_info_confirm">轉帳金額： <span> NT$ 287</span> </p>
                <p class="noto_light e_info_confirm">繳款期限： <span>2018/12/25</span> 23:59pm 之前</p>

            </div>
        </div>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>

    <!-- ＪＱ套上面這支，不要套slim版的  -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>



</body>

<?php include __DIR__ . '/__html_foot.php' ?>