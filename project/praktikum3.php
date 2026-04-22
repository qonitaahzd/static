<?php

class Produk {

    public static $jumlahProduk = 0;
    public $nama;
    public $harga;

    public function __construct($nama, $harga) {
        $this->nama = $nama;
        $this->harga = $harga;
    }

    public function tambahProduk() {
        self::$jumlahProduk++;
    }
}

class Transaksi {

    final public function prosesTransaksi($totalBayar) {
        return "Transaksi diproses. Total bayar : Rp " . number_format($totalBayar,0,",",".");
    }
}

$produkList = [];

$p1 = new Produk("Tripod", 800000);
$p1->tambahProduk();
$produkList[] = $p1;

$p2 = new Produk("Mic", 400000);
$p2->tambahProduk();
$produkList[] = $p2;

$p3 = new Produk("Lighting", 600000);
$p3->tambahProduk();
$produkList[] = $p3;


$totalHarga = 0;
foreach($produkList as $p){
    $totalHarga += $p->harga;
}


$trx = new Transaksi();
$hasilTransaksi = $trx->prosesTransaksi($totalHarga);

?>

<!DOCTYPE html>
<html>
<head>
<title>Sistem Produk</title>
<style>

body{
    font-family: Arial;
    background: linear-gradient(135deg,#6b3e26,#3e2415);
    display:flex;
    justify-content:center;
    align-items:center;
    height:100vh;
}

.card{
    background:white;
    width:500px;
    padding:30px;
    border-radius:15px;
    box-shadow:0 10px 25px rgba(0,0,0,0.3);
}

h1{
    text-align:center;
    color:#5a321b;
}

table{
    width:100%;
    border-collapse:collapse;
    margin-top:20px;
}

th{
    background:#8b5e3c;
    color:white;
    padding:10px;
}

td{
    padding:10px;
    border-bottom:1px solid #ddd;
}

.total{
    margin-top:15px;
    background:#f3e5dc;
    padding:15px;
    border-radius:10px;
    color:#4b2e1a;
    font-weight:bold;
}

</style>
</head>
<body>

<div class="card">
    <h1>Daftar Produk</h1>

    <table>
        <tr>
            <th>Nama Produk</th>
            <th>Harga</th>
        </tr>

        <?php foreach($produkList as $p){ ?>
        <tr>
            <td><?php echo $p->nama ?></td>
            <td>Rp <?php echo number_format($p->harga,0,",",".") ?></td>
        </tr>
        <?php } ?>

    </table>

    <div class="total">
        Total Produk : <?php echo Produk::$jumlahProduk ?> <br><br>
        <?php echo $hasilTransaksi ?>
    </div>

</div>

</body>
</html>