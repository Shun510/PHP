<?php

// 文字コード変換
$ustr = '11月';  // UTF-8文字列
echo $ustr, '<br>';
echo bin2hex($ustr), ' [UTF-8]<br>';

$sstr = mb_convert_encoding($ustr, "SJIS");  // sjis文字列
echo bin2hex($sstr), ' [SJIS]<br>';

$jstr = mb_convert_encoding($ustr, "JIS");  // sjis文字列
echo bin2hex($jstr), ' [JIS]<br>';

$zstr = mb_convert_kana($ustr, "A");    // 全角文字列
echo $zstr, '<br>';
echo bin2hex($zstr), ' [UTF-8]<br>';
echo '<br>';

// マルチバイト文字用関数
$str = '平成28年11月';

echo "strlen('$str') = ", strlen($str), '<br>';
echo "mb_strlen('$str') = ", mb_strlen($str), '<br>';

echo "substr('$str', 6, 2) = ", substr($str, 6, 2), '<br>';
echo "mb_substr('$str', 6, 2) = ", mb_substr($str, 6, 2), '<br>';

echo "strpos('$str', '28') = ", strpos($str, '28'), '<br>';
echo "mb_strpos('$str', '28') = ", mb_strpos($str, '28'), '<br>';
