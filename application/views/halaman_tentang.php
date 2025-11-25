<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
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
    <title>Profile - DAMAY RAYA SOLUTIONS</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Wittgenstein:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?=base_url('assets/');?>style.css?v=2">
    <link rel="stylesheet" href="<?=base_url('assets/');?>responsive.css?v=2">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/ScrollTrigger.min.js"></script>
</head>
<body>
    <header class="tentang">
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
                    <a href="<?=base_url('dashboard');?>"><li >Beranda</li></a>
                    <a href="<?=base_url('produk');?>"><li >Produk</li></a>
                    <a href="<?=base_url('galleri');?>"><li >Galeri</li></a>
                    <a href="<?=base_url('tentang-kami');?>"><li class="active">Tentang Kami</li></a>
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
        
    </header>
    <main>
        <section class="company">
            <div class="leftcompany">
                <div class="squarelogo">
                    <img src="<?=base_url('assets/');?>assetss/logo_square.png" alt="Tentang Damay Raya">
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
                    <a href="<?=base_url('produk');?>" class="btnCall2" target="_blank">
                        <div class="tes">
                            <ion-icon name="grid-outline"></ion-icon>
                            Katalog Produk
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
                    <img src="<?=base_url('assets/');?>assetss/svg/konsul.svg" alt="Konsultasi Pertanian">
                    <div class="parts-isi">
                        <h3>Konsultasi Pertanian</h3>
                        <p>Memberikan solusi tepat guna untuk budidaya pertanian yang efisien.</p>
                    </div>
                </div>
                <div class="parts">
                    <img src="<?=base_url('assets/');?>assetss/svg/product.svg" alt="Pengawalan Produk">
                    <div class="parts-isi">
                        <h3>Pengawalan Produk</h3>
                        <p>Mengawal produk pestisida dari distribusi hingga aplikasi di lapangan.</p>
                    </div>
                </div>
            </div>
            <div class="layananpart">
                <div class="parts">
                    <img src="<?=base_url('assets/');?>assetss/svg/strategi.svg" alt="Strategi Lapangan">
                    <div class="parts-isi">
                        <h3>Strategi Lapangan</h3>
                        <p>Menyusun dan melaksanakan strategi aktivitas lapangan yang efektif.</p>
                    </div>
                </div>
                <div class="parts">
                    <img src="<?=base_url('assets/');?>assetss/svg/penanganan.svg" alt="Penanganan Keluhan">
                    <div class="parts-isi">
                        <h3>Penanganan Keluhan</h3>
                        <p>Responsif terhadap keluhan dan memberikan solusi yang cepat dan tepat.</p>
                    </div>
                </div>
            </div>
            <!-- <div class="clip-path-shape"></div> -->
        </section>
        
        <section class="komitment">
            <div class="komitmen-judul">
                <h2>Mengapa Memilih Kami ?</h2>
                <p><strong>DAMAY RAYA SOLUTIONS</strong> berkomitmen untuk memberikan layanan terbaik dalam pengembangan dan pengawalan produk pestisida. Dengan tim ahli yang berpengalaman, kami memastikan setiap produk yang kami distribusikan memberikan hasil optimal dan aman bagi lingkungan.
                </p>
                <div class="fxnew">
                    <div class="cardsd">
                        <img src="<?=base_url('assets/');?>assetss/svg-pengalaman.svg" alt="Pengalaman">
                        <span>Pengalaman dan Keahlian</span>
                        <p>Tim kami terdiri dari profesional berpengalaman dalam bidang pertanian dan pestisida.</p>
                    </div>
                    <div class="cardsd">
                        <img src="<?=base_url('assets/');?>assetss/svg-pendekatan-terpadu.svg" alt="Pendekatan Terpadu">
                        <span>Pendekatan Terpadu</span>
                        <p>Kami menggabungkan pengetahuan produk dengan strategi lapangan yang efektif.</p>
                    </div>
                    <div class="cardsd">
                        <img src="<?=base_url('assets/');?>assetss/svg-dukungan-pelanggan.svg" alt="Dukungan Pelanggan">
                        <span>Dukungan Pelanggan</span>
                        <p>Kami selalu siap memberikan dukungan terbaik untuk setiap pelanggan.</p>
                    </div>
                    <div class="cardsd">
                        <img src="<?=base_url('assets/');?>assetss/svg-inovasi-berkelanjutan.svg" alt="Inovasi Berkelanjutan">
                        <span>Inovasi Berkelanjutan</span>
                        <p>Kami terus berinovasi untuk memberikan solusi terbaik dan terbaru di bidang pestisida.</p>
                    </div>
                </div>
            </div>
            
        </section>
        
    </main>
    <footer>
        <div class="leftfooter">
            <div class="logofooter">
                <img src="<?=base_url('assets/');?>assetss/logo_tes.png" alt="Logo Damay Raya">
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
        var swiper = new Swiper(".mySwiper2", {
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
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
        

    </script>
</body>
</html>