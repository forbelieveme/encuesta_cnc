<?php
//Headers
header('Content-Type: application/json');

include_once "connect.php";

$database = new Database();
$db = $database->connect();
mysqli_set_charset($db, "utf8");

if (!isset($resp)) {
    $resp = new stdClass();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $query = $_POST["query"];

    switch ($query) {

        case "actualizar":
            $valor = $_POST["informacion"];
            $num = $_POST["num_pregunta"];
            //Debe tratarse como string
            $cid = $_POST["cid"]
            
            //caso1
            $sql = "UPDATE encuesta SET ".$num." = ".$valor." WHERE (cid = ".$cid.");";
            //caso2            

            // try {
            //     $stmt = $db->prepare($sql);
            //     $stmt->bind_param("ii", $puntaje, $cedula);
            //     $stmt->execute();
            //     $stmt->store_result();
            // } catch (Exception $e) {
            //     die(json_encode([
            //         'error' => mysqli_connect_error(),
            //         'code' => mysqli_connect_errno(),
            //         'excepcion' => $e->getMessage()
            //     ]));
            // }

            // $resp->mensaje = 'Ingreso exitoso';
            $resp->valor = $valor;
            $resp->tipo = gettype($valor);
            $resp->cid = $cid;
            $resp->num = $num;
            $resp->tipo2 = gettype($num);
            $resp->sqls = $sql;
            // $resp->puntaje = $puntaje;

            echo json_encode($resp, JSON_FORCE_OBJECT);
            // echo $valor;
        break;
    }
    // mysqli_close($db);
}
