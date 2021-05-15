<?php
	session_start();
	//「セッションハイジャック」対策
	session_regenerate_id(true); //セッション情報を変更
	if(isset($_SESSION['login']) == false ){
		print '<p>ログインしておりません。</p>';
		print '<a href="../staff_login/staff_login.html">ログイン画面へ</a>';
		exit();
	}
	// セッション情報を確認。　※1行目に記載しないとエラーとなる
	if(isset($_POST['disp']) == true){
		if(isset($_POST['procode']) == false){
			header('Location:product_ng.php');
			exit();
		}
		$product_code = $_POST['procode'];
		header('Location:product_disp.php?procode='.$product_code);
		exit();
	}

	if(isset($_POST['edit']) == true){
		if(isset($_POST['procode']) == false){
			header('Location:product_ng.php');
			exit();
		}
		$product_code = $_POST['procode'];
		header('Location:product_edit.php?procode='.$product_code);
		exit();
	}

	if(isset($_POST['delete']) == true){
		if(isset($_POST['procode']) == false){
			header('Location:product_ng.php');
			exit();
		}
		$product_code = $_POST['procode'];
		header('Location:product_delete.php?procode='.$product_code);
		exit();
	}

	if(isset($_POST['add']) == true){
		header('Location:product_add.php');
		exit();
	}

?>