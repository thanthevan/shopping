<!DOCTYPE html>
<html lang="en">
<head>
<title>Trang Hana Shop || Quản trị</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="<?php echo base_url(); ?>publics/css/bootstrap.min.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>publics/css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>publics/css/colorpicker.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>publics/css/datepicker.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>publics/css/uniform.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>publics/css/select2.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>publics/css/matrix-style.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>publics/css/matrix-media.css" />
<link href="<?php echo base_url(); ?>publics/font-awesome/css/font-awesome.css" rel="stylesheet" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
</head>
<body>

<!--Header-part-->
<div id="header">
  <h1><a href="dashboard.html">Matrix Admin</a></h1>
</div>
<!--close-Header-part--> 


<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">Chào:<?php echo $this->session->userdata['FullName']; ?></span><b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="<?php echo site_url('user/index')?>"><i class="icon-user"></i>Thông tin</a></li>
        <li class="divider"></li>
        <li><a href="#"><i class="icon-wrench"></i>Cập nhật</a></li>
        <li class="divider"></li>
        <li><a href="<?php echo site_url('login/out'); ?>"><i class="icon-key"></i>Đổi mật khẩu</a></li>
      </ul>
    </li>
    <li class="dropdown" id="menu-messages"><a href="#" data-toggle="dropdown" data-target="#menu-messages" class="dropdown-toggle"><i class="icon icon-envelope"></i> <span class="text">Thư phản hồi</span> <span class="label label-important">5</span> <b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a class="sAdd" title="" href="#"><i class="icon-plus"></i>Soạn thư</a></li>
        <li class="divider"></li>
        <li><a class="sInbox" title="" href="#"><i class="icon-envelope"></i>Hộp thử đến</a></li>
        
      </ul>
    </li>
    <li class=""><a title="" href="<?php echo site_url('login/out'); ?>"><i class="icon icon-share-alt"></i> <span class="text">Đăng xuất</span></a></li>
  </ul>
</div>
<!--close-top-Header-menu-->
