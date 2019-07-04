<?php

require_once('config.php');
require_once(DIR_SYSTEM . '/require.php');

if ( DEBUG_MODE ) {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
} else {
    error_reporting(0);
    ini_set('display_errors', 0);
}

$load = new loader();

registry::set('load', $load);

foreach ( $LOAD_HELPER as $helper ) {
    $load->helper($helper);
}

foreach ( $LOAD_LIBRARY as $library ) {
    $load->library($library);
}

$route = (isset($_GET['route'])) ? (string)$_GET['route'] : DEFAULT_ROUTE;

echo $load->controller($route);