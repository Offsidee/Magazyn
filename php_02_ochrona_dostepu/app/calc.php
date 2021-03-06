<?php // KONTROLER strony kalkulatora
require_once dirname(__FILE__).'/../config.php';
include _ROOT_PATH.'/app/security/check.php';



// 1. pobranie parametrów

function getParams(&$x, &$y, &$z) {

	$x=isset($_REQUEST['x']) ? $_REQUEST['x']: null;
	$y=isset($_REQUEST['y']) ? $_REQUEST['y']: null;
	$z=isset($_REQUEST['z']) ? $_REQUEST['z']: null;


}




// 2. walidacja parametrów z przygotowaniem zmiennych dla widoku

function validate(&$x, &$y, &$z, &$messages) {

	if( ! (isset($x) && isset($y) && isset($z))) {

		return false;

	}

	if ($x=="") {
		$messages []='Nie podano liczby 1';
	}

	if ($y=="") {
		$messages []='Nie podano liczby 2';
	}

	if ($z=="") {
		$messages []='Nie podano liczby 3';
	}

if (count ( $messages ) != 0) return false;

if (! is_numeric( $x )) {
		$messages [] = 'Pierwsza wartość nie jest liczbą całkowitą';
	}
	
	if (! is_numeric( $y )) {
		$messages [] = 'Druga wartość nie jest liczbą całkowitą';
	}	

	if (! is_numeric( $z )) {
		$messages [] = 'Trzecia wartość nie jest liczbą całkowitą';
	}	

	if (count ( $messages ) != 0) return false;
	else return true;
}





// 3. wykonaj zadanie jeśli wszystko w porządku
function process(&$x,&$y,&$z,&$messages,&$result){
if (empty ($messages)) {
	// gdy brak błędów

	//konwersja parametrów na double
	$x=doubleval($x);
	$y=doubleval($y);
	$z=doubleval($z);


	$y=$y/100;

	$wynik=$x * $y * $z/365;

	$result=round($wynik, 2);

}
}

//definicja zmiennych kontrolera
$x = null;
$y = null;
$z = null;
$result = null;
$messages = array();

//pobierz parametry i wykonaj zadanie jeśli wszystko w porządku
getParams($x,$y,$z);
if ( validate($x,$y,$z,$messages) ) { // gdy brak błędów
	process($x,$y,$z,$messages,$result);
}

// 4. Wywołanie widoku z przekazaniem zmiennych
// - zainicjowane zmienne ($messages,$x,$y,$operation,$result)
//   będą dostępne w dołączonym skrypcie
include 'calc_view.php';