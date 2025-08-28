<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 6</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>
    <main class="h-screen bg-slate-300 flex gap-2 justify-center items-center">
        <form method="post" class="p-3 rounded-lg bg-slate-100 flex flex-col gap-2">
            <div class="flex flex-col gap-2">
                <input type="number" name="mes" placeholder="Digite um número (1-12)" class="border p-2 rounded" required>
            </div>
            <button type="submit" class="p-2 bg-slate-300 rounded-lg hover:bg-slate-400 transition">Ver Mês</button>
            <?php
            if (isset($_POST["mes"])) {
                $mes = intval($_POST["mes"]);
                $meses = ["", "Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];
                
                if ($mes >= 1 && $mes <= 12) {
                    echo "<div class='text-center text-green-700 font-semibold'>Mês: " . $meses[$mes] . "</div>";
                } else {
                    echo "<div class='text-center text-red-600 font-semibold'>Não existe mês com este número</div>";
                }
            }
            ?>
        </form>
    </main>
</body>
</html>