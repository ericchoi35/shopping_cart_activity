<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Shopping_cart extends CI_Controller {

	public function index()
	{	
		$this->load->model("Cart_item");

		$all_items['items'] = $this->Cart_item->get_all_cart_items();
		

		

		// $bought_product = array(
		// 				'quantity' => $session_data['quantity'],
		// 				'product' => $this_product['description'],
		// 				'price' => $this_product['price'] * $session_data['quantity']
		// 					);
		$this->load->view('checkout', $all_items);
	}

	public function create()
	{
		$this->load->model('Cart_item');
		$this->load->model('Product');

		$post_data = $this->input->post();

		



		$cart_item = array();
		$cart_item[] = $post_data['quantity'];
		$cart_item[] = $this_product['description'];
		$cart_item[] = $this_product['price'];

	
		$this->Cart_item->add_cart_item($cart_item);
	
		redirect('/shopping_cart/index');
	}
}