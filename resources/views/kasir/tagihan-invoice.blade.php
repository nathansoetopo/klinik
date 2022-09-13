<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <div class="container">
        <h1>Bukti Invoice</h1>
        <div class="form-group">
            <label for="input">Invoice Code</label>
            <input type="text" class="form-control" name="inv_code" id="" value="{{ $invoice->inv_code }}"
                readonly>
        </div>
        <div class="form-group">
            <label for="input">Nama Pasien</label>
            <input type="text" class="form-control" id="" value="{{ $invoice->pasien->users->name }}"
                readonly>
        </div>
        <div class="form-group">
            <label for="input">Total Payment</label>
            <input type="text" class="form-control" id=""
                value="Rp. {{ number_format($invoice->payment_total) }}" readonly>
        </div>
        <div class="form-group">
            <label for="input">Payment Status</label>
            <input type="text" class="form-control" id="" value="{{ $invoice->payment_status }}" readonly>
        </div>
        <div class="form-group">
            <label for="input">Cashback</label>
            <input type="text" class="form-control" id="" name="cashback"
                value="Rp. {{ number_format($cashback) }}" readonly>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    -->
</body>

</html>
