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
	<header><h1>STAFF一覧</h1></header>
	
	<main>
		<?php
			try{
				$dsn = 'mysql:dbname=shop;host:localhost;charset=utf8';
				$user = 'root';
				$password = 'root';
				$dbh = new PDO($dsn,$user,$password);
				$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

				$sql = 'SELECT CODE,NAME FROM `mst_staff` WHERE 1';
				$stmt = $dbh->prepare($sql);
				$stmt->execute();

				$dbh = null;

				print '<form method="post" action="staff_branch.php">';
				while(true){
					$rec = $stmt->fetch(PDO::FETCH_ASSOC);
					if($rec == false){
						break;
					}
					print '<input type="radio" name="staffcode" value="'.$rec['CODE'].'">';
					print $rec['NAME'];
					print '<br>';
				}
				print '<input type="submit" value="disp" name="disp">';
				print '<input type="submit" value="add" name="add">';
				print '<input type="submit" value="edit" name="edit">';
				print '<input type="submit" value="delete" name="delete">';
				print '</form>';

			}catch(Exception $e){
				print 'ただいま障害が発生しております。';
				exit();
			}
		?>
	</main>

	<footer></footer>

<script src="./public/js/index.js"></script>
</body>
</html>
