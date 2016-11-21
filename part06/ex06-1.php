<?php
function h($s){
	return htmlspecialchars($s,ENT_QUOTES, 'UTF-8');
}
$data = $_POST['data'];
$lines = explode(" ",$data);
$outlines = array_count_values($lines);		?>

<!DOCTYPE html>
<html lang="ja">
<head>
<style type="text/css">
	table, th, td {border:solid 1px; border-collapse:collapse; padding:4px;}
</style>
<title>データを表示</title>
</head>
<body>
<h1>語句の出現頻度</h1>
<table><?php

foreach($outlines as $key => $kazu){
	if($kazu == "1"){}
	else if(preg_match("/.{2}/u", $key)){
		echo "<tr><td>$key</td><td>$kazu</td></tr>";}
} 	?>
</table>
</body>
</html>
