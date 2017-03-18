<?php
	include 'DBHelper.php';
	
	$page = $_POST["page"];
	$pageNum = ($page-1)*12;
	
	$sql = ("select * from onejson limit  $pageNum,12");
	query($sql);
	?>