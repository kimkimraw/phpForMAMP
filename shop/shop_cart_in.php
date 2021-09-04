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

				if(isset($_SESSION['cart']) == true){
					$cart[] = $_SESSION['cart'];
				}
				
				$cart = (int)$product_code;
				$_SESSION['cart'] = $cart;


			}catch(Exception $e){
				print 'ただいま障害が発生しております。';
				exit();
			}		
		?>

		<p>カートに追加しました。</p>
		<a href="shop_list.php">商品一覧</a>

	</main>

	<footer></footer>

<script src="./public/js/index.js"></script>
</body>
</html>
