<?php
return [
    'home' => [
        'path' => '/',
        // @todo пока отображается логинилка на главной, а потом сделать файрвол и отображать профиль юзера только авторизованному.
        //'controller' => 'TestTask\Controller\ProfileController',
        //'action' => 'showAction',
        'controller' => 'TestTask\Controller\LoginController',
        'action' => 'formAction',
        'params' => [],
    ],
    'login' => [
        'path' => '/login',
        'controller' => 'TestTask\Controller\LoginController',
        'action' => 'formAction',
        'params' => [],
    ],
    'login_check' => [
        'path' => '/login_check',
        'controller' => 'TestTask\Controller\LoginController',
        'action' => 'checkAction',
        'methods' => ['POST'],
        'params' => [],
    ],
    'register' => [
        'path' => '/register',
        'controller' => 'TestTask\Controller\RegisterController',
        'action' => 'formAction',
        'params' => [],
    ],
];
