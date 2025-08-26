<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicional de Divisão</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="min-h-screen min-w-full bg-slate-300 flex justify-center items-center gap-2">
    <form method="post" class="bg-slate-100 rounded-lg p-3 flex-column">
        <div class="flex flex-col gap-1">
            <label for="num1" class="text-slate-700">Insira o número:</label>
            <input name="num1" id="num1" type="text" class="bg-slate-300 max-w-48 rounded" />
        </div>
        <button type="submit" class="mt-3 px-2 py-1 bg-slate-300 rounded-lg min-w-full">Enviar</button>
    </form>

    <div class="bg-slate-100 rounded-lg p-2">
        <?php
        if (isset($_POST['num1'])) {
            $num = $_POST['num1'];
            $divisores = [5, 10, 15];

            function isDivisible($num, $divisor)
            {
                return $num % $divisor == 0;
            }
            ;

            foreach ($divisores as $divisor) {
                if (isDivisible($num, $divisor)) {
                    echo "É divisível por $divisor<br>";
                } else {
                    echo 'Não é divisível por ' . $divisor;
                }
            }
            ;
        };
        ?>
    </div>
</body>

</html>