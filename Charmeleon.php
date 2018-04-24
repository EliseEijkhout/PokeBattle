<?php 
class Charmeleon extends Pokemon {
	public $health = 60;
	public $hitpoints = 60;

	public function __construct($name){

		$energyType = new EnergyType('Fire');
		$weakness = new Weakness('Water', '1.5');
		$resistance = new Resistance('Fighting', 20);
		$attacks = array(new Attack('Flare', 30), new Attack('Head Butt' , 10 ));
		
		parent::__construct($name, $this->hitpoints, $energyType, $weakness, $attacks, $this->health, $resistance);
	}
}	
?>