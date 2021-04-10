<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->helper('file');
        $this->load->library('table');
        $this->load->library('upload');
    }

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        $this->load->view('welcome_message');
    }

    //Paket
    public function paket()
    {

        $data = array(
            'title' => 'Paket | SYMA Decoration'
        );
        $this->template->view('paket/VPaket', $data);
    }

    //pengguna
    public function pengguna()
    {

        $data = array(
            'title' => 'Pengguna | SYMA Decoration'
        );
        $this->template->view('pengguna/VPengguna', $data);
    }

    //Landing Page
    public function landingpage()
    {

        $data = array(
            'title' => 'Landing Page | SYMA Decoration'
        );
        $this->template->view('landingpage/VLandingPage', $data);
    }

    //Proyek
    public function suratkontrakkerja()
    {

        $data = array(
            'title' => 'Surat Kontrak Kerja | SYMA Decoration'
        );
        $this->template->view('proyek/VSuratKontrakKerja', $data);
    }
    public function print_suratkontrakkerja()
    {

        $data = array(
            'title' => 'Surat Kontrak Kerja | SYMA Decoration'
        );
        $this->template->view('pdf_templates/surat_kontrak_kerja', $data);
    }

    //Nota Pembayaran
    public function notapembayaran()
    {

        $data = array(
            'title' => 'Nota Pembayaran | SYMA Decoration'
        );
        $this->template->view('proyek/notapembayaran/VNotaPembayaran', $data);
    }
    public function tambahbarangpembayaran()
    {

        $data = array(
            'title' => 'Tambah Barang Pembayaran | SYMA Decoration'
        );
        $this->template->view('proyek/notapembayaran/VTambahBarangPembayaran', $data);
    }
    public function print_notapembayaran()
    {

        $data = array(
            'title' => 'Nota Pembayaran | SYMA Decoration'
        );
        $this->template->view('pdf_templates/nota_pembayaran', $data);
    }

    //Nota Pengiriman
    public function notapengiriman()
    {

        $data = array(
            'title' => 'Nota Pengiriman | SYMA Decoration'
        );
        $this->template->view('proyek/notapengiriman/VNotaPengiriman', $data);
    }
    public function tambahbarangpengiriman()
    {

        $data = array(
            'title' => 'Tambah Barang Pengiriman | SYMA Decoration'
        );
        $this->template->view('proyek/notapengiriman/VTambahBarangPengiriman', $data);
    }
    public function print_notapengiriman()
    {

        $data = array(
            'title' => 'Nota Pengiriman | SYMA Decoration'
        );
        $this->template->view('pdf_templates/nota_pengiriman', $data);
    }
    
    //sop
    public function sop()
    {

        $data = array(
            'title' => 'SOP | SYMA Decoration'
        );
        $this->template->view('proyek/VSOP', $data);
    }

    public function print_sop()
    {

        $data = array(
            'title' => 'SOP | SYMA Decoration'
        );
        $this->template->view('pdf_templates/sop_nota_pengiriman', $data);
    }

    //Pemasukan
    public function pemasukan()
    {

        $data = array(
            'title' => 'Pemasukan | SYMA Decoration'
        );
        $this->template->view('proyek/VPemasukan', $data);
    }

    //Pengeluaran
    public function pengeluaran()
    {

        $data = array(
            'title' => 'Pengeluaran | SYMA Decoration'
        );
        $this->template->view('proyek/VPengeluaran', $data);
    }
    //end proyek

    //Inventaris Barang
    public function inventarisbarang()
    {

        $data = array(
            'title' => 'Inventaris Barang | SYMA Decoration'
        );
        $this->template->view('barang/VInventarisBarang', $data);
    }

    //Alur Keuangan
    public function alurkeuangan()
    {

        $data = array(
            'title' => 'Alur Keuangan | SYMA Decoration'
        );
        $this->template->view('keuangan/VAlurKeuangan', $data);
    }

    //laporan keuangan
    public function laporan_keuangan()
    {

        $data = array(
            'title' => 'Laporan Keuangan | SYMA Decoration'
        );
        $this->template->view('laporan/VKeuangan', $data);
    }
    public function print_laporan_keuangan()
    {

        $data = array(
            'title' => 'Laporan Keuangan | SYMA Decoration'
        );
        $this->template->view('pdf_templates/laporan_keuangan', $data);
    }

    //laporan akhir acara
    public function laporan_akhir_acara()
    {

        $data = array(
            'title' => 'Laporan Akhir Acara | SYMA Decoration'
        );
        $this->template->view('laporan/VAkhiracara', $data);
    }

    public function print_laporan_akhir_acara()
    {

        $data = array(
            'title' => 'Laporan Akhir Acara | SYMA Decoration'
        );
        $this->template->view('pdf_templates/laporan_akhir_acara', $data);
    }
}
