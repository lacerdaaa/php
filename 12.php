<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 12</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body>
    <main class="h-screen bg-slate-300 flex gap-2 justify-center items-center">
        <form method="post" class="p-3 rounded-lg bg-slate-100 flex flex-col gap-2">
            <div class="flex flex-col gap-2">
                <input type="text" name="palavra" placeholder="Digite uma palavra" class="border p-2 rounded" required>
            </div>
            <button type="submit" class="p-2 bg-slate-300 rounded-lg hover:bg-slate-400 transition">Criar
                Pirâmide</button>
            <?php
            if (isset($_POST["palavra"])) {
                $palavra = strtoupper($_POST["palavra"]);
                $tamanho = strlen($palavra);
                echo "<div class='text-center text-red-700 font-semibold'>";
                for ($i = 1; $i <= $tamanho; $i++) {
                    for ($j = 1; $j <= $i; $j++) {
                        echo "$palavra ";
                    }
                    echo "<br>";
                }
                echo "</div>";
            }
            ?>
        </form>
    </main>
</body>

</html>