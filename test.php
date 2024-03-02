<?php
echo 'a=';
$a = readline("a= ");
echo 'Sign: ';
$sign = readline("Sign: ");
echo 'b=';
$b = readline("b= ");

if ($sign === '+') {
    echo 'Ответ:', $a + $b;
} elseif ($sign === '-') {
    echo 'Ответ:', $a - $b;
} elseif ($sign === '*') {
    echo 'Ответ:', $a * $b;
} elseif ($sign === '/' and $b == 0) {
    echo 'На ноль делить нельзя';
} elseif ($sign === '/') {
    echo 'Ответ:', $a / $b;
} else {
    echo 'Неверная операция';
}