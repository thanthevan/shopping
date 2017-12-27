<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <title>Kích hoạt tài khoản</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/animate.css">
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/style2.css">
    <script src="<?php echo base_url(); ?>public/js/jquery-1.12.0.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="login-box animated fadeInUp" style="max-width:340px">
                <div class="row" style="padding: 5px;">
                <?php if($err == '1'): ?>
                    <h3> Link kich hoat da het han </h3>
                <?php endif; ?>

                <?php if($err == '2'): ?>
                    <h3> Tai khoan khong ton tai de KH </h3>
                <?php endif; ?>

                <?php if($err == '3'): ?>
                    <h3> Tai khoan da duoc kich hoat </h3>
                <?php endif; ?>

                <?php if($err == '0'): ?>
                    <h3> Tai khoan kich hoat thanh cong, ban co the dang nhap</h3>
                <?php endif; ?>

                <?php if($err == '4'): ?>
                    <h3> co loi xay ra vui long lien he admin</h3>
                <?php endif; ?>

                </div>
                <br/>
                <div class="row">
                    <a href="" title="">Đăng nhập</a>
                </div>
        </div>
    </div>
</body>
</html>