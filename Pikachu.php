<?php 
class Pikachu extends Pokemon {
	public $health = 60;
	public $hitpoints = 60;

	public function __construct($name){

		$energyType = new EnergyType('Lightning');
		$weakness = new Weakness('Fire', '1.5');
		$resistance = new Resistance('Fighting', 20);
		$attacks = array( new Attack('Electric Ring', 50), new Attack('Pika Punch', 20) );
		//Een parent::__construct word gebruikt om de class binnen de child construct iets te laten doen en vervolgens word de parent ge-execute
		parent::__construct($name, $this->hitpoints, $energyType, $weakness, $attacks, $this->health, $resistance);
	}
}
?>