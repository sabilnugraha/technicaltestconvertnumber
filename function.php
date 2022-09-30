<?php
function Number($n)
{
  $bahasa = array("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", 
"sepuluh", "sebelas");
  if ($n < 12)
    return " " . $bahasa[$n];
  elseif ($n < 20)
    return Number($n - 10) . "belas";
  elseif ($n < 100)
    return Number($n / 10) . " puluh" . Number($n % 10);
  elseif ($n < 200)
    return " seratus" . Number($n - 100);
  elseif ($n < 1000)
    return Number($n / 100) . " ratus" . Number($n % 100);
  elseif ($n < 2000)
    return " seribu" . Number($n - 1000);
  elseif ($n  < 1000000)
    return Number($n / 1000) . " ribu" . Number($n % 1000);
  elseif ($n < 1000000000)
    return Number($n / 1000000) . " juta" . Number($n % 1000000); 
  elseif ($n < 1000000000000)
    return Number($n / 1000000000) . " miliar" . Number($n % 1000000000); 
}
