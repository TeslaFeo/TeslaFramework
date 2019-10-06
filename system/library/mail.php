<?php
require_once(DIR_SYSTEM.'/library/phpMailer/PHPMailer.php');
require_once(DIR_SYSTEM.'/library/phpMailer/SMTP.php');

class mail extends PHPMailer {
    public function __construct() {
        parent::__construct();

        $this->isSMTP();
        $this->isHTML(true);
        $this->CharSet = 'UTF-8';
        $this->SMTPSecure = 'SSL';
        $this->SMTPAuth = true;
        $this->Host = SMTP_HOST;
        $this->Port = SMTP_PORT;
        $this->Username = SMTP_USER;
        $this->Password = SMTP_PASSWORD;
        $this->setFrom(SMTP_FROM_MAIL, SMTP_FROM_NAME);
    }
}
