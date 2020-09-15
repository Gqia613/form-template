<?php

// $dsn = 'mysql:host=localhost;dbname=blog_app;charset=utf8';
// $user = 'blog_user';
// $pass = 'yoshiaki0217';

// try {
//   $dbh = new PDO($dsn,$user,$pass,[
//       PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
//   ]);
//   echo '接続成功';
//   $dbh = null;
// } catch(PDOException $eroer) {
//   echo '接続失敗'.$eroer->getMessage();
//   exit();
// }


$dsn = 'mysql:host=localhost;dbname=store;charset=utf8';
$user = 'root';
$pass = '';


$pdo = new PDO($dsn,$user,$pass,[
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
]);

?>
