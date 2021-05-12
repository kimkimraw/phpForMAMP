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
	<header><h1>商品修正</h1></header>
	
	<main>
		<?php
			$product_code = $_POST['code'];
			$product_name = $_POST['name'];
			$product_price = $_POST['price'];
			$product_img_old_name = $_POST['img_old_name'];
			$product_img = $_FILES['img'];
			

			if($product_name == ''){
				print '商品名称を入力してください';
			}else{
				print '商品名称 : ';
				print $product_name;
				print '<br>';
			}

			if($product_price == ''){
				print '商品価格を入力してください';
			}else{
				print '商品名称 : ';
				print $product_price;
				print '<br>';
			}

			if($product_img['size'] > 0){
				if($product_img['size'] > 1000000){
					print '画像サイズが大きすぎます';
				}else{
					move_uploaded_file($product_img['tmp_name'],'./img/'.$product_img['name']);
					print '<img src="./img/'.$product_img_old_name.'" style="width:50%;">';
					print '<img src="./img/'.$product_img['name'].'" style="width:50%;">';
					print '<br>';
				}

			}


			if($product_name == '' || $product_price == ''){
				print '<form>';
				print '<input type="button" onclick="history.back()" value="back">';
				print '</form>';
			}else{
				print '<form method="post" action="product_edit_done.php">';
				print '<input type="hidden" name="code" value="'.$product_code.'">';
				print '<input type="hidden" name="name" value="'.$product_name.'">';
				print '<input type="hidden" name="price" value="'.$product_price.'">';
				print '<input type="hidden" name="img_old_name" value="'.$product_img_old_name.'">';
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
