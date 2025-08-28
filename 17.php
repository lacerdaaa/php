<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 17</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body>
    <main class="h-screen bg-slate-300 flex gap-2 justify-center items-center">
        <form method="post" class="p-3 rounded-lg bg-slate-100 flex flex-col gap-2 max-h-96 overflow-y-auto">
            <?php for ($i = 1; $i <= 20; $i++): ?>
                <div class="flex flex-col gap-2">
                    <input type="number" name="num<?= $i ?>" placeholder="Número <?= $i ?>" class="border p-2 rounded"
                        required>
                </div>
            <?php endfor; ?>
            <button type="submit" class="p-2 bg-slate-300 rounded-lg hover:bg-slate-400 transition">Analisar</button>
            <?php
            if (isset($_POST["num1"])) {
                $numeros = [];
                $pares = 0;
                $soma = 0;

                for ($i = 1; $i <= 20; $i++) {
                    $numeros[] = intval($_POST["num$i"]);
                    if ($numeros[$i - 1] % 2 == 0)
                        $pares++;
                    $soma += $numeros[$i - 1];
                }

                $maior = max($numeros);
                $menor = min($numeros);
                $percentual_pares = ($pares / 20) * 100;
                $media = $soma / 20;

                echo "<div class='text-center text-green-700 font-semibold'>";
                echo "Maior: $maior<br>";
                echo "Menor: $menor<br>";
                echo "Percentual de pares: $percentual_pares%<br>";
                echo "Média: " . number_format($media, 2);
                echo "</div>";
            }
            ?>
        </form>
    </main>
</body>

</html>