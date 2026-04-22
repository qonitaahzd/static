<?php

class Matematika {

    public static function kali($a, $b) {
        return $a * $b;
    }

    public static function bagi($a, $b) {
        if($b == 0) return "Tidak bisa bagi 0";
        return $a / $b;
    }

    // TAMBAHAN TUGAS
    public static function tambah($a, $b) {
        return $a + $b;
    }

    public static function kurang($a, $b) {
        return $a - $b;
    }

    // LUAS PERSEGI
    public static function luasPersegi($sisi) {
        return $sisi * $sisi;
    }
}

// proses saat tombol diklik
$hasil = "";
if(isset($_POST['hitung'])) {
    $a = $_POST['angka1'];
    $b = $_POST['angka2'];
    $sisi = $_POST['sisi'];

    $hasil .= "Penjumlahan : ".Matematika::tambah($a,$b)."<br>";
    $hasil .= "Pengurangan : ".Matematika::kurang($a,$b)."<br>";
    $hasil .= "Perkalian : ".Matematika::kali($a,$b)."<br>";
    $hasil .= "Pembagian : ".Matematika::bagi($a,$b)."<br>";
    $hasil .= "Luas Persegi : ".Matematika::luasPersegi($sisi);
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Praktikum 2 - Static Method</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(135deg,#6b3e26,#3e2415);
            height:100vh;
            display:flex;
            justify-content:center;
            align-items:center;
        }

        .card{
            background:white;
            width:420px;
            padding:30px;
            border-radius:15px;
            box-shadow:0 10px 25px rgba(0,0,0,0.3);
        }

        h1{
            text-align:center;
            color:#5a321b;
            margin-bottom:20px;
        }

        label{
            font-weight:bold;
            color:#5a321b;
        }

        input{
            width:100%;
            padding:10px;
            margin:8px 0 15px 0;
            border-radius:8px;
            border:1px solid #ccc;
            font-size:16px;
        }

        button{
            width:100%;
            padding:12px;
            border:none;
            background:#8b5e3c;
            color:white;
            font-size:16px;
            border-radius:10px;
            cursor:pointer;
            transition:0.3s;
        }

        button:hover{
            background:#5a321b;
        }

        .hasil{
            margin-top:20px;
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
    <h1>Kalkulator Matematika</h1>

    <form method="POST">
        <label>Angka Pertama</label>
        <input type="number" name="angka1" required>

        <label>Angka Kedua</label>
        <input type="number" name="angka2" required>

        <label>Sisi Persegi</label>
        <input type="number" name="sisi" required>

        <button name="hitung">Hitung</button>
    </form>

    <?php if($hasil!=""){ ?>
        <div class="hasil">
            <?php echo $hasil; ?>
        </div>
    <?php } ?>

</div>

</body>
</html>