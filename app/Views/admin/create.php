<!DOCTYPE html>
<html>

<head>
    <title>Tambah Data</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .input-group-prepend {
            display: flex;
            align-items: center;
        }

        .input-group-prepend .input-group-text {
            border-right: 0;
        }

        .form-control {
            border-left: 0;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <h1 class="mb-4">Tambah Data</h1>
        <?php if (session()->getFlashdata('error')) : ?>
            <div class="alert alert-danger">
                <?= session()->getFlashdata('error') ?>
            </div>
        <?php endif; ?>
        <form method="post" action="<?= base_url('daftarmenu/tambah') ?>" enctype="multipart/form-data">
            <?= csrf_field() ?>
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?= old('nama') ?>" required>
            </div>
            <div class="form-group">
                <label for="harga">Harga:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Rp</span>
                    </div>
                    <input type="number" class="form-control" id="harga" name="harga" value="<?= old('harga') ?>" required>
                </div>
            </div>
            <div class="form-group">
                <label for="kategori">Kategori:</label>
                <select class="form-control" id="kategori" name="kategori" required>
                    <option value="">Pilih Kategori</option>
                    <?php foreach ($kategori_menu as $kategori) : ?>
                        <option value="<?= esc($kategori['kategori']); ?>" <?= ($kategori['kategori'] == old('kategori')) ? 'selected' : ''; ?>>
                            <?= esc($kategori['kategori']); ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi:</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" required><?= old('deskripsi') ?></textarea>
            </div>
            <div class="form-group">
                <label for="foto">Foto:</label>
                <input type="file" class="form-control-file" id="foto" name="foto" required>
                <small class="form-text text-muted">Format foto yang diterima: jpg, jpeg, png, webp. Maksimal ukuran 2MB.</small>
            </div>
            <button type="submit" name="uploads" class="btn btn-primary">Submit</button>
            <a href="<?= base_url('daftarmenu') ?>" class="btn btn-secondary">Batal</a>
        </form>
    </div>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        // Format harga dengan "Rp"
        document.getElementById('harga').addEventListener('input', function(e) {
            let value = e.target.value.replace(/\D/g, '');
            e.target.value = value ? 'Rp ' + value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, '.') : '';
        });
    </script>
</body>

</html>