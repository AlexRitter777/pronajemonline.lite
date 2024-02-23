<?php

namespace pronajem;

class app
{
    public static $app;

    public function __construct(){
        //поймаем запрос пользователя в адресной строке
        $query = trim($_SERVER['QUERY_STRING'], '/'); //обрезаем последний слэш
        session_start();
        self::$app = Registry::instance();// в app запускаем стат. метод, который, создает объект Registry если он не сущкствует или возвращает имеющийся
        $this->getParams();
        new ErrorHandler();
        Router::dispatch($query);

     }


    protected function getParams(){
        $params = require_once  CONF . '/params.php';
        if(!empty($params)){
            foreach ($params as $k => $v) {
                self::$app->setProperty($k, $v);
            }
        }
    }
}