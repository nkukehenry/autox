<?php 

if(!defined('BASEPATH'))
    exit('No direct script access allowed');

    class Products extends CI_Model{

        function __construct()
        {
            parent::__construct();

            $this->db = $this->load->database('default', true);
            $this->products_table = "product";
            $this->products_images_table ="product_images";
            $this->products_categories_table = "categories";

        }

        function productsList($gender, $category){

            $this->db->select("*");
            $this->db->from('product');
            $this->db->where('gender', $gender);
            $this->db->where('category', $category);
            $categorizedList = $this->db->get()->result_array();
            return $categorizedList;
            
        }

        function allproducts($gender=null){

            $this->db->select('*');
            $this->db->from('product');
            $products =  $this->db->get()->result();

            foreach ($products as $product) {
                $product->images   = $this->get_images($product->pid);
                $product->category = $this->get_category($product->category);
            }
            return $products;
        
        }

        function subCategory($gender){
            $this->db->distinct();
            $this->db->select('subcategory');
            $this->db->from('product');
            $this->db->where('gender', $gender);
            $subCategories = $this->db->get()->result_array();
            return $subCategories;

        }

        function colorList($gender){
            $this->db->distinct();
            $this->db->select('color');
            $this->db->from('product');
            $this->db->where('gender', $gender);
            $colorList = $this->db->get()->result_array();
            return $colorList;
        }

        function getProductByID($id){
            $this->db->select("*");
            $this->db->from('product');
            $this->db->where('pid', $id);
            $productDetail = $this->db->get()->result_array();
            return $productDetail;


        }

        function checkCart($pid, $ipAddr, $size){
            $this->db->select("*");
            $this->db->from('cart');
            $this->db->where('product_id', $pid);
            $this->db->where('ip_address', $ipAddr);
            $this->db->where('size', $size);
            $cartChecked = $this->db->get()->result_array();
            return $cartChecked;
        }

        function insertCart($cartData){
            $this->db->insert('cart', $cartData);
        }

        function showCart($ipAddr){
            $this->db->select("*");
            $this->db->from('cart');
            $this->db->where('ip_address', $ipAddr);
            $cartItems = $this->db->get()->result_array();
            return $cartItems;
        }

        function getProductsForCart($implodedValue){
         
            if (!empty($implodedValue)) {
                $data = explode(',', $implodedValue);
            }
            $this->db->select("*");
            $this->db->from('product');
            $this->db->where_in('pid', $data);
            $this->db->join('cart', 'cart.product_id = product.pid');
                  
            $productDetail = $this->db->get()->result_array();
            return $productDetail;
        }

        function deleteCartItem($id, $size){
            $this->db->where('product_id', $id);
            $this->db->where('size', $size);
            $this->db->delete('cart');
        }

        //fresh onew

          public function get_category($id){

            $this->db->where('id',$id);
            return $this->db->get($this->products_categories_table)->row();
        }

        public function get_images($id){

            $this->db->where('product_id',$id);
            return $this->db->get($this->products_images_table)->result();
        }

        public function get_product($id){

            $this->db->where('pid',$id);
            $product = $this->db->get($this->products_table)->row();
            
            if($product){

                $product->images   = $this->get_images($id);
                $product->category = $this->get_category($product->category);
            }

            return $product;
        }



    }
