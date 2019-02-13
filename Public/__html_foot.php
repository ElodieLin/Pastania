<style>
  /* 模組 */

  .noto_thin {
    font-family: 'Noto Sans TC';
    font-weight: 100;
    letter-spacing: 2px;
  }

  .noto_regular {
    font-family: 'Noto Sans TC';
    letter-spacing: 2px;
    font-size: 2rem;
    color: #5C7880;

  }

  /* 以上是模組 */


  .ar_turn {
    transform: rotate(90deg);

  }

  footer {
    background: #F6D169;
    margin-top: 75px;
    padding-top: 100px;
    padding-bottom: 20px;
  }

  .e_footer_container {
    max-width: 90%;
    margin: 0 auto;
  }

  .footer_wrapper {
    display: flex;
    flex-direction: row-reverse;
    justify-content: space-between;
    padding-bottom: 25px;
  }


  .contactUs {
    width: 450px;
  }


  /* ---------------以下是 SNS & 訂閱連結部分------------------- */


  .SNSicon_wrapper {
    width: 220px;
    display: flex;
    justify-content: space-between;
    margin-bottom: 50px;
  }

  .SNSicon svg {
    fill: #D3554A;
  }

  :focus {
    outline: none;
  }

  a svg:hover {
    fill: rgba(230, 114, 72, 0.6);
  }

  .subscribe {
    max-width: 450px;
    margin: 0;
    position: relative;
  }

  .subscribe .send_btn {
    max-width: 50px;
    fill: #D3554A;
    margin: 5px;
    position: absolute;
    border: none;
    padding: 0;
    right: 2%;
    bottom: 10%;
  }

  .subscribe input[type="text"] {
    font-family: 'Lao MN';
    letter-spacing: 1px;
    color: #D3554A !important;
    width: 100%;
    box-sizing: border-box;
  }

  ::placeholder {
    color: #D3554A;
    font-family: 'Noto Sans TC';
    font-weight: 100;
    letter-spacing: 2px;
    font-size: 1rem;
  }


  input.subscribe_effect:focus::-webkit-input-placeholder {
    color: #EB8C68 !important;
  }


  .subscribe_effect {
    border: 0;
    padding: 7px 0;
    background-color: #F6D169;
    border-bottom: 1px solid #D3554A;
  }

  .subscribe_effect ~ .e_focus_border {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 0;
    height: 2px;
    background-color: #FCA17F;
    transition: 0.4s;
  }

  .subscribe_effect:focus ~ .e_focus_border {
    width: 100%;
    transition: 0.4s;

  }

  input.subscribe_effect::placeholder {
    color: #D3554A !important;
  }

  /* ---------------以下是文字連結部分------------------- */

  .footer_section {
    width: 640px;
    display: flex;
    justify-content: space-between;
  }


  .footer_section ul {
    padding-left: 0;
    padding-right: 30px;
  }


  .footer_section ul li {
    list-style: none;
    padding-bottom: 5px;
  }

  .footer_section a {
    font-size: 1.2rem;
    color: #D3554A;
  }

  .footer_section ul .section_title {
    padding-bottom: 20px;
    color: #D3554A;
    font-size: 1.3rem;
    letter-spacing: 1px;
  }

  .footer_section ul .section_title a {
    font-size: 1.3rem;
    letter-spacing: 2px;
  }

  .footer_section ul li a:hover {
    text-decoration: none;
  }


  .sub_footer {
    display: none;
  }


  .e_dropdown {
    position: relative;
  }

  .e_arrow_icon {
    display: none;
  }


  .none_display_w {
    display: none;

  }


  .copyright_section {
    text-align: center;
    color: #D3554A;
    font-size: 1rem;
    padding-bottom: 5px;
  }


  @media (max-width: 575.98px) {
    footer {
      padding-bottom: 90px;
    }

    .e_footer_container {
      max-width: 100%;
    }

    .footer_wrapper {
      flex-direction: column;
    }

    .SNSicon_wrapper {
      width: 300px;
      margin: 0 auto;
      margin-bottom: 50px;
    }

    .subscribe {
      max-width: 100%;
    }

    .contactUs {
      max-width: 90%;
      margin: 0 auto;
      margin-bottom: 50px;
    }

    ::placeholder {
      font-size: 14pt;
    }

    .footer_section {
      display: block;
      max-width: 100%;
    }

    .footer_section ul {
      padding: 0;
      margin-bottom: 0;
    }

    .e_arrow_icon {
      display: block;
      position: absolute;
      top: 14px;
      right: 22px;
    }

    .footer_section ul li {
      padding-bottom: 0px;
    }

    .footer_section ul .section_title {
      padding-bottom: 0px;
    }

    .footer_section ul .section_title a {
      display: block;
      font-size: 14pt;
      padding: 8px 22px 8px 22px;
      border-bottom: 1px solid #D3554A;
    }

    .border_top {
      border-top: 1px solid #D3554A;
    }

    .section_title .sub_footer li a {
      padding-left: 42px;
    }

    .none_display_m {
      display: none;
    }

    .none_display_w {
      display: block;
    }

    .copyright_section {
      font-size: 1rem;
    }

  }


</style>
<footer>
  <div class="e_footer_container">
    <div class="footer_wrapper">
      <div class="contactUs">
        <div class="SNSicon_wrapper">
          <div class="SNSicon">
            <!-- Generator: Adobe Illustrator 22.1.0, SVG Export Plug-In  -->
            <a href="mailto:pastania@mail.com" target="">
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                   xmlns:xlink="http://www.w3.org/1999/xlink"
                   xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/" x="0px" y="0px"
                   width="50px"
                   height="50px" viewBox="0 0 419 419" style="enable-background:new 0 0 419 419;"
                   xml:space="preserve">
                                    <path d="M315,116H104c-13.4,0-24.3,10.9-24.3,24.3v138.3c0,13.4,10.9,24.3,24.3,24.3h211c13.4,0,24.3-10.9,24.3-24.3V140.3
                                C339.4,126.9,328.4,116,315,116z M323.1,278.7c0,4.5-3.6,8.1-8.1,8.1H104c-4.5,0-8.1-3.6-8.1-8.1V143.8l96.1,83.7
                                c9.4,8.2,25.7,8.2,35.1,0l96.1-83.7v134.9H323.1z M216.4,215.3c-3.7,3.2-10.1,3.2-13.8,0l-95.4-83.1h204.5L216.4,215.3z M209.5,419
                                C94,419,0,325,0,209.5C0,94,94,0,209.5,0C325,0,419,94,419,209.5C419,325,325,419,209.5,419z M209.5,13C101.1,13,13,101.1,13,209.5
                                C13,317.9,101.1,406,209.5,406C317.9,406,406,317.9,406,209.5C406,101.1,317.9,13,209.5,13z"/>
                                </svg>
            </a>
          </div>
          <div class="SNSicon">
            <!-- Generator: Adobe Illustrator 22.1.0, SVG Export Plug-In  -->
            <a href="https://www.instagram.com/" target="_blank">
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                   xmlns:xlink="http://www.w3.org/1999/xlink"
                   xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/" x="0px" y="0px"
                   width="50px"
                   height="50px" viewBox="0 0 419 419" style="enable-background:new 0 0 419 419;"
                   xml:space="preserve">
                                    <path d="M209.5,419C94,419,0,325,0,209.5C0,94,94,0,209.5,0C325,0,419,94,419,209.5C419,325,325,419,209.5,419z M209.5,13
                                C101.1,13,13,101.1,13,209.5C13,317.9,101.1,406,209.5,406C317.9,406,406,317.9,406,209.5C406,101.1,317.9,13,209.5,13z
                                M296.2,102.8H122.8c-11,0-20,9-20,20v173.4c0,11,9,20,20,20h173.4c11,0,20-9,20-20V122.8C316.2,111.7,307.3,102.8,296.2,102.8z
                                M248.7,135.4c0-7.3,6-13.3,13.3-13.3h16.7c7.3,0,13.3,6,13.3,13.3v20.2c0,7.3-6,13.3-13.3,13.3H262c-7.3,0-13.3-6-13.3-13.3V135.4z
                                M209.5,162.4c25.9,0,47.1,21.1,47.1,47.1s-21.1,47.1-47.1,47.1s-47.1-21.1-47.1-47.1S183.5,162.4,209.5,162.4z M296.2,302.9H122.8
                                c-3.7,0-6.7-3-6.7-6.7V193.3h6.7h22.1h6.5c-1.5,5.2-2.3,10.6-2.3,16.2c0,33.3,27.1,60.4,60.4,60.4s60.4-27.1,60.4-60.4
                                c0-5.6-0.9-11-2.3-16.2h6.5h22.1h6.7v102.9C302.9,299.9,299.9,302.9,296.2,302.9z"/>
                                </svg>
            </a>
          </div>
          <div class="SNSicon">
            <!-- Generator: Adobe Illustrator 22.1.0, SVG Export Plug-In  -->
            <a href="https://www.facebook.com/" target="_blank">
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                   xmlns:xlink="http://www.w3.org/1999/xlink"
                   xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/" x="0px" y="0px"
                   width="50px"
                   height="50px" viewBox="0 0 419 419" style="enable-background:new 0 0 419 419;"
                   xml:space="preserve">
                                    <path d="M209.5,419C94,419,0,325,0,209.5C0,94,94,0,209.5,0C325,0,419,94,419,209.5C419,325,325,419,209.5,419z M209.5,13
                                C101.1,13,13,101.1,13,209.5C13,317.9,101.1,406,209.5,406C317.9,406,406,317.9,406,209.5C406,101.1,317.9,13,209.5,13z
                                 M314.6,101.9h-13c-36.2,0-65.7,29.5-65.7,65.7v27.7h-22.3c-2.3,0-4.2,1.9-4.2,4.2v33.2c0,2.3,1.9,4.2,4.2,4.2h22.3v101.7
                                c0,2.3,1.9,4.2,4.2,4.2h33.2c2.3,0,4.2-1.9,4.2-4.2V236.8h33c2.3,0,4.2-1.9,4.2-4.2v-33.2c0-2.3-1.9-4.2-4.2-4.2h-33v-27.7
                                c0-13.3,10.8-24.2,24.2-24.2h13c2.3,0,4.2-1.9,4.2-4.2v-33.2C318.8,103.8,316.9,101.9,314.6,101.9z"/>
                                </svg>
            </a>
          </div>
        </div>
        <div class="subscribe">
          <div type="" class="send_btn btn ">
            <!-- Generator: Adobe Illustrator 22.1.0, SVG Export Plug-In  -->
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                 xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/" x="0px" y="0px" width="37px"
                 height="37px" viewBox="0 0 418 418" style="enable-background:new 0 0 418 418;"
                 xml:space="preserve">
                                <path d="M209,418C93.8,418,0,324.2,0,209S93.8,0,209,0s209,93.8,209,209S324.2,418,209,418z M209,12C100.4,12,12,100.4,12,209
                                s88.4,197,197,197s197-88.4,197-197S317.6,12,209,12z M348.4,212c0-1-0.2-1.9-0.6-2.7c-0.3-0.8-0.8-1.5-1.5-2.1l-59.5-53.1
                                c-2.5-2.2-6.3-2-8.5,0.5s-2,6.3,0.5,8.5l48.1,42.9H80.4c-3.3,0-6,2.7-6,6s2.7,6,6,6h246.8l-48.4,43.2c-2.5,2.2-2.7,6-0.5,8.5
                                c1.2,1.3,2.8,2,4.5,2c1.4,0,2.8-0.5,4-1.5l59.5-53.1c1-0.9,1.6-2.1,1.9-3.3C348.3,213.2,348.4,212.6,348.4,212z"/>
                            </svg>
          </div>
          
        <!-- input email to subscribe -->
          <input class="subscribe_effect" type="text" placeholder=" 輸入電子信箱訂閱">
          <span class="e_focus_border"></span>
        </div>

      </div>
      <div class="footer_section">
        <ul>
          <li class="section_title">

            <a class="border_top e_dropdown noto_regular">
              關於我們
              <i class="fas fa-angle-right e_arrow_icon transition"></i></a>

            <ul class="sub_footer">
              <li class="noto_thin  none_display_w"><a href="about.php">品牌介紹</a></li>
              <li class="noto_thin  none_display_w"><a href="pasta_map.php">義麵地圖</a></li>
            </ul>

          </li>
          <li class="noto_thin none_display_m"><a href="about.php">品牌介紹</a></li>
          <li class="noto_thin none_display_m"><a href="pasta_map.php">義麵地圖</a></li>
        </ul>

        <ul>
          <li class="section_title">
            <a class="e_dropdown noto_regular">服務<i class="fas fa-angle-right e_arrow_icon transition"></i></a>

            <ul class="sub_footer">
              <li class="noto_thin  none_display_w"><a href="service_privacy.php">購買流程</a></li>
              <li class="noto_thin  none_display_w"><a href="service_privacy.php">配送流程</a></li>
              <li class="noto_thin  none_display_w"><a href="service_privacy.php">退換貨服務</a></li>
              <li class="noto_thin  none_display_w"><a href="service_privacy.php">Q&A</a></li>
            </ul>

          </li>
          <li class="noto_thin none_display_m"><a href="service_privacy.php">購買流程</a></li>
          <li class="noto_thin none_display_m"><a href="service_privacy.php">配送流程</a></li>
          <li class="noto_thin none_display_m"><a href="service_privacy.php">退換貨服務</a></li>
          <li class="noto_thin none_display_m"><a href="service_privacy.php">Q&A</a></li>
        </ul>

        <ul>
          <li class="section_title">
            <a class="e_dropdown noto_regular">政策與規範<i
                      class="fas fa-angle-right e_arrow_icon transition"></i></a>
            <ul class="sub_footer ">
              <li class="noto_thin  none_display_w"><a href="service_privacy.php">企業責任</a></li>
              <li class="noto_thin  none_display_w"><a href="service_privacy.php">隱私權保護</a></li>
            </ul>

          </li>
          <li class="noto_thin none_display_m"><a href="service_privacy.php">企業責任</a></li>
          <li class="noto_thin none_display_m"><a href="service_privacy.php">隱私權保護</a></li>
        </ul>

      </div>
    </div>
    <div class="copyright_section py-3">
                <span class="noto_thin ">
                    電話：02-8941668
                    <br class="none_display_w">
                    <span class="none_display_m">｜</span>
                    營業時間: 週一至週五10:00-18:00
                    <br class="none_display_w">
                    <span class="none_display_m">｜</span>
                    地址: 236新北市土城區延吉街29號
                </span>
    </div>
    <div class="copyright_section">
      <span class="noto_thin">2018&copy; Pastania. All Rights Revered</span>
    </div>

  </div>
</footer>
<script>
    $(".footer_section a").click(function () {
        $(".sub_footer").slideUp(500);
        if ($(this).next(".sub_footer").is(':hidden')) {
            $(this).next(".sub_footer").slideDown(500);
            $(".section_title").find('i').removeClass("ar_turn");
        }
    });

    $(".section_title").click(function () {
        $(this).find('i').toggleClass("ar_turn");
    });
</script>
</body>
</html>
