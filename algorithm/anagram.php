<?php
function countinganagrams($str){

   $nOfWords = explode(' ',$str);
   print_r($nOfWords);
  $cnt = 0; 
  
  foreach($nOfWords as $str){
    $strSplit = str_split($str);  
    sort($strSplit); 
    $strSplit = implode("",$strSplit);
    $map[$strSplit][] = $str; 
}
  echo "</br>";
  print_r($map);
   
}

countinganagrams('aa aa odg dog gdo');

countinganagrams('a c b c run urn urn');

