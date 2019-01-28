<?php

$router->group(
    array(
        'prefix' => '{replace}',
        'middleware' => array('locale','jwt.auth'),
        'namespace' => 'V1\{replace}',
    ),
    function () use ($router) {
        $router->get('/', array('uses' => '{replace}Controller@index'));
        $router->post('/', array('uses' => '{replace}Controller@store'));
        $router->get('{id}', array('uses' => '{replace}Controller@show'));
        $router->put('{id}', array('uses' => '{replace}Controller@update'));
        $router->delete('{id}', array('uses' => '{replace}Controller@destroy'));
    }
);
