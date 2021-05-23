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
	<header><h1>元号検索</h1></header>
	
	<main>
		<?php
			$year = $_POST['year'];

			$wareki = gengo($year);
			print $wareki;

			function gengo($val){
				$gengo = '入力内容に対応しておりません。別の値を入力してやり直してください。';

				if(1868 <= $val && 1911 >= $val){
					$gengo = '明治';
				}
				if(1912 <= $val && 1925 >= $val){
					$gengo = '大正';
				}
				if(1926 <= $val && 1988 >= $val){
					$gengo = '昭和';
				}
				if(1989 <= $val && 2018 >= $val){
					$gengo = '平成';
				}
				if(2019 <= $val){
					$gengo = '令和';
				}
				return $gengo;
			}
		
		?>
	</main>

	<footer></footer>

<script src="./public/js/index.js"></script>
</body>
</html>
