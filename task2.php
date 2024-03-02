<?php
echo 'Введите первый цвет: ';
$firstColor = readline(prompt: "Введите первый цвет: ");
echo 'Введите второй цвет: ';
$secondColor = readline(prompt: "Введите второй цвет: ");

if ($firstColor === 'красный' && $secondColor === 'синий' || $secondColor === 'красный' && $firstColor === 'синий') {
    echo 'фиолетовый';
} elseif ($firstColor === 'красный' && $secondColor === 'желтый' || $secondColor === 'красный' && $firstColor === 'желтый') {
    echo 'оранжевый';
} elseif ($firstColor === 'синий' && $secondColor === 'желтый'||$secondColor === 'синий' && $firstColor === 'желтый') {
    echo 'зеленый';
} elseif ($firstColor === $secondColor) {
    echo $firstColor;
} else {
    echo 'Неверный цвет';
}