
<?php include __DIR__. '/__html_head.php' ?>
<?php include __DIR__. '/__navbar.php' ?>

<head>
    
    <link rel="stylesheet" href="css/animate.css">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous"> -->
    
    <link rel="stylesheet" href="css/recipes_cate.css">
    
       
</head>

<body>
    <section>
        <!------------ 以下為title區域 ------------>
        <div class="container-fluid">
            <div class="w_recipes_title">
                <p class="noto_regular  w_recipes_title_line">食譜種類</p>
                <p class="en_font title_recipes">Recipes</p>
            </div>
        </div>
        <!------------ 以上為title區域 ------------>

        <div class="w_recipes_wrapper">



            <div class="w_recipes_word_up  w_recipes_transition">
                <!------------ 週末派對連結 ------------>
               

                <a href="recipe_list.php?category=1">
                    <img src="img/pages/others/recipes_party.png" alt="">
                    <p class="w_recipes_en_font_small_b">Party</p>
                    <p class="w_recipes_noto_regular_small_b">週末派對</p>
                </a>

                
            </div>


            <div class="w_recipes_word_down  w_recipes_transition">
                <!------------ 特殊節慶連結 ------------>
                <a href="recipe_list.php?category=2">
                    <img src="img/pages/others/recipes_occasion.png" alt="">
                    <p class="w_recipes_en_font_small_b">Occasion</p>
                    <p class="w_recipes_noto_regular_small_b">特殊節慶</p>
                </a>
            </div>


            <div class="w_recipes_word_up  w_recipes_transition">
                <!------------ 健康輕食連結 ------------>
                <a href="recipe_list.php?category=3">
                    <img src="img/pages/others/recipes_light.png" alt="">
                    <p class="w_recipes_en_font_small_b">Light</p>
                    <p class="w_recipes_noto_regular_small_b">健康輕食</p>
                </a>
            </div>


            <div class="w_recipes_word_down  w_recipes_transition">
                <!------------ 開胃前菜連結 ------------>
                <a href="recipe_list.php?category=4">
                    <img src="img/pages/others/recipes_starter.png" alt="">
                    <p class="w_recipes_en_font_small_b">Starter</p>
                    <p class="w_recipes_noto_regular_small_b">開胃前菜</p>
                </a>
            </div>


            <div class="w_recipes_word_up  w_recipes_transition">
                <!------------ 異國風情連結 ------------>
                <a href="recipe_list.php?category=5">
                    <img src="img/pages/others/recipes_typical.png" alt="">
                    <p class="w_recipes_en_font_small_b">Typical</p>
                    <p class="w_recipes_noto_regular_small_b">異國風情</p>
                </a>
            </div>
        </div>


    </section>
    </div>



    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous">
        </script>


    <script>

    </script>
</body>
<?php include __DIR__. '/__html_foot.php' ?>
