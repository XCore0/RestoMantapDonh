<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Restoran Mantap Donh - Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="theme-color" content="#000000" />
    <link rel="stylesheet" type="text/css" href="<?= base_url('css/index.css') ?>" />
    <link rel="stylesheet" type="text/css" href="<?= base_url('css/font.css') ?>" />
    <link rel="stylesheet" type="text/css" href="<?= base_url('css/styles.css') ?>" />
    <link rel="stylesheet" type="text/css" href="<?= base_url('css/components.css') ?>" />
    <link rel="stylesheet" type="text/css" href="<?= base_url('css/RegisterPage.css') ?>" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Irish+Grover&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Istok+Web:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
</head>

<body>
    <div class="register-page">
        <div class="columnrestoranm-3 container-xs">
            <p class="restoranmantap-2 ui text size-text4xl">Restoran Mantap Donh</p>
            <div class="column-1">
                <h1 class="formreservasi ui heading size-headingxl">Register</h1>
                <?php if (!empty(session()->getFlashdata('error'))) : ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <h4>Periksa Entrian Form</h4>
                        </hr />
                        <?php echo session()->getFlashdata('error'); ?>
                    </div>
                <?php endif; ?>
                <form method="post" action="<?= base_url(); ?>/register/process">
                    <?= csrf_field(); ?>
                    <label class="email-4 ui input gray_300 size-sm fill">
                        <input name="nama" placeholder="Nama" type="text" required />
                    </label>
                    <label class="email-4 ui input gray_300 size-sm fill">
                        <input name="noHp" placeholder="No HP" type="text" required />
                    </label>
                    <label class="email-4 ui input gray_300 size-sm fill">
                        <input name="email" placeholder="Email" type="email" required />
                    </label>
                    <label class="email-4 ui input gray_300 size-sm fill">
                        <input name="password" placeholder="Password" type="password" required />
                    </label>
                    <button type="submit" class="lihat_menu-2 ui button red_900 size-lg fill round">Register</button>
                </form>
                <div class="rowsudahpunya">
                    <p class="ui text size-textmd">Sudah Punya Akun</p>
                    <a href="<?= site_url('login') ?>">
                        <h2 class="tentangkami ui heading size-headingxs">Login</h2>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>