CTYPE html>
<html>
<head>
<meta charset="utf-8">
<title> PHP Hello World</title>
</head>
<body>
<? if ($_POST['who'] != '') {?>
<h1>Hello <? echo htmlspecialchars($_POST['who']); ?></h1>
<a href="index.php">Greet someone else</a>
<? } else { ?>
<form class="greetingForm" action="index.php" method="post">
<label for="who">Say hello to</label>
<input type="text" name="who">
<input type="submit" name="greet" value="We are Saying Hello 3">
</form>
<? } ?>
</body>
</html>

