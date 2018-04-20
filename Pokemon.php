<?php

class Pokemon {
		public $name;
		public $energyType;
        public $attacks;
		public $hitpoints;
        public $resistance;
		public $health;
        public $weakness;

    // In een constructor kan een aantal properties gezet worden wanneer je een nieuw object aanmaakt gebasseerd op de Pokemon class

	public function __construct($name, $energyType, $attacks, $hitpoints, $resistance, $weakness) {
        $this->name = $name;
        $this->energyType = $energyType;
        $this->health = $hitpoints;
        $this->attacks = $attacks;
        $this->hitpoints = $hitpoints;
        $this->resistance = $resistance;
        $this->weakness = $weakness;
    }



    public function attack($pokemon, $att) {
        foreach ($this->attacks as $attack) {
            if ($attack->name == $att) {
                $damage = $attack->damage;
                
                if ($this->energyType == $pokemon->resistance->energyType) {
                    $damage = $damage - $pokemon->resistance->value;
                }
               
                if ($this->energyType == $pokemon->weakness->energyType) {
                    $damage = $damage * $pokemon->weakness->multiplier;
                }
                
                $newHealth = $pokemon->health - $damage;
                $pokemon->health = $newHealth;
                
            }
        }
    }

    //json_encode gaat opzoek naar de properties van het object en deze formateren in het json formaat

    public function __toString() {
        return json_encode($this);
    }

    public function echoAttack() {
        echo '<p>' .$this->name . ' ' . $this->health . '</p>';
    }
}

?>