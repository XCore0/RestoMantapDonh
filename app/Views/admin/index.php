<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="css1/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="<?= site_url('admin') ?>">Restoran Mantap Donh</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <a class="nav-link" href="<?= base_url(); ?>/logout">Logout</a></li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Dashboard</div>
                        <a class="nav-link active" href="<?= site_url('admin') ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <div class="sb-sidenav-menu-heading">Interface</div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                            Menu
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="<?= site_url('daftarmenu') ?>">Daftar Menu</a>
                                <a class="nav-link" href="<?= site_url('kategori') ?>">Kategori</a>
                            </nav>
                        </div>
                        <a class="nav-link" href="<?= site_url('users') ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                            Users
                        </a>
                        <a class="nav-link" href="<?= base_url('sales'); ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Laporan
                        </a>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    <?= session()->get('name') ?>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Dashboard</h1>
                    <ol class="breadcrumb mb=4">
                        <li class="breadcrumb-item active">Selamat datang dihalaman admin <b><?= session()->get('name') ?></b></li>
                    </ol>
                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-primary text-white mb-4">
                                <div class="card-body">
                                    Daftar Menu
                                    <div class="mt-2">
                                        <h2><?= $menu_count ?></h2>
                                    </div>
                                </div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="<?= site_url('daftarmenu') ?>">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-info text-white mb-4">
                                <div class="card-body">
                                    Daftar Kategori
                                    <div class="mt-2">
                                        <h2><?= $kategori_count ?></h2>
                                    </div>
                                </div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="<?= site_url('kategori') ?>">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-dark text-white mb-4">
                                <div class="card-body">
                                    Users
                                    <div class="mt-2">
                                        <h2><?= $users_count ?></h2>
                                    </div>
                                </div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="<?= site_url('users') ?>">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-secondary text-white mb-4">
                                <div class="card-body">
                                    Laporan
                                    <div class="mt-2">
                                        <h2><?= $sales_count ?></h2>
                                    </div>
                                </div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="<?= site_url('sales') ?>">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="col-12 text-center mb-4">
                            <h2>Laporan</h2>
                        </div>
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <!-- Form Group di dalam card-body -->
                                <div class="form-group mb-3">
                                    <label for="period" class="form-label">Select Period:</label>
                                    <select id="period" class="form-select">
                                        <option value="daily">Daily</option>
                                        <option value="weekly">Weekly</option>
                                        <option value="monthly">Monthly</option>
                                        <option value="yearly">Yearly</option>
                                    </select>
                                </div>
                                <!-- Canvas untuk grafik -->
                                <canvas id="salesChart"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="container mt-5">
                        <div class="row">
                            <!-- Bagian Grafik Menu Terjual -->
                            <div class="col-12 text-center mb-4">
                                <h2>Jumlah Menu yang Terjual</h2>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="card shadow-sm">
                                    <div class="card-body">
                                        <canvas id="barChart"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="card shadow-sm">
                                    <div class="card-body">
                                        <canvas id="pieChart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Bagian Grafik Penjualan -->

                    </div>
                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Restoran Mantap Donh 2024</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js1/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
    <script src="js1/datatables-simple-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-adapter-date-fns@latest"></script>


    <script>
        // Ambil data dari PHP dan konversi menjadi format yang bisa digunakan di JavaScript
        const menuCounts = <?= json_encode($menuCounts); ?>;
        const menuNames = <?= json_encode($menuNames); ?>;

        // Warna untuk diagram batang seperti pelangi
        const barColors = [
            'rgba(255, 0, 0, 0.6)', // Merah
            'rgba(255, 127, 0, 0.6)', // Oranye
            'rgba(255, 255, 0, 0.6)', // Kuning
            'rgba(0, 255, 0, 0.6)', // Hijau
            'rgba(0, 0, 255, 0.6)', // Biru
            'rgba(75, 0, 130, 0.6)', // Indigo
            'rgba(148, 0, 211, 0.6)' // Violet
        ];

        // Diagram Batang
        const ctxBar = document.getElementById('barChart').getContext('2d');
        const barChart = new Chart(ctxBar, {
            type: 'bar',
            data: {
                labels: Object.values(menuNames), // Nama menu
                datasets: [{
                    label: 'Jumlah Menu Terjual',
                    data: Object.values(menuCounts), // Jumlah terjual
                    backgroundColor: barColors.slice(0, Object.values(menuNames).length),
                    borderColor: barColors.slice(0, Object.values(menuNames).length).map(color => color.replace('0.2', '1')), // Mengubah alpha untuk border
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                },
                plugins: {
                    legend: {
                        labels: {
                            color: '#000', // Warna teks label
                            boxWidth: 0, // Lebar kotak warna label diatur menjadi 0 untuk menghilangkan kotak
                            padding: 20, // Padding sekitar label
                            generateLabels: function(chart) {
                                const original = Chart.defaults.plugins.legend.labels.generateLabels(chart);
                                return original.map(label => ({
                                    ...label,
                                    boxWidth: 20, // Atur lebar kotak label
                                    boxHeight: 20, // Atur tinggi kotak label
                                    backgroundColor: 'rgba(0, 1, 0, 1)' // Atur warna background kotak label menjadi transparan
                                }));
                            }
                        }
                    }
                }
            }
        });
        // Warna untuk diagram lingkaran seperti pelangi
        const pieColors = [
            'rgba(255, 0, 0, 0.6)', // Merah
            'rgba(255, 127, 0, 0.6)', // Oranye
            'rgba(255, 255, 0, 0.6)', // Kuning
            'rgba(0, 255, 0, 0.6)', // Hijau
            'rgba(0, 0, 255, 0.6)', // Biru
            'rgba(75, 0, 130, 0.6)', // Indigo
            'rgba(148, 0, 211, 0.6)' // Violet
        ];

        // Diagram Lingkaran
        const ctxPie = document.getElementById('pieChart').getContext('2d');
        const pieChart = new Chart(ctxPie, {
            type: 'pie',
            data: {
                labels: Object.values(menuNames), // Nama menu
                datasets: [{
                    label: 'Jumlah Menu Terjual',
                    data: Object.values(menuCounts), // Jumlah terjual
                    backgroundColor: pieColors.slice(0, Object.values(menuNames).length),
                    borderColor: pieColors.slice(0, Object.values(menuNames).length).map(color => color.replace('0.6', '1')),
                    borderWidth: 1
                }]
            }
        });

        const ctx = document.getElementById('salesChart').getContext('2d');
        let salesChart;

        function fetchSalesData(period) {
            fetch(`<?= base_url('sales/getSalesData') ?>/${period}`)
                .then(response => response.json())
                .then(data => {
                    const labels = data.map(item => {
                        if (period === 'weekly') {
                            return `Week ${item.week} ${item.year}`;
                        } else if (period === 'monthly') {
                            return `${item.month} ${item.year}`;
                        } else {
                            return item.date;
                        }
                    });

                    const values = data.map(item => item.total);

                    // Array warna untuk setiap segmen
                    const lineColors = [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ];

                    if (salesChart) {
                        salesChart.destroy();
                    }

                    // Membagi data menjadi beberapa dataset berdasarkan jumlah warna yang tersedia
                    const datasets = [];
                    for (let i = 0; i < values.length - 1; i++) {
                        datasets.push({
                            label: `Segment ${i + 1}`,
                            data: [{
                                    x: labels[i],
                                    y: values[i]
                                },
                                {
                                    x: labels[i + 1],
                                    y: values[i + 1]
                                }
                            ],
                            borderColor: lineColors[i % lineColors.length], // Warna garis untuk segmen
                            backgroundColor: 'rgba(0, 0, 0, 0)', // Tidak ada latar belakang untuk garis
                            borderWidth: 2, // Lebar garis
                            pointBackgroundColor: lineColors[i % lineColors.length], // Warna titik sesuai warna garis
                            pointBorderColor: lineColors[i % lineColors.length], // Warna border titik sesuai warna garis
                            pointBorderWidth: 1, // Lebar border titik
                            pointRadius: 5 // Radius titik
                        });
                    }

                    salesChart = new Chart(ctx, {
                        type: 'line',
                        data: {
                            datasets: datasets
                        },
                        options: {
                            scales: {
                                x: {
                                    beginAtZero: true,
                                    grid: {
                                        color: 'rgba(0, 0, 0, 0.1)' // Warna garis grid sumbu x
                                    }
                                },
                                y: {
                                    beginAtZero: true,
                                    grid: {
                                        color: 'rgba(0, 0, 0, 0.1)' // Warna garis grid sumbu y
                                    }
                                }
                            },
                            plugins: {
                                legend: {
                                    labels: {
                                        color: '#000' // Warna teks label
                                    }
                                }
                            }
                        }
                    });
                });
        }

        document.getElementById('period').addEventListener('change', (event) => {
            fetchSalesData(event.target.value);
        });

        // Initial load
        fetchSalesData('daily');
    </script>


</body>

</html>