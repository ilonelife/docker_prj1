<?php


$first = $_GET['first'];
$type = $_GET['type'];
$last = $_GET['last'];

if ($type =="1")   // +
{
    echo $first."더하기".$last." 결과는";
    echo $first+$last;
}
else if ($type =="2")   // -
{
    echo $first."빼기".$last." 결과는";
    echo $first-$last;
}
else if ($type =="3")   // *
{
    echo $first."곱하기".$last." 결과는";
    echo $first*$last;
}

?>