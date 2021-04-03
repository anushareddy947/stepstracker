<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Main_model extends CI_Model{

    public function __construct(){
       parent::__construct();
      
    }

   public function checkLogin()
   {
       $sql = "select * from users where email='".$this->input->post('email')."' and password='".$this->input->post('password')."'";
       $query = $this->db->query($sql);
     
        if($query->num_rows()>0)
       {
              $output = $query->result();
        $user=$output[0];
         $this->session->set_userdata('id', $user->id);
         $this->session->set_userdata('name', $user->first_name." ".$user->last_name);
         $this->session->set_userdata('email', $user->email);
         $this->session->set_userdata('profile_pic', $user->profile_pic);
        return true;

      }else return false;
   }
  public function insertUser($data){
        
        $this->db->insert('users', $data);
        $lastid = $this->db->insert_id();
        return $lastid;
    }
      public function insertReport($data){
        
        $this->db->insert('reports', $data);
        $lastid = $this->db->insert_id();
        return $lastid;
    }
  public function getUser($id)
  {
      $sql = "select * from users where id=$id";
      $query = $this->db->query($sql);
      $user=$query->result();
      return $user[0];
  }
    public function updateUser($data){
        $this->db->where('id', $data['id']);
        $result = $this->db->update('users' , $data);
        return $result;
   }
  public function getReports($id)
  {
     $sql = "select * from reports where user_id=$id order by start_time desc";
      $query = $this->db->query($sql);
      return $query->result();
  }

  public function updateGoal()
  {
    $this->db->query("update users set goal='".$this->input->post('goal')."' where id=".$this->session->id);
    return true;
  }
}
