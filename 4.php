<?php
 $file = 'myfile.txt';
 if (file_exists($file)) {
   $data = fopen($file,'r');
   $cnt = 0;
   while(!feof($data)){
      fgets($data);
      $cnt++;
   }
   echo "Number of lines :- ".$cnt;
 } else {
    echo "Error:- FileNotFound. ";
 }
?>