<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
         if($this->session->id=='' && $this->uri->segment(1)!='login' && $this->uri->segment(1)!='register' && $this->uri->segment(1)!='forgot-password' ) redirect('login');
        $this->load->model('Dashboard_model');
       
    }
	public function index()
	{
        $data['name']='fdsfds';
        $data['history']=$this->Dashboard_model->getHistory();
       
		$this->load->view('dashboard',$data);
	}
    public function getStatistics()
    {
        $this->Dashboard_model->getStatistics();
    }
     public function getReport()
    {
        $this->Dashboard_model->getReport();
    }
	public function show_map()
    {
        $data['history']=$this->Dashboard_model->getHistorybyID($this->uri->segment(2));
      
        $this->load->view('show_map',$data);
    }
    public function getChartDetails()
    {
        $this->Dashboard_model->getChartDetails($this->input->post('type'));
    }
}
