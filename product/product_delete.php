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
	<header><h1>商品削除</h1></header>
	
	<main>
		<?php
			try{
				$product_code = $_GET['procode'];

				$dsn = 'mysql:dbname=shop;host:localhost;charset=utf8';
				$user = 'root';
				$password = 'root';
				$dbh = new PDO($dsn,$user,$password);
				$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

				$sql = 'SELECT NAME,IMG FROM mst_product WHERE CODE=?';
				$stmt = $dbh->prepare($sql);
				$data[] = $product_code;
				$stmt->execute($data);

				$rec = $stmt->fetch(PDO::FETCH_ASSOC);
				$product_name = $rec['NAME'];
				$product_img = $rec['IMG'];

				$dbh = null;

				if($product_img == ''){
					$disp_img = '';
				}else{
					$disp_img = '<img src="./img/'.$product_img.'" style="width:50%;">';
				}

			}catch(Exception $e){
				print 'ただいま障害が発生しております。';
				exit();
			}		
		?>

		<p>商品名称:
			<?php print $product_name; ?>
		</p>
		<?php print $disp_img;?>

		<form method="post" action="product_delete_done.php">
			<input type="hidden" name="code" value="<?php print($product_code); ?>">
			<input type="hidden" name="img" value="<?php print $product_img; ?>">
			<p>この商品を削除してよろしいですか？</p>
			<input type="button" onclick="history.back()" value="back">
			<input type="submit" value="OK">
		</form>
	</main>

	<footer></footer>

<script src="./public/js/index.js"></script>
</body>
</html>
