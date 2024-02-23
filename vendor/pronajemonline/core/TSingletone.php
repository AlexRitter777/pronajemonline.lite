<?php

namespace pronajem;
//данный трейт не дает создатьл более одного объекта конкретного класса
trait TSingletone {

    private static $instance;

    public static function instance() {
        if(self::$instance === null){
            self::$instance = new self;
        }
        return self::$instance;


    }
}

//если свойство (переменная) данного класса не инициализирована, то мы в нее положим объект данного класса