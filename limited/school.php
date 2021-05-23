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
	<header><h1>学年</h1></header>
	
	<main>
		<?php
			$school_year = $_POST['school_year'];

			switch($school_year){
				case '1':
					$school_building = 'あなたの校舎は南校舎です。';
					$club = '部活動にはスポーツ系と文化系があります。';
					$objective = 'まずは学校に慣れましょう。';
					break;

				case '2':
					$school_building = 'あなたの校舎は西校舎です。';
					$club = '学園祭を全力で取り組みましょう。';
					$objective = '今しかできないことを見つけよう。';
					break;
				
				case '3':
					$school_building = 'あなたの校舎は東校舎です。';
					$club = '後輩へ譲っていきましょう。';
					$objective = '将来への道を作ろう。';
					break;
				
				default:
					$school_building = 'あなたの校舎は3年生と同じです。';
					$club = '部活動はありません。';
					$objective = '早く卒業しよう。';
					break;
			}

			print '<p>校舎:'.$school_building.'</p>';
			print '<p>部活:'.$club.'</p>';
			print '<p>目標:'.$objective.'</p>';

		?>
		

	</main>

	<footer></footer>

<script src="./public/js/index.js"></script>
</body>
</html>
