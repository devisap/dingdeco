<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class ContentPdf extends CI_Model{
    function __construct(){
        parent::__construct();
        $this->load->library('pdfgenerator');
    }

    public function generate($param){
        $data['pemesanan']  = $this->db->get_where('pemesanan', ['NOMOR_PEMESANAN' => $param['idPemesanan']])->result();
        $data['klien']      = $this->db->get_where('klien', ['ID_KLIEN' => $param['idKlien']])->result();				
        $data['paket']      = $this->db->get_where('paket', ['ID_PAKET' => $param['idPaket']])->result();
        
        $file_pdf = 'PEMESANAN_DOC_'.$param['idPemesanan'];
        $path_pdf = 'uploads/pdf_files/pemesanan/'.$file_pdf.'.pdf';
		
        $paper = 'A4';
        $orientation = $param['orientation'];
        
		$html = $this->load->view('pdf_templates/form_pemesanan', $data, true);	    

        $resPdf = $this->pdfgenerator->generate($html, $file_pdf,$paper,$orientation);
        if(!is_dir('./uploads/pdf_files/pemesanan')){
            mkdir('./uploads/pdf_files/pemesanan', 0777, TRUE);
        }
        file_put_contents($path_pdf, $resPdf);
        return $path_pdf;
    }

    public function generateSkk($param){        	
        $this->db->select('*');
        $this->db->from('pemesanan');
        $this->db->join('klien', 'pemesanan.ID_KLIEN = klien.ID_KLIEN');
        $this->db->join('paket', 'pemesanan.ID_PAKET = paket.ID_PAKET');
        $this->db->join('pengguna', 'pemesanan.ID_PENGGUNA = pengguna.ID_PENGGUNA');
        $this->db->where('pemesanan.NOMOR_PEMESANAN', $param['noPesanan']);

        $data['pemesanan'] = $this->db->get()->result();
        $data['skk'] = $param['noSkk'];

        $file_pdf = 'SKK_DOC_'.$param['noSkk'];
        $path_pdf = 'uploads/pdf_files/skk/'.$file_pdf.'.pdf';
		
        $paper = 'A4';
        $orientation = $param['orientation'];
        
		$html = $this->load->view('pdf_templates/surat_kontrak_kerja', $data, true);	    

        $resPdf = $this->pdfgenerator->generate($html, $file_pdf,$paper,$orientation);
        if(!is_dir('./uploads/pdf_files/skk')){
            mkdir('./uploads/pdf_files/skk', 0777, TRUE);
        }
        file_put_contents($path_pdf, $resPdf);
        return $path_pdf;
    }
}