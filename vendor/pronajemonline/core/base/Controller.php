<?php

namespace pronajem\base;

abstract class Controller
{
    public $route;
    public $controller;
    public $model;
    public $view;
    public $prefix;
    public $data = [];
    public $meta = ['title'=>'','desc'=>'', 'keywords'=>''];
    public $layout;
    public $pdf = '';

    public function __construct($route){
        $this->route = $route;
        $this->controller = $route['controller'];
        $this->model = $route['controller'];

        if (preg_match('#Edit$#', $route['action'])){
            $this->view = str_replace('edit', '', strtolower($route['action']));
        } else {
            $this->view = strtolower($route['action']);
        }

        $this->prefix = $route['prefix'];

    }


    public function getView(){
        $viewObject = new View($this->route, $this->layout, $this->view, $this->meta);
        if (empty($this->pdf)) {
            $viewObject->render($this->data);
        } else {
            $viewObject->pdfRender($this->data);
        }
    }


    public function set($data) {
        $this->data = $data;
    }

    public function setMeta($title = '', $desc = '', $keywords = ''){
        $this->meta['title'] = $title;
        $this->meta['desc'] = $desc;
        $this->meta['keywords'] = $keywords;
    }

}