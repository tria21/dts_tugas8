<?php

    function menghitung($bilangan_pertama,$operasi,$bilangan_kedua){
    
        if($operasi=="+"){
            $hasil  = $bilangan_pertama+$bilangan_kedua;
        }
        else if($operasi=="-"){
            $hasil  = $bilangan_pertama-$bilangan_kedua;
        }
        else if($operasi=="*"){
            $hasil  = $bilangan_pertama*$bilangan_kedua;
        }
        else if($operasi=="/"){
            $hasil  = $bilangan_pertama/$bilangan_kedua;
        }
        else{
            $hasil  = "Operasi Salah";
        }
        
        return $hasil;
    }
    
    $bilangan_pertama   = $_POST["bilangan_pertama"];
    $operasi            = $_POST["operasi"];
    $bilangan_kedua     = $_POST["bilangan_kedua"];

    if(isset($_POST["aksi"])&&($_POST["aksi"]=="Hitung")){
        $hasil          = menghitung($bilangan_pertama,$operasi,$bilangan_kedua);
    }
    
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            Hasil
        </title>
        <link rel="stylesheet" type="text/css" href="kalkulator.css">
    </head>
    <body>
        <h1>
            Hasil Perhitungan
        </h1>
        <p>
            <?php echo $bilangan_pertama;?>
            <?php echo $operasi;?>
            <?php echo $bilangan_kedua;?>
            =
            <?php echo $hasil;?>
            <br>
            <a href="index.php">
                Kembali ke Kalkulator
            </a>
        </p>
    </body>
</html>