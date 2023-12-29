<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kasir extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
    }

    public function index()
    {
        $data['title'] = 'Kasir';
        $data['cart'] = $this->session->userdata('cart');
        $this->load->view('kasir/index', $data);
    }

    public function add_to_cart($product_id, $quantity = 1)
    {
        $cart = $this->session->userdata('cart');

        $product_data = array(
            'id' => $product_id,
            'name' => 'Product ' . $product_id,
            'price' => 1000,
            'quantity' => $quantity
        );

        $cart[] = $product_data;

        $this->session->set_userdata('cart', $cart);
        redirect('kasir');
    }

    public function remove_from_cart($index)
    {
        $cart = $this->session->userdata('cart');

        unset($cart[$index]);

        $cart = array_values($cart);

        $this->session->set_userdata('cart', $cart);
        redirect('kasir');
    }

    public function checkout()
    {


        // Hapus keranjang setelah checkout
        $this->session->unset_userdata('cart');
        redirect('kasir');
    }
}
