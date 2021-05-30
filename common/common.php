<?php
	// 入力された値に対して元号を返す
	function gengo($val){
		$gengo = '入力内容に対応しておりません。別の値を入力してやり直してください。';

		if(1868 <= $val && 1911 >= $val){
			$gengo = '明治';
		}
		if(1912 <= $val && 1925 >= $val){
			$gengo = '大正';
		}
		if(1926 <= $val && 1988 >= $val){
			$gengo = '昭和';
		}
		if(1989 <= $val && 2018 >= $val){
			$gengo = '平成';
		}
		if(2019 <= $val){
			$gengo = '令和';
		}
		return $gengo;
	}

	// 安全対策
	function sanitize($before_val){
		foreach($before_val as $key=>$val){
			$after_val($key) = htmlspecialchars($val,ENT_QUOTES,'UTF-8');
		}
		return $after_val;
	}

	// パンくずを生成する関数
	// メニューリスト
	$_menu = array(
		"/index.php" => "ホーム",
		"/product/prooduct_list.php" => "商品リスト",
		"/staff/staff_list.php" => "店員リスト",
		"/limited/fruits_type.php" => "果物の種類",
		"/limited/school.php" => "学年別案内",
		"/limited/seasonal_fruits.php" => "旬の果物",
		"/limited/year.php" => "元号案内",
	);
	
	function breadCrumns($path,$_menu){
		$array_path = explode("/",$path);
		foreach($array_path as $val){
			@$tmp1 .= "{$val}/";
			$tmp2  = str_replace(".php/index.php",".php","{$tmp1}index.php");
			$breadcrumns[$tmp2] = $_menu[$tmp2];
		}
		return $breadcrumns;
	}

?>