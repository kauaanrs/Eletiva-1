<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Exemplo Estruturas de Controle e Repetição</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body> 
<div class="container py-3">
<h1>Exemplo Estruturas de Controle e Repetição</h1>
<form method="post">
<div class="mb-3">
              <label for="valor" class="form-label">Informe um valor: </label>
              <input type="text" id="valor" name="valor" class="form-control" required="">
            </div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>
<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $valor = $_POST['valor'];
        /*if($valor == '+')
            echo "<p>Soma</p>";
        elseif($valor == '-')
            echo "<p>Subtração</p>";
        elseif($valor == '*')
            echo "<p>Multiplicação</p>";
        elseif($valor == '/')
            echo "<p>Divisão</p>";
        else
            echo "<p>Símbolo inválido.</p>";
    }*/
        switch($valor){
            case "+":
                echo "<p>Sinal de soma!</p>";
                break;
            case "-":
                echo "<p>Sinal de subtração</p>";
                break;
            case "*":
                echo "<p>Sinal de multiplicação</p>";
                break;
            case "/":
                echo "<p>Sinal de divisão</p>";
                break;
            default: 
                echo "<p>Sinal inválido</p>";
                break;
        }

        for($i=1; $i<=10; $i++){
            $resultado = $valor * $i;
            echo "<p>$valor * $i = $resultado</p>";
        }


    }

?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</div>
</body>
</html>