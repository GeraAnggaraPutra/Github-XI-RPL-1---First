<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ASSOSIATIVE</title>
    <style>
        table {
            width: 30%;
        }
        th {
            background: black;
            color: white;
        }
    </style>
</head>
<body>
<?php

$provinsi = [
    "11" => ["id" => 11,"name" => "ACEH"],
    "12" => ["id" => 12,"name" => "SUMATERA UTARA"],
    "13" => ["id" => 13,"name" => "SUMATERA BARAT"],
    "14" => ["id" => 14,"name" => "RIAU"],
    "15" => ["id" => 15,"name" => "JAMBI"],
    "16" => ["id" => 16,"name" => "SUMATERA SELATAN"],
    "17" => ["id" => 17,"name" => "BENGKULU"],
    "18" => ["id" => 18,"name" => "LAMPUNG"],
    "19" => ["id" => 19,"name" => "KEPULAUAN BANGKA BELITUNG"],
    "21" => ["id" => 21,"name" => "KEPULAUAN RIAU"],
    "31" => ["id" => 31,"name" => "DKI JAKARTA"],
    "32" => ["id" => 32,"name" => "JAWA BARAT"],
    "33" => ["id" => 33,"name" => "JAWA TENGAH"],
    "34" => ["id" => 34,"name" => "DI YOGYAKARTA"],
    "35" => ["id" => 35,"name" => "JAWA TIMUR"],
    "36" => ["id" => 36,"name" => "BANTEN"],
    "51" => ["id" => 51,"name" => "BALI"],
    "52" => ["id" => 52,"name" => "NUSA TENGGARA BARAT"],
    "53" => ["id" => 53,"name" => "NUSA TENGGARA TIMUR"],
    "62" => ["id" => 61,"name" => "KALIMANTAN BARAT"],
    "62" => ["id" => 62,"name" => "KALIMANTAN TENGAH"],
    "63" => ["id" => 63,"name" => "KALIMANTAN SELATAN"],
    "64" => ["id" => 64,"name" => "KALIMANTAN TIMUR"],
    "65" => ["id" => 65,"name" => "KALIMANTAN UTARA"],
    "71" => ["id" => 71,"name" => "SULAWESI UTARA"],
    "72" => ["id" => 72,"name" => "SULAWESI TENGAH"],
    "73" => ["id" => 73,"name" => "SULAWESI SELATAN"],
    "74" => ["id" => 74,"name" => "SULAWESI TENGGARA"],
    "75" => ["id" => 75,"name" => "GORONTALO"],
    "76" => ["id" => 76,"name" => "SULAWESI BARAT"],
    "81" => ["id" => 81,"name" => "MALUKU"],
    "82" => ["id" => 82,"name" => "MALUKU UTARA"],
    "91" => ["id" => 91,"name" => "PAPUA BARAT"],
    "94" => ["id" => 94,"name" => "PAPUA"],
];

?>
<h2 align="center">Original</h2>
<table border="1" cellpadding="6" cellspacing="0" align="center">
    <tr>
        <th>ID</th>
        <th>PROVINSI</th>
    </tr>
    <?php foreach($provinsi as $key) {?>
   <tr>
       <td><?= $key["id"];?></td>
       <td><?= $key["name"]?></td>
   </tr>
    <?php } ?>
</table>
<?php
move_to_top($provinsi, "34");
move_to_top($provinsi, "31");
move_to_top($provinsi, "32");
?>
<h2 align="center">Move Jawa Barat, DKI Jakarta, DI Yogyakarta to the top</h2>
<table border="1" cellpadding="6" cellspacing="0" align="center">
    <tr>
        <th>ID</th>
        <th>PROVINSI</th>
    </tr>
    <?php foreach($provinsi as $key) {?>
   <tr>
       <td><?= $key["id"];?></td>
       <td><?= $key["name"]?></td>
   </tr>
    <?php } ?>
</table>
<?php
move_to_bottom($provinsi, "13");
move_to_bottom($provinsi, "11");
?>
<h2 align="center">Move Sumatera Barat, Aceh to the bottom</h2>
<table border="1" cellpadding="6" cellspacing="0" align="center">
    <tr>
        <th>ID</th>
        <th>PROVINSI</th>
    </tr>
    <?php foreach($provinsi as $key) {?>
   <tr>
       <td><?= $key["id"];?></td>
       <td><?= $key["name"]?></td>
   </tr>
    <?php } ?>
</table>
<?php   
function move_to_top(&$array, $key) {
    $temp = array($key => $array[$key]);
    unset($array[$key]);
    $array = $temp + $array;
}
   
function move_to_bottom(&$array, $key) {
    $value = $array[$key];
    unset($array[$key]);
    $array[$key] = $value;
}
?>

</body>
</html>