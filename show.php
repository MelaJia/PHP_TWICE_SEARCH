<?php
	header("Content-type:text/html;charset = utf-8");
	$xm = $_GET['stuname'];
	include_once("conn.php");
	session_start();
	$sql = $_SESSION['sql'];
	$sql = $sql." and xm like '%$xm%'";
	$r = mysql_query($sql);
	echo '<table id="tblstu" border="1" style="border-collapse:collapse;">';
	echo '<tr><td>学号</td><td>姓名</td></tr>';
    while($row = mysql_fetch_array($r)){
		echo '<tr >';
		echo '<td>'.$row['xh'].'</td>';
		echo '<td>'.$row['xm'].'</td>';
		echo '</tr>';
	}
	
	echo '</talbe>';
?>