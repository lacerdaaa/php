<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 10</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>
    <main class="h-screen bg-slate-300 flex gap-2 justify-center items-center">
        <form method="post" class="p-3 rounded-lg bg-slate-100 flex flex-col gap-2 max-h-96 overflow-y-auto">
            <?php for ($i = 1; $i <= 20; $i++): ?>
            <div class="flex flex-col gap-2">
                <input type="number" name="num<?= $i ?>" placeholder="Número <?= $i ?>" class="border p-2 rounded" required>
            </div>
            <?php endfor; ?>
            <button type="submit" class="p-2 bg-slate-300 rounded-lg hover:bg-slate-400 transition">Calcular</button>
            <?php
            if (isset($_POST["num1"])) {
                $soma_positivos = 0;
                $count_negativos = 0;
                
                for ($i = 1; $i <= 20; $i++) {
                    $num = floatval($_POST["num$i"]);
                    if ($num > 0) {
                        $soma_positivos += $num;
                    } elseif ($num < 0) {
                        $count_negativos++;
                    }
                }
                
                echo "<div class='text-center text-purple-700 font-semibold'>";
                echo "Soma dos positivos: $soma_positivos<br>";
                echo "Total de negativos: $count_negativos";
                echo "</div>";
            }
            ?>
        </form>
    </main>
</body>
</html>