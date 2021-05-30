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
	<header><h1>商品追加</h1></header>
	
	<main>
		<?php
			require_once('../common/common.php');

			$post = sanitize($_POST);
			$product_name = $post['name'];
			$product_price = $post['price'];
			$product_img = $_FILES['img'];


			if($product_name == ''){
				print '商品名を入力してください';
				print '<br>';
			}else{
				print '商品名 : ';
				print $product_name;
				print '<br>';
			}
			// 価格が「半角数字以外」であればTRUE
			if(preg_match('/^[\d]+$/',$product_price) == false){
				print '価格は半角数字で入力してください。';
				print '<br>';
			}else{
				print '価格 : ';
				print $product_price;
				print '<br>';
			}

			if($product_img['size'] > 0){
				if($product_img['size'] > 1000000){
					print '画像サイズが大きすぎます';
				}else{
					move_uploaded_file($product_img['tmp_name'],'./img/'.$product_img['name']);
					print '<img src="./img/'.$product_img['name'].'" style="width:50%;">';
					print '<br>';
				}

			}

			if($product_name == '' || preg_match('/^[\d]+$/',$product_price) == false || $product_img['size'] > 1000000){
				print '<form>';
				print '<input type="button" onclick="history.back()" value="back">';
				print '</form>';
			}else{
				print '<form method="post" action="product_add_done.php">';
				print '<input type="hidden" name="name" value="'.$product_name.'">';
				print '<input type="hidden" name="price" value="'.$product_price.'">';
				print '<input type="hidden" name="img" value="'.$product_img['name'].'">';
				print '<input type="button" onclick="history.back()" value="back">';
				print '<input type="submit" value="OK">';
				print '</form>';
			}
		?>
	</main>

	<footer></footer>

<script src="./public/js/index.js"></script>
</body>
</html>
