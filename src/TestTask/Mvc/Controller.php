<?php

namespace TestTask\Mvc;

class Controller
{
    private $viewsPath = null;

    /**
     * @param string $viewsPath
     */
    public function __construct($viewsPath)
    {
        $this->viewsPath = $viewsPath;
    }

    /**
     * @param string $tpl
     * @param array  $parameters
     *
     * @return string
     */
    public function render($tpl, array $parameters = [])
    {
        $tplPath = $this->viewsPath.'/'.$tpl.'.html.php';

        if (file_exists($tplPath)) {
            return include $tplPath;
        }

        return 'Ошибка: файл шаблона не найден <b>'.$tplPath.'</b>';
    }
}
