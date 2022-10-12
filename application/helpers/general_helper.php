<?php

if(!function_exists('settings')){

 function settings(){

 	$ci =& get_instance();
 	return $ci->db->get('settings')->row();
 }

}


if(!function_exists('dd')){

 function dd($data){
 	$msg = (is_array($data) || is_object($data))?json_encode($data):$data;
 	print_r($data);
 	exit();
 }

}

if (!function_exists('paginate')) {
function paginate($route,$totals,$perPage=20,$segment=2)
    {
        $ci =& get_instance();
        $config = array();
        
        //get_search_links gets us all data from search form as flashed

        $config["base_url"] = base_url().$route;
        $config["total_rows"]     = $totals;
        $config["per_page"]       = $perPage;
        $config["uri_segment"]    = $segment;
        $config['reuse_query_string'] = true;
        $config['full_tag_open']  = '<br> <nav><ul class="pagination">';
        $config['full_tag_close'] = '</ul></nav>';
        $config['first_link'] = 'first';
        $config['last_link'] = 'last';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active page-item"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $ci->pagination->initialize($config);
       
        return $ci->pagination->create_links();
    }
}
