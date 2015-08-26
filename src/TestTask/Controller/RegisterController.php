<?php

namespace TestTask\Controller;

use TestTask\Form\UserForm;
use TestTask\Mvc\Controller;

class RegisterController extends Controller
{
    /**
     * Отобразить форму регистрации.
     */
    public function formAction()
    {
        $form = new UserForm();

        if (!empty($_POST)) {
            $form->bind($_POST);
        }

        return 'Тут будет регистрилка :) это метод: '.__METHOD__;

        /*
        return $this->render('Register/form', [
            'form' => $form->getView(),
        ]);
        */
    }
}
