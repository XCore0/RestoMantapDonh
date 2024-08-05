<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Restoran Mantap Donh - Cart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="theme-color" content="#000000" />
    <meta name="description" content="web site created using create-react-app" />
    <link rel="stylesheet" type="text/css" href="./css/index.css" />
    <link rel="stylesheet" type="text/css" href="./css/font.css" />
    <link rel="stylesheet" type="text/css" href="./css/styles.css" />
    <link rel="stylesheet" type="text/css" href="./css/components.css" />
    <link rel="stylesheet" type="text/css" href="./css/CartPage.css" />
    <link rel="stylesheet" type="text/css" href="./css/MenuPage.css" />

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
                                <p class="menu_one ui text size-text4xl">Cart</p>
                                <p class="jelajahi ui text size-textmd">
                                    Periksa dan kelola pesanan Anda sebelum melanjutkan ke pembayaran.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="stacksearch">
                <div class="column_three-2">
                    <div class="cart-page">

                        <div class="columnnasiayamb-9 container-xs">
                            <!-- Cart Items Container -->
                            <div id="cartItems" class="rownasiayambaka-1">
                                <!-- Pesan jika keranjang kosong -->
                                <div id="emptyCartMessage" class="empty-cart-message" style="display: none;">
                                    <p class="ui text size-textmd">Keranjang belanja Anda kosong.</p>
                                </div>
                                <!-- Cart Items Container -->
                                <table id="cartTable" class="cart-table" style="width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>Gambar</th>
                                            <th>Nama</th>
                                            <th>Harga</th>
                                            <th>Kuantitas</th>
                                            <th>Total</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody id="cartTableBody">
                                        <!-- Cart Items Rows will be added here -->
                                    </tbody>
                                </table>
                                <!-- Rest of the content -->
                            </div>
                            <div class="rowringkasan">
                                <div class="columnmenu_one">
                                    <p class="ui text size-textmd">Ringkasan Pesanan</p>
                                    <div class="linefive_one"></div>
                                    <div class="rowsubtotal">
                                        <p class="ui text size-textmd">Subtotal</p>
                                        <p id="subtotal" class="ui text size-textmd">Rp 0</p>
                                    </div>
                                    <div class="rowtotalakhir">
                                        <p class="totalakhir ui text size-textmd">Total Akhir</p>
                                        <p id="total" class="ui text size-textmd">Rp 0</p>
                                    </div>
                                    <button id="checkoutButton" class="lanjutkan_ke ui button red_900 size-xs fill round">Lanjutkan ke Pembayaran</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            // Variable to store cart data
            let cart = [];
            console.log(localStorage.getItem('cart'));


            document.addEventListener('DOMContentLoaded', () => {
                cart = JSON.parse(localStorage.getItem('cart')) || [];
                const cartTableBody = document.getElementById('cartTableBody');
                const emptyCartMessage = document.getElementById('emptyCartMessage');
                let subtotal = 0;

                if (cart.length === 0) {
                    emptyCartMessage.style.display = 'block';
                    cartTableBody.style.display = 'none';
                } else {
                    emptyCartMessage.style.display = 'none';
                    cartTableBody.style.display = 'table-row-group'; // Ensure table rows are visible

                    cartTableBody.innerHTML = cart.map(item => {
                        const totalItemPrice = item.harga * item.quantity;
                        subtotal += totalItemPrice;

                        return `
                    <tr>
                        <td><img src="${item.foto}" alt="${item.nama}" class="image-19" style="width: 100px; height: 100px;" /></td>
                        <td>${item.nama}</td>
                        <td>Rp ${item.harga.toLocaleString('id-ID')}</td>
                        <td>
                            <div class="quantity-input" id="${item.id}">
                                <div class="quantity-decrease" onclick="updateQuantity('${item.id}', -1)">
                                    <p class="ui text size-textmd">&lt;</p>
                                </div>
                                <label class="groupfiftyfour ui input gray_300 size-xs fill">
                                    <input type="number" step="1" min="0" value="${item.quantity}" onchange="updateQuantity('${item.id}', 0)" />
                                </label>
                                <div class="quantity-increase" onclick="updateQuantity('${item.id}', 1)">
                                    <p class="ui text size-textmd">&gt;</p>
                                </div>
                            </div>
                        </td>
                        <td>Rp ${totalItemPrice.toLocaleString('id-ID')}</td>
                        <td><p class="hapus ui text size-textmd" onclick="removeFromCart('${item.id}')">Hapus</p></td>
                    </tr>
                `;
                    }).join('');

                    document.getElementById('subtotal').textContent = `Rp ${subtotal.toLocaleString('id-ID')}`;
                    document.getElementById('total').textContent = `Rp ${subtotal.toLocaleString('id-ID')}`;
                }
            });

            document.getElementById('checkoutButton').addEventListener('click', (event) => {
                event.preventDefault(); // Mencegah aksi default dari link atau tombol

                if (cart.length === 0) {
                    alert('Keranjang belanja Anda kosong. Tambahkan item ke keranjang sebelum melanjutkan ke pembayaran.');
                } else {
                    // Ambil total harga dari subtotal
                    const totalHarga = parseFloat(document.getElementById('total').textContent.replace(/Rp /, '').replace(/\./g, '').replace(',', '.'));

                    // Tindakan lain jika diperlukan, misalnya, redirect ke halaman konfirmasi
                    alert(`Total harga Anda adalah Rp ${totalHarga.toLocaleString('id-ID')}.`);

                    // Misalnya, redirect ke halaman checkout
                    window.location.href = '<?= site_url('checkout') ?>'; // Ganti dengan URL yang sesuai jika diperlukan
                }
            });


            function updateQuantity(id, change) {
                cart = JSON.parse(localStorage.getItem('cart')) || [];
                const item = cart.find(item => item.id === id);

                if (item) {
                    item.quantity = Math.max(0, item.quantity + change);
                    if (item.quantity === 0) {
                        cart = cart.filter(item => item.id !== id);
                    }
                    localStorage.setItem('cart', JSON.stringify(cart));
                    location.reload();
                }
            }

            function removeFromCart(id) {
                cart = JSON.parse(localStorage.getItem('cart')) || [];
                cart = cart.filter(item => item.id !== id);
                localStorage.setItem('cart', JSON.stringify(cart));
                location.reload();
            }
        </script>


</body>

</html>