<?php
#入力変数
	#$action = "insert2.php";
	#$submit = "登録する";
	#$instruct = "新規登録する商品情報を入力してください";
	#$isbn = "978-1234567890";
	#$title = "本のタイトル";
	#$price = 1000;
	#$publish = "ABC出版";
	#$published = "2016-11-22";
	#$noedit = 'readonly = "readonly"';
#出力変数
	#なし

// HTML用 エスケープ関数
function h($s) {
  return htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
}
// 「今日の年月日」を取得
$todays_year = date('Y');
$todays_month = date('m');
$todays_day = date('d');
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<style type="text/css">
	body{
		background-color: #00FF00;
	}
</style>
<title>商品情報</title>
</head>
<body>
<h2><?php echo $instruct; ?></h2>
<form method="POST" action="<?php echo $action; ?>">
<p>
	<label>カテゴリ：<br/>
		<select type = "text" name="gen" value="<?php echo h($gen); ?>"
		<?php echo $noedit; ?> />
	<option value="">-----</option>
	<option value="ＤＶＤ・ミュージック・ゲーム">ＤＶＤ・ミュージック・ゲーム</option>
	<option value="家電・カメラ・AV機器">家電・カメラ・AV機器</option>
	<option value="パソコン・オフィス用品・周辺機器">パソコン・オフィス用品・周辺機器</option>
	<option value="本">本</option>
	<option value="文房具">文房具</option>
	<option value="ホーム＆キッチン・ペット・DIY">ホーム＆キッチン・ペット・DIY</option>
	<option value="食品・飲料・お酒">食品・飲料・お酒</option>
	<option value="ベビー・おもちゃ・ホビー">ベビー・おもちゃ・ホビー</option>
	<option value="その他">その他</option>
	
		</select>
	</label>選択してください
</p>
<p>
	
	<label>ＪＡＮ/ISBNコード：<br />
		<input type="text" name="jan" size="20" value="<?php echo $jan; ?>" 
		<?php echo $noedit; ?> />
	</label> 例: 49(45)-12345678901　or 978-1234567890
</p>
<p>
	<label>商品名：<br />
		<input type="text" name="title" size="50" value="<?php echo h($title); ?>" 
		<?php echo $noedit; ?> />
	</label>
</p>
<p>
	<label>本体価格：<br />
		<input type="text" name="price" size="6" value="<?php echo $price; ?>" 
		<?php echo $noedit; ?> />
	</label> 例: 2800
</p>
<p>
	<label>メーカー名：<br />
		<input type="text" name="publish" size="50" value="<?php echo h($publish); ?>" 
		<?php echo $noedit; ?> />
	</label>
</p>
<p>
	<label>登録日：<br />
		<input type="text" name="published" size="12" value="<?php echo $todays_year,"-",$todays_month,"-",$todays_day; ?>" 
		<?php echo $noedit; ?> />
		
	</label> 例: 2016-01-23
</p>
<p>
<script type="text/javascript">
function yesno(){
if(window.confirm("本当によろしいですか？"))
	location.href = $action;
}
</script>
	<input type="submit" onClick="yesno(); return false;" value="<?php echo $submit; ?>" style="background-color:white;"/>
	<input type="button" onClick="history.back();" value="戻る" style="background-color:white;"/>

</p>
</form>
</body>
</html>