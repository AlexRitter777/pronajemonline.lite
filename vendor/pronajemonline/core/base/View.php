<?php

namespace pronajem\base;
use Mpdf\Mpdf;

class View
{
    public $route;
    public $controller;
    public $model;
    public $view;
    public $prefix;
    public $data = [];
    public $meta = [];
    public $layout;

    public function __construct($route, $layout = '', $view = '', $meta ){
        $this->route = $route;
        $this->controller = $route['controller'];
        $this->model = $route['controller'];
        $this->view = $view;
        $this->prefix = $route['prefix'];
        $this->meta = $meta;
        if($layout === false) {
            $this->layout = false;
        }else{
            $this->layout = $layout ?: LAYOUT;
        }

    }



    public function render($data) {
        if(is_array($data)) extract($data);
        $viewFile = APP . "/views/{$this->prefix}{$this->controller}/{$this->view}.php";
        $headerFile = APP . "/views/Includes/header.php";
        $footerFile = APP . "/views/Includes/footer.php";

        if(is_file($viewFile)){
            ob_start();
            require_once $viewFile;
            $content = ob_get_clean();
        }else{
            throw new \Exception("View {$viewFile} is not found", 500);
        }

        if(is_file($headerFile)) {
            ob_start();
            require_once $headerFile;
            $contentHeader = ob_get_clean();
        } else {
            throw new \Exception("Header is not found", 500);
        }

        if(is_file($footerFile)) {
            ob_start();
            require_once $footerFile;
            $contentFooter = ob_get_clean();
        } else {
            throw new \Exception("Footer is not found", 500);
        }



        if(false !== $this->layout) {
            $layoutFile = APP . "/views/layouts/{$this->layout}.php";
            if(is_file($layoutFile)){
                require_once $layoutFile;
            }else{
                throw new \Exception("Layout {$this->layout} is not found", 500);
            }
        }


    }


    public function pdfRender($data) {
        //debug($data);
        if(is_array($data)) extract($data);
        $this->view = mb_substr( $this->view, 0, -3);
        $viewFile = APP . "/views/{$this->prefix}{$this->controller}/{$this->view}.php";
        if(is_file($viewFile)){
            ob_start();
            require_once $viewFile;
            $content = ob_get_clean();
            $mPdf = new Mpdf();
            $stylesheet = file_get_contents("css/{$this->view}.css");
            $stylesheet .= file_get_contents("css/calc.css");
            $date = date("d.m.Y H:i");
            $mPdf->WriteHTML($stylesheet, 1);
            $mPdf->WriteHTML($content, 2);
            //$mPdf->SetHTMLFooter('<div style="text-align: center"><i>pronajem-online software</i></div>');
            $mPdf->Output("Vyuctovani-{$data['result']['calcType']}-{$date}.pdf", 'D');
        }else{
            throw new \Exception("View {$viewFile} is not found", 500);
        }
    }



    public function getMeta(){
        $output = '<title>' . $this->meta['title'] . '</title>' . PHP_EOL;
        $output .= '<meta name="description" content="' . $this->meta['desc'] . '">' . PHP_EOL;
        $output .= '<meta name="keywords" content="' . $this->meta['keywords'] . '">' . PHP_EOL;
        return $output;
    }





}