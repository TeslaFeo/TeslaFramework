<?php

// Dir
define('DIR_ROOT', $_SERVER['DOCUMENT_ROOT']);
define('DIR_APP', DIR_ROOT.'/app');
define('DIR_SYSTEM', DIR_ROOT.'/system');

// DB
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'my_db');
define('DB_PORT', '3306');

// Debug mode
define('DEBUG_MODE', true);

// Mail
define('MAIL_SMTP_HOST', 'ssl://smtp.yandex.ru');
define('MAIL_SMTP_PORT', 465);
define('MAIL_SMTP_USER', 'login');
define('MAIL_SMTP_PASSWORD', 'password');
define('MAIL_FROM_MAIL', 'mail@example.com');
define('MAIL_FROM_NAME', 'Name');
