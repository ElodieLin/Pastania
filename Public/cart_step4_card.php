<?php

session_start();

?>

<?php include __DIR__ . '/__html_head.php' ?>
<?php include __DIR__ . '/__navbar.php' ?>



    <link rel="stylesheet" href="css/cart_step4_card.css">



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
        <p class="noto_light ">購買清單</p>
        <hr class="e_cart_hr">

        <div class="e_cart_title e_none_display_m">
            <ul class="noto_light py-2">
                <div class="d_flex">
                    <li class="e_img_w"> </li>
                    <li class="e_item_w">項 目</li>
                </div>
                <li class="e_w">單 價</li>
                <li class="e_w">數 量</li>
                <li class="e_w">小 計</li>
            </ul>
        </div>



        <!-- 購物車商品 start -->
        <div class="e_cart_items_outerwrapper">

          <?php include_once('order_cart.php'); ?>

        </div>
        <!-- 購物車有商品 end -->

        <!-- 選擇付款方式 end-->


        <!-- 刷卡資訊 Card info-->
        <div class="card noto_light e_card_payment_info">
            <div class="card-body e_card_payment_info_body">

                    <div class="form-group form-inline">
                        <label for="cardNumber" class="col-3  ">信用卡號*</label>
                        <div class="card_number">
                            <input type="text" class="form-control e_col_1" maxlength="4">
                            <input type="text" class="form-control e_col_1 " maxlength="4">
                            <input type="text" class="form-control e_col_1 " maxlength="4">
                            <input type="text" class="form-control e_col_1 e_nm" maxlength="4">
                        </div>
                        <!-- alert -->
                        <small id="" class="form-text e_order_info_alert col-4">請輸入有效卡號</small>
                    </div>


                    <div class="form-group form-inline ">
                        <label for="cardHolder" class="col-3 ">持卡人*</label>
                        <input type="text" class="form-control col-4">

                        <!-- alert -->
                        <small id="" class="form-text e_order_info_alert col-4">請輸入持卡人姓名</small>
                    </div>


                    <div class=" form-group form-inline">
                        <label for="expiryDate" class="form-group col-3 ">有效年月*</label>
                        <div class="form-inline e_select_outterwrap">

                            <div class="e_select_wrap e_area_select">
                                <div class="e_custom_select form-control col-md-3 e_margin_b noto_light">
                                    <select id="" class="">
                                        <option selected>請選擇</option>
                                        <option>2019</option>
                                        <option>2020</option>
                                        <option>2021</option>
                                        <option>2022</option>
                                        <option>2023</option>
                                        <option>2024</option>
                                        <option>2025</option>
                                    </select>
                                </div>
                                <span class="mx-2">年</span>
                                <div class="e_custom_select form-control col-md-3 e_margin_b noto_light ">
                                    <select id="" class="" size="5">
                                        <option selected>請選擇</option>
                                        <option>01</option>
                                        <option>02</option>
                                        <option>03</option>
                                        <option>04</option>
                                        <option>05</option>
                                        <option>06</option>
                                        <option>07</option>
                                        <option>08</option>
                                        <option>09</option>
                                        <option>10</option>
                                        <option>11</option>
                                        <option>12</option>
                                    </select>
                                </div>
                                <span class="mx-2">月</span>
                            </div>
                            <!-- alert -->
                            <small id="" class="form-text e_order_info_alert col-4">請輸入正確有效年月</small>
                        </div>
                    </div>


                    <div class="form-group form-inline ">
                        <label for="CVC" class="col-3 ">卡片背面末三碼*</label>
                        <div class="e_cvc_wrap">
                            <input type="text" class="form-control e_col_2" maxlength="3">
                        </div>

                        <!-- alert -->
                        <small id="" class="form-text e_order_info_alert col-4">請輸入正確末三碼</small>
                    </div>
                </form>

                <div class="e_card_payment_notice">
                    <label for="notice" class="col-3 e_notice">注意事項</label>
                    <ul class="notice_list">
                        <li>請確認您的訂單資料正確，再輸入您的信用卡資訊。</li>
                        <li>本頁面已使用 256-bit SSL 安全加密機制。</li>
                        <li>為確保網路交易安全，您同意本公司得就此筆交易向發卡銀行、收單銀行及持卡人核對是否屬實。</li>
                        <li>若您同意以上約定付款程序，請按「送出」以完成本次交易。</li>
                        <li>非經持卡人同意，如有冒用他人卡片盜刷之行為，刑法最高判五年有期徒刑。</li>
                        <li>信用卡成功交易之否認，如經判定為本人或授權刷卡的行為，相關損失、費用須自行負擔 。</li>
                    </ul>
                </div>

            </div>
        </div>


        <!-- 確認配送資訊 Delivery info -->
        <p class="noto_light ">確認配送資訊</p>
        <hr class="e_cart_hr">

        <div class="alert e_delivery_info_confirm" role="alert">
            <!-- name -->
            <p class="noto_light e_info_confirm">姓名： <span><?= $_SESSION['user']['nickname'] ?></span> </p>
            <!-- address -->
            <p class="noto_light e_info_confirm">地址：<span><?= $_SESSION['user']['postcode'] ?><?= $_SESSION['user']['city'] ?><?= $_SESSION['user']['area'] ?><?= $_SESSION['user']['address'] ?></span></p>
            <!-- mobile -->
            <p class="noto_light e_info_confirm">手機：<span><?= $_SESSION['user']['mobile'] ?></span></p>
            <!-- delivery time -->
            <p class="noto_light e_info_confirm">配送時間：<span>不指定</span></p>
        </div>



        <div class="">
          <form action="cart_step5.php" method="post" class="e_cart_btn">
            <input type="hidden" name="action" value="order" />
            <button class="e_btn_outline noto_light">上 一 步</button>
            <button class="e_btn noto_light" type="submit">確 認 結 帳</button>
          </form>
        </div>

    </div>
    <script>
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



<?php include __DIR__ . '/__html_foot.php' ?>
