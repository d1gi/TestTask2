<?php

class AppKernel
{
    /**
     * Constructor.
     */
    public function __construct()
    {
        require_once 'config.php';
    }

    /**
     * Запуск приложения:
     *
     * 1) Маршрутизация (определение какой нужно выполнить контроллер).
     * 2) Запуск контроллера
     * 3) Отправка полеченных данных от контроллера юзеру.
     */
    public function run()
    {
        echo 'hi :)';
    }
}
