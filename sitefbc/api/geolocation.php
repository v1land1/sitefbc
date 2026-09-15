<?php

require_once __DIR__ . '/../includes/bootstrap.php';
require_once __DIR__ . '/../includes/geo.php';
header('Content-Type: application/json; charset=utf-8');
$detected = detectCountry($polos);
echo json_encode(['success' => $detected !== null, 'country' => $detected], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
