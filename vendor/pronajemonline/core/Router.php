<?php

namespace pronajem;

use http\Exception\BadMessageException;
use mysql_xdevapi\Exception;

class Router {

    protected static $routes = [];
    protected static $route = [];

    public static function add($regexp, $route = []) {
        self::$routes[$regexp] = $route;
    }

    //метод для тестирования - возвращает таблицу маршрутов
    public static function getRoutes (){
        return self::$routes;
    }

    //метод для тестирования - возвращает текущий маршрут
    public static function getRoute(){
        return self::$route;
    }

    public static function dispatch($url){
        $url = self::removeQueryString($url);
        if (self::matchRoute($url)) {
            $controller = 'app\controllers\\' . self::$route['prefix'] . self::$route['controller'] . 'Controller';
            if (class_exists($controller)){
                $controllerObject = new $controller(self::$route);
                $action = self::lowerCamelCase(self::$route['action']) . 'Action'; //можно не запускать lowerCamleCase - довавил в matchRoute
                if (method_exists($controllerObject, $action)){
                    $controllerObject->$action();
                    $controllerObject->getView();
                }else{
                    throw new \Exception("Method $controller::$action is not found", 404);
                }
            }else{
                throw new \Exception("Controller $controller is not found", 404);
            }

        }else{
           throw new \Exception('Stránka není nalezená', 404);
        }

     }
    //метод используя маршруты ищет по регулярному выражению совпадения и делает ассоциативный массив из url с ключами prefix, controller, action
    public static function matchRoute($url)
    {
        foreach (self::$routes as $pattern => $route) {
            if (preg_match("#{$pattern}#", $url, $matches)) {
                foreach ($matches as $k => $v) {
                    if (is_string($k)) {
                        $route[$k] = $v;
                    }
                }

                if (empty($route['action'])) { 
                    $route['action'] = 'index';
                }
                if (!isset($route['prefix'])) {
                    $route['prefix'] = '';
                } else {
                    $route['prefix'] .= '\\';
                }
                $route['controller'] = self::upperCamelCase($route['controller']);
                $route['action'] = self::lowerCamelCase($route['action']);
                self::$route = $route;
                return true;
            }
        }
        return false;
    }
    //CamelCase
    protected static function upperCamelCase($name){
        $name = ucwords(str_replace('-', ' ', $name));
        return str_replace(' ', '', $name);

    }
    //camelCase
    protected static function lowerCamelCase($name){
        return lcfirst(self::upperCamelCase($name));
    }

    protected static function removeQueryString($url){
        if($url){
            $params = explode('&', $url, 2);
            if(false === strpos($params[0], '=')){
                return rtrim($params[0], '/');
            }else{
                return '';
            }
        }
    }


}