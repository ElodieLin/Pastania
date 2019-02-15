<?php
require __DIR__ . '/__connect_db.php';
$page_name = 'edit_me';
$page_title = '編輯個人資料';

// 如果沒有登入, 轉到首頁
if (!isset($_SESSION['user'])) {
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

    .container.col-lg-5 {
      margin-top: 100px;
    }

    .color-false{
      color: #D3554A;
    }

    .color-success{
      color: #0062cc;
    }

    .card-text{
      max-width: 600px;
      margin: 0 auto;
    }

    .r_edit_bth{
      width: 100%;
      max-width: 600px;
    }

    @media screen and (max-width: 575.98px) {
      .r_edit_bth{
        max-width: 350px;
      }
    }


  </style>


  <div class="container col-lg-5">
    <div class="row ">
      <div class="col-lg-12">


        <div class="card">
          <div class="edit_logo mt-4 mb-2">
            <h5 class="text-center">編輯個人資料</h5>
          </div>
          <hr class="col-lg-10 mx-auto">
          <div id="info" class="text-center" role="alert" style="display: none"></div>
          <div class="card-body">
            <div class="card-text">
              <form name="form3" method="post">
                <div class="form-group row mx-auto">
                  <label for="email" class="col-md-3 label_text">電子郵箱</label>
                  <input type="text" class="form-control col-md-9" id="email3" name="email" disabled
                         value="<?= $_SESSION['user']['email'] ?>">
                  <small id="email3Help" class="form-text"></small>
                </div>
                <div class="form-group row mx-auto">
                  <label for="password" class="col-md-3 label_text">輸入密碼確認<span class="red">*</span></label>
                  <input type="password" class="form-control col-md-9" id="password4" name="password">
                  <small id="password4Help" class="form-text"></small>
                </div>
                <div class="form-group row mx-auto">
                  <label for="nickname" class="col-md-3 label_text">暱稱<span class="red">*</span></label>
                  <input type="text" class="form-control col-md-9" id="nickname2" name="nickname"
                         value="<?= $_SESSION['user']['nickname'] ?>">
                  <small id="nickname2Help" class="form-text"></small>
                </div>

                <div class="form-group row mx-auto">
                  <label for="mobile" class="col-md-3 label_text">手機</label>
                  <input type="text" class="form-control col-md-9" id="mobile" name="mobile"
                         value="<?= $_SESSION['user']['mobile'] ?>">
                </div>
                <div class="form-group row mx-auto">
                  <label for="address" class="col-md-3 label_text">地址</label>
                  <!-- postcode select start  -->
                  <div class="form-group col-md-9 row mx-auto zipcode mb-0" style="padding: 0">

                    <!-- postcode select start  -->
                    <input type="text" class="form-control col-sm-3 mr-4 my-1" id="postcode" readonly
                           placeholder="郵遞區號" name="postcode" value="<?= $_SESSION['user']['postcode'] ?>">
                    <!-- with selected city & district -->

                    <!-- select city -->


                    <select require class="form-control col-sm-3 mr-4 pre_option my-1" id="city"
                            name="city"></select>
                    <!-- select district -->
                    <select class="form-control col-sm-3 pre_option my-1" id="area"
                            name="area"> </select>
                    <!-- postcode select end  -->

                  </div>
                  <!---->
                </div>
                <div class="form-group row mx-auto">
                  <div class="col-lg-3 "></div>
                  <input type="text" class="form-control col-lg-9" id="address2" name="address"
                         value="<?= $_SESSION['user']['address'] ?>">
                </div>

                <div class="row d-flex justify-content-center pt-3">
                  <button type="submit" class="btn btn-primary r_edit_bth">修改</button>
                </div>
              </form>

            </div>

          </div>
        </div>
      </div>
    </div>

  </div>
  <script>


      $(function () {
          var form = $('[name="form3"]'),
              city = form.find('[name="city"]'),
              area = form.find('[name="area"]'),
              cityVal = '<?php echo $_SESSION['user']['city']; ?>',
              areaVal = '<?php echo $_SESSION['user']['area']; ?>';
          city.val(cityVal).change();
          setTimeout(function () {
              area.val(areaVal).change();
          }, 10);

          form.submit(function (e) {
              e.preventDefault();
              e.stopPropagation();
              formCheck();
          });

          var fields = ['nickname2', 'password4'];
          var i, s;
          var info = $('#info');

          function formCheck() {


              info.hide();
              // 讓每一欄都恢復原來的狀態
              for (s in fields) {
                  cancelAlert(fields[s]);
              }

              var isPass = true;


              if (isPass) {


                  $.post('edit_me_api.php', $(document.form3).serialize(), function (data) {
                      var alertType = 'color-false';

                      info.removeClass('color-false');
                      info.removeClass('color-success');

                      if (data.success) {
                          alertType = 'color-success';
                          form.find('[name="password"]').val('');
                      } else {
                          alertType = 'color-false';
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

      });


  </script>
<?php include __DIR__ . '/__html_foot.php' ?>