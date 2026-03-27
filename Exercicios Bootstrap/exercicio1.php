<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulário Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">

        <form class="row g-3">


            <div class="col-md-4">
                <label class="form-label">First name</label>
                <input type="text" class="form-control" placeholder="Mark">
            </div>


            <div class="col-md-4">
                <label class="form-label">Last name</label>
                <input type="text" class="form-control" placeholder="Otto">
            </div>


            <div class="col-md-4">
                <label class="form-label">Username</label>
                <div class="input-group">
                    <span class="input-group-text">@</span>
                    <input type="text" class="form-control" placeholder="Username">
                </div>
            </div>


            <div class="col-md-6">
                <label class="form-label">City</label>
                <input type="text" class="form-control" placeholder="City">
            </div>


            <div class="col-md-3">
                <label class="form-label">State</label>
                <input type="text" class="form-control" placeholder="State">
            </div>

            <div class="col-md-3">
                <label class="form-label">Zip</label>
                <input type="text" class="form-control" placeholder="Zip">
            </div>

            <div class="col-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox">
                    <label class="form-check-label">
                        Agree to terms and conditions
                    </label>
                </div>
            </div>

            <div class="col-12">
                <button class="btn btn-primary" type="submit">Submit form</button>
            </div>

        </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>