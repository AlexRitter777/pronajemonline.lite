<?php

namespace app\controllers;

use app\models\SendMessage;


class SendmessageController extends AppController {

    public $contactName;
    public $contactEmail;
    public $conactMessage;
    public $header;
    public $adminMessage = '';
    public $userMessage;




    public function indexAction() {

        if (!isset($_SESSION['messageSent'])) {
            if (!empty($_POST)) {

                $this->contactName = $_POST['contactName'];
                $this->contactEmail = $_POST['contactEmail'];
                $this->conactMessage = $_POST['contactMessage'];


                $this->adminMessage = "<html><p>Message from user {$this->contactName} from {$this->contactEmail}:</p><p><i>";
                $this->adminMessage .= $this->conactMessage;
                $this->adminMessage .='<i></i></p>';
                /*
                $this->userMessage = "Vaší zpráva byla doručena. A v nejblížší době bude odpovezěna. <br>Text zpravy:<br>";
                $this->userMessage .= $this->conactMessage;
                */

                $sendMessage = new SendMessage();
                $sendMessage->sendMessage(/*"pronajemonline@gmail.com"*/"info@pronajemonline.cz", 'Pronjemonline.cz - nová zpráva', $this->adminMessage, 'info@pronajemonline.cz');
                //$sendMessage->sendMessage($this->contactEmail, 'Pronajemonline.cz - doručení zprávy', $this->userMessage, 'info@pronajemonline.cz');
                $_SESSION['messageSent'] = true;



            } else {
                //throw new \Exception('Anything was wrong! Please try again later!');
                header('Location: /');
            }
        } else {
            unset($_SESSION['messageSent']);
            header('Location: /contact/new-message'); //Рабоать с этим!!!
        }


    }



}