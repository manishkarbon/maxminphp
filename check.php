<?php 
$arr=array(20,30,4,5,80);
$max1=$arr[0];
$max2=$arr[1];
foreach($arr as $key=>$value)
{
	if($max1<$value) 
	{
		$max1= $value;
	}elseif($max2<$value && $value!=$max1) // 30 <20 && 20!=20
	{
		$max2= $value;
	}
}
echo $max1." ".$max2;

echo "<br>";
// 1st and 2nd highest min value;
$min1=$arr[0];
$min2=$arr[1];
foreach($arr as $key=>$value)
{
	if($min1>$value) 
	{
		$min1= $value;
	}elseif($min2>$value && $value!=$min1) // 30 <20 && 20!=20
	{
		$min2= $value;
	}
}
echo $min1." ".$min2;
//echo $min;
/*
$ar="aecgpk";
$ar=str_split($ar);
sort($ar);
$ara= implode('', $ar);
$last=substr($ara,-1 ,1);
$first=substr($ara,0 ,1);
for($char=$first;$char<=$last;$char++)
{
	echo $char."<br>";
}*/

$array=array('0'=>'zero' , '1'=>'One','2'=>'two','3'=>'three');
//array_splice($array ,1,0 ,'One');// add element in 1 position 
//array_unshift($array,'key','value');// add element in first
//array_pop($array);// delete last element
//array_shift($array);//delete the first element
//$array2=array_slice($array,1);//Array ( [0] => two [1] => three )
//$array2=array_slice($array,0,2); //Array ( [0] => zero [1] => One )
$diff=array_diff($array,array('0'));// remove the item in array by value
//print_r($diff);
?>