<?php

$dice1 = mt_rand(1,6);
$dice2 = mt_rand(1,6);

$zorome = ($dice1 == $dice2) ? true : false;

?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<title>サイコロ</title>
</head>
<body>
	<h1>サイコロ</h1>
	<p>サイコロの目は「<?php echo $dice; ?>」「<?php echo $dice; ?>」でした！
			<?php if ($zorome == true) ; ?>
			<<?php endif; ?>
			ゾロ目です！
		</p>
	<p><a href="<?php $_SERVER["SCRIPT_NAME"];?>">もう一度！</a></p>
</body>
</html>