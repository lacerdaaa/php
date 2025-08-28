<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 18</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body>
    <main class="h-screen bg-slate-300 flex gap-2 justify-center items-center">
        <form method="post" class="p-3 rounded-lg bg-slate-100 flex flex-col gap-2 max-h-96 overflow-y-auto">
            <div class="grid grid-cols-2 gap-2">
                <div>
                    <h3 class="font-semibold text-center mb-2">Vetor 1:</h3>
                    <?php for ($i = 1; $i <= 10; $i++): ?>
                        <input type="number" name="v1_<?= $i ?>" placeholder="V1[<?= $i ?>]"
                            class="border p-2 rounded mb-1 w-full" required>
                    <?php endfor; ?>
                </div>
                <div>
                    <h3 class="font-semibold text-center mb-2">Vetor 2:</h3>
                    <?php for ($i = 1; $i <= 10; $i++): ?>
                        <input type="number" name="v2_<?= $i ?>" placeholder="V2[<?= $i ?>]"
                            class="border p-2 rounded mb-1 w-full" required>
                    <?php endfor; ?>
                </div>
            </div>
            <button type="submit" class="p-2 bg-slate-300 rounded-lg hover:bg-slate-400 transition">Encontrar Não
                Comuns</button>
            <?php
            if (isset($_POST["v1_1"])) {
                $vetor1 = [];
                $vetor2 = [];

                for ($i = 1; $i <= 10; $i++) {
                    $vetor1[] = intval($_POST["v1_$i"]);
                    $vetor2[] = intval($_POST["v2_$i"]);
                }

                $nao_comuns = [];
                foreach ($vetor1 as $num) {
                    if (!in_array($num, $vetor2) && !in_array($num, $nao_comuns)) {
                        $nao_comuns[] = $num;
                    }
                }
                foreach ($vetor2 as $num) {
                    if (!in_array($num, $vetor1) && !in_array($num, $nao_comuns)) {
                        $nao_comuns[] = $num;
                    }
                }

                echo "<div class='text-center text-blue-700 font-semibold'>";
                echo "Números não comuns: " . implode(", ", $nao_comuns);
                echo "</div>";
            }
            ?>
        </form>
    </main>
</body>

</html>