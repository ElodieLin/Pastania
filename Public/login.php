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
<?php include __DIR__ . '/__html_head.php' ?>
<?php include __DIR__ . '/__navbar.php' ?>
    <style>
        h3, h5, h6, .form-check-label {
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

        .register_btn {
            color: #fff;
        }

        .register_btn:hover {
            text-decoration: none;
            color: #fff;
        }

        .login_alert {
            color: red;
        }

    </style>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">


                <div class="card">
                    <div class="card-body col-lg-10 mx-auto">

                        <h3 class="card-title text-center"><img src="" alt="">PASTANIA</h3>
                        <hr>
                        <h5 class="card-title text-center pt-3">SIGN UP</h5>
                        <h6 class="card-title text-center pb-4">登入會員即可快速結帳</h6>
                        <div id="info" class="login_alert text-center pb-4" style="display: none"></div>
                        <div class="card-text">

                            <form name="form1" method="post" onsubmit="return formCheck()" class="row">
                                <div class="form-group col-lg-10 mx-auto">
                                    <!-- <label for="email"><span class="red">*</span> 電子信箱</label> -->
                                    <input type="text" class="form-control" id="email" name="email"
                                           placeholder="會員帳號 / 會員信箱">
                                    <small id="emailHelp" class="form-text"></small>
                                </div>

                                <div class="form-group col-lg-10 mx-auto">
                                    <!-- <label for="password"><span class="red">*</span> 密碼</label> -->
                                    <input type="text" class="form-control" id="password" name="password"
                                           placeholder="會員密碼">
                                    <small id="passwordHelp" class="form-text"></small>
                                </div>

                                <div class="form-check pb-3 col-md-10 d-flex justify-content-lg-between text-center">
                                    <div class="col-md-6">
                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                        <label class="form-check-label" for="defaultCheck1">
                                            記住我
                                        </label>
                                    </div>
                                    <div class="col-md-11">
                                        <a href="#" class="forgot">忘記密碼</a>
                                    </div>
                                </div>

                                <button type="submit" class="col-lg-9 mx-auto btn btn-primary mb-2">登入</button>

                                <hr class="col-md-10 ">

                                <h6 class="col-md-12 card-title text-center pb-2">還不是會員?</h6>

                                <button class="col-lg-9 mx-auto btn btn-primary mb-5"><a href="register.php"
                                                                                         class="register_btn">註冊</a>
                                </button>


                            </form>

                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
    <script>

        var fields = ['email', 'password'];
        var i, s;
        var info = $('#info');

        // 登入後跳轉
        var submit_btn = $('button[type=submit]');
        var come_from = '<?= $come_from ?>';


        function formCheck() {
            info.hide();
            // 讓每一欄都恢復原來的狀態
            for (s in fields) {
                cancelAlert(fields[s]);
            }

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
                    var alertType = 'alert-danger';

                    info.removeClass('alert-danger');
                    info.removeClass('alert-success');

                    if (data.success) {
                        alertType = 'alert-success';
                        // 設定登入成功後自動跳轉頁時間
                        setTimeout(function () {
                            location.href = come_from;
                        }, 1000);
                    } else {
                        alertType = 'login_alert';
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


    </script>
<?php include __DIR__ . '/__html_foot.php' ?>