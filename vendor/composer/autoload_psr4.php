<?php

// autoload_psr4.php @generated by Composer

$vendorDir = dirname(__DIR__);
$baseDir = dirname($vendorDir);

return array(
    'Tuupola\\Middleware\\' => array($vendorDir . '/tuupola/callable-handler/src', $vendorDir . '/tuupola/cors-middleware/src'),
    'Tuupola\\Http\\Factory\\' => array($vendorDir . '/tuupola/http-factory/src'),
    'Psr\\Log\\' => array($vendorDir . '/psr/log/src'),
    'Psr\\Http\\Server\\' => array($vendorDir . '/psr/http-server-handler/src', $vendorDir . '/psr/http-server-middleware/src'),
    'Psr\\Http\\Message\\' => array($vendorDir . '/psr/http-message/src', $vendorDir . '/psr/http-factory/src'),
    'Neomerx\\Cors\\' => array($vendorDir . '/neomerx/cors-psr7/src'),
);
