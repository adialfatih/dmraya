<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="language" content="id">
    <meta name="title" content="DAMAY RAYA SOLUTIONS - Solusi Terbaik untuk Budidaya Pertanian dan Pestisida">
    <meta name="description" content="DAMAY RAYA SOLUTIONS menyediakan layanan konsultasi lapangan untuk budidaya pertanian khususnya pestisida. Kami berkomitmen mengawal produk pestisida dari distribusi hingga petani dengan strategi lapangan yang efektif.">
    <meta name="keywords" content="budidaya pertanian, pestisida, konsultasi pertanian, pengawalan produk, strategi lapangan, penanganan keluhan, pertanian, solusi pertanian">
    <meta name="robots" content="index, follow">
    <meta name="author" content="DAMAY RAYA SOLUTIONS">
    <meta name="copyright" content="DAMAY RAYA SOLUTIONS">
    <!-- Meta Tags Open Graph untuk Sosial Media -->
    <meta property="og:title" content="DAMAY RAYA SOLUTIONS - Solusi Terbaik untuk Budidaya Pertanian dan Pestisida">
    <meta property="og:description" content="DAMAY RAYA SOLUTIONS menyediakan layanan konsultasi lapangan untuk budidaya pertanian khususnya pestisida. Kami berkomitmen mengawal produk pestisida dari distribusi hingga petani dengan strategi lapangan yang efektif.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.damayraya.com">
    <meta property="og:image" content="https://damayraya.com/assetss/product/product.png">
    <meta property="og:locale" content="id_ID">

    <!-- Meta Tags Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="DAMAY RAYA SOLUTIONS - Solusi Terbaik untuk Budidaya Pertanian dan Pestisida">
    <meta name="twitter:description" content="DAMAY RAYA SOLUTIONS menyediakan layanan konsultasi lapangan untuk budidaya pertanian khususnya pestisida. Kami berkomitmen mengawal produk pestisida dari distribusi hingga petani dengan strategi lapangan yang efektif.">
    <meta name="twitter:image" content="https://damayraya.com/assetss/product/product.png">
    <meta name="twitter:site" content="@damayrayasolutions">

    <!-- Meta Tags Tambahan -->
    <meta name="theme-color" content="#74dba4">
    <meta name="application-name" content="DAMAY RAYA SOLUTIONS">
    <meta name="apple-mobile-web-app-title" content="DAMAY RAYA SOLUTIONS">

    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <link rel="shortcut icon" href="assetss/logo_tes.png" type="image/x-icon">
    <title>DAMAY RAYA SOLUTIONS - Solusi Terbaik untuk Budidaya Pertanian dan Pestisida</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Wittgenstein:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/ScrollTrigger.min.js"></script>
    <style>
        .fullpage {
            width:100%;
            height:100vh;
            display:flex;
            flex-direction:column;
            justify-content:center;
            align-items:center;
            padding:20px;
        }
        .fullpage p {text-align:center;}
        .fullpage img {
            width:50%;
            margin-bottom:20px;
        }
    </style>
</head>
<body>
    <div class="fullpage">
        <img src="https://damayraya.com/assetss/logo_square.png">
        <p>WEBSITE SEDANG DALAM PERBAIKAN DAN PENGEMBANGAN</p>
    </div>
    
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

    </script>
</body>
</html>