<?php



$dolar = 14500;
$hargaSaham = 3;
$sentimen = "baik"; //baik, buruk
$jumlahBeli =  10;
$totalBiaya = 0;

if ($sentimen  == "baik") {
    $totalBiaya = $dolar * $hargaSaham * $jumlahBeli * 2;
} elseif ($sentimen == "normal") {
    $totalBiaya = $dolar * $hargaSaham * $jumlahBeli;
} elseif ($sentimen == "buruk") {
    $totalBiaya = $dolar * $hargaSaham * $jumlahBeli / 2;
} else {
    echo "sentimen tidak masuk dalam perhitungan";
}
echo "biaya pembelian saham = $totalBiaya";
