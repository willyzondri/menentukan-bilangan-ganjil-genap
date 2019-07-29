<?php
//menggunakan metode while
$angka = 1;
while ($angka <= 20) {
    if ($angka % 2 == 1) {
        echo $angka . ' Adalah bilangan ganjil </br>';
    } else {
        echo $angka . ' Adalah bilangan genap </br>';
    }
    $angka++;
}

//menggunakan metode for
<?php 
for ($angka = 1; $angka <= 20; $angka++) {
    if ($angka % 2 == 1) {
        echo $angka . ' Adalah bilangan ganjil </br>';
    } else {
        echo $angka . ' Adalah bilangan genap </br>';
    }
}
?>
?>
