<?php
class ControllerCommonLayout extends App {
    public function index() {
        $data['title']       = $this->document->getTitle();
        $data['description'] = $this->document->getDescription();
        $data['styles']      = $this->document->getStyles();
        $data['content']     = $this->document->getContent();
        $data['scripts']     = $this->document->getScripts();

        return $this->load->view('common/layout', $data);
    }
}
