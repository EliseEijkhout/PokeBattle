<?php 

require 'Index.php';
require 'Attack.php';
require 'Charmeleon.php';
require 'Weakness.php';
require 'Resistance.php';

class Pikachu extends Pokemon{
	public $health = 60;
	public $hitpoints = 60;
	public $energyType = 'Lightning';

	public function __construct($name){

		$weakness = new Weakness('Fire', 1.5);

		$resistance = new Resistance('Fighting', 20);

		$attacks = array( new Attack('Electric Ring', 50), new Attack('Pika Punch', 20) );

		parent::__construct($name, $this->hitpoints, $energyType, $weakness, $attacks, $this->health, $resistance);
	}
}

?>