<?php

class TpBank extends Bank
{
    public function ruttien($sotien)
    {
        //Kiểm tra số dư
        if ($this->sodu > $sotien) {
            $this->sodu -= $sotien;
            echo "Tài khoản " . $this->getStk() . " vừa chuyển số tiên: $sotien thành công<br />";
            echo "Số dư trong tài khoản là: $this->sodu <br />";
        }
    }
}
