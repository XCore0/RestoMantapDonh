<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Restoran Mantap Donh - Menu Detail</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="theme-color" content="#000000" />
    <meta name="description" content="web site created using create-react-app" />
    <link rel="stylesheet" type="text/css" href="<?= base_url('css/index.css'); ?>" />
    <link rel="stylesheet" type="text/css" href="<?= base_url('css/font.css'); ?>" />
    <link rel="stylesheet" type="text/css" href="<?= base_url('css/styles.css'); ?>" />
    <link rel="stylesheet" type="text/css" href="<?= base_url('css/components.css'); ?>" />
    <link rel="stylesheet" type="text/css" href="<?= base_url('css/MenuDetailPage.css'); ?>" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Irish+Grover&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Istok+Web:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
</head>

<body>
    <div class="landing-page">
        <div>
            <div class="rowrestoranmant-2">
                <div class="columnrestoranm-7">
                    <header class="headerrestoranm-3">
                        <p class="restoranmantap ui text size-text2xl">Restoran Mantap Donh</p>
                        <div class="row-2">
                            <ul class="rowhome">
                                <li>
                                    <a href="<?= site_url('home') ?>">
                                        <p class="ui text size-textmd">Home</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= site_url('menu') ?>">
                                        <p class="ui text size-textmd">Menu</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= site_url('cart') ?>">
                                        <p class="ui text size-textmd">Cart</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= site_url('aboutus') ?>">
                                        <p class="ui text size-textmd">About Us</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= site_url('contactus') ?>">
                                        <p class="ui text size-textmd">Contact Us</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= base_url(); ?>/logout">
                                        <button class="login ui button blue_gray_900 size-lg fill round">LogOut</button>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </header>
                    <div class="column_seven container-xs">
                        <p class="ui text size-text4xl">Menu Detail</p>
                    </div>
                </div>
            </div>
            <div class="stacknasiayamba">
                <div class="row_one-2">
                    <div class="rowdescription container-xs">
                        <img src="<?= base_url('public/' . $menu->foto); ?>" alt="Image" class="image-18" />
                        <div class="columndescripti-8">
                            <div>
                                <div class="columnnasiayamb-8">
                                    <h1 class="formreservasi ui heading size-heading2xl"><?= esc($menu->nama); ?></h1>
                                    <p class="hidanganutama ui text size-textmd"><?= esc($menu->kategori); ?></p>
                                </div>
                            </div>
                            <p class="description-29 ui text size-textmd">
                                <?= esc($menu->deskripsi); ?>
                            </p>
                            <div class="rowrpcounter">
                                <p class="ui text size-textlg"><?= 'Rp ' . number_format($menu->harga, 0, ',', '.'); ?></p>
                                <a href="https://www.youtube.com/embed/bv8Fxk0sz71" target="_blank">
                                    <button class="beli-8 ui button red_900 size-sm fill round">Beli</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>