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
    <title>Produk Herbisida - DAMAY RAYA SOLUTIONS</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Wittgenstein:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?=base_url('assets/');?>style.css">
    <link rel="stylesheet" href="<?=base_url('assets/');?>responsive.css">
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
                    <a href="<?=base_url('produk');?>"><li class="active">Produk</li></a>
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
        
    </header>
    <main>
        <section class="company mt0">
            <div class="newTipe">
                <div class="judulKatalog">
                    <img src="<?=base_url('assets/');?>assetss/newImage2/INSEK.png" alt="Katalog Insektisida" loading="lazy" onclick="showProduk('Insektisida')">
                    <img src="<?=base_url('assets/');?>assetss/newImage2/HERBI.png" alt="Katalog Herbisida" loading="lazy" onclick="showProduk('Herbisida')">
                    <img src="<?=base_url('assets/');?>assetss/newImage2/FUNGI.png" alt="Katalog Fungisida" loading="lazy" onclick="showProduk('Fungisida')">
                </div>
                <div class="company22">
                    <div class="leftcompanynew">
                        <div class="tesproduk">
                            <img src="<?=base_url('assets/');?>assetss/newImage2/4.png" alt="PILARBOMBA 53 / 106 SC" loading="lazy">
                        </div>
                        <h2 style="color: #016638;">PILARGOLA 400 SC</h2>
                        <h2 style="color: #016638;">Herbisida  : RAC E WSSA 14 diphenyl ether</h2>
                        <p>Formulasi : Suspension Concentrate (SC)</p>
                    </div>
                    <div class="rightcompany">
                        <h2 class="hide360" style="color: #016638;">PILARGOLA 400 SC</h2>
                        <p><strong style="color: #016638;">PILARGOLA 400 SC</strong> adalah herbisida selektif pra tumbuh berbentuk pekatan suspensi yang dapat digunakan untuk mengendalikan gulma umum pada budidaya bawang merah dengan bahan aktif Oksifluorfen.</p>
                        <p><strong style="color: #016638;">PILARGOLA 400 SC</strong> Oksifluorfen termasuk herbisida difenil eter yang mengandung fluor yang bisa menghambat sintesis klorofil. Oxyfluorfen dapat diserap oleh koleoptil atau mesokotil gulma dan kemudian mengendalikan gulma tersebut. Oxyfluorfen tidak memiliki kemanjuran sistemik serta memiliki spektrum herbisida yang luas.</p>
                        <p>Formulasi : SC ( Suspension Concentrate )</p>
                        <p>Dosis dan Keterangan :
                            <br>- 25 ml / tangki 375 ml/ha
                            <br>- Waktu aplikasi : 1 - 2 hari sebelum tanam atau 0 - 3 HST
                            <br>- Volume semprot :240 L /HA
                        </p>
                    </div>
                </div>
                <div class="company22 mt30">
                    <div class="setdiv">
                        <strong>GULMA SASARAN :</strong>
                        <ol>
                            <li><em>Leptochloa chinensis</em> ( Gulma Rumput )</li>
                            <li><em>Portulaca oleracea</em> ( Gulma daun lebar )</li>
                            <li><em>Fimbristylis littoralis</em> ( Gulma Teki )</li>
                            <li><em>Echinocloa</em> ( Gulma Rumput )</li>
                            <li><em>Cyperus sp</em> ( Rumput Teki )</li>
                        </ol>
                        <div class="imgManfaat">
                            <img src="<?=base_url('assets/');?>assetss/newImage2/pilargola-1.png" alt="Echinocloa crus-gali ( Gulma Rumput )" loading="lazy">
                            <img src="<?=base_url('assets/');?>assetss/newImage2/pilargola-2.png" alt="Cyperus sp ( Gulma Teki )" loading="lazy">
                            <img src="<?=base_url('assets/');?>assetss/newImage2/pilargola-3.png" alt="Fimbristylis littoralis" loading="lazy">
                            <img src="<?=base_url('assets/');?>assetss/newImage2/pilargola-4.png" alt="Portulaca oleracea ( Gulma daun lebar )" loading="lazy">
                            <img src="<?=base_url('assets/');?>assetss/newImage2/pilargola-5.png" alt="Amaranthus spinosus ( Gulma daun lebar )" loading="lazy">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="pemisah">&nbsp;</div>
        
        <section class="company">
            <div class="newTipe">
                <div class="company22">
                    <div class="leftcompanynew">
                        <div class="tesproduk">
                            <img src="<?=base_url('assets/');?>assetss/newImage2/8.png" alt="PILARBOMBA 53 / 106 SC" loading="lazy">
                        </div>
                        <h2 style="color: #016638;">PILARSPIRIT 20 / 147 OD</h2>
                        <h2 style="color: #016638;">Group : B/A HERBISIDA</h2>
                        <p>Bahan Aktif : Cyhalofop-butyl 147 g/l + Penoxsulam 20 g/l</p>
                    </div>
                    <div class="rightcompany">
                        <h2 class="hide360" style="color: #016638;">PILARSPIRIT 20 / 147 OD</h2>
                        <p><strong style="color: #016638;">PILARSPIRIT 20 / 147 OD</strong>  adalah herbisida sistemik purna tumbuh berbentuk minyak yang dapat didispersikan dalam air untuk mengendalikan gulma umum pada budidaya padi sawah.</p>
                        <p>Formulasi : Oil Dispersion (OD)</p>
                    </div>
                </div>
                <div class="company22 mt30">
                    <div class="setdiv">
                        <strong>KETERANGAN DAN DOSIS</strong>
                        <ol>
                            <li>1000 ml/ha</li>
                            <li>Waktu aplikasi : 7 – 12 HST atau saat gulma berdaun 2-4 helai</li>
                            <li>Volume semprot : 240 – 300 L /HA</li>
                            <li>Gulma Sasaran : </li>
                        </ol>
                        <div class="imgManfaat">
                            <img src="<?=base_url('assets/');?>assetss/newImage2/pilargola-4.png" alt="Echinocloa crus-gali ( Jawan )" loading="lazy">
                            <img src="<?=base_url('assets/');?>assetss/newImage2/pilargola-5.png" alt="Cyperus sp ( Rumput Teki )" loading="lazy">
                            <img src="<?=base_url('assets/');?>assetss/newImage2/pilarspirit-3.png" alt="Cyperus sp ( Rumput Teki )" loading="lazy">
                            <img src="<?=base_url('assets/');?>assetss/newImage2/pilarspirit-4.png" alt="Cyperus sp ( Rumput Teki )" loading="lazy">
                            <img src="<?=base_url('assets/');?>assetss/newImage2/pilarspirit-5.png" alt="Cyperus sp ( Rumput Teki )" loading="lazy">
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
        <section class="microtext">
            Jangan biarkan hama merusak usaha keras Anda. Dapatkan obat hama terbaik dari kami dan nikmati hasil panen yang melimpah serta berkualitas tinggi. Yuk, mulai sekarang juga dan lihat perbedaannya!
        </section>
    </main>
    <div id="myModal" class="modal">
        <!-- Modal content -->
        <div class="modal-content" id="isiModals">
            <div class="loader"></div>
            Please Wait...
        </div>
    </div>
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
        var btn = document.getElementById("openModalBtn");
        var span = document.getElementsByClassName("close")[0];
        var close = document.getElementsByClassName("clsButton")[0];
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
                        document.location.href = "<?=base_url();?>produk/"+data;
                    }, 1500);
                }
            });
        }
    </script>
</body>
</html>