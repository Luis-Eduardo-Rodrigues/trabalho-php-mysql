<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial - SysFitness</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>body{ font-family: Poppins }</style>
</head>
<body>
    <header class="w-full bg-violet-600 py-10 px-12 flex items-center justify-between">
        <div>
            <h2 class="text-white text-3xl font-bold">SysFitness</h2>
        </div>
        <div>
            <nav class="text-white flex gap-8 mr-12 text-lg items-center">
                <a href="treino.php">Novo Treino</a>
                <a href="diet.php">Nova dieta</a>
                <a href="logout.php" class="bg-white px-4 py-2 rounded font-bold text-violet-600">Sair</a>
            </nav>
        </div>
    </header>
    <main class="h-full">
        <div class="w-80 h-auto m-4 p-8 bg-zinc-200 rounded">
            <h2 class="text-2xl">Minha dieta:</h2>
            <br>
            <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum aliquid dignissimos reiciendis esse repellat numquam voluptatem non provident est! Voluptates earum assumenda odit veritatis consectetur natus, qui eligendi voluptatum iusto!
            </p>    
        </div>
    </main>
</body>
</html>