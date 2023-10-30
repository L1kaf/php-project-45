<?php

namespace BrainGames\Cli;

function isEven()
{
    $result = [];
    // Записываем в массив рандомные числа как индексы и ответ четности в их значения
    for ($i = 0; $i < 3; $i++) {
        $number = rand(1, 100);
        if ($number % 2 == 0) {
            $result[$number] = "yes";
        } else {
            $result[$number] = "no";
        }
    }
    // Вопрос игры и вызов общей функции engine
    $task = 'Answer "yes" if the number is even, otherwise answer "no".';
    engine($result, $task);
}
