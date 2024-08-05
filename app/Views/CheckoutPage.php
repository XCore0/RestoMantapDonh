<?php
$session = session();
$userName = $session->get('name'); // Ambil nama pengguna dari sesi
?>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Restoran Mantap Donh - CheckOut</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="theme-color" content="#000000" />
    <meta name="description" content="web site created using create-react-app" />
    <link rel="stylesheet" type="text/css" href="./css/index.css" />
    <link rel="stylesheet" type="text/css" href="./css/font.css" />
    <link rel="stylesheet" type="text/css" href="./css/styles.css" />
    <link rel="stylesheet" type="text/css" href="./css/components.css" />
    <link rel="stylesheet" type="text/css" href="./css/CheckoutPage.css" />

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
            <div class="rowrestoranmant-5">
                <div class="columnrestoranm-8">
                    <header class="headerrestoranm">
                        <p class="restoranmantap ui text size-text2xl">Restoran Mantap Donh</p>
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
                    </header>
                    <div class="column seven container-xs">
                        <div class="rowmenu_one">
                            <div class="columrimenu_one">
                                <p class="menu_one ui text size-text4xl">Checkout</p>
                                <p class="jelajahi ui text size-textmd">
                                    Isi detail di bawah ini untuk menyelesaikan
                                    pesanan Anda.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footerformulird">
            <div class="columnkonfirmas">
                <div class="columnformulird">
                    <form id="confirmOrderForm" action="/checkout/confirm" method="post">
                        <h5 class="formreservasi ui heading size-headingxs">Formulir Detail Pembeli</h5>
                        <div class="columnone">
                            <div class="rowtwo">
                                <p class="ui text size-textmd">1.</p>
                                <input type="text" class="email-10 ui input gray_300 size-xs fill round" name="address" placeholder="Alamat">
                            </div>
                            <div class="rowtwo">
                                <p class="ui text size-textmd">2.</p>
                                <input type="text" class="email-10 ui input gray_300 size-xs fill round" name="phone_number" placeholder="Nomor Telepon">
                            </div>
                        </div>
                        <div class="columnmetode">
                            <h5 class="formreservasi ui heading size-headingxs">Metode Pembayaran</h5>
                            <p class="ui text size-texts">. Pilihan Pembayaran</p>
                            <div class="columngopay">
                                <div class="radio-button-container">
                                    <input type="radio" id="gopay1" name="payment-method" value="GOPAY1" class="radio-button" />
                                    <label for="gopay1" class="payment-method" data-method="GOPAY1">
                                        <img src="public/images/nasi_ayam_bakar.webp" alt="GOPAY1" class="rectangle-56" />
                                        <span>GOPAY 1</span>
                                    </label>

                                    <input type="radio" id="gopay2" name="payment-method" value="GOPAY2" class="radio-button" />
                                    <label for="gopay2" class="payment-method" data-method="GOPAY2">
                                        <img src="public/images/nasi_ayam_bakar.webp" alt="GOPAY2" class="rectangle-56" />
                                        <span>GOPAY 2</span>
                                    </label>

                                    <input type="radio" id="gopay3" name="payment-method" value="GOPAY3" class="radio-button" />
                                    <label for="gopay3" class="payment-method" data-method="GOPAY3">
                                        <img src="public/images/nasi_ayam_bakar.webp" alt="GOPAY3" class="rectangle-56" />
                                        <span>GOPAY 3</span>
                                    </label>
                                </div>
                                <button type="submit" class="konfirmasi ui button red_900 size-xs fill round">Konfirmasi Pesanan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="cart_page_one">
                <div class="rowringkasan-1">
                    <div class="columnringkasan-1">
                        <h5 class="formreservasi ui heading size-headingxs">Ringkasan Pesanan</h5>
                        <div class="linefive one-1"></div>
                        <div class="rowsubtotal-1">
                            <p class="ui text size-textmd">Subtotal</p>
                            <p id="subtotalSummary" class="ui text size-textmd">Rp 0</p>
                        </div>
                        <div class="rowtotalakhir-1">
                            <p class="ui text size-textmd">Total Akhir</p>
                            <p id="totalSummary" class="ui text size-textmd">Rp 0</p>
                        </div>
                    </div>
                </div>
                <div class="rowringkasan-1">
                    <table id="orderDetailsTable" class="order-details-table" style="width: 100%;">
                        <thead>
                            <tr>
                                <th>Gambar</th>
                                <th>Nama</th>
                                <th>Harga</th>
                                <th>Kuantitas</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody id="orderDetailsBody">
                            <!-- Order details rows will be injected here -->
                        </tbody>
                    </table>
                </div>
            </div>

            <script>
                document.getElementById('confirmOrderForm').addEventListener('submit', function(event) {
                    event.preventDefault(); // Mencegah pengiriman formulir secara default

                    const formData = new FormData(this);

                    const totalHarga = document.getElementById('totalSummary').textContent.replace(/Rp /, '').replace(/\./g, '').replace(',', '.');
                    const orderDetails = Array.from(document.querySelectorAll('#orderDetailsBody tr')).map(row => {
                        return {
                            id_menu: row.dataset.idMenu,
                            quantity: row.querySelector('td:nth-child(4)').textContent.trim(),
                            price: row.querySelector('td:nth-child(3)').textContent.replace(/Rp /, '').replace(/\./g, '').replace(',', '.')
                        };
                    });

                    fetch('/checkout/confirm', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-Requested-With': 'XMLHttpRequest',
                                'X-CSRF-TOKEN': '<?= csrf_hash() ?>'
                            },
                            body: JSON.stringify({
                                total_harga: totalHarga,
                                order_details: orderDetails,
                                address: formData.get('address'),
                                phone_number: formData.get('phone_number'),
                                payment_method: formData.get('payment-method')
                            })
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                window.location.href = data.redirect; // Arahkan ke halaman hasil pembelian
                            } else {
                                alert(data.message || 'Terjadi kesalahan saat memproses pembayaran. Silakan coba lagi.');
                            }
                        })
                        .catch(error => {
                            console.error('Error:', error);
                        });
                });

                // Menandai metode pembayaran yang dipilih
                document.querySelectorAll('.payment-method').forEach(button => {
                    button.addEventListener('click', function() {
                        document.querySelectorAll('.payment-method').forEach(btn => btn.classList.remove('active'));
                        this.classList.add('active');
                    });
                });

                document.addEventListener('DOMContentLoaded', () => {
                    const cart = JSON.parse(localStorage.getItem('cart')) || [];
                    console.log('Cart data:', cart);
                    const orderDetailsBody = document.getElementById('orderDetailsBody');
                    let subtotal = 0;

                    if (cart.length === 0) {
                        orderDetailsBody.innerHTML = '<tr><td colspan="5" class="ui text size-textmd">Keranjang belanja Anda kosong.</td></tr>';
                        document.getElementById('subtotalSummary').textContent = 'Rp 0';
                        document.getElementById('totalSummary').textContent = 'Rp 0';
                    } else {
                        orderDetailsBody.innerHTML = cart.map(item => {
                            console.log('Item:', item);

                            if (!item.id) { // Periksa penggunaan id
                                console.error('ID menu tidak ditemukan:', item.id);
                                return ''; // Abaikan item yang tidak valid
                            }

                            const totalItemPrice = item.harga * item.quantity;
                            subtotal += totalItemPrice;

                            return `
                <tr data-id-menu="${item.id}"> <!-- Ganti id_menu dengan id -->
                    <td><img src="${item.foto}" alt="${item.nama}" class="image-20" style="width: 60px; height: 60px;" /></td>
                    <td>${item.nama}</td>
                    <td>Rp ${parseFloat(item.harga).toLocaleString('id-ID')}</td>
                    <td>${item.quantity}</td>
                    <td>Rp ${parseFloat(totalItemPrice).toLocaleString('id-ID')}</td>
                </tr>
            `;
                        }).join('');

                        document.getElementById('subtotalSummary').textContent = `Rp ${subtotal.toLocaleString('id-ID')}`;
                        document.getElementById('totalSummary').textContent = `Rp ${subtotal.toLocaleString('id-ID')}`;
                    }
                });
            </script>

        </footer>
    </div>
</body>

</html>