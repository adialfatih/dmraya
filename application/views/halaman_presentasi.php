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

    <meta property="og:title" content="<?=$seoTitle;?>">
    <meta property="og:description" content="<?=$seoDesc;?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.damayraya.com">
    <meta property="og:image" content="https://damayraya.com/<?=base_url('logo/logo.png');?>">
    <meta property="og:locale" content="id_ID">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?=$seoTitle;?>">
    <meta name="twitter:description" content="<?=$seoDesc;?>">
    <meta name="twitter:image" content="https://damayraya.com/<?=base_url('logo/logo.png');?>">
    <meta name="twitter:site" content="@damayrayasolutions">

    <meta name="theme-color" content="#74dba4">
    <meta name="application-name" content="DAMAY RAYA SOLUTIONS">
    <meta name="apple-mobile-web-app-title" content="DAMAY RAYA SOLUTIONS">

    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <link rel="shortcut icon" href="<?=base_url('assets/');?>assetss/logo_tes.png" type="image/x-icon">
    <title><?=$seoTitle;?></title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Wittgenstein:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?=base_url('assets/');?>style.css?v=92">
    <link rel="stylesheet" href="<?=base_url('assets/');?>responsive.css?v=09">
</head>
<body>
    <header class="auto">
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
                    <a href="<?=base_url('dashboard');?>"><li>Beranda</li></a>
                    <a href="<?=base_url('produk');?>"><li>Produk</li></a>
                    <a href="<?=base_url('galleri');?>"><li>Galeri</li></a>
                    <a href="<?=base_url('tentang-kami');?>"><li>Tentang Kami</li></a>
                    <a href="<?=base_url('presentasi-produk');?>"><li class="active">Presentasi Produk</li></a>
                </ul>
            </nav>
            <div class="rightnav">
                <div class="search-box">
                    <ion-icon name="search-outline"></ion-icon>
                    <input type="text" placeholder="Cari produk...">
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
                        <a href="<?=base_url('galleri');?>"><li>Galeri</li></a>
                        <a href="<?=base_url('tentang-kami');?>"><li>Tentang Kami</li></a>
                        <a href="<?=base_url('presentasi-produk');?>"><li>Presentasi Produk</li></a>
                    </ul>
                </nav>
            </div>
        </div>

        <div class="ppt-hero" style="font-size:10px;">
            <h1>Presentasi Produk Damay Raya Solutions</h1>
            <p>Lihat penjelasan lengkap setiap produk dalam bentuk presentasi interaktif.</p>
        </div>
    </header>

    <main class="ppt-main">
        <section class="ppt-section">
            <div class="ppt-grid">
                <?php foreach ($products as $p): ?>
                    <div class="ppt-card" onclick="openPptModal('<?=htmlspecialchars($p['viewer_url'], ENT_QUOTES);?>')">
                        <div class="ppt-thumb">
                            <img src="<?=$p['thumbnail'];?>" alt="<?=$p['nama'];?>" loading="lazy">
                        </div>
                        <div class="ppt-body">
                            <span class="ppt-kategori"><?=$p['kategori'];?></span>
                            <h3 class="ppt-title"><?=$p['nama'];?></h3>
                            <button type="button" class="ppt-btn">
                                <ion-icon name="play-circle-outline"></ion-icon>
                                Lihat Presentasi
                            </button>
                        </div>
                    </div>
                    
                <?php endforeach; ?>
            </div>
        </section>
    </main>

    <!-- Modal Viewer PPT -->
    <div id="pptModal" class="modal">
        <div class="modal-content ppt-modal-content">
            <div class="clsButton" onclick="closePptModal()">x</div>
            <div class="ppt-frame-wrapper">
                <iframe id="pptFrame" src="" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="ppt-modal-footer">
                <a id="pptDownloadLink" href="#" target="_blank">Download PowerPoint</a>
            </div>
        </div>
    </div>

    <!-- Footer sama seperti halaman_utama -->
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

    <script>
        function cekbox(){
            var x = document.getElementById("cekobox");
            var menu = document.getElementById("mobile-menu");
            if(x.checked == true){
                x.value = "1";
                menu.classList.remove('show');
                menu.classList.add('close');
            }else{
                x.value = "0";
                menu.classList.add('show');
                menu.classList.remove('close');
            }
        }

        // Modal PPT
        const pptModal        = document.getElementById('pptModal');
        const pptFrame        = document.getElementById('pptFrame');
        const pptDownloadLink = document.getElementById('pptDownloadLink');

        function openPptModal(viewUrl) {
            pptFrame.src = viewUrl;
            // download link pakai src asli PPT dari parameter embed
            try {
                const urlObj = new URL(viewUrl);
                const src    = urlObj.searchParams.get('src');
                if (src) {
                    pptDownloadLink.href = src;
                }
            } catch(e) {
                pptDownloadLink.href = '#';
            }
            pptModal.style.display = 'block';
        }

        function closePptModal() {
            pptModal.style.display = 'none';
            pptFrame.src = '';
        }

        window.addEventListener('click', function(e) {
            if (e.target === pptModal) {
                closePptModal();
            }
        });
    </script>
</body>
</html>
