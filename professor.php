<?php
session_start();

if (!isset($_SESSION["usuario"]) || $_SESSION["tipo_usuario"] != "professor") {
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
    <title>Tela do Professor</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>body { font-family: Poppins }</style>
</head>
<body>
    <header class="w-full bg-red-700 p-6 flex items-center justify-between px-8">
        <h1 class="text-white text-3xl font-bold">Tela do Professor</h1>
        <a href="logout.php" class="bg-white text-red-700 px-4 py-2 font-bold rounded">Sair</a>
    </header>

    <main class="w-full flex items-center justify-between p-8">
        <section class="m-8 w-2/6">
            <form action="salvar_conteudo.php" method="post" enctype="multipart/form-data" class="flex flex-col items-center justify-center gap-6">
                <div>
                    <h2 class="text-2xl font-bold">Novo conteúdo:</h2>
                </div>
                <div>
                    <input type="text" placeholder="Titulo" name="titulo" class="w-50 px-4 py-2 border border-1 border-black rounded">
                </div>
                <div>
                    <input type="file" placeholder="Arquivo (Video ou PDF)" accept=".pdf,.mp4,.avi,.mov" name="arquivo" class="w-50 px-4 py-2">
                </div>
                <div>
                    <button type="submit" class="bg-red-700 px-4 py-2 text-white rounded">Cadastrar</button>
                </div>
            </form>
        </section>

        <section>
            <h2 class="text-2xl font-bold">Conteudos cadastrados:</h2>
            <br>
            <div>
                <?php include "listar_conteudos_professor.php"; ?>
            </div>
        </section>
    </main>
</body>
</html>