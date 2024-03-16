<?php

class Animal
{
    public $name;
    public $color;
    public $weight;
    //Hàm khởi tạo là hàm sẽ được thưc khi tạo đối tượng mà không cần gọi nó
    public function __construct($name, $color, $weight)
    {
        $this->name = $name;
        $this->color = $color;
        $this->weight = $weight;
    }
    public function info()
    {
        echo "<h2>Tên con vật: $this->name</h2>";
        echo "<h2>Có màu sắc: $this->color</h2>";
        echo "<h2>Có cân nặng: $this->weight</h2>";
    }

    public function eat($kg)
    {
        $this->weight += $kg;
        echo "<h3>$this->name vừa ăn xong và cân nặng là: $this->weight</h3>";
    }

    public function run()
    {
        echo "<h3>$this->name đang chạy rất nhanh</h3>";
    }
}

//Tạo đối tượng
// $animal = new Animal("Cậu vàng", "Vàng", 20);
// $animal->name = "Cậu vàng";
// $animal->color = "Vàng";
// $animal->weight = 20;

// $animal->info();
