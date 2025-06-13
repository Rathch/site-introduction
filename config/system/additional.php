<?php

$file = '';
if (getenv('IS_DDEV_PROJECT') == 'true') {
    $file = realpath(__DIR__) . '/additional_ddev.php';
}
if (getenv('IS_LIVE_PROJECT') == 'true') {
    $file = realpath(__DIR__) . '/additional_live.php';
}
if (is_file($file)) {
    include_once($file);
}
