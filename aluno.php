<?php
session_start();

if (!isset($_SESSION["usuario"]) || $_SESSION["tipo_usuario"] != "aluno") {
    header("Location: index.php");
    exit;
}

$logado = $_SESSION["usuario"];
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela do Aluno</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>body { font-family: Poppins }</style>
</head>
<body>
    <header class="w-full bg-red-700 p-6 flex items-center justify-between px-8">
        <h1 class="text-white text-3xl font-bold">Tela do Aluno</h1>
        <a href="logout.php" class="bg-white text-red-700 px-4 py-2 font-bold rounded">Sair</a>
    </header>

    <main class="w-full p-6 flex flex-col justify-center gap-6">
        <div>
            <h2 class="text-2xl font-bold">Conteudos para download:</h2>
        </div>
        <div class="flex items-center justify-center">
           <?php include "listar_conteudos_aluno.php"; ?>
        </div>
    </main>
</body>
</html>