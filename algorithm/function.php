<?php

function sumMin($arr)
{
    $tongmin=0;
     for($i=0;$i<4;$i++)
	{
		 $tongmin+=$arr[$i];
	}
    return $tongmin;
}
function sumMax($arr)
{
    $tongmax=0;
for($i=4;$i>0;$i--)
	{
		 $tongmax+=$arr[$i];
	}
    return $tongmax;
}
function sum($arr,$a)
{
    $tong=0;
for($i=0;$i<5;$i++)
	{
        if($arr[$i]!=$a)
        {
            $tong+=$arr[$i];
        }
	}
    return $tong;
}

function findmax($arr)
{
    $max=$arr[0];
for($i=1;$i<5;$i++)
	{
           if($max<$arr[$i])
           {
            $max=$arr[$i];
           }
        
	}
    return $max;
}
function findmin($arr)
{
    $min=$arr[0];
for($i=1;$i<5;$i++)
	{
           if($min>$arr[$i])
           {
            $min=$arr[$i];
           }
        
	}
    return $min;
}
function length($arr)
{
    $dem=0;
for($i=0;$i<5;$i++)
	{
           $dem++;
        
	}
    return $dem;
}

function findEven($arr)
{  
for($i=0;$i<5;$i++)
	{ 
        if($arr[$i]%2==0)
        {
            print_r("$arr[$i] ");
        }
        
	} 
}
function findOdd($arr)
{  
for($i=0;$i<5;$i++)
	{ 
        if($arr[$i]%2!=0)
        {
            print_r("$arr[$i] ");
        }
        
	} 
}