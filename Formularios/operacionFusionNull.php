<?php

// $nombre = isset($_get['nombre']) ? $_GET['nombre'] : 'Anonimo';

$nombre = $_GET['nombre'] ?? 'Anonimo';

echo $nombre;
?>