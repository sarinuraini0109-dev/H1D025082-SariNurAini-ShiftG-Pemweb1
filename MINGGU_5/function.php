<!DOCTYPE html>
<html>
    <head>
        <title>Percobaan 4 - Function & Statements</title>
    </head>
<body>
<?php
function text() {
    echo "Hello world! <br><br>";
}
text();

function olahraga($sport) {
    echo "Saya bermain $sport <br>";
}
olahraga("sepak bola");
olahraga("basket");
olahraga("voli");
olahraga("badminton");
olahraga("golf <br>");

function penjumlahan(int $a, int $b) {
    return $a + $b;
}
echo penjumlahan(5, 2) . "<br>";

function tambah_dua(&$value) {
    $value += 2;
}
$num = 4;
tambah_dua($num);
echo $num . "<br><br>";

function lahir(&$bulanKelahiran) {
    switch ($bulanKelahiran) {
        case 1:
            echo "Anda lahir di bulan Januari <br>";
            break;
        case 2:
            echo "Anda lahir di bulan Februari <br>";
            break;
        case 3:
            echo "Anda lahir di bulan Maret <br>";
            break;
        default:
            echo "Bulan kelahiran Anda bukan Januari, Februari, Maret <br>";
    }
}
$bulan = "November";
echo lahir($bulan);
?>
</body>
</html>