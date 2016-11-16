<?php
  //ここにプログラムを書く
  define('DB_HOST','127.0.0.1');//ローカルホストのIP
  define('DB_USER','root');//MAMPのスタートページにいろいろ書いてる
  define('DB_PASSWORD','root');
  define('DB_PORT','8889');
  define('DB_NAME','test');//データベース名
  $dbhost = "mysql:host=".DB_HOST.";dbname=".DB_NAME.";port=".DB_PORT.";charset=utf8";

  try{
    $pdo = new PDO($dbhost,DB_USER,DB_PASSWORD);

    //whereFromテーブルからすべての情報を取り出すsql文
    $sql = "SELECT
              *
    FROM
    seki
    ";

    //全ての情報を保存
    $statement = $pdo->query($sql);
    //データベースを配列情報に変換して、入れる
    $row = $statement->fetchAll(PDO::FETCH_ASSOC);

    //データベースの接続アウト
    $pdo=null;

  }catch(PDOException $e){
    echo 'Error:'.$e->getMessage();//エラーの内容を吐き出す
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>index</title>
  <link rel = "stylesheet" type = "text/css" href = "detail.css" />
  <style>
  body{
    font-family:'小塚ゴシック Pro6N R','ヒラギノ角ゴ Pro W3','Hiragino Kaku Gothic Pro','メイリオ',Meiryo,'ＭＳ Ｐゴシック', Arial, sans-serif;
  }
  </style>
</head>

<body>

  <div class="header">
    <div class="container">
      <div class="header-left">
        <a href="index.html">Wordrop.</a>
      </div>
      <div class="header-right">
        <ul>
          <li><img src="images/user.png" class="user"><a href="#">山田　太郎</a></li>
          <li><img src="images/header.png" class="logout"> <a href="#"　>ログアウト</a></li>
          <li><a href="archive.html" ><img src="images/archive.png" class="archive">Archive</a>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <div class="contents">

    <div class="name">
     

    </div>
    <div class="contents-wrapper">

<a href="check.html"> <img class="batu" src="images/batu.png"></a>

  <div class="contents-top">
    <p>
     <?php

      foreach($row as $r){
       echo $r['word'],"<br />";
      }

      ?>  
    </p>
  </div>

  <div class="contents-bottom">
<?php
  foreach($row as $r){
  // キーワード指定
  $keyword = $r['word'];

// APIのURL
$url = "http://wikipedia.simpleapi.net/api?keyword=".urlencode($keyword)."&output=php";

// データを取得
$data = file_get_contents($url) ;

// PHPシリアライズパーサーを利用して解析し、配列に入れる
$array = unserialize($data);

// 配列をforeachで表示するデモ
foreach ($array as $key => $value) {
//    print $value[body] ."<hr/>\n\n";
}
print $value[body];
}
?>
<p>
<iframe
  width="600"
  height="450"
  frameborder="0" style="border:0"
  src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBIcPwtGUcAWmG413jGezEXeHwZydid22s
    &q=<?php echo "$keyword"; ?>" allowfullscreen>
</iframe>
</p>

  </div>

  </div>

</div>



  <div class="footer">
    <div class="container">
      <h3>@Future University Hakodate,All rights reserved. </h3>

    </div>
  </div>

</body>
