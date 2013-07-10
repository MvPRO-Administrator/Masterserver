<?php

	$host = "127.0.0.1"; 
	$user = "fake";
	$pass = "fake";
	$db = "fake";
	$dbtable = "servers";
	$settings_table = "settings";
	
	//$msip = "127.0.0.1"; 
	//$msport = 27010;
	
	//$sort = 0; // 1 - включить сортировку по пингу на клиенте, 0 - выкючить

	mysql_pconnect($host, $user, $pass);   
	mysql_select_db($db); 
	
	if(!$settings=mysql_fetch_assoc(mysql_query("SELECT * FROM `settings`"))) die("mysql error");
	
?>