<?php

$sortedlist = [1,1,2,2,3,3,4,4,5,5,6,7];

function removeDuplicate(array $sorted){
    if(count($sorted) <= 1){
        return $sorted;
    }
    $unique[] = $sorted[0];
    for ($i=0; $i <count($sorted); $i++) { 
        if ($sorted[$i] != $unique[count($unique)-1]) {
           $unique[] = $sorted[$i];
        }
    }
    return $unique;
}
echo "REMOVE DUPLICATES:- <BR>";
echo "Before = ".implode(", ",$sortedlist)." <br>";
echo "After =  ".implode(", ",removeDuplicate($sortedlist));
?>