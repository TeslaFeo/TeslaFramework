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

$load = new Loader();

Registry::set('load', $load);
Registry::set('config', $CONFIG);

foreach ( $CONFIG['load_helper'] as $helper ) {
    $load->helper($helper);
}
foreach ( $CONFIG['load_library'] as $library ) {
    $load->library($library);
}

$route = (isset($_GET['route'])) ? (string)$_GET['route'] : $CONFIG['default_route'];

echo $load->controller($route);