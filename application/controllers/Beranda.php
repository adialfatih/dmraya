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

    
    
}
?>