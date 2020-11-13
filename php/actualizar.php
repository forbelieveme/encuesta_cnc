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
            $informacion = $_POST["informacion"];
            $num = $_POST["num_pregunta"];
            //Debe tratarse como string
            $cid = $_POST["cid"];

            //caso1
            $sql = "UPDATE encuesta SET " . $num . " = ? WHERE (cid = ?);";
            //caso2            

            try {
                $stmt = $db->prepare($sql);
                if (gettype($num) == 'string') {
                    $stmt->bind_param("ss", $informacion, $cid);
                     printf( str_replace('?', '%s', $sql), $informacion, $cid);
                } else {
                    $stmt->bind_param("is", $informacion, $cid);
                     printf( str_replace('?', '%s', $sql), $informacion, $cid);
                }
                $stmt->execute();
                $stmt->store_result();
            } catch (Exception $e) {
                die(json_encode([
                    'error' => mysqli_connect_error(),
                    'code' => mysqli_connect_errno(),
                    'excepcion' => $e->getMessage()
                ]));
            }

            // $resp->mensaje = 'Ingreso exitoso';
            
            
            $resp->num = $num;
            $resp->informacion= $informacion;

            
            
            $resp->sqls = $sql;
            // $resp->puntaje = $puntaje;

            echo json_encode($resp, JSON_FORCE_OBJECT);
            // echo $valor;
        break;

        case "insertar":
            //Debe tratarse como string
            $f1 = $_POST["f1"];
            $f3 = $_POST["f3"];
            $cid = $_POST["cid"];
            $sql = "INSERT INTO encuesta (f1, f3, cid) VALUES (?,?,?)";

            try {
                $stmt = $db->prepare($sql);
                $stmt->bind_param("iis", $f1, $f3, $cid);
                $stmt->execute();
                $stmt->store_result();
                                
            } catch (Exception $e) {
                die(json_encode([
                    'error' => mysqli_connect_error(),
                    'code' => mysqli_connect_errno(),
                    'excepcion' => $e->getMessage()
                ]));
            }

            // $resp->mensaje = 'Ingreso exitoso';            
            $resp->cid = $cid;  
            $resp->f1 = $f1;    
            $resp->f3 = $f3;   
            $resp->mensaje = "insercion exitosa" ;            
            // $resp->puntaje = $puntaje;

            echo json_encode($resp, JSON_FORCE_OBJECT);
            
        break;
    }
    // mysqli_close($db);
}
