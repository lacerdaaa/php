<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma de Dois Números</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

</head>

<body class="min-h-screen min-w-full bg-slate-300 flex justify-center items-center gap-2">
    <form method="post" class="bg-slate-100 rounded-lg p-3 flex-column">
        <div class="flex flex-col gap-1">
            <label for="num1" class="text-slate-700">Insira o primeiro número:</label>
            <input name="num1" id="num1" type="text" class="bg-slate-300 max-w-48 rounded" />
        </div>
        <div class="flex flex-col gap-1">
            <label for="num2" class="text-slate-700">Insira o segundo número:</label>
            <input name="num2" id="num2" type="text" class="bg-slate-300 max-w-48 rounded" />
        </div>
        <button type="submit" class="mt-3 px-2 py-1 bg-slate-300 rounded-lg min-w-full">Enviar</button>
    </form>

    <div class="bg-slate-100 rounded-lg p-2">
        <?php
        if (isset($_POST['num1']) && isset($_POST['num2'])) {
            $num1 = (int) $_POST['num1'];
            $num2 = (int) $_POST['num2'];

            $soma = $num1 + $num2;

            if ($soma > 20) {
                $soma;
            } else {
                $soma -= 5;
            }

            echo "Resultado: $soma";
        }
        ?>
    </div>
</body>

</html>