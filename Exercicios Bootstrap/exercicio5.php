<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercício 5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-6">

                <h3 class="mb-4">Billing address</h3>

                <form class="p-4 border rounded bg-light">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="firstName" class="form-label">First name</label>
                            <input type="text" class="form-control" id="firstName">
                        </div>

                        <div class="col-md-6">
                            <label for="lastName" class="form-label">Last name</label>
                            <input type="text" class="form-control" id="lastName">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" placeholder="Username">
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email <span class="text-muted">(Optional)</span></label>
                        <input type="email" class="form-control" id="email" placeholder="you@example.com">
                    </div>

                    <div class="mb-3">
                        <label for="address1" class="form-label">Address</label>
                        <input type="text" class="form-control" id="address1" placeholder="1234 Main St">
                    </div>

                    <div class="mb-3">
                        <label for="address2" class="form-label">Address 2 <span class="text-muted">(Optional)</span></label>
                        <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
                    </div>

                    <div class="row">
                        <div class="col-md-5 mb-3">
                            <label for="country" class="form-label">Country</label>
                            <select class="form-select" id="country">
                                <option selected>Choose...</option>
                                <option>Brasil</option>
                                <option>Estados Unidos</option>
                                <option>Portugal</option>
                            </select>
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="state" class="form-label">State</label>
                            <select class="form-select" id="state">
                                <option selected>Choose...</option>
                                <option>SP</option>
                                <option>RJ</option>
                                <option>MG</option>
                            </select>
                        </div>

                        <div class="col-md-3 mb-3">
                            <label for="zip" class="form-label">Zip</label>
                            <input type="text" class="form-control" id="zip">
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>