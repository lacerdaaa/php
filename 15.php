<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 15</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body>
    <main class="h-screen bg-slate-300 flex gap-2 justify-center items-center">
        <form method="post" class="p-3 rounded-lg bg-slate-100 flex flex-col gap-2">
            <div class="flex flex-col gap-2">
                <input type="number" step="0.01" name="massa_inicial" placeholder="Massa inicial"
                    class="border p-2 rounded" required>
            </div>
            <div class="text-center text-gray-700 text-sm">
                Material perde 25% da massa a cada 30 segundos
            </div>
            <button type="submit" class="p-2 bg-slate-300 rounded-lg hover:bg-slate-400 transition">Calcular
                Tempo</button>
            <?php
            if (isset($_POST["massa_inicial"])) {
                $massa = floatval($_POST["massa_inicial"]);
                $tempo = 0;

                while ($massa >= 0.10) {
                    $massa *= 0.75;
                    $tempo += 30;
                }

                echo "<div class='text-center text-orange-700 font-semibold'>";
                echo "Tempo necessário: $tempo segundos<br>";
                echo "Massa final: " . number_format($massa, 4);
                echo "</div>";
            }
            ?>
        </form>
    </main>
</body>

</html>