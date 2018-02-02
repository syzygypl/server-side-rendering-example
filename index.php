<?php

    $request = $_SERVER['SCRIPT_NAME'];
    error_log($request);

    list ($module, $param) = array_pad(explode("/", trim($request, '/')), 2, null);

    switch ($module) {
        case 'content':
            echo [
                'main' => 'This is a PHP content',
            ][$param];
            break;
        case 'inception':
            $source = $_GET['source'];
            echo 'This is a content served by PHP using a Javascript API: ' . file_get_contents('http://javascript' . $source);
            break;
        default:
            throw new Exception('No such module: ' . $module);
    }
