### Hexlet tests and linter status:
---
[![Actions Status](https://github.com/L1kaf/php-project-45/actions/workflows/hexlet-check.yml/badge.svg)](https://github.com/L1kaf/php-project-45/actions)
[![Maintainability](https://api.codeclimate.com/v1/badges/9c48429c7ab2d9e5e654/maintainability)](https://codeclimate.com/github/L1kaf/php-project-45/maintainability)

### Описание:
---
Этот репозиторий содержит реализацию первого проекта учебного портала Hexlet: Brain Games! В проекте 5 мини игр. Каждая игра задает вопросы, на которые нужно дать правильные ответы. После трех правильных ответов считается, что игра пройдена. Неправильные ответы завершают игру и предлагают пройти ее заново.

### Минимальные требование:
---
* ОС Windows/Linux;
* PHP не ниже 7 версии.

### Установка и запуск:
---
* Для установки используется Makefile с командой install, выполняющий команду composer install: `make install`  
* Для запуска игры достаточно ввести команду make с названием игры в командной строке:
  * make brain-even - в игре надо ответить является число четным или же нет.
  * make brain-calc - в игре надо сложить, вычесть или умножить два числа и дать верный ответ.
  * make brain-gcd  - в игре надо найти наибольший общий делитель двух чисел и дать верный ответ.
  * make brain-progression - в игре надо найти пропущеный элемент арифметической прогрессии.
  * make brain-prime - в игре надо ответить простое показанное число или нет.  

Например: `make brain-even`

### Asciinema recordings:
---
* [Brain-even](https://asciinema.org/a/vo3y8ebfilbGPCFZakZCTI7TS)
* [Brain-calc](https://asciinema.org/a/sSPg4VdPH9nRkhwuWByo4oNsM)
* [Brain-gcd](https://asciinema.org/a/FiTVFwUENsbP8i9V9j09G7qOW)
* [Brain-progression](https://asciinema.org/a/vjpK2MwbkHJkgHTiKDVbscxwi)
* [Brain-prime](https://asciinema.org/a/7LXioWud36DHXdcklLhKiLn7M)
