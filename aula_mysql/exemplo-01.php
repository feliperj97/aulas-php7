<?php

//conectando com o BD
$conn = new Mysqli("localhost", "root", "", "db_teste");

if($conn->connect_error){
    echo "Error: " . $conn->connect_error;
}

$stmt = $conn->prepare("INSERT INTO tb_usuarios(desclogin, dessenha) VALUES(?, ?)");
$login = "user";
$senha = "12345";
$stmt->bind_param("ss", $login, $senha);
$stmt->execute();

$login = "felipe";
$senha = "$($($";

$stmt->execute();

?>