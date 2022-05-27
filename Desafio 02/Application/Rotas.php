<?php

$key1=$_POST['key1'];

$data = array('key1' => $key1);
$options = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data)
    )
);
$context  = stream_context_create($options);
$response = file_get_contents(BeneficiarioControllers::savebeneficiario($key1), false, $context);

?>