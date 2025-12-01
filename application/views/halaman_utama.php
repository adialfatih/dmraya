<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="manifest" href="manifest.json">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    
    <meta name="msapplication-navbutton-color" content="#246cd1">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="msapplication-starturl" content="https://testing.damayraya.com">

    <meta name="language" content="id">
    <meta name="title" content="<?=$seoTitle;?>">
    <meta name="description" content="<?=$seoDesc;?>">
    <meta name="keywords" content="<?=$seoKey;?>">
    <meta name="robots" content="index, follow">
    <meta name="author" content="<?=$seoAuthor;?>">
    <meta name="copyright" content="<?=$seoAuthor;?>">
    <!-- Meta Tags Open Graph untuk Sosial Media -->
    <meta property="og:title" content="<?=$seoTitle;?>">
    <meta property="og:description" content="<?=$seoDesc;?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.damayraya.com">
    <meta property="og:image" content="https://damayraya.com/<?=base_url('logo/logo.png');?>">
    <meta property="og:locale" content="id_ID">

    <!-- Meta Tags Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?=$seoTitle;?>">
    <meta name="twitter:description" content="<?=$seoDesc;?>">
    <meta name="twitter:image" content="https://damayraya.com/<?=base_url('logo/logo.png');?>">
    <meta name="twitter:site" content="@damayrayasolutions">

    <!-- Meta Tags Tambahan -->
    <meta name="theme-color" content="#74dba4">
    <meta name="application-name" content="DAMAY RAYA SOLUTIONS">
    <meta name="apple-mobile-web-app-title" content="DAMAY RAYA SOLUTIONS">

    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <link rel="shortcut icon" href="<?=base_url('assets/');?>assetss/logo_tes.png" type="image/x-icon">
    <title><?=$seoTitle;?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Wittgenstein:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?=base_url('assets/');?>style.css?v=3">
    <link rel="stylesheet" href="<?=base_url('assets/');?>responsive.css?v=3">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/ScrollTrigger.min.js"></script>
</head>
<body>
    <header>
        <img src="<?=base_url('assets/');?>assetss/background_header.png" alt="Background Header" class="bgheader">
        <div class="overlay"></div>
        <div class="navigation">
            <div class="logo">
                <img src="<?=base_url('assets/');?>assetss/logo_tes.png" alt="Logo Damay Raya Solutions">
                <div>
                    <span>Damay Raya</span>
                    <span>Solutions</span>
                </div>
            </div>
            <nav>
                <ul>
                    <a href="<?=base_url('dashboard');?>"><li class="active">Beranda</li></a>
                    <a href="<?=base_url('produk');?>"><li>Produk</li></a>
                    <a href="<?=base_url('galleri');?>"><li>Galeri</li></a>
                    <a href="<?=base_url('tentang-kami');?>"><li>Tentang Kami</li></a>
                </ul>
            </nav>
            <div class="rightnav">
                <div class="search-box">
                    <ion-icon name="search-outline"></ion-icon>
                    <input type="text">
                </div>
                <label class="hamburger">
                    <input type="checkbox" id="cekobox" value="0">
                    <svg viewBox="0 0 32 32" for="cekobox" onclick="cekbox()">
                    <path class="line line-top-bottom" d="M27 10 13 10C10.8 10 9 8.2 9 6 9 3.5 10.8 2 13 2 15.2 2 17 3.8 17 6L17 26C17 28.2 18.8 30 21 30 23.2 30 25 28.2 25 26 25 23.8 23.2 22 21 22L7 22"></path>
                    <path class="line" d="M7 16 27 16"></path>
                    </svg>
                </label>
            </div>
            <div class="horiz"></div>
            <div class="mobile-menu" id="mobile-menu">
                <nav>
                    <ul>
                        <a href="<?=base_url('dashboard');?>"><li>Beranda</li></a>
                        <a href="<?=base_url('produk');?>"><li>Produk</li></a>
                        <a href="<?=base_url('bergallerianda');?>"><li>Galeri</li></a>
                        <a href="<?=base_url('tentang-kami');?>"><li>Tentang Kami</li></a>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="jumbotron">
            <div class="leftjumbotron">
                <!-- <img src="<=base_url('assets/');?>assetss/logo_tes2.png" alt="Logo Damay Raya Solutions"> -->
                <h1><span>Damay Raya Solutions</span><br>Solusi Terbaik untuk Budidaya Pertanian dan Pestisida</h1>
                <p>Mengoptimalkan Pengawalan dan Pengembangan Produk Pestisida dari Distribusi hingga Petani</p>
                <a href="https://wa.me/62<?=$nomorWa;?>?text=Halo%20Damay%20Raya%0ASaya%20butuh%20bantuan" class="btnCall" target="_blank">
                    <div>
                        <ion-icon name="logo-whatsapp"></ion-icon>
                        Hubungi Kami Sekarang
                    </div>
                </a>
            </div>
            <div class="rightjumbotron">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="<?=base_url('assets/');?>assetss/newImage/B1.png" loading="lazy"/>
                        </div>
                        <div class="swiper-slide">
                            <img src="<?=base_url('assets/');?>assetss/newImage/B2.png" loading="lazy"/>
                        </div>
                        <div class="swiper-slide">
                            <img src="<?=base_url('assets/');?>assetss/newImage/B3.png" loading="lazy"/>
                        </div>
                    </div>
                    <!-- <div class="swiper-pagination"></div> -->
                </div>
            </div>
        </div>
    </header>
    <main>
        <section class="company">
            <div class="leftcompany">
                <div class="squarelogo">
                    <img src="<?=base_url('assets/');?>assetss/logo_square.png" alt="Tentang Damay Raya" loading="lazy">
                </div>
            </div>
            <div class="rightcompany">
                <h2>Tentang Kami</h2>
                <p><strong>DAMAY RAYA SOLUTIONS</strong> adalah perusahaan penyedia jasa konsultasi lapangan yang berfokus pada budidaya pertanian, khususnya pestisida. </p>
                <p>Kami berkomitmen untuk mengawal dan mengembangkan produk pestisida dari rantai distribusi hingga ke tangan petani. Dengan pemahaman produk yang mendalam, strategi aktivitas lapangan yang efektif, dan penanganan keluhan yang responsif, kami menciptakan peluang pasar yang berkelanjutan.</p>
                <div class="fx">
                    <a href="https://wa.me/62<?=$nomorWa;?>?text=Halo%20Damay%20Raya%0ASaya%20butuh%20bantuan" class="btnCall2" target="_blank">
                        <div>
                            <ion-icon name="logo-whatsapp"></ion-icon>
                            Hubungi Kami Sekarang
                        </div>
                    </a>
                    <a href="<?=base_url('produk');?>" class="btnCall2">
                        <div class="tes">
                            <ion-icon name="grid-outline"></ion-icon>
                            Katalog Produk
                        </div>
                    </a>
                </div>
                <div class="fx sosmedd">
                    <a href="<?=$linkFb;?>" target="_blank">
                        <div class="btnsosmed fb">
                            <img src="<?=base_url('assets/');?>assetss/sosmed/fb.png" alt="Facebook Damay Raya" loading="lazy">
                            Damay Raya
                        </div>
                    </a>
                    <a href="<?=$linkIg;?>" target="_blank">
                        <div class="btnsosmed fb">
                            <img src="<?=base_url('assets/');?>assetss/sosmed/ig.png" alt="Instagram Damay Raya" loading="lazy">
                            @damayraya_solutions
                        </div>
                    </a>
                    <a href="<?=$linkTiktok;?>" target="_blank">
                        <div class="btnsosmed fb">
                            <img src="<?=base_url('assets/');?>assetss/sosmed/tiktok.png" alt="Tiktok Damay Raya" loading="lazy">
                            damay.raya.solutions
                        </div>
                    </a>
                </div>
            </div>
        </section>
        <section class="kerja-sama">
            <div class="kerja-sama-judul">
                <h2>Bekerja Sama Dengan</h2>
            </div>
            <div class="new-profile">
                <div class="nplogo">
                    <img src="<?=base_url('assets/');?>Terus-berinovasi2.png" alt="Kerja Sama" loading="lazy">
                </div>
                <div class="nptext">
                    <p><strong>Pilarbio</strong> adalah grup bisnis yang berfokus pada layanan R&D, produksi, pemasaran, dan pengujian untuk formulasi agrokimia. Dengan pengalaman lebih dari 60 tahun di pasar global, kami bertujuan untuk menjadi salah satu perusahaan agrokimia terbaik di dunia. Grup kami memiliki tiga perusahaan teknologi tinggi yang telah disertifikasi oleh pemerintah dan kami memiliki dua basis produksi modern di Shanghai dan Jiangsu. Dengan lebih dari 700 karyawan. Jaringan layanan global kami mencakup lebih dari 100 negara dan wilayah. Setiap tahun, kami memberikan produk perlindungan tanaman berkualitas internasional dan layanan teknis profesional kepada jutaan petani di lima benua.
                    </p>
                    <p>Misi kami adalah "<em>Terus berinovasi untuk panen berkualitas</em>". Kami berpusat pada pelanggan, berfokus pada inovasi dalam teknologi, produk, dan layanan untuk meningkatkan efisiensi pertanian. Kami membantu petani meningkatkan kualitas dan hasil panen, meningkatkan keuntungan, dan meningkatkan keamanan pangan.</p>
                </div>
            </div>
        </section>
        <section class="layanan">
            <h2>Layanan Kami</h2>
            <div class="layananpart">
                <div class="parts">
                    <img src="<?=base_url('assets/');?>assetss/svg/konsul.svg" alt="Konsultasi Pertanian" loading="lazy">
                    <div class="parts-isi">
                        <h3>Konsultasi Pertanian</h3>
                        <p>Memberikan solusi tepat guna untuk budidaya pertanian yang efisien.</p>
                    </div>
                </div>
                <div class="parts">
                    <img src="<?=base_url('assets/');?>assetss/svg/product.svg" alt="Pengawalan Produk" loading="lazy">
                    <div class="parts-isi">
                        <h3>Pengawalan Produk</h3>
                        <p>Mengawal produk pestisida dari distribusi hingga aplikasi di lapangan.</p>
                    </div>
                </div>
            </div>
            <div class="layananpart">
                <div class="parts">
                    <img src="<?=base_url('assets/');?>assetss/svg/strategi.svg" alt="Strategi Lapangan" loading="lazy">
                    <div class="parts-isi">
                        <h3>Strategi Lapangan</h3>
                        <p>Menyusun dan melaksanakan strategi aktivitas lapangan yang efektif.</p>
                    </div>
                </div>
                <div class="parts">
                    <img src="<?=base_url('assets/');?>assetss/svg/penanganan.svg" alt="Penanganan Keluhan" loading="lazy">
                    <div class="parts-isi">
                        <h3>Penanganan Keluhan</h3>
                        <p>Responsif terhadap keluhan dan memberikan solusi yang cepat dan tepat.</p>
                    </div>
                </div>
            </div>
            <!-- <div class="clip-path-shape"></div> -->
        </section>
        <section class="microtext">
            Jangan biarkan hama merusak usaha keras Anda. Dapatkan obat hama terbaik dari kami dan nikmati hasil panen yang melimpah serta berkualitas tinggi. Yuk, mulai sekarang juga dan lihat perbedaannya!
        </section>
        <section class="layanan pd50">
            <h2>PRODUK</h2>
            <div class="judulKatalog">
                <img src="<?=base_url('assets/');?>assetss/newImage2/INSEK.png" alt="Katalog Insektisida" loading="lazy" onclick="showProduk('Insektisida')">
                <img src="<?=base_url('assets/');?>assetss/newImage2/HERBI.png" alt="Katalog Herbisida" loading="lazy" onclick="showProduk('Herbisida')">
                <img src="<?=base_url('assets/');?>assetss/newImage2/FUNGI.png" alt="Katalog Fungisida" loading="lazy" onclick="showProduk('Fungisida')">
            </div>
            <div class="katalog-produk" id="idKatalogProduk">
                <!-- <div class="dtproduk">
                    <div class="wrapper23">
                        <img src="<?=base_url('assets/');?>assetss/newImage2/Screenshot_1.jpg" alt="PILARBIT 27 / 102 SC" loading="lazy">
                        <div class="desc">
                            <h3 class="teksInsek">PILARBIT 27 / 102 SC</h3>
                            <p>Bahan Aktif : Deltametrin 27 g/l + Tiametoksam 102 g/l</p>
                            <p><strong class="teksInsek">Dapat melindungi tanaman dari hama untuk jangka waktu yang lama</strong> Kombinasi Deltamethrin dengan Thiamethoxam, Penggunaannya dapat mengendalikan hama secara efisien </p>
                            <a href="javascript:void(0);" onclick="openModal('pilarbit')"><div class="btnin-action">Selengkapnya</div></a>
                        </div>
                        
                    </div>
                </div> -->
                <div class="dtproduk">
                    <div class="wrapper23">
                        <img src="<?=base_url('assets/');?>assetss/newImage2/1.png" alt="PILARWIN 112 / 168 ZC" loading="lazy">
                        <div class="desc">
                            <h3 class="teksFungi">PILARWIN 112 / 168 ZC</h3>
                            <p>Bahan Aktif : Fenoksanil 112 g/l + Prokloraz 168 g/l</p>
                            <p><strong class="teksFungi">Proteksi Maksimal </strong> dari penyakit blas Pyricularia oryzae, busuk daun pelepah, malai palsu pada padi, serta layu fusarium dan bercak ungu pada bawang merah!</p>
                            <a href="javascript:void(0);" onclick="openModal('pilarwin')"><div class="btnin-action">Selengkapnya</div></a>
                        </div>
                        
                    </div>
                </div>
                <div class="dtproduk">
                    <div class="wrapper23">
                        <img src="<?=base_url('assets/');?>assetss/newImage2/2.png" alt="PILARBOMBA 53 / 106 SC" loading="lazy">
                        <div class="desc">
                            <h3 class="teksInsek">PILARBOMBA 53 / 106 SC</h3>
                            <p>Bahan Aktif : Lufenuron 53 g/l + Tolfenpyrad 106 </p>
                            <p><strong class="teksInsek">Solusi ampuh cegah & kendalikan hama padi dan bawang merah!</strong> Lindungi tanaman dari wereng, pelipat daun, thrips tabaci, ulat grayak, serta kutu-kutuan dengan perlindungan maksimal. </p>
                            <a href="javascript:void(0);" onclick="openModal('pilarbomba')"><div class="btnin-action">Selengkapnya</div></a>
                        </div>
                        
                    </div>
                </div>
                <div class="dtproduk">
                    <div class="wrapper23">
                        <img src="<?=base_url('assets/');?>assetss/newImage2/3.png" alt="PILARTRUST 100 SC" loading="lazy">
                        <div class="desc">
                            <h3 class="teksInsek">PILARTRUST 100 SC</h3>
                            <p>Bahan Aktif : Spinosad 100 g/l</p>
                            <p><strong class="teksInsek">Insektisida berkualitas tinggi </strong> dengan racun kontak dan lambung yang dirancang untuk melindungi tanaman Anda dari hama perusak. Dengan formulasi pekatan suspense, produk ini memberikan perlindungan efektif pada berbagai jenis tanaman</p>
                            <a href="javascript:void(0);" onclick="openModal('pilartrust')"><div class="btnin-action">Selengkapnya</div></a>
                        </div>
                        
                    </div>
                </div>
                <!-- <div class="dtproduk">
                    <div class="wrapper23">
                        <img src="<?=base_url('assets/');?>assetss/newImage2/4.png" alt="PILARGOLA 400 SC" loading="lazy">
                        <div class="desc">
                            <h3 class="teksHerbi2">PILARGOLA 400 SC</h3>
                            <p>Golongan, Herbisida  : RAC E WSSA 14 diphenyl ether</p>
                            <p><strong class="teksHerbi2">Herbisida selektif pra tumbuh berbentuk pekatan suspensi</strong>  yang dapat digunakan untuk mengendalikan gulma umum pada budidaya bawang merah dengan bahan aktif Oksifluorfen.</p>
                            <a href="javascript:void(0);" onclick="openModal('pilargola')"><div class="btnin-action">Selengkapnya</div></a>
                        </div>
                        
                    </div>
                </div> -->
                <div class="dtproduk">
                    <div class="wrapper23">
                        <img src="<?=base_url('assets/');?>assetss/newImage2/7.png" alt="PILARZOX 85 / 170 SC" loading="lazy">
                        <div class="desc">
                            <h3 class="teksFungi">PILARZOX 85 / 170 SC</h3>
                            <p>Bahan Aktif : Cyazofamid 85 g/l + Cyamoxanil 170 g/l</p>
                            <p><strong class="teksFungi">Memiliki keunggulan yaitu dapat melindungi tanaman </strong> dari penyakit Oomycetes dan mengobati tanaman yang sakit. Satu produk yang memiliki dua fungsi.</p>
                            <a href="javascript:void(0);" onclick="openModal('pilarzox')"><div class="btnin-action">Selengkapnya</div></a>
                        </div>
                        
                    </div>
                </div>
                <!-- <div class="dtproduk">
                    <div class="wrapper23">
                        <img src="<?=base_url('assets/');?>assetss/newImage2/8.png" alt="PILARSPIRIT 20 / 147 OD" loading="lazy">
                        <div class="desc">
                            <h3 class="teksHerbi2">PILARSPIRIT 20 / 147 OD</h3>
                            <p>Bahan Aktif : Cyhalofop-butyl 147 g/l + Penoxsulam 20 g/l</p>
                            <p><strong class="teksHerbi2">Herbisida sistemik purna tumbuh berbentuk minyak</strong>  yang dapat didispersikan dalam air untuk mengendalikan gulma umum pada budidaya padi sawah.</p>
                            <a href="javascript:void(0);" onclick="openModal('pilarspirit')"><div class="btnin-action">Selengkapnya</div></a>
                        </div>
                        
                    </div>
                </div> -->
                <div class="dtproduk">
                    <div class="wrapper23">
                        <img src="<?=base_url('assets/');?>assetss/newImage2/9.png" alt="PILARTEBU 430 SC" loading="lazy">
                        <div class="desc">
                            <h3 class="teksFungi">PILARTEBU 430 SC</h3>
                            <p>Bahan Aktif : Tebuconazole 430 g/l</p>
                            <p><strong class="teksFungi">Aktif membunuh pathogen atau menghambat aktivitasnya</strong> sebelum menyerang, sehingga tanaman dapat dilindungi dari kerusakan. Dan ampuh membunuh jamur secara keseluruhan.</p>
                            <a href="javascript:void(0);" onclick="openModal('pilartebu')"><div class="btnin-action">Selengkapnya</div></a>
                        </div>
                        
                    </div>
                </div>
                <div class="dtproduk">
                    <div class="wrapper23">
                        <img src="<?=base_url('assets/');?>assetss/newImage2/10.png" alt="PILARMECTIN 53 CS" loading="lazy">
                        <div class="desc">
                            <h3 class="teksInsek">PILARMECTIN 53 CS</h3>
                            <p>Bahan Aktif : Abamectin 53 g/l</p>
                            <p><strong class="teksInsek">PILARMECTIN sangat ampuh melepaskan abamektin</strong> secara perlahan dan memberikan perlindungan tanaman yang tahan lama.</p>
                            <a href="javascript:void(0);" onclick="openModal('pilarmectin')"><div class="btnin-action">Selengkapnya</div></a>
                        </div>
                        
                    </div>
                </div>
                <div class="dtproduk">
                    <div class="wrapper23">
                        <img src="<?=base_url('assets/');?>assetss/newImage2/11.png" alt="PILARCOBRE 545 SC" loading="lazy">
                        <div class="desc">
                            <h3 class="teksFungi">PILARCOBRE 545 SC</h3>
                            <p>Bahan Aktif : Tembaga Hidroksida 545 g/l</p>
                            <p><strong class="teksFungi">Bakterisida yang bersifat protektif</strong> berbentuk pekatan suspensi untuk mengendalikan jamur dan bakteri, pada tanaman padi dapat digunakan untuk mengendalikan penyakit hawar daun bakteri Xanthomonas oryzae.</p>
                            <a href="javascript:void(0);" onclick="openModal('pilarcobre')"><div class="btnin-action">Selengkapnya</div></a>
                        </div>
                        
                    </div>
                </div>
                <div class="dtproduk">
                    <div class="wrapper23">
                        <img src="<?=base_url('assets/');?>assetss/newImage2/5.png" alt="PILARCHESS 60 WG" loading="lazy">
                        <div class="desc">
                            <h3 class="teksInsek">PILARCHESS 60 WG</h3>
                            <p>Bahan Aktif : Pymetrozine 60%</p>
                            <p><strong class="teksInsek">Insektisida sistemik racun lambung berbentuk butiran</strong> yang dapat dispersikan dalam air untuk mengendalikan wereng batang coklat Nilaparvata lugens pada tanaman padi.</p>
                            <a href="javascript:void(0);" onclick="openModal('pilarchess')"><div class="btnin-action">Selengkapnya</div></a>
                        </div>
                        
                    </div>
                </div>
                <div class="dtproduk">
                    <div class="wrapper23">
                        <img src="<?=base_url('assets/');?>assetss/newImage2/6.png" alt="PILARCABRIO 55 / 5 WG" loading="lazy">
                        <div class="desc">
                            <h3 class="teksFungi">PILARCABRIO 55 / 5 WG</h3>
                            <p>Bahan Aktif : Pyraclostrobin 5% + Metiran 55 %</p>
                            <p><strong class="teksFungi">Fungisida sistemik protektif dan kuratif</strong> berbentuk butiran yang dapat didispersikan dalam air untuk mengendalikan penyakit busuk daun Phytopthora infestans pada tanaman kentang</p>
                            <a href="javascript:void(0);" onclick="openModal('pilarcabrio')"><div class="btnin-action">Selengkapnya</div></a>
                        </div>
                        
                    </div>
                </div>
            </div>
            
        </section>
        <section class="komitment">
            <div class="komitmen-judul">
                <h2>Mengapa Memilih Kami ?</h2>
                <p><strong>DAMAY RAYA SOLUTIONS</strong> berkomitmen untuk memberikan layanan terbaik dalam pengembangan dan pengawalan produk pestisida. Dengan tim ahli yang berpengalaman, kami memastikan setiap produk yang kami distribusikan memberikan hasil optimal dan aman bagi lingkungan.
                </p>
                <div class="fxnew">
                    <div class="cardsd">
                        <img src="<?=base_url('assets/');?>assetss/svg-pengalaman.svg" alt="Pengalaman" loading="lazy">
                        <span>Pengalaman dan Keahlian</span>
                        <p>Tim kami terdiri dari profesional berpengalaman dalam bidang pertanian dan pestisida.</p>
                    </div>
                    <div class="cardsd">
                        <img src="<?=base_url('assets/');?>assetss/svg-pendekatan-terpadu.svg" alt="Pendekatan Terpadu" loading="lazy">
                        <span>Pendekatan Terpadu</span>
                        <p>Kami menggabungkan pengetahuan produk dengan strategi lapangan yang efektif.</p>
                    </div>
                    <div class="cardsd">
                        <img src="<?=base_url('assets/');?>assetss/svg-dukungan-pelanggan.svg" alt="Dukungan Pelanggan" loading="lazy">
                        <span>Dukungan Pelanggan</span>
                        <p>Kami selalu siap memberikan dukungan terbaik untuk setiap pelanggan.</p>
                    </div>
                    <div class="cardsd">
                        <img src="<?=base_url('assets/');?>assetss/svg-inovasi-berkelanjutan.svg" alt="Inovasi Berkelanjutan" loading="lazy">
                        <span>Inovasi Berkelanjutan</span>
                        <p>Kami terus berinovasi untuk memberikan solusi terbaik dan terbaru di bidang pestisida.</p>
                    </div>
                </div>
            </div>
            
        </section>
<section class="testimoni">
    <h2>Bergabunglah dengan Komunitas <br>Petani Sukses</h2>

    <!-- Story-style testimonial slider -->
    <div class="swiper storySwiper">
        <div class="swiper-wrapper">

            <!-- Contoh slide 1 -->
            <div class="swiper-slide story-slide" onclick="openTesti('<?=base_url('assets/newtesti/chess-Ig3.webp');?>')">
                <div class="story-thumb">
                    <img src="<?=base_url('assets/newtesti/chess-Ig3.webp');?>" alt="Testimoni Petani 1" loading="lazy">
                </div>
            </div>

            <!-- Contoh slide 2 -->
            <div class="swiper-slide story-slide" onclick="openTesti('<?=base_url('assets/newtesti/chess-Ig2.webp');?>')">
                <div class="story-thumb">
                    <img src="<?=base_url('assets/newtesti/chess-Ig2.webp');?>" alt="Testimoni Petani 2" loading="lazy">
                </div>
            </div>

            <!-- Contoh slide 3 -->
            <div class="swiper-slide story-slide" onclick="openTesti('<?=base_url('assets/newtesti/testi-bomba.webp');?>')">
                <div class="story-thumb">
                    <img src="<?=base_url('assets/newtesti/testi-bomba.webp');?>" alt="Testimoni Petani 3" loading="lazy">
                </div>
            </div>

            <!-- Contoh slide 4 -->
            <div class="swiper-slide story-slide" onclick="openTesti('<?=base_url('assets/newtesti/testi-ig.webp');?>')">
                <div class="story-thumb">
                    <img src="<?=base_url('assets/newtesti/testi-ig.webp');?>" alt="Testimoni Petani 4" loading="lazy">
                </div>
            </div>
            <!-- Contoh slide 5 -->
            <div class="swiper-slide story-slide" onclick="openTesti('<?=base_url('assets/newtesti/testi-mectin-cabrio.webp');?>')">
                <div class="story-thumb">
                    <img src="<?=base_url('assets/newtesti/testi-mectin-cabrio.webp');?>" alt="Testimoni Petani 4" loading="lazy">
                </div>
            </div>
            <!-- Contoh slide 6 -->
            <div class="swiper-slide story-slide" onclick="openTesti('<?=base_url('assets/newtesti/testi-zox.webp');?>')">
                <div class="story-thumb">
                    <img src="<?=base_url('assets/newtesti/testi-zox.webp');?>" alt="Testimoni Petani 4" loading="lazy">
                </div>
            </div>

            <!-- Tambah slide lain sesuai kebutuhan -->
        </div>
    </div>

    <!-- CTA tetap -->
    <a href="https://wa.me/62<?=$nomorWa;?>?text=Halo%20Damay%20Raya%0ASaya%20butuh%20bantuan" class="btnCall2" target="_blank">
        <div>
            <ion-icon name="logo-whatsapp"></ion-icon>
            Hubungi Kami Sekarang
        </div>
    </a>
</section>

        <!-- <section class="testimoni">
            <h2>Bergabunglah dengan Komunitas <br>Petani Sukses</h2>
            <div class="swiper full mySwiper2">
                <div class="swiper-wrapper">
                  <div class="swiper-slide full">
                    <div class="imgswiper">
                        <img src="<=base_url('assets/');?>assetss/4.png" alt="Bu Siti - Petani Sayuran, Bandung" loading="lazy">
                    </div>
                    <span class="namatesti">Bu Siti - Petani Sayuran, Bandung</span>
                    <span class="txttesti">Sejak bekerja sama dengan <strong>DAMAY RAYA SOLUTIONS</strong>, produktivitas pertanian kami meningkat pesat. Dukungan dan layanan yang mereka berikan sangat luar biasa.</span>
                  </div>
                  <div class="swiper-slide full">
                    <div class="imgswiper">
                        <img src="<=base_url('assets/');?>assetss/5.png" alt="Budi, Petani Padi" loading="lazy">
                    </div>
                    <span class="namatesti">Budi - Petani Padi, Banjarnegara</span>
                    <span class="txttesti"><strong>DAMAY RAYA SOLUTIONS</strong> memberikan solusi yang tepat dan efektif untuk pengelolaan pestisida di lahan kami. Sangat direkomendasikan!</span>
                  </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
            <a href="https://wa.me/62<?=$nomorWa;?>?text=Halo%20Damay%20Raya%0ASaya%20butuh%20bantuan" class="btnCall2" target="_blank">
                <div>
                    <ion-icon name="logo-whatsapp"></ion-icon>
                    Hubungi Kami Sekarang
                </div>
            </a>
        </section> -->
        
    </main>
    <div id="myModal" class="modal">
        <!-- Modal content -->
        <div class="modal-content" id="isiModals">
            <div class="loader"></div>
            Please Wait...
        </div>
    </div>
    <!-- Modal khusus untuk zoom testimoni -->
    <div id="testiModal" class="modal">
        <div class="modal-content testi-modal-content">
            <div class="clsButton testi-close-btn" onclick="closeTestiModal()">x</div>
            <img id="testiImage" src="" alt="Testimoni Detail" class="testi-modal-img">
        </div>
    </div>

    <footer>
        <div class="leftfooter">
            <div class="logofooter">
                <img src="<?=base_url('assets/');?>assetss/logo_tes.png" alt="Logo Damay Raya" loading="lazy">
            </div>
            <span class="sp1"><ion-icon name="home-outline"></ion-icon> Babalan, Kalirejo, Kec. Undaan, Kabupaten Kudus, Jawa Tengah 59372</span>
            <span class="sp1"><ion-icon name="call-outline"></ion-icon> (0291) 2913548</span>
            <span class="sp1" style="margin-bottom: 10px;"><ion-icon name="mail-outline"></ion-icon> kontak@damayraya.com</span>
            <span class="sp1">&copy; 2024 All Rights Reserved. Damay Raya Solutions</span>
            <span class="sp2">Design & Develop By : <a href="https://grafamedia.com/" target="_blank">Grafamedia</a></span>
        </div>
        <div class="rightfooter">
            <span>Privacy Policy</span>
            <span>Terms Of Service</span>
            <span>Resources</span>
            <span>Email Us</span>
        </div>
        <div class="rightfooter">
            <span>Support Forum</span>
            <span>Documentation</span>
            <span>FAQ</span>
        </div>
        <div class="rightfooter">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2608.5565491707043!2d110.78712497601907!3d-6.934812740962764!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70c0c13958774d%3A0xd76ada44ab9ff58!2sBabalan%2C%20Kalirejo%2C%20Kec.%20Undaan%2C%20Kabupaten%20Kudus%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1720839592597!5m2!1sid!2sid" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <div class="sosmed">
                <a href="<?=$linkIg;?>" target="_blank"><ion-icon name="logo-instagram"></ion-icon></a>
                <a href="<?=$linkFb;?>" target="_blank"><ion-icon name="logo-facebook"></ion-icon></a>
                <a href="<?=$linkTiktok;?>" target="_blank"><ion-icon name="logo-tiktok"></ion-icon></a>
            </div>
        </div>
    </footer>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            coverflowEffect: {
                rotate: 50,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows: true,
            },
            pagination: {
                el: ".swiper-pagination",
            },
        });
        var testiSwiper = new Swiper(".storySwiper", {
            grabCursor: true,
            centeredSlides: true,
            loop: false,
            spaceBetween: 24,
            breakpoints: {
                // Mobile kecil
                0: {
                    slidesPerView: 1.1,
                    spaceBetween: 16
                },
                // Tablet
                600: {
                    slidesPerView: 1.6,
                    spaceBetween: 18
                },
                // Laptop
                900: {
                    slidesPerView: 2.2,
                    spaceBetween: 20
                },
                // Desktop besar
                1280: {
                    slidesPerView: 3,
                    spaceBetween: 24
                }
            }
        });
        function cekbox(){
            var x = document.getElementById("cekobox");
            var menu = document.getElementById("mobile-menu");
            if(x.checked == true){
                console.log('tes');
                x.value = "1";
                menu.classList.remove('show');
                menu.classList.add('close');
            }else{
                x.value = "0";
                console.log('tes2');
                menu.classList.add('show');
                menu.classList.remove('close');
            }
        }
        gsap.registerPlugin(ScrollTrigger);
  // Animasi untuk setiap elemen dengan kelas 'section'
        gsap.utils.toArray('section').forEach(section => {
            gsap.fromTo(section, 
            {opacity: 0, y: 100}, 
            {
                opacity: 1, 
                y: 0,
                scrollTrigger: {
                trigger: section,
                start: "top 50%", // Memulai animasi ketika 80% dari elemen terlihat
                end: "bottom 30%", // Mengakhiri animasi ketika 20% dari elemen terlihat
                toggleActions: "play none none reverse", // Mengatur aksi ketika scroll
                }
            }
            );
        });
        gsap.fromTo(".leftjumbotron h1",
            {opacity: 0, x: -100}, // Posisi awal diatur di sini
            {
                opacity: 1, x: 0, duration: 1, stagger: 0.3,
                scrollTrigger: {
                trigger: ".jumbotron",
                ease: "myBounce-squash",
                toggleActions: "play none none reverse"
                }
            }
        );
        gsap.fromTo(".leftjumbotron p",
            {opacity: 0, x: -100}, // Posisi awal diatur di sini
            {
                opacity: 1, x: 0, duration: 2, stagger: 0.3,
                scrollTrigger: {
                trigger: ".jumbotron",
                ease: "myBounce-squash",
                toggleActions: "play none none reverse"
                }
            }
        );
        gsap.fromTo(".leftjumbotron a",
            {opacity: 0, x: -100}, // Posisi awal diatur di sini
            {
                opacity: 1, x: 0, duration: 2.5, stagger: 0.3,
                scrollTrigger: {
                trigger: ".jumbotron",
                ease: "myBounce-squash",
                toggleActions: "play none none reverse"
                }
            }
        );
        gsap.fromTo(".fx a",
            {opacity: 0, y: 100}, // Posisi awal diatur di sini
            {
                opacity: 1, y: 0, duration: 2.7, stagger: 0.3,
                scrollTrigger: {
                trigger: ".section",
                toggleActions: "play none none reverse"
                }
            }
        );
        var modal = document.getElementById("myModal");
        var isiModals = document.getElementById("isiModals");
        var testiModal = document.getElementById("testiModal");
        var testiImage = document.getElementById("testiImage");
        var btn = document.getElementById("openModalBtn");
        var span = document.getElementsByClassName("close")[0];
        var close = document.getElementsByClassName("clsButton")[0];
        function openTesti(src) {
            testiImage.src = src;
            testiModal.style.display = "block";
        }

        function closeTestiModal() {
            testiModal.style.display = "none";
        }
        function openModal(produk) { 
            document.getElementById("isiModals").innerHTML = '<div class="clsButton" onclick="closeModal()">x</div><div class="loader"></div>Please Wait...';
            $.ajax({
                url:"<?=base_url();?>data/loadModal",
                type: "POST",
                data: {"produk" : produk},
                cache: false,
                success: function(dataResult){
                    setTimeout(() => {
                        $('#isiModals').html(dataResult);
                    }, 1000);
                }
            });
            modal.style.display = "block"; 
        }
        function closeModal() {
            modal.style.display = "none"; 
        }
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
            //console.log('Close5');
        }
        function showProduk(data){
            document.getElementById("isiModals").innerHTML = '<div class="loader"></div>Please Wait...<span>Menampilkan Produk '+data+'</span>';
            modal.style.display = "block"; 
            $.ajax({
                url:"<?=base_url();?>data/loadDataProduk",
                type: "POST",
                data: {"data" : data},
                cache: false,
                success: function(dataResult){
                    setTimeout(() => {
                        $('#idKatalogProduk').html(dataResult);
                        modal.style.display = "none"; 
                    }, 1000);
                }
            });
        }
        window.addEventListener('click', function(event) {
            if (event.target === testiModal) {
                closeTestiModal();
            }
        });

        if ('serviceWorker' in navigator) {
                navigator.serviceWorker.register("serviceworker.js");
        }
    </script>
</body>
</html>