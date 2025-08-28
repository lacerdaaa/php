<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 8</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body>
    <main class="h-screen bg-slate-300 flex gap-2 justify-center items-center">
        <form method="post" class="p-3 rounded-lg bg-slate-100 flex flex-col gap-2">
            <div class="flex flex-col gap-2">
                <input type="number" name="numero" placeholder="Digite um número" class="border p-2 rounded" required>
            </div>
            <button type="submit" class="p-2 bg-slate-300 rounded-lg hover:bg-slate-400 transition">Calcular</button>
            <?php
            if (isset($_POST["numero"])) {
                $n = intval($_POST["numero"]);
                $produto = 1;
                $numeros = [];

                for ($i = 1; $i <= $n; $i++) {
                    $numeros[] = $i;
                    $produto *= $i;
                }

                echo "<div class='text-center text-green-700 font-semibold'>";
                echo "Números: " . implode(", ", $numeros) . "<br>";
                echo "Produto: $produto";
                echo "</div>";
            }
            ?>
        </form>
    </main>
</body>

</html>