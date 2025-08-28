<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 9</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>
    <main class="h-screen bg-slate-300 flex gap-2 justify-center items-center">
        <form method="post" class="p-3 rounded-lg bg-slate-100 flex flex-col gap-2">
            <div class="flex flex-col gap-2">
                <input type="number" name="vezes" placeholder="Quantas vezes imprimir SOL?" class="border p-2 rounded" required>
            </div>
            <button type="submit" class="p-2 bg-slate-300 rounded-lg hover:bg-slate-400 transition">Imprimir</button>
            <?php
            if (isset($_POST["vezes"])) {
                $vezes = intval($_POST["vezes"]);
                echo "<div class='text-center text-orange-700 font-semibold'>";
                for ($i = 1; $i <= $vezes; $i++) {
                    echo "SOL ";
                }
                echo "</div>";
            }
            ?>
        </form>
    </main>
</body>
</html>