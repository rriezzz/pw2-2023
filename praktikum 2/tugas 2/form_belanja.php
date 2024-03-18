
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['customer']) && isset($_POST['produk']) && isset($_POST['jumlah'])) {
        $customer = $_POST['customer'];
        $produk = $_POST['produk'];
        $jumlah = $_POST['jumlah'];

        $harga = 0;
        switch ($produk) {
            case "TV":
                $harga = 4200000;
                break;
            case "Kulkas":
                $harga = 3100000;
                break;
            case "Mesin Cuci":
                $harga = 3800000;
                break;
            default:
                $harga = 0;
        }
        $total = $harga * $jumlah;
    } else {
        $total = 0;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <title>Form Belanja</title>
</head>
<body>
    <h1>Belanja Online</h1>
    <br>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal">Tambah</button>
    <button type="button" class="btn btn-info position-absolute end-0" data-bs-toggle="modal" data-bs-target="#modalDaftar">Daftar Harga</button>
    <br>
    <?php if (isset($customer) && isset($produk) && isset($jumlah)) : ?>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>No.</th>
                <th>Customer</th>
                <th>Produk Pilihan</th>
                <th>Jumlah Beli</th>
                <th>Total Belanja</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $customer; ?></td>
                <td><?= $produk; ?></td>
                <td><?= $jumlah; ?></td>
                <td><?= isset($total) ? number_format($total) : ''; ?></td>
            </tr>
        </tbody>
    </table>
    <?php endif; ?>

    <!-- Modal -->
    <div class="modal fade" id="modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data Belanja</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" method="post">
                        <div class="mb-3">
                            <label for="">Customer :</label>
                            <input type="text" class="form-control" name="customer" required>
                        </div>

                        <div>
                            <label for="">Pilih Barang :</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="produk" id="tv" value="TV" required>
                            <label class="form-check-label" for="inlineRadio1">TV</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="produk" id="kulkas" value="Kulkas" required>
                            <label class="form-check-label" for="inlineRadio2">Kulkas</label>
                        </div>

                        <div class="form-check form-check-inline mb-3">
                            <input class="form-check-input" type="radio" name="produk" id="mesin_cuci" value="Mesin Cuci" required>
                            <label class="form-check-label" for="inlineRadio3">Mesin Cuci</label>
                        </div>

                        <div class="mb-3">
                            <label for="">Jumlah :</label>
                            <input type="number" class="form-control" name="jumlah" required>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">Kirim</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Daftar -->
    <div class="modal fade" id="modalDaftar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Daftar Harga</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <table class="table table-primary table-striped-columns">
                    <tr>
                        <th>Barang</th>
                        <th>Harga</th>
                    </tr>

                    <tr>
                        <td>TV</td>
                        <td>4.200.000</td>
                    </tr>

                    <tr>
                        <td>Kulkas</td>
                        <td>3.100.000</td>
                    </tr>

                    <tr>
                        <td>Mesin Cuci</td>
                        <td>3.800.000</td>
                    </tr>
                </table>
            </div>
            </div>
        </div>
    </div>
</body>
</html>
