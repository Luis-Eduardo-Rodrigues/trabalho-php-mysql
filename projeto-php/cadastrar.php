<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>body{ font-family: Poppins }</style>
</head>
<body>
    <main class="h-screen w-full flex items-center justify-center">
        <form action="salvar.php" method="post" class="flex items-center justify-center flex-col gap-8">
            <div>
                <h2 class="text-3xl">Criar conta - SysFitness</h2>
            </div>
            <div>
            <input class="w-72 py-2 px-4 border border-1 border-black rounded" type="text" placeholder="Usuário">
            </div>
            <div>
                <input class="w-72 py-2 px-4 border border-1 border-black rounded" type="email" placeholder="E-mail">
            </div>
            <div>
                <input class="w-72 py-2 px-4 border border-1 border-black rounded" type="password" placeholder="Senha">
            </div>
            <div>
                <input class="w-72 py-2 px-4 border border-1 border-black rounded" type="password" placeholder="Confirmar senha">
            </div>
            <div>
                <button type="submit" class="py-2 px-4 bg-violet-600 text-white rounded">Cadastrar</button>
            </div>
            <div>
                <p>Já tem uma conta? <a href="login.php" class="font-bold text-violet-600">Entrar</a></p>
            </div>
        </form>
    </main>
</body>
</html>