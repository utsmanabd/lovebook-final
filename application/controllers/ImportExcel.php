<?php
defined('BASEPATH') or exit('No direct script access allowed');
require FCPATH . 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class ImportExcel extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Import');
    }

    public function index()
    {
        $this->load->view('');
    }

    public function spreadsheet_import()
    {
        $this->load->model('M_Import');
        $upload_file = $_FILES['upload_file']['name'];
        $extension = pathinfo($upload_file, PATHINFO_EXTENSION);
        if ($extension == 'csv') {
            $reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
        } else if ($extension == 'xls') {
            $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
        } else {
            $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
        }
        $spreadsheet = $reader->load($_FILES['upload_file']['tmp_name']);
        $sheetdata = $spreadsheet->getActiveSheet()->toArray();
        $sheetcount = count($sheetdata);
        if ($sheetcount > 1) {
            $data = array();
            for ($i = 1; $i < $sheetcount; $i++) {
                $title = $sheetdata[$i][1];
                $penulis = $sheetdata[$i][2];
                $penerbit = $sheetdata[$i][3];
                $tahun = $sheetdata[$i][4];
                $deskripsi = $sheetdata[$i][5];
                $kondisi = $sheetdata[$i][6];
                $halaman = $sheetdata[$i][7];
                $price = $sheetdata[$i][8];
                $data[] = array(
                    'nama' => $title,
                    'penulis' => $penulis,
                    'penerbit' => $penerbit,
                    'tahun' => $tahun,
                    'deskripsi' => $deskripsi,
                    'kondisi' => $kondisi,
                    'halaman' => $halaman,
                    'price' => $price,
                );
            }
            $inserdata = $this->M_Import->insert_batch($data);
            if ($inserdata) {
                $this->session->set_flashdata('message', '<div class="alert alert-success">Successfully Added.</div>');
                redirect('product');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger">Data Not uploaded. Please Try Again.</div>');
                redirect('product');
            }
        }
    }
}
