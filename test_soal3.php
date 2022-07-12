<?php
  $row = 6;
  for($i = 0; $i<$row;$i++){
   for($j = 0; $j<=$i;$j++){
      echo "*";
   }
    echo "\n";
  
  }
  for($i = 0; $i<$row;$i++){
   for($j = $i; $j<=$row;$j++){
      echo " ";
   }
   for($j = 0; $j<=$i;$j++){
      echo "*";
   }
    echo "\n";
  
  }
?>