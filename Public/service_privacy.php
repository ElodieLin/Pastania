<?php
if (!isset($_SESSION)) {
    session_start();
}
?>
<?php include __DIR__ . '/__html_head.php' ?>
<?php include __DIR__ . '/__navbar.php' ?>
  <head>

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous"> -->
    <!-- 以下是英文字型 -->
    <title>服務 政策與規範</title>
    <style>

      .re_word {
        font-size: 1.5rem;
        margin-left: -2%;
      }

      .e_container {
        margin: 0 auto;
        overflow: hidden;
        color: #5C7880;
        font-family: 'Lao MN', 'Arya', 'Noto Sans TC';
        margin-top: 76px; /*  */
      }

      .slide_toogle {
        cursor: pointer;
      }

      /* 以下為箭頭變換方向 */

      .ar_turn {
        transform: rotate(0deg) !important;
        transition: .2s;
      }

      /* 以下為服務 */
      .svic {
        max-width: 100%;;

      }

      .sv {
        width: 10%;
        display: block;
        margin: 5% auto;

      }

      h2 {
        font-size: 2rem;
        text-align: center;
      }

      .line {
        margin-top: 10px;
        margin-bottom: 50px;
        border-top: 1px solid #5C7880;
      }


      /* 以下為服務RWD */
      @media (max-width: 575.98px) {
        .sv {
          width: 20%;
        }

        h2 {
          font-size: 1.8rem;
        }
      }

      /* 以下為購買流程 */
      .shop .flex {
        width: 15%;
        height: 15%;
        display: flex;
        justify-content: space-between;
        margin-top: 1%;

      }

      .shop h3 {
        font-size: 1.3rem;
        font-weight: 300;
        letter-spacing: 2px;


      }

      .shop .arrow {
        width: 12%;
        height: 12%;
        transform-origin: center center;
        transform: rotate(-90deg);
        transition: .5s;
        padding-top: 3px;
      }


      .shop .cart {
        width: 7%;
        display: block;
        margin: 0 auto;
        margin-bottom: 5%;

      }

      .hide {

        list-style: none;
      }

      .shop ul {
        font-size: 1.3rem;
        letter-spacing: 2px;
        font-weight: 300;
        margin-left: 0%;
        list-style: disc;
        max-width: 1060px;
        margin: 0 auto;
      }


      /* 以下為購買流程RWD */
      @media (max-width: 1360px) {
        .shop .flex {
          width: 20%;

        }
      }

      @media (max-width: 800px) {
        .shop .flex {
          width: 30%;

        }
      }

      @media (max-width: 575.98px) {
        .shop .flex {
          width: 35%;

        }


        .shop .arrow {
          width: 12%;
          padding-top: 6%;
        }

        .shop .cart {
          width: 15%;
          margin-bottom: 5%;
        }

        .shop ul {
          font-size: 1rem;
        }
      }

      /* 以下為配送流程  */
      .shop .truck {
        width: 7%;
        margin: 0 auto;
        margin-bottom: 5%;
        display: block;
      }

      .shop h4 {
        font-size: 1.5rem;
        letter-spacing: 2px;
        font-weight: 500;
        margin-top: 1%;
        margin-bottom: 1%;
      }

      .shop .tk {
        font-size: 1.3rem;
        letter-spacing: 2px;
        font-weight: 300;
        padding-left: 3%;
      }

      .tk b {
        font-weight: normal;
      }

      .shop .md {
        margin-top: 5%;
        font-weight: 500;
      }

      /* 以下為配送流程RWD  */
      @media (max-width: 575.98px) {
        .shop .truck {
          width: 15%;

        }

        .shop h4 {
          font-size: 1.2rem;
          margin-top: 3%;
          margin-bottom: 3%;
        }

        .shop .tk {
          font-size: 1rem;
          padding-left: 0;
        }


      }

      /* 以下為退換貨服務  */
      .shop .exchange {
        width: 7%;
        display: block;
        margin: 0 auto;
        margin-bottom: 5%;

      }

      .shop .hide2 {
        list-style: none;
        margin-top: 1%;
        padding-left: 0;
      }

      .shop .ontime {
        list-style: none;
        font-size: 1.3rem;
        letter-spacing: 2px;
        font-weight: 300;
        margin-left: -40px;
      }

      /* 以下為退換貨服務RWD  */
      @media (max-width: 575.98px) {
        .shop .exchange {
          width: 15%;
        }

        .shop .hide2 {
          margin-top: 5%;
          padding-left: 8px;
        }

        .hide2 li {
          list-style: none !important;
        }

        .shop .ontime {
          font-size: 0.8rem;

        }
      }

      /* 以下為QA */
      .shop .qa {
        width: 7%;
        display: block;
        margin: 0 auto;
        margin-bottom: 5%;

      }

      .shop .re {
        font-weight: normal;
        margin-bottom: 2%;
      }

      .shop .qq {
        margin-top: 0%;
        list-style: none;
        /* margin-left: -40px; */
      }

      .shop .si {
        margin-top: 5%;
        font-weight: normal;
        margin-bottom: 2%;
      }

      /* 以下為QA RWD */
      @media (max-width: 575.98px) {
        .shop .qa {
          width: 15%;
        }

        .list_none {
          list-style: none !important;
        }

        .shop .re {
          font-weight: normal;
          margin-top: 3%;
        }

        .shop .qq {
          margin-top: 3%;
          list-style: none;
        }

        .shop .si {
          margin-top: 5%;
        }
      }

      /* 以下為政策規範 */


      .s_p {
        max-width: 100%
      }

      .pc {
        width: 9%;
        display: block;
        margin: 5% auto;
        margin-top: 130px;

      }

      .policy {
        margin-bottom: 20%;
      }


      /* 以下為政策規範RWD */
      @media (max-width: 575.98px) {
        .pc {
          width: 15%;
        }

      }

      /* 以下為企業責任 */
      .csr .flex {
        width: 15%;
        height: 15%;
        display: flex;
        justify-content: space-between;
        margin-top: 1%;

      }

      .csr h3 {
        font-size: 1.3rem;
        font-weight: 300;
        letter-spacing: 2px;


      }

      .csr .arrow {
        width: 12%;
        height: 12%;
        transform-origin: center center;
        transform: rotate(-90deg);
        transition: .8s;
        padding-top: 3px;
      }

      .csr .rspb {
        width: 7%;
        display: block;
        margin: 0 auto;
        margin-bottom: 5%;
      }

      .csr ul {
        font-size: 1.2rem;
        letter-spacing: 2px;
        font-weight: 300;

        margin-left: 0;
        padding-left: 0;
        list-style: none;
      }

      /* 以下為企業責任RWD */
      @media (max-width: 1360px) {
        .csr .flex {
          width: 20%;

        }
      }

      @media (max-width: 800px) {
        .csr .flex {
          width: 30%;
        }
      }

      @media (max-width: 575.98px) {
        .csr .flex {
          width: 35%;
          margin-top: 1%;

        }

        .csr h3 {
          font-size: 1.3rem;

        }

        .csr .arrow {
          height: 12%;
          padding-top: 6%;

        }

        .csr .rspb {
          width: 15%;
        }

        .csr ul {
          font-size: 1rem;

        }


      }

      /* 以下為隱私權保護  */
      .e_bold {
        font-weight: 400;
        margin-bottom: 8px;
        margin-top: 20px;
        font-size: 1.5rem;
      }

      .csr .pri {
        width: 7%;
        display: block;
        margin: 0 auto;
        margin-bottom: 5%;
      }

      .csr .but {
        margin-left: 25px;
        margin-top: 0;
        list-style: initial;
      }

      .csr .ar3 {
        width: 24px;
        margin-left: 167px;
        margin-top: -3px;
      }

      /* 以下為隱私權保護RWD */
      @media (max-width: 575.98px) {

        .e_bold {
          font-size: 1.2rem;
        }

        .csr .pri {
          width: 15%;
          margin: 0 auto;
          margin-bottom: 5%;
        }

        .csr .but {
          margin-left: 18px;
          margin-top: 0;
          list-style: initial;
        }

        .csr .arrow {
          height: 12%;

        }

        .toogle {
          max-width: 300px;
          margin: 0 auto;
        }


        .shop ul li {
          list-style: disc;
          max-width: 300px;
          margin: 0 auto;
          padding-bottom: 7px;
        }

        .shop ul li:first-child {
          list-style: none;
        }
        .re_word {
          font-size: 1.2rem;
          margin-left: 0;
        }

      }



      /* 展開收合效果 */
      .flex + .toogle {
        display: none;
        margin-top: 10px;
      }
    </style>

  </head>

  <body>
  <div class="section e_container">
    <div class="service container">
      <div class="svic">
        <img class="sv" src="img/icon/service.svg" alt="">
        <h2>服務</h2>
      </div>
      <div class="line"></div>
      <div class="shop">
        <div class="slide_toogle flex">
          <h3>購買流程 </h3>
          <img class="arrow" src="img/icon/chevron_down.svg" alt="">
        </div>
        <div class="toogle">
          <ul>
            <li class="hide">
              <img class=" cart " src="img/icon/shopping_cart.svg" alt="">
            </li>
            <li>
              商品加入購物車但未完成結帳前並無保留商品庫存功能，商品庫存分配將以結帳順序為依據。
            </li>
            <li>
              選擇門市取貨付款，包裹送達後隔日下午會簡訊通知領取。
            </li>
            <li>
              對帳後三個工作天內會開始寄送（遇例假日則順延）。例假日與國定假日休息不出貨。
            </li>
            <li>
              選擇門市取貨付款請務必攜帶訂購人身分證件，避免領取包裹產生爭議。
            </li>
            <li>
              當Pastania包裹出貨完成未被領取或拒收退回(出貨後7日計算)，該訂購帳號若達三次將無法使用此配送方式。
            </li>
            <li>
              國內配送時間約2-3個工作天，若您遲遲未收到商品，請盡速與客服連絡。
            </li>
            <li>
              提醒您，若您無故或惡意三次(含)以上違反Pastania制定訂購與退貨相關規則，本公司有權暫停您的帳號並拒絕您使用本服務，同時列為交易黑名單，請您留意。
            </li>
          </ul>
        </div>
        <div class="slide_toogle flex">
          <h3>配送流程</h3>
          <img class="arrow" src="img/icon/chevron_down.svg" alt="">
        </div>
        <div class="toogle">
          <img class="truck" src="img/icon/delivery_truck.svg" alt="">
          <h4>

            Pastania提供兩種配送方式，請依您的需求選擇：</h4>
          <p class="tk">
            <b> 超商店到店：</b> 目前提供7-11的店到店物流，大部分超商門市會在出貨後次兩日內到貨，少部分偏遠門市會晚一天。<br>
            <b> 宅配：</b> 出貨後次日會配送到您指定的地址，離島則會晚個兩天。
          </p>
          <h4 class="md">配送時間：</h4>
          <p class="tk">
            每日訂購時間截止點為早上14:00前，超過表單內所指示訂單時間訂購視為隔日訂單。<br>
            如遇包裹量較多，訂單將延遲1~2日出貨，實際出貨時間將以您收到的出貨通知E-mail為準，敬請見諒。
          </p>
          <h4 class="md">配送運費：</h4>
          <p class="tk">
            超商取貨運費為60元，宅配為80元。<br>
            商品單筆訂單滿1,000元，超商取貨和宅配免運費。
          </p>
        </div>
        <div class="slide_toogle flex">
          <h3> 退換貨服務 </h3>
          <img class="arrow " src="img/icon/chevron_down.svg" alt="">
        </div>
        <div class="toogle">
          <img class="exchange" src="img/icon/exchange.svg" alt="">
          <ul class=hide2>
            <li>如需退換貨或其他商品使用服務（食譜、使用方式等），皆可於上班時間與我們聯繫。</li>
            <li>上班時間: 週一至週五10:00-18:00</li>
            <li>電話：02-8941668</li>
            <br>

            <li><b class="re_word">無法退貨的商品和特殊狀況： </b></li>
            <li>食品類商品依民國105年6月三讀通過《消費者保護法》部分條文修正，除商品本身毀損、破裂、滲漏等情況，其他均恕無法辦理退換貨。</li>
          </ul>
        </div>
        <div class="slide_toogle flex">
          <h3>Q&A</h3>
          <img class="arrow " src="img/icon/chevron_down.svg" alt="">
        </div>
        <div class="toogle">
          <img class="qa" src="img/icon/QA.svg" alt="">
          <h4 class="re">會員</h4>
          <ul class="qq">

            <li>Q1：怎麼加入會員？</li>
            <li class="list_none"> A1：無須加入會員即可購物喔！將商品加入購物車後選擇『第一次購物前往結帳』，即可成立訂單並升級成會員喔！</li>
          </ul>
          <ul class="qq">
            <li>Q2：我想辦理退貨但是我沒有會員？</li>
            <li class="list_none">A2 ：交易完成後系統會自動為您升級成會員喔，訂購時填寫的『會員信箱』即會是您會員帳號。</li>
          </ul>
          <ul class="qq">
            <li>Q3：忘記密碼怎麼辦？
            </li>
            <li class="list_none">A3 ：若您忘記密碼，請至 「會員登入」點選「忘記密碼」， 輸入會員帳號及驗證碼，系統即會自動將重製的新密碼寄至您Email信箱提供您登入使用。</li>
          </ul>
          <h4 class="si">配送</h4>
          <ul class="qq">
            <li>Q1：包裹何時會出貨呢？</li>
            <li class="list_none"> A1 ：每天14:00前的訂單會安排當天出貨，宅配大概1-2天送到(週日不配送)，超商大概2-3天；海外包裹為平日下午時段安排寄出，攬件寄出後配送時間約為5~7個工作天。
            </li>
          </ul>
          <ul class="qq">
            <li>Q2：可以查詢包裹編號追蹤嗎？</li>
            <li class="list_none">A2 ：請您由官網會員登入－訂單查詢－點選該筆訂單輸入您的訂單號碼與認證碼以查詢訂單狀況，如果對訂單狀況有疑問，請與我們聯絡。</li>
          </ul>
          <ul class="qq">
            <li>Q3：忘記密碼怎麼辦？
            </li>
            <li class="list_none">A3 ：若您忘記密碼，請至 「會員登入」點選「忘記密碼」， 輸入會員帳號及驗證碼，系統即會自動將重製的新密碼寄至您Email信箱提供您登入使用。</li>
          </ul>
          <h4 class="si">訂單</h4>
          <ul class="qq">
            <li>Q1：如何確認訂單有沒有成立呢？
            </li>
            <li class="list_none"> A1 ：訂單成立後系統會送通知信件至您留下的會員信箱，也可於官網－會員登入－訂單查詢內查看喔！
            </li>
          </ul>
          <ul class="qq">
            <li>Q2：刷卡訂單不確定有沒有付款成功？</li>
            <li class="list_none">A2 ：刷卡付款訂單成立後會進入銀行對帳排程作業(約一小時)，可於稍晚自行由官網－登入會員－訂單查詢查看訂單狀態，
              若顯示交易失敗即表示付款不成功，將不會進行扣款及出貨安排，如有需要還請您重新訂購！
            </li>
          </ul>
          <ul class="qq">
            <li>Q3：訂單成立後可以修改訂購內容嗎？</li>
            <li class="list_none">A3 ：成立訂單後恕無法為您修改商品明細、拆併訂單、改付款及配送方式之服務，避免延誤出貨的狀況噢！</li>
          </ul>
          <ul class="qq">
            <li>Q4：信用卡交易失敗怎麼辦？</li>
            <li class="list_none">A4 ：訂單因交易失敗導致訂單未成立成功，交易失敗的訂單無法再恢復訂單狀態重新付款。若您還需要此訂單內商品，請您重新訂購。</li>
          </ul>
          <h4 class="si">退換貨</h4>
          <ul class="qq">
            <li>Q1：如何申請退換貨？</li>
            <li class="list_none"> A1 ：退換貨可於上班時間與我們聯繫，將有專人為您服務。</li>
          </ul>
          <h4 class="si">售後</h4>
          <ul class="qq">
            <li>Q1：若收到異常商品怎麼辦？</li>
            <li class="list_none"> A1 ：若商品有異常疑慮，請您提供商品實際照片至客服信箱(service@pastania.com.tw)或是粉絲團私訊，並且附上您
              的手機號碼/訂單編號/會員帳號，待收到後將會盡快請相關部門確認並且回覆。
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="policy container">
      <div class="s_p">
        <img class="pc" src="img/icon/policy.svg" alt="">
        <h2>政策與規範</h2>
      </div>
      <div class="line"></div>
      <div class="csr">
        <div class="slide_toogle flex">
          <h3>企業責任</h3>
          <img class="arrow" src="img/icon/chevron_down.svg" alt="">
        </div>
        <div class="toogle">
          <ul>
            <li class="hide">
              <img class="rspb " src="img/icon/responsibility.svg" alt="">
            </li>
            <li>
              Pastania積極在各市場成為一個對社會和環保負責與提供經濟利益持久不懈的優良國際公司，同時著重於改善義大利當
              地小農的社會與經濟狀態、減少對環境的破壞與影響、對營業的當地社區投入正面的回饋並為我們的夥伴（公司員工）提供一個優良的工作環境。
            </li>
            <br>
            <li class="e_bold">
              投資小農及其社區
            </li>
            <li>
              Pastania知道身為一家成功的企業，與其他數千人的成功息息相關，這些人就是為我們種植小麥的農民。
            </li>
            <li>
              我們倡導透過全新方式尋找道德採購資源，目標在於確保為我們的顧客長期供應高品質產品，同時對小農的生活及生計
              以及其居住的社區帶來正面影響。<br><br>
            </li>
            <li class="e_bold">
              踏上 100% 尋找道德採購資源的旅程
            </li>
            <li>
              我們體認到必須進一步努力，才可確保長期供應我們事業賴以存續的高品質義大利麵以及醬料。我們向國際環境保育組
              織（Conservation International , CI）尋求協助，尋找對環境友善的種植方式。在尋找採購資源上，我們需有一套完善
              的資源管理政策，以確保公平交易及工作條件、經濟透明化，無論是透過森林碳市場（forest carbon markets）或其他
              支付環境服務的管道，皆必須確保小農可受惠於完善的環境保護措施。
            </li>
          </ul>
        </div>
        <div class="slide_toogle flex">
          <h3>隱私權保護</h3>
          <img class="arrow " src="img/icon/chevron_down.svg" alt="">
        </div>
        <div class="toogle">
          <ul>
            <li class="hide">
              <img class="pri " src="img/icon/privacy.svg" alt="">
            </li>
            <li>非常歡迎您光臨「Pastania」（以下簡稱本網站），為了讓您能夠安心使用本網站的各項服務與資訊，特此向您說明本
              網站的隱私權保護政策，以保障您的權益，請您詳閱下列內容：
            </li>
            <br>
            <li class="e_bold">一、隱私權保護政策的適用範圍
            </li>
            <li>隱私權保護政策內容，包括本網站如何處理在您使用網站服務時收集到的個人識別資料。隱私權保護政策不適用於本網
              站以外的相關連結網站，也不適用於非本網站所委託或參與管理的人員。
            </li>
            <br>
            <li class="e_bold"> 二、個人資料的蒐集、處理及利用方式</li>
            <li>當您造訪本網站或使用本網站所提供之功能服務時，我們將視該服務功能性質，請您提供必要的個人資料，並在該特定
              目的範圍內處理及利用您的個人資料；非經您書面同意，本網站不會將個人資料用於其他用途。
            </li>
            <br>
            <li>本網站在您使用服務信箱、問卷調查等互動性功能時，會保留您所提供的姓名、電子郵件地址、聯絡方式及使用時間
              等。
            </li>
            <br>
            <li>於一般瀏覽時，伺服器會自行記錄相關行徑，包括您使用連線設備的IP位址、使用時間、使用的瀏覽器、瀏覽及點選資
              料記錄等，做為我們增進網站服務的參考依據，此記錄為內部應用，決不對外公佈。
            </li>
            <br>
            <li>為提供精確的服務，我們會將收集的問卷調查內容進行統計與分析，分析結果之統計數據或說明文字呈現，除供內部研
              究外，我們會視需要公佈統計數據及說明文字，但不涉及特定個人之資料。
            </li>
            <br>
            <li class="e_bold">三、資料之保護</li>
            <li> 本網站主機均設有防火牆、防毒系統等相關的各項資訊安全設備及必要的安全防護措施，加以保護網站及您的個人資料
              採用嚴格的保護措施，只由經過授權的人員才能接觸您的個人資料，相關處理人員皆簽有保密合約，如有違反保密義務
              者，將會受到相關的法律處分。
            </li>
            <br>
            <li> 如因業務需要有必要委託其他單位提供服務時，本網站亦會嚴格要求其遵守保密義務，並且採取必要檢查程序以確定其
              將確實遵守。
            </li>
            <br>
            <li class="e_bold"> 四、網站對外的相關連結</li>
            <li> 本網站的網頁提供其他網站的網路連結，您也可經由本網站所提供的連結，點選進入其他網站。但該連結網站不適用本
              網站的隱私權保護政策，您必須參考該連結網站中的隱私權保護政策。
            </li>
            <br>
            <li class="e_bold">五、與第三人共用個人資料之政策</li>
            <li>本網站絕不會提供、交換、出租或出售任何您的個人資料給其他個人、團體、私人企業或公務機關，但有法律依據或合
              約義務者，不在此限。
            </li>
            <br>
            <li>前項但書之情形包括不限於：</li>
            <ul class="but">
              <li> 經由您書面同意。</li>
              <li>法律明文規定。
              </li>
              <li>為免除您生命、身體、自由或財產上之危險。
              </li>
              <li>與公務機關或學術研究機構合作，基於公共利益為統計或學術研究而有必要，且資料經過提供者處理或蒐集著依其揭露
                方式無從識別特定之當事人。
              </li>
              <li>當您在網站的行為，違反服務條款或可能損害或妨礙網站與其他使用者權益或導致任何人遭受損害時，經網站管理單位。
              </li>
              <li>研析揭露您的個人資料是為了辨識、聯絡或採取法律行動所必要者。</li>
              <li>有利於您的權益。
              </li>
              <li>本網站委託廠商協助蒐集、處理或利用您的個人資料時，將對委外廠商或個人善盡監督管理之責。</li>
            </ul>
            <br>
            <li class="e_bold">六、Cookie之使用
            </li>
            <li>為了提供您最佳的服務，本網站會在您的電腦中放置並取用我們的Cookie，若您不願接受Cookie的寫入，您可在您使
              用的瀏覽器功能項中設定隱私權等級為高，即可拒絕Cookie的寫入，但可能會導至網站某些功能無法正常執行 。

            </li>
            <br>
            <li class="e_bold">七、隱私權保護政策之修正
            </li>
            <li>本網站隱私權保護政策將因應需求隨時進行修正，修正後的條款將刊登於網站上。</li>

          </ul>


        </div>
      </div>
    </div>
    <!-- 展開收合 start -->
    <script>
        $(".slide_toogle").click(function () {
            $(this).next().slideToggle(600);
        });

        //  展開收合 end

        $(function () {
            $(".slide_toogle").click(function () {
                $(this).find('img').toggleClass("ar_turn");

            });


        })
    </script>


  </body>

<?php include __DIR__ . '/__html_foot.php' ?>