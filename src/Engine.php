<?php

namespace BrainGames\Cli;

use function cli\line;
use function cli\prompt;

function engine($result, $task)
{
    // Блок приветсвия
    line("Welcome to the Brain Games!");
    $name = prompt("May I have your name?", "", " ");
    line("Hello, %s!", $name);
    // Вывод вопроса и проверка ответов
    line($task);
    foreach ($result as $key => $value) {
        $answer = prompt("Question: $key\nYour answer");
        if ($answer == $value) {
            line("Correct!");
        } else {
            // Если ответ не правильный, то выводится об этом ошибка с правилтным ответом и выходит из игры
            line("\"$answer\" is wrong answer ;(. Correct answer was \"$value\".\nLet's try again, $name!");
            return;
        }
    }
    line("Congratulations, $name!");
}
