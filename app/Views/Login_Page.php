<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Restoran Mantap Donh - Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="theme-color" content="#000000" />
    <meta name="description" content="web site created using create-react-app" />
    <link rel="stylesheet" type="text/css" href="<?= base_url('css/index.css') ?>" />
    <link rel="stylesheet" type="text/css" href="<?= base_url('css/font.css') ?>" />
    <link rel="stylesheet" type="text/css" href="<?= base_url('css/styles.css') ?>" />
    <link rel="stylesheet" type="text/css" href="<?= base_url('css/components.css') ?>" />
    <link rel="stylesheet" type="text/css" href="<?= base_url('css/LoginPage.css') ?>" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Irish+Grover&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Istok+Web:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
</head>

<body>
    <div class="flex-col-center-center login-page">
        <div class="columnrestoranm-2 container-xs">
            <p class="restoranmantap-2 ui text size-text4xl">Restoran Mantap Donh</p>
            <div class="columnlogin">
                <h1 class="formreservasi ui heading size-headingxl">Login</h1>
                <?php if (!empty(session()->getFlashdata('error'))) : ?>
                    <?php
                    // Ambil pesan error dan pastikan itu adalah string
                    $errors = session()->getFlashdata('error');
                    $errorMessage = is_array($errors) ? implode("\n", $errors) : $errors;
                    ?>
                    <script type="text/javascript">
                        alert("Error: <?php echo addslashes($errorMessage); ?>");
                    </script>
                <?php endif; ?>
                <form method="post" action="<?= base_url('login/process'); ?>">
                    <?= csrf_field(); ?>
                    <label class="email-4 ui input gray_300 size-sm fill">
                        <input name="email" placeholder="Email" type="email" required />
                    </label>
                    <label class="email-4 ui input gray_300 size-sm fill">
                        <input name="password" placeholder="Password" type="password" required />
                    </label>
                    <button type="submit" class="lihat_menu-2 ui button red_900 size-lg fill round">Login</button>
                </form>
                <div class="rowbelompunya">
                    <p class="ui text size-textmd">Belum punya akun?</p>
                    <a href="<?= site_url('register') ?>">
                        <h3 class="tentangkami ui heading size-headingxs">Register</h3>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>