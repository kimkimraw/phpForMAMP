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
	<header><h1>くだもんの種類</h1></header>
	
	<main>
		<?php
			$fruit_name = $_POST['name'];

			$fruit_type['りんご'] = 'バラ科リンゴ属';
			$fruit_type['みかん'] = 'ミカン科ミカン属';
			$fruit_type['バナナ'] = 'バショウ科バショウ属';
			$fruit_type['ぶどう'] = 'クロウメモドキ目ブドウ科ブドウ属';

			print $fruit_name.'は、'.$fruit_type[$fruit_name].'です<br>';

			foreach($fruit_type as $key => $val){

				print '<p>'.$key.'は'.$val.'です</p>';
				
			}


		?>

	</main>

	<footer></footer>

<script src="./public/js/index.js"></script>
</body>
</html>
