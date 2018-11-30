<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
    {
    	$this->load->view('login');
    }

    // check info of user if right or not
	public function loguser()
    {
            $email=$this->input->post('email');
            $password= md5($this->input->post('password'));
            $result = $this->mod->check($email,$password);
            if ($result == TRUE) 
            {
            foreach ($result as $value) 
               {
                   $user_id = $value->user_id;
                   $username = $value->username;
               }
    		$data = array(
    			'logged_in' => TRUE,
    			'username' => $username,
                'user_id' => $user_id
    		);
    		$this->session->set_userdata('data' , $data);
    		$this->load->view('new-home');
    	}
    	else
    	{
            //echo "string";
    		redirect('Login');
    	}
    }

    // login admin
    public function logadmin()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $result = $this->mod->checkadmin($email,$password);
        if($result == TRUE)
        {
            foreach ($result as $value) 
            {
                $id = $value->id;
                $email = $value->Email;
            }
            $admin = array(
                'logged_in' => TRUE,
                'email' => $email,
                'id' => $id
            );
            $this->session->set_userdata('admin' , $admin);
            redirect('Admin/control');
        }
        else
        {
            redirect('Login/admin');
        }
    }

    // view page of login admin
    public function admin()
    {
        $this->load->view('admin-login');
    }

    public function registration()
   	{
   		$this->load->view('register');
   	}

   	public function register()
    {
        $this->form_validation->set_message('xss_clean', 'dangerous!! bad request');
        $this->form_validation->set_message('is_unique', 'The  email or name is already Exists please try another email or name');
        $this->form_validation->set_message('required', 'هذا الحقل مطلوب');
        $this->form_validation->set_rules('username','name','required|min_length[3]|max_length[40]');
        $this->form_validation->set_rules('email','mail','required|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) 
        {
            $err['username'] = $this->input->post('username');
            $err['password'] = $this->input->post('password');
            $err['email'] = $this->input->post('email');
            $this->load->view('register', $err);
        }
        else
        {
            $data['username'] = htmlspecialchars($this->input->post('username'));
            $data['password'] = md5($this->input->post('password'));
            $data['email']    = htmlspecialchars($this->input->post('email'));
            $data['gender']   = htmlspecialchars($this->input->post('gender'));
            $data['age']      = htmlspecialchars($this->input->post('age'));
            $data['address']  = htmlspecialchars($this->input->post('address'));
            $data['phone']    = htmlspecialchars($this->input->post('phone'));
            $data['national_id']    = htmlspecialchars($this->input->post('national_id'));

            if ($this->mod->insert('users',$data) == TRUE) 
            {
                //$this->session->set_flashdata('item', 'value');
                redirect('Login');
            }
            else
            {
                redirect('Login/registration');
            }
        }
    }

    public function logout() {
           $this->session->unset_userdata('email');
           $this->session->unset_userdata('id');
           $this->session->unset_userdata('logged_in');
           $this->session->sess_destroy();

           redirect('Login');
       }
}
?>