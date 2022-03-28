<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
<meta charset="utf-8" />
<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
<title>Kalkulator</title>
</head>
<body> 

<div style="width:90%; margin: 2em auto;">
	
	<a href="<?php print(_APP_ROOT); ?>/app/security/logout.php" class="pure-button pure-button-active">Wyloguj</a>
</div>



<form style="width:90%; margin: 2em auto;" action="<?php print(_APP_ROOT);?>/app/calc.php" method="post" class="pure-form pure-form-stacked">
	<legend>Kalkulator</legend>
	<fieldset>
	<label for="id_x">Podaj kwotę złożoną na lokatę: </label>
	<input id="id_x" type="text" name="x" value="<?php out($x) ?>"  />
	<label for="id_y">Podaj roczne oprocentowanie lokaty: </label>
	<input id="id_y" type="text" name="y" value="<?php out($y) ?>" />
	<label for="id_z">Podaj czas trwania lokaty w dniach </label>
	<input id="id_z" type="text" name="z" value="<?php out($z) ?>" />

	<input type="submit" value="Oblicz" class="pure-button pure-button-primary"/>
</form>	

<?php
//wyświeltenie listy błędów, jeśli istnieją
if (isset($messages)) {
	if (count ( $messages ) > 0) {
		echo '<ol style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">';
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>

<?php if (isset($result)){ ?>
<div style="margin: 20px; padding: 15px; border-radius: 50px; background-color: #008000; width:300px;">
<?php echo 'Wynik w zaokrągleniu: '.$result; ?>
</div>
<?php } ?>

</body>
</html>