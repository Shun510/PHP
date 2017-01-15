<?php
	$action = "update2.php";
	$submit = "更新する";
	$instruct = "商品情報を更新";
	$noedit = '';
	
	require("fromdb.php");
	
	if (strlen($msg) > 0)
		die($msg);
	require("form.php");
?>
