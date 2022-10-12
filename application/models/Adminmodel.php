<?php 

if(!defined('BASEPATH'))
    exit('No direct script access allowed');

    class Adminmodel extends CI_Model{

        function __construct()
        {
            parent::__construct();

            $this->db = $this->load->database('default', true);
            $this->products_table = "product";
            $this->products_images_table ="product_images";
            $this->products_categories_table = "categories";
        }
////////////////////////////////--------------------------------------Admins------------------------------/////////////////////////////////

     public function checkAdmin($admin_email, $admin_password){
            $this->db->select('*');
            $this->db->from('admin');
            $this->db->where('admin_email',$admin_email);
            $this->db->where('admin_password',$admin_password);
            $checkDetail =  $this->db->get()->row();
            return $checkDetail;
        }
       
    public function getAdmins(){
        $this->db->select('*');
        $this->db->from('admin');
        $checkDetail =  $this->db->get()->result_array();
        return $checkDetail;
    } 
        public function addAdmins($data)
        {
            $this->db->insert('admin', $data);
        }

        public function deleteAdmin($id){
            $this->db->where('admin_id', $id);
            $this->db->delete('admin');

        }
/////////////////////////////////////////-------------------------Products---------------------------/////////////////////////////////////////

        public function getProducts($filter=[],$limit=null,$start=0){

             $this->applyFilter($filter);

             if($limit){
                $this->db->limit($limit,$start);
             }

            $this->db->select('*');
            $this->db->order_by('pid','desc');
            $this->db->from('product');
            $products =  $this->db->get()->result();

            foreach ($products as $product) {

                $product->images   = $this->get_images($product->pid);
                $product->category = $this->get_category($product->category);
            }

            return $products;
        }

        public function applyFilter($filter){

            foreach($filter as $key=>$value){

                if($value!=="" && $key !=="rows"){
                        $this->db->like($key,$value);
                }
            }
        }

        public function countProducts($filter=[]){

         $this->applyFilter($filter);
         return count($this->db->get('product')->result());
       }


        public function deleteProduct($id){
            $this->db->where('pid', $id);
            $this->db->delete('product');

        }
         public function get_categories(){
            return $this->db->get($this->products_categories_table)->result();
        }

         public function get_category($id){

            $this->db->where('id',$id);
            return $this->db->get($this->products_categories_table)->row();
        }

        public function get_images($id){

            $this->db->where('product_id',$id);
            $this->db->order_by('is_cover','desc');
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

           public function insertCategory($data){

           if(isset($data['id']) && is_numeric($data['id'])){

                dd($data);
                $this->db->where('id',$data['id']);
                $this->db->update($this->products_categories_table,$data);

            }else{
                $this->db->insert($this->products_categories_table,$data);
            }

            $row_id = (isset($data['id']) && is_numeric($data['id']))?$data['id']:$this->db->insert_id();

            return $this->get_category($row_id);
        }



        public function insertProduct($data){

           if(isset($data['pid'])){

                $this->db->where('pid',$data['pid']);
                $this->db->update($this->products_table,$data);

            }else{
                $this->db->insert($this->products_table,$data);
            }

            $row_id = (isset($data['pid']))?$data['pid']:$this->db->insert_id();

            return $this->get_product($row_id);
        }

        public function save_image($data){
            $this->db->insert($this->products_images_table,$data);
        }

         public function categories(){
           return $this->db->get('categories')->result();
         }

         public function ranks(){
            return $this->db->get('ranking')->result();
         }

         public function deleteImage($image_id){

            $this->db->where('id',$image_id);
            $image = $this->db->get($this->products_images_table)->row();

            @unlink('assets/img/products/'.$image->image);

            $this->db->where('id',$image_id);
            $this->db->delete($this->products_images_table);
         }

         public function save_settings($data){

            $this->db->where('id',1);
            $this->db->update('settings',$data);
         }

         public function setDefaultImage($img_id,$pid){

                //revoke current cover
              $this->db->where('product_id',$pid)
              ->update($this->products_images_table,['is_cover'=>0]);

              //mark new cover
              $this->db->where('id',$img_id)
              ->update($this->products_images_table,['is_cover'=>1]);
         }

    }