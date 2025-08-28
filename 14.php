<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 14</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body>
    <main class="h-screen bg-slate-300 flex gap-2 justify-center items-center">
        <form method="post" class="p-3 rounded-lg bg-slate-100 flex flex-col gap-2">
            <div class="text-center text-gray-700 mb-2">
                Chico tem 1,50m e cresce 2cm/ano<br>
                Juca tem 1,10m e cresce 3cm/ano
            </div>
            <button type="submit" class="p-2 bg-slate-300 rounded-lg hover:bg-slate-400 transition">Calcular
                Anos</button>
            <?php
            if (isset($_POST) && !empty($_POST)) {
                $altura_chico = 1.50;
                $altura_juca = 1.10;
                $anos = 0;

                while ($altura_juca <= $altura_chico) {
                    $altura_chico += 0.02;
                    $altura_juca += 0.03;
                    $anos++;
                }

                echo "<div class='text-center text-green-700 font-semibold'>";
                echo "Juca será maior que Chico em $anos anos<br>";
                echo "Altura final Chico: " . number_format($altura_chico, 2) . "m<br>";
                echo "Altura final Juca: " . number_format($altura_juca, 2) . "m";
                echo "</div>";
            }
            ?>
        </form>
    </main>
</body>

</html>