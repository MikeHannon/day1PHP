<?php
// This Function will run when called and will go through a for "loop" iteration, with a starting variable $i that has been set at 100. It will echo the variable and then increment $i by two after each echo. This will continue until $i is no longer less than the set value of 1000.
function oddNumbers()
{
  for ($i = 100; $i < 1000; $i += 2)
  {
      echo($i);
  }
}
oddNumbers();

//This function will run when called and will go through a for "loop" iteration, with a starting variable $i that has been set at 0. It will echo the variable and then increment $i by five after each echo. This will continue until $i is no longer less than one million. This will result in printing all the multiple numbers of 5 through one million as a string.
function multiplesOfFive()
{
  for ($i = 0; $i <= 1000000; $i +=5)
  {
    echo $i;
  }
}
//Moved Call to function
multiplesOfFive();

//This function will run when called and will pass through an argument set with a parameter variable called $arr. As we are looking for the sum of all values in the array, we will declare a variable named $sum that we will set initially to zero. We will then go through a for "loop" iteration, with a starting variable $i that has been set to zero. it will take the value of the variable $sum and add to it the value from the spot in the array being evaluated noting the spot in the array by the value of variable $i. It will then increment $i by one. It will continue to do this until the value of $i is no longer less than the value of of the length of the $arr variable being passed through. The function will then echo the value of the variable $sum as a string and return the value of the variable $sum.

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
sumOfArrayValues($array);
// Alt strategy

//This function will run when called and will pass through an argument set with a parameter variable called $arr. As we are looking for the sum of all the values in the array, we will declare a variable named $sum that we will set initially to zero. We will then use a foreach "loop" iteration, that will start at the beginning of the array. It will take the value of the variable $sum and add to it the value at that spot in the array. It will then go through the next spot in the array and continue until it has run the last point in the array. The function will then echo the value of the variable $sum as a string and return the value of the variable $sum.

//Added an echo to test function
function sumOfArrayValues2($arr)
{
  $sum = 0;
  foreach ($arr as $value)
  {
    $sum += $value;
  }
  echo $sum;
  return $sum;
}

sumOfArrayValues2($array);


//This function will work in tandem with the function above and will when called pass through an argument (in this case $array) and set with a parameter variable called $arr. It will then echo the call back of the function sumOfArrayValues2($arr) divided by the count length of the $arr being passed through. This should result in the average number for the $array initially called with the function.

function average($arr)
{
  echo (sumOfArrayValues2($arr)/count($arr));
}
average($array);

//This function when called will set a new empty array called $arr. It will then use a for "loop" iteration with a starting variable $i set to one. it will push the value of $i to the empty array and then increment $i by 2. This will continue until $i is no longer less than the set number of twenty thousand. It will then fuse function var_dump to print out the new array.

function buildOddArray()
{
  $arr = [];
  for ($i=1; $i <20000 ; $i+=2) {
    $arr[] = $i;
  }
  var_dump($arr);
}
buildOddArray();

//This function when called will initiate a for "loop" iteration where the initial variable $i has been set to one. if variable $i divided by two will not have a remainder as noted by equaling zero which makes the statement "true" it will echo a string the value of $i is even. If this statement is 'false' it will echo a string the value of $i is odd. $i will then increment by one and will run the check again until $i is is no longer less than the set amount of 2000.

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
oddOrEven();


//This function when called will pass through two arguments to two parameters ($arr and $val). The function will initiate a for "loop" iteration where the initial variable $i has been set to zero. the iteration will set the variable  passed through and the position as stated by variable $i and set it to the it's self times the $val that was passed through the function. the for "loop" will then increment $i by one. It will continue this set of functions until $i is no longer less than the length of the array passed through the function. It will then return the new value of $arr.



function multiply($arr,$val)
{
  for ($i=0; $i < count($arr); $i++) {
    $arr[$i] =   $arr[$i]*$val;
  }
  return $arr;
}
$A = [1,3,5];
$B = multiply($A, 5);
var_dump($B);


?>
