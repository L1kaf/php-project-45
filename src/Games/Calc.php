<?php

namespace BrainGames\Cli;

function calc()
{
    $result = [];
    // Определяем рандомные числа и рандомный математический знак через switch-case
    for ($i = 0; $i < 3; $i++) {
        $number1 = rand(1, 30);
        $number2 = rand(1, 30);
        switch (rand(1, 3)) {
            case 1:
                $result["$number1 + $number2"] = $number1 + $number2;
                break;
            case 2:
                $result["$number1 - $number2"] = $number1 - $number2;
                break;
            case 3:
                $result["$number1 * $number2"] = $number1 * $number2;
                break;
        }
    }
    // Вопрос игры и вызов общей функции engine
    $task = 'What is the result of the expression?';
    engine($result, $task);
}
