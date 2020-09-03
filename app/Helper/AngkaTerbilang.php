<?php
  function Terbilang($x)
  {
$abil = array("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
//mendefinisikan array
if ($x < 12)
  return " " . $abil[$x];
elseif ($x < 20)
  return Terbilang($x - 10) . "belas";
elseif ($x < 100)
  return Terbilang($x / 10) . " puluh" . Terbilang($x % 10);
elseif ($x < 200)
  return " seratus" . Terbilang($x - 100);
elseif ($x < 1000)
  return Terbilang($x / 100) . " ratus" . Terbilang($x % 100);
elseif ($x < 2000)
  return " seribu" . Terbilang($x - 1000);
elseif ($x < 1000000)
  return Terbilang($x / 1000) . " ribu" . Terbilang($x % 1000);
elseif ($x < 1000000000)
  return Terbilang($x / 1000000) . " juta" . Terbilang($x % 1000000);
elseif ($x < 1000000000000)
  return Terbilang($x / 1000000000) . " milyar" . Terbilang($x % 1000000000);
//karena pada setiap angka penyebutannya berbeda-beda, seperti angka 12. angka 12 tidak kurang dari 12, lalu 12 merupakan angka yang kurang dari 20, maka angka 12 tersebut dikurangi 10, sehingga tersisa 2, sehingga string yang direturn adalah dua belas.
  }