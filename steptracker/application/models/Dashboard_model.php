<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_model extends CI_Model{

    public function __construct(){
       parent::__construct();
       // $this->db19 = $this->load->database('gitam19', TRUE);
    }
  
  public function getReports($id)
  {
    $sql = "select * from reports where id=$id order by start_time desc";
      $query = $this->db->query($sql);
      return $query->result();
  }

  public function getStatistics()
  {
      $sql = "SELECT count(id) as files,sum(distance) as distance,sum(calories) as calories FROM `reports` where (start_time BETWEEN '".date('Y-m-d',strtotime($this->input->post('start_date')))."' and '".date('Y-m-d',strtotime($this->input->post('end_date')))."') and user_id=".$this->session->id;
        $query = $this->db->query($sql);
      $res=$query->result();
      $kms=number_format(($res[0]->distance/1000),2)." KM";
      $steps=round($res[0]->distance*1.3123);

    echo json_encode(array('kms'=>$kms,'steps'=>$steps,'calories'=>$res[0]->calories,'files'=>$res[0]->files));
  }

    public function getReport()
  {
      $sql = "SELECT count(id) as files,sum(distance) as distance,sum(total_time) as total_time,sum(calories) as calories FROM `reports` where start_time='".date('Y-m-d',strtotime($this->input->post('today')))."' and user_id=".$this->session->id;
        $query = $this->db->query($sql);
      $res=$query->result();
      $kms=number_format(($res[0]->distance/1000),2);
      $steps=round($res[0]->distance*1.3123);
      if($res[0]->calories!='') $calories=$res[0]->calories;else $calories=0;
 //   $distance=$res[0]->distance;
 // $time=($res[0]->total_time/3600);
 // $speed=number_format($kms/$time,2);
    echo json_encode(array('kms'=>$kms,'steps'=>$steps,'calories'=>$calories,'files'=>$res[0]->files));
  }

  function getHistory()
  {
    $sql = "SELECT * FROM `reports` where user_id=".$this->session->id;
        $query = $this->db->query($sql);
      return $res=$query->result();
  }
  function getUser($id)
  {
    $sql = "SELECT * FROM `users` where id=".$id;
        $query = $this->db->query($sql);
       $res=$query->result();
       return $res[0];
  }
  function getHistorybyID($id)
  {
        $sql = "SELECT * FROM `reports` where id=".$id;
        $query = $this->db->query($sql);
        $res=$query->result();
        return $res[0];
  }
  function getChartDetails($type)
  {    
    $res=array();
      $current_date=date('Y-m-d');
   
      if($type=='10 Days'){
      
          for($i=10;$i>=0;$i--)
          {
               $new_date=date('d.m.Y',strtotime("-".$i." days"));
              $sql = "SELECT count(id) as files,sum(distance) as distance,sum(calories) as calories FROM `reports` where date(start_time)='".date('Y-m-d',strtotime($new_date))."' and user_id=".$this->session->id;
              $query = $this->db->query($sql);
              $res1=$query->result();
              $kms=number_format(($res1[0]->distance/1000),2);
              $steps=round($res1[0]->distance*1.3123);
              if($res1[0]->calories!='') $calories=$res1[0]->calories;else $calories=0;
              $res['dates'][]=date("d M Y",strtotime($new_date));
              $res['kms'][]=$kms;
              $res['steps'][]=$steps;
              $res['calories'][]=$calories;
          }
      }
         if($type=='year'){
      
          for($i=1;$i<=12;$i++)
          {
               $year=date('Y');
               $month=$i;
              $sql = "SELECT count(id) as files,sum(distance) as distance,sum(calories) as calories FROM `reports` where month(start_time)='".$month."' and year(start_time)='".$year."' and user_id=".$this->session->id;
              $query = $this->db->query($sql);
              $res1=$query->result();
              $kms=number_format(($res1[0]->distance/1000),2);
              $steps=round($res1[0]->distance*1.3123);
              if($res1[0]->calories!='') $calories=$res1[0]->calories;else $calories=0;

$monthName = date('F', mktime(0, 0, 0, $month, 10));

              $res['dates'][]=$monthName;
              $res['kms'][]=$kms;
              $res['steps'][]=$steps;
              $res['calories'][]=$calories;
          }
      }
      echo json_encode($res);
  }
}
