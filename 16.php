<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 16</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body>
    <main class="h-screen bg-slate-300 flex gap-2 justify-center items-center">
        <form method="post" class="p-3 rounded-lg bg-slate-100 flex flex-col gap-2 max-h-96 overflow-y-auto">
            <?php for ($i = 1; $i <= 15; $i++): ?>
                <div class="flex flex-col gap-2">
                    <input type="number" name="num<?= $i ?>" placeholder="Número <?= $i ?>" class="border p-2 rounded"
                        required>
                </div>
            <?php endfor; ?>
            <button type="submit" class="p-2 bg-slate-300 rounded-lg hover:bg-slate-400 transition">Verificar</button>
            <?php
            if (isset($_POST["num1"])) {
                echo "<div class='text-center text-purple-700 font-semibold'>";
                for ($i = 1; $i <= 15; $i++) {
                    $num = intval($_POST["num$i"]);
                    $tipo = ($num % 2 == 0) ? "par" : "ímpar";
                    echo "$num é $tipo<br>";
                }
                echo "</div>";
            }
            ?>
        </form>
    </main>
</body>

</html>