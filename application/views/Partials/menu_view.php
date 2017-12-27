
<!--Mainmenu Start-->
<div class="mainmenu-area hidden-sm hidden-xs">
    <div id="sticker"> 
        <div class="container">
            <div class="row">   
                <div class="col-lg-12 col-md-12 hidden-sm">
                    <div class="mainmenu">
                        <nav>
                            <ul id="nav">
                                <li class="current"><a href="<?php echo site_url('home/index'); ?>"><i class="fa fa-home" aria-hidden="true"></i> Trang chủ</a></li>
                                <?php foreach ($data as $key => $value): ?>
                                   <?php   if($value['ParentID']=='0'):  ?>
                                    <li><a href="<?php echo site_url('product/index/').$value['CategoryID'] ?>"><?php echo $value['CategoryName']; ?></a>
                                        <?php $id=$value['CategoryID'];  unset($data[$key]); ?>

                                        <div class="megamenu">
                                            <div class="megamenu-list clearfix">
                                             <?php foreach ($data as $k => $v): ?>
                                              <?php   if($v['ParentID']==$id):  ?>
                                                <span>                                          
                                                    <a href="<?php echo $v['CategoryID']; ?>" class="mega-title"><?php echo $v['CategoryName']; ?></a>

                                                    <?php $id1=$v['CategoryID'];  unset($data[$k]); ?>
                                                    <?php foreach ($data as $k1 => $v1): ?>
                                                      <?php   if($v1['ParentID']==$id1):  ?>
                                                        <a href="<?php echo $v1['CategoryID']; ?>"><?php echo $v1['CategoryName']; ?></a>

                                                    <?php endif; ?>
                                                <?php endforeach; ?>  
                                            </span>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                    <span class="no-margin">                                      
                                        <a href="#" class="mega-banner">
                                        <img src="<?php echo base_url().IMG_BANNER_PATH;?>mega-banner.jpg" alt="">
                                        </a>
                                    </span>
                                </div>
                            </div>
                        </li> 

                    <?php endif; ?>
                <?php endforeach; ?>
                <li><a href="shop-grid.html">Tin tức-Blog</a></li>
                <li><a href="index.html">Giới thiệu</a>
                    <ul class="sub-menu">
                        <li><a  class="mega-title">Chi tiết</a></li>
                        <li><a href="about.html">Sơ đồ trang</a></li>
                        <li><a href="blog.html">Bản đồ</a></li>
                        <li><a href="blog-details.html">Điều khoản sử dụng</a></li>
                    </ul>
                </li>
                <li><a href="contact.html">Liên hệ với chúng tôi</a></li>
            </ul>

        </nav>
    </div>        
</div>
</div>
</div>
</div>      
</div>
<!--End of Mainmenu-->
<!-- Mobile Menu Area start -->
<div class="mobile-menu-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="mobile-menu">
                    <nav id="dropdown">
                        <ul>
                            <li><a href="index.html">HOME</a>
                            </li>
                            <li><a href="#">SHOP</a>
                                <ul>
                                    <li><a href="shop-grid.html">Shop Grid</a></li>
                                    <li><a href="shop-list.html">Shop List</a></li>
                                    <li><a href="product-details.html">Product Details</a></li>
                                </ul>
                            </li>
                            <li><a href="blog.html">Blog</a>
                                <ul>
                                    <li><a href="blog-details.html">Blog Details</a></li>
                                </ul>
                            </li>
                            <li><a href="about.html">ABOUT</a>
                                <li><a href="#">PAGES</a>
                                    <ul>
                                        <li><a href="account.html">My Account</a></li>
                                        <li><a href="cart.html">Cart</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                        <li><a href="wishlist.html">Wishlist</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">CONTACT</a></li>
                            </ul>
                        </nav>
                    </div>                  
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Menu Area end -->
</header>