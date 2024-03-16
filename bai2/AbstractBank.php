<?php
abstract class AbstractBank
{
    protected $sotk;
    protected $hoten;
    protected $sodu;

    public function __construct($sotk, $hoten, $sodu)
    {
        $this->sotk = $sotk;
        $this->hoten = $hoten;
        $this->sodu = $sodu;
    }

    abstract public function naptien($sotien);
    abstract public function ruttien($sotien);
    abstract public function chuyentien($sotien, $nguoinhan);
}
