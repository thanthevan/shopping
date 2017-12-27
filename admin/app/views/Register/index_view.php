<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <title>Đăng ký thành viên</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/animate.css">
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/style2.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="<?php echo base_url(); ?>public/js/jquery-1.12.0.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="login-box animated fadeInUp" style="max-width:340px">
            <form action="<?php echo site_url('register/add_user'); ?>" method="POST" >
                <div class="box-header">
                    <h2>Đăng Ký</h2>
                </div>

                <?php echo validation_errors(); ?>
                <?php if(!empty($mess)): ?>
                <div>
                    <?php if($mess == 'success'): ?>
                        <p>
                            Dang ki thanh cong, vui truy cap email kich hoat tai khoan
                        </p>
                    <?php endif; ?>
                    <?php if($mess == 'fail'): ?>
                        <p>
                            Dang ki khong thanh cong, vui kiem tra lai
                        </p>
                    <?php endif; ?>
                    <?php if($mess == 'err'): ?>
                        <p>
                            Co loi xay ra, vui lien he admin de duoc ho tro.
                        </p>
                    <?php endif; ?>
                </div>
                <?php endif; ?>
                <label for="username">Tên đăng nhập</label>
                <br/>
                <input type="text" name="txtTenDangNhap" id="username">
                <br/>
                <label for="password">Mật khẩu</label>
                <br/>
                <input type="password" name="txtMatKhau" id="password">
                <br/>
                <label for="txtEmail">Email</label>
                <br/>
                <input type="email" name="txtEmail" id="txtEmail">
                <br/>
                <label for="txtHoTen">Họ Tên</label>
                <br/>
                <input type="text" name="txtHoTen" id="txtHoTen">
                <br/>
                <label for="txtAddress">Địa chỉ</label>
                <br/>
                <input type="text" name="txtAddress" id="txtAddress">
                <br/>
                <label for="txtPhone">Số Điện Thoại</label>
                <br/>
                <input type="text" name="txtPhone" id="txtPhone">
                <br/>
                <label for="txtCaptcha">Mã captcha</label>
                <br/>
                <span id="imgCaptcha"><?php echo $cap['image']; ?></span>
                <i id="refreshCaptcha" class="fa fa-refresh" aria-hidden="true"></i>
                <br/>
                <input type="text" name="txtCaptcha" id="txtCaptcha" placeholder="Enter captcha...">
                <br/>
                <input type="submit" name="btnSubmit" value="Đăng ký"/>
                <input type="reset" name="btnReset" value="reset"/>
                <br/>
                <a href="" title="">Đăng nhập</a>
                <span>|</span>
                <a href="" title="">Trang chủ</a>
            </form>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#refreshCaptcha').click(function(){
                $.ajax({
                    url : '<?php echo site_url("register/refresh"); ?>',
                    type : 'POST',
                    data : {},
                    success : function(res){
                        $('#imgCaptcha').html(res);
                    }
                })
            })
        });
    </script>
</body>
</html>