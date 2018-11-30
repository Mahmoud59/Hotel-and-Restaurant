<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

	
    public function prin()
    {
        $e = md5(12345);
        echo $e.'<br>';
        echo md5($e);
    }

    public function out()
    {
        $email = $this->input->post('email');
        $password = md5($this->input->post('password'));
        if($password == md5(12345))
            echo "true";
        /*$result = $this->mod->check($email,$password);
        if($result == TRUE)
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
        }*/
        else
        {
            echo "string";
            //redirect('Login');
        }
    }
}
?>