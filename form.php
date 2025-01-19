<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link
        rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" />
    <link
        rel="stylesheet"
        href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>

<body>
    <div class="container mt-5">
        <div class="card shadow">
            <h2 class="text-center">Form Pemesanan</h2>
            <form id="form-pemesanan" action="/index.html" class="my-4 p-5">
                <div class="form-group row">
                    <label for="nama" class="col-4 col-form-label">Nama</label>
                    <div class="col-8">
                        <input
                            id="nama"
                            name="nama"
                            type="text"
                            required="required"
                            class="form-control" />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-4 col-form-label">Email</label>
                    <div class="col-8">
                        <input
                            id="email"
                            name="email"
                            type="text"
                            class="form-control"
                            required="required" />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="select" class="col-4 col-form-label">Select</label>
                    <div class="col-8">
                        <select id="select" name="select" class="custom-select">
                            <option value="">Pilih paket</option>
                            <option value="paket1">Paket 1</option>
                            <option value="paket2">Paket 2</option>
                            <option value="paket3">Paket 3</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="offset-4 col-8">
                        <button name="submit" type="submit" class="btn btn-primary">
                            Submit
                        </button>
                    </div>
                </div>
        </div>
        </form>
    </div>

    <script>
        const formPemesanan = document.getElementById('form-pemesanan').onsubmit(function(e) {
            alert('wooy')
            window.location.href = '/index.html'
        })
    </script>
</body>

</html>