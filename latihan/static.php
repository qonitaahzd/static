<?php

class Counter {
    public static $jumlah = 10;

    public function kurang() {
        self::$jumlah--;
    }
}

$c1 = new Counter();
$c2 = new Counter();

$c1->kurang();
$c2->kurang();

echo Counter::$jumlah;

?>
