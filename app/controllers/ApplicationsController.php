<?php

namespace app\controllers;

use app\models\Applications;
use Mpdf\Mpdf;

class ApplicationsController extends AppController {


    public function indexAction()
    {

        $this->setMeta('Aplikace', 'Aplikace pro jednoduchou a rychlou přefakturaci poměrné části nákladů na služby a energii na základě skuteční spotřeby a skutečné dekly pronájmu', 'vyúčtování služeb, pronajímatel, nájemník, vyúčtování energii, vyúčtování kauce, pronájem, kalkulace, pronajemonline.cz, pronajemonline, vyúčtování spotřeby elektřiny ');
    }

    public function servicesformAction() {
        $this->setMeta('Vyúčtování služeb', 'Vyúčtování služeb spojených s užíváním bytu ', 'vyúčtování služeb, pronajímatel, nájemník, vyúčtování energii, vyúčtování kauce, pronájem, kalkulace, pronajemonline.cz, pronajemonline');
        $this->layout = 'pronajemform';
        $data = null;

        $this->set(compact('data'));
    }

    public function easyservicesformAction() {
        $this->setMeta('Vyúčtování služeb', 'Vyúčtování služeb spojených s užíváním bytu ', 'vyúčtování služeb, pronajímatel, nájemník, vyúčtování energii, vyúčtování kauce, pronájem, kalkulace, pronajemonline.cz, pronajemonline');
        $this->layout = 'pronajemform';
        $data = null;

        $this->set(compact('data'));
    }


    public function electroformAction() {
        $this->setMeta('Vyúčtování spotřeby elektřiny', 'Vyúčtování spotřeby elektřiny', 'pronajímatel, nájemník, vyúčtování energii,  pronájem, kalkulace, pronajemonline.cz, pronajemonline, vyúčtování spotřeby elektřiny');
        $this->layout = 'pronajemform';
        $data = null;

        $this->set(compact('data'));
    }


    public function depositformAction() {
        $this->setMeta('Vyúčtování kauce', 'Vyúčtování kauce složené nájemníkem', 'vyúčtování služeb, pronajímatel, nájemník, vyúčtování energii, vyúčtování kauce, pronájem, kalkulace, pronajemonline.cz, pronajemonline, vyúčtování spotřeby elektřiny');
        $this->layout = 'pronajemform';
        $data = null;

        $this->set(compact('data'));


    }


    public function totalformAction() {
        $this->setMeta('Souhrné vyúčtování', 'Souhrné vyúčtování', 'vyúčtování služeb, pronajímatel, nájemník, vyúčtování energii, vyúčtování kauce, pronájem, kalkulace, pronajemonline.cz, pronajemonline, vyúčtování spotřeby elektřiny');
        $this->layout = 'pronajemform';
        $data = null;

        $this->set(compact('data'));


    }

    public function universalformAction() {
        $this->setMeta('Univerzalní vyúčtování', 'Description', 'vyúčtování služeb, pronajímatel, nájemník, vyúčtování energii, vyúčtování kauce, pronájem, kalkulace, pronajemonline.cz, pronajemonline, vyúčtování spotřeby elektřiny');
        $this->layout = 'pronajemform';
        $data = null;

        $this->set(compact('data'));


    }

    public function electroformeditAction() {
        $this->setMeta('Vyúčtování spotřeby elektřiny', 'Vyúčtování spotřeby elektřiny', '');
        $this->layout = 'pronajemform';
        if(isset($_SESSION['electroResult'][$_GET['id']])) {
            $data = $_SESSION['electroResult'][$_GET['id']];
            unset($_SESSION['electroResult'][$_GET['id']]);
        } else {
            $data = null;
        }
        $this->set(compact('data'));
    }

    public function servicesformeditAction() {
        $this->setMeta('Vyúčtování služeb', 'Vyúčtování služeb spojených s užíváním bytu', '');
        $this->layout = 'pronajemform';
        if(isset($_SESSION['costsResult'][$_GET['id']])) {
            $data = $_SESSION['costsResult'][$_GET['id']];
            unset($_SESSION['costsResult'][$_GET['id']]);
        } else {
            $data = null;
        }
        $this->set(compact('data'));
    }

    public function easyservicesformeditAction() {
        $this->setMeta('Vyúčtování služeb', 'Vyúčtování služeb spojených s užíváním bytu', '');
        $this->layout = 'pronajemform';
        if(isset($_SESSION['easyCostsResult'][$_GET['id']])) {
            $data = $_SESSION['easyCostsResult'][$_GET['id']];
            unset($_SESSION['easyCostsResult'][$_GET['id']]);
        } else {
            $data = null;
        }
        $this->set(compact('data'));
    }


    public function depositformeditAction() {
        $this->setMeta('Vyúčtování kauce složené nájemníkem', 'Description', '');
        $this->layout = 'pronajemform';
        if(isset($_SESSION['depositResult'][$_GET['id']])) {
            $data = $_SESSION['depositResult'][$_GET['id']];
            unset($_SESSION['depositResult'][$_GET['id']]);
        } else {
            $data = null;
        }
        $this->set(compact('data'));
    }

    public function totalformeditAction() {
        $this->setMeta('Souhrné vyúčtování', 'Souhrné vyúčtování', '');
        $this->layout = 'pronajemform';
        if(isset($_SESSION['totalResult'][$_GET['id']])) {
            $data = $_SESSION['totalResult'][$_GET['id']];
            unset($_SESSION['totalResult'][$_GET['id']]);
        } else {
            $data = null;
        }
        $this->set(compact('data'));
    }

    public function universalformeditAction() {
        $this->setMeta('Univerzalní vyúčtování', 'Univerzalní vyúčtování', '');
        $this->layout = 'pronajemform';
        if(isset($_SESSION['universalResult'][$_GET['id']])) {
            $data = $_SESSION['universalResult'][$_GET['id']];
            unset($_SESSION['universalResult'][$_GET['id']]);
        } else {
            $data = null;
        }
        $this->set(compact('data'));
    }



    public function servicescalcAction() {
        $this->setMeta('Vyúčtování služeb', 'Vyúčtování služeb spojených s užíváním bytu', '');
        $this->layout = 'pronajemcalc';
        if(!empty($_POST)) {
            $data = $_POST;
            $calculate = new Applications($data);
            $calculate->load($data);
            $result = $calculate->servicesCalculation();
            $result['calcType'] = 'services';
            $result['id'] = time();
            $id = $result['id'];
            $_SESSION['costsResult'][$id] = $result;
            $this->set(compact('result'));

        } else {
            header('Location: /');
            //throw new \Exception('Stranka není nalezená', 404);
        }
    }

    public function servicescalcpdfAction(){
        $this->pdf = true;
        if(!empty($_SESSION['costsResult'][$_GET['id']])) {
            $result = $_SESSION['costsResult'][$_GET['id']];
            $this->set(compact('result'));
        }
        else {
            throw new \Exception('Stranka není nalezená', 404);
        }

    }

    public function easyservicescalcAction() {
        $this->setMeta('Vyúčtování služeb', 'Vyúčtování služeb spojených s užíváním bytu', '');
        $this->layout = 'pronajemcalc';
        if(!empty($_POST)) {
            $data = $_POST;
            $calculate = new Applications($data);
            $calculate->load($data);
            $result = $calculate->easyServicesCalculation();
            $result['calcType'] = 'easyservices';
            $result['id'] = time();
            $id = $result['id'];
            $_SESSION['easyCostsResult'][$id] = $result;
            $this->set(compact('result'));

        } else {
            header('Location: /');
            //throw new \Exception('Stranka není nalezená', 404);
        }
    }

    public function easyservicescalcpdfAction(){
        $this->pdf = true;
        if(!empty($_SESSION['easyCostsResult'][$_GET['id']])) {
            $result = $_SESSION['easyCostsResult'][$_GET['id']];
            $this->set(compact('result'));
        }
        else {
            throw new \Exception('Stranka není nalezená', 404);
        }

    }


    public function electrocalcAction(){
        $this->setMeta('Vyúčtování spotřeby elektřiny', 'Vyúčtování spotřeby elektřiny', '');
        $this->layout = 'pronajemcalc';
        if(!empty($_POST)) {
            $data = $_POST;
            $calculate = new Applications();
            $calculate->load($data);
            $result = $calculate->electroCalculation();
            $result['calcType'] = 'electro';
            $result['id'] = time();
            $id = $result['id'];
            $_SESSION['electroResult'][$id] = $result;
            $this->set(compact('result'));
        } else {
            //throw new \Exception('Stranka není nalezená', 404);
            header('Location: /');
        }
    }

    public function electrocalcpdfAction(){
        $this->pdf = true;
        if (!empty($_SESSION['electroResult'][$_GET['id']])) {
            $result = $_SESSION['electroResult'][$_GET['id']];
            $this->set(compact('result'));
        } else {
            throw new \Exception('Stranka není nalezená', 404);
        }
    }

    public function depositcalcAction(){
        $this->setMeta('Vyúčtování kauce složené nájemníkem', 'Vyúčtování spotřeby elektřiny', '');
        $this->layout = 'pronajemcalc';
        if(!empty($_POST)) {
            $data = $_POST;
            $calculate = new Applications();
            $calculate->load($data);
            $result = $calculate->depositCalculation();
            $result['calcType'] = 'deposit';
            $result['id'] = time();
            $id = $result['id'];
            $_SESSION['depositResult'][$id] = $result;
            $this->set(compact('result'));
        } else {
            //throw new \Exception('Stranka není nalezená', 404);
            header('Location: /');
        }
    }

    public function depositcalcpdfAction(){
        $this->pdf = true;
        if (!empty($_SESSION['depositResult'][$_GET['id']])) {
            $result = $_SESSION['depositResult'][$_GET['id']];
            $this->set(compact('result'));
        } else {
            throw new \Exception('Stranka není nalezená', 404);
        }
    }

    public function totalcalcAction(){
        $this->setMeta('Sohrné vyúčtování', 'Sohrné vyúčtování', '');
        $this->layout = 'pronajemcalc';
        if(!empty($_POST)) {
            $data = $_POST;
            $calculate = new Applications();
            $calculate->load($data);
            $result = $calculate->totalCalculation();
            $result['calcType'] = 'total';
            $result['id'] = time();
            $id = $result['id'];
            $_SESSION['totalResult'][$id] = $result;
            $this->set(compact('result'));
        } else {
            //throw new \Exception('Stranka není nalezená', 404);
            header('Location: /');
        }
    }

    public function totalcalcpdfAction(){
        $this->pdf = true;
        if (!empty($_SESSION['totalResult'][$_GET['id']])) {
            $result = $_SESSION['totalResult'][$_GET['id']];
            $this->set(compact('result'));
        } else {
            throw new \Exception('Stranka není nalezená', 404);
        }
    }

    public function universalcalcAction(){
        $this->setMeta('Univerzální vyúčtování', 'Univerzální vyúčtování', '');
        $this->layout = 'pronajemcalc';
        if(!empty($_POST)) {
            $data = $_POST;
            $calculate = new Applications();
            $calculate->load($data);
            $result = $calculate->universalCalculation();
            $result['calcType'] = 'universal';
            $result['id'] = time();
            $id = $result['id'];
            $_SESSION['universalResult'][$id] = $result;
            $this->set(compact('result'));
        } else {
            //throw new \Exception('Stranka není nalezená', 404);
            header('Location: /');
        }
    }

    public function universalcalcpdfAction(){
        $this->pdf = true;
        if (!empty($_SESSION['universalResult'][$_GET['id']])) {
            $result = $_SESSION['universalResult'][$_GET['id']];
            $this->set(compact('result'));
        } else {
            throw new \Exception('Stranka není nalezená', 404);
        }
    }


}