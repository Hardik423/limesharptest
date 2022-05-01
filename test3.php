<?php
function next_binary_number($n)
{
    $dec_value = 0;
    $base = 1;     
    while ($n)
    {
        $last_digit = $n% 10;
        $n = $n / 10;     
        $dec_value += $last_digit * $base;
        $base = $base*2;
    }
    $dec_value++;
    $n = $dec_value;
    $num = $n;
    $n1 = $n;
    $binary;
    $i = 0; //Count for binary array
    while ($n > 0)
    {
      $binary[$i] = $n % 2; //Remainder will stored in binary array
      $n = (int)($n / 2);
      $i++; //Count increment
    }

    echo "The Next Binary number is : ";
    for ($j = $i - 1; $j >= 0; $j--)
    echo $binary[$j];
    return 0;
    
}
    // enter your input here   
    next_binary_number(10);

?>
