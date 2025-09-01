<?php

header("Content-Type: application/json");

$input = json_decode(file_get_contents("php://input"), true);


if (isset($input["usuario"]) && isset($input["password"])) {
    $usuario = $input["usuario"];
    $password = $input["password"];

    if ($usuario !== "" && $password !== "") {
        echo json_encode([
            "status" => "ok",
            "mensaje" => "usuario recibido OK"
        ]);
    } else {
        echo json_encode([
            "status" => "error",
            "mensaje" => "datos incompletos"
        ]);
    }
} else {
    echo json_encode([
        "status" => "error",
        "mensaje" => "no se enviaron los parámetros requeridos"
    ]);
}
?>