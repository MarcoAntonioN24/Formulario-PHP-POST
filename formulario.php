<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

    <title>Formulario</title>
</head>

<body>
    <div class="container">
        <br><br>
        <h1 class="text-center mt-3">FORMULÁRIO PARA CADASTRO</h1>
        <form action="receber.php" method="post">

            <label for="texto" class="form-label">EMAIL:</label>
            <input type="text" id="email" name="email" class="form-control" required>
            <br>
            <label for="num1" class="form-label">SENHA: (Até 4 números)</label>
            <input type="number" id="num1" name="senha1" step="ANY" min="0" max="9999" class="form-control" required >
            <br>
            <label for="num2" class="form-label">CONFIRMAR SENHA:</label>
            <input type="number" id="num2" name="senha2" step="ANY" min="0" max="9999" class="form-control" required>
            <br>
            <button type="submit" class="btn btn-info mt-3">CADASTRAR</button>
        </form>
    </div>
</body>

</html