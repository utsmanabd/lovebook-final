<?php
class Detail extends MY_Controller{

    public function book($id)
	{
        $this->load->model('Detail_model');
        $data['detail'] = $this->product->select(
            [
                'product.id', 'product.title AS product_title', 
                'product.description', 'product.penulis','product.penerbit','product.tahun',
                'product.kondisi','product.halaman','product.image', 
                'product.price', 'product.is_available',
                'category.title AS category_title', 'category.slug AS category_slug'
            ]
            )
            ->join('category')
            ->where('id', $id)->first()
            ->get();

		$data['title']			= 'Detail Buku';
		$data['form_action']	= base_url("detail/book/$id");
		$data['page']			= 'pages/detail/detail';

		$this->view($data);
    }
    }

?>