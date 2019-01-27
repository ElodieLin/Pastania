<?php
require __DIR__. '/__connect_db.php';
$page_name = 'edit_me';
$page_title = '編輯個人資料';

// 如果沒有登入, 轉到首頁
if(! isset($_SESSION['user'])){
    header('Location: ./');
    exit;
}

?>
<?php include __DIR__ . '/__html_head.php' ?>
<?php include __DIR__ . '/__navbar.php' ?>
    <style>
        span.red, small {
            color: red;
          
        }
        .container.col-lg-5{
            margin-top: 100px;
        }

    </style>
<div class="container col-lg-5">
    <div class="row ">
        <div class="col-lg-12">

            <div id="info" class="alert" role="alert" style="display: none"></div>

            <div class="card">
                <div class="edit_logo mt-4 mb-2">
                <a href="./" class="col-12 modal-title mx-auto text-center"><img src="img/icon/pastania_logo.svg" class="logo_img" alt=""></a>
                </div>
                <hr class="col-lg-10 mx-auto">
                <div class="card-body">
                    <h5 class="card-title text-center pb-3">編輯個人資料</h5>
                    <div class="card-text">

                    <form name="form1" method="post" onsubmit="return formCheck()">
                        <div class="form-group row mx-auto">
                            <label for="email" class="col-md-3 label_text">電子郵箱</label>
                            <input type="text" class="form-control col-md-9" id="email" name="email" disabled
                                   value="<?= $_SESSION['user']['email'] ?>">
                            <small id="emailHelp" class="form-text"></small>
                        </div>
                        <div class="form-group row mx-auto">
                            <label for="password" class="col-md-3 label_text">輸入密碼用以變更資料<span class="red">*</span></label>
                            <input type="text" class="form-control col-md-9" id="password" name="password">
                            <small id="passwordHelp" class="form-text"></small>
                        </div>
                        <div class="form-group row mx-auto">
                            <label for="nickname" class="col-md-3 label_text">暱稱<span class="red">*</span></label>
                            <input type="text" class="form-control col-md-9" id="nickname" name="nickname"
                                   value="<?= $_SESSION['user']['nickname'] ?>">
                            <small id="nicknameHelp" class="form-text"></small>
                        </div>


                        <!-- <div class="form-group row mx-auto">
                            <label for="mobile" class="col-md-3 label_text">手機</label>
                            <input type="text" class="form-control col-md-9" id="mobile" name="mobile"
                                   value="<?= $_SESSION['user']['mobile'] ?>">
                        </div> -->
                        <div class="form-group row mx-auto">
                        <label for="address" class="col-md-3 label_text">地址</label>
                                <!-- postcode select start  -->
                                <input type="email" class="form-control col-sm-2 mr-3 my-1" id="exampleFormControlInput1"
                                   placeholder="郵遞區號">
                                   <select require class="form-control col-sm-3 mr-4 pre_option my-1" id="id_mySelect"
                                    name="City">
                                </select>
                                <select class="form-control col-sm-3 pre_option my-1" id="exampleFormControlSelect1">
                                <option>請選擇區域</option>
                                <option>北投區</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                        <div class="form-group row mx-auto">
                            <div class="col-lg-3 "></div>
                            <input type="text" class="form-control col-lg-9" id="address" name="address"
                                   value="<?= $_SESSION['user']['address'] ?>">
                        </div>

                        <div class="row d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary col-lg-10">修改</button>
                        </div>
                    </form>

                    </div>

                </div>
            </div>
        </div>
    </div>

</div>
    <script>

        var fields = ['nickname', 'password'];
        var i, s;
        var info = $('#info');

        function formCheck(){
            info.hide();
            // 讓每一欄都恢復原來的狀態
            for(s in fields){
                cancelAlert(fields[s]);
            }

            var isPass = true;

            if(document.form1.nickname.value.length < 2){
                setAlert('nickname', '請輸入正確的暱稱');
                isPass = false;
            }

            if(document.form1.password.value.length < 6){
                setAlert('password', '密碼請輸入六個字以上');
                isPass = false;
            }

            if(isPass){

                $.post('edit_me_api.php', $(document.form1).serialize(), function(data){
                    var alertType = 'alert-danger';

                    info.removeClass('alert-danger');
                    info.removeClass('alert-success');

                    if(data.success){
                        alertType = 'alert-success';

                        setTimeout(function(){
                            location.reload(); // 重新載入
                        }, 1000);
                    } else {
                        alertType = 'alert-danger';
                    }
                    info.addClass(alertType);
                    if(data.info){
                        info.html( data.info );
                        info.slideDown();
                    }
                }, 'json');

            }

            return false;
        }

        // 設定警示
        function setAlert(fieldName, msg){
            $('#'+fieldName).css('border', '1px solid red');
            $('#'+fieldName+'Help').text(msg);
        }

        // 取消警示
        function cancelAlert(fieldName){
            $('#'+fieldName).css('border', '1px solid #cccccc');
            $('#'+fieldName+'Help').text('');
        }
    </script>
<?php include __DIR__. '/__html_foot.php' ?>