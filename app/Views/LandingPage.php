<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Restoran Mantap Donh - LandingPage</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#000000" />
    <meta name="description" content="Web site created using create-react-app" />
    <link rel="stylesheet" type="text/css" href="./css/index.css" />
    <link rel="stylesheet" type="text/css" href="./css/font.css" />
    <link rel="stylesheet" type="text/css" href="./css/styles.css" />
    <link rel="stylesheet" type="text/css" href="./css/components.css" />
    <link rel="stylesheet" type="text/css" href="./css/LandingPage.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Irish+Grover&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Istok+Web:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
</head>

</head>

<body>
    <div class=" landing-page">
        <div class="rowrestoranmant">
            <div class="columnrestoranm">
                <header class="headerrestoranm">
                    <p class="restoranmantap ui text size-text2xl">Restoran Mantap Donh</p>
                    <div class="rowlogin">
                        <ul class="rowhome">
                            <li>
                                <a href="#">
                                    <p class="ui text size-textmd">Home</p>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <p class="ui text size-textmd">Menu</p>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <p class="ui text size-textmd">About Us</p>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <p class="ui text size-textmd">Contact Us</p>
                                </a>
                            </li>
                        </ul>
                        <a href="<?= site_url('login') ?>">
                            <button class="login ui button blue_gray_900 size-lg fill round">Login</button>
                        </a>
                        <a href="<?= site_url('register') ?>">
                            <button class="register ui button gray_300 size-lg fill round">Register</button>
                        </a>
                    </div>
                </header>
                <div class="container-xs">
                    <div class="columnrasakan">
                        <p class="rasakan ui text size-text3xl">
                            Rasakan Kelezatan Autentik di Setiap Gigitan dengan Bahan-Bahan Segar dan Rasa yang Tak
                            Terlupakan
                        </p>
                        <div class="rowlihat_menu">
                            <button class="lihat_menu-2 ui button blue_gray_900 size-lg fill round">Lihat Menu</button>
                            <button class="lihat_menu-2 ui button gray_300 size-lg fill round">Pesan Sekarang</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row_two">
            <div class="rowtentangkami">
                <div class="column_one">
                    <div class="columntentangka container-xs">
                        <p class="tentangkami ui text size-text4xl">Tentang Kami</p>
                        <p class="description ui text size-textmd">
                            Restoran Mantap Donh berdiri sejak 2020, menyajikan masakan tradisional dengan sentuhan
                            modern. Kami berkomitmen memberikan pengalaman kuliner terbaik dengan bahan-bahan
                            berkualitas tinggi.
                        </p>
                    </div>
                    <div class="row_one">
                        <div class="row">
                            <img src="public/images/chep.webp" alt="Image" class="image-1" />
                            <img src="public/images/omah.jpg" alt="Image" class="image_one-3" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="rowspesialhari">
                <div class="column_three">
                    <div class="column_two">
                        <div class="columnhubungika container-xs">
                            <p class="tentangkami ui text size-text4xl">Spesial Hari Ini</p>
                            <p class="description ui text size-textmd">
                                Nikmati hidangan spesial kami yang dibuat dengan bahan-bahan segar dan pilihan.
                                Setiap hari, kami menawarkan hidangan istimewa yang berbeda untuk memberikan
                                pengalaman kuliner yang selalu baru dan menggugah selera.
                            </p>
                        </div>
                        <div class="liststeak_sigma">
                            <div class="columnsteak">
                                <div class="stacksteak">
                                    <img src="public/images/nasi_ayam_bakar.webp" alt="Steak Sigma" class="ayam_bakar_madu" />
                                    <p class="steaksigma ui text size-textmd">Steak Sigma</p>
                                </div>
                                <p class="description-11 ui text size-textmd">
                                    Ikan segar pilihan yang dibakar dengan bumbu rempah tradisional. Disajikan
                                    dengan nasi hangat, lalapan, dan sambal terasi yang pedas dan nikmat.
                                </p>
                            </div>
                            <div class="columnsteak">
                                <div class="stacksteak">
                                    <img src="public/images/nasi_ayam_bakar.webp" alt="Image" class="ayam_bakar_madu" />
                                    <p class="steaksigma ui text size-textmd">Steak Sigma</p>
                                </div>
                                <p class="description-11 ui text size-textmd">
                                    Ikan segar pilihan yang dibakar dengan bumbu rempah tradisional. Disajikan
                                    dengan nasi hangat, lalapan, dan sambal terasi yang pedas dan nikmat.
                                </p>
                            </div>
                            <div class="columnsteak">
                                <div class="stacksteak">
                                    <img src="public/images/nasi_ayam_bakar.webp" alt="Image" class="ayam_bakar_madu" />
                                    <p class="steaksigma-2 ui text size-textmd">Steak Sigma</p>
                                </div>
                                <p class="description-11 ui text size-textmd">
                                    Ikan segar pilihan yang dibakar dengan bumbu rempah tradisional. Disajikan
                                    dengan nasi hangat, lalapan, dan sambal terasi yang pedas dan nikmat.
                                </p>
                            </div>
                        </div>
                        <div class="columnlihat-1 container-xs">
                            <button class="lihat_menu ui button gray_300 size-xl fill round">Lihat Semua
                                Spesial</button>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="flex-col-center-center column_six">
                    <div class="column_five">
                        <div class="column_seven container-xs">
                            <p class="tentangkami ui text size-text4xl">Menu Favorit</p>
                            <p class="description ui text size-textmd">
                                Temukan hidangan favorit pelanggan kami yang selalu menjadi pilihan utama. Setiap
                                hidangan dibuat dengan bahan-bahan segar dan resep yang telah teruji kelezatannya. Mari
                                nikmati cita rasa yang autentik dan memuaskan hanya di Restoran Mantap Donh.
                            </p>
                        </div>
                        <div class="listayam_bakar">
                            <div class="columnayam">
                                <div class="stackayam_bakar">
                                    <img src="public/images/nasi_ayam_bakar.webp" alt="Ayam Bakar Madu" class="ayam_bakar_madu" />
                                    <p class="ayambakarmadu ui text size-textmd">Ayam Bakar Madu</p>
                                </div>
                                <div class="columnayambakar">
                                    <p class="ayambakar ui text size-textmd">
                                        Ayam bakar dengan bumbu madu yang manis dan gurih, disajikan dengan nasi putih,
                                        lalapan, dan sambal terasi.
                                    </p>
                                    <h1 class="ui heading size-headings">Rp 50.000</h1>
                                </div>
                            </div>
                            <div class="columnayam">
                                <div class="stackayam_bakar">
                                    <img src="public/images/nasi_ayam_bakar.webp" alt="Image" class="ayam_bakar_madu" />
                                    <p class="ayambakarmadu ui text size-textmd">Ayam Bakar Madu</p>
                                </div>
                                <div class="columnayambakar">
                                    <p class="ayambakar ui text size-textmd">
                                        Ayam bakar dengan bumbu madu yang manis dan gurih, disajikan dengan nasi putih,
                                        lalapan, dan sambal terasi.
                                    </p>
                                    <h2 class="ui heading size-headings">Rp 50.000</h2>
                                </div>
                            </div>
                            <div class="columnayam">
                                <div class="stackayam_bakar">
                                    <img src="public/images/nasi_ayam_bakar.webp" alt="Image" class="ayam_bakar_madu" />
                                    <p class="ayambakarmadu ui text size-textmd">Ayam Bakar Madu</p>
                                </div>
                                <div class="columnayambakar">
                                    <p class="ayambakar ui text size-textmd">
                                        Ayam bakar dengan bumbu madu yang manis dan gurih, disajikan dengan nasi putih,
                                        lalapan, dan sambal terasi.
                                    </p>
                                    <h3 class="ui heading size-headings">Rp 50.000</h3>
                                </div>
                            </div>
                        </div>
                        <div class="columnlihat-1 container-xs">
                            <button class="lihat_menu ui button blue_gray_900 size-xl fill round">Lihat Menu
                                Lengkap</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="rowulasan">
                <div class="column_nine">
                    <div class="column_seven container-xs">
                        <p class="tentangkami ui text size-text4xl">Ulasan</p>
                        <p class="description ui text size-textmd">
                            Dengarkan apa yang dikatakan oleh pelanggan setia kami tentang pengalaman mereka di Restoran
                            Mantap Donh. Kami bangga dapat memberikan pelayanan terbaik dan hidangan yang selalu
                            memuaskan. Berikut adalah beberapa testimoni dari pelanggan kami:
                        </p>
                    </div>
                    <div class="listandi">
                        <div class="columndescripti">
                            <div class="columnandi">
                                <img src="public/images/profile.png" alt="Andi Prasetyo" class="andi_prasetyo" />
                                <h2 class="andiprasetyo ui heading size-headingxs">Andi Prasetyo</h2>
                            </div>
                            <img src="public/images/img_.svg" alt="Image" class="image" />
                            <p class="description-2 ui text size-textxs">
                                Gado-gadonya segar dan saus kacangnya sangat lezat. Stafnya juga sangat membantu. Sangat
                                merekomendasikan tempat ini untuk semua pecinta makanan Indonesia.
                            </p>
                        </div>
                        <div class="columndescripti">
                            <div class="columnandi">
                                <img src="public/images/profile.png" alt="Andi Prasetyo" class="andi_prasetyo" />
                                <h2 class="andiprasetyo ui heading size-headingxs">Andi Prasetyo</h2>
                            </div>
                            <img src="public/images/img_.svg" alt="Image" class="image" />
                            <p class="description-2 ui text size-textxs">
                                Gado-gadonya segar dan saus kacangnya sangat lezat. Stafnya juga sangat membantu. Sangat
                                merekomendasikan tempat ini untuk semua pecinta makanan Indonesia.
                            </p>
                        </div>
                        <div class="columndescripti">
                            <div class="columnandi">
                                <img src="public/images/profile.png" alt="Image" class="image-2" />
                                <h3 class="andiprasetyo ui heading size-headingxs">Andi Prasetyo</h3>
                            </div>
                            <img src="public/images/img_.svg" alt="Image" class="image" />
                            <p class="description-2 ui text size-textxs">
                                Gado-gadonya segar dan saus kacangnya sangat lezat. Stafnya juga sangat membantu. Sangat
                                merekomendasikan tempat ini untuk semua pecinta makanan Indonesia.
                            </p>
                        </div>
                        <div class="columndescripti">
                            <div class="columnandi">
                                <img src="public/images/profile.png" alt="Image" class="image-3" />
                                <h4 class="andiprasetyo ui heading size-headingxs">Andi Prasetyo</h4>
                            </div>
                            <img src="public/images/img_.svg" alt="Image" class="image" />
                            <p class="description-2 ui text size-textxs">
                                Gado-gadonya segar dan saus kacangnya sangat lezat. Stafnya juga sangat membantu. Sangat
                                merekomendasikan tempat ini untuk semua pecinta makanan Indonesia.
                            </p>
                        </div>
                    </div>
                    <div class="column_eight container-xs">
                        <button class="lihat_menu ui button gray_300 size-xl fill round">Lihat Menu Lengkap</button>
                    </div>
                </div>
            </div>
            <div>
                <div class="rowreservasi">
                    <div class="column_eleven">
                        <div class="column_ten">
                            <div class="column_seven container-xs">
                                <p class="tentangkami ui text size-text4xl">Reservasi</p>
                            </div>
                            <p class="description ui text size-textmd">
                                Pastikan Anda mendapatkan tempat di Restoran Mantap Donh dengan melakukan reservasi
                                terlebih
                                dahulu. Kami menawarkan layanan reservasi yang mudah dan cepat, sehingga Anda dapat
                                menikmati hidangan favorit Anda tanpa harus menunggu lama.
                            </p>
                        </div>
                        <div class="rowformreservas">
                            <div class="columnformreser">
                                <h2 class="formreservasi ui heading size-headinglg">Form Reservasi</h2>
                                <div class="rowfirstname">
                                    <label class="firstname ui input gray_300 size-lg fill round">
                                        <input name="firstName" placeholder="First Name" type="text" />
                                    </label>
                                    <label class="firstname ui input gray_300 size-lg fill round">
                                        <input name="lastName" placeholder="Last Name" type="text" />
                                    </label>
                                </div>
                                <label class="email ui input gray_300 size-lg fill round">
                                    <input name="email" placeholder="Email Addres" type="text" />
                                </label>
                                <label class="email ui input gray_300 size-lg fill round">
                                    <input name="phoneNumber" placeholder="Phone Number" type="text" />
                                </label>
                                <div class="rowfirstname">
                                    <label class="firstname ui input gray_300 size-lg fill round">
                                        <input name="date" placeholder="Date" type="text" />
                                    </label>
                                    <label class="firstname ui input gray_300 size-lg fill round">
                                        <input name="time" placeholder="Time" type="text" />
                                    </label>
                                </div>
                                <label class="email ui input gray_300 size-lg fill round">
                                    <input name="number_of" placeholder="Number of Guests" type="text" />
                                </label>
                                <label class="email ui input gray_300 size-lg fill round">
                                    <input name="special" placeholder="Special Requests" type="text" />
                                </label>
                                <button class="pesan_sekarang-1 ui button red_900 size-xl fill round">Pesan
                                    Sekarang</button>
                            </div>
                            <div class="columncontact">
                                <h3 class="formreservasi ui heading size-headinglg">Contact Information</h3>
                                <p class="jikaanda ui text size-textmd">
                                    Jika Anda memiliki pertanyaan atau memerlukan bantuan, jangan ragu untuk menghubungi
                                    kami melalui:
                                </p>
                                <div class="columnphone6212">
                                    <p class="ui text size-textmd">Phone: +62 123 456 7890</p>
                                    <p class="ui text size-textmd">Email: reservasi@mantapdonh.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="column_thirteen">
                    <div class="column_twelve">
                        <div class="columnhubungika container-xs">
                            <p class="tentangkami ui text size-text4xl">Hubungi Kami</p>
                            <p class="description ui text size-textmd">
                                Kami selalu siap untuk mendengar dari Anda. Apakah Anda memiliki pertanyaan, saran, atau
                                ingin memberikan umpan balik, jangan ragu untuk menghubungi kami. Tim kami akan dengan
                                senang hati membantu
                                Anda.
                            </p>
                        </div>
                        <div class="rowmap">
                            <div class="columnmap">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3806.45269704191712078.39076592375736!3d17.4380337498205" allowfullscreen="" referrerpolicy=" no-referrer-when-downgrade" loading="lazy" class="map">
                                </iframe>
                                <div class="rowalamat">
                                    <p class="alamat ui text size-textmd">Alamat :</p>
                                    <p class="jlrayamantap ui text size-textmd">Jl. Raya Mantap No. 123, Jakarta,
                                        Indonesia
                                    </p>
                                </div>
                                <div class="rowtelepon">
                                    <p class="telepon ui text size-textmd">Telepon :</p>
                                    <p class="telepon ui text size-textmd">+62 123 456 7890</p>
                                </div>
                                <div class="row_five">
                                    <p class="telepon ui text size-textmd">Email:</p>
                                    <p class="telepon ui text size-textmd">info@mantapdonh.com</p>
                                </div>
                            </div>
                            <div class="columnname">
                                <label class="name ui input indigo_700 size-sm fill">
                                    <input name="name" placeholder="Name" type="text" />
                                </label>
                                <label class="name ui input indigo_700 size-sm fill">
                                    <input name="email" placeholder="Email" type="text" />
                                </label>
                                <label class="name ui input indigo_700 size-sm fill">
                                    <input name="phone" placeholder="Phone" type="text" />
                                </label>
                                <textarea class="message ui textarea indigo_700 size-xs tarfillindigo700 round" name="message" placeholder="Message"></textarea>
                                <button class="kirim_pesan ui button red_900 size-xl fill round">Kirim Pesan</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footerrestoranm">
                <div class="columnview">
                    <div class="column_fourteen container-xs">
                        <div class="column_seven container-xs">
                            <p class="restoranmantap-1 ui text size-textxl">Restoran Mantap Donh</p>
                        </div>
                        <div class="column_nine">
                            <p class="description-8 ui text size-textmd">
                                Restoran Mantap Donh adalah tujuan utama Anda untuk menikmati hidangan Indonesia
                                autentik
                                dengan sentuhan modern. Kami berkomitmen untuk memberikan pengalaman kuliner terbaik
                                dengan
                                menggunakan bahan-bahan segar dan berkualitas tinggi.
                            </p>
                            <div class="row six">
                                <img src="public/images/bb.jpg" alt="Image" class="image_two" />
                                <img src="public/images/ig.png" alt="Image" class="image_two" />
                                <img src="public/images/twit.png" alt="Image" class="image_two" />
                            </div>
                            <div class="columnlinethree">
                                <div class="linethree_one"></div>
                                <p class="ui text size-textmd">© 2024 Restoran Mantap Donh. Semua Hak Dilindungi</p>
                            </div>
                        </div>
                    </div>
                    <div class="view"></div>
                </div>
            </footer>
        </div>
</body>

</html>