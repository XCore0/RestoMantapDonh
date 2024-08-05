<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Restoran Mantap Donh - Contack Us</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="theme-color" content="#000000" />
    <meta name="description" content="web site created using create-react-app" />
    <link rel="stylesheet" type="text/css" href="./css/index.css" />
    <link rel="stylesheet" type="text/css" href="./css/font.css" />
    <link rel="stylesheet" type="text/css" href="./css/styles.css" />
    <link rel="stylesheet" type="text/css" href="./css/components.css" />
    <link rel="stylesheet" type="text/css" href="./css/ContackUsPage.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Irish+Grover&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Istok+Web:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
</head>

<body>
    <div class="landing-page">
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
                                <a href="<?= site_url('contackus') ?>">
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
                </div>
                <p class="ui text size-text4xl">About Us</p>
            </div>
        </div>
        <div>
            <div class="row_three">
                <div class="row_two-3">
                    <div class="rowmap-2 container-xs">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3806.452697041917!2d78.390765923757" allowfullscreen="" loading=" lazy" referrerpolicy="no-referrer-when-downgrade" class="map-2"></iframe>
                        <div class="columnalamat">
                            <div class="rownotelp">
                                <p class="telepon ui text size-textmd">Alamat</p>
                                <p class="one ui text size-textmd">:</p>
                                <p class="email-12 ui text size-textmd">Jl. Makan Enak No. 123, Kota Makmur,
                                    Indonesia</p>
                            </div>
                            <div class="rownotelp">
                                <p class="telepon ui text size-textmd">No Telp</p>
                                <p class="one ui text size-textmd">:</p>
                                <p class="email-12 ui text size-textmd">+62 123 456789</p>
                            </div>
                            <div class="rownotelp">
                                <p class="telepon ui text size-textmd">Email</p>
                                <p class="two ui text size-textmd">:</p>
                                <p class="email-12 ui text size-textmd">info@mantapdonh.com</p>
                            </div>
                            <div class="row_one-4">
                                <img src="public/images/fb.png" alt="Image" class="image_two" />
                                <img src="public/images/ig.png" alt="Image" class="image_two" />
                                <img src="public/images/twit.png" alt="Image" class="image_two" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
</body>