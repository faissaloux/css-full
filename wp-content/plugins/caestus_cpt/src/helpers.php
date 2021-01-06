<?php 

function brands(){
	$result = [];
	$brands = System::brands();
	foreach ($brands as $brand) : 
	$options = System::brand_options($brand->ID);
	$image   = System::get_brand_image($options['brand']);
	$link    = $options['brand_lien'];
	
	$item = [
		'title' => $brand->post_title,
		'image' => $image,
		'url'	=> $link,
	];
	$result[] = $item;
	endforeach;
	return $result;
}


function caestus_products($cat_id = false ) {
	return System::products($cat_id);
}



function ajax_products_search($query,$type = false){
	$result = (new caestus_search($query))->result; 
	return ($type == 'json') ? json_encode($result) : $result;
}


function top_header_menu_bootstrap4(){
	   wp_nav_menu([
	     'menu'            => 'nav-bar',
	     'theme_location'  => 'top',
	     'container'       => 'div',
	     'container_id'    => 'bs4navbar',
	     'container_class' => 'collapse navbar-collapse',
	     'menu_id'         => false,
	     'menu_class'      => 'navbar-nav mr-auto',
	     'depth'           => 3,
	     'fallback_cb'     => 'bs4navwalker::fallback',
	     'walker'          => new bs4navwalker()
	   ]);
}



/************************************************************/
/********************* CART HELPERS *************************/
/************************************************************/

function caestus_cart_count(){
	return (new cart())->count();
}

function caestus_cart_items($type = false){
	$result = (new cart())->get_items() ?? [];
	return ($type == 'json') ? json_encode($result,true) : $result;
}

function caestus_add_to_cart($id,$image,$title,$quantity,$category){
	return (new cart())->add_item($id,$image,$title,$quantity,$category);
}

function caestus_remove_item($id,$category){
	return (new cart())->remove_item($id,$category);
}

function caestus_update_item($id,$category,$quantity){
	return (new cart())->update_item($id,$category,$quantity);
}


function send_order($params){
	return (new cart())->send_order($params);
}


/*
	usage : 
	caestus_add_to_cart($id,$image,$title,$quantity,$category);
	caestus_remove_item($id,$category);
	caestus_update_item($id,$category,$quantity);
*/

/************************************************************/
/********************* CART HELPERS *************************/
/************************************************************/



function products_categories(){
	return System::product_categories();
}