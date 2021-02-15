<?php
header('content-type: application/json; charset=utf-8');
echo json_encode([
  $_POST,
  $_FILES,
  file_get_contents('php://input'),
]);
