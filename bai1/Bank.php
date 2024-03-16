<?php

class Bank
{
    private $stk;
    private $hoten;
    protected $email;
    protected $sodu;
    protected $phone;

    public function __construct($stk, $hoten, $email, $sodu, $phone)
    {
        $this->stk = $stk;
        $this->hoten = $hoten;
        $this->email = $email;
        $this->sodu = $sodu;
        $this->phone = $phone;
    }

    public function info()
    {
        echo "<div>";
        echo "Họ tên: $this->hoten <br />";
        echo "Email: $this->email <br />";
        echo "Số dư của bạn: $this->sodu <br />";
        echo "</div>";
    }

    public function getStk()
    {
        return $this->stk;
    }
    public function setStk($stk)
    {
        $this->stk = $stk;
    }
}
