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
        $this->Host = MAIL_SMTP_HOST;
        $this->Port = MAIL_SMTP_PORT;
        $this->Username = MAIL_SMTP_USER;
        $this->Password = MAIL_SMTP_PASSWORD;
        $this->setFrom(MAIL_FROM_MAIL, MAIL_FROM_NAME);
    }
}
