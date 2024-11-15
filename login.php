<?php
session_start();
include "conexao.php";

$usuario = $_POST["usuario"];
$senha = $_POST["senha"];

$sql = "SELECT * FROM usuarios WHERE nome_usuario = '$usuario' AND senha_usuario = '$senha'";
$res = $conn->query($sql);

if ($res->num_rows < 1) {
    unset($_SESSION["usuario"]);
    unset($_SESSION["senha"]);
    header("Location: index.php");
    exit;
} else {
    $usuarioData = $res->fetch_assoc();

    $_SESSION["usuario"] = $usuarioData["nome_usuario"];
    $_SESSION["senha"] = $usuarioData["senha_usuario"];
    $_SESSION["tipo_usuario"] = $usuarioData["tipo_usuario"];

    if ($usuarioData["tipo_usuario"] == "aluno") {
        header("Location: aluno.php");
    } elseif ($usuarioData["tipo_usuario"] == "professor") {
        header("Location: professor.php");
    }
    exit;
}
?>
