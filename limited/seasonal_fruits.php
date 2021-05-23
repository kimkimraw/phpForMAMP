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
	<header><h1>季節のくだもん</h1></header>
	
	<main>
		<?php
			$month = $_POST['month'];

			$fruits[] = '';
			$fruits[] = 'りんご';
			$fruits[] = 'スターフルーツ';
			$fruits[] = 'いちご';
			$fruits[] = 'びわ';
			$fruits[] = 'メロン';
			$fruits[] = 'いちじく';
			$fruits[] = 'ラズベリー';
			$fruits[] = 'もも';
			$fruits[] = 'かき';
			$fruits[] = 'シークワーサー';
			$fruits[] = 'レモン';
			$fruits[] = 'キウイ';

			print $month.'月は';
			print $fruits[$month].'が旬です';

		?>
	</main>

	<footer></footer>

<script src="./public/js/index.js"></script>
</body>
</html>
