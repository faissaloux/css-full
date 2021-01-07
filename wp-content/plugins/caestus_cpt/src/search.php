<?php


/*
*
*	usage
*	$result = new caestus_search($query);
*	
	
*
*
*/


class caestus_search {

	public $query;
	public $result;

	public function __construct($query){
		$this->query = $query;
		return $this->search()->clean()->get();
	}

	public function search(){
		$query_args = array(  'posts_per_page' => '-1',  's' => $this->query , 'post_type' => 'products_cpt' );
		$result = new WP_Query( $query_args );
		$this->result = $result->posts;
		unset($query_args);
		return $this;
	}

	public function clean(){
		$result = [];
		if(!empty($this->result)){
			foreach ($this->result as $item) {

				$image = get_the_post_thumbnail_url($item->ID);
				$link = get_permalink($item->ID);

				$data = [
					'id' => $item->ID,
					'image' => $image,
					'title' => $item->post_title,
					'link'	=> $link,
				];
			}
		}else{
			$data = [
				'error' => 'Not found'
			];
		}
				
		$result[] = $data;
		$this->result = $result;
		return $this;
	}

	public function get(){

		return $this->result;
	}


}