<?php

namespace TestTask;

use \PDO;

/**
 * Синглтон подключение к БД, используя PDO.
 */
class DB
{
    /**
     * @var PDO|null
     */
    private static $instance = null;

    /**
     * Приватный конструктор запрещает создание объекта.
     */
    protected function __construct() {}

    /**
     * Запрет клонирования объекта.
     */
    protected function __clone() {}

    /**
     * @return PDO
     */
    static public function getInstance()
    {
        if(is_null(self::$instance)) {
            $dsn = 'mysql:host='.DB_HOST.';dbname='.DB_NAME;
            $opt = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
            ];

            self::$instance = new \PDO($dsn, DB_USER, DB_PSWD, $opt);
        }

        return self::$instance;
    }
}
