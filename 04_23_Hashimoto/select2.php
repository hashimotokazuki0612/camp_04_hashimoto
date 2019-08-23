<!-- PHP開始（DBから情報取得〜表示まで） -->
<?php
//1.  DB接続します xxxにDB名を入れます
try {
$pdo = new PDO('mysql:dbname=pet_db;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('データベースに接続できませんでした。'.$e->getMessage());
}

//２．データ登録SQL作成
//作ったテーブル名を書く場所  xxxにテーブル名を入れます
$stmt = $pdo->prepare("SELECT * FROM pet_table");
$status = $stmt->execute();

//３．データ表示
$view="";
if($status==false){
  //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);
}else{
  //Selectデータの数だけ自動でループしてくれる $resultの中に「カラム名」が入ってくるのでそれを表示させる例
  while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
    $view .= "<p>";
    $view .= $result["number"].'<br>';
    $view .= $result["name"].'<br>';
    $view .= $result["tourokuNo"].'<br>';
    $view .= $result["breed"].'<br>';
    $view .= $result["sex"].'<br>';
    $view .= $result["birthday"].'<br>';
    $view .= $result["ID"].'<br>';
    $view .= $result["HD_ED"].'<br>';
    $view .= $result["breeder"].'<br>';
    $view .= $result["brotherNo"].'<br>';
    $view .= $result["PedigreeDate"].'<br>';
    $view .= $result["email"].'<br>';
    $view .= $result["coment"].'<hr>';
    $view .= "</p>";
  }
}
?>
<!-- PHP終了 -->

<!-- ここからHTML開始 -->
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ペットデータ一覧</title>
<!-- BootstrapのCSS読み込み -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<!-- CSSファイル読み込み -->
<link rel="stylesheet" href="style.css">
</head>

<body>
<!-- ヘッダー開始 -->
<header>
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="#">PET HOUSE</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
        </li>
          <li class="nav-item">
          <a class="nav-link" href="#">ログイン</a>
        </li>
          <li class="nav-item">
          <a class="nav-link" href="select2.php">登録一覧</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">迷子の子を探す</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
      </ul>
      <form class="form-inline mt-2 mt-md-0" action="sns3.php" method="post"><p>兄妹を探してみよう！</p>
        <input class="form-control mr-sm-2" type="text" name="s" placeholder="一胎子登録番号を入力" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">検索</button>
      </form>
    </div>
  </nav>
</header>
<!-- ヘッダー終了 -->

<!-- メイン開始 -->
    
    <hr class="featurette-divider"><!--仕切り線-->
          <!-- [$view]にphpを埋め込んでいる -->
    <div class="container jumbotron" style="background-color:#E8F8E1">
    <h1>登録データ一覧</h1>
    <?=$view?></div>
<!-- メイン終了 -->

<!-- ページトップへスクロールボタン -->
<p id="page-top"><a href="#header">PAGE TOP</a></p>

<hr class="featurette-divider"><!--仕切り線-->

<!-- フッター開始 -->
<footer class="container">
    <div class="container" style="text-align: center;">
    <p>&copy; copyrights 2019 G`s Academy Tokyo All RIghts Reserved.</p>
    </div>
  </footer>
<!-- フッター終了 -->

  <!-- jQueryの読み込み -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="index.js"></script>
</body>
</html>
