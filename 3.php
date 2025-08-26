<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Exercício 3</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body>
    <main class="min-h-screen bg-slate-300 flex gap-4 justify-center items-center p-4">
        <form method="post" class="bg-slate-100 max-w-xl p-4 flex flex-col gap-4 rounded-lg shadow">
            <div class="flex flex-col gap-1">
                <label for="name">Insira seu nome:</label>
                <input placeholder="Insira seu nome" class="rounded-lg p-2 bg-slate-100 border border-slate-700" id="name" name="name" required />
            </div>

            <div class="flex flex-col gap-1">
                <label for="age">Insira sua idade:</label>
                <input placeholder="Insira sua idade" type="number" class="rounded-lg p-2 bg-slate-100 border border-slate-700" id="age" name="age"
                    required />
            </div>

            <div class="flex flex-col gap-1">
                <label for="gender">Selecione o seu sexo:</label>
                <select id="gender" name="gender" class="rounded-lg p-2 bg-slate-100 border border-slate-700" required>
                    <option value="masc">Masculino</option>
                    <option value="fem">Feminino</option>
                </select>
            </div>

            <button class="p-2 bg-slate-300 rounded-lg hover:bg-slate-400 transition" type="submit">
                Enviar
            </button>
        </form>

        <section class="bg-slate-100 max-w-xl p-4 flex flex-col gap-2 rounded-lg shadow">
            <?php
            if (isset($_POST["name"], $_POST["age"], $_POST["gender"])) {
                $name = $_POST["name"];
                $gender = $_POST["gender"];
                $age = $_POST["age"];

                if ($gender === 'fem' && $age < 25) {
                    echo "<p><strong>$name</strong>: ACEITA</p>";
                } else {
                    echo "<p><strong>$name</strong>: NÃO ACEITO</p>";
                };
            };
            ?>
        </section>
    </main>
</body>

</html>