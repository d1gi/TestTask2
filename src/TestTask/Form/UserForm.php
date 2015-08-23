<?php

namespace TestTask\Form;

use TestTask\Entity\User;

class UserForm
{
    /**
     * Приаязать выходные данные к сущности
     */
    public function bind()
    {

    }

    /**
     * Получить сущность
     *
     * @return User
     */
    protected function getData()
    {

    }

    /**
     * Получить сгенерированый шаблон формы.
     */
    public function getView()
    {
        return ''; // @todo
    }

    /**
     * Проверка на валидность
     *
     * @return bool
     */
    public function isValid()
    {
        return true; // @todo
    }
}
