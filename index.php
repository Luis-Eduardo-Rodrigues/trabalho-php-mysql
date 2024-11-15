<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - SysEducation</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>body { font-family: Poppins }</style>
</head>
<body>
    <main class="h-screen flex items-center justify-center">
        <form action="login.php" method="post" class="flex flex-col gap-8 items-center justify-center">
            <div>
                <h2 class="text-3xl font-bold">Login - SysEducation</h2>
            </div>
            <div>
                <input type="text" class="w-50 px-4 py-2 border border-1 border-black rounded" placeholder="Usuario" name="usuario">

            </div>
            <div>
                <input type="password" class="w-50 px-4 py-2 border border-1 border-black rounded" placeholder="Senha" name="senha">
            </div>
            <div>
                <button type="submit" class="bg-red-700 px-4 py-2 text-white rounded">Entrar</button>
            </div>
            <div>
                <p>Faça login com suas credenciais de <span class="font-bold text-red-700">Aluno</span> ou <span class="font-bold text-red-700">Professor</span></p>
            </div>
        </form>
    </main>
</body>
</html>