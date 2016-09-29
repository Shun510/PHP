<?php
// おみくじの群れを用意する
$mikuji_array = array(
  //'<img src="">大大吉',
  'daikichi.gif',
  'suekichi.gif',
  'chukichi.gif',
  'daikyo.gif',
  'kichi.gif',
  'kyo.gif',
  'shokichi.gif',

);
//var_dump($mikuji_array);
//var_dump($mikuji_array[0]);

// おみくじを引く
$i = mt_rand(0, count($mikuji_array) - 1 );
$mikuji_string = $mikuji_array[$i];

?>
<html>

<head>
  <title>おみくじ</title>
</head>

<body>
今日のあなたの運勢は
【<img src = "<?php echo $mikuji_string; ?>">】です！
</body>

</html>
