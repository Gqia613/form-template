<?php
session_start();
$count = 0;

$pattern = "/^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/";

$nameError = '';
$telephoneError = '';
$differentFormat = '';
$emailError = '';
$menuError = '';
$contactError = '';


if(isset($_POST['submit'])) {
  if($_POST['name'] != "") {
    $_SESSION['name'] = $_POST['name'];
  }else {
    $nameError = '*名前を入力してください';
    $count++;
  }

  if($_POST['telephone'] != "") {
    $_SESSION['telephone'] = $_POST['telephone'];
  }else {
    $telephoneError = '*電話番号を入力してください';
    $count++;
  }

  if($_POST['email'] != "") {
    if(preg_match($pattern, $_POST['email'])){
      $_SESSION['email'] = $_POST['email'];
    }else {
      $differentFormat = '*xxxx@xxxxの形式で入力してください';
      $count++;
    }
  }else {
    $emailError = '*メールアドレスを入力してください';
    $count++;
  }

  if($_POST['corporateName'] != "") {
    $_SESSION['corporateName'] = $_POST['corporateName'];
  }

  if(isset($_POST['menu'])) {
    $_SESSION['menu'] = $_POST['menu'];
  }else {
    $menuError = '*内容を選択してください';
    $count++;
  }

  if($_POST['contact'] != "") {
    $_SESSION['contact'] = $_POST['contact'];
  }else {
    $contactError = '*お問い合わせ内容を入力してください';
    $count++;
  }
}

if(isset($_POST['submit'])) {
  if($count == 0) {
    $_SESSION['success'] = 'success';
    header('Location: confirm.php');
  }
}

?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/slick.css">
  <link rel="stylesheet" href="css/slick-theme.css">
  <link rel="stylesheet" href="css/base.css">
  <link rel="stylesheet" href="css/cmn.css">
  <link rel="stylesheet" href="css/test.css">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;700&display=swap" rel="stylesheet">
</head>
<body id="form">
  <section class="form">
    <div class="contact_wrap">
      <h2>お問い合わせ</h2>
      <ul class="send flex">
        <li class="color">
          <p>入力画面</p>
        </li>
        <li>
          <p>確認画面</p>
        </li>
        <li>
          <p>送信完了</p>
        </li>
      </ul>
      <h3 class="form_ttl">お客様情報を入力してください</h3>
      <form class="contact_from" action="form.php" method="post">
          <div class="item">
            <label class="label flex">お名前<span class="impot">必須<span></label>
            <div class="from_inner">
              <p class="erro"><?php echo $nameError; ?></p>
              <input class="inputs" type="text" name="name" value="<?php echo isset($_SESSION['reName']) ? $_SESSION['reName'] : ""; ?>">
            </div>
          </div>
          <div class="item">
            <label class="label flex">電話番号<span class="impot">必須<span></label>
            <div class="from_inner">
              <p class="erro"><?php echo $telephoneError; ?></p>
              <input class="inputs" type="text" name="telephone" value="<?php echo isset($_SESSION['reTelephone']) ? $_SESSION['reTelephone'] : ""; ?>">
            </div>
          </div>
          <div class="item">
            <label class="label flex">メールアドレス<span class="impot">必須<span></label>
            <div class="from_inner">
              <p class="erro"><?php echo $differentFormat; ?></p>
              <p class="erro"><?php echo $emailError; ?></p>
              <input class="inputs" type="text" name="email" value="<?php echo isset($_SESSION['reEmail']) ? $_SESSION['reEmail'] : ""; ?>">
            </div>
          </div>
          <div class="item">
            <label class="label">会社名または学校名</label>
            <div class="from_inner">
              <input class="inputs" type="text" name="corporateName" value="<?php echo isset($_SESSION['reCorporateName']) ? $_SESSION['reCorporateName'] : ""; ?>">
            </div>
          </div>
          <div class="item">
            <p class="label flex">内容<span class="impot">必須<span></p>
            <div class="from_inner">
              <p class="erro"><?php echo $menuError; ?></p>
              <div class="inputs recruit">
                <div>
                  <input id="cut" type="radio" name="menu" value="業務に関する内容"
                  <?php
                  if(isset($_SESSION['reMenu'])){
                    if($_SESSION['reMenu'] == '業務に関する内容') {
                      echo 'checked';
                    }
                  }
                  ?>
                  >
                  <label for="cut">業務に関する内容</label>
                </div>
                <div>
                  <input id="cut-color" type="radio" name="menu" value="求人に関する内容"
                  <?php
                  if(isset($_SESSION['reMenu'])){
                    if($_SESSION['reMenu'] == '求人に関する内容') {
                      echo 'checked';
                    }
                  }
                  ?>
                  >
                  <label for="cut-color">求人に関する内容</label>
                </div>
                <div>
                  <input id="headspa" type="radio" name="menu" value="その他"
                  <?php
                  if(isset($_SESSION['reMenu'])){
                    if($_SESSION['reMenu'] == 'その他') {
                      echo 'checked';
                    }
                  }
                  ?>
                  >
                  <label for="headspa">その他</label>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <label class="label flex">お問い合わせ<span class="impot">必須<span></label>
            <div class="from_inner">
              <p class="erro"><?php echo $contactError; ?></p>
              <textarea class="inputs" name="contact"><?php echo isset($_SESSION['reContact']) ? $_SESSION['reContact'] : ""; ?></textarea>
            </div>
          </div>
          <div class="btn-area">
          <input type="submit" name="submit" value="送信" class="cmn_contact_btn">
          </div>
      </form>
    </div>
</section>
</body>
</html>
