<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Sederhana</title>
</head>
<body>
    <h2>Kalkulator Sederhana</h2>

    <form method="post" action="">
        Angka 1 : <input type="number" name="angka1" step="any" required><br><br>
        Angka 2 : <input type="number" name="angka2" step="any" required><br><br>
        Operasi :
        <select name="operator">
            <option value="+">Penjumlahan (+)</option>
            <option value="-">Pengurangan (-)</option>
            <option value="*">Perkalian (x)</option>
            <option value="/">Pembagian (/)</option>
        </select><br><br>
        <input type="submit" name="hitung" value="Hitung">
    </form>

    <?php
    if (isset($_POST['hitung'])) {
        $angka1   = $_POST['angka1'];
        $angka2   = $_POST['angka2'];
        $operator = $_POST['operator'];

        if ($operator == "+") {
            $hasil = $angka1 + $angka2;
        } elseif ($operator == "-") {
            $hasil = $angka1 - $angka2;
        } elseif ($operator == "*") {
            $hasil = $angka1 * $angka2;
        } else {
            if ($angka2 == 0) {
                $hasil = "tidak bisa dibagi nol";
            } else {
                $hasil = $angka1 / $angka2;
            }
        }

        echo "<h3>Hasil : $angka1 $operator $angka2 = $hasil</h3>";
    }
    ?>
</body>
</html>