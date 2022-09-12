<?php

if(!function_exists('extract_zipped')){

function extract_zipped(){


	$zip = new ZipArchive();

	$res = $zip->open('uploads/pics.zip');

	if ($res === TRUE) {

	  $zip->extractTo('uploads/pics');
	  $zip->close();

	  $allFolders = glob('uploads/pics/*/*');
	  $destination_folder = "assets/images/products/";

	  $products_arr=[];

	   foreach ($allFolders as $key=>$innerFolder) {

	       $folderContents = glob('uploads/pics/*/*/*');

	       foreach ($folderContents as $key => $fullpath) {

	       	$chucked_path = explode("/", $fullpath);
	       	//pics/projectpcs/product_folder/image_name

	       	$product_name = $chucked_path[2];
	       	$image_name   = $chucked_path[3];

		       	if(strpos($product_name, "Auto") !==0){

		       	$chunked_image = explode(".", $image_name); //image.png
		       	$new_image_name = str_replace(" ", "_", $chunked_image[0]).time().".".$chunked_image[1];

		       	copy($value,"uploads/".$new_image_name);

		       	array_push($products_arr, ['image'=>$new_image_name,'product'=>$product_name]);

		       }
	       }
	   }

	   return $products_arr;


	}else{
	   return null;
	}

}