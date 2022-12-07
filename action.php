<?php
$nama = $_POST['nama'];
echo " $nama <br>";

$kota = $_POST['tujuan'];
if ($kota == "jakarta-bandung") {
    $harga_tiket = 100000;
}elseif ($kota == "jakarta-semarang"){
    $harga_tiket = 150000;
}elseif ($kota == "semarang-surabaya"){
    $harga_tiket = 300000;
}elseif ($kota == "semarang-yogyakarta"){
    $harga_tiket = 250000;
}else {
    echo "mohon masukkan tujuan yang benar agar tidak terjadi eror<br>";
}

$jumlah = $_POST['jumlah'];
if($jumlah >= 5){
    $diskon_jumlah = 0.15 * $jumlah * $harga_tiket;
    echo "<br>Diskon jumlah pembelian : $diskon_jumlah";
}else{
    $diskon_jumlah = 0;
    echo "<br>Diskon jumlah pembelian : $diskon_jumlah";
}

$tgl = $_POST ['tanggal'];
if($tgl >= 21 && $tgl <=29){
    $diskon_tgl = 0.05 * $harga_tiket;
    echo "<br>Diskon tanggal pembelian : $diskon_tgl";
}else{
    $diskon_tgl = 0;
    echo "<br>Diskon tanggal pembelian : $diskon_tgl";
}

$total = $harga_tiket * $jumlah - ($diskon_jumlah + $diskon_tgl);
echo "<br><br>Total Pembayarannya : $total";
?>