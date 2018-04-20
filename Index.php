<!-- 
Alle comments dan er met een "//"  in
Alle vragen staan er zo in: "* ....?"	
-->

<?php 

// Je moet alle bestanden require'n zodat er in elk bestand bepaalde informatie word gehaald
// *Zou deze regel code met require korter kunnen?
require 'Pokemon.php';
require 'Attack.php';
require 'Charmeleon.php';
require 'Pikachu.php';
require 'Weakness.php';
require 'Resistance.php';




$pikachu = new Pikachu('Pikachu');
$charmeleon = new Charmeleon('Charmeleon');

$pikachu = echoAttack();
$charmeleon = echoAttack();


$pikachu->echoAttack();
echo '<p>Pikachu valt Charmeleon aan met een Electric Ring </p>';
		$pikachu->attack($charmeleon , "Electric Ring");
		$charmeleon->echoAttack();


$charmeleon->echoAttack();
	echo '<p>Charmeleon valt Pikachu aan met een Flare </p>';
		$charmeleon->attack($pikachu , "Flare");
		$pikachu->echoAttack();





?>