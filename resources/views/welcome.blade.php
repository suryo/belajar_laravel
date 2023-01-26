<?php
echo "algoritma sorting";
$angkanya = [5,4,6,7,2,1,8,9];
$panjangarray = count($angkanya);
echo "<br>";
#munculkan isi dari var

$hasilsorting= [];
echo "<br>";
for ($i=0; $i < $panjangarray  ; $i++) {
 array_push($hasilsorting,$angkanya[$i]);
 $start = $i+1;
  for ($t=$start; $t < $panjangarray; $t++) {
    if (($hasilsorting[$i])>($angkanya[$t])) {
      $temp = $hasilsorting[$i];
      $hasilsorting[$i]=$angkanya[$t];
      $angkanya[$t] = $temp;
    }
  }
}
for ($r=0; $r < $panjangarray  ; $r++) {
 echo $hasilsorting[$r];
 echo "<br>";
}
?>