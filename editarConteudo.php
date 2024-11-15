<?php
include 'conexao.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = mysqli_query($conn, "SELECT * FROM conteudos WHERE id = $id");
    if (mysqli_num_rows($sql) > 0) {
        $n = mysqli_fetch_array($sql);
        $titulo = $n['titulo_conteudo'];
        $arquivo_atual = $n['arquivo_conteudo'];
    }
}

if (isset($_POST['atualizar'])) {
    $titulo = $_POST['novoTitulo'];
    
    if (isset($_FILES['novoArquivo']) && $_FILES['novoArquivo']['error'] == 0) {
        $novo_arquivo = $_FILES['novoArquivo'];
        $arquivo_tmp = $novo_arquivo['tmp_name'];
        $nome_arquivo = $novo_arquivo['name']; 
        $arquivo_binario = file_get_contents($arquivo_tmp);

        $queryUpdate = "UPDATE conteudos SET titulo_conteudo = ?, nome_arquivo = ?, arquivo_conteudo = ? WHERE id = $id";
        
        if ($stmt = mysqli_prepare($conn, $queryUpdate)) {

            mysqli_stmt_bind_param($stmt, "sss", $titulo, $nome_arquivo, $arquivo_binario);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
            header('Location: professor.php');
            exit();
        } else {
            echo "Erro ao preparar a consulta para o banco de dados.";
        }
    } else {
        $queryUpdate = "UPDATE conteudos SET titulo_conteudo = ? WHERE id = $id";
        if ($stmt = mysqli_prepare($conn, $queryUpdate)) {
            mysqli_stmt_bind_param($stmt, "s", $titulo);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
            header('Location: listar_conteudos.php');
            exit();
        } else {
            echo "Erro ao atualizar o título.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Conteúdo</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>body { font-family: Poppins }</style>
</head>
<body>
    <form method="post" enctype="multipart/form-data" class="h-screen flex items-center justify-center flex-col gap-8">
        <div>
            <h2 class="text-3xl font-bold">Editar Conteúdo</h2>
        </div>
        <div>
            <input type="text" placeholder="Novo Título" name="novoTitulo" class="w-50 border border-1 border-black px-4 py-2 rounded" value="<?php echo isset($titulo) ? $titulo : ''; ?>">
        </div>
        <div>
            <input type="file" name="novoArquivo" class="w-50 px-4 py-2 border border-1 border-black rounded">
        </div>
        <div>
            <button type="submit" name="atualizar" class="px-4 py-2 bg-red-600 text-white font-bold rounded">Atualizar</button>
        </div>
    </form>
</body>
</html>
