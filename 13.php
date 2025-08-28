<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 13</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>
    <main class="h-screen bg-slate-300 flex gap-2 justify-center items-center">
        <form method="post" class="p-3 rounded-lg bg-slate-100 flex flex-col gap-2">
            <div class="flex flex-col gap-2">
                <input type="number" name="numero" placeholder="Digite números (0 para sair)" class="border p-2 rounded">
            </div>
            <button type="submit" class="p-2 bg-slate-300 rounded-lg hover:bg-slate-400 transition">Adicionar</button>
            <?php
            session_start();
            if (!isset($_SESSION['numeros'])) $_SESSION['numeros'] = [];
            if (!isset($_SESSION['count'])) $_SESSION['count'] = 0;
            
            if (isset($_POST["numero"])) {
                $num = intval($_POST["numero"]);
                if ($num == 0) {
                    echo "<div class='text-center text-green-700 font-semibold'>";
                    echo "Total de números entre 100 e 200: " . $_SESSION['count'];
                    echo "</div>";
                    $_SESSION['numeros'] = [];
                    $_SESSION['count'] = 0;
                } else {
                    $_SESSION['numeros'][] = $num;
                    if ($num >= 100 && $num <= 200) {
                        $_SESSION['count']++;
                    }
                    echo "<div class='text-center text-blue-700 font-semibold'>";
                    echo "Número $num adicionado. Entre 100-200 até agora: " . $_SESSION['count'];
                    echo "</div>";
                }
            }
            ?>
        </form>
    </main>
</body>
</html>