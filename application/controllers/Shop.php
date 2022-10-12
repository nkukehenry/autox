<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shop extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('products');
	}

	public function index()
	{
       
        $filters = $this->input->get();

        $count   = $this->products->countProducts($filters);
        $segment = 3;
        $page    = ($this->uri->segment($segment))?$this->uri->segment($segment):0;
        $perPage = 20;

        $data['search']   = (Object) $filters;
        $data['links']    = paginate('shop/index',$count, $perPage,$segment);
        $data['products'] = $this->products->allproducts($filters,$perPage,$page);

		$this->load->view('main/header');
		$this->load->view('pages/products',$data);
		$this->load->view('pages/men');
		$this->load->view('main/footer');
	}

	public function contact()
	{
		$this->load->view('main/header');
		$this->load->view('main/contact');
		$this->load->view('main/footer');
	}

	public function men(){
		$this->load->view('main/header');
		$this->load->view('pages/trending-men');
		$this->load->view('pages/men');
		$this->load->view('main/footer');
	}

	public function women(){
		$this->load->view('main/header');
		$this->load->view('pages/women');
		$this->load->view('pages/trending-women');
		$this->load->view('main/footer');
	}
}

	