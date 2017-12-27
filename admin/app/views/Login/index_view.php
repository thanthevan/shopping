<!DOCTYPE html>
<html lang="en">
    
<head>
        <title>Trang Trà Shop || Quản lý</title><meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>publics/css/bootstrap.min.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>publics/css/bootstrap-responsive.min.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>publics/css/matrix-login.css" />
        <link href="<?php echo base_url(); ?>publics/font-awesome/css/font-awesome.css" rel="stylesheet" />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>

    </head>
    <body>
        <div id="loginbox">            
            <form id="loginform" class="form-vertical" action="<?php echo site_url('login/handle'); ?>" method="POST">
                 <div class="control-group normal_text"> <h3><img src="<?php echo base_url(); ?>publics/img/logo.png" alt="Logo" /></h3></div>
                  <span style="color:red; font-size:12px; text-align: center;"><?php echo validation_errors(); ?></span>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lg"><i class="icon-user"> </i></span><input name="txtusername" type="text" placeholder="Tài khoản" />
                        </div>
                    </div>
                </div> 
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_ly"><i class="icon-lock"></i></span><input name="txtpassword" type="password" placeholder="Mật khẩu" />
                        </div>
                    </div>
                </div>
                <div class="form-actions">
                    <span class="pull-left"><a href="#" class="flip-link btn btn-info" id="to-recover">Quên mật khẩu?</a></span>
                    <span class="pull-right"><button type="submit"  class="btn btn-success" /> Đăng nhập></button></span>
                </div>
            </form>
            <form id="recoverform" action="#" class="form-vertical">
                <p class="normal_text">Nhập tài khoản và email để lấy lại mật khẩu</p>
                 <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lg"><i class="icon-user"> </i></span><input type="text" placeholder="Tài khoản" />
                        </div>
                    </div>
                </div>
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lo"><i class="icon-envelope"></i></span><input type="text" placeholder="E-mail " />
                        </div>
                    </div>
               
                <div class="form-actions">
                    <span class="pull-left"><a href="#" class="flip-link btn btn-success" id="to-login">&laquo;Trở lại</a></span>
                    <span class="pull-right"><a class="btn btn-info"/>Lấy mật khẩu</a></span>
                </div>
            </form>
        </div>
        
        <script src="<?php echo base_url(); ?>publics/js/jquery.min.js"></script>  
        <script src="<?php echo base_url(); ?>publics/js/matrix.login.js"></script> 
    </body>

</html>
