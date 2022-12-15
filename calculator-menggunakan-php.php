<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title> Kalkulator </title>
</head>
<body>
<b>Kalkulator Menggunakan PHP</b></br><p>
<form id="form1" name="form1" method="post" action="mawar.php">
<label>Nilai 1 : 
<input type="text" name="nilai1" />
</label>
<p>
<label> Operasi 
<select name="operasi">
    <option>+</option>
    <option>-</option>
    <option>*</option>
    <option>/</option>
</select>
</label>
</p>
<p>
<label>Nilai 2 : 
<input type="text" name="nilai2" />
</label>
<p>
<label>
        <input type="submit" name="hitung" value="Hitung" />
</label>
</p>
<p>
<?php
if(isset($_POST["hitung"])){
    $nilai1 = $_POST["nilai1"];
    $nilai2 = $_POST["nilai2"];
    $operasi = $_POST["operasi"];

    if($operasi=="+"){
        echo "<p> Hasil Penjumlahan $nilai1 + $nilai2 adalah: <p/>";
        if($nilai1 == $nilai2){
            echo ($nilai1+$nilai2)*3;
            echo "</p> Ket: Nilai 1 dan Nilai 2 Sama maka hasil jumlah dikali 3 </p>";
            }
            else {
                echo $nilai1+$nilai2;
                }
    }
    

    if($operasi=="-"){
        echo "Hasil Pengurangan $nilai1 - $nilai2 adalah: "; 
        echo $nilai1-$nilai2;
    }

    if($operasi=="*"){
    echo "Hasil Perkalian $nilai1 * $nilai2 adalah: ";
    echo $nilai1*$nilai2;
    }

    if($operasi=="/"){
        echo "Hasil Pembagian $nilai1 / $nilai2 adalah: "; 
        echo $nilai1/$nilai2;
    }

}
?> </p>
</form>
</body>
</html>