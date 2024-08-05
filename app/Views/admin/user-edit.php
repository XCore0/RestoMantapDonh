<!DOCTYPE html>
<html>

<head>
    <title>Edit Data User</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h1 class="mb-4">Edit Data User</h1>
        <?php if (!empty(session()->getFlashdata('error'))) : ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <h4>Periksa Entrian Form</h4>
                <hr />
                <?= session()->getFlashdata('error') ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>
        <form method="post" action="<?= base_url('daftaruser/edit/' . $user->id) ?>" enctype="multipart/form-data">
            <?= csrf_field(); ?>
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?= esc($user->nama); ?>" required>
            </div>
            <div class="form-group">
                <label for="noHp">No HP:</label>
                <input type="text" class="form-control" id="noHp" name="noHp" value="<?= esc($user->noHp); ?>" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" value="<?= esc($user->email); ?>" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Kosongkan jika tidak ingin mengubah password">
            </div>
            <div class="form-group">
                <label for="kelas">Kelas:</label>
                <select class="form-control" id="kelas" name="kelas" required>
                    <option value="" disabled>Pilih Kelas</option>
                    <option value="admin" <?= $user->kelas === 'admin' ? 'selected' : ''; ?>>Admin</option>
                    <option value="user" <?= $user->kelas === 'user' ? 'selected' : ''; ?>>User</option>
                </select>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-info">Update</button>
                <a href="<?= base_url('user') ?>" class="btn btn-secondary">Batal</a>
            </div>
        </form>
    </div>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
