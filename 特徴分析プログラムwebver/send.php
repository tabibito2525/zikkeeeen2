<?php
try {
  //DB名、ユーザー名、パスワードを変数に格納
  $dsn = 'mysql:dbname=test;host=localhost;charset=utf8';
  $user = 'kagura';
  $password = 'Kagura2435';
 
  $PDO = new PDO($dsn, $user, $password); //PDOでMySQLのデータベースに接続
  $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //PDOのエラーレポートを表示
 
  //input.phpの値を取得
  $name = $_POST['name'];
  $mail = $_POST['mail'];
  $music = $_POST['music'];
  $index2 = $_POST['index2'];
  $checkValue = $_POST['checkValue'];
 
 /*ここの部分を変える*/
  $sql = "INSERT INTO klab_present (name, mail, music,index2,checkValue) VALUES (:name, :mail, :music,:index2,:checkValue)"; // テーブルに登録するINSERT INTO文を変数に格納　VALUESはプレースフォルダーで空の値を入れとく
  $stmt = $PDO->prepare($sql); //値が空のままSQL文をセット
  $params = array(':name' => $name, ':mail' => $mail, ':music' => $music, ':index2' => $index2, ':checkValue' => $checkValue); // 挿入する値を配列に格納
  $stmt->execute($params); //挿入する値が入った変数をexecuteにセットしてSQLを実行
 

  // 登録内容確認・メッセージ
  echo "<p>名前: " . $name . "</p>";
  echo "<p>メールアドレス: " . $mail . "</p>";
  echo "<p>メッセージ: " . $music . "</p>";
  echo '<p>上記の内容をデータベースへ登録しました。</p>';

  header("Location:http://localhost/zikken/input.php");

} catch (PDOException $e) {
  exit('データベースに接続できませんでした。' . $e->getMessage());
}
?>