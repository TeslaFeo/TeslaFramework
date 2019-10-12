<?php
class ControllerHome extends app {
    public function index() {
        $this->document->setTitle('TeslaFramework');
        return $this->load->template('home');
    }
}