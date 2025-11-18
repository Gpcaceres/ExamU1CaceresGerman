<?php
require __DIR__ . '/vendor/autoload.php';

if (class_exists('MongoDB\Client')) {
    echo "✔️ MongoDB\\Client SÍ existe. La librería está cargada correctamente.";
} else {
    echo "❌ MongoDB\\Client NO existe. Falta instalar la librería o cargar el autoload.";
}
