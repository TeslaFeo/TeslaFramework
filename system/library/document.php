<?php
class document {

    private $styles = [];
    private $scripts = [];
    private $title = '';
    private $description = '';

    public function __construct() {
        $this->styles = [
            '/public/lib/bootstrap/bootstrap.css',
            '/public/lib/font-awesome/css/font-awesome.css',
            '/public/css/common.css'
        ];
        $this->scripts = [
            '/public/lib/jquery.js',
            '/public/lib/popper.js',
            '/public/lib/bootstrap/bootstrap.js',
            '/public/js/common.js'
        ];
    }

    public function addStyle($style) {
        $this->styles[] = $style;
    }

    public function addScript($script) {
        $this->scripts[] = $script;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function getStyles() {
        return $this->styles;
    }

    public function getScripts() {
        return $this->scripts;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getDescription() {
        return $this->description;
    }
}