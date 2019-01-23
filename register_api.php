<?php
require __DIR__. '/__connect_db.php';

$result =[
    'success' => false,
    'code' => 400,
    'info' => '參數不足',
    'postData' => [],
];


if(isset($_POST['nickname']) and isset($_POST['email']) and isset($_POST['password']) and isset($_POST['password']) and isset($_POST['address'])){
    $result['postData'] = $_POST;

    // TODO: 後端的欄位檢查
    // email 檢查可以參考 filter_var()



    $s_sql = "SELECT 1 FROM `members` WHERE `email`=?";
    $s_stmt = $pdo->prepare($s_sql);
    $s_stmt->execute([ $_POST['email'] ]);
    if($s_stmt->rowCount() >= 1){
        $result['code'] = 420;
        $result['info'] = '此Email已被註冊';
        echo json_encode($result, JSON_UNESCAPED_UNICODE);
        exit;
    }

    $hash = sha1($_POST['email']. uniqid());
    // 去掉頭尾空白, 然後轉小寫
    $email2 = strtolower(trim($_POST['email']));
    // 密碼編碼, 不要明碼
    $password2 = sha1(trim($_POST['password']));

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
        $_POST['mobile'],
        $_POST['address'],
        $_POST['birthday'],
        $hash,
        $_POST['nickname']
    ]);

    // 影響的列數 (筆數)
    if($stmt->rowCount()==1){
        $result['success'] = true;
        $result['code'] = 200;
        $result['info'] = '註冊成功！';
    } else {
        $result['code'] = 410;
        $result['info'] = '資料沒有新增';
    }
}

echo json_encode($result, JSON_UNESCAPED_UNICODE);









