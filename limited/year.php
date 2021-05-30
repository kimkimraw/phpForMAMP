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
			require_once('../common/common.php');

			// パンクずリスト生成
			// 現在のページのパス
			$path = $_SERVER["PHP_SELF"];
			$breadcrumns = breadCrumns($path,$_menu);
			foreach($breadcrumns as $key => $val){
				// 三項演算子で出力している　＝＞　（条件）？ TURE：FALSE；
				print ($path==$key)?$val:"<a href=\"{$key}\">{$val}</a> &gt; ";
			}

			$year = $_POST['year'];
			$wareki = gengo($year);
			print '<br>'.$wareki;
	?>
	</main>

	<footer></footer>

<script src="./public/js/index.js"></script>
</body>
</html>
