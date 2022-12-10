<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home extends MY_Controller
{

	public function index($page = null)
	{
		$data['title']	= 'Produk';
		$data['content']	= $this->home->select(
			[
				'product.id', 'product.title AS product_title',
				'product.description', 'product.penulis', 'product.penerbit', 'product.tahun',
				'product.kondisi', 'product.halaman', 'product.image',
				'product.price', 'product.is_available',
				'category.title AS category_title', 'category.slug AS category_slug'
			]
		)
			->join('category')
			->where('product.is_available', 1)
			->paginate($page)
			->get();
		$data['total_rows']	= $this->home->where('product.is_available', 1)->count();
		$data['pagination']	= $this->home->makePagination(
			base_url('home'),
			2,
			$data['total_rows']
		);
		$data['page']	= 'pages/home/index';

		$this->view($data);
	}

	public function detail($id)
	{
		$data['content'] = $this->home->where('id', $id)->first();
		if (!$data['content']) {
			redirect(base_url('home'));
		}

		if (!$this->home->validate()) {
			$data['detail'] = $this->home->select(
				[
					'product.id AS id_product', 'product.title AS product_title',
					'product.description', 'product.penulis', 'product.penerbit', 'product.tahun',
					'product.kondisi', 'product.halaman', 'product.image',
					'product.price', 'product.is_available',
					'category.title AS category_title', 'category.slug AS category_slug'
				]
			)
				->join('category')
				->where('product.id', $id)->first();

			$data['title']			= 'Buku: ' . ucwords($data['detail']->product_title);
			$data['form_action']	= base_url("cart/add/$id");
			$data['page']			= 'pages/detail/detail';

			$this->view($data);
			return;
		}
		redirect(base_url('home'));
	}
}

/* End of file Home.php */
