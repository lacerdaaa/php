<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 7</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body>
    <main class="h-screen bg-slate-300 flex gap-2 justify-center items-center">
        <form method="post" class="p-3 rounded-lg bg-slate-100 flex flex-col gap-2">
            <div class="flex flex-col gap-2">
                <input type="text" name="livro" placeholder="Nome do livro" class="border p-2 rounded" required>
            </div>
            <div class="flex flex-col gap-2">
                <select name="usuario" class="border p-2 rounded" required>
                    <option value="">Selecione o tipo de usuário</option>
                    <option value="professor">Professor</option>
                    <option value="aluno">Aluno</option>
                </select>
            </div>
            <button type="submit" class="p-2 bg-slate-300 rounded-lg hover:bg-slate-400 transition">Gerar
                Recibo</button>
            <?php
            if (isset($_POST["livro"]) && isset($_POST["usuario"])) {
                $livro = $_POST["livro"];
                $usuario = $_POST["usuario"];
                $dias = ($usuario == "professor") ? 10 : 3;
                $data_devolucao = date('d/m/Y', strtotime("+$dias days"));

                echo "<div class='text-center text-blue-700 font-semibold p-3 border rounded'>";
                echo "RECIBO DE EMPRÉSTIMO<br>";
                echo "Livro: $livro<br>";
                echo "Usuário: " . ucfirst($usuario) . "<br>";
                echo "Data de devolução: $data_devolucao<br>";
                echo "Prazo: $dias dias";
                echo "</div>";
            }
            ?>
        </form>
    </main>
</body>

</html>