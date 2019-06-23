<?php
class app {
    public function __get($name){
        return registry::get($name);
    }
}