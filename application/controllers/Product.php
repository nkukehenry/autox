<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('products');
        $this->load->model('adminmodel');
    }

    public function index($pid){;
     
        $data['product'] = $this->adminmodel->get_product($pid);

        $this->load->view('main/header');
        $this->load->view('pages/product', $data);


        $data['products'] = $this->products->allproducts();

        $this->load->view('pages/related',$data);

        $this->load->view('main/footer');

    }



}

