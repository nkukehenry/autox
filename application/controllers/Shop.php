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
		$data['products'] = $this->products->allproducts();
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

	