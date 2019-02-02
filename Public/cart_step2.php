<?php

require __DIR__ . '/__connect_db.php';

$come_from = 'cart_step2.php';

if ($_POST)
{
  // If we are a new user, insert into the DB!

  $userID = $_POST['user_id'];

  $inputDeliveryWay  = $_POST['delivery_way'];
  $inputDeliveryTime = $_POST['delivery_time'];

  $inputEmail       = $_POST['email'];
  $inputPassword    = $_POST['password'];
  $inputPasswordRe  = $_POST['password_repeat'];
  $inputPhone       = $_POST['phone'];
  $inputAddress     = $_POST['address'];
  $inputNickname    = $_POST['nickname'];

  if ($userID == '')
  {
    // Check if email exists

    $s_sql = "SELECT 1 FROM `members` WHERE `email`=?";
    $s_stmt = $pdo->prepare($s_sql);
    $s_stmt->execute([$inputEmail]);
    if ($s_stmt->rowCount() >= 1) {
      echo 'Email already used!';
      exit;
    }

    $hash = sha1($inputEmail . uniqid());
    // 去掉頭尾空白, 然後轉小寫
    $email2 = strtolower(trim($inputEmail));
    // 密碼編碼, 不要明碼
    $password2 = sha1(trim($inputPassword));

    $sql = "INSERT INTO `members`(
        `email`, `password`, `mobile`, `address`,
         `birthday`, `hash`, `nickname`, `create_at`
          ) VALUES (
          ?, ?, ?, ?,
          ?, ?, ?, NOW()
          )";

  //照上面的?對應POST項目
    $stmt = $pdo->prepare($sql);

    $stmt->execute([
        $email2,
        $password2,
        $inputPhone,
        $inputAddress,
        NULL,
        $hash,
        $inputNickname
    ]);

    $userID = $pdo->lastInsertId();

    // Login as the new user :)

    $sql = "SELECT `id`, `email`, `mobile`, `address`, `birthday`, `nickname` FROM `members` WHERE `id`=?";

    $stmt = $pdo->prepare($sql);

    $stmt->execute([
        $userID
    ]);

    // 影響的列數 (筆數)
    if ($stmt->rowCount() == 1) {
        $_SESSION['user'] = $stmt->fetch(PDO::FETCH_ASSOC);
    }
  }

  $_SESSION['order'] = array();
  $_SESSION['order']['member_id']     = $userID;
  $_SESSION['order']['delivery_way']  = $inputDeliveryWay;
  $_SESSION['order']['delivery_time'] = $inputDeliveryTime;
  $_SESSION['order']['name']          = $inputNickname;
  $_SESSION['order']['address']       = $inputAddress;
  $_SESSION['order']['phone']         = $inputPhone;

  header('Location: cart_step3.php');
  exit();
}

?>

<?php include __DIR__ . '/__html_head.php' ?>
<?php include __DIR__ . '/__navbar.php' ?>
<?php

$_SESSION['products'] = $_POST['products'];

?>


  <head>
    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
          crossorigin="anonymous"> -->
    <link rel="stylesheet" href="css/cart_step2.css">


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
    <form method="post" action="cart_step2.php">
      <div class="e_delivery_method">
        <p class="noto_light ">選擇取貨方式</p>
        <hr class="e_cart_hr">

        <div class="e_custom_select e_col_4 noto_light">
          <select name="delivery_way">
            <option value="0">選擇取貨方式</option>
            <option value="1">7-11取貨付款 &nbsp; &nbsp; &nbsp;NT$ 60</option>
            <option value="2">7-11純取貨&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;NT$ 60</option>
            <option value="3" selected>宅配到府&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;NT$ 100</option>

          </select>
        </div>

        <p class="noto_light e_terms"><a href="">閱讀物流條款</a></p>
      </div>

      <!-- 選擇門市表單 (選擇7-11取貨才顯示) choose 7-11 and pop out below pick store -->
      <div class="form-inline e_search_postcode_form">
        <div class="form-group e_select_branches">

          <label for="selectBranches" class="noto_light">選擇門市</label>

          <input type="search" id="" class="e_form_control mx-sm-3 noto_light" maxlength="5" placeholder="請輸入郵遞區號">


          <!--      未選門市的alert         -->
          <small class="noto_light e_select_branches_alert">
            請選擇門市
          </small>
        </div>
      </div>

      <div class="e_custom_select e_col_4 noto_light e_branches_select">
        <select>
          <option value="0">對照郵遞區號顯示城市地區鄰里</option>
          <option value="1">崇尚門市 （店號：991942）<br>40646 台中市北屯區崇德路二段450號1樓
          </option>
          <option value="2">鑫巴黎門市 （店號：136886）<br>40646 台中市北屯區崇德路二段119號1樓</option>

        </select>
      </div>

      <?php if (!isset($_SESSION['user'])): ?>

        <!-- Only show if user is not logged in -->

      <!--    會員配送資訊  delivery info (click checkbox and will bring member info automatically -->
      <div class="e_member_delivery_info">
        <p class="noto_light ">配送資訊</p>

        <div class="row">
            <div class="pr-5">
              <p>已是會員?</p>
              <a href="#"><button class="btn btn-info js-login">點我快速登入</button></a>
            </div>
            <div>
            <p>還不是會員？首次購物即可自動註冊成會員</p>
              <a href="#"><button class="btn btn-info js-first-order">首次購物</button></a>
            </div>
        </div>

      <?php else: ?>

        <!-- Show checkbox if user is logged in -->

    <!-- below content shows when in login status -->
        <!-- same as member info checkbox-->
        <div class="form-check e_same_as_member_info noto_light mt-5">
          <input class="form-check-input js-auto-checkbox" type="checkbox" value="1" id="sameAsMemberInfo">
          <label class="form-check-label" for="sameAsMemberInfo">
            同會員資料
          </label>
        </div>

        <div class="card e_first_order_info">
          <div class="card-body e_first_order_info_body">

            <div class="noto_light">
              <div class="form-group form-inline ">
                <label for="recipient" class="col-3 e_none_display_m">收件人姓名*</label>
                <input type="hidden" class="js-auto" value="<?php echo $_SESSION['user']['nickname']; ?>" />
                <input type="text" class="form-control col-4 js-autofill" id="" name="nickname" placeholder="收件人姓名*">

                <!-- alert -->
                <small id="" class="form-text e_order_info_alert col-4">請輸入收件人姓名</small>
              </div>

              <div class="form-inline">
                <small class="col-3 e_none_display_m"></small>
                <small id="" class="form-text col-9 ">
                  務必填寫完整收件人姓名，避免包裹無法順利簽收
                </small>

              </div>

              <div class="form-group form-inline ">
                <label for="phoneNumber" class="col-3 e_none_display_m">手機*</label>
                <input type="text" class="form-control col-4" name="phone" id="" placeholder="手機*">

                <!-- alert -->
                <small id="" class="form-text e_order_info_alert col-4">請輸入手機號碼</small>
              </div>


              <div class="form-group form-inline">
                <label for="deliverAddress" class="form-group col-3 e_none_display_m">地址*</label>
                <div class=" form-inline e_col_4_add e_area_select">

                  <input type="text" class="form-control e_col_zip col-sm-3 e_margin_b" placeholder="郵遞區號">


                  <div class="e_custom_select form-control col-md-3 mx-2 e_margin_b noto_light">
                    <select name="postcode" id="" class=" ">
                      <option selected>選擇縣市</option>
                      <option>...</option>
                    </select>
                  </div>

                  <div class="e_custom_select form-control col-md-3 e_margin_b noto_light">
                    <select name="region" id="" class="">
                      <option selected>選擇地區</option>
                      <option>...</option>
                    </select>
                  </div>

                  <input type="hidden" class="js-auto" value="<?php echo $_SESSION['user']['address']; ?>" />

                  <input type="text" class="form-control col-7 js-autofill" name="address" id="" placeholder="地址*">

                  <button type="submit" class="btn e_save_add">加入常用地址</button>

                  <!-- alert -->
                  <small id="" class="form-text e_order_info_alert col-4">請輸入完整地址</small>

                </div>
              </div>
          <!-- above content shows when in login status -->
              <div class="mb-3 form-group e_time_select">
                <label for="deliverTime" class="form-group e_col_3 mb-3">配送時段</label>

                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="delivery_time" id="deliverInMorning"
                         value="8:00-13:00">
                  <label class="form-check-label" for="deliverInMorning">8:00-13:00</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="delivery_time" id="deliverInAfternoon"
                         value="14:00-18:00">
                  <label class="form-check-label" for="deliverInAfternoon">14:00-18:00</label>
                </div>
                <div class="form-check form-check-inline ">
                  <input class="form-check-input" type="radio" name="delivery_time" id="deliverNotSpecify"
                         value="not specified" checked>
                  <label class="form-check-label" for="deliverNotSpecify">不指定</label>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <?php endif; ?>

      <?php if (!isset($_SESSION['user'])): ?>

        <!--    訂購資料（首次購物才顯示） only display when first buy (not member yet)   -->
        <!-- fill forms and equal register-->
        <div class="e_first_order_delivery_info">
          <p class="noto_light ">訂購資料及配送資訊</p>
          <div class="card e_first_order_info">
            <div class="card-body e_first_order_info_body">

              <div class="noto_light">
                <div class="form-group form-inline ">
                  <label for="memberEmail" class="col-3 e_none_display_m ">會員信箱*</label>
                  <input type="email" name="email" class="form-control col-4" placeholder="會員信箱*">

                  <!-- alert -->
                  <small id="" class="form-text e_order_info_alert col-4">請輸入完整信箱</small>
                </div>
                <div class="form-inline">
                  <small class="col-3 e_none_display_m"></small>
                  <small id="" class="form-text col-9 ">
                    待訂單成立後E-mail將會成為您的會員帳號，請務必確認是否填寫正確
                  </small>
                </div>

                <div class="form-group form-inline ">
                  <label for="setPassword" class="col-3 e_none_display_m">設定密碼*</label>
                  <input type="password" name="password" class="form-control col-4" placeholder="設定密碼*">

                  <!-- alert -->
                  <small id="" class="form-text e_order_info_alert col-4">請輸入密碼</small>
                </div>

                <div class="form-group form-inline ">
                  <label for="setPassword" class="col-3 e_none_display_m">密碼確認*</label>
                  <input type="password" name="password_repeat" class="form-control col-4" placeholder="密碼確認*">

                  <!-- alert -->
                  <small id="" class="form-text e_order_info_alert col-4">請輸入正確密碼</small>
                </div>

                <div class="form-group form-inline ">
                  <label for="recipient" class="col-3 e_none_display_m">收件人姓名*</label>
                  <input type="text" name="nickname" class="form-control col-4" placeholder="收件人姓名*">

                  <!-- alert -->
                  <small id="" class="form-text e_order_info_alert col-4">請輸入收件人姓名</small>
                </div>

                <div class="form-inline">
                  <small class="col-3 e_none_display_m"></small>
                  <small id="" class="form-text col-9 ">
                    務必填寫完整收件人姓名，避免包裹無法順利簽收
                  </small>

                </div>

                <div class="form-group form-inline ">
                  <label for="phoneNumber" class="col-3 e_none_display_m">手機*</label>
                  <input type="text" name="phone" class="form-control col-4" placeholder="手機*">

                  <!-- alert -->
                  <small id="" class="form-text e_order_info_alert col-4">請輸入手機號碼</small>
                </div>


                <div class=" form-group form-inline">
                  <label for="deliverAddress" class="form-group col-3 e_none_display_m">地址*</label>
                  <div class="form-inline e_col_4_add e_area_select">

                    <input type="text" class="form-control e_col_zip col-sm-3 e_margin_b" placeholder="郵遞區號">


                    <div class="e_custom_select form-control col-md-3 mx-2 e_margin_b noto_light">
                      <select id="" class=" ">
                        <option selected>選擇縣市</option>
                        <option>...</option>
                      </select>
                    </div>

                    <div class="e_custom_select form-control col-md-3 e_margin_b noto_light">
                      <select id="" class="">
                        <option selected>選擇地區</option>
                        <option>...</option>
                      </select>
                    </div>


                    <input type="text" name="address" class="form-control col-7" id="" placeholder="地址*">

                    <!-- alert -->
                    <small id="" class="form-text e_order_info_alert col-4">請輸入地址</small>
                  </div>
                </div>

                <div class="mb-3 form-group e_time_select">
                  <label for="deliverTime" class="form-group e_col_3 mb-3">配送時段</label>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="timeSelect" id="deliverInMorning1"
                           value="option1">
                    <label class="form-check-label" for="deliverInMorning1">8:00-13:00 </label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="timeSelect" id="deliverInAfternoon1"
                           value="option2">
                    <label class="form-check-label" for="deliverInAfternoon1">14:00-18:00</label>
                  </div>
                  <div class="form-check form-check-inline ">
                    <input class="form-check-input" type="radio" name="timeSelect" id="deliverNotSpecify1"
                           value="option3" checked>
                    <label class="form-check-label" for="deliverNotSpecify1">不指定</label>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      <?php endif; ?>

      <input type="hidden" name="user_id" class="js-user-id" value="<?php echo isset($_SESSION['user']) ? $_SESSION['user']['id'] : ''; ?>" />

      <!--    發票資訊    -->
      <div class="e_receipt_info container">
        <p class="noto_light ">發票資訊</p>
        <hr class="e_cart_hr">

        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="receiptSelect" id="receiptOption1" value="option1"
                 checked>
          <label class="form-check-label noto_light" for="receiptOption1">電子發票</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="receiptSelect" id="receiptOption2" value="option2">
          <label class="form-check-label noto_light" for="receiptOption2">紙本發票</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="receiptSelect" id="receiptOption3" value="option3">
          <label class="form-check-label noto_light" for="receiptOption3">捐贈發票</label>
        </div>

        <div class="e_receipt_info_text noto_light">
          <p>※發票統一捐贈單位為伊甸社會福利基金會</p>
          <p>※依統一發票使用辦法規定：發票一經開立不得任意更改或改開發票</p>
          <p>核准文號：北區國稅北縣三字第1000002660號，電子發票說明</p>
        </div>
        <div class="form-check e_agree_terms">
          <input class="form-check-input e_agree_terms_checkbox" type="checkbox" value="" id="agreeTerms">
          <label class="form-check-label noto_light e_agree_terms_text" for="agreeTerms">
            我同意接<a href="">Pastania服務條款</a>和<a href="">隱私權政策</a>
          </label>

        </div>

        <!--      未勾選同意的alert         -->
        <small class="noto_light e_agree_terms_alert">
          請閱讀並勾選同意服務條款及隱私權政策
        </small>
      </div>

      <!--  btn  -->
      <div class="e_cart_btn container">
        <a href="cart.php" class="e_btn_outline noto_light">上 一 步</a>
        <button class="e_btn noto_light js-submit" type="submit">下 一 步</button>
      </div>
    </form>
  </div>


  <script>


  $(document).ready(function() {

    $('.js-submit').prop('disabled', true);
    $('.js-submit').css('opacity', 0.25);

    $('.e_agree_terms_checkbox').on('change', function() {
      if ($(this).prop('checked')) {
        $('.js-submit').prop('disabled', false);
        $('.js-submit').css('opacity', 1);
      } else {
        $('.js-submit').prop('disabled', true);
        $('.js-submit').css('opacity', 0.25);
      }
    });

    $('.js-login').on('click', function(e) {
      e.preventDefault();

      $('.bd-example-modal-lg').modal('show');

      return false;
    });

    $('.e_first_order_delivery_info').hide();

    if ($('.js-user-id').val() == '') {
      $('.e_receipt_info').hide();
    }

    $('.js-first-order').on('click', function(e) {
      e.preventDefault();

      $('.e_first_order_delivery_info').slideDown('fast');
      $('.e_receipt_info').slideDown('fast');

      return false;
    });

    $('.js-auto-checkbox').on('change', function() {
      if ($(this).prop('checked')) {
        $('.js-auto').each(function() {
          var value = $(this).val();
          // Get the next input
          $(this).next('.js-autofill').val(value);
        });
      } else {
        $('.js-autofill').val('');
      }
    });
  });

      var x, i, j, selElmnt, a, b, c;
      /*look for any elements with the class "e_custom_select":*/
      x = document.getElementsByClassName("e_custom_select");
      for (i = 0; i < x.length; i++) {
          selElmnt = x[i].getElementsByTagName("select")[0];
          /*for each element, create a new DIV that will act as the selected item:*/
          a = document.createElement("DIV");
          a.setAttribute("class", "select-selected");
          a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
          x[i].appendChild(a);
          /*for each element, create a new DIV that will contain the option list:*/
          b = document.createElement("DIV");
          b.setAttribute("class", "select-items select-hide");
          for (j = 1; j < selElmnt.length; j++) {
              /*for each option in the original select element,
               create a new DIV that will act as an option item:*/
              c = document.createElement("DIV");
              c.innerHTML = selElmnt.options[j].innerHTML;
              c.addEventListener("click", function (e) {
                  /*when an item is clicked, update the original select box,
                   and the selected item:*/
                  var y, i, k, s, h;
                  s = this.parentNode.parentNode.getElementsByTagName("select")[0];
                  h = this.parentNode.previousSibling;
                  for (i = 0; i < s.length; i++) {
                      if (s.options[i].innerHTML == this.innerHTML) {
                          s.selectedIndex = i;
                          h.innerHTML = this.innerHTML;
                          y = this.parentNode.getElementsByClassName("same-as-selected");
                          for (k = 0; k < y.length; k++) {
                              y[k].removeAttribute("class");
                          }
                          this.setAttribute("class", "same-as-selected");
                          break;
                      }
                  }
                  h.click();
              });
              b.appendChild(c);
          }
          x[i].appendChild(b);
          a.addEventListener("click", function (e) {
              /*when the select box is clicked, close any other select boxes,
               and open/close the current select box:*/
              e.stopPropagation();
              closeAllSelect(this);
              this.nextSibling.classList.toggle("select-hide");
              this.classList.toggle("select-arrow-active");
          });
      }

      function closeAllSelect(elmnt) {
          /*a function that will close all select boxes in the document,
           except the current select box:*/
          var x, y, i, arrNo = [];
          x = document.getElementsByClassName("select-items");
          y = document.getElementsByClassName("select-selected");
          for (i = 0; i < y.length; i++) {
              if (elmnt == y[i]) {
                  arrNo.push(i)
              } else {
                  y[i].classList.remove("select-arrow-active");
              }
          }
          for (i = 0; i < x.length; i++) {
              if (arrNo.indexOf(i)) {
                  x[i].classList.add("select-hide");
              }
          }
      }

      /*if the user clicks anywhere outside the select box,
       then close all select boxes:*/
      document.addEventListener("click", closeAllSelect);
  </script>


  </body>

<?php include __DIR__ . '/__html_foot.php' ?>
