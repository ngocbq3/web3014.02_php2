<?php

namespace App;

class Bank
{
    public $soTk;
    public $hoTen;

    public function __construct($soTk, $hoTen)
    {
        $this->soTk = $soTk;
        $this->hoTen = $hoTen;
    }

    public function thongTin()
    {
        echo "Khách hàng <b>$this->hoTen</b> có số tài khoản ngân hàng là: $this->soTk <br />";

        echo "Class sử dụng self: " . self::class;
        echo "<br /> Class sử dụng static: " . static::class;
    }
}
