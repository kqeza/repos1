<?php
echo 'Введите первый цвет: ';
$first_color = readline(prompt: "Введите первый цвет: ");
echo 'Введите второй цвет: ';
$second_color = readline(prompt: "Введите второй цвет: ");

if ($first_color === 'красный' and $second_color === 'синий') {
    echo 'фиолетовый';
} elseif ($first_color === 'красный' and $second_color === 'желтый') {
    echo 'оранжевый';
} elseif ($first_color === 'синий' and $second_color === 'желтый') {
    echo 'зеленый';
} elseif ($first_color === $second_color) {
    echo $first_color;
} else {
    echo 'Неверный цвет';
}