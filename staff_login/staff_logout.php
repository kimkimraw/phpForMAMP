<?php
	session_start();
	$_SESSION = array();

	// もしCookieにセッション情報があれば削除
	if(isset($_COOKIE[session_name()]) == true){
		setcookie(session_name(),'',time()-42000,'/');
	}

	session_destroy(); //session情報破棄
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
	<main>
		<p>ログアウトしました</p>
		<p><a href="../staff_login/staff_login.html">ログイン画面へ</a></p>
		

	</main>

	<footer></footer>

<script src="./public/js/index.js"></script>
</body>
</html>
