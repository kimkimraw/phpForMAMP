<?php
	session_start();
	//「セッションハイジャック」対策
	session_regenerate_id(true); //セッション情報を変更
	if(isset($_SESSION['member_login']) == false ){
		print '<p>ようこそゲスト様</p>';
		print '<a href="menber_login.html">会員ログイン画面へ</a>';
		print '<br>';
	}else{
		print '<p>ようこそ';
		print $_SESSION['menber_name'];
		print '様</p>'; 
		print '<a href="member_logout.php">ログアウト</a><br>';
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
	<header><h1>商品一覧</h1></header>
	
	<main>
		<?php
			try{
				$product_code = $_GET['procode'];

				$dsn = 'mysql:dbname=shop;host:localhost;charset=utf8';
				$user = 'root';
				$password = 'root';
				$dbh = new PDO($dsn,$user,$password);
				$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

				$sql = 'SELECT NAME,PRICE,IMG FROM mst_product WHERE CODE=?';
				$stmt = $dbh->prepare($sql);
				$data[] = $product_code;
				$stmt->execute($data);

				$rec = $stmt->fetch(PDO::FETCH_ASSOC);
				$product_name = $rec['NAME'];
				$product_price = $rec['PRICE'];
				$product_img_name = $rec['IMG'];

				$dbh = null;

				if($product_img_name == ''){
					$disp_img = '';
				}else{
					$disp_img = '<img src="../product/img/'.$product_img_name.'" style=width:50%;>';
				}
				print '<a href="shop_cart_in.php?procode='.$product_code.'">カートに入れる</a><br>';

			}catch(Exception $e){
				print 'ただいま障害が発生しております。';
				exit();
			}		
		?>

		<p>商品コード:
			<?php print $product_code; ?>
		</p>
		<p>商品名称 : 
			<?php print $product_name; ?>
		</p>
		<p>商品価格 : 
			<?php print $product_price; ?>円
		</p>
		<?php print $disp_img; ?>
		<br>

		<input type="button" onclick="history.back()" value="back">

	</main>

	<footer></footer>

<script src="./public/js/index.js"></script>
</body>
</html>
