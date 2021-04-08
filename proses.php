<?php 
   
   $angka1 = $_POST['angka1'];
   $angka2 = $_POST['angka2'];

   $hasil =  $angka1 + $angka2;

   $angka1 = $_POST['angka1'];
   $angka2 = $_POST['angka2'];

   $hasil = $angka1 * $angka2;
 ?>

   <h1>Hasilnya adalah<?php echo $hasil ?></h1>

   <a href="index.php">Hitung Lagi</a>