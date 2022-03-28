<?php require_once dirname(__FILE__) .'/../config.php';?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
<meta charset="utf-8" />
<title>Kalkulator</title>
</head>
<body> 

<form style= "margin-left: auto;
    margin-right: auto;" action="<?php print(_APP_URL);?>/app/calc.php" method="post">

	<label for="id_x">Podaj kwotę złożoną na lokatę: </label>
	<input id="id_x" type="text" name="x" value="<?php print(isset($x)); ?>" /><br />
	<label for="id_y">Podaj roczne oprocentowanie lokaty: </label>
	<input id="id_y" type="text" name="y" value="<?php print(isset($y)); ?>" /><br />
	<label for="id_z">Podaj czas trwania lokaty w dniach </label>
	<input id="id_z" type="text" name="z" value="<?php print(isset($z)); ?>" /><br />

	<input type="submit" value="Oblicz" />
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