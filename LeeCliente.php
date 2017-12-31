<?php

    require_once 'clases/ConexionDb.php';
    $pdo = new ConexionDb();


    $valor='primera';
    $rows = array();
    if(isset($valor)) 
    {
        $stmt = $pdo->prepare("SELECT * FROM TProyeccion WHERE valor = ?");
        $stmt->execute(array($valor));
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    echo json_encode($rows);
?>