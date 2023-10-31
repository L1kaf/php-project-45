<?php

namespace BrainGames\Cli;

function progression()
{
    // Переменная для рандомного выбора скрытого элемента
    $answer = [];
    // Переменная для создания вопроса
    $question = [];
    // Получаем рандомные значения для создания прогрессии и скрываем рандомный элемент из него
    for ($i = 0; $i < 3; $i++) {
        $start = rand(0, 10);
        $end = rand(30, 50);
        $step = rand(2, 6);

        $progression = range($start, $end, $step);
        $randKey = array_rand($progression);
        $answer[] = $progression[$randKey];
        $progression[$randKey] = "..";
        $question[$i] = implode(" ", $progression);
    }
    // Объединение в массив вопросов и ответов
    $result = array_combine($question, $answer);
    // Вопрос игры и вызов общей функции engine
    $task = 'What number is missink in the progression?';
    engine($result, $task);
}
