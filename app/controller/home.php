<?php
class ControllerHome extends app {
    public function index() {
        $this->document->setTitle('TeslaFramework');
        $data['header'] = $this->load->controller('common/header');
        $data['footer'] = $this->load->controller('common/footer');
        return $this->load->view('home', $data);
    }
}