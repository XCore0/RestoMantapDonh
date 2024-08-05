<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Penjualan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('public/css/style.css') ?>"> <!-- Tambahkan CSS jika perlu -->
</head>

<body>
    <div class="container mt-4">
        <h1 class="mb-4">Detail Penjualan</h1>

        <div class="mb-4">
            <h2>Ringkasan Penjualan</h2>
            <p><strong>Tanggal Pembelian:</strong> <?= date('d M Y H:i:s', strtotime($sale->tanggal_penjualan)); ?></p>
            <p><strong>Nama:</strong> <?= esc($sale->nama); ?></p>
            <p><strong>Alamat:</strong> <?= esc($sale->alamat); ?></p>
            <p><strong>Nomor Telepon:</strong> <?= esc($sale->nomor_telepon); ?></p>
            <p><strong>Total Harga:</strong> Rp <?= number_format($sale->total_harga, 0, ',', '.'); ?></p>
            <p><strong>Metode Pembayaran:</strong> <?= esc($sale->metode_pembayaran); ?></p>
        </div>

        <div class="mb-4">
            <h2>Detail Pesanan</h2>
            <table class="table table-striped table-bordered">
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
                                <td><img src="<?= base_url('public/' . esc($detail->foto)); ?>" alt="<?= esc($detail->nama); ?>" width="100"></td>
                                <td><?= esc($detail->nama); ?></td>
                                <td>Rp <?= number_format($detail->harga, 0, ',', '.'); ?></td>
                                <td><?= esc($detail->quantity); ?></td>
                                <td>Rp <?= number_format($detail->harga * $detail->quantity, 0, ',', '.'); ?></td>
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

        <a href="<?= base_url('sales'); ?>" class="btn btn-primary">Kembali ke Daftar Penjualan</a>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>

</html>