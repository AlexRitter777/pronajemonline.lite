<?php

namespace pronajem;

class ErrorHandler
{
    public function __construct(){
        if(DEBUG) { //Проверка - включен ли режим разарботки
          error_reporting(-1); // показываем все ошибки, включая те которые не отлавл. хендлером
        }
        else {
          error_reporting(0); // скрываем все ошибки
        }
        set_exception_handler([$this, 'exceptionHandler']);
    }

    public function exceptionHandler($e){
        $this->logErrors($e->getMessage(), $e->getFile(), $e->getLine());
        $this->displayError('Исключение', $e->getMessage(), $e->getFile(), $e->getLine(), $e->getCode());
    }

    //запись ошибок до log файла
    protected function logErrors($message = '', $file = '', $line = ''){
        error_log("[" . date('Y-m-d H:i:s') . "] Текст ошибки: {$message} | Файл: {$file} | Строка: {$line}\n============================\n", 3, ROOT . '\tmp\errors.log');
    }

    //показ ошибок
    protected function displayError($errno, $errstr, $errfile, $errline, $responce = 404){
        http_response_code($responce); //выводит ошибку в консоль
        //показываем, если ответ 404 и отладка выключена
        if($responce == 404 && !DEBUG) {
            require WWW . '/errors/404.php';
            die;
        }
        //показываем dev или prod, в зввисимости от значения DEBUG
        if (DEBUG) {
            require WWW . '/errors/dev.php';
        }else{
            require WWW. '/errors/prod.php';
        }
        die;
    }

}