<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Product_model extends MY_Model
{

	protected $perPage = 10;

	public function getDefaultValues()
	{
		return [
			'id_category'	=> '',
			'slug'			=> '',
			'title'			=> '',
			'penulis'		=> '',
			'penerbit'		=> '',
			'tahun'			=> '',
			'description'	=> '',
			'kondisi'		=> '',
			'halaman'		=> '',
			'price'			=> '',
			'is_available'	=> 1,
			'image'			=> ''
		];
	}

	public function getValidationRules()
	{
		$validationRules = [
			[
				'field'	=> 'id_category',
				'label'	=> 'Kategori',
				'rules'	=> 'required'
			],
			[
				'field'	=> 'slug',
				'label'	=> 'Slug',
				'rules'	=> 'trim|required|callback_unique_slug'
			],
			[
				'field'	=> 'title',
				'label'	=> 'Nama Produk',
				'rules'	=> 'trim|required'
			],
			[
				'field'	=> 'description',
				'label'	=> 'Deskripsi',
				'rules'	=> 'trim|required'
			],
			[
				'field'	=> 'price',
				'label'	=> 'Harga',
				'rules'	=> 'trim|required|numeric'
			],
			[
				'field'	=> 'is_available',
				'label'	=> 'Ketersediaan',
				'rules'	=> 'required'
			],
		];

		return $validationRules;
	}

	public function uploadImage($fieldName, $fileName)
	{
		$config	= [
			'upload_path'		=> './images/product',
			'file_name'			=> $fileName,
			'allowed_types'		=> 'jpg|png|jpeg|JPG|PNG',
			'max_size'			=> 1024,
			'max_width'			=> 0,
			'max_height'		=> 0,
			'overwrite'			=> true,
			'file_ext_tolower'	=> true
		];

		$this->load->library('upload', $config);

		if ($this->upload->do_upload($fieldName)) {
			return $this->upload->data();
			
		} else {
			$this->session->set_flashdata('image_error', $this->upload->display_errors('', ''));
			return false;
		}
	}

	// public function resizeImage($fileName)
	// {
	// 	$source_path = $_SERVER['DOCUMENT_ROOT'] . '/images/product' . $fileName;
	// 	$target_path = $_SERVER['DOCUMENT_ROOT'] . '/images/product';
	// 	$config_manip = array(
	// 		'image_library' => 'gd2',
	// 		'source_image' => $source_path,
	// 		'new_image' => $target_path,
	// 		'maintain_ratio' => TRUE,
	// 		'width' => 500,
	// 	);

	// 	$this->load->library('image_lib', $config_manip);
	// 	if (!$this->image_lib->resize()) {
	// 		echo $this->image_lib->display_errors();
	// 	}

	// 	$this->image_lib->clear();
	// }

	public function deleteImage($fileName)
	{
		if (file_exists("./images/product/$fileName")) {
			unlink("./images/product/$fileName");
		}
	}
}

/* End of file Product_model.php */
