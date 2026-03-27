<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercicio 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-4">
        <form class="row g-3">

            <div class="col-md-1">
                <label class="form-label fw-bold">Código</label>
                <input type="text" class="form-control" value="01">
            </div>

            <div class="col-md-5">
                <label class="form-label fw-bold">Nome</label>
                <input type="text" class="form-control" placeholder="Nome Completo do Cliente">
            </div>

            <div class="col-md-4">
                <label class="form-label fw-bold">E-mail</label>
                <input type="email" class="form-control" placeholder="cliente@dominio.com">
            </div>

            <div class="col-md-2">
                <label class="form-label fw-bold">CPF</label>
                <input type="text" class="form-control" placeholder="Só números">
            </div>

            <div class="col-md-2">
                <label class="form-label fw-bold">Nº Celular</label>
                <input type="text" class="form-control" placeholder="N° do celular">
            </div>

            <div class="col-md-2">
                <label class="form-label fw-bold">Nº Telefone fixo</label>
                <input type="text" class="form-control" placeholder="N° telefone">
            </div>

            <div class="col-md-2">
                <label class="form-label fw-bold">CEP</label>
                <input type="text" class="form-control" placeholder="ex:19400-000">
            </div>

            <div class="col-md-2">
                <label class="form-label fw-bold">Logradouro</label>
                <input type="text" class="form-control" placeholder="ex:Rua 1400">
            </div>

            <div class="col-md-1">
                <label class="form-label fw-bold">Nº</label>
                <input type="text" class="form-control" placeholder="Nº">
            </div>

            <div class="col-md-3">
                <label class="form-label fw-bold">Bairro</label>
                <input type="text" class="form-control" placeholder="Bairro">
            </div>

            <div class="col-md-3">
                <label class="form-label fw-bold">Cidade</label>
                <input type="text" class="form-control" placeholder="Cidade">
            </div>

            <div class="col-md-1">
                <label class="form-label fw-bold">UF</label>
                <input type="text" class="form-control" placeholder="UF">
            </div>

            <div class="col-md-2">
                <label class="form-label fw-bold">Status</label>
                <select class="form-select">
                    <option selected>Selecione</option>
                    <option>Ativo</option>
                    <option>Inativo</option>
                </select>
            </div>

            <div class="col-12 d-flex justify-content-end gap-2 mt-3">
                <button type="reset" class="btn btn-danger">Resetar</button>
                <button type="submit" class="btn btn-success">Próximo</button>
            </div>

        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>