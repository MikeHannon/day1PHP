<?php
function oddNumbers()
{
  for ($i = 1; $i < 1000; $i += 2)
  {
      echo($i);
  }
}
// oddNumbers();

function multiplesOfFive()
{
  for ($i = 0; $i <= 1000000; $i +=5)
  {
    echo $i;
  }
}
$array = [1,2,3,4,6];

function sumOfArrayValues($arr){
  $sum = 0;
  for ($i=0; $i < count($arr); $i++)
  {
    $sum += $arr[$i];
  }
  echo $sum;
  return $sum;
}
// sumOfArrayValues($array);
// multiplesOfFive();
// Alt strategy

function sumOfArrayValues2($arr)
{
  $sum = 0;
  foreach ($arr as $value)
  {
    $sum += $value;
  }
  return $sum;
}

function average($arr)
{
  echo (sumOfArrayValues2($arr)/count($arr));
}
// average($array);

function buildOddArray()
{
  $arr = [];
  for ($i=1; $i <20000 ; $i+=2) {
    $arr[] = $i;
  }
  var_dump($arr);
}
// buildOddArray();
function oddOrEven()
{
  for ($i=1; $i < 2000; $i++) {
    if ($i % 2 == 0)
    {
      echo ("$i is even ");
    }
    else
    {
      echo ("$i is odd ");
    }
  }
}
// oddOrEven();

function multiply($arr,$val)
{
  for ($i=0; $i < count($arr); $i++) {
    $arr[$i] =   $arr[$i]*$val;
    # code...
  }
  return $arr;
}
$A = [1,3,5];
$B = multiply($A, 5);
var_dump($B);


?>
