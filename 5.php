<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 5</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body>
    <main class="h-screen bg-slate-300 flex gap-2 justify-center items-center">
        <form method="post" class="p-3 rounded-lg bg-slate-100 flex flex-col gap-2">
            <div class="flex flex-col gap-2">

                <input type="number" name="num1" placeholder="Lado 1" class="border p-2 rounded" required>
            </div>
            <div class="flex flex-col gap-2">

                <input type="number" name="num2" placeholder="Lado 2" class="border p-2 rounded" required>
            </div>
            <div class="flex flex-col gap-2">

                <input type="number" name="num3" placeholder="Lado 3" class="border p-2 rounded" required>
            </div>


            <button type="submit" class="p-2 bg-slate-300 rounded-lg hover:bg-slate-400 transition">Calcular</button>

            <?php
            if (isset($_POST["num1"]) && isset($_POST["num2"]) && isset($_POST["num3"])) {
                $a = floatval($_POST["num1"]);
                $b = floatval($_POST["num2"]);
                $c = floatval($_POST["num3"]);

                if ($a + $b > $c && $a + $c > $b && $b + $c > $a) {
                    $s = ($a + $b + $c) / 2;

                    $area = sqrt($s * ($s - $a) * ($s - $b) * ($s - $c));

                    if ($area < 10) {
                        $classificacao = "Triângulo Pequeno";
                    } elseif ($area < 50) {
                        $classificacao = "Triângulo Médio";
                    } else {
                        $classificacao = "Triângulo Grande";
                    }

                    echo "<div class='text-center text-green-700 font-semibold'>Área: " . number_format($area, 2) . " <br>Classificação: $classificacao</div>";
                } else {
                    echo "<div class='text-center text-red-600 font-semibold'>Os valores não formam um triângulo válido.</div>";
                }
            }
            ?>
        </form>
    </main>
</body>

</html>