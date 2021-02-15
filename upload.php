<?php
header('content-type: application/json; charset=utf-8');
echo json_encode([$_SERVER,$_REQUEST,$_POST,$_FILES]);
