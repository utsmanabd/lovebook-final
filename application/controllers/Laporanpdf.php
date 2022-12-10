<?php
class Laporanpdf extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $role = $this->session->userdata('role');
        if ($role != 'admin') {
            redirect(base_url('/'));
            return;
        }
        $this->load->library('Pdf');
    }

    function index()
    {
        $pdf = new FPDF('l', 'mm', 'A5');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial', 'B', 16);
        // mencetak string 
        // Insert a logo in the top-left corner at 300 dpi
        $pdf->Image(base_url().'assets/img/LogoLovebook1.png', 1, 1, -450);
        $pdf->Cell(190, 7, 'LIST PRODUK LOVEBOOK', 0, 1, 'C');
        $pdf->SetFont('Arial', '', 9);
        $tanggal = date("Y-m-d H:i:s");
        $pdf->Cell(190, 7, '(Data buku yang terdaftar di Lovebook s/d '.$tanggal.')', 0, 1, 'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10, 7, '', 0, 1);
        $pdf->SetFont('Arial', 'B', 6);
        $pdf->Cell(6, 6, 'No', 1, 0);
        $pdf->Cell(55, 6, 'Judul', 1, 0);
        $pdf->Cell(35, 6, 'Penulis', 1, 0);
        $pdf->Cell(35, 6, 'Penerbit', 1, 0);
        $pdf->Cell(20, 6, 'Tahun', 1, 0);
        $pdf->Cell(10, 6, 'Kondisi', 1, 0);
        $pdf->Cell(25, 6, 'Harga', 1, 1);
        $pdf->SetFont('Arial', '', 6);
        $product = $this->db->get('product')->result();
        $no = 0;
        foreach ($product as $row) {
            $no++;
            $pdf->Cell(6, 6, $no, 1, 0);
            $pdf->Cell(55, 6, $row->title, 1, 0);
            $pdf->Cell(35, 6, $row->penulis, 1, 0);
            $pdf->Cell(35, 6, $row->penerbit, 1, 0);
            $pdf->Cell(20, 6, $row->tahun, 1, 0);
            $pdf->Cell(10, 6, $row->kondisi . '%', 1, 0);
            $pdf->Cell(25, 6, 'Rp' . $row->price . ',-', 1, 1);
        }
        $pdf->Output();
    }
}
