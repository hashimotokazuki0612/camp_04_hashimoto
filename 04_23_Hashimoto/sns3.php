<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>検索結果</title>
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
<div class="jumbotron" style="background-color:#E8F8E1">
   <div class="container">

   <!-- 検索PHP開始 -->
    <?php
    $my_sea=htmlspecialchars($_POST["s"],ENT_QUOTES);
    $db = new PDO('mysql:dbname=pet_db;charset=utf8;host=localhost','root','');

    print "<p>｢{$my_sea}｣の検索結果</p>";
    $ps=$db->query("SELECT * FROM pet_table WHERE brotherNo like '%$my_sea%'");
    while($r = $ps->fetch()){
        print "{$r['name']}<br>";
        print "{$r['tourokuNo']}<br>";
        print "{$r['breed']}<br>";
        print "{$r['sex']}<br>";
        print "{$r['birthday']}<br>";
        print "{$r['ID']}<br>";
        print "{$r['HD_ED']}<br>";
        print "{$r['breeder']}<br>";
        print "{$r['brotherNo']}<br>";
        print "{$r['email']}<br>";
        print "{$r['coment']}<hr>";
    }
    ?>
<!-- 検索PHP終了 -->
   </div>
</div>
<!-- メイン終了 -->

<!-- ページスクロールボタン -->
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