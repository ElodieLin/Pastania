<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Pastania<?= isset($page_title) ? (' - ' . $page_title) : '' ?></title>

  <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

  <link rel="stylesheet" href="./vendor/owlCarousel/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="./vendor/owlCarousel/assets/owl.theme.default.min.css">

  <script src="./js/jquery-3.3.1.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
          integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
          crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
          integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
          crossorigin="anonymous"></script>

  <script src="./vendor/owlCarousel/owl.carousel.min.js"></script>
  <script src="./js/zipcode.js"></script>

  <!-- <script src="./bootstrap/js/bootstrap.js"></script> -->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <link rel="stylesheet" href="css/reset.css">
  <link href="https://fonts.googleapis.com/css?family=Arya|Reem+Kufi" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Noto+Sans+TC:100,300,400,500,700" rel="stylesheet">
  <!-- sweet alert -->
  <!-- wow -->
  <script type="text/javascript" src="./js/wow.min.js"></script>
  <!-- wow -->

  <!-- wheel -->
  <link rel="stylesheet" href="./css/clock.css">
  <link rel="stylesheet" href="./css/pre.css">
  <script type="text/javascript" src="./js/clock.js"></script>
  <script type="text/javascript" src="./js/jQueryRotate.js"></script>
  <script type="text/javascript" src="./js/jquery.easing.1.3.js"></script>
  <!-- wheel -->
  <!-- aos動畫特效設定 -->
  <script src="./js/aos.js"></script>
  <!-- aos動畫特效設定 -->
  <!-- favicon -->
  <link rel="apple-touch-icon" sizes="57x57" href="img/favicon.ico/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="img/favicon.ico/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="img/favicon.ico/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="img/favicon.ico/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="img/favicon.ico/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="img/favicon.ico/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="img/favicon.ico/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="img/favicon.ico/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="img/favicon.ico/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192" href="img/favicon.ico/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="img/favicon.ico/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="img/favicon.ico/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="img/favicon.ico/favicon-16x16.png">
  <link rel="manifest" href="img/favicon.ico/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="img/favicon.ico/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">


  <style>
    @media screen  and (max-width: 700px){
      .pre_wrap{
        display: none;
      }
    }
  </style>


</head>
<body>
<div class="pre_wrap">
  <div class="btn_open_wheel"><img src="img/pages/prelanding/drawer.svg" alt="" class="open_wheel"></div>
  <div class="pre_bg">
    <div class="r_intro">
      <img class="e_wheat" src="img/pages/prelanding/pre_page_wheat.svg" alt="">
      <h2>沒有頭緒？</h2>
      <p class="noto_light e_subtitle">試試幸運轉盤，或許會有意想不到的收穫</p>

      <div class="d-flex pre_btn_wrap">

        <!-- btn按了之後 文字會變成再一次 -->
        <button id="rotate_btn" class="pre_btn_outline noto_light">開 始 / 再一次</button>
        <a href="javascript:" class="noto_light skip close_wheel">跳 過</a>
      </div>
    </div>

    <img src="img/pages/prelanding/wheel_line.svg" alt="" class="r_wheel_line">

    <!--<div style="left: 100%; margin-left: -400px;">-->
    <div id="spin_wheel_wrap">
    </div>
    <!--</div>-->
  </div>
</div>
<script>
    $(document).ready(function () {
        var stop_angle = [0, 72, 144, 216, 288];
        var wheel_status = 0;
        $(function () {
            var props = [
                '<div class="r_wheel"><div class="r_wheel_warp"><div class="r_wheel_box"><div class="r_wheel_box_in"><p class="en_font r_abs r_wheel_f_n">1</p><h3 class="en_font r_abs r_wheel_f_p">Long Pasta</h3><div class="r_wheel_noodle_box"><img src="img/pages/prelanding/LongPasta.svg" alt="" class="r_abs r_wheel_noodle"></div><a class="en_font r_abs r_wheel_f_g" href="https://www.google.com/">Go</a></div><img src="img/pages/prelanding/pre_page_lid.svg" alt="" class="r_abs r_wheel_lid"><img src="img/pages/prelanding/pre_page_plate.svg" alt="" class="r_abs r_wheel_plate"></div></div></div>',
                '<div class="r_wheel"><div class="r_wheel_warp"><div class="r_wheel_box"><div class="r_wheel_box_in"><p class="en_font r_abs r_wheel_f_n">2</p><h3 class="en_font r_abs r_wheel_f_p">Short Pasta</h3><div class="r_wheel_noodle_box"><img src="img/pages/prelanding/ShortPasta.svg" alt="" class="r_abs r_wheel_noodle"></div><a class="en_font r_abs r_wheel_f_g" href="https://www.google.com/">Go</a></div><img src="img/pages/prelanding/pre_page_lid.svg" alt="" class="r_abs r_wheel_lid"><img src="img/pages/prelanding/pre_page_plate.svg" alt="" class="r_abs r_wheel_plate"></div></div></div>',
                '<div class="r_wheel"><div class="r_wheel_warp"><div class="r_wheel_box"><div class="r_wheel_box_in"><p class="en_font r_abs r_wheel_f_n">3</p><h3 class="en_font r_abs r_wheel_f_p">Minute Pasta</h3><div class="r_wheel_noodle_box"><img src="img/pages/prelanding/MinutePasta.svg" alt="" class="r_abs r_wheel_noodle"></div><a class="en_font r_abs r_wheel_f_g" href="https://www.google.com/">Go</a></div><img src="img/pages/prelanding/pre_page_lid.svg" alt="" class="r_abs r_wheel_lid"><img src="img/pages/prelanding/pre_page_plate.svg" alt="" class="r_abs r_wheel_plate"></div></div></div>',
                '<div class="r_wheel"><div class="r_wheel_warp"><div class="r_wheel_box"><div class="r_wheel_box_in"><p class="en_font r_abs r_wheel_f_n">4</p><h3 class="en_font r_abs r_wheel_f_p">Stuffed Pasta</h3><div class="r_wheel_noodle_box"><img src="img/pages/prelanding/StuffedPasta.svg" alt="" class="r_abs r_wheel_noodle"></div><a class="en_font r_abs r_wheel_f_g" href="https://www.google.com/">Go</a></div><img src="img/pages/prelanding/pre_page_lid.svg" alt="" class="r_abs r_wheel_lid"><img src="img/pages/prelanding/pre_page_plate.svg" alt="" class="r_abs r_wheel_plate"></div></div></div>',
                '<div class="r_wheel"><div class="r_wheel_warp"><div class="r_wheel_box"><div class="r_wheel_box_in"><p class="en_font r_abs r_wheel_f_n">5</p><h3 class="en_font r_abs r_wheel_f_p">Speciaity Pasta</h3><div class="r_wheel_noodle_box"><img src="img/pages/prelanding/SpeciaityPasta.svg" alt="" class="r_abs r_wheel_noodle"></div><a class="en_font r_abs r_wheel_f_g" href="https://www.google.com/">Go</a></div><img src="img/pages/prelanding/pre_page_lid.svg" alt="" class="r_abs r_wheel_lid"><img src="img/pages/prelanding/pre_page_plate.svg" alt="" class="r_abs r_wheel_plate"></div></div></div>'
            ];

            $('#spin_wheel_wrap').wheel({
                type: 'plate',
                props: 5,
                // rotateProps: false,
                callback: function () {
                    $('.wheel-prop').each(function (i) {
                        $(this).html(props[i]);
                    });
                }
            });
            $('#rotate_btn').bind('click', wheel_spin); //啟動按鈕

            $('.btn_open_wheel').click(function () {
                $('.pre_wrap').addClass('open');
            });

            $('.close_wheel').click(function () {
                $('.pre_wrap').removeClass('open');
            });
        });

        function wheel_spin() {
            //轉盤狀態
            if (wheel_status === 1) {
                $(".r_wheel_lid").removeClass('open').addClass('close');
                $(".r_wheel_box_in").removeClass('grow').addClass('shrink');
                setTimeout(function () {
                    spin();
                }, 360);
            } else {
                spin();
            }

            function spin() {
                $('.wheel-wrap').rotate({
                    duration: 2000,
                    angle: 0,
                    animateTo: 720 + stop_angle[Math.floor(Math.random() * 5)],
                    easing: $.easing.easeOutQuart,
                    callback: function () {
                        $(".r_wheel_lid").removeClass('close').addClass('open');
                        $(".r_wheel_box_in").removeClass('shrink').addClass('grow');
                        wheel_status = 1;
                    }
                });
            }

        }
    });
</script>

