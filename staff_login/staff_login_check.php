<?php
	try{
		$staff_code = $_POST['code'];
		$staff_pass = $_POST['pass'];
		$staff_pass = md5($staff_pass);

		$dsn = 'mysql:dbname=shop;host:localhost;charset=utf8';
		$user = 'root';
		$password = 'root';
		$dbh = new PDO($dsn,$user,$password);
		$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

		$sql = 'SELECT NAME FROM mst_staff WHERE CODE=? AND PASSWORD=?';
		$stmt = $dbh->prepare($sql);
		$data[] = $staff_code;
		$data[] = $staff_pass;
		$stmt->execute($data);

		$dbh = null;
		$rec = $stmt->fetch(PDO::FETCH_ASSOC);

		if($rec == false){
			print '<p>スタッフコードが誤っています。</p>';
			print '<a href="staff_login.html">back</a>';
		}else{
			session_start();
			$_SESSION['login'] = 1;
			$_SESSION['staff_code'] = $staff_code;
			$_SESSION['staff_name'] = $rec['NAME'];

			header('Location:staff_top.php');
			exit();
		}
	}catch(Exception $e){
		print 'ただいま障害が発生しております。';
		exit();
	}
?>
