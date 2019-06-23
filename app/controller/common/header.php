<?php
class ControllerCommonHeader extends app {
    public function index() {
        $data['styles'] = $this->document->getStyles();
        $data['title'] = $this->document->getTitle();
        $data['description'] = $this->document->getDescription();

        return $this->load->view('common/header', $data);
    }
}