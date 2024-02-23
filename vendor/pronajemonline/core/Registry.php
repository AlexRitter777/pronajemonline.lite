<?php

namespace pronajem;

class Registry { //класс для объекта со свойствами, которые мы туда запишем с пом. settera

    use TSingletone; //мы не должны создать более 1 объекта данного класса, поэтому используем этот паттерн

    protected static $properties = [];

    public function setProperty($name, $value) {

        self::$properties[$name] = $value;

    }

    public function getProperty($name) {
        if(isset(self::$properties[$name])){
            return self::$properties[$name];
        }
        return null;
    }

    public function getProperties(){
        return self::$properties;
    }
// в других источниках еще пишут, что в классе должен быть еще пустой приватный Коструктор, чтобы заблокировать возможность создание объекта по другому, чем черз функцию Instance().

}