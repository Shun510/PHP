//受信した年月日を表示するプログラム
/*---2016/10/14---*/

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>受信した年月日を表示</title>
</head>
    
<?php


// 出力時に必須の関数
// (HTML用 エスケープ関数)
function h($s) {
  return htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
}

$toshi = h($_POST['toshi']);
$tuki  = h($_POST['tuki']);
$niti  = h($_POST['niti']);

$datetime = new DateTime();
$datetime->setDate($toshi, $tuki, $niti);
$week = array('日','月', '火', '水', '木', '金', '土'  );
//現在の曜日番号（日:0  月:1  火:2  水:3  木:4  金:5  土:6）を取得
$w = (int)$datetime->format('w');
$youbi = $week[$w];


// HTMLから受け取った要素を出力する
echo "入力された日付は、{$toshi}年{$tuki}月{$niti}日({$youbi})です。<br>\n";

?>
    
</html>