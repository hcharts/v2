<?php
	// Database config
	define("DB_HOST","localhost");
	define("DB_USER","root");
	define("DB_PASS","123456");
	define('DB_NAME', "hc_main");

	// Base path
	define('BASEPATH', '/v2/');

	// mysql connect
	function my_mysql_connect() {
		$link = mysql_connect(constant('DB_HOST'),constant('DB_USER'),constant('DB_PASS'));
		mysql_select_db(constant('DB_NAME'),$link);	
		return $link;
	}
	
	// mysql query
	function my_mysql_query($link,$query) {
		mysql_query("set names utf8");
		return mysql_query($query,$link);
	}
	
	//mysql update
	function m($link,$update) {
		mysql_query("set names utf8");
		return mysql_query($update,$link);
	}
?>