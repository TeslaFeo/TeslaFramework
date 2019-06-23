<?php

function redirect($url, $status = 302) {
    header('Location: ' . str_replace(array('&amp;', "\n", "\r"), array('&', '', ''), $url), true, $status);
    exit();
}