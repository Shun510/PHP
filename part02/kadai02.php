 // 現在の日付・時刻・曜日を表示例のように日本語で表の形式で表示するページを作成する。
<table border="1">
<?php

$day = date("Y年m月d日"); // 年月日
$time = date("h時i分s秒"); // 時分秒
$weekjp = array(
  '日', //0
  '月', //1
  '火', //2
  '水', //3
  '木', //4
  '金', //5
  '土'  //6
);
//現在の曜日番号（日:0  月:1  火:2  水:3  木:4  金:5  土:6）を取得
$weekno = date('w');

echo '<tr align="center">';
echo '<td>',"日付",'</td>','<td>',$day, '</td>';
echo '</tr>';
echo '<tr align="center">';
echo '<td>',"時刻",'</td>','<td>',$time,"</td>";
echo '</tr>';
echo '<tr align="center">';
echo '<td>',"曜日",'</td>','<td>',$weekjp[$weekno] ,'曜日','</td>';
echo '</tr>';

?>
</table>
