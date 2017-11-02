<?php
	header("Content-type:text/html;charset=utf-8");
	@mysql_connect("localhost","root","") or die ("失败！");
	mysql_select_db("db_test13") or die ("连接数据库失败");
	mysql_query("set names utf8");
?>