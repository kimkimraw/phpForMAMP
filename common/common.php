<?php

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

?>