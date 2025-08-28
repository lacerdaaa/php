<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 19</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body>
    <main class="h-screen bg-slate-300 flex gap-2 justify-center items-center">
        <form method="post" class="p-3 rounded-lg bg-slate-100 flex flex-col gap-2">
            <div class="text-center mb-2 font-semibold">Matriz 5x5</div>
            <?php for ($i = 1; $i <= 5; $i++): ?>
                <div class="flex gap-1">
                    <?php for ($j = 1; $j <= 5; $j++): ?>
                        <input type="number" name="m<?= $i ?>_<?= $j ?>" placeholder="[<?= $i ?>][<?= $j ?>]"
                            class="border p-2 rounded w-16" required>
                    <?php endfor; ?>
                </div>
            <?php endfor; ?>
            <button type="submit" class="p-2 bg-slate-300 rounded-lg hover:bg-slate-400 transition">Mostrar
                Diagonal</button>
            <?php
            if (isset($_POST["m1_1"])) {
                echo "<div class='text-center text-red-700 font-semibold'>";
                echo "Diagonal principal: ";
                for ($i = 1; $i <= 5; $i++) {
                    $valor = $_POST["m{$i}_{$i}"];
                    echo "$valor ";
                }
                echo "</div>";
            }
            ?>
        </form>
    </main>
</body>

</html>