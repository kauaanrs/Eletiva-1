<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card shadow p-4" style="width: 100%; max-width: 400px;">
            <h3 class="text-center mb-4">Sistema de Controle de Estoque</h3>

            <form method="post">
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input name="email" type="email" class="form-control" id="email" placeholder="Digite seu email" required>
                </div>

                <div class="mb-3">
                    <label for="senha" class="form-label">Senha</label>
                    <input name="senha" type="password" class="form-control" id="senha" placeholder="Digite sua senha" required>
                </div>

                <button type="submit" class="btn btn-primary w-100">Entrar</button>
            </form>
            <?php
                session_start();
                if($_SERVER['REQUEST_METHOD'] == 'POST'){
                    $email = $_POST['email'];
                    $senha = $_POST['senha'];

                    if($email == "adm@adm" && $senha == '123'){
                        $_SESSION['nome'] = 'Administrador';
                        $_SESSION['acesso'] = true; 
                        header('Location: principal.php');
                    }
                    else{
                        $_SESSION['acesso'] = false;
                        echo "<p class='text-danger'>Email e/ou senha incorretos!</p>"; 
                    }
                }
            
            
            
            ?>




            <div class="text-center mt-3">
                Não tem conta ? <a href="cadastro.html">Criar conta</a>
            </div>
        </div>
    </div>

</body>

</html>