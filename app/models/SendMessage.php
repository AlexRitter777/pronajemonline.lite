<?php

namespace app\models;

class SendMessage extends AppModel {



    public function sendMessage($name, $title, $message, $sender) {
        $header = "From: " . $sender;
        $header .= "\nMIME-Version: 1.0\n";
        $header .= "Content-Type: text/html; charset=\"utf-8\"\n";

        $messageResult = mb_send_mail($name, $title, $message, $header);
        if (!$messageResult)
            throw new \Exception('Zprávu se nepodařilo odeslat');

    }






}