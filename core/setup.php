<?php
	//グローバルurlの設定
	define('GLOBAL_URL','http://localhost:1024/');
	define('GLOBAL_SURL','https://localhost:1024/');
	//マイページの設定
	define('USER_URL','mypage/');
	//スマホページの設定
	define('SP_URL','s/');

	$host = "localhost";
	$user = "root";
	$pass = "root";
	$dbname = "";
	/*gloal
	  $host = "";
	  $user = "";
	  $pass = "";
	  $dbname = "";
	*/

	//データベースの設定
	if(!$Link = mysqli_connect($host,$user,$pass)){
	  exit("MySQL：DB接続失敗："
	  .mysqli_connect_error());
	}
	//  文字コードの指定（クエリー送信）
	if(!mysqli_query($Link,"set names 'utf8'")){
	  exit("MySQL：クエリー送信失敗");
	}

	//  使用するDB指定
	if(!mysqli_select_db($Link,$dbname)){
	  exit("MySQL：DB指定失敗");
	}

	//現在の日付
	$timestamp	= date("Y-m-d H:i:s");
	//消費税
	$tax		= 1.08;

?>
