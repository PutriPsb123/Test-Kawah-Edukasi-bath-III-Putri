<?php
	$in = "hallo jesika24 selamat datang!";
	$result = "";
	for ($i =0; $i< strlen($in);$i++ ){
	  if( is_numeric($in[$i])){
	    $result = $result . $in[$i];
	  }
	} 
	if($result == ""){
	  echo "Sistem memeriksa data anda valid dengan ketentuan kami dengan inputan " . $in;
	}
	else{
	  echo "Sistem kami menolak untuk inputan berisi angka " . $result; 
	}
?>