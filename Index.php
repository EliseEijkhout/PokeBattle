<!-- 
Alle comments dan er met een "//"  in
Alle vragen staan er zo in: "* ....?"	
Tip van Mark: CRTL+/
-->

<?php 
// Je moet alle bestanden require'n zodat er in elk bestand bepaalde informatie word gehaald
// *Zou deze regel code met require korter kunnen? Ja, d.m.v. spl_autoload_register(function($class){require_once "foldername/{$class}.php"})
require_once 'Pokemon.php';
require_once 'Attack.php';
require_once 'Charmeleon.php';
require_once 'Pikachu.php';
require_once 'Weakness.php';
require_once 'Resistance.php';
require_once 'EnergyType.php';

//Een object is een daadwerkeljke individuele instance van een class. Dus zoals hier onder staat zijn Pikachu & Charmeleon een object van de class Pikachu>Pokemon
$pikachu = new Pikachu('Pikachu');
$charmeleon = new Charmeleon('Charmeleon');

$pikachu->echoAttack();
$charmeleon->echoAttack();

echo '<p>Pikachu valt Charmeleon aan met een Electric Ring attack</p>';
$pikachu->attack($charmeleon , "Electric Ring");

$charmeleon->echoAttack();

echo '<p>Charmeleon valt Pikachu aan met een Flare attack</p>';
$charmeleon->attack($pikachu , "Flare");

$pikachu->echoAttack();
?>