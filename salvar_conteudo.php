<?php
include "conexao.php";

$titulo = $_POST['titulo'];
$arquivo = $_FILES['arquivo'];

if (isset($arquivo) && $arquivo['error'] == 0) {
    $nomeArquivo = basename($arquivo['name']);
    $tipoArquivo = $arquivo['type'];
    $conteudoArquivo = file_get_contents($arquivo['tmp_name']);

    $sql = "INSERT INTO conteudos (titulo_conteudo, nome_arquivo, tipo_arquivo, arquivo_conteudo) 
            VALUES (?, ?, ?, ?)";
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $titulo, $nomeArquivo, $tipoArquivo, $conteudoArquivo);
    
    if ($stmt->execute()) {
       header("location: professor.php");
    } else {
        echo "Erro ao cadastrar conteúdo: " . $conn->error;
    }
    
    $stmt->close();
} else {
    echo "Erro no envio do arquivo.";
}
?>
