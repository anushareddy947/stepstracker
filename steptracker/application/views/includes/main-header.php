<?php  if($this->session->id=='' && $this->uri->segment(1)!='login' && $this->uri->segment(1)!='register' && $this->uri->segment(1)!='forgot-password' ) header('location: login');
   
   // if($this->session->id!='' && $this->uri->segment(1)=='login' || $this->uri->segment(1)!='register' || $this->uri->segment(1)!='forgot-password' ) header('location: /');


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Steps Tracker</title>

  <!-- Custom fonts for this template-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">

  <link rel="stylesheet" href="<?=base_url('assets/vendor/fancybox/jquery.fancybox.min.css')?>">

  <!-- Date and time picker -->
  <link rel="stylesheet" type="text/css" href="<?=base_url('assets/vendor/datetimepicker/bootstrap-datetimepicker.min.css')?>">


  <link href="<?=base_url('assets/vendor/datatables/dataTables.bootstrap4.min.css')?>" rel="stylesheet">
  
  <!-- Custom styles -->
  <link href="<?=base_url('assets/css/style.css')?>" rel="stylesheet">


</head>