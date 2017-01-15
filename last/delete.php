<?php
	$action = "delete2.php";
	$submit = "削除する";
	$instruct = "削除する商品情報を確認";
	$noedit = '';
	
	require("fromdb.php");
	
	if (strlen($msg) > 0)
		die($msg);
	
	require("form.php");
?>