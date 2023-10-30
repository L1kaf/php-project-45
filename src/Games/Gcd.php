<?php

namespace BrainGames\Cli;

function gcd()
{
    $result = [];
    // Получаем рандомные значения, дублируем их во временные переменные и ищем НОД через цикл
    for ($i = 0; $i < 3; $i++) {
        $number1 = rand(1, 30);
        $number2 = rand(1, 30);
        $temp1 = $number1;
        $temp2 = $number2;
        while ($temp1 != $temp2) {
            if ($temp1 > $temp2) {
                $temp1 -= $temp2;
            } else {
                $temp2 -= $temp1;
            }
        }
        $result["$number1 $number2"] = $temp1;
    }
    // Вопрос игры и вызов общей функции engine
    $task = 'Find the greatest common divisor of given numbers.';
    engine($result, $task);
}
