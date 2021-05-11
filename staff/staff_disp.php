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
	<header><h1>STAFF情報</h1></header>
	
	<main>
		<?php
			try{
				$staff_code = $_GET['staffcode'];

				$dsn = 'mysql:dbname=shop;host:localhost;charset=utf8';
				$user = 'root';
				$password = 'root';
				$dbh = new PDO($dsn,$user,$password);
				$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

				$sql = 'SELECT NAME FROM mst_staff WHERE CODE=?';
				$stmt = $dbh->prepare($sql);
				$data[] = $staff_code;
				$stmt->execute($data);

				$rec = $stmt->fetch(PDO::FETCH_ASSOC);
				$staff_name = $rec['NAME'];

				$dbh = null;

			}catch(Exception $e){
				print 'ただいま障害が発生しております。';
				exit();
			}		
		?>

		<p>スタッフコード:
			<?php print $staff_code; ?>
		</p>
		<p>スタッフ名 : 
			<?php print $staff_name; ?>
		</p>

		<input type="button" onclick="history.back()" value="back">

	</main>

	<footer></footer>

<script src="./public/js/index.js"></script>
</body>
</html>
