<?php

class Dog extends Animal
{
    public $sochan;
    public function __construct($name, $color, $weight, $sochan)
    {
        parent::__construct($name, $color, $weight);
        $this->sochan = $sochan;
    }

    public function keu()
    {
        echo "<h3>$this->name đang kêu gâu gâu ...</h3>";
    }
}
