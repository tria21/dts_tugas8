<?php

    function menghitung($bil1, $operasi, $bil2){
    
        if($operasi == "+"){
            $hasil = $bil1 + $bil2;
        }
        else if($operasi == "-"){
            $hasil = $bil1 - $bil2;
        }
        else if($operasi == "*"){
            $hasil = $bil1 * $bil2;
        }
        else if($operasi == "/"){
            $hasil = $bil1 / $bil2;
        }
        else{
            $hasil = "Operasi Salah";
        }
        
        return $hasil;
    }
    
    $bil1 = $_POST["bil1"];
    $operasi = $_POST["operasi"];
    $bil2 = $_POST["bil2"];

    if(isset($_POST["aksi"]) && ($_POST["aksi"] == "Hitung")){
        $hasil = menghitung($bil1, $operasi, $bil2);
    }
    
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            Hasil Perhitungan
        </title>
        <link rel="stylesheet" type="text/css" href="kalkulator.css">
    </head>
    <body>
        <h1>
            Hasil Perhitungan
        </h1>
        <p>
            <?php echo $bil1;?>
            <?php echo $operasi;?>
            <?php echo $bil2;?>
            =
            <?php echo $hasil;?>
            <br>
            <a href="index.php">
                Kembali ke Kalkulator
            </a>
        </p>
    </body>
</html>