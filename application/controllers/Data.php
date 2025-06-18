<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends CI_Controller
{
  function __construct()
  {
      parent::__construct();
  }
   
  function index(){
      echo "Error Token..";
  }
  public function loadModal(){
        $produk = $this->input->post('produk');
        if($produk == "pilarbomba"){
            ?>
            <div class="clsButton" onclick="closeModal()">x</div>
            <div style="width:100%;display:flex;flex-direction:column;gap:10px;">
                <img src="<?=base_url('assets/assetss/newImage2/2.png');?>" alt="Pilar Bomba" style="width:300px;">
                <h2 style="color: red;">PILARBOMBA 53 / 106 SC</h2>
                <p style="text-align: justify;"><strong style="color: red;">PILARBOMBA 53 / 106 SC</strong> adalah insektisida untuk pencegahan serta pengendali hama wereng, hama pelipat daun pada tanaman padi serta hama thrips tabaci, ulat grayak pada tanaman bawang merah, serta untuk kutu-kutuan.</p>
                <p style="text-align: justify;"><strong style="color: red;">PILARBOMBA 53 / 106 SC</strong> memiliki cara kerja yang unik dari perpaduan dua bahan aktif tolfenpyrad dan lufenuron. Tolfenpyrad merupakan bahan aktif yang tergolong dalam insektisida dan akarisida, juga bersifat sebagai fungisida. Lufenuron sebagai booster racun kontak yang melengkapi bahan aktif lain serta sebagai ovisidal pada telur serangga (telur bungker).</p>
                <p style="font-size:14px;">
                    Bahan Aktif : Lufenuron 53 g/l + Tolfenpyrad 106 g/l<br>
                    Group : <strong>15 / 21 A</strong> INSEKTISIDA<br>
                    Formulasi : SC ( <em>Suspension Concentrate</em> )
                </p>
                <p style="font-weight: bold;">Manfaat untuk tanaman padi :</p>
                <ol style="margin-left:20px;">
                    <li>Untuk mengendalikan hama wereng, pelipat daun dan penggerek batang padi</li>
                    <li>Efek ovisidal pada telur serangga (telur bungker)</li>
                    <li>Daun pada tanaman padi terlihat lebih hijau, batang tanaman lebih kokoh, serta mengoptimalkan jumlah anakan</li>
                    <li>Menghambat reproduksi serangga (mandul)</li>
                    <li>Aman bagi tanaman (tidak toxic)</li>
                </ol>
                <p style="font-weight: bold;">Manfaat untuk tanaman bawang merah :</p>
                <ol style="margin-left:20px;">
                    <li>Untuk mengendalikan ulat grayak dan kutu-kutuan</li>
                    <li>Efek ovisidal pada telur serangga (telur bungker)</li>
                    <li>Batang tanaman lebih kokoh dan daun lebih hijau</li>
                    <li>Menghambat reproduksi serangga (mandul)</li>
                    <li>Aman bagi tanaman (tidak toxic)</li>
                </ol>
            </div>
            <?php
        } 
        elseif($produk == "pilartrust"){
            ?>
            <div class="clsButton" onclick="closeModal()">x</div>
            <div style="width:100%;display:flex;flex-direction:column;gap:10px;">
                <img src="<?=base_url('assets/assetss/newImage2/3.png');?>" alt="PILARTRUST 100 SC" style="width:300px;">
                <h2 style="color: red;">PILARTRUST 100 SC</h2>
                <p style="text-align: justify;"><strong style="color: red;">PILARTRUST 100 SC</strong> adalah insektisida racun kontak dan lambung berbentuk pekatan suspense untuk mengendalikan penggorok daun (<em>Liriomyza chinensis</em>) pada tanaman bawang merah, dan penggerek batang pada tanaman padi serta hama ulat kubis (<em>Pluttela xylostella</em>)</p>
                
                <p style="font-size:14px;">
                    Bahan Aktif : Spinosad 100 g/l<br>
                    Group : <strong>5</strong> INSEKTISIDA<br>
                    Formulasi : SC ( <em>Suspension Concentrate</em> )
                </p>
                <p style="font-weight: bold;">Manfaat untuk tanaman padi :</p>
                <ol style="margin-left:20px;">
                    <li>Mengendalikan penggerek batang dan HPP pada tanaman padi</li>
                    <li>Recovery dari serangan 5-7 hari</li>
                    <li>Durasi perlindungan 7-10 hari</li>
                    <li>Daun lebih hijau dan sehat, serta memaksimalkan potensi jumlah anakan</li>
                    <li>Aman bagi tanaman (tidak toxic)</li>
                </ol>
                <p style="font-weight: bold;">Manfaat untuk tanaman bawang merah :</p>
                <ol style="margin-left:20px;">
                    <li>Pengendali Ulat grayak, Liriomyza chinensis dan thrips</li>
                    <li>Batang ( Jalang ) kokoh, lebih besar dan daun lebih hijau</li>
                    <li>Aman bagi tanaman dan tidak toxic ( tidak mutik )</li>
                </ol>
            </div>
            <?php
        }
        elseif($produk == "pilargola"){
            ?>
            <div class="clsButton" onclick="closeModal()">x</div>
            <div style="width:100%;display:flex;flex-direction:column;gap:10px;">
                <img src="<?=base_url('assets/assetss/newImage2/4.png');?>" alt="PILARGOLA 400 SC" style="width:300px;">
                <h2 style="color: #d7be12;">PILARGOLA 400 SC</h2>
                <p style="text-align: justify;"><strong style="color: #d7be12;">PILARGOLA 400 SC</strong> adalah herbisida selektif pra tumbuh berbentuk pekatan suspensi yang dapat digunakan untuk mengendalikan gulma umum pada budidaya bawang merah dengan bahan aktif Oksifluorfen</p>
                <p>Oksifluorfen termasuk herbisida difenil eter yang mengandung fluor yang bisa menghambat sintesis klorofil. Oxyfluorfen dapat diserap oleh koleoptil atau mesokotil gulma dan kemudian mengendalikan gulma tersebut. Oxyfluorfen tidak memiliki kemanjuran sistemik serta memiliki spektrum herbisida yang luas.</p>
                <p style="font-size:14px;">
                    Golongan, Herbisida  : RAC E WSSA 14 diphenyl ether
                    <br>
                    Formulasi : SC ( <em>Suspension Concentrate</em> )<br>
                    Dosis : 25 ml/tangki 375 ml/ha<br>
                    Waktu Aplikasi : 1-2 hari sebelum tanam
                </p>
                <p style="font-weight: bold;">Gulma Sasaran :</p>
                <ol style="margin-left:20px;">
                    <li>Gulma Rumput (<em>Echinocloa crus-gali</em>)</li>
                    <li>Gulma Teki (<em>Cyperus sp</em>)</li>
                    <li><em>Fimbristylis Littoralis</em></li>
                    <li>Gulma Daun Lebar (<em>Portulaca oleracea</em>)</li>
                    <li>Gulma Daun Lebar (<em>Amaranthus spinosus</em>)</li>
                </ol>
                
            </div>
            <?php
        }
        elseif($produk == "pilarzox"){
            ?>
            <div class="clsButton" onclick="closeModal()">x</div>
            <div style="width:100%;display:flex;flex-direction:column;gap:10px;">
                <img src="<?=base_url('assets/assetss/newImage2/7.png');?>" alt="PILARZOX 85 / 170 SC" style="width:300px;">
                <h2 style="color: #990be1;">PILARZOX 85 / 170 SC</h2>
                <p style="text-align: justify;"><strong style="color: #990be1;">PILARZOX 85 / 170 SC</strong> adalah Fungisida untuk mengendalikan penyakit bulai berbulu halus pada tanaman bawang merah, serta penyakit busuk daun pada tanaman bawang merah tomat, cabai kentang, daun bawang, dan kubis.</p>
                <p>Efek bahan aktif cyazofamid memiliki efek tahan terhadap hujan, setelah penyemprotan reagen dapat bekerja secara efektif menempel pada daun, cyazofamid juga memiliki efek residual yang panjang, sedangkan penyemprotan merata cyamoxanil dapat secara efisien mengendalikan penyakit dibagian bawah daun.</p>
                <p style="text-align: justify;"><strong style="color: #990be1;">PILARZOX 85 / 170 SC</strong> memiliki keunggulan yaitu dapat melindungi tanaman dari penyakit Oomycetes dan mengobati tanaman yang sakit. Satu produk yang memiliki dua fungsi.</p>
                <p style="font-size:14px;">
                    Bahan Aktif : Cyazofamid 85 g/l + Cyamoxanil 170 g/l<br>
                    Formulasi : SC ( <em>Suspension Concentrate</em> )<br>
                </p>
                <p style="font-weight: bold;">Manfaat penggunaan pada tanaman :</p>
                <ol style="margin-left:20px;">
                    <li>Mengendalikan penyakit bulai berbulu halus</li>
                    <li>Mengendalikan penyakit busuk daun</li>
                    <li>Membangun pertahanan yang kuat terhadap penyakit Oomycetes</li>
                    <li>Dapat terserap ke tanaman lebih cepat</li>
                    <li>Tahan terhadap hujan</li>
                </ol>
                
            </div>
            <?php
        }
        elseif($produk == "pilarspirit"){
            ?>
            <div class="clsButton" onclick="closeModal()">x</div>
            <div style="width:100%;display:flex;flex-direction:column;gap:10px;">
                <img src="<?=base_url('assets/assetss/newImage2/8.png');?>" alt="PILARSPIRIT 20 / 147 OD" style="width:300px;">
                <h2 style="color: #d7be12;">PILARSPIRIT 20 / 147 OD</h2>
                <p style="text-align: justify;"><strong style="color: #d7be12;">PILARSPIRIT 20 / 147 OD</strong> adalah herbisida sistemik purna tumbuh berbentuk minyak yang dapat didispersikan dalam air untuk mengendalikan gulma umum pada budidaya padi sawah.</p>
                <p style="font-size:14px;">
                    Bahan Aktif : Cyhalofop-butyl 147 g/l + Penoxsulam 20 g/l<br>
                    Group : <strong>B/A</strong> HERBISIDA<br>
                    Formulasi : <em>Oil Dispersion</em> (OD)<br>
                    Dosis : 1000 ml/ha<br>
                    Waktu Aplikasi : 7-12 HST saat gulma berdaun 2-4 helai
                </p>
                <p style="font-weight: bold;">Gulma Sasaran :</p>
                <ol style="margin-left:20px;">
                    <li>Jawan (<em>Echinocloa crus-gali</em>)</li>
                    <li>Rumput Teki (<em>Cyperus sp</em>)</li>
                    <li>Gulma Rumput (<em>Leptochloa Chinensis</em>)</li>
                    <li>Cacabean (<em>Ludwigia Octavialis</em>)</li>
                    <li>Eceng (<em>Monochoria Vaginalis</em>)</li>
                </ol>
                
            </div>
            <?php
        }
        elseif($produk == "pilartebu"){
            ?>
            <div class="clsButton" onclick="closeModal()">x</div>
            <div style="width:100%;display:flex;flex-direction:column;gap:10px;">
                <img src="<?=base_url('assets/assetss/newImage2/9.png');?>" alt="PILARTEBU 430 SC" style="width:300px;">
                <h2 style="color: #990be1;">PILARTEBU 430 SC</h2>
                <p style="text-align: justify;"><strong style="color: #990be1;">PILARTEBU 430 SC</strong> adalah fungisida sistemik yang bersifat protektif, kuratif, dan eradikatif berbentuk pekatan suspensi dan digunakan untuk mengendalikan penyakit bercak ungu Alternaria porri untuk tanaman bawang merah.</p>
                <p>Tebuconazole bekerja dengan cara membunuh pathogen atau menghambat aktivitasnya sebelum menyerang, sehingga tanaman dapat dilindungi dari kerusakan, serta menghambat atau membunuh pathogen di dalam dan luar tanaman agar penyakit tidak bertambah parah dan juga menghambat atau membunuh jamur secara keseluruhan pada bagian yang terkena penyakit.</p>
                <p>Tebuconazole dapat secara efisien mengendalikan berbagai divisi jamur, termasuk Ascomycota, Basidiomycota dan sebagainya. Kemanjuran sistemik yang dapat ditularkan melalui xylem, tebucozole memiliki permeabilitas yang baik sehingga mudah diserap daun</p>
                <p style="font-size:14px;">
                    Bahan Aktif : Tebuconazole 430 g/l<br>
                    Group : <strong>3/G1</strong> FUNGISIDA<br>
                    Formulasi : SC ( <em>Suspension Concentrate</em> )<br>
                </p>
                <p style="font-weight: bold;">Manfaat penggunaan pada tanaman :</p>
                <ol style="margin-left:20px;">
                    <li>Mengendalikan penyakit busuk daun</li>
                    <li>Mengendalikan malai palsu pada tanaman padi</li>
                    <li>Mengendalikan penyakit antraknosa</li>
                    <li>Mengendalikan penyakit bercak ungu pada tanaman bawang merah</li>
                    <li>Dapat mengendalikan berbagai jenis penyakit yang disebabkan oleh jamur</li>
                </ol>
                
            </div>
            <?php
        }
        elseif($produk == "pilarmectin"){
            ?>
            <div class="clsButton" onclick="closeModal()">x</div>
            <div style="width:100%;display:flex;flex-direction:column;gap:10px;">
                <img src="<?=base_url('assets/assetss/newImage2/10.png');?>" alt="PILARMECTIN 53 CS" style="width:300px;">
                <h2 style="color: red;">PILARMECTIN 53 CS</h2>
                <p style="text-align: justify;"><strong style="color: red;">PILARMECTIN 53 CS</strong> adalah insektisida racun kontak dan lambung berbentuk pekatan suspensi untuk mengendalikan pwnggerek polong Etiella zinckenella pada tanaman kedelai, dan hama pelipat daun pada tanaman padi.</p>
                <p>Abamectin memiliki spectrum insektisida yang luas, Abamectin mengganggu fungsi fisiologisaktivitas saraf dan merangsangpelepasan <font style="color:red;">asam y-aminobutyric (GABA)</font> ke  menghambat konduksi saraf, Abamectin dengan baik menembus ke dalam daun</p>
                <p>Dengan teknik pelepasan bertahap PILARQUIM, <strong style="color: red;">PILARMECTIN 53 CS</strong> dapat melepaskan  abamektin secara perlahan dan memberikan perlindungan tanaman yang tahan lama</p>
                <p style="font-size:14px;">
                    Bahan Aktif : Abamectin 53 g/l<br>
                    Golongan : INSEKTISIDA <strong>Avermectins</strong><br>
                    Formulasi : <em>Capsulated Suspension</em> (CS)<br>
                </p>
                <p style="font-weight: bold;">Manfaat Penggunaan Pada Tanaman : </p>
                <ol style="margin-left:20px;">
                    <li>Mengendalikan hama pelipat daun pada tanaman padi</li>
                    <li>Mengendalikan hama penggerek batang pada tanaman jagung</li>
                    <li>Mengendalikan Simpul akar pada tanaman bawang merah</li>
                    <li>Perlindungan yang tahan lama</li>
                    <li>Aman bagi tanaman (tidak toxic)</li>
                </ol>
                
            </div>
            <?php
        }
        elseif($produk == "pilarcobre"){
            ?>
            <div class="clsButton" onclick="closeModal()">x</div>
            <div style="width:100%;display:flex;flex-direction:column;gap:10px;">
                <img src="<?=base_url('assets/assetss/newImage2/11.png');?>" alt="PILARCOBRE 545 SC" style="width:300px;">
                <h2 style="color: #990be1;">PILARCOBRE 545 SC</h2>
                <p style="text-align: justify;"><strong style="color: #990be1;">PILARCOBRE 545 SC</strong> Bakterisida yang bersifat protektif berbentuk pekatan suspensi untuk mengendalikan jamur dan bakteri, pada tanaman padi dapat digunakan untuk mengendalikan penyakit hawar daun bakteri <em>Xanthomonas oryzae</em>.</p>
                <p>Tembaga Hidroksida Bahan aktif yang efektif untuk mengendalikan penyakit pada tanaman yang disebabkan oleh bakteri, oleh karena itu fungisida dengan bahan aktif Tembaga hidroksida bisa juga disebut dengan bakterisda. Fungisida dengan bahan aktif tembaga hidroksida bekerja secara kontak. Fungisida dengan bahan aktif ini juga bekerja dengan spektrum yang luas.</p>
                <p style="font-size:14px;">
                    Bahan Aktif : Tembaga Hidroksida 545 g/l<br>
                    Group : M1 / M BACTERICIDE<br>
                    Formulasi : SC ( <em>Suspension Concentrate</em> )<br>
                </p>
                <p style="font-weight: bold;">Manfaat penggunaan pada tanaman :</p>
                <ol style="margin-left:20px;">
                    <li>Pada Tanaman Padi : <br>
                        <ul style="margin-left:20px;">
                            <li>Mengendalikan penyakit bulai (<em>Peronosclerospora maydis</em>)</li>
                            <li>Mengendalikan penyakit kresek (bakteri <em>Xanthomonas oryzae</em>)</li>
                            <li>Mengendalikan penyakit blas (<em>Pyriacularia oryzae</em>)</li>
                        </ul>
                    </li>
                    <li>Pada Tanaman Cabai : <br>
                        <ul style="margin-left:20px;">
                            <li>Mengendalikan penyakit patek atau Antraknosa penyakit yang disebabkan oleh jamur <em>Colletotricum capsici</em></li>
                        </ul>
                    </li>
                </ol>
                
            </div>
            <?php
        }
        elseif($produk == "pilarchess"){
            ?>
            <div class="clsButton" onclick="closeModal()">x</div>
            <div style="width:100%;display:flex;flex-direction:column;gap:10px;">
                <img src="<?=base_url('assets/assetss/newImage2/5.png');?>" alt="PILARCHESS 60 WG" style="width:300px;">
                <h2 style="color: red;">PILARCHESS 60 WG</h2>
                <p style="text-align: justify;"><strong style="color: red;">PILARCHESS 60 WG</strong> adalah insektisida sistemik racun lambung berbentuk butiran yang dapat dispersikan dalam air untuk mengendalikan wereng batang coklat Nilaparvata lugens pada tanaman padi.</p>
                <p>Pymetrozine memiliki mekanisme menghambat penetrasi stilet hama dengan lokasi aksi yaitu pada system saraf pusat serangga</p>
                <p>Pymetrozine terutama menular melalui xylem pada tanaman dengan alur dari bawah ke atas, pymetrozine secara mirror menular melalui floam pada tumbuhan dengan alur dari atas ke bawah. Setelah pymetrozine disemprotkan ke permukaan tanaman, zat tersebut dapat meresap ke dalam tubuh tanaman, pymetrozine juga dapat mengendalikan hama penusuk – penghisap dengan baik.</p>
                <p>Pymetrozine memiliki tingkat toksisitas yang rendah ke makhluk lainnya, pymetrozine juga mudah terdegradasi di lingkungan sehingga ramah lingkungan.</p>
                <p style="font-size:14px;">
                    Bahan Aktif : Pymetrozine 60%<br>
                    Formulasi : <em>Water Dispersible Granule </em>(WG)<br>
                </p>
                <p style="font-weight: bold;">Manfaat Penggunaan Pada Tanaman : </p>
                <ol style="margin-left:20px;">
                    <li>Mengendalikan hama wereng coklat dan hijau</li>
                    <li>Mengendalikan hama kutu kebul</li>
                    <li>Mengendalikan hama kutu loncat</li>
                    <li>Mengendalikan hama kutu daun</li>
                </ol>
                
            </div>
            <?php
        }
        elseif($produk == "pilarcabrio"){
            ?>
            <div class="clsButton" onclick="closeModal()">x</div>
            <div style="width:100%;display:flex;flex-direction:column;gap:10px;">
                <img src="<?=base_url('assets/assetss/newImage2/6.png');?>" alt="PILARCABRIO 55 / 5 WG" style="width:300px;">
                <h2 style="color: #990be1;">PILARCABRIO 55 / 5 WG</h2>
                <p style="text-align: justify;"><strong style="color: #990be1;">PILARCABRIO 55 / 5 WG</strong> adalah Fungisida sistemik protektif dan kuratif berbentuk butiran yang dapat didispersikan dalam air untuk mengendalikan penyakit busuk daun Phytopthora infestans pada tanaman kentang.</p>
                <p style="text-align: justify;"><strong style="color: #990be1;">PILARCABRIO 55 / 5 WG</strong> memiliki spectrum fungisida yang luas, Pyraclostrobin dapat secara efisien mengendalikan berbagai divisi jamur Oomycota, Ascomycota, Basidiomycota. Pyraclostrobin memiliki sifat kimia yang stabil sehingga dapat memberikan khasiatnya dengan jangka waktu lama. Metiram tersendiri dapat membentuk lapisan pelindung padat pada permukaan tanaman untuk mencegah terinfeksi oleh pantogen.</p>

                <p style="font-size:14px;">
                    Bahan Aktif : Pyraclostrobin 5% + Metiran 55 %<br>
                    Group : M1 / M BACTERICIDE<br>
                    Formulasi : <em>Water Dispersible Granule</em>  (WG)<br>
                </p>
                <p style="font-weight: bold;">Manfaat penggunaan pada tanaman :</p>
                <ol style="margin-left:20px;">
                    <li>Mengendalikan penyakit Antraknosa</li>
                    <li>Mengendalikan penyakit busuk daun dan busuk buah</li>
                    <li>Meningkatkan ketahanan tanaman</li>
                    <li>Aman untuk tanaman</li>
                </ol>
                
            </div>
            <?php
        }
        elseif($produk == "pilarwin"){
            ?>
            <div class="clsButton" onclick="closeModal()">x</div>
            <div style="width:100%;display:flex;flex-direction:column;gap:10px;">
                <img src="<?=base_url('assets/assetss/newImage2/1.png');?>" alt="PILARWIN 112 / 168 ZC" style="width:300px;">
                <h2 style="color: #990be1;">PILARWIN 112 / 168 ZC</h2>
                <p style="text-align: justify;"><strong style="color: #990be1;">PILARWIN 112 / 168 ZC</strong> adalah Fungisida yang bersifat protektif berbentuk pekatan suspensi untuk mengendalikan penyakit blas Pyricularia oryzae, penyakit busuk daun pelepah, dan malai palsu pada tanaman padi serta penyakit layu fusarium (penyakit moler) dan penyakit bercak ungu pada bawang merah.</p>
                <p style="text-align: justify;">Fenoxsanil memiliki kemanjuran sistemik. Fenoxanil dapat menghambat   pelepasan dan penyebaran spora pada penyakit lesi, yang masih bisa bekerja bahkan 40 hari setelah aplikasi, fenoxsanil juga memiliki khasiat residu yang tahan lama, yang dapat memberikan perlindungan yang baik untuk daun baru.</p>
                <p style="text-align: justify;">Prochloraz memiliki cara kerja untuk menghambat biosintesis dari ergostrol. Menyebabkan gangguan pada pembentukan dinding sel jamur, sehingga menghancurkan dan membunuh jamur.</p>

                <p style="font-size:14px;">
                    Bahan Aktif : Fenoksanil 112 g/l + Prokloraz 168 g/l<br>
                    Golongan, Fungisida : Fenoksanil : MBI-D, propionamide Prokloraz: DMI imidazolez<br>
                    Formulasi : ZC (Campuran CS dan SC)<br>
                </p>
                <p style="font-weight: bold;">Manfaat penggunaan pada tanaman PADI :</p>
                <ol style="margin-left:20px;">
                    <li>Mengendalikan penyakit blast pada tanaman padi</li>
                    <li>Mengendalikan penyakit busuk pelepah pada tanaman padi dan malai palsu</li>
                    <li>Mengendalikan penyakit asem aseman pada fase vegetatif</li>
                    <li>Batang bersih terhindar dari bercak coklat dan daun lebih hijau</li>
                </ol>
                <p style="font-weight: bold;">Manfaat penggunaan pada tanaman BAWANG MERAH :</p>
                <ol style="margin-left:20px;">
                    <li>Mengendalikan bercak ungu pada tanaman bawang merah</li>
                    <li>Mengendalikan layu fusarium (penyakit moler)</li>
                    <li>Daun lebih hijau dan batang lebih kokoh</li>
                </ol>
            </div>
            <?php
        }
        else {
            echo "Produk yang Anda Cari Tidak ditemukan...";
            echo '<div class="clsButton" onclick="closeModal()">x</div>';
        }

  }

  function loadDataProduk(){
    $produk = $this->input->post('data');
    if($produk == "Insektisida"){
        ?>
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
                        <img src="<?=base_url('assets/');?>assetss/newImage2/10.png" alt="PILARMECTIN 53 CS" loading="lazy">
                        <div class="desc">
                            <h3 class="teksInsek">PILARMECTIN 53 CS</h3>
                            <p>Bahan Aktif : Abamectin 53 g/l</p>
                            <p><strong class="teksInsek">PILARMECTIN sangat ampuh melepaskan abamektin</strong> secara perlahan dan memberikan perlindungan tanaman yang tahan lama.</p>
                            <a href="javascript:void(0);" onclick="openModal('pilarmectin')"><div class="btnin-action">Selengkapnya</div></a>
                        </div>
                        
                    </div>
                </div>
        <?php
    } elseif($produk == "Herbisida"){
        ?>
                <div class="dtproduk">
                    <div class="wrapper23">
                        <img src="<?=base_url('assets/');?>assetss/newImage2/4.png" alt="PILARGOLA 400 SC" loading="lazy">
                        <div class="desc">
                            <h3 class="teksHerbi2">PILARGOLA 400 SC</h3>
                            <p>Golongan, Herbisida  : RAC E WSSA 14 diphenyl ether</p>
                            <p><strong class="teksHerbi2">Herbisida selektif pra tumbuh berbentuk pekatan suspensi</strong>  yang dapat digunakan untuk mengendalikan gulma umum pada budidaya bawang merah dengan bahan aktif Oksifluorfen.</p>
                            <a href="javascript:void(0);" onclick="openModal('pilargola')"><div class="btnin-action">Selengkapnya</div></a>
                        </div>
                        
                    </div>
                </div>
                <div class="dtproduk">
                    <div class="wrapper23">
                        <img src="<?=base_url('assets/');?>assetss/newImage2/8.png" alt="PILARSPIRIT 20 / 147 OD" loading="lazy">
                        <div class="desc">
                            <h3 class="teksHerbi2">PILARSPIRIT 20 / 147 OD</h3>
                            <p>Bahan Aktif : Cyhalofop-butyl 147 g/l + Penoxsulam 20 g/l</p>
                            <p><strong class="teksHerbi2">Herbisida sistemik purna tumbuh berbentuk minyak</strong>  yang dapat didispersikan dalam air untuk mengendalikan gulma umum pada budidaya padi sawah.</p>
                            <a href="javascript:void(0);" onclick="openModal('pilarspirit')"><div class="btnin-action">Selengkapnya</div></a>
                        </div>
                        
                    </div>
                </div>
        <?php
    } elseif($produk == "Fungisida"){
        ?>
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
                        <img src="<?=base_url('assets/');?>assetss/newImage2/6.png" alt="PILARCABRIO 55 / 5 WG" loading="lazy">
                        <div class="desc">
                            <h3 class="teksFungi">PILARCABRIO 55 / 5 WG</h3>
                            <p>Bahan Aktif : Pyraclostrobin 5% + Metiran 55 %</p>
                            <p><strong class="teksFungi">Fungisida sistemik protektif dan kuratif</strong> berbentuk butiran yang dapat didispersikan dalam air untuk mengendalikan penyakit busuk daun Phytopthora infestans pada tanaman kentang</p>
                            <a href="javascript:void(0);" onclick="openModal('pilarcabrio')"><div class="btnin-action">Selengkapnya</div></a>
                        </div>
                        
                    </div>
                </div>
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
        <?php
    } else {
        ?>
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
                <div class="dtproduk">
                    <div class="wrapper23">
                        <img src="<?=base_url('assets/');?>assetss/newImage2/4.png" alt="PILARGOLA 400 SC" loading="lazy">
                        <div class="desc">
                            <h3 class="teksHerbi2">PILARGOLA 400 SC</h3>
                            <p>Golongan, Herbisida  : RAC E WSSA 14 diphenyl ether</p>
                            <p><strong class="teksHerbi2">Herbisida selektif pra tumbuh berbentuk pekatan suspensi</strong>  yang dapat digunakan untuk mengendalikan gulma umum pada budidaya bawang merah dengan bahan aktif Oksifluorfen.</p>
                            <a href="javascript:void(0);" onclick="openModal('pilargola')"><div class="btnin-action">Selengkapnya</div></a>
                        </div>
                        
                    </div>
                </div>
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
                <div class="dtproduk">
                    <div class="wrapper23">
                        <img src="<?=base_url('assets/');?>assetss/newImage2/8.png" alt="PILARSPIRIT 20 / 147 OD" loading="lazy">
                        <div class="desc">
                            <h3 class="teksHerbi2">PILARSPIRIT 20 / 147 OD</h3>
                            <p>Bahan Aktif : Cyhalofop-butyl 147 g/l + Penoxsulam 20 g/l</p>
                            <p><strong class="teksHerbi2">Herbisida sistemik purna tumbuh berbentuk minyak</strong>  yang dapat didispersikan dalam air untuk mengendalikan gulma umum pada budidaya padi sawah.</p>
                            <a href="javascript:void(0);" onclick="openModal('pilarspirit')"><div class="btnin-action">Selengkapnya</div></a>
                        </div>
                        
                    </div>
                </div>
                <div class="dtproduk">
                    <div class="wrapper23">
                        <img src="<?=base_url('assets/');?>assetss/newImage2/9.png" alt="PILARTEBU 430 SC" loading="lazy">
                        <div class="desc">
                            <h3 class="teksFungi">PILARTEBU 430 SC</h3>
                            <p>Bahan Aktif : Tebuconazole 430 g/l</p>
                            <p><strong>Aktif membunuh pathogen atau menghambat aktivitasnya</strong> sebelum menyerang, sehingga tanaman dapat dilindungi dari kerusakan. Dan ampuh membunuh jamur secara keseluruhan.</p>
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
        <?php
    }
  }

}
?>