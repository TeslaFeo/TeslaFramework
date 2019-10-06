<?php
class loader {
    public function controller($route) {
        $route = preg_replace('/[^a-zA-Z0-9_\/]/', '', (string)$route);
        $result = $this->findController('controller/'.$route);

        if ($result) {
            require_once($result['file']);
            $controller = new $result['class']();
            if ( method_exists($controller, $result['method']) ) {
                return $controller->{$result['method']}();
            }
        }
        return 'Error 404';
    }

    public function model($route) {
        $route = preg_replace('/[^a-zA-Z0-9_\/]/', '', (string)$route);
        $file = DIR_APP.'/model/'.$route.'.php';
        $path = explode('/', $route);
        if ( is_file( $file ) ) {
            require_once($file);
            $class = 'Model'.implode('', $path);
            $key = 'model_'.implode('_', $path);
            registry::set($key, new $class());
        } else {
            exit('Model <b>'.$file.'</b> is not found!');
        }
    }

    public function view($route, $data = []) {
        $route = preg_replace('/[^a-zA-Z0-9_\/]/', '', (string)$route);
        $file = DIR_APP.'/view/'.$route.'.php';
        if ( is_file( $file ) ) {
            extract($data);
            ob_start();
            require_once($file);
            return ob_get_clean();
        }
        exit('Template <b>'.$file.'</b> is not found!');
    }

    public function library($route) {
        $route = preg_replace('/[^a-zA-Z0-9_\/]/', '', (string)$route);
        $file = DIR_SYSTEM.'/library/'.$route.'.php';
        $path = explode('/', $route);
        if ( is_file( $file ) ) {
            require_once($file);
            $class = end($path);
            $key = end($path);
            registry::set($key, new $class());
        } else {
            exit('Library <b>'.$file.'</b> is not found!');
        }
    }

    public function helper($route) {
        $route = preg_replace('/[^a-zA-Z0-9_\/]/', '', (string)$route);
        $file = DIR_SYSTEM.'/helper/'.$route.'.php';
        if ( is_file( $file ) ) {
            require_once($file);
        } else {
            exit('Helper <b>'.$file.'</b> is not found!');
        }
    }

    private function findController($route) {
        $path = explode('/', $route);
        if ( is_file( DIR_APP.'/'.implode('/', $path).'.php' ) ) {
            $file = DIR_APP.'/'.implode('/', $path).'.php';
            $class = str_replace('_', '', implode('', $path));
            $method = 'index';

            return [ 'file' => $file, 'class' => $class, 'method' => $method ];

        } else {
            $method = array_pop($path);
            if ( is_file( DIR_APP.'/'.implode('/', $path).'.php' ) ) {
                $file = DIR_APP.'/'.implode('/', $path).'.php';
                $class = str_replace('_', '', implode('', $path));

                return [ 'file' => $file, 'class' => $class, 'method' => $method ];
            }
        }

        return false;
    }
}