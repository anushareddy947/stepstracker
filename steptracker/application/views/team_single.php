

<!-- Main header section-->
<?php include('includes/main-header.php');?>
<style type="text/css">.comment_date {
    font-size: 10px;
    float: right;
}
.post_image {
    width: 100%;
    max-width: 200px;
    box-shadow: 0px 0px 5px #cccccc61;
    margin: 10px 10px 20px;
}
</style>
<body id="page-top">
   <!-- Page Wrapper -->
   <div id="wrapper">
      <!-- Left menu -->
      <?php include('includes/left-menu.php');?>
      <!-- End of Left menu -->
      <div id="content-wrapper" class="d-flex flex-column">
         <div id="content">

            <!-- Topbar -->
            <?php include('includes/top-bar.php');?>
            <!-- End of Topbar -->
            <div class="container-fluid">
               <div class="row forms_inner">
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                     <?php if($this->session->flashdata('error')!=''){?>
                         <div class='alert alert-danger'>
                             <?=$this->session->flashdata('error')?>
                         </div>
                    <?php }?>
                      <?php if($this->session->flashdata('success')!=''){?>
                         <div class='alert alert-success'>
                             <?=$this->session->flashdata('success')?>
                         </div>
                    <?php }?>
                     <div class="row">
                        <div class="col-sm-6">
                           <h1 class="h3  mb-0  text-gray-800">Team</h1>
                        </div>
                        <div class="col-sm-6 text-right">

                           <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#myModal">Edit Group</button>
                           <button type="button" class="btn btn-danger btn-sm" onclick="confirm('are you sure?')">Exit Group</button>
                           <button type="button" class="btn btn-primary btn-sm"><i class="fa fa-share-alt"></i></button>
                        </div>
                     </div>
                     <hr>
                  </div>
               </div>
               <div class="  mb-4 team_sec">
                  <div class="team_dash">
                     <div class="row">
                        <div class="col-sm-4">
                           <div class="team_image">
                            <?php if($team->image==''){?>
                              <img src="<?=base_url('assets/img/team.jpeg')?>" class="img-fluid">
                            <?php }else{?>
<img src="<?=base_url()?><?=$team->image?>" class="img-fluid">
                            <?php }?>
                           </div>
                        </div>
                        <div class="col-sm-8">
                           <h1 class="h4  mb-0  text-gray-800"><?=$team->name?></h1>
                           <p><?=$team->description?></p>
                           <div class="team_more">
                              <ul>
                                 <li><i class="fa fa-clock-o"></i> <?=date('Y-m-d',strtotime($team->created_on))?></li>
                                 <li><i class="fa fa-check-circle-o"></i> <?=$team->type?></li>
                              </ul>
                           </div>
                           <br>
                           <div class="row">
                              <div class="col-sm-3">
                                 <div class="team_report col3">
                                    <h3><?=$team->members?> </h3>
                                    <h6>Total members</h6>
                                 </div>
                              </div>
                              <div class="col-sm-3">
                                 <div class="team_report col2">
                                    <h3><?=$team->distance?></h3>
                                    <h6>Total distance (km)</h6>
                                 </div>
                              </div>
                              <div class="col-sm-3">
                                 <div class="team_report ">
                                    <h3><?=$team->steps?></h3>
                                    <h6>Total steps </h6>
                                 </div>
                              </div>
                              <div class="col-sm-3">
                                 <div class="team_report col4">
                                    <h3><?=$team->calories?></h3>
                                    <h6>Calories burn</h6>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                   <div class="team_list mt-5">
                     <button class='btn btn-primary btn-sm'  data-toggle="modal" data-target="#team_join" style="float: right;margin-top: 11px;">Add Member</button>
                        <ul class="nav nav-tabs">
                           <li class="nav-item">
                              <a class="nav-link active" data-toggle="tab" href="#posts">Team posts </a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" data-toggle="tab" href="#members">Members </a>
                           </li>
                        </ul>

                        <div class="tab-content">
                           <div class="tab-pane  active" id="posts">
                               <div class="team_post">
                   
                     <div class="col-md-12" id="fbcomment">
       

                              <div class="body_comment">
                                 <div class="row">
                                    <div class="avatar_comment col-md-1">
                                      <img src="<?=base_url()?><?php if($this->session->profile_pic=='') echo '';else echo $this->session->profile_pic;?>" class="rounded-circle img-fluid" />
                                    </div>
                                    <div class="box_comment col-md-11">
                                    <form id='post_form'>
                                      <input type='hidden' name='user_id' value='<?=$this->session->id?>'>
                                      <textarea class="commentar form-control post_content" placeholder="Add a comment..."></textarea>
                                      <input type='file' name='post_file' id='post_image'>
                                      <div class="box_post">
                                       
                                       <div class=" text-right mt-2">
                                        
                                         <button type="button"  class="btn btn-primary btn-sm post_submit" >Post comment</button>
                                       </div>
                                      </div>
                                    </form>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <ul id="list_comment" class="col-md-12">

                               
                                    </ul>
                                
                                 </div>
                              </div>
                           </div>
                  </div>
                           </div>
                           <div class="tab-pane  fade" id="members">
                              <div class="card-body table_style">
                                  <div class="table_nav">
                          
                           
                           
                                 <div class="table-responsive p-3">
                                    <table class="table "  width="100%">
                                      <thead class="thead-light">
                                        <tr>
                                          <th>Proflie</th>
                                         
                                          <th>Distance </th>
                                          
                                          
                                          <th>Steps</th>
                                           <th>Calories burn</th>
                                            <th></th>
                                           
                                          
                                        </tr>
                                      </thead>
                                     
                                      <tbody>
                                        <?php foreach($team_members as $member){

                                         ?>
                                        <tr>
                                          <td> <img src="<?=base_url()?><?php if($member['member']->profile_pic=='') echo '';else echo $member['member']->profile_pic;?>" class="rounded-circle img-fluid"> <?=$member['member']->first_name." ".$member['member']->last_name?></td>
                                         
                                          <td><?=$member['distance']?> km</td>
                                          <td><?=$member['steps']?></td>
                                         
                                         
                                          <td><?=$member['calories']?></td>
                                          <td>

                                            <button class="btn btn-danger btn-sm"><i class="fa fa-times-circle"></i></button>


                                          </td>
                                         
                                          
                                        </tr>
                                      <?php }?>
                                        
                                        
                                      </tbody>
                                    </table>
                                  </div>
                            
                            </div>
                          
                              </div>
                            </div>
                        </div>
                     </div>

                 
               </div>
            </div>
         </div>
      </div>
   </div>
   </div>
    <!-- create team -->
   <div class="modal modal_style" id="myModal">
      <div class="modal-dialog">
         <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
               <h5 class="modal-title">
               Create team</h5>
               <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
             <form class="user" action="<?=base_url('teams/updateTEAM')?>" method='post' enctype="multipart/form-data">
            <!-- Modal body -->
            <div class="modal-body">
              
                  <div class="row">
                     <div class="col-sm-12">
                        <div class="form-group">
                           <input type='hidden' name='id' value='<?=$team->id?>'>
                           <label for="current_pwd">Team name</label>
                           <input type="text" name='name' class="form-control " value='<?=$team->name?>' id="current_pwd" >
                        </div>
                        <div class="form-group">
                           <label for="current_pwd">Team type</label>
                           <select class="form-control" name='type'>
                              <option value='Family' <?php if($team->name=='Family') echo 'selected';?>>Family</option>
                              <option value='Friends' <?php if($team->name=='Friends') echo 'selected';?>>Friends</option>
                              <option value='Work - Buddies' <?php if($team->name=='Work - Buddies') echo 'selected';?>>Work - Buddies</option>
                           </select>
                        </div>
                        <div class="form-group">
                           <label for="current_pwd">Team description</label>
                           <textarea class="form-control" name='description'><?=$team->description?></textarea> 
                        </div>
                         <div class="form-group">
                           <label for="picture">Team Picture</label>
                            <input type="file" name='picture' class="form-control " id="picture" > 
                        </div>
                     </div>
                  </div>
              
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
               <div class="col-sm-12 text-center">
                  <button type="submit" class="btn btn-primary text-center">Save</button>
               </div>
            </div>
         </div>
          </form>
      </div>
   </div>

   <!-- Scroll to Top Button-->
   <a class="scroll-to-top rounded" href="#page-top">
   <i class="fas fa-angle-up"></i>
   </a>

<!-- The Modal -->
<div class="modal" id="team_join">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Add Member</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
          <form action='<?=base_url("Teams/addMember")?>' method='post'>
            <input type='hidden' name='team_id' value='<?=$team->id?>'>
              <div class='form-group'>
                <label>Selecct Member</label>
                <select name='member' class='form-control'>
                    <option value=''>Choose Member</option>
                    <?php foreach($members as $member){?>
                        <option value='<?=$member->id?>'><?=$member->first_name?> <?=$member->last_name?></option>
                    <?php }?>
                </select>
              </div>
              <div class='form-group'>
                   <input type="submit" value='Add Member' class='btn btn-primary btn-sm'>
              </div>
          </form>
      </div>

    </div>
  </div>
</div>


   <!-- Footer section -->
   <?php include('includes/footer.php');?>

   <script>

function loadPosts()
{  
   $('#list_comment').html('');
   $.ajax({
            type: "POST", //rest Type
            dataType: 'json',           
            url: "<?=base_url()?>Teams/loadPosts/<?=$team->id?>",
            cache: false,           
            success: function (response) {  
                      $.each(response, function (key, val) {
                         post=' <li class="box_result row"><div class="avatar_comment col-md-1"><img src="<?=base_url()?>'+val.profile_pic+'" class="rounded-circle img-fluid"/> </div><div class="result_comment col-md-11"><h4>'+val.first_name+' '+val.last_name+'</h4><p>'+val.content+'</p>';
                 if(val.image!='') post+='<img src="<?=base_url()?>'+val.image+'" class="post_image">';
                         post+='<div class="tools_comment"><a class="like"  href="#" data-id="'+val.id+'">'+val.likes+' Like</a><span aria-hidden="true"> · </span><a class="comment" data-id="'+val.id+'" href="#">'+val.comments+' comments</a><span aria-hidden="true"> · </span><span>'+val.created_on+'</span></div><ul class="child_replay"></ul></div></li>';
           $('#list_comment').prepend(post);
    });
                   


            }

            });  


}

loadPosts()



$(document).on('click','.comment',function(e){
    e.preventDefault();
   $(this).parents('.box_result').find('.child_replay').html('Loading Comments');
   var obj=$(this);
   var id=$(this).data('id');
     $.ajax({
            type: "POST", //rest Type
            dataType: 'json',           
            url: "<?=base_url()?>Teams/loadComments/"+$(this).data('id'),
            cache: false,           
            success: function (response) {  
              var comment="<form class='comment_form' action='#'><textarea placeholder='write comment' rows='1' class='form-control' style='' name='comment'></textarea><input type='hidden' value='<?=$this->session->id?>' name='user_id'><input type='hidden' value='"+id+"' name='post_id'><input type='submit' value='comment' class='btn btn-primary btn-sm btn-comment' style='margin-top:5px;float:right;'></form><br><br>";
                obj.parents('.box_result').find('.child_replay').html(comment);
                obj.parents('.box_result').find('.child_replay').append(response.html);
            } });
})


$(document).on('click','.btn-comment',function(e){
    e.preventDefault();
    console.log($(this).parents('form').serialize());
  var obj=$(this);
     $.ajax({
            type: "POST", //rest Type
            dataType: 'json',           
            url: "<?=base_url()?>Teams/saveComment/",
            cache: false, 
            data: $(this).parents('form').serialize(),         
            success: function (response) { 
                  obj.parents('.box_result').find('.child_replay').append(response.html);
            $(this).parents('form').find('textarea').val('');
            $(this).parents('form').reset();
            }

          });

})

$(document).on('click','.like',function(e){
    e.preventDefault();
   var obj=$(this);
   var id=$(this).data('id');
     $.ajax({
            type: "POST",           
            url: "<?=base_url()?>Teams/saveLike/"+$(this).data('id'),
            cache: false,           
            success: function (response) {  
                obj.parents('.box_result').find('.like').text(response);
            } });

  });

$(document).on('click','.post_submit',function(){
  var formData = new FormData();
formData.append('content', $('.post_content').val());
formData.append('team_id', '<?=$team->id?>');
// Attach file
formData.append('image', $('#post_image')[0].files[0]); 
$.ajax({
    url: '<?=base_url()?>Teams/savePost/',
    data: formData,
    type: 'POST',
    contentType: false, // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+)
    processData: false, // NEEDED, DON'T OMIT THIS
    success: function (response) {  
               loadPosts();
            }
});

})

//       function submit_comment(){
//   var comment = $('.commentar').val();
//   el = document.createElement('li');
//   el.className = "box_result row";
//   el.innerHTML =
//       '<div class=\"avatar_comment col-md-1\">'+
//         '<img src=\"https://static.xx.fbcdn.net/rsrc.php/v1/yi/r/odA9sNLrE86.jpg\" class=\"rounded-circle img-fluid\" alt=\"avatar\"/>'+
//       '</div>'+
//       '<div class=\"result_comment col-md-11\">'+
//       '<h4>Anonimous</h4>'+
//       '<p>'+ comment +'</p>'+
//       '<div class=\"tools_comment\">'+
//       '<a class=\"like\" href=\"#\">Like</a><span aria-hidden=\"true\"> · </span>'+
//       '<i class=\"fa fa-thumbs-o-up\"></i> <span class=\"count\">0</span>'+
//       '<span aria-hidden=\"true\"> · </span>'+
//       '<a class=\"replay\" href=\"#\">Reply</a><span aria-hidden=\"true\"> · </span>'+
//          '<span>1m</span>'+
//       '</div>'+
//       '<ul class="child_replay"></ul>'+
//       '</div>';
//    document.getElementById('list_comment').prepend(el);
//    $('.commentar').val('');
// }

// $(document).ready(function() {
//    $('#list_comment').on('click', '.like', function (e) {
//       $current = $(this);
//       var x = $current.closest('div').find('.like').text().trim();
//       var y = parseInt($current.closest('div').find('.count').text().trim());
      
//       if (x === "Like") {
//          $current.closest('div').find('.like').text('Unlike');
//          $current.closest('div').find('.count').text(y + 1);
//       } else if (x === "Unlike"){
//          $current.closest('div').find('.like').text('Like');
//          $current.closest('div').find('.count').text(y - 1);
//       } else {
//          var replay = $current.closest('div').find('.like').text('Like');
//          $current.closest('div').find('.count').text(y - 1);
//       }
//    });
   
//    $('#list_comment').on('click', '.replay', function (e) {
//       cancel_reply();
//       $current = $(this);
//       el = document.createElement('li');
//       el.className = "box_reply row";
//       el.innerHTML =
//          '<div class=\"col-md-12 reply_comment\">'+
//             '<div class=\"row\">'+
//                '<div class=\"avatar_comment col-md-1\">'+
//                  '<img src=\"https://static.xx.fbcdn.net/rsrc.php/v1/yi/r/odA9sNLrE86.jpg\" class=\"rounded-circle img-fluid\" />'+
//                '</div>'+
//                '<div class=\"box_comment col-md-10\">'+
//                  '<textarea class=\"comment_replay form-control\" placeholder=\"Add a comment...\"></textarea>'+
//                  '<div class=\"box_post\">'+
//                   '<div class=\"text-right mt-2\">'+
                    
//                     '<button class=\"cancel btn btn-danger btn-sm mr-2\" onclick=\"cancel_reply()\" type=\"button\">Cancel</button>'+
//                     '<button onclick=\"submit_reply()\" class=\"btn btn-primary btn-sm\" type=\"button\" value=\"1\">Reply</button>'+
//                   '</div>'+
//                  '</div>'+
//                '</div>'+
//             '</div>'+
//          '</div>';
//       $current.closest('li').find('.child_replay').prepend(el);
//    });
// });

// function submit_reply(){
//   var comment_replay = $('.comment_replay').val();
//   el = document.createElement('li');
//   el.className = "box_reply row";
//   el.innerHTML =
//       '<div class=\"avatar_comment col-md-1\">'+
//         '<img src=\"https://static.xx.fbcdn.net/rsrc.php/v1/yi/r/odA9sNLrE86.jpg\" alt=\"avatar\"/>'+
//       '</div>'+
//       '<div class=\"result_comment col-md-11\">'+
//       '<h4>Anonimous</h4>'+
//       '<p>'+ comment_replay +'</p>'+
//       '<div class=\"tools_comment\">'+
//       '<a class=\"like\" href=\"#\">Like</a><span aria-hidden=\"true\"> · </span>'+
//       '<i class=\"fa fa-thumbs-o-up\"></i> <span class=\"count\">0</span>'+
//       '<span aria-hidden=\"true\"> · </span>'+
//       '<a class=\"replay\" href=\"#\">Reply</a><span aria-hidden=\"true\"> · </span>'+
//          '<span>1m</span>'+
//       '</div>'+
//       '<ul class="child_replay"></ul>'+
//       '</div>';
//    $current.closest('li').find('.child_replay').prepend(el);
//    $('.comment_replay').val('');
//    cancel_reply();
// }

// function cancel_reply(){
//    $('.reply_comment').remove();
//}
   </script>
</body>
</html>

