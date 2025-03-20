<?php

require_once __DIR__ . "/INTERNAL_SERVER_ERROR.php";

function devuelveResultadoNoJson()
{
 http_response_code(INTERNAL_SERVER_ERROR);
 header("Content-Type: application/problem+json");
 echo '{' .
  '"title": "El resultado no puede presentarse como un JSON."' .
  '"type": "/error/resultadonojson.html"' .
  '}';
}

