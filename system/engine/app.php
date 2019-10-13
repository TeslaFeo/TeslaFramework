<?php
class App {
    public function __get($name){
        return Registry::get($name);
    }
}