<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project extends CI_Controller {
    
    public function __construct()
    {
      parent::__construct();
      if($this->session->userdata('data')['logged_in'] == !TRUE)
      {
        redirect('Login');
      }

    }

    // view home of website
    public function home()
    {
    	$user_id = $this->session->userdata('data')['user_id'];
		  $data = $this->mod->get_user('rooms',$user_id );
      
  		foreach ($data as $value) 
  		{
  			$room_id = $value->room_id;
  		}
  		$info = $this->mod->get_user('rooms',$user_id);

  		foreach ($info as $value) 
  		{
  			$serve = $value->Services;
  			$food = $value->Food;
  			$tdays = $value->total_days;
  		}

  		@$td = $serve + $food + $tdays; // calculate new services , total cost of days and foods
  		$res['total_price']= $td;
      $this->mod->reserve($room_id,$res);
      $this->load->view('new-home');
    }

    // view avalible rooms
    public function rooms()
   	{
   		$data['room'] = $this->mod->get_alltr('rooms','room_id');
        $this->load->view('rooms-tariff',$data);
   	}

    // view avalible services
   	public function services()
    {
    	$data['user'] = $this->mod->get_all('rooms','room_id');
        $data['serve'] = $this->mod->get_all('services','service_id');
        $this->load->view('services',$data);
        
    }

    // view contact
    public function contact()
   	{
   		$this->load->view('contact');
   	}

    // edit information of user(replace,checkout and cancel)
   	public function editinfo($id)
    {
    	$da['o']=$this->mod->get_user('rooms',$id);
    	//$data['user'] = $this->mod->get_all('users','user_id');
        $this->load->view('edit',$da);
    }

    // view details of each room
    public function details($id)
    {
        $data['roo'] = $this->mod->get_room('rooms',$id);
        $this->load->view('room-details',$data);
    }

    // view page of reserve room
    public function reserve($id)
    {
        $res['roorm'] = $this->mod->get_room('rooms',$id);
        $this->load->view('reserve-room',$res);
    }

    // view menu of restaurant of hotel
    public function menu()
    {
        $data['food']=$this->mod->get_all('food','food_id');
        $this->load->view('menu',$data);
    }

    // carry data of reserve room and calculate cost of number days
    public function toreserve($id)
    {
        $rooms = $this->mod->get_all('rooms',$id);
        foreach ($rooms as $value) 
        {
          if($value->user_id == $this->session->userdata('data')['user_id'])
             $this->kill_old($value->room_id);
        }
        $data['res_from'] = $this->input->post('from');
        $data['res_to'] = $this->input->post('to');
        $data['pay'] = $this->input->post('payment-method');
        $data['num_card'] = $this->input->post('num');
        
        
        $data['user_id'] = $this->session->userdata('data')['user_id'];
        if($this->mod->reserve($id,$data)==TRUE)
        {
            $data['Check']=1;
            $this->mod->reserve($id,$data);
            $userid = $this->session->userdata('data')['user_id'];
            $d = $this->mod->get_from($id);
    		    $dd = $this->mod->get_to($id);
	    	    $datetime1 = new DateTime($d);
      			$datetime2 = new DateTime($dd);
      			$interval = $datetime1->diff($datetime2);
      			$days = $interval->format('%d');			
      			$td = $this->mod->get_price($id);
      			@$td = $td * $days;
            //echo $td;
      			$res['total_days']= $td;

      	      	$this->mod->reserve($id,$res);
                  redirect('Project/home');
        }
    }

    // cancel room
    public function cancel($id)
    {
    	$data['o']=$this->mod->get_user('rooms',$id);
      $this->load->view('out-cancel',$data);
    }

    // replace room
    public function replace()
    {
    	$da['o']=$this->mod->get_user('rooms',$id);
        $data['id']= $this->mod->get_room('rooms','room_id');
        $this->load->view('replace',$da);
    }

    // check out
    public function check($id)
    {
    	//1$da['user'] = $this->mod->get_all('users','user_id');
        $data['o']=$this->mod->get_user('rooms',$id);
        $this->load->view('out',$data);
    }

    // calculate cost of services
    public function calc()
    {
      $data=array();
        for ($i=0; $i < 10; $i++) 
        { 
            $data[$i] =$this->input->post($i);
            @ $result= $result + $data[$i] + $old;
        } 
      $user_id = $this->session->userdata('data')['user_id'];
      $old_service = $this->mod->get_user('rooms',$user_id);
      foreach ($old_service as $value) 
      {
      		$room_id = $value->room_id;
      		$serve = $value->Services;
      }
      $serve += array_sum($data);
      $res['Services']= $serve;
      $this->mod->reserve($room_id,$res);
      redirect('Project/home');
    }

    // calculate cost of foods
    public function calcf()
    {
      	$data=array();
      	$result=0;
        for ($i=0; $i < 10; $i++) 
        { 
            $data[$i] =$this->input->post($i);
            @ $result= $result + $data[$i];
        } 
     	$user_id = $this->session->userdata('data')['user_id'];
      	$old_food = $this->mod->get_user('rooms',$user_id);
	    foreach ($old_food as $value) 
	    {
	      	$room_id = $value->room_id;
	      	$food = $value->Food;
	    }
      	$food += array_sum($data);
      	$res['Food']= $food;
      	$this->mod->reserve($room_id,$res);
      	redirect('Project/home');
    }    

    // check out room
    public function kill_room($id)
    {
      $data['Check']=0;
      $data['res_from']=0;
      $data['res_to']=0;
      $data['Services']=0;
      $data['Food']=0;
      $data['pay']=0;
      $data['total_days']=0;
      $data['total_price']=0;
      $data['num_card']=0;
      $data['user_id']=NULL;
      $this->mod->reserve($id,$data);

      redirect('Login');
    }


    public function kill_old($id)
    {
      $data['Check']=0;
      $data['res_from']=0;
      $data['res_to']=0;
      $data['Services']=0;
      $data['Food']=0;
      $data['pay']=0;
      $data['total_days']=0;
      $data['total_price']=0;
      $data['num_card']=0;
      $data['user_id']=NULL;
      $this->mod->reserve($id,$data);

      redirect('Project/rooms');
    }

    // cancel room
    public function kill_cancel($id)
    {
      $data['Check']=0;
      $data['res_from']=0;
      $data['res_to']=0;
      
      $data['user_id']=NULL;
      $this->mod->reserve($id,$data);

      redirect('Project/home');
    }

    // view information of user
    public function profile($id)
    {
      $data['o']=$this->mod->get_user('rooms',$id);
      $data['user'] = $this->mod->get_user('users',$id);
      $this->load->view('profile',$data);
    }

    /*public function update_profile($id)
    {
      $res['username'] = $this->input->post('username');
      $res['age'] = $this->input->post('age');
      $res['password'] = $this->input->post('password');
      $res['phone'] = $this->input->post('phone');
      $this->mod->update_user($id, $res);
      redirect('Project/profile/'.$this->session->userdata('data')['user_id']);
    }*/

    }
    ?>