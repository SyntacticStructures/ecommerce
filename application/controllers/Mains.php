<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mains extends CI_Controller {
	public function index()
	{		
<<<<<<< HEAD
<<<<<<< HEAD
		$this->load->view('products');
=======
		$this->load->view('order_info');
>>>>>>> Taylor
=======
		$this->load->view('temp_add_view');
>>>>>>> Taylor
	}
    public function admin(){/*how do i go just directly to admin without having mains in the url?*/
        $this->load->view('admin_login');
    }
    public function admindash(){
        if ($this->session->userdata('admin') == 'in') {
            $this->load->view('dashboard_orders');/*This if statement is to ensure that the admin is logged in so nobody can just type the url to get adin power*/
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
<<<<<<< HEAD
=======
    public function add_item(){

    }


>>>>>>> Taylor
}
