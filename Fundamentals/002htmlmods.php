<?php
function arrayLists($array){
  for ($i=0; $i < count($array); $i++) {
    echo("<li>$array[$i]</li>");
  }
}

function flipCoins(){
    $flips = 0;
    $heads = 0;
    $tails = 0;
    while($flips < 5000){
      $number = rand(0,1);
      $flips ++;
      if($number == 0){
        $tails ++;
      }
      else {
        $heads ++;
      }
      echo ("<p> Coins flipped $flips. Heads $heads.  Tails $tails </p>");
    }
}

$users = ["first_name"=>"michael",
          "last_name"=>"choi"];
function printStuff($associativeArray){
  $myString = "There are".count($associativeArray)." keys in this array.  They are: ";
  foreach ($associativeArray as $key => $value) {
    $myString .= $key.",";
  }
  $myString = substr($myString,0,strlen($myString)-1);
  echo $myString;
}


?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lots of Fun</title>
  </head>
  <body>
    <ul>
      <?php
        arrayLists([1,3,"hello"]);
        // flipCoins();
        printStuff($users);
       ?>
    </ul>

  </body>
</html>
