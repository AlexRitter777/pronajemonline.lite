<?php

namespace app\controllers;

use app\models\ReCaptcha;
use app\models\Validation;

class ValidatorController extends AppController {

    public function servicesvalidationAction() {

        $data = $_POST;
        $validate = new Validation();
        $validate->load($data);
        $validate->validateServices();
        echo json_encode($validate->data);


        die();

    }

    public function easyservicesvalidationAction() {

        $data = $_POST;
        $validate = new Validation();
        $validate->load($data);
        $validate->validateEasyServices();
        echo json_encode($validate->data);


        die();

    }


    public function electrovalidationAction() {

        $data = $_POST;
        $validate = new Validation();
        $validate->load($data);
        $validate->validateElectro();
        echo json_encode($validate->data);


        die();

    }

    public function depositvalidationAction() {

        $data = $_POST;
        $validate = new Validation();
        $validate->load($data);
        $validate->validateDeposit();
        echo json_encode($validate->data);


        die();

    }

    public function totalvalidationAction() {

        $data = $_POST;
        $validate = new Validation();
        $validate->load($data);
        $validate->validateTotal();
        echo json_encode($validate->data);


        die();

    }


    public function universalvalidationAction() {

        $data = $_POST;
        $validate = new Validation();
        $validate->load($data);
        $validate->validateUniversal();
        echo json_encode($validate->data);


        die();

    }

    public function contactvalidationAction(){
        $data = $_POST;
        $validate = new Validation();
        $validate->validateContact($data['contactName'], $data['contactEmail'], $data['contactMessage']);
        echo json_encode($validate->data);

        die();
    }

    public function recaptchaAction(){
        $secretKey = "6LflMpQgAAAAAFo9XdCRLkMkO46ZWUKlzEtWU53R";
        $data = $_POST;
        if (isset($data['token'])) {
            $reCaptcha = new ReCaptcha();
            $reCaptcha->recaptchaValidate($data['token'], $secretKey);
            echo json_encode($reCaptcha->success);
            die();
        } else {
            throw new \Exception('Stranka není nalezená', 404);

        }


    }




}