<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    function __construct()
    {
        parent::__construct();

        $this->load->database();
        $this->load->model('adminmodel');
        $this->load->model('ordermodel');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->load->view('admin/login');
    }

    public function sidebarHeader()
    {
        $this->load->view('admin/sidebar');
        $this->load->view('admin/header');
    }

    public function footer()
    {
        $this->load->view('admin/footer');
    }

    public function login()
    {

        if(isset($_SESSION['admin_email'])) {

            redirect('admin/dashboard','refresh');
        }

        else if($this->input->post('admin_email')){
        
        $admin_name = $this->input->post('admin_email');
        $admin_password = md5($this->input->post('admin_password'));

        //  echo $admin_name. $admin_password;
        $admin = $this->adminmodel->checkAdmin($admin_name, $admin_password);

        // print_r($checkAdmin);
        if (isset($admin->admin_id)) {

            // echo "hello";
            $data = array();

            $data['admin_id'] = $admin->admin_id;
            $data['admin_name'] = $admin->admin_name;
            $data['admin_email'] = $admin_name;

            $this->session->set_userdata($data);

            redirect('admin/dashboard','refresh');

        } else {

            $message = array('message' => 'Oops! Something Went Wrong!');
            $this->session->set_flashdata("item", $message);
            redirect('admin/', 'refresh');
        }
      }
      else{

        print_r($this->input->post());
        exit();

        $this->session->set_flashdata("item", ['message'=>"Access Not allowed"]);
        redirect('admin/', 'refresh');
      }

    }

    public function manageAdmin()
    {
       $details['adminDetails'] = $this->adminmodel->getAdmins();

        $this->sidebarHeader();        
        $this->load->view('admin/manageAdmin', $details);
        $this->footer();
    }

    public function addAdmin(){
        $data = array();
        $data['admin_name'] = $this->input->post('newAdminName');
        $data['admin_email'] = $this->input->post('newAdminEmail');
        $data['admin_password'] = $this->input->post('newAdminPass');
        $admin_password2 = $this->input->post('newAdminPass2');

        $this->form_validation->set_rules('newAdminEmail', 'Email', 'required|is_unique[admin.admin_email]|callback_email_check');
        $this->form_validation->set_rules('newAdminPass', 'Password', 'trim|required|min_length[5]|max_length[50]');
        $this->form_validation->set_rules('newAdminPass2', ' Confirm Password', 'trim|required|matches[newAdminPass]');
    
        if ($this->form_validation->run()) {
            $this->adminmodel->addAdmins($data);
            $message = array('message' => 'Another Admin Added', 'class' => 'text-success text-center');
            $this->session->set_flashdata("item", $message);
            redirect('admin/manageAdmin', 'refresh');
            // $this->manageAdmin();
        } else {
            $message = array('message' => 'Oops! Something Went Wrong!', 'class' => 'text-danger text-center');
            $this->session->set_flashdata("item", $message);
            redirect('admin/manageAdmin', 'refresh');
        }

    }

    public function email_check($email)
    {

        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return TRUE;
        } else {
            $this->form_validation->set_message('email_check', 'Please Enter a valid Email id!');
            return FALSE;
        }
    }

    public function deleteAdmin(){
        $id = $this->input->get('id');
        $this->adminmodel->deleteAdmin($id);
        redirect('admin/manageAdmin', 'refresh');
    }


    public function productlist(){

        $details['products'] = $this->adminmodel->getProducts();
        $this->sidebarHeader();        
        $this->load->view('admin/productlist', $details);
        $this->footer();
    }

    public function deleteProduct(){
        $id = $this->input->get('id');
        $this->adminmodel->deleteProduct($id);
        redirect('admin/productlist', 'refresh');
    }

    public function productinsert(){

        $this->sidebarHeader();        
        $this->load->view('admin/insertproduct');
        $this->footer();
    }

    public function insertProduct() //function that handles the backend of inert-product
    {
         $data = array();
         $data['pname'] =  $this->input->post('productName');
         $data['gender'] =  $this->input->post('gender');
         $data['category'] =  $this->input->post('category');
         $data['subcategory'] =  $this->input->post('subcategory');
         $data['price'] =  $this->input->post('price');
         $data['discount'] =  $this->input->post('discount');
         $size =  $this->input->post('size');
         $data['color'] =  $this->input->post('color');

         $config['upload_path']          = 'assets/img/'.$data['gender'].'/'. $data['category'];
         $config['allowed_types']        = 'gif|jpg|png|jpeg';
         $config['max_size']             = 10000;
         $config['max_width']            = 10000;
         $config['max_height']           = 10000;
         $config['encrypt_name']			= TRUE;
         $config['remove_spaces']		= TRUE;
          $config['overwrite']			= FALSE;

         $this->load->library('upload', $config);

         if ( ! $this->upload->do_upload('image'))
         {
                 $error = array('error' => $this->upload->display_errors());

                 print_r($error);
                 echo "<br>";
                 echo $config['upload_path'];
               //  $this->load->view('dashboard/student_profile', $error);
         }
         else
         {
                 $imagePath = $this->upload->data();

                //   print_r($imagePath); echo "<br>"; 
                  $data['pimage'] = $data['gender'].'/'. $data['category'].'/'.$imagePath['file_name'];
                //   $path = $data['file_name'];

               $data['size'] = implode(',', $size);

         }

        //  print_r($data);
        $this->adminmodel->insertProduct($data);

        $this->productlist();
    }


public function importProducts(){

  $config['upload_path']          = 'uploads';
  $config['allowed_types']        = 'zip';
  $config['max_size']             = 10000000;
  $config['max_width']            = 10000000;
  $config['max_height']           = 10000000;
  $config['overwrite']      = TRUE;

   $this->load->library('upload', $config);

  if ( ! $this->upload->do_upload('zip'))
 {
         $error = array('error' => $this->upload->display_errors());

         print_r($error);
 }
 else
 {

$upload = $this->upload->data();

$zip_file = $upload['file_name'];

$zip = new ZipArchive();

$res = $zip->open('uploads/'.$zip_file);

if ($res === TRUE) {

  $zip->extractTo('uploads/pics/');
  $zip->close();

  $allFolders = glob('uploads/pics/*/*');
  $products_arr=[];


       $i = 0;

       //for each extracted folder,
       foreach ($allFolders as $key=>$innerFolder) {

        $clean_path = str_replace("\\", " ", $innerFolder);

        //read images from folder
           $folderContents = glob("$clean_path/*");


          //foreach read image
           foreach ($folderContents as $key => $fullpath) {


                $chucked_path = explode("/", $fullpath);
                //uploads/pics//projectpcs/product_folder/image_name

                $product_name = $chucked_path[3];
               
                if(strpos($product_name, "Auto") !==0){


                        $chucked_path = explode("/", $fullpath);
                        $image_name   = $chucked_path[4];

                        $chunked_image = explode(".", $image_name); //image.png
                        $new_image_name = str_replace(" ", "_", $chunked_image[0]).time().".".$chunked_image[1];

                        copy($fullpath,"assets/img/products/".$new_image_name);

                        $products_arr[$i]['images'][] = $new_image_name;
                        //name not yet added?, add it
                        if(!isset($products_arr[$i]['name']))
                            $products_arr[$i]['name'] = $product_name;
              }

           }


          $i++;

    }


      $products =  array_values($products_arr);

      foreach($products as $product){

      $import_product = (Object) $product;

       $data = array();
       $data['pname'] =  $import_product->name;
       $data['category'] =  1;
       $data['subcategory'] = 1;
       $data['price'] =  0;
       $data['discount'] =  0;
       $data['color'] = 'N/A';

       $new_product = $this->adminmodel->insertProduct($data);

       foreach ($import_product->images as $key => $image) {

         $image = array('product_id'=>$new_product->pid,"image"=>$image);
         $this->adminmodel->save_image($image);

       }

     }

      $message = count(array_values($products_arr))." products added";;

    }else{

         $message = "Couldn't finish the operation";
    }

    $this->session->set_flashdata('message',$message);
    redirect('admin/productlist', 'refresh');

}

}

    public function manageorders(){

        $userOrders['orderList'] = $this->ordermodel->totalOrders();

        $this->sidebarHeader();        
        $this->load->view('admin/orderlist', $userOrders);
        $this->footer();
    }

    public function logout()
    {
        
        $user_data = $this->session->all_userdata();

        foreach ($user_data as $key => $value) {
            if ($key != 'session_id' && $key != 'ip_address' && $key != 'user_agent' && $key != 'last_activity') {
                $this->session->unset_userdata($key);
            }
        }

        $this->session->sess_destroy();

        redirect('admin/', 'refresh');
    }
}
