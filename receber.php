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

<body style="background-color: lightgrey;">
    <div class="container">
        <br><br>
        <h1>Recebimento de dados</h1>
        <br><br>
        <?php
        //CAPTURA DOS VALORES SEM FILTRO DO TIPO DE DADO

        //$txt = $_POST["texto"]; 
        //$num1 = $_POST["numero1"];
        //$num2 = $_POST["numero2"];

        //CAPTURA DOS VALORES COM FILTRO DO TIPO DE DADO

        $ema = filter_input(INPUT_POST,"email", FILTER_SANITIZE_STRING);
        $sen1 = filter_input(INPUT_POST,"senha1",FILTER_SANITIZE_NUMBER_INT);
        $sen2 = filter_input(INPUT_POST,"senha2",FILTER_SANITIZE_NUMBER_INT);
       
            
        echo "EMAIL DO USUÁRIO: $ema <br>";
        echo "SENHA DO USUÁRIO: $sen1 <br>";
        ?>
        <br>
        <div class="alert alert-success">
            <?php
            print("CADASTRO REALIZADO COM SUCESSO");
            ?>
        </div>
    </div>
</body>

</html