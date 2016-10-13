<?php
function page_header($color) {  // 引数あり、戻り値なし関数
  echo '<html><head><title>Welcome to my site</title></head>';
  echo '<body bgcolor="', $color, '">';
}

function page_footer() {  // 引数なし、戻り値なし関数
  echo '<hr>Thanks for visiting.';
  echo '</body></html>';
}

function welcome($name) {  // 引数あり、戻り値あり関数
  return "Welcome " . $name . "さん";
}

page_header('#ccccff');
echo welcome('千住');
page_footer();
?>