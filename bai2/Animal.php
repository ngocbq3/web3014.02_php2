<?php

class Animal
{
    public $name;
    public $color;

    public function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }

    public function volumn()
    {
        echo "<p><b>$this->name</b> đang kêu</p>";
    }
}

class Dog extends Animal
{
    public function volumn()
    {
        echo "<p>Con chó có tên <b>$this->name</b> đang sủa gâu gâu ..</p>";
    }
}

class Cat extends Animal
{
    public function volumn()
    {
        echo "<p>Con mèo có tên <b>$this->name</b> đang kêu meo meo ..</p>";
    }
}
