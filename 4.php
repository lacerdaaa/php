<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 4</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body>
    <main class="h-screen bg-slate-300 flex gap-2 justify-center items-center">
        <form method="post" class="p-3 rounded-lg bg-slate-100 flex flex-col gap-2">
            <div class="flex flex-col gap-2">
                <label for="num1">
                    Insira o primeiro número:
                </label>
                <input id="num1" name="num1" type="number" class="rounded-lg bg-slate-200 p-2"
                    placeholder="Insira o número 1" />
            </div>
            <div class="flex flex-col gap-2">
                <label for="num2">
                    Insira o segundo número:
                </label>
                <input id="num2" name="num2" type="number" class="rounded-lg bg-slate-200 p-2"
                    placeholder="Insira o número 2" />
            </div>
            <div class="flex flex-col gap-2">
                <label for="num3">
                    Insira o terceiro número:
                </label>
                <input id="num3" name="num3" type="number" class="rounded-lg bg-slate-200 p-2"
                    placeholder="Insira o número 3" />
            </div>

            <button class="p-2 bg-slate-300 rounded-lg hover:bg-slate-400 transition" type="submit">
                Enviar
            </button>
        </form>

        <section class="bg-slate-100 max-w-xl p-4 flex flex-col gap-2 rounded-lg shadow">
            <?php
            if (isset($_POST["num1"]) && isset($_POST["num2"]) && isset($_POST["num3"])) {
                $num1 = $_POST["num1"];
                $num2 = $_POST["num2"];
                $num3 = $_POST["num3"];

                $numeros = array($num1, $num2, $num3);

                sort($numeros, SORT_DESC);

                echo "Números em ordem ascendente: ";
                foreach ($numeros as $num) {
                    echo $num . " ";
                }
            }
            ?>
        </section>

    </main>
</body>

</html>

<!-- Entrar com 3 números e imprimi-los em ordem decrescente (suponha números diferentes -->