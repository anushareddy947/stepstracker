<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Teams_model extends CI_Model{

    public function __construct(){
       parent::__construct();
       // $this->db19 = $this->load->database('gitam19', TRUE);
    }

  public function insertTeam($data){
        
        $this->db->insert('teams', $data);
        $lastid = $this->db->insert_id();
        $row['team_id']=$lastid;
        $row['user_id']=$data['user_id'];
        $row['status']=1;
        $this->db->insert('team_members', $row);
        $lastid = $this->db->insert_id();
        return $lastid;
    }
  public function getTeams($id)
  {
      $sql = "SELECT t.*,(select count(id) from team_members where team_id=tm.team_id) as members FROM `team_members` tm left join teams t on t.id=tm.team_id where tm.user_id=$id  group by tm.team_id";
      $query = $this->db->query($sql);

       return $query->result();
     
  }
  function getMembers($id)
  {
         $sql = "SELECT * FROM `users` where id not in(select DISTINCT user_id from team_members where team_id=$id)";
      $query = $this->db->query($sql);

       return $query->result();   
  }
    public function getTeam($id){
       $sql = "SELECT t.*,(select count(id) from team_members where team_id=t.id) as members FROM `teams` t  where t.id=$id";
      $query = $this->db->query($sql);
      $res=$query->result();
       $team=$res[0];
      
     $teamreport=$this->getTeamReport($team->id,$team->created_on);
    
     $team->distance=0;
       $team->steps=0;
       $team->calories=0;
     foreach ($teamreport as $report) {
   
           $team->distance+=$report['distance'];
       $team->steps+=$report['steps'];
       $team->calories+=$report['calories'];
     }


       
       return $team;
   }

   function getTeamReport($tid,$team_created_on)
   {    
        $response=array();
       $sql = "SELECT * FROM `team_members` tm left join users u on u.id=tm.user_id where team_id=$tid";
        $query = $this->db->query($sql);
        $team_members=$query->result();
       
        foreach ($team_members as $member) {
          
             $sql = "SELECT count(id) as files,sum(distance) as distance,sum(calories) as calories FROM `reports` where (date(start_time) BETWEEN '".date('Y-m-d',strtotime($team_created_on))."' and '".date('Y-m-d',strtotime(date('Y-m-d') . ' +1 day'))."') and user_id=".$member->user_id;
               $query = $this->db->query($sql);
               $res=$query->result();
               $kms=number_format(($res[0]->distance/1000),2);
               $steps=round($res[0]->distance*1.3123);
               if($res[0]->calories=='') $res[0]->calories=0;
        $response[]=array('member'=>$member,'distance'=>$kms,'steps'=>$steps,'calories'=>$res[0]->calories);

         
        }
        return $response;


   }
    public function updateTeam($data){
        $this->db->where('id', $data['id']);
        $result = $this->db->update('teams' , $data);
        return $result;
   }
 public function getPosts($team_id)
 {
   $sql = "SELECT tp.*,first_name,last_name,profile_pic,(select count(id) from post_likes where post_id=tp.id) as likes,(select count(id) from post_comments where post_id=tp.id) as comments FROM `team_posts` tp  left join users u on u.id=tp.user_id where tp.team_id=$team_id  order by created_on desc";
        $query = $this->db->query($sql);
        echo json_encode($query->result());
 }
 

 function getComments($pid)
 {

  $html='';
     $sql = "SELECT pc.*,first_name,last_name FROM `post_comments` pc left join users u on u.id=pc.user_id where post_id=$pid  order by comment_on desc";
        $query = $this->db->query($sql);
     foreach ($query->result() as $comment) {
       
        $html.='<li class="box_reply row" style="padding-left:15px;"> <div class="result_comment col-md-11">
                                                      <h4>'.$comment->first_name.' '.$comment->last_name.' <span class="comment_date">'.date('Y-m-d H:iA',strtotime($comment->comment_on)).'</span></h4>
                                                      <p>'.$comment->comment.'</p> </div></li>';
     }
     echo json_encode(array('html'=>$html));
 }
function saveComment($data)
{
        $this->db->insert('post_comments', $data);
        $lastid = $this->db->insert_id();
          $html='<li class="box_reply row" style="padding-left:15px;"> <div class="result_comment col-md-11">
                                                      <h4>'.$this->session->name.'<span class="comment_date">'.date('Y-m-d H:iA').'</span></h4>
                                                      <p>'.$data['comment'].'</p> </div></li>';
     
     echo json_encode(array('html'=>$html));
}
public function saveLike($pid)
{
    $query = $this->db->query('select * from post_likes where post_id='.$pid.' and user_id='.$this->session->id);
    if($query->num_rows()>0){
         $this->db->query('delete from post_likes where post_id='.$pid.' and user_id='.$this->session->id);
         $label='like';
    }else{
        $this->db->query("insert into post_likes set post_id='$pid',user_id='".$this->session->id."',post_like=1");
        $label='dislike';
    }
    $query = $this->db->query('select * from post_likes where post_id='.$pid);
    echo $query->num_rows()." ".$label;
}

public function savePost($data)
{
    $this->db->insert('team_posts', $data);
        $lastid = $this->db->insert_id();
}
function addMember()
{
     $this->db->query("insert into team_members set team_id='".$this->input->post('team_id')."',user_id='".$this->input->post('member')."',status=1");
}
}
