<?php

require_once __DIR__ . '/../includes/bootstrap.php';
header('Content-Type: application/json; charset=utf-8');
echo json_encode(activePolos($polos), JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
