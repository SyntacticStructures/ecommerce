<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mains extends CI_Controller {
	public function index()
	{		
        $categories = $this->Model->get_categories();
        $this->session->set_userdata('categories', $categories);
		$this->load->view('temp_add_view');
	}
    public function admin(){/*how do i go just directly to admin without having mains in the url?*/
        $this->load->view('admin_login');
    }
    public function admindash(){
        if ($this->session->userdata('admin') == 'in') {/*This if statement is to ensure that the admin is logged in so nobody can just type the url to get admin power*/
            $products = $this->Model->get_all_products();
            // put ALL products in session data
            $this->session->set_userdata('all_products',$products);
            $this->load->view('dashboard_products');
        }else{
            redirect('/');
        }
    }
    public function edit_page($id){
        if ($this->session->userdata('admin') == 'in') {
            $edit_get = $this->Model->get_product_by_id($id);
            $this->session->set_userdata('product_to_edit',$edit_get);
            $this->load->view('temp_edit_view');
        }else{
            redirect('/');
        }
    }

    public function login(){ /*let's send the password and email over to our model!*/
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $login_check = $this->Model->login($email, $password);
        if ($login_check) {
            $this->session->set_userdata('admin', 'in'); /*setting the admin status to logged in*/
            redirect('admindash');
        }else{
            $this->session->set_userdata('admin','out'); /*setting the admin status to logged out NOTE probably unnecessary*/
            $this->session->set_flashdata('errors','Email/Password combination incorrect');
            redirect('/mains/admin'); /*how do i go just directly to admin without having mains in the url?*/
        }
    }
    public function add_item(){
        $input = $this->input->post();

        /*if the admin didnt choose to add a new category, we add the stuff */
        if ($input['add_category'] == '') {
            $add_check = $this->Model->insert($input);
        }
        else{

            $this->Model->insert_category($input['add_category']);
            $input['categories'] = $input['add_category']; /*the category to be inserted is now the new category added by the admin*/
            $add_check = $this->Model->insert($input);/*add the whole item with the custom category to the DB */
        }
    }
    public function edit_item(){
        var_dump($this->input->post());
        $product = $this->input->post();
    }
}







