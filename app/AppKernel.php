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
     * 3) Отправка полученных данных от контроллера юзеру.
     */
    public function run()
    {
        /*
        $db = \TestTask\DB::getInstance();
        ld($db); // object(PDO)
        $stmt = $db->query('SELECT * FROM users');
        while ($row = $stmt->fetch()) {
            ld($row); // object(stdClass) т.к. указано PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
        }
        */

        $controllerData = $this->dispatchRoute();
        $response       = null;

        if (class_exists($controllerData['controller'])) {
            $viewsDir = realpath(__DIR__.'/../views');

            $controller = new $controllerData['controller']($viewsDir);

            if (method_exists($controller, $controllerData['action'])) {
                $response = $controller->$controllerData['action']();
            } else {
                $response = 'Ошибка: Метод '.$controllerData['controller'].'::'.$controllerData['action'].' не существует';
            }
        } else {
            $response = 'Ошибка: Класс контроллера '.$controllerData['controller'].' не существует';
        }

        // Тут можно сделать обработку события kernel.response
        // т.е. перед отправкой юзеру данные, полученные от контроллера, можно модифицировать.

        echo $response;
    }

    /**
     * Очень примитивный и неполноценный маршрутизатор.
     * Разумеется лучше использовать готовые решения, например компонент Symfony.
     *
     * @return array
     */
    protected function dispatchRoute()
    {
        $routes   = require_once 'routes.php'; // Можно использовать symfony/yaml и хранить маршруты в yaml.
        $uriParts = explode('/', $_SERVER['REQUEST_URI']);

        // Пока так задаётся контроллер по умолчанию, говорящий, что страница не найдена.
        $route = [
            'path' => null,
            'controller' => 'TestTask\Controller\PageController',
            'action' => 'notFoundAction',
            'methods' => ['GET', 'POST'],
            'params' => [],
        ];

        foreach ($routes as $routeName => $routeData) {
            if ($routeData['path'] == '/'.$uriParts[1]) {
                $route = $routeData;

                break;
            }
        }

        return $route;
    }
}
