<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Restoran Mantap Donh - Menu</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="theme-color" content="#000000" />
    <meta name="description" content="web site created using create-react-app" />

    <link rel="stylesheet" type="text/css" href="<?= base_url('css/index.css') ?>" />
    <link rel="stylesheet" type="text/css" href="<?= base_url('css/font.css') ?>" />
    <link rel="stylesheet" type="text/css" href="<?= base_url('css/styles.css') ?>" />
    <link rel="stylesheet" type="text/css" href="<?= base_url('css/components.css') ?>" />
    <link rel="stylesheet" type="text/css" href="<?= base_url('css/MenuPage.css') ?>" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Irish+Grover&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Istok+Web:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <script>
        function handleTabs( /** @type {HTMLElement} */ target) {
            const tabs = /** @type {HTMLElement[]} */ (target.querySelectorAll('[role="tab"]'));
            const tabPanels = /** @type {HTMLElement[]} */ (target.querySelectorAll('[role="tabpanel"]'));
            const activeClassList = ["active"];

            function changeTab( /** @type {HTMLElement}*/ target) {
                target.focus();
                const controls = /** @type {string} */ (target.getAttribute("aria-controls"));
                for (const tab of tabs) {
                    const isActiveTab = tab.id === target.id;
                    const tabIndex = isActiveTab ? "0" : "-1";
                    const ariaSelected = isActiveTab ? "true" : "false";
                    tab.setAttribute("tabindex", tabIndex);
                    tab.setAttribute("aria-selected", ariaSelected);
                    isActiveTab ? tab.classList.add(...activeClassList) : tab.classList.remove(...activeClassList);
                }
                for (const panel of tabPanels) {
                    const shouldHidePanel = panel.id !== controls;
                    panel.hidden = shouldHidePanel;
                    panel.style.display = shouldHidePanel ? "none" : "";
                }
            }

            function handleClickEvent( /** @type {MouseEvent} */ event) {
                changeTab(event.target);
            }

            function handleKeyboardEvent( /** @type (KeyboardEvent] */ event) {
                const key = event.key;
                const target = event.target;
                const index = [...tabs].findIndex((tab) => tab.id === target.id);
                switch (key) {
                    case "ArrowLeft": {
                        const prevTab = tabs[index - 1];
                        if (prevTab) changeTab(prevTab);
                        break;
                    }
                    case "ArrowRight": {
                        const nextTab = tabs[index + 1];
                        if (nextTab) changeTab(nextTab);
                        break;
                    }
                    case "Home": {
                        const firstTab = tabs[0];
                        if (firstTab) changeTab(firstTab);
                        break;
                    }
                    case "End": {
                        const lastTab = tabs[tabs.length - 1];
                        if (lastTab) changeTab(lastTab);
                        break;
                    }
                }
            }
            for (const tab of tabs) {
                tab.style.cursor = "pointer";
                tab.addEventListener("click", handleClickEvent);
                tab.addEventListener("keydown", handleKeyboardEvent);
            }
        }
        document.addEventListener("DOMContentLoaded", () => {
            const tablists = /** @type (NodeListOf<HTMLElement>} */ (document.querySelectorAll('[role="tablist"]'));
            for (const tablist of tablists) handleTabs(tabList);
        });
    </script>
</head>

<body>
    <div class="landing-page">
        <div>
            <div class="rowrestoranmant-2">
                <div class="columnrestoranm-6">
                    <header class="headerrestoranm">
                        <p class="restoranmantap ui text size-text2xl">Restoran Mantap Donh</p>
                        <ul class="rowhome-1">
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
                    </header>
                    <div class="column seven container-xs">
                        <div class="rowmenu_one">
                            <div class="columrimenu_one">
                                <p class="menu_one ui text size-text4xl">Menu</p>
                                <p class="jelajahi ui text size-textmd">
                                    Jelajahi beragam hidangan kami yang dibuat dengan bahan-bahan segar dan penuh cita
                                    rasa.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="stacksearch">
                <div class="column_three-2">
                    <div id="tabList" role="tablist" aria-label="Tab List" class="column_two-2">
                        <div class="column_one-4 container-xs">
                            <div class="columnsearch">
                                <label class="search ui input gray_300 size-sm fill">
                                    <input id="searchInput" name="search" placeholder="Search" type="text" />
                                </label>
                                <div class="rowappetizers">
                                    <button class="appetizers ui button indigo_700 size-lg fill round" data-kategori="all">
                                        All
                                    </button>
                                    <?php foreach ($kategori as $item) : ?>
                                        <button class="appetizers ui button indigo_700 size-lg fill round" data-kategori="<?= esc($item['kategori']); ?>">
                                            <?= esc($item['kategori']); ?>
                                        </button>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            <div>
                                <div id="menuContainer" class="rownasiayambaka">
                                    <?php foreach ($menus as $menu) : ?>
                                        <div class="col-md-4 menu-item" data-kategori="<?= esc($menu->kategori); ?>">
                                            <div class="columnnasiayamb-4">
                                                <!-- Link untuk detail menu -->
                                                <a href="<?= base_url('menudetail/' . esc($menu->id_menu)); ?>" class="menu-link">
                                                    <img src="<?= base_url('public/' . $menu->foto); ?>" alt="Image" class="image_one-8" />
                                                    <h1 class="ui heading size-headingxs"><?= esc($menu->nama); ?></h1>
                                                    <p class="telepon ui text size-textmd"><?= 'Rp ' . number_format($menu->harga, 0, ',', '.'); ?></p>
                                                </a>
                                                <!-- Tombol beli -->
                                                <button class="beli ui button red_900 size-sm fill round" data-id="<?= esc($menu->id_menu); ?>" data-nama="<?= esc($menu->nama); ?>" data-harga="<?= esc($menu->harga); ?>" data-foto="<?= base_url('public/' . $menu->foto); ?>">Beli</button>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Ambil data cart dari localStorage atau buat array kosong jika belum ada
            const cart = JSON.parse(localStorage.getItem('cart')) || [];

            // Fungsi untuk menambah item ke cart
            function addToCart(id, nama, harga, foto) {
                let item = cart.find(item => item.id === id);

                if (item) {
                    item.quantity += 1;
                } else {
                    item = {
                        id,
                        nama,
                        harga: parseFloat(harga),
                        foto,
                        quantity: 1
                    };
                    cart.push(item);
                }

                localStorage.setItem('cart', JSON.stringify(cart));
                alert(`${nama} telah ditambahkan ke cart.`);
            }

            // Menangani klik pada tombol "Beli"
            document.querySelectorAll('.beli').forEach(button => {
                button.addEventListener('click', (event) => {
                    const button = event.target;
                    const id = button.getAttribute('data-id');
                    const nama = button.getAttribute('data-nama');
                    const harga = button.getAttribute('data-harga');
                    const foto = button.getAttribute('data-foto');

                    addToCart(id, nama, harga, foto);
                });
            });
        });

        // Variabel untuk menyimpan kategori yang dipilih
        let selectedCategory = 'all';

        // Fungsi untuk menyaring menu berdasarkan kategori dan pencarian
        function filterMenu() {
            const searchQuery = document.getElementById('searchInput').value.toLowerCase();
            const menuItems = document.querySelectorAll('#menuContainer .menu-item');

            menuItems.forEach(item => {
                const itemName = item.querySelector('.ui.heading.size-headingxs').textContent.toLowerCase();
                const itemCategory = item.getAttribute('data-kategori').toLowerCase();

                // Cek apakah item cocok dengan kategori dan pencarian
                if ((selectedCategory === 'all' || itemCategory === selectedCategory) &&
                    itemName.includes(searchQuery)) {
                    item.style.display = ''; // Menampilkan elemen jika cocok
                } else {
                    item.style.display = 'none'; // Menyembunyikan elemen jika tidak cocok
                }
            });
        }

        // Event listener untuk pencarian
        document.getElementById('searchInput').addEventListener('input', filterMenu);

        // Event listener untuk filter kategori
        document.querySelectorAll('.rowappetizers .appetizers').forEach(button => {
            button.addEventListener('click', function() {
                selectedCategory = this.getAttribute('data-kategori').toLowerCase();
                filterMenu();
            });
        });
    </script>


</body>