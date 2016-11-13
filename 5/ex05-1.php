<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
  <title>データを表示</title>
  <style type="text/css">
  <!--
table, th, td{border:solid 1px; border-collapse:collapse; padding:8px;}
  tr.top {background-color:#ddd;}
  -->
</style>
</head>
<body>
<h1>受信したデータ</h1>
<?php
function h($s) {
  return htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
}
$i=0;
$j=0;
$hairetu= array('');
$deeta = h($_POST['data']);
$array = explode("\n", $deeta); 

while(true){
	if(isset($array[$i])==false)break;
$hairetu2 = explode(",",$array[$i]);
array_push($hairetu,$hairetu2);
$i ++;
}
unset($hairetu[0]);
echo "<table border='1'>";
foreach ($hairetu as $row) {
	if($j==0){
		
		    echo "<tr class=\"top\">";
    foreach ($row as $val) 
        echo "<td>$val</td>";
    echo "</tr>";
	$j=1;
	}
	else{
    echo "<tr>";
    foreach ($row as $val)
        echo "<td>$val</td>";
    echo "</tr>";
	}
}
echo "</table>";
?>

</body>
</html>