<?php
function exam($score1, $score2, $score3)
{
    $total = $score1 + $score2 + $score3;
    if ($total > 210){
        echo $total . "点なので合格です";
    } else {
        echo $total . "点なので不合格です";
    }
}
echo (exam(80, 6, 90));

function getSquareArea($base, $height)
{
    return $base * $height;
}
function getTrianglArea($base, $height)
{
    return $base * $height / 2;
}
function getTrapezoidArea($upperBase, $lowerBase, $height)
{
    return ($upperBase + $lowerBase) * $height / 2;
}

echo getSquareArea(5, 5) . "\n";
echo getTrianglArea(7, 8) . "\n";
echo getTrapezoidArea(4, 5, 4);