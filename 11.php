<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 11</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>
    <main class="h-screen bg-slate-300 flex gap-2 justify-center items-center">
        <form method="post" class="p-3 rounded-lg bg-slate-100 flex flex-col gap-2">
            <div class="flex flex-col gap-2">
                <input type="number" name="tabuada" placeholder="Número para tabuada" class="border p-2 rounded" required>
            </div>
            <button type="submit" class="p-2 bg-slate-300 rounded-lg hover:bg-slate-400 transition">Mostrar Tabuada</button>
            <?php
            if (isset($_POST["tabuada"])) {
                $n = intval($_POST["tabuada"]);
                echo "<div class='text-center text-blue-700 font-semibold'>";
                echo "Tabuada do $n:<br>";
                for ($i = 1; $i <= 10; $i++) {
                    $resultado = $n * $i;
                    echo "$n x $i = $resultado<br>";
                }
                echo "</div>";
            }
            ?>
        </form>
    </main>
</body>
</html>