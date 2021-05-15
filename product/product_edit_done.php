<?php
	session_start();
	//「セッションハイジャック」対策
	session_regenerate_id(true); //セッション情報を変更
	if(isset($_SESSION['login']) == false ){
		print '<p>ログインしておりません。</p>';
		print '<a href="../staff_login/staff_login.html">ログイン画面へ</a>';
		exit();
	}else{
		print '<p>'.$_SESSION['staff_name'].'さんログイン中</p>';
	}
?>
<!-- セッション情報を確認。　※1行目に記載しないとエラーとなる -->
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
	<header><h1>商品編集</h1></header>
	
	<main>
		<?php
			try{
				$product_code = $_POST['code'];
				$product_name = $_POST['name'];
				$product_price = $_POST['price'];
				$product_img_old_name = $_POST['img_old_name'];
				$product_img = $_POST['img'];

				$dsn = 'mysql:dbname=shop;host:localhost;charset=utf8';
				$user = 'root';
				$password = 'root';
				$dbh = new PDO($dsn,$user,$password);
				$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

				$sql = 'UPDATE mst_product SET NAME=?,PRICE=?,IMG=? WHERE CODE=?';
				$stmt = $dbh->prepare($sql);

				$data[] = $product_name;
				$data[] = $product_price;
				$data[] = $product_img;
				$data[] = $product_code;
				$stmt->execute($data);
				$dbh = null;

				if($product_img_old_name != $product_img){
					if($product_img_old_name != ''){
						unlink('./img/'.$product_img_old_name);
					}
				}	

			}catch(Exception $e){
				print 'ただいま障害が発生しております。';
				exit();
			}
		?>
		<p>修正が完了しました</p>
		<p><a href="product_list.php">back</a></p>
	</main>

	<footer></footer>

<script src="./public/js/index.js"></script>
</body>
</html>
