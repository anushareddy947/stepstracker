<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_files extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('Main_model');
       
    }
	public function index()
	{
    $data['files']=$this->Main_model->getReports($this->session->id);
    
		$this->load->view('add-file',$data);
	}

    function updateReport()
    {
         if($_FILES['tcx_file']['name']!=''){

         $config['upload_path']   = './uploads/tcx/'; 
         $config['allowed_types'] = '*'; 
         // $config['max_size']      = 100; 
         // $config['max_width']     = 1024; 
         // $config['max_height']    = 768;  
         $new_name = time()."-".$_FILES["tcx_file"]['name'];
         $config['file_name'] = $new_name;
         $this->load->library('upload', $config);
            
         if ( ! $this->upload->do_upload('tcx_file')) {
            $error = array('error' => $this->upload->display_errors()); 
            
            $this->session->set_flashdata('error','Error while upload profile pic.'.$error['error']);
             redirect('add-files');
         }else { 
            $file_path='uploads/tcx/'.$new_name;
         } 
      
       if($file_path!=''){



        $fileContents= file_get_contents(base_url().$file_path);

        $fileContents = str_replace(array("\n", "\r", "\t"), '', $fileContents);
        
        $fileContents = str_replace('xsi:type','type',  $fileContents);
        $fileContents = trim(str_replace('"', "'", $fileContents));

        $simpleXml = simplexml_load_string($fileContents);
        
        $json = json_encode($simpleXml);
        $json=json_decode($json);
        //print_r($json);
        $data['app_name']=$json->Activities->Activity->Creator->Name;
        $data['sport']=$json->Activities->Activity->{'@attributes'}->Sport;
        $data['start_time']=date('Y-m-d H:i:s',strtotime($json->Activities->Activity->Lap->{'@attributes'}->StartTime));
        $data['total_time']=$json->Activities->Activity->Lap->TotalTimeSeconds;
        $data['distance']=$json->Activities->Activity->Lap->DistanceMeters;
        $data['calories']=$json->Activities->Activity->Lap->Calories;
       // print_r($json->Activities->Activity->Lap->AverageHeartRateBpm->Value);
        // if($json->Activities->Activity->Lap->AverageHeartRateBpm->Value!='') $data['avgHeartrateperMint']=$json->Activities->Activity->Lap->AverageHeartRateBpm->Value;else
         $data['avgHeartrateperMint']=0;
         // if($json->Activities->Activity->Lap->maxHeartrateperMint->Value!='') $data['maxHeartrateperMint']=$json->Activities->Activity->Lap->MaximumHeartRateBpm->Value;else 
         $data['maxHeartrateperMint']=0;
        $trackpoints=$json->Activities->Activity->Lap->Track->Trackpoint;
        $tracks=array();
        foreach ($trackpoints as $track) {
            $tracks[]=array('time'=>date("Y-m-d H:i:s",strtotime($track->Time)),'lat'=>$track->Position->LatitudeDegrees,'lang'=>$track->Position->LongitudeDegrees);

        }
        $data['trackpoints']=json_encode($tracks);
          $data['user_id']=$this->session->id;
          $data['file']=$file_path;
          $data['status']=1;
          $re=$this->Main_model->insertReport($data);
  if($re!=''){
       $this->session->set_flashdata('success','Reports updated successfully.');
       redirect('add-files');
  }

       }





     }
    }
	function goal()
    {
       if($this->input->post('goal')!=''){
          $this->Main_model->updateGoal();
           $this->session->set_flashdata('success','Goal updated successfully.');
           redirect('goal');
       }
          $data['user']=$this->Main_model->getUser($this->session->id);
        $this->load->view('goal',$data);
    }
}
