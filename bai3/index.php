<?php

require_once __DIR__ . "/vendor/autoload.php";

use App\Bank;
use App\Models\TpBank;

$bank = new Bank("0981231", "Nguyễn Văn An");
$bank->thongTin();

echo "<br />";
$tpbank = new TpBank("0999090", "Trần Văn Thao");
$tpbank->thongTin();
