<?php
class session {
    public $data = [];

    public function __construct(){
        session_start();
        $this->data = $_SESSION;
    }

    public function __destruct(){
        $_SESSION = $this->data;
        session_write_close();
    }
}