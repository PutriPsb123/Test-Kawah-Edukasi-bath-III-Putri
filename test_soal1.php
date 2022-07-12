<?php
  $data1 = [3, 3, 3, 3, 2, 4, 1, 1 ];
  $fresum = 0;
  $fcount = 0;
  for ($i = 0;$i<count($data1) ;$i++ ){
    $count = 1;
    for($j = $i+1;$j<count($data1) ;$j++){
      if($data1[$i] == $data1[$j]){
        $count++;
      }
    }
    if($count > $fcount){
      $fcount = $count;
      $fresum = $data1[$i];
    }
  } 
    echo "total data paling banyak keluar adalah " . $fresum . " dengan jumlah ". $fcount;
?>