<?php

namespace TestTask\Controller;

class LoginController
{
    /**
     * Отобразить форму логина.
     */
    public function formAction()
    {
        return 'Тут будет логинилка :) это метод: '.__METHOD__;
    }

    /**
     * Проверить данные от юзера.
     */
    public function checkAction()
    {

    }

    /**
     * Аутентифицировать юзера.
     *
     * Записать данные в сессию.
     */
    public function authentificate()
    {

    }
}
