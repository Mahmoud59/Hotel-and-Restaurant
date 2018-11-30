<?php

class mod extends CI_Model{

	public function insert($table,$data)
    {
        if($this->db->insert($table,$data))
        {
          return true;
        }
        else
          return false;
    }

    /*public function rev($id,$data)
    {
        $this->db->where('room_id',$id);

        if($this->db->insert('rooms' , $data))
        {
            return true;
        }
    }*/

    public function reserve($id,$data)
    {
        $this->db->where('room_id',$id);
        if($this->db->update('rooms' , $data))
        {
            return true;
        }
    }


    public function check($email,$password)
    {
        $this->db->where('email',$email);
        $this->db->where('password',$password);
        $sql=$this->db->get('users');

        if ($sql->num_rows() > 0) 
            return $sql->result();
        
        else 
            return FALSE;
    }

    /*public function get_user_id($email) {
        $this->db->select('user_id');
        $this->db->where('email', $email);

        $q = $this->db->get('users');

        return $q->result();
    }*/

    public function checkadmin($email,$password)
    {
        $this->db->where('email',$email);
        $this->db->where('password',$password);
        $sql=$this->db->get('adminstrator');

        if ($sql->num_rows() > 0) 
            return $sql->result(); 
        
        else 
            return FALSE;
    }

    public function get_all($tablename,$order)
    {
        $this->db->order_by($order);
        $sql=$this->db->get($tablename);
        
        return $sql->result();

    }

    // view avalible room
    public function get_alltr($tablename,$order)
    {
        $this->db->where('Check',0);
        $this->db->order_by($order);
        $sql=$this->db->get($tablename);
        return $sql->result();

    }


    public function get_room($table,$room_id)
    {
        $this->db->where('room_id',$room_id);
        $sql=$this->db->get($table);
       return $sql->result();
    }

    public function get_user($table,$user_id)
    {
        $this->db->where('user_id',$user_id);
        $sql=$this->db->get($table);
       return $sql->result();
    }

    /*public function gg($table,$user_id)
    {
        $this->db->where('user_id',$user_id);
        $sql=$this->db->get($table);
       return $sql->result();
    }*/

  public function delete($id)
    {
        $this->db->where('room_id' ,$id);
        if($this->db->delete('rooms'))
        {
            return true;
        }
    }

    public function update($id , $data)
    { 
        $this->db->where('room_id' , $id);
        if($this->db->update('rooms' , $data))
        {
            return true;
        }
    }

    public function update_user($id , $data)
    { 
        $this->db->where('user_id' , $id);
        if($this->db->update('users' , $data))
        {
            return true;
        }
    }


    /*public function clc($table,$userid)
    {
        $this->db->where('user_id',$userid);
        $sql=$this->db->get($table);
       return $sql->result();

    }


    public function get_serve($id)
    {
        $this->db->select('Services');
        $this->db->from('rooms');
        $this->db->where('user_id',$id);
        return $this->db->get()->row()->Services;
    }

    public function get_food($id)
    {
        $this->db->select('Food');
        $this->db->from('rooms');
        $this->db->where('user_id',$id);
        return $this->db->get()->row()->Food;
    }*/

    public function get_from($id)
    {
        $this->db->select('res_from');
        $this->db->from('rooms');
        $this->db->where('room_id',$id);
        return $this->db->get()->row()->res_from;
    }

    public function get_to($id)
    {
        $this->db->select('res_to');
        $this->db->from('rooms');
        $this->db->where('room_id',$id);
        return $this->db->get()->row()->res_to;
    }

    public function get_price($id)
    {
        $this->db->select('Price');
        $this->db->from('rooms');
        $this->db->where('room_id',$id);
        return $this->db->get()->row()->Price;
    }

    /*public function get_tprice($id)
    {
        $this->db->select('total_days');
        $this->db->from('rooms');
        $this->db->where('room_id',$id);
        return $this->db->get()->row()->total_days;
    }

    public function roomid($table,$user_id)
    {
        $this->db->where('user_id',$user_id);
        $sql=$this->db->get($table);
        $sql=$this->db->get('room_id');
       return $sql->result();
    }*/
}