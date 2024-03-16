<?php
require_once "Animal.php";
require_once "AbstractBank.php";
require_once "TpBank.php";

require_once "InterfaceBank.php";
require_once "VietcomBank.php";

$convat = new Animal("động vật", "Màu xám");
$cauvang = new Dog("Cậu vàng", "màu Vàng");
$tom = new Cat("Mèo Tom", "Tam thể");

$convat->volumn();
$cauvang->volumn();
$tom->volumn();

$user1 = new TpBank("012341234", "Nguyễn Duy Nhất", 10000000);
$user2 = new TpBank("099099011", "Trần Trọng Nam", 0);

$user2->ruttien(50000);
//Chuyển tiền từ user1->user2
$user1->chuyentien(500000, $user2);

$user2->ruttien(50000);

//Vietcombank
$vc1 = new VietcomBank("0123", "Ngọc", 1000000);
$vc2 = new VietcomBank("0124", "Minh", 100000);

$vc1->chuyentien(200000, $vc2);
