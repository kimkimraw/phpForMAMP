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
		if(isset($_POST['staffcode']) == false){
			header('Location:staff_ng.php');
			exit();
		}
		$staff_code = $_POST['staffcode'];
		header('Location:staff_disp.php?staffcode='.$staff_code);
		exit();
	}

	if(isset($_POST['edit']) == true){
		if(isset($_POST['staffcode']) == false){
			header('Location:staff_ng.php');
			exit();
		}
		$staff_code = $_POST['staffcode'];
		header('Location:staff_edit.php?staffcode='.$staff_code);
		exit();
	}

	if(isset($_POST['delete']) == true){
		if(isset($_POST['staffcode']) == false){
			header('Location:staff_ng.php');
			exit();
		}
		$staff_code = $_POST['staffcode'];
		header('Location:staff_delete.php?staffcode='.$staff_code);
		exit();
	}

	if(isset($_POST['add']) == true){
		header('Location:staff_add.php');
		exit();
	}

?>