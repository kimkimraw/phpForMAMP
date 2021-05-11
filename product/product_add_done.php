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
		<?php
			try{
				$product_name = $_POST['name'];
				$product_price = $_POST['price'];
				$product_img = 'dummy';

				$dsn = 'mysql:dbname=shop;host:localhost;charset=utf8';
				$user = 'root';
				$password = 'root';
				$dbh = new PDO($dsn,$user,$password);
				$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

				$sql = 'INSERT INTO mst_product(NAME,PRICE,IMG) VALUES(?,?,?)';
				$stmt = $dbh->prepare($sql);

				$data[] = $product_name;
				$data[] = $product_price;
				$data[] = $product_img;
				$stmt->execute($data);
				$dbh = null;

				print $product_name;
				print 'を追加しました';

			}catch(Exception $e){
				print 'ただいま障害が発生しております。';
				exit();
			}
		?>

		<p><a href="product_list.php">back</a></p>
	</main>

	<footer></footer>

<script src="./public/js/index.js"></script>
</body>
</html>
