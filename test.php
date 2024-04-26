<?php
$file = fopen("test.txt","a+");

fwrite($file,"Sno  Name  Age\n");

for ($i=0; $i <100; $i++) { 
fwrite($file,"1  monika  16\n");
fwrite($file,"1  monika  16\n");
fwrite($file,"1  monika  16\n");
fwrite($file,"1  monika  16\n");
fwrite($file,"1  monika  16\n");
fwrite($file,"1  monika  16\n");
fwrite($file,"1  monika  16\n");
}

fseek($file,0);
while(!feof($file)){
    echo fgets($file)."<br>";
}

?>