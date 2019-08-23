<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>データ登録</title>
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
      <form class="form-inline mt-2 mt-md-0"><p>兄妹を探してみよう！</p>
        <input class="form-control mr-sm-2" type="text" placeholder="一胎子登録番号を入力" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">検索</button>
      </form>
    </div>
</header>
<!-- ヘッダー終了 -->

<!-- メインコンテンツ（フォーム）開始 -->
<!-- ここでinsert.phpにデータを送っている -->
<form method="post" action="insert2.php" enctype="multipart/form-data">
  <div class="jumbotron" style="background-color:#E8F8E1;">
   <div class="container">
   <fieldset>
    <legend>ペット情報登録フォーム</legend>
    <!-- name="xxx" の部分に注目するようにしておいてください🤗 -->
    <div class="form-group inputFile">
    <label for="exampleInputFile">写真アップロード</label>
    <input type="file" name="image" accept="image/*" id="exampleInputFile" class="form-control-file">
    </div>
    <div class="form-group">
     <label>名前：</label>
     <input type="text" name="name" placeholder="タロウ" class="form-control">
    </div>
    <div class="form-group">
     <label>登録番号：</label>
     <input type="text" name="tourokuNo" placeholder="JP000000/00" class="form-control">
     </div>
    <div class="form-group">
     <label>犬種：</label>
     <input type="text" name="breed" placeholder="しば犬" class="form-control">
    </div>
    <div class="form-group">
     <label>性別：</label>
     <div class="form-check form-check-inline">
     <input class="form-check-input" type="radio" name="sex" id="inlineRadio1" value="男の子">
     <label for="inlineRadio1" class="form-check-label">男の子</label>
     </div>
     <div class="form-check form-check-inline">
     <input class="form-check-input" type="radio" name="sex" id="inlineRadio2" value="女の子">
     <label for="inlineRadio2" class="form-check-label">女の子</label>
     </div>
    </div>
     <div class="form-group">
     <label>生年月日：</label>
     <input type="text" name="birthday" placeholder="20170516" class="form-control">
     </div>
     <div class="form-group">
     <label>ID：</label>
     <input type="text" name="ID" placeholder="JP0261525678989" class="form-control">
     </div>
     <div class="form-group">
     <label>股関節/肘関節評価：</label>
     <div class="form-check">
     <input type="checkbox" name="HD_ED" class="form-check-input" value="股関節" id="check1a">
     <label class="form-check-label" for="check1a">股関節に問題あり</label>
     </div>
     <div class="form-check">
     <input type="checkbox" name="HD_ED" class="form-check-input" value="肘関節" id="check1b">
     <label class="form-check-label" for="check1b">股関節に問題あり</label>
     </div>
     <div class="form-check">
     <input type="checkbox" name="HD_ED" class="form-check-input" value="無し" id="check1c">
     <label class="form-check-label" for="check1c">特に無し</label>
     </div>
     </div>
     <div class="form-group">
     <label>ブリーダー名：</label>
     <input type="text" name="breeder" placeholder="YAMADA" class="form-control">
     </div>
     <div class="form-group">
     <label>一胎子登録番号：</label>
     <input type="text" name="brotherNo" placeholder="8969−08972/08" class="form-control">
     </div>
     <div class="form-group">
     <label>血統書番号：</label>
     <input type="text" name="PedigreeDate" placeholder="20141001" class="form-control">
     </div>
     <div class="form-group">
     <label>Email：</label>
     <input type="text" name="email" placeholder="jane.doe@example.com" class="form-control">
     </div>
     <div class="form-group">
     <label>コメント:</label>
     <textArea name="coment" rows="4" cols="40" class="form-control"></textArea>
     </div>
     <button type="submit" class="btn btn-warning mx-auto" style="width:200px;">登録</button>
    </fieldset>
    </div>
  </div>
</form>
<!-- メインコンテンツ（フォーム）終了 -->

<!-- ページスクロールボタン -->
<p id="page-top"><a href="#header">PAGE TOP</a></p>

<hr class="featurette-divider"><!--仕切り線-->

<!-- フッター開始 -->
<footer class="container">
    <p class="float-right"><a href="#">Back to top</a></p>
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