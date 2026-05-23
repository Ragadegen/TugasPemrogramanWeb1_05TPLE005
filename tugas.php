<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Aplikasi Operator PHP</title>

    <style>
        body{
            font-family: Arial;
            background-color: #f2f2f2;
            padding: 30px;
        }

        .container{
            width: 400px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
        }

        input{
            width: 100%;
            padding: 10px;
            margin-top: 10px;
        }

        button{
            margin-top: 15px;
            padding: 10px;
            background: blue;
            color: white;
            border: none;
            width: 100%;
        }

        .hasil{
            margin-top: 20px;
            background: #eee;
            padding: 15px;
            border-radius: 5px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Aplikasi Operator PHP</h2>

    <form method="POST">
        <label>Angka Pertama</label>
        <input type="number" name="angka1" required>

        <label>Angka Kedua</label>
        <input type="number" name="angka2" required>

        <button type="submit" name="proses">Proses</button>
    </form>

    <?php
    if(isset($_POST['proses'])){

        $a = $_POST['angka1'];
        $b = $_POST['angka2'];

        // Operator Aritmatika
        $tambah = $a + $b;
        $kurang = $a - $b;
        $kali = $a * $b;
        $bagi = $a / $b;

        // Operator Penugasan
        $nilai = $a;
        $nilai += $b;

        // Operator Pembanding
        $sama = ($a == $b) ? "True" : "False";
        $lebihBesar = ($a > $b) ? "True" : "False";
        $lebihKecil = ($a < $b) ? "True" : "False";

        echo "<div class='hasil'>";

        echo "<h3>Operator Aritmatika</h3>";
        echo "Penjumlahan : $tambah <br>";
        echo "Pengurangan : $kurang <br>";
        echo "Perkalian : $kali <br>";
        echo "Pembagian : $bagi <br><br>";

        echo "<h3>Operator Penugasan</h3>";
        echo "Hasil nilai += : $nilai <br><br>";

        echo "<h3>Operator Pembanding</h3>";
        echo "Apakah sama? : $sama <br>";
        echo "Apakah angka pertama lebih besar? : $lebihBesar <br>";
        echo "Apakah angka pertama lebih kecil? : $lebihKecil <br>";

        echo "</div>";
    }
    ?>

</div>

</body>
</html>