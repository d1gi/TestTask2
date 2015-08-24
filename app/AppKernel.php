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

        $db = \TestTask\DB::getInstance();

        ld($db); // object(PDO)

        $stmt = $db->query('SELECT * FROM users');

        while ($row = $stmt->fetch()) {
            ld($row); // object(stdClass) т.к. указано PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
        }
    }
}
