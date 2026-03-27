<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sample Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-4">
        <h1 class="text-center fw-bold mb-4">Sample Form</h1>

        <form>
            <div class="row mb-3 align-items-center">
                <label class="col-md-2 col-form-label text-md-end fw-bold">Partner Name</label>
                <div class="col-md-4">
                    <input type="text" class="form-control">
                </div>

                <label class="col-md-2 col-form-label text-md-end fw-bold">Partner Email ID</label>
                <div class="col-md-4">
                    <input type="email" class="form-control">
                </div>
            </div>

            <div class="row mb-3 align-items-center">
                <label class="col-md-2 col-form-label text-md-end fw-bold">Partner Legal Name</label>
                <div class="col-md-4">
                    <input type="text" class="form-control">
                </div>

                <label class="col-md-2 col-form-label text-md-end fw-bold">Partner Mobile</label>
                <div class="col-md-4">
                    <input type="text" class="form-control">
                </div>
            </div>

            <div class="row mb-3 align-items-start">
                <label class="col-md-2 col-form-label text-md-end fw-bold">Partner Address</label>
                <div class="col-md-10">
                    <textarea class="form-control" rows="2"></textarea>
                </div>
            </div>

            <div class="row mb-3 align-items-center">
                <label class="col-md-2 col-form-label text-md-end fw-bold">Contract Start Date</label>
                <div class="col-md-4">
                    <input type="text" class="form-control" placeholder="Date Start">
                </div>

                <label class="col-md-2 col-form-label text-md-end fw-bold">Contract Expiry Date</label>
                <div class="col-md-4">
                    <input type="text" class="form-control" placeholder="Date End">
                </div>
            </div>

            <div class="row mb-3 align-items-center">
                <label class="col-md-2 col-form-label text-md-end fw-bold">Minimum Loan Amount</label>
                <div class="col-md-4">
                    <input type="text" class="form-control">
                </div>

                <label class="col-md-2 col-form-label text-md-end fw-bold">Maximum Loan Amount</label>
                <div class="col-md-4">
                    <input type="text" class="form-control">
                </div>
            </div>

            <div class="row mb-4 align-items-center">
                <label class="col-md-2 col-form-label text-md-end fw-bold">Interest Rate</label>
                <div class="col-md-4">
                    <input type="text" class="form-control">
                </div>

                <label class="col-md-2 col-form-label text-md-end fw-bold">Deposit Amount</label>
                <div class="col-md-4">
                    <input type="text" class="form-control">
                </div>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>