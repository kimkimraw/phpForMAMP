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
	<header><h1>STAFF編集</h1></header>
	
	<main>
		<?php
			$staff_code = $_POST['code'];
			$staff_name = $_POST['name'];
			$staff_pass = $_POST['pass'];
			$staff_pass2 = $_POST['pass2'];

			if($staff_name == ''){
				print 'スタッフ名を入力してください';
			}else{
				print 'スタッフ名 : ';
				print $staff_name;
				print '<br>';
			}

			if($staff_pass == ''){
				print 'パスワードを入力してください';
			}

			if($staff_pass != $staff_pass2){
				print 'パスワードが一致しません';
			}

			if($staff_name == '' || $staff_pass == '' || $staff_pass != $staff_pass2){
				print '<form>';
				print '<input type="button" onclick="history.back()" value="back">';
				print '</form>';
			}else{
				$staff_pass = md5($staff_pass);
				print '<form method="post" action="staff_edit_done.php">';
				print '<input type="hidden" name="code" value="'.$staff_code.'">';
				print '<input type="hidden" name="name" value="'.$staff_name.'">';
				print '<input type="hidden" name="pass" value="'.$staff_pass.'">';
				print '<input type="button" onclick="history.back()" value="back">';
				print '<input type="submit" value="OK">';
				print '</form>';
			}
		?>
	</main>

	<footer></footer>

<script src="./public/js/index.js"></script>
</body>
</html>
