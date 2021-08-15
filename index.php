<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>4eachblog 掲示板</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
mb_internal_encoding("utf8)");
$pdo =new PDO("mysql:dbname=lesson1;host=localhost;","root","root");
$stmt = $pdo->query("select * from 4each_keijiban");

?>

  <header>
  <img src="4eachblog_logo.jpg" alt="ロ"><br>
<ul class="header_list">
  <li>トップ</li>
  <li>プロフィール</li>
  <li>4eachについて</li>
  <li>登録フォーム</li>
  <li>問い合わせ</li>
  <li>その他</li>
</ul>
  </header>

<main>
<h1>プログラミングに役立つ掲示板</h1>
<br>
<div class="form">
  
  <form action="insert.php" method="POST">
    <h2>入力フォーム</h2>
    
    <div>
      <label>ハンドルネーム</label><br>
      <input type="text" name="handlename">
    </div>
  <div>
    <label>タイトル</label><br>
    <input type="text" name="title">
  </div>
    <div>
      <label>コメント</label><br>
      <textarea name="comments" id="comments" cols="50" rows="5"></textarea>
    </div>
    
    <div>
      <input type="submit" value="投稿する">
    </div>
    
  </form>
</div>
<div class="link_list">
 <h2>人気の記事</h2>
      <ul>
        <li>PHPオススメ本</li>
        <li>PHP MyAdminの使い方</li>
        <li>今人気のエディタ Top5</li>
        <li>HTMLの基礎</li>
      </ul>
 <h2>オススメリンク</h2>
      <ul>
        <li>インターノウス株式会社</li>
        <li>XAMPPのダウンロード</li>
        <li>Eclipseのダウンロード</li>
        <li>Bracketsのダウンロード</li>
      </ul>
 <h2>カテゴリ</h2>
      <ul>
        <li>HTML</li>
        <li>PHP</li>
        <li>MySQL</li>
        <li>JavaScript</li>
      </ul>
</div>
<?php

while($row = $stmt->fetch()){

  echo "<div class='kiji1'>";
  echo "<h3>".$row['title']."</h3>";
  echo "<div class='contents'>";
  echo $row['comments'];
  echo "<div class='handlename'>posted by".$row['handlename']." </div>";
  echo "</div>";
  echo "</div>";
  
  
  
}

?>


</main>

<footer>
  <p>copyright internous|4each blog the which provides A to Z about programming.</p>
</footer>


</body>
</html>