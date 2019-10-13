<?php
class ControllerHome extends App {
    public function index() {
        $this->document->setTitle('TeslaFramework');
        return $this->load->template('home');
    }
}