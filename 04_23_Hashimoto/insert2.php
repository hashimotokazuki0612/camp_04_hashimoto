<?php
//1. POSTデータ取得

//まず前のphpからデーターを受け取る（この受け取ったデータをもとにbindValueと結びつけるため）
$image = file_get_contents($_FILES['image']['tmp_name']);
$name = $_POST["name"];
$breed = $_POST["breed"];
$sex = $_POST['sex'];
$birthday = $_POST["birthday"];
$tourokuNo = $_POST["tourokuNo"];
$ID = $_POST["ID"];
$HD_ED = $_POST["HD_ED"];
$breeder = $_POST["breeder"];
$brotherNo = $_POST["brotherNo"];
$PedigreeDate = $_POST["PedigreeDate"];
$email = $_POST["email"];
$coment = $_POST["coment"];


//2. DB接続します xxxにDB名を入力する
//ここから作成したDBに接続をしてデータを登録します xxxxに作成したデータベース名を書きます
try {
  $pdo = new PDO('mysql:dbname=pet_db;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('DbConnectError:'.$e->getMessage());
}

//３．データ登録SQL作成 //ここにカラム名を入力する
//xxx_table(テーブル名)はテーブル名を入力します
$stmt = $pdo->prepare("INSERT INTO pet_table(number, name, breed, sex, birthday, tourokuNo, ID, HD_ED, breeder, brotherNo, PedigreeDate, email, coment, image)
                      VALUES(NULL, :name, :breed, :sex, :birthday, :tourokuNo, :ID, :HD_ED, :breeder, :brotherNo, :PedigreeDate, :email, :coment, :image)");
$stmt->bindValue(':name', $name, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)どんな形で送るか
$stmt->bindValue(':breed', $breed, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':sex', $sex, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':birthday', $birthday, PDO::PARAM_STR);
$stmt->bindValue(':tourokuNo', $tourokuNo, PDO::PARAM_STR);
$stmt->bindValue(':ID', $ID, PDO::PARAM_STR);
$stmt->bindValue(':HD_ED', $HD_ED, PDO::PARAM_STR);
$stmt->bindValue(':breeder', $breeder, PDO::PARAM_STR);
$stmt->bindValue(':brotherNo', $brotherNo, PDO::PARAM_STR);
$stmt->bindValue(':PedigreeDate', $PedigreeDate, PDO::PARAM_STR);
$stmt->bindValue(':email', $email, PDO::PARAM_STR);
$stmt->bindValue(':coment', $coment, PDO::PARAM_STR);
$stmt->bindValue(':image', $image, PDO::PARAM_STR);
$status = $stmt->execute();

//４．データ登録処理後
if($status==false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit("QueryError:".$error[2]);
}else{
  //５．index.phpへリダイレクト 書くときにLocation: in この:　のあとは半角スペースがいるので注意！！
  header("Location: select2.php");
  exit;
}

?>