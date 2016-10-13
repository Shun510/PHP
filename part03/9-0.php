<h3>通常の配列</h3>
<?php
// Create $dinner with three elements
$dinner = array('Sweet Corn and Asparagus', 'Lemon Chicken',
'Braised Bamboo Fungus');
echo "I want ", $dinner[0], " and ", $dinner[1], "<br>";
// Add an element to the end of $dinner
// This sets $dinner[3]
$dinner[] = 'Flank Skin with Spiced Flavor';
echo "I like ", $dinner[3];
?>

<h3>連想配列</h3>
<?php
// Create $vegetables with three elements
$vegetables = array('corn' => 'yellow', 'beet' => 'red', 'carrot' => 'orange');
echo "The color of corn is ", $vegetables['corn'], "<br>";
// Add an element to the end of $dinner
$vegetables['spinach'] = 'green';
echo "The color of spinach is ", $vegetables['spinach'];
?>

<h3>foreach文</h3>
<?php
// Using foreach() with numeric arrays
foreach ($dinner as $dish) {
  echo "You can eat: ", $dish, " <br>";
}
// Using foreach() with associative arrays
foreach ($vegetables as $key => $value) {
  echo $key, " : ", $value, "<br>";
}
?>

<h3>implode/explode関数</h3>
<?php
$str1 = implode("+", $dinner);
var_dump($str1);
echo "<br>";
$str2 = "ab cdef ghi";
$ary2 = explode(" ", $str2);
var_dump($ary2);
?>