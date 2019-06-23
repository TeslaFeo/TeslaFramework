<?php
require_once(DIR_SYSTEM.'/library/phpMailer/PHPMailer.php');
require_once(DIR_SYSTEM.'/library/phpMailer/SMTP.php');

class mail extends PHPMailer {
    public function __construct() {
        parent::__construct();

        $this->isSMTP();
        $this->isHTML(true);
        $this->CharSet = 'UTF-8';
        $this->Host = 'ssl://smtp.yandex.ru';
        $this->SMTPSecure = 'SSL';
        $this->Port = 465;
        $this->SMTPAuth = true;
        $this->Username = 'login';
        $this->Password = 'password';
        $this->setFrom('from@mail.com', 'Name');
    }
}
