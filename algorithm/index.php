 
<?php
include_once "function.php"; 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $text = $_POST["input_string"];  
    }
    $arr = explode(" ", $text) ;
    for ($i=0;$i<5;$i++)
    {
        for ($j=$i+1;$j<5;$j++)
        {
            if ($arr[$i]>$arr[$j])
            {
                $tam = $arr[$i];
                $arr[$i] = $arr[$j];
                $arr[$j] = $tam;
            }
        }
    } 
    print_r ($arr);
    print_r ("<br>");
    $summin = sumMin($arr);
    print_r ("the minimum sum of 4 of 5 elements: $summin<br>");
    echo " ";
    $summax = sumMax($arr); 
    print_r ("the maximum sum of 4 of 5 elements: $summax<br>");
 
    for ($i=0;$i<5;$i++)
    {
        $sum = sum($arr,$arr[$i]);
        print ("If we sum everything except $arr[$i], our sum is: $sum<br>");
    
    }
    $count = length($arr);
    print_r ("Count total of array: $count<br>");
    $max = findmax($arr);
    print_r ("min in array: $max<br>");
    $min=findmin($arr);
    print_r ("max in array: $min<br>");
    print_r ("even elements in array: ");
    findEven ($arr); 
    print_r ("<br>");
    print_r ("odd elements in array: ");
    findOdd ($arr); 
?>   