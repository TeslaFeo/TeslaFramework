<?php
class session {
    public $data = [];

    public function __construct() {
        session_start();
        $this->data = $_SESSION;
    }

    public function close() {
        if ( session_status() == PHP_SESSION_ACTIVE ) {
            session_write_close();
        }
    }

    public function __destruct() {
        $_SESSION = $this->data;
        session_write_close();
    }
}