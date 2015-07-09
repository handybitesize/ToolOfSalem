<?php
$loader = require 'vendor/autoload.php';
$loader->add('', 'app/classes');
$f3 = \Base::instance();
$f3->route(
    'GET /',
    function () {
        echo 'Hello, world!';
    }
);

$f3->route('HEAD|GET /roles', 'ToolOfSalem\Roles->view');
$f3->run();