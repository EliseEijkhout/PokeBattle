<!-- 
Alle comments dan er met een "//"  in
Alle vragen staan er zo in: "* ....?"	
-->

<?php 

// Je moet alle bestanden require'n zodat er in elk bestand bepaalde informatie word gehaald
// *Zou deze regel code met require korter kunnen?
require_once 'Pokemon.php';
require_once 'Attack.php';
require_once 'EnergyType.php';
require_once 'Charmeleon.php';
require_once 'Pikachu.php';
require_once 'Weakness.php';
require_once 'Resistance.php';

//Een object is een daadwerkeljke individuele instance van een class. Dus zoals hier onder staat zijn Pikachu & Charmeleon een object van de class Pikachu>Pokemon
$pikachu = new Pikachu('Pikachu');
$charmeleon = new Charmeleon('Charmeleon');

$pikachu->echoAttack();
$charmeleon->echoAttack();


$pikachu->echoAttack();
echo '<p>Pikachu valt Charmeleon aan met een Electric Ring </p>';
		$pikachu->attack($charmeleon , "Electric Ring");
		$charmeleon->echoAttack();


$charmeleon->echoAttack();
	echo '<p>Charmeleon valt Pikachu aan met een Flare </p>';
		$charmeleon->attack($pikachu , "Flare");
		$pikachu->echoAttack();
?>