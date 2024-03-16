<?php
require_once "Animal.php";
require_once "Dog.php";
require_once "Bank.php";
require_once "TpBank.php";

$cauvang = new Dog("Cậu vàng", "Màu vàng", 20, 4);
$cauvang->run();
$cauvang->keu();

$bank = new Bank("012312311", "Nguyễn Văn A", "vana@gmail.com", 1000000, "0909990001");
// echo "Hiển thị số dư tài khoản: " . $bank->sodu;
$bank->info();

$user1 = new TpBank("01112221", "Trần Văn Long", "longtv@fpt.edu.vn", 10500000, "0978900900");

$user1->ruttien(1000000);
