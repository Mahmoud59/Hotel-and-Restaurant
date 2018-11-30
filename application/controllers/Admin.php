<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct()
    {
      parent::__construct();
      if($this->session->userdata('admin')['logged_in'] == !TRUE)
      {
        redirect('Login/admin');
      }

    }

    // view information to admin
	public function control()
	{
	    $data['room']=$this->mod->get_all('rooms','room_id');
	    $this->load->view('control',$data);
	}

	//edit information of room from admin
	    public function edit_room($id)
	    {
	            /*$r = $this->mod->gg('rooms',1);
	            foreach ($r as $value) 
	            {
	                $room_id = $value->room_id;
	            }*/
	            $res['room'] = $this->mod->get_room('rooms',$id);
	            $this->load->view('editroom', $res);
	    }

	    //delete room 
	    public function delete_room($id)
	    {
	            if ($this->mod->delete($id)) {
	                redirect('Admin/control');
	            } else 
	            {
	                echo "Don't deleted";
	                redirect('Admin/control');
	            }   
	    }

	    //update information of room from admin
	    public function update($id) 
	    {
	            $data['room_id'] = $this->input->post('room_id');
	            $data['Check'] = $this->input->post('Check');
	            $data['Type'] = $this->input->post('Type');
	            $data['user_id'] = $this->input->post('User_ID');
	            $data['num_card'] = $this->input->post('Number_Card');
	            $config['upload_path']          = 'images/photos/';
	            $config['allowed_types']        = 'gif|jpg|png|jpeg';
	            $config['max_size']             = 100000;
	            $config['max_width']            = 11024;
	            $config['max_height']           = 1768;
	            $config['encrypt_name']         = TRUE;
	            $this->load->library('upload', $config);
	            if ( ! $this->upload->do_upload('image'))
	            {   $error = array('error' => $this->upload->display_errors());
	                $this->load->view('editroom', $error);
	            }
	            else
	            {
	                $oldImage = htmlspecialchars(trim($this->input->post('oldImage')));
	                unlink('images/photos/'.$oldImage);
	                $image = array('upload_data' => $this->upload->data());
	                $data['image'] = $image['upload_data']['file_name'];
	            }
	            $this->mod->update($id, $data);
	            redirect('Admin/control');
	    }

	    public function add_room()
	    {
	        $this->load->view('add-room');
	    }

	    public function toadd_room()
    	{
	        $data['Type'] =   $this->input->post('Type');
	        $data['Location']    = htmlspecialchars($this->input->post('Location'));
	        $data['Size']   = htmlspecialchars($this->input->post('Size'));
	        $data['Price']      = htmlspecialchars($this->input->post('Price'));
	        $config['upload_path']          = 'images/photos/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 100000;
            $config['max_width']            = 11024;
            $config['max_height']           = 1768;
            $config['encrypt_name']         = TRUE;
            $this->load->library('upload', $config);
            if ( ! $this->upload->do_upload('image'))
            {
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('add-room', $error);
            }
            else
            {
                $image = array('upload_data' => $this->upload->data());
                $data['image'] = $image['upload_data']['file_name'];
            }
	        if ($this->mod->insert('rooms',$data) == TRUE) 
	        {
	           redirect('Admin/control');
	        }
   		}  

   		// view information of each user and edit it
   		public function info_user($id)
   		{
   			$data['o']=$this->mod->get_user('rooms',$id);
		    $data['user'] = $this->mod->get_user('users',$id);
		    $this->load->view('profile-admin',$data);
   			
   		}

   		// edit info of user
   		public function update_user($id)
   		{
   			$p = $this->mod->get_user('users',$id);
   			foreach ($p as $value) 
   			{
   				$passw = $value->password;
   			}
   			$data['username'] = $this->input->post('username');
   			if ($this->input->post('password') !=  $passw) 
   			{
   				$data['password'] = md5($this->input->post('password'));
   			}
   			
	        $data['address'] = $this->input->post('address');
	        $data['national_id'] = $this->input->post('national_id');
	        $data['phone'] = $this->input->post('phone');
	        $this->mod->update_user($id, $data);
	        redirect('Admin/control');
   		}
	}
