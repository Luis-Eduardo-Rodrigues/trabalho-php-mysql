<?php
include "conexao.php";

$id = $_GET['id'];

$sql = "SELECT nome_arquivo, tipo_arquivo, arquivo_conteudo FROM conteudos WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$stmt->bind_result($nomeArquivo, $tipoArquivo, $conteudoArquivo);

if ($stmt->fetch()) {
    header("Content-Type: " . $tipoArquivo);
    header("Content-Disposition: attachment; filename=" . $nomeArquivo);
    echo $conteudoArquivo;
} else {
    echo "Arquivo não encontrado.";
}

$stmt->close();
$conn->close();
?>
