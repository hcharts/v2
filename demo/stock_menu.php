<?php 
	session_start();
	if((!isset($_SESSION['error'])) || $_SESSION['error'] == true ) {				
			$_SESSION['error'] = true;
			Header("Location:/404.html");
			exit;
	}
	

	ob_start();
	include "../config.php";
	include "../function.php";
	
	$link = my_mysql_connect(constant("DB_HOST"),constant("DB_USER"),constant("DB_PASS"),constant("DB_NAME"));
	$ul = query_news($link,"select id,file,name from hc_demo where parent= 0 and type = 20");
	
	
	while($row = mysql_fetch_row($ul)) {
		echo "<h3>".$row[2]."</h3>\n";//<span index='$row[1]'>展开/折叠</span>
		echo "<ul index='$row[1]'>\n";
		$li = query_news($link,"select id,name from hc_demo where type = 2 and status = 0 and parent = ".$row[0]);
		while($li_row = mysql_fetch_row($li)) {
			echo "\t<li id='$li_row[0]'><a href='highstock.php?p=$li_row[0]'>$li_row[1]</a></li>\n";
		}
		echo "</ul>\n";
	}
	
	$file = "stock_menu.html";
	$handle = fopen($file,"w");
	$ob = ob_get_contents();
	fwrite($handle,$ob);
	fclose($handle);
	ob_end_clean();
	
	echo "Update Success!";
?>