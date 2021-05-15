<?php
	session_start();
	//「セッションハイジャック」対策
	session_regenerate_id(true); //セッション情報を変更
	if(isset($_SESSION['login']) == false ){
		print '<p>ログインしておりません。</p>';
		print '<a href="../staff_login/staff_login.html">ログイン画面へ</a>';
		exit();
	}else{
		print '<p>'.$_SESSION['staff_name'].'さんログイン中</p>';
	}
?>
<!-- セッション情報を確認。　※1行目に記載しないとエラーとなる -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta name="author" content="Kimkim">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>ろくまる農園</title>
	<link rel="stylesheet" type="text/css" href="./public/css/style.css">
</head>

<body>
	<header><h1>商品追加</h1></header>
	
	<main>
		<form method="post" action="product_add_check.php" enctype="multipart/form-data">
			<input type="text" name="name" placeholder="商品名"><br>
			<input type="text" name="price" placeholder="価格"><br>
			<input type="file" name="img"><br>

			<input type="button" onclick="history.back()" value="back">
			<input type="submit" value="追加">
		</form>

	</main>

	<footer></footer>

<script src="./public/js/index.js"></script>
</body>
</html>
