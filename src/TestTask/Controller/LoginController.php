<?php

namespace TestTask\Controller;

use TestTask\Mvc\Controller;

class LoginController extends Controller
{
    /**
     * Отобразить форму логина.
     */
    public function formAction()
    {
        return $this->render('login_form', [
            //'form' => $form->getView(),
        ]);

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
