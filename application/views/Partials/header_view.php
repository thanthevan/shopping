<!doctype html>
<html  lang="vi">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?php echo $title; ?></title>
        <meta name="description" content="<?php echo $content; ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">		
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url();?>publics/img/icon.png">	
        <link href='https://fonts.googleapis.com/css?family=Lato:400,400italic,900,700,700italic,300' rel='stylesheet' type='text/css'>	
        <link rel="stylesheet" href=" <?php echo base_url();?>publics/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo base_url();?>publics/lib/nivo-slider/css/nivo-slider.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo base_url();?>publics/lib/nivo-slider/css/preview.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="<?php echo base_url();?>publics/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo base_url();?>publics/css/owl.carousel.css">
        <link rel="stylesheet" href="<?php echo base_url();?>publics/css/jquery-ui.css">
        <link rel="stylesheet" href="<?php echo base_url();?>publics/css/meanmenu.min.css">
        <link rel="stylesheet" href="<?php echo base_url();?>publics/css/animate.css">
        <link rel="stylesheet" href="<?php echo base_url();?>publics/css/style.css">
        <link rel="stylesheet" href="<?php echo base_url();?>publics/css/responsive.css">	
       
        <script src="<?php echo base_url();?>publics/js/vendor/modernizr-2.8.3.min.js"></script>
        <link rel="stylesheet" href="<?php echo base_url(); ?>publics/css/cloudzoom.css">
         

       
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <!--Header Start-->
        <header>
            <div class="header-top">
                <div class="container">
                    <div class="header-container">
                        <div class="row">
                            <div class="col-md-6 col-sm-7">
                                <div class="header-contact">
                                <?php foreach ($about as $key => $value): ?>
                                    <span class="email">Email:  <?php echo $value['email'];  ?></span> / <span class="phone">Phone: <?php echo $value['phone'];  ?></span>
                                <?php endforeach; ?>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-5">
                                <div class="currency-language">
                                    <?php if(empty($this->session->userdata('id_customers'))): ?>
                                    <div class="account-menu">
                                        <ul> 
                                            <li><a ><i class="fa fa-user icon" aria-hidden="true"></i> Tài khoản<i class="fa fa-angle-down"></i></a>
                                                <ul class="account-dropdown">
                                                    <li><a id="login"   href="#"><i class="fa fa-unlock-alt icon" aria-hidden="true"></i> Đăng nhập</a></li>
                                                    <li><a  id="register" href="#"><i class="fa fa-key icon" aria-hidden="true"></i> Đăng kí</a></li>
                                                    
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                <?php endif; ?>
                                <?php if(!empty($this->session->userdata('id_customers'))): ?>
                                    <div class="account-menu">
                                        <ul>
                                            <li><a>Chào:<?php echo $this->session->userdata('fullname'); ?>! <i class="fa fa-angle-down"></i></a>
                                                <ul class="account-dropdown">
                                                    <li><a href="blog.html"><i class="fa fa-info" aria-hidden="true"></i> Thông tin</a></li>
                                                    <li><a href="<?php echo site_url('login/signout'); ?>"><i class="fa fa-power-off" aria-hidden="true"></i> Đăng xuất</a></li>
                                                    
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>    
                </div>
            </div>
            <div class="header-main">
                <div class="container">
                    <div class="header-content">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-12">
                                <div class="logo">
                                    <a href="<?php echo site_url('home/index'); ?>"><img src="<?php echo base_url(); ?>publics/img/logo/logonew.png" alt="tranghanashop"></a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-8">
                                <div id="search-category">
                                    <form class="search-box" action="#" method="post">
                                        <div class="search-categories">
                                            <div class="search-cat">
                                                <select class="category-items " name="category">
                                                    <option>Tất cả</option>
                                                    <option>Nam</option>
                                                    <option>Nữ</option>
                                                    <option>Jewllery</option>
                                                    <option>Bootees Bags</option>
                                                    <option>Clothing</option>
                                                    <option>Footwear</option>
                                                    <option>T-Shirts</option>
                                                </select>
                                            </div>
                                        </div>
                                        <input type="search" placeholder="Tìm kiếm..." id="text-search" name="search">
                                        <button id="btn-search-category" type="submit">
                                            <i class="icon-search"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                         
                            <div class="col-lg-3 col-md-3 col-sm-4">
                                <ul class="header-r-cart">
                                    <li><a href="<?php echo site_url('cart/index'); ?>">
                                    <span>GIỎ HÀNG</span>
                                    <span>
                                    <span id="countcartmini"><?php echo $countCart; ?></span>
                                    <span >sản phẩm</span>
                                    </span>
                                    </a>
                                        <!-- <div class="mini-cart-content">
                                          <div class="cartscroll">
                                         
                                            <div class="cart-products-list">
                                                <div class="cart-products">
                                                    <div class="cart-image">
                                                        <a href="#"><img width="70px" src="<?php echo base_url().IMG_PRODUCT_PATH.$value['option']['image']; ?>" alt=""></a>
                                                    </div>
                                                    <div class="cart-product-info">
                                                        <a href="#" class="product-name"><?php echo $value['name']; ?> </a>
                                                        <a class="remove-product">Remove item</a>

                                                        <div class="price-times">
                                                            <span class="quantity"><strong><?php echo $value['qty']; ?> x</strong></span>
                                                            <span class="p-price"><?php echo $value['subtotal'].MOMNEY; ?></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                     
                                            </div>

                                            <div class="cart-price-list">
                                                <p class="price-amount">Tổng : <span>$356.15</span> </p>
                                                <div class="cart-buttons">
                                                    <a href="<?php echo site_url('cart/index'); ?>">Kiểm tra</a>
                                                </div>
                                            </div>
                                        </div> -->
                                    </li>
                                </ul>
                            </div>
                       
                        </div>
                    </div>    
                </div>
            </div>