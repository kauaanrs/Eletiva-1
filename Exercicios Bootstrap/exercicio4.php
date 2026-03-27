<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercicio 4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-4">

        <h3 class="mb-4">Novo Usuário</h3>

        <form>

            <div class="mb-3">
                <label class="form-label">Nome:</label>
                <input type="text" class="form-control" placeholder="Informe o nome">
            </div>

            <div class="row mb-3">
                <div class="col-md-3">
                    <label class="form-label">CPF:</label>
                    <input type="text" class="form-control" placeholder="Informe o cpf">
                </div>

                <div class="col-md-6">
                    <label class="form-label">Endereço:</label>
                    <input type="text" class="form-control" placeholder="Informe o endereço">
                </div>

                <div class="col-md-3">
                    <label class="form-label">Nível:</label>
                    <select class="form-select">
                        <option>-</option>
                        <option>Admin</option>
                        <option>Usuário</option>
                    </select>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-md-4">
                    <label class="form-label">Email:</label>
                    <input type="email" class="form-control" placeholder="Informe o email">
                </div>

                <div class="col-md-4">
                    <label class="form-label">Senha:</label>
                    <input type="password" class="form-control" placeholder="Informe a senha">
                </div>

                <div class="col-md-4">
                    <label class="form-label">Status:</label>
                    <select class="form-select">
                        <option>-</option>
                        <option>Ativo</option>
                        <option>Inativo</option>
                    </select>
                </div>
            </div>

            <div class="d-flex justify-content-end gap-2">
                <button type="submit" class="btn btn-success">Enviar</button>
                <button type="button" class="btn btn-secondary">Cancelar</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>