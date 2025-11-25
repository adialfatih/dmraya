<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        //$this->load->model('data_model');
        date_default_timezone_set("Asia/Jakarta");
        //   if($this->session->userdata('login_form') != "as123sd123dsad8789asff98afhafaf789fa"){
        //     redirect(base_url('login'));
        //   }
    }

    function index(){ 
        $seo = $this->db->query("SELECT * FROM table_setup WHERE id_setup = '1'")->row_array();
        $data = array(
            'seoTitle' => $seo['seo_title'],
            'seoDesc' => $seo['seo_desc'],
            'seoKey' => $seo['seo_keyword'],
            'seoAuthor' => $seo['seo_author'],
            'nomorWa' => $seo['nomorwa'],
            'linkFb' => $seo['linkfb'],
            'linkTiktok' => $seo['linktiktok'],
            'linkIg' => $seo['linkig']
        );
        $this->load->view('halaman_utama', $data);
    } 

    function produk(){ 
        $seo = $this->db->query("SELECT * FROM table_setup WHERE id_setup = '1'")->row_array();
        $data = array(
            'seoTitle' => $seo['seo_title'],
            'seoDesc' => $seo['seo_desc'],
            'seoKey' => $seo['seo_keyword'],
            'seoAuthor' => $seo['seo_author'],
            'nomorWa' => $seo['nomorwa'],
            'linkFb' => $seo['linkfb'],
            'linkTiktok' => $seo['linktiktok'],
            'linkIg' => $seo['linkig']
        );
        $this->load->view('halaman_produk', $data);
    } 
    function produk1(){ 
        $seo = $this->db->query("SELECT * FROM table_setup WHERE id_setup = '1'")->row_array();
        $data = array(
            'seoTitle' => $seo['seo_title'],
            'seoDesc' => $seo['seo_desc'],
            'seoKey' => $seo['seo_keyword'],
            'seoAuthor' => $seo['seo_author'],
            'nomorWa' => $seo['nomorwa'],
            'linkFb' => $seo['linkfb'],
            'linkTiktok' => $seo['linktiktok'],
            'linkIg' => $seo['linkig']
        );
        $this->load->view('halaman_produk_insek', $data);
    } 
    function produk2(){ 
        $seo = $this->db->query("SELECT * FROM table_setup WHERE id_setup = '1'")->row_array();
        $data = array(
            'seoTitle' => $seo['seo_title'],
            'seoDesc' => $seo['seo_desc'],
            'seoKey' => $seo['seo_keyword'],
            'seoAuthor' => $seo['seo_author'],
            'nomorWa' => $seo['nomorwa'],
            'linkFb' => $seo['linkfb'],
            'linkTiktok' => $seo['linktiktok'],
            'linkIg' => $seo['linkig']
        );
        $this->load->view('halaman_produk_herbi', $data);
    } 
    function produk3(){ 
        $seo = $this->db->query("SELECT * FROM table_setup WHERE id_setup = '1'")->row_array();
        $data = array(
            'seoTitle' => $seo['seo_title'],
            'seoDesc' => $seo['seo_desc'],
            'seoKey' => $seo['seo_keyword'],
            'seoAuthor' => $seo['seo_author'],
            'nomorWa' => $seo['nomorwa'],
            'linkFb' => $seo['linkfb'],
            'linkTiktok' => $seo['linktiktok'],
            'linkIg' => $seo['linkig']
        );
        $this->load->view('halaman_produk_fungi', $data);
    } 

    function galeri(){ 
        $seo = $this->db->query("SELECT * FROM table_setup WHERE id_setup = '1'")->row_array();
        $data = array(
            'seoTitle' => $seo['seo_title'],
            'seoDesc' => $seo['seo_desc'],
            'seoKey' => $seo['seo_keyword'],
            'seoAuthor' => $seo['seo_author'],
            'nomorWa' => $seo['nomorwa'],
            'linkFb' => $seo['linkfb'],
            'linkTiktok' => $seo['linktiktok'],
            'linkIg' => $seo['linkig']
        );
        $this->load->view('halaman_galeri', $data);
    } 

    function tentang(){ 
        $seo = $this->db->query("SELECT * FROM table_setup WHERE id_setup = '1'")->row_array();
        $data = array(
            'seoTitle' => $seo['seo_title'],
            'seoDesc' => $seo['seo_desc'],
            'seoKey' => $seo['seo_keyword'],
            'seoAuthor' => $seo['seo_author'],
            'nomorWa' => $seo['nomorwa'],
            'linkFb' => $seo['linkfb'],
            'linkTiktok' => $seo['linktiktok'],
            'linkIg' => $seo['linkig']
        );
        $this->load->view('halaman_tentang', $data);
    } 

    public function presentasi()
    {
        $seo = $this->db->query("SELECT * FROM table_setup WHERE id_setup = '1'")->row_array();

        // Daftar produk + file PPTX
        // NOTE:
        // - Simpan file di: assets/ppt/...
        // - Pastikan domain kamu pakai HTTPS biar Office Viewer mau embed
        $products = [
            [
                'nama'      => 'PILARBOMBA 53 / 106 SC',
                'kategori'  => 'Insektisida',
                'thumbnail' => base_url('assets/assetss/newImage2/2.png'),
                'ppt_file'  => base_url('assets/ppt1.pptx'),
            ],
            [
                'nama'      => 'PILARTRUST 100 SC',
                'kategori'  => 'Insektisida',
                'thumbnail' => base_url('assets/assetss/newImage2/3.png'),
                'ppt_file'  => base_url('assets/ppt1.pptx'),
            ],
            [
                'nama'      => 'PILARGOLA 400 SC',
                'kategori'  => 'Herbisida',
                'thumbnail' => base_url('assets/assetss/newImage2/4.png'),
                'ppt_file'  => base_url('assets/ppt1.pptx'),
            ],
            // Tambah produk lain di sini...
        ];

        // Siapkan URL viewer Office Online untuk tiap PPT
        foreach ($products as &$p) {
            $p['viewer_url'] = 'https://view.officeapps.live.com/op/embed.aspx?src=' . urlencode($p['ppt_file']);
        }
        unset($p);

        $data = array(
            'seoTitle'  => $seo['seo_title'] . ' - Presentasi Produk',
            'seoDesc'   => $seo['seo_desc'],
            'seoKey'    => $seo['seo_keyword'],
            'seoAuthor' => $seo['seo_author'],
            'nomorWa'   => $seo['nomorwa'],
            'linkFb'    => $seo['linkfb'],
            'linkTiktok'=> $seo['linktiktok'],
            'linkIg'    => $seo['linkig'],
            'products'  => $products,
        );

        $this->load->view('halaman_presentasi', $data);
    }

    
}
?>