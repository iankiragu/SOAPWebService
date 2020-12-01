<?php
require ('lib/nusoap.php');
require ('functions.php');
$server = new nusoap_server();
$server->configureWSDL("studentserver"."urn:SOAP");
$server->register("fetchstudent", array("student_id" => 'xsd:integer'), array("return" => 'xsd:string'));

$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '';

//$server->service($HTTP_RAW_POST_DATA);
 $server->service(file_get_contents("php://input"));
 ?>