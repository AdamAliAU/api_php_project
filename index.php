<?php

require 'vendor/autoload.php';

function ServiceHandler($id) {
    $data = new stdClass();
    $data->Output = "Hello World!" . "test" . $id;

    return json_encode($data);
};

$app = new \Slim\App;

$app->get('/customers/{id:[0-9]+}', function ($request, $response, $args) {
    $data->Output = "Hello World!" . "test" . $args['id'];
    return json_encode($data);
});
$app->post('/customers/:id', 'ServiceHandler');

$app->run();
