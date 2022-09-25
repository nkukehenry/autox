<?php

if(!function_exists('settings')){

 function settings(){

 	$ci =& get_instance();
 	return $ci->db->get('settings')->row();
 }

}