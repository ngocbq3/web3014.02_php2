<?php
const PATH = "http://localhost/WEB3014.02_php2/bai1/";
if (isset($_POST['country'])) {
    var_dump($_POST);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <select name="country" id="country" onchange="myChange()">
            <option value="0">hãy chọn</option>
            <option value="1">HN</option>
            <option value="2">HCM</option>
            <option value="3">NĐ</option>
        </select>
        <br>
        <input type="radio" name="filter-1000-2000" value="1000-2000" onclick="return this.form.submit()"> 1.000.000 đ - 2.000.000
        <br>
        <input type="radio" name="filter-1000-2000" value="2000-3000" onclick="return this.form.submit()"> 1.000.000 đ - 2.000.000
        <br>
        <input type="radio" name="filter-1000-2000" value="3000-5000" onclick="return this.form.submit()"> 1.000.000 đ - 2.000.000
    </form>
    <script>
        function myChange() {
            let country = document.querySelector('#country');
            window.location.href = "<?= PATH ?>?act=search&q=" + country.value;

            console.log(country.value)
        }
    </script>
</body>

</html>
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
