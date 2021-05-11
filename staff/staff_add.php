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
	<header><h1>STAFF追加</h1></header>
	
	<main>
		<form method="post" action="staff_add_check.php">
			<input type="text" name="name" placeholder="スタッフ名"><br>
			<input type="password" name="pass" placeholder="パスワード"><br>
			<input type="password" name="pass2" placeholder="同じパスワード"><br>

			<input type="button" onclick="history.back()" value="back">
			<input type="submit" value="追加">
		</form>

	</main>

	<footer></footer>

<script src="./public/js/index.js"></script>
</body>
</html>
