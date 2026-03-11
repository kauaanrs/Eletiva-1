<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercicio 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container py-3">
        <h1>Exercicio 1</h1>
        <form method="post">
            <div class="mb-3">
                <label for="num1" class="form-label">Digite um número: </label>
                <input type="number" id="num1" name="num1" class="form-control" required="">
            </div>
            <div class="mb-3">
                <label for="num2" class="form-label">Digite um número: </label>
                <input type="number" id="num2" name="num2" class="form-control" required="">
            </div>
            <div class="mb-3">
                <label for="num3" class="form-label">Digite um número: </label>
                <input type="number" id="num3" name="num3" class="form-control" required="">
            </div>
            <div class="mb-3">
                <label for="num4" class="form-label">Digite um número: </label>
                <input type="number" id="num4" name="num4" class="form-control" required="">
            </div>
            <div class="mb-3">
                <label for="num5" class="form-label">Digite um número: </label>
                <input type="number" id="num5" name="num5" class="form-control" required="">
            </div>
            <div class="mb-3">
                <label for="num6" class="form-label">Digite um número: </label>
                <input type="number" id="num6" name="num6" class="form-control" required="">
            </div>
            <div class="mb-3">
                <label for="num7" class="form-label">Digite um número: </label>
                <input type="number" id="num7" name="num7" class="form-control" required="">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        <?php
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];
                $num3 = $_POST['num3'];
                $num4 = $_POST['num4'];
                $num5 = $_POST['num5'];
                $num6 = $_POST['num6'];
                $num7 = $_POST['num7'];

                $contador = 1;
                $maior_num = $num1; 
                $posicao = $contador;
                while ($contador <= 7){
                    if ($maior_num < $num2){
                        $maior_num = $num2;
                        $posicao = $contador;
                    }
                    $contador++;
                    if ($maior_num < $num3){
                        $maior_num = $num3;
                        $posicao = $contador;
                    }
                    $contador++;
                    if ($maior_num < $num4){
                        $maior_num = $num4;
                        $posicao = $contador;
                    }
                    $contador++;
                    if ($maior_num < $num5){
                        $maior_num = $num5;
                        $posicao = $contador;
                    }
                    $contador++;
                    if ($maior_num < $num6){
                        $maior_num = $num6;
                        $posicao = $contador;
                    }
                    $contador++;
                    if ($maior_num < $num7){
                        $maior_num = $num7;
                        $posicao = $contador;
                    }
                }
            }
        
        
        ?>





        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    </div>
</body>

</html>