<?php

$i = PHP_INT_MAX;
var_dump($i);
$i ++;
var_dump($i); // 型がfloatになる
echo "<br>\n";
//
$i = PHP_INT_MAX * -1;
var_dump($i);
$i --;
var_dump($i);
$i --;
var_dump($i); // 型がfloatになる
