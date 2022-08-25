<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('products');
    }

    public function index($pid){

        //$pid = $this->uri->segment(3);
     
        $productDetail['productDetail'] = $this->products->getProductByID($pid);

        if (!empty($productDetail['productDetail'])) {

            $gender =  $productDetail['productDetail'][0]['gender']; //returns the gender so that we can display the trending products.

            $this->load->view('main/header');
            $this->load->view('pages/product', $productDetail);

            // if($gender == 'women'){
            //     $this->load->view('pages/trending-women');
            // }else{
            //     $this->load->view('pages/trending-men');
            // }

            $data['products'] = $this->products->allproducts();

            $this->load->view('pages/related',$data);

            $this->load->view('main/footer');
        }

    }



}