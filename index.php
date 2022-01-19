<?php

// require "./utils/connect.php";

$request = $_SERVER['REQUEST_URI'];

switch ($request) {
  case '/' :
    require __DIR__ . '/public/index.php';
    break;
  case '' :
    require __DIR__ . '/public/index.php';
    break;
    case '/auth' :
      require __DIR__ . '/public/auth.php';
      break;
  case '/zaya' :
      require __DIR__ . '/public/zaya.php';
      break;
  default:
    http_response_code(404);
    require __DIR__ . '/404.php';
    break;
}
