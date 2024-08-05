<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pembelian</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/public/css/style.css"> <!-- Tambahkan CSS jika perlu -->
</head>

<body>
    <div class="container mt-4">
        <h1 class="mb-4">Hasil Pembelian</h1>

        <div class="order-summary mb-4">
            <h2>Ringkasan Pesanan</h2>
            <dl class="row">
                <dt class="col-sm-3">Tanggal Pembelian:</dt>
                <dd class="col-sm-9"><?= date('d M Y H:i:s', strtotime($sales->tanggal_penjualan)) ?></dd>

                <dt class="col-sm-3">Nama:</dt>
                <dd class="col-sm-9"><?= esc($sales->nama) ?></dd>

                <dt class="col-sm-3">Alamat:</dt>
                <dd class="col-sm-9"><?= esc($sales->alamat) ?></dd>

                <dt class="col-sm-3">Nomor Telepon:</dt>
                <dd class="col-sm-9"><?= esc($sales->nomor_telepon) ?></dd>

                <dt class="col-sm-3">Total Harga:</dt>
                <dd class="col-sm-9">Rp <?= number_format($sales->total_harga, 0, ',', '.') ?></dd>

                <dt class="col-sm-3">Metode Pembayaran:</dt>
                <dd class="col-sm-9"><?= esc($sales->metode_pembayaran) ?></dd>
            </dl>
        </div>

        <div class="order-details mb-4">
            <h2>Detail Pesanan</h2>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Gambar</th>
                        <th>Nama Menu</th>
                        <th>Harga</th>
                        <th>Kuantitas</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($details)) : ?>
                        <?php foreach ($details as $detail) : ?>
                            <tr>
                                <td><img src="<?= base_url('public/' . $detail->foto) ?>" alt="<?= esc($detail->nama) ?>" class="img-thumbnail" style="width: 60px; height: 60px;"></td>
                                <td><?= esc($detail->nama) ?></td>
                                <td>Rp <?= number_format($detail->harga, 0, ',', '.') ?></td>
                                <td><?= esc($detail->quantity) ?></td>
                                <td>Rp <?= number_format($detail->harga * $detail->quantity, 0, ',', '.') ?></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <tr>
                            <td colspan="5">Tidak ada detail pesanan.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>

        <!-- Tombol Kembali -->
        <a href="/" class="btn btn-primary" id="backToHome">Kembali ke Beranda</a>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        document.getElementById('backToHome').addEventListener('click', function() {
            // Mengosongkan keranjang belanja di localStorage
            localStorage.removeItem('cart');
        });
    </script>
</body>

</html>