<?php

namespace Core\Email;

class Email {
    private $mail;

    public function __construct(){
        require_once BASE_DIR."vendor/phpmailer/phpmailer/PHPMailerAutoload.php";

        $this->mail = new \PHPMailer;

        $this->configMail();
    }

    final public function enviar($mensage,$assunto){
        $this->montarMail();
    }

    final private function montarMail(){

    }

    final private function configMail(){
        $mail = $this->mail;
        $mail->isSMTP();
    }
}