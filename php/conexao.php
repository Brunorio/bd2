<?php

    $banco = 'db2';
    $usuario = 'root';
    $password = '7777';

    try {
        $conn = new PDO('mysql:host=localhost;dbname='.$banco, $usuario, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        echo 'ERROR: ' . $e->getMessage();
    }

?>
