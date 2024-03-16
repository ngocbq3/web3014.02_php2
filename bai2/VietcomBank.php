<?php
class VietcomBank implements InterfaceBank
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

    public function naptien($sotien)
    {
        if ($sotien > 0) {
            $this->sodu += $sotien;
            echo "<p>Bạn vừa nạp thành công số tiền: $sotien đ <br />";
            echo "Số dư trong tài khoản của bạn là: $this->sodu </p>";
        } else {
            echo "Không thể nạp số tiền âm </p>";
        }
    }

    public function ruttien($sotien)
    {
        if ($sotien > 0 && $this->sodu > $sotien) {
            $this->sodu -= $sotien;
            echo "<p>Bạn vừa rut tiền thành công số tiền: $sotien đ <br />";
            echo "Số dư trong tài khoản của bạn là: $this->sodu </p>";
        } else {
            echo "Số tiền trong tài khoản không đủ!<br />";
        }
    }

    //phương thức cài đặt lại số dư
    public function setSodu($sotien)
    {
        $this->sodu = $sotien;
    }
    //Phương thức lấy ra số dư
    public function getSodu()
    {
        return $this->sodu;
    }
    public function chuyentien($sotien, $nguoinhan)
    {
        if ($sotien > 0 && $sotien < $this->sodu) {
            $this->sodu -= $sotien;
            //người nhận nhận số tiền chuyển
            $sodu_nguoinhan = $nguoinhan->getSodu() + $sotien;
            $nguoinhan->setSodu($sodu_nguoinhan);
            echo "<p>Bạn vừa chuyển thành công số tiền: $sotien đ <br />";
            echo "sang tài khoản <b>$nguoinhan->sotk <br />";
            echo "Số dư trong tài khoản của bạn là: $this->sodu </p>";
        } else {
            echo "Số dư trong tài khoản không đủ! <br />";
        }
    }
}
