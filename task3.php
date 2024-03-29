<?php

function Intersection(int $a1, int $b1, int $a2, int $b2): string
{
    if ($a1 > $b1) {
        $a3 = $a1;
        $a1 = $b1;
        $b1 = $a3;
    }
    if ($a2 > $b2) {
        $b3 = $a2;
        $a2 = $b2;
        $b2 = $b3;
    }
    $first = max($a1, $a2);
    $second = min($b1, $b2);
    if ($first > $second) {
        return "Пересечение пустое";
    } else if ($first === $second) {
        return "Пересечение в точке " . $first;
    } else {
        return "Пересечение отрезок [" . $first . "; " . $second . "]";

    }
}
    echo Intersection(4, 8, 2, 6) . PHP_EOL;
    echo Intersection(4, 3, 2, 1) . PHP_EOL;
    echo Intersection(1, 2, 2, 3) . PHP_EOL;
    echo Intersection(8, 4, 6, 2) . PHP_EOL;
