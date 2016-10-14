//年月日を送信するプログラム
/*---2016/10/14---*/

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>年月日を送信</title>
</head>
<form action="./kadai31.php" method="post">
<?php

// 「今日の日付」を取得
$year = date('Y');
$month = date('m');
$todays_date = date('d');
//var_dump($todays_date);
echo "日付を入力してください.<br>\n";
echo "<br>";

/*--------------年----------------------------------------------------*/
echo "<select name = 'toshi'>\n";
//
//
for($j = 2000; $j <= 2020; $j ++) {
  if ($j == $year) {
    // 書き出す日付と今日の日付が合致していたら、selectedを追記出来るようにしておく
    $atr = " selected";
  } else {
    $atr = "";
  }
  // 出力
  echo "<option value='" , $j , "'" , $atr , ">" , $j , "</option>\n";
    
}
//
echo "</select>\n";
echo "年\n";

/*--------------年ここまで------------------------------------------------*/
/*--------------月----------------------------------------------------*/
echo "<select name = 'tuki'>\n";
//
//
for($k = 1; $k <= 12; $k ++) {
  if ($k == $month) {
    // 書き出す日付と今日の日付が合致していたら、selectedを追記出来るようにしておく
    $atr = " selected";
  } else {
    $atr = "";
  }
  // 出力
  echo "<option value='" , $k , "'" , $atr , ">" , $k , "</option>\n";
    
}
//
echo "</select>\n";
echo "月\n";
/*--------------月ここまで------------------------------------------------*/
/*--------------日----------------------------------------------------*/
echo "<select name = 'niti'>\n";
//
//
for($i = 1; $i <= 31; $i ++) {
  if ($i == $todays_date) {
    // 書き出す日付と今日の日付が合致していたら、selectedを追記出来るようにしておく
    $atr = " selected";
  } else {
    $atr = "";
  }
  // 出力
  echo "<option value='" , $i , "'" , $atr , ">" , $i , "</option>\n";
    
}
//
echo "</select>\n";
echo "日<br>\n";
/*--------------日ここまで------------------------------------------------*/
?>

<button type="submit">送信する</button>
    </form></html>