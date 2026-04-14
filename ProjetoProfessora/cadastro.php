<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cadastro</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container d-flex justify-content-center align-items-center vh-100">
  <div class="card shadow p-4" style="width: 100%; max-width: 400px;">
    <h3 class="text-center mb-4">Cadastro</h3>

    <form>
      <div class="mb-3">
        <label class="form-label">Nome</label>
        <input type="text" class="form-control" placeholder="Digite seu nome" required>
      </div>

      <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" class="form-control" placeholder="Digite seu email" required>
      </div>

      <div class="mb-3">
        <label class="form-label">Senha</label>
        <input type="password" class="form-control" placeholder="Digite sua senha" required>
      </div>

      <button type="submit" class="btn btn-success w-100">Cadastrar</button>
    </form>

    <p class="text-center mt-3">
      Já tem conta? <a href="login.html">Faça login</a>
    </p>
  </div>
</div>

</body>
</html>