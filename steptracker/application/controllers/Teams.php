<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Teams extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('Teams_model');
       
    }
	public function index()
	{
        $data['page']='';
        $data['teams']=$this->Teams_model->getTeams($this->session->id);
		    $this->load->view('team',$data);
	}
    
    public function insertTEAM()
    {
        if($this->input->post('name')!='' && $this->input->post('type')!='')
        {
              $this->Teams_model->insertTeam($_POST);
              $this->session->set_flashdata('success','Team Created successfully.');
              redirect('teams');

        }
    }

    public function view()
    {
         $data['page']='';
          $data['team']=$this->Teams_model->getTeam($this->uri->segment(3));
          $data['members']=$this->Teams_model->getMembers($this->uri->segment(3));

          $data['team_members']=$this->Teams_model->getTeamReport($data['team']->id,$data['team']->created_on);

            $this->load->view('team_single',$data);
    }

public function updateTEAM()
    {
           if($_FILES['picture']['name']!=''){
         $config['upload_path']   = './uploads/group/'; 
         $config['allowed_types'] = 'gif|jpg|png|jpeg'; 
         // $config['max_size']      = 100; 
         // $config['max_width']     = 1024; 
         // $config['max_height']    = 768;  
         $new_name = time().$_FILES["picture"]['name'];
         $config['file_name'] = $new_name;
         $this->load->library('upload', $config);
            
         if ( ! $this->upload->do_upload('picture')) {
            $error = array('error' => $this->upload->display_errors()); 
            
            $this->session->set_flashdata('error','Error while upload profile pic.'.$error['error']);
         }else { 
            $_POST['image']='uploads/group/'.$new_name;
         } 
     }
$this->Teams_model->updateTeam($_POST);
$this->session->set_flashdata('success','Team updated successfully.');
redirect('/teams/view/'.$this->input->post('id'));
    }

public function loadPosts()
{
  $team_id=$this->uri->segment(3);
  $this->Teams_model->getPosts($team_id);
}
public function loadComments()
{
  $post_id=$this->uri->segment(3);
  $this->Teams_model->getComments($post_id);
}
public function saveComment()
{
    $this->Teams_model->saveComment($_POST);
}
public function saveLike()
{
  $team_id=$this->uri->segment(3);
  $this->Teams_model->saveLike($team_id);
}
public function savePost()
{
      if($_FILES['image']['name']!=''){
         $config['upload_path']   = './uploads/group/'; 
         $config['allowed_types'] = 'gif|jpg|png|jpeg'; 
         // $config['max_size']      = 100; 
         // $config['max_width']     = 1024; 
         // $config['max_height']    = 768;  
         $new_name = time().$_FILES["image"]['name'];
         $config['file_name'] = $new_name;
         $this->load->library('upload', $config);
            
         if ( ! $this->upload->do_upload('image')) {
            $error = array('error' => $this->upload->display_errors()); 
            
            $this->session->set_flashdata('error','Error while upload profile pic.'.$error['error']);
         }else { 
            $_POST['image']='uploads/group/'.$new_name;
         } 
     }
     $_POST['user_id']=$this->session->id;
     $_POST['status']=1;
$this->Teams_model->savePost($_POST);
}

function addMember()
{
    $this->Teams_model->addMember();
    $this->session->set_flashdata('success','New Member Added successfully');
    redirect('teams/view/'.$this->input->post('team_id'));
}
}
