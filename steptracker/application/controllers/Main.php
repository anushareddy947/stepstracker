<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('Main_model');
        $this->load->model('Dashboard_model');
             if($this->session->id=='' && $this->uri->segment(1)!='login' && $this->uri->segment(1)!='register' && $this->uri->segment(1)!='forgot-password' ) redirect('login');
       
    }
	public function index()
	{
 $data['history']=$this->Dashboard_model->getHistory();
 $data['user']=$this->Dashboard_model->getUser($this->session->id);
       
		$this->load->view('index',$data);
	}
	public function login()
	{

		
		if($this->input->post('email')!='' && $this->input->post('password')){
               $res=$this->Main_model->checkLogin();
               if($res){
                    redirect('/');
               }else{
               	  $this->session->set_flashdata('error','Invalid Email/Password.');
               }
		}
		$this->load->view('login');
	}
 
 function register()
 {
 	$this->load->view('register');
 }
 function profile()
 {
 	$data['profile']=$this->Main_model->getUser($this->session->id);
 	$this->load->view('profile',$data);
 }
function updateProfile()
{
	//print_r($_FILES);
   if($_FILES['profile_pic']['name']!=''){
         $config['upload_path']   = './uploads/'; 
         $config['allowed_types'] = 'gif|jpg|png|jpeg'; 
         // $config['max_size']      = 100; 
         // $config['max_width']     = 1024; 
         // $config['max_height']    = 768;  
         $new_name = time().$_FILES["profile_pic"]['name'];
         $config['file_name'] = $new_name;
         $this->load->library('upload', $config);
			
         if ( ! $this->upload->do_upload('profile_pic')) {
            $error = array('error' => $this->upload->display_errors()); 
            
            $this->session->set_flashdata('error','Error while upload profile pic.'.$error['error']);
         }else { 
            $_POST['profile_pic']='uploads/'.$new_name;
         } 
     }
$this->Main_model->updateUser($_POST);
$this->session->set_flashdata('success','Profile updated successfully.');
redirect('/profile');
    

      
}





function addUser()
{
	if($this->input->post('email')!='' && $this->input->post('password')!='')
	{
		  $id=$this->Main_model->insertUser($_POST);
		  if($id!=''){
		  	$this->session->set_flashdata('success','Account created successfully.');
		  }else{
		  	$this->session->set_flashdata('error','Sorry Somthing went wrong.');
		  }
		  redirect('/register');
	}
}

 function changePassword()
 {
 	if($this->input->post('cpassword')!='' && $this->input->post('cnpassword') && $this->input->post('npassword')){
 		$this->Main_model->changePassword();
 		redirect('change-password');
 	}

 	$this->load->view('change-password');
 }


 public function logout()
    {
         session_destroy();
         redirect('login');
    }

}
