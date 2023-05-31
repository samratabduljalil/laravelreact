<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment</title>
</head>
<body>
<?php

$month_temp="78,60,62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73, 68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";



$month_temp = explode(',',$month_temp);


 $month_temp = array_map('intval',$month_temp) ;

$average;
$total=0;
$size=count($month_temp);
foreach($month_temp as $value){
$total+=$value;

}
$average = $total/$size;
echo "Average Temperature is:".$average."<br>" ;

sort($month_temp);
echo "List of five lowest temperatures :";
for($i = 0; $i<5;$i++){

echo $month_temp[$i];
if($i === 4){
    echo "."."<br>";
    }else{

        echo ",";
    }

}
echo "List of five highest temperatures :" ;
for($i = 0; $i<5;$i++){

    echo $month_temp[($size-5)+$i];
    if($i === 4){
    echo ".";
    }else{

        echo ",";
    }
}









?>



</body>
</html>