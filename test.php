<?php 

function solution_1 ($array)
{
    foreach ($array as $value)
    {
        echo $value."  \n";
    }
}

function solution_2 ($array)
{
    $min=$array[0];
    $max=$array[0];
    for ($i=1;$i<count($array);$i++)
    {
        if($array[$i]>$max)$max=$array[$i];
        if($array[$i]<$min)$min=$array[$i];
    }

    echo $max." maxValue\n";
    echo $min." minValue\n";

}

function solution_3 ($array)
{
    $result=[];
    for ($i=count($array)-1;$i>=0;$i--)
    {
        $result[]=$array[$i];
    }
    print_r($result);
    return $result;

}

function solution_4 ($array)
{
    $result=[];

   for ($i=0;$i<count($array);$i++)
   {
       if(in_array($array[$i],$result)){continue; }
       $result[]=$array[$i];
   }

    print_r($result);
    return $result;

}

function solution_5 ($array)
{
    $result=[];
    foreach ($array as $key=>$value)
    {
        $result[$value]=$key;
    }

    print_r($result);
    return $result;
}


function  myPow ($base, $exp)
{   $result=1;
    for ($i=0;$i<$exp;$i++)
    {
        $result*=$base;
    }
    return $result;
}

//solution_1([1, 2, 3]);
//solution_2([10, 20, -5, 1, -10, 0]);
//solution_3([1, "z", 500]);
solution_4([1, 1, 1, 2, 2, 2, 3, 3, 3]);
//solution_5(["a" => "b", "c" => "d"]);

echo myPow(4,2);