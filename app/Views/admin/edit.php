<!DOCTYPE html>
<html>

<head>
    <title>Edit Data</title>
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
        <h1 class="mb-4">Edit Data</h1>
        <?php if (!empty(session()->getFlashdata('error'))) : ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <h4>Periksa Entrian Form</h4>
                <hr />
                <?php echo session()->getFlashdata('error'); ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>
        <form method="post" action="<?= base_url('daftarmenu/edit/' . $daftarmenu->id_menu) ?>" enctype="multipart/form-data">
            <?= csrf_field(); ?>
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?= esc($daftarmenu->nama); ?>" required>
            </div>
            <div class="form-group">
                <label for="harga">Harga:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Rp</span>
                    </div>
                    <input type="number" class="form-control" id="harga" name="harga" value="<?= esc($daftarmenu->harga); ?>" required>
                </div>
            </div>
            <div class="form-group">
                <label for="kategori">Kategori:</label>
                <select class="form-control" id="kategori" name="kategori" required>
                    <?php foreach ($kategori_menu as $kategori) : ?>
                        <option value="<?= esc($kategori['kategori']); ?>" <?= ($kategori['kategori'] == $daftarmenu->kategori) ? 'selected' : ''; ?>>
                            <?= esc($kategori['kategori']); ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi:</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" required><?= esc($daftarmenu->deskripsi); ?></textarea>
            </div>
            <div class="form-group">
                <label for="foto">Foto:</label>
                <?php if (!empty($daftarmenu->foto)) : ?>
                    <div class="mb-3">
                        <img src="<?= base_url('public/' . esc($daftarmenu->foto)); ?>" alt="Foto" class="img-thumbnail" style="max-width: 200px;">
                    </div>
                <?php endif; ?>
                <input type="file" class="form-control-file" id="foto" name="foto">
                <small class="form-text text-muted">Kosongkan jika tidak ingin mengubah foto. Format foto yang diterima: jpg, jpeg, png, webp. Maksimal ukuran 2MB.</small>
            </div>
            <div class="form-group">
                <input type="submit" value="Update" class="btn btn-info" />
                <a href="<?= base_url('daftarmenu') ?>" class="btn btn-secondary">Batal</a>
            </div>
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