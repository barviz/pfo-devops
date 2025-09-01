<?php

header("Content-Type: application/json");

$input = json_decode(file_get_contents("php://input"), true);


if (isset($input["user"]) && isset($input["password"])) {
    $user = $input["user"];
    $password = $input["password"];

    if ($user !== "" && $password !== "") {
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