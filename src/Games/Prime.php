<?php

namespace BrainGames\Cli;

// Проверка на простое число
function isPrime(int $number)
{
    if ($number < 2) {
        return false;
    }

    for ($i = 2; $i < $number; $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}
// Проверка с рандомными числами на простое число
function prime()
{
    // Числа, которые выведутся на экран
    $question = [];
    // Правильные ответы
    $answer = [];
    // Получение рандомных чисел
    $randNumber = [];
    for ($i = 0; $i < 3; $i++) {
        $randNumber[] = rand(1, 100);
    }
    // Проверка на простое число с уже полученными данными
    foreach ($randNumber as $number) {
        $question[] = $number;

        $temp = isPrime($number);
        if ($temp == true) {
            $answer[] = "yes";
        } else {
            $answer[] = "no";
        }
    }
    // Объединение в массив вопросов и ответов
    $result = array_combine($question, $answer);
    // Вопрос игры и вызов общей функции engine
    $task = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    engine($result, $task);
}
