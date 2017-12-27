 <!--Breadcrumb Start-->
        <div class="breadcrumb-container">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumbs">
                            <ul>
                                <li class="home"><a href="<?php echo site_url('home/index'); ?>">Trang chủ</a><span>/ </span></li>
                                <li><strong>Chi tiết sản phẩm</strong></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End of Breadcrumb-->
        <!--Product Details Area Start-->
        <div class="product-deails-area">
            <div class="container">
                <div class="row">

                    <div class="col-lg-9 col-md-9">
               <?php foreach ($infor as $kd => $vd): ?> 
                    
                        <div class="product-details-content row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="zoomWrapper">
                                    <div id="img-1" class="zoomWrapper single-zoom">
                                        <a href="#">
                                       
                                           <img id="zoom1" src="<?php echo base_url().IMG_PRODUCT_PATH.$vd['ImagesUrl'];?>" data-zoom-image="<?php echo base_url().IMG_PRODUCT_PATH.$vd['ImagesUrl'];?>" alt="big-1">
                                        </a>
                                    </div>
                                    <div class="product-thumb row">
                                        <ul class="p-details-slider" id="gallery_01">
                                            <li class="col-md-4">
                                                <a class="elevatezoom-gallery" href="#" data-image="<?php echo base_url(); ?>publics/img/product/20.jpg" data-zoom-image="<?php echo base_url(); ?>publics/img/product/20.jpg"><img src="<?php echo base_url(); ?>publics/img/product/20.jpg" alt=""></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="product-details-conetnt">
                                    
                                    <div class="product-name">
                                        <h1> <?php echo $vd['ProductName']; ?> </h1>
                                    </div>

                                  <?php if(!empty($vd['PromotionPrice'])): ?>
                                    <p class="special-price">
                                        <span class="price"><?php echo $vd['PromotionPrice'].MOMNEY; ?> </span>
                                    </p>
                                    <p class="old-price">
                                        <span class="price"><?php echo $vd['Price'].MOMNEY; ?> </span>
                                    </p>
                                <?php endif; ?>
                                <?php if(empty($vd['PromotionPrice'])): ?>
                                 <p class="special-price">
                                    <span class="price"><?php echo $vd['Price'].MOMNEY; ?> </span>
                                </p>

                            <?php endif; ?>
                                    <div class="details-description">
                                        <p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nulla luctus malesuada tincidunt. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer enim purus, posuere at ultricies eu, placerat a felis. Suspendisse aliquet urna pretium eros convallis interdum. Quisque in arcu id dui vulputate mollis eget non arcu. Aenean et nulla purus. Mauris vel tellus non nunc mattis lobortis. 
                                        </p>
                                        <img src="<?php echo base_url(); ?>publics/img/icon/social_link.png" alt="">
                                    </div>
                                    <div class="add-to-cart-qty">
                                        <div class="timer">
                                            <div data-countdown="2022/01/01" class="timer-grid"></div>
                                        </div>
                                        <div class="cart-qty-button">
                                            <label for="qty">Qty:</label>
                                            <input type="text" class="input-text qty" value="1" maxlength="12" id="qty" name="qty">
                                            <button class="button btn-cart" type="button"><span>Add to Cart</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="p-details-tab">
                                    <ul role="tablist" class="nav nav-tabs">
                                        <li class="active" role="presentation"><a data-toggle="tab" role="tab" aria-controls="description" href="#description">Chi tiết sản phẩm</a></li>
                                        <li role="presentation"><a data-toggle="tab" role="tab" aria-controls="reviews" href="#reviews">Đánh giá</a></li>
                                    </ul>
                                </div>
                                <div class="clearfix"></div>
                                <div class="tab-content review product-details">
                                    <div id="description" class="tab-pane active" role="tabpanel">
                                        <p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nulla luctus malesuada tincidunt. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer enim purus, posuere at ultricies eu, placerat a felis. Suspendisse aliquet urna pretium eros convallis interdum. Quisque in arcu id dui vulputate mollis eget non arcu. Aenean et nulla purus. Mauris vel tellus non nunc mattis lobortis. </p>
                                    </div>
                                    <div id="reviews" class="tab-pane" role="tabpanel">
                                        <div class="row">
                                            <div class="col-lg-5 col-md-3 col-sm-12">
                                                <div class="review-left">
                                                    <p><span> Gửi bởi </span> <a >BootExperts</a></p>
                                                    <div class="review-rating">
                                                        <p>Giá cả</p>
                                                        <div class="rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                    </div>
                                                    <div class="review-rating">
                                                        <p>Chất lượng</p>
                                                        <div class="rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                    </div>
                                       
                                                    <p>BootExperts <span class="italic">(Gửi ngày 11/3/2016)</span></p>
                                                </div>
                                            </div>
                                            <div class="col-lg-7 col-md-9 col-sm-12">
                                                <div class="review-right">
                                                    <h3>Đánh giá và nhận xét sản phẩm</h3>
                                                    <form method="post" action="mail.php">
                                                        <div class="p-details-table table-responsive">
                                                            <table>
                                                                <thead>
                                                                    <tr>
                                                                        <th></th>
                                                                        <th><span>1 star</span></th>
                                                                        <th><span>2 stars</span></th>
                                                                        <th><span>3 stars</span></th>
                                                                        <th><span>4 stars</span></th>
                                                                        <th><span>5 stars</span></th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <th>Giá cả</th>
                                                                        <td><input type="radio" value="" class="radio"></td>
                                                                        <td><input type="radio" value="" class="radio"></td>
                                                                        <td><input type="radio" value="" class="radio"></td>
                                                                        <td><input type="radio" value="" class="radio"></td>
                                                                        <td><input type="radio" value="" class="radio"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Chất lượng</th>
                                                                        <td><input type="radio" value="" class="radio"></td>
                                                                        <td><input type="radio" value="" class="radio"></td>
                                                                        <td><input type="radio" value="" class="radio"></td>
                                                                        <td><input type="radio" value="" class="radio"></td>
                                                                        <td><input type="radio" value="" class="radio"></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>    
                                                        </div>
                                                        <div class="form-top">
                                                            <div class="row">
                                                                <div id="review-form">
                                                                    <div class="form-group col-sm-12 col-md-12 col-lg-12">
                                                                        <label>Họ và tên<span class="required" title="required">*</span></label>
                                                                        <input type="text" name="name" class="form-control">
                                                                    </div>
                                                                    <div class="form-group col-sm-12 col-md-12 col-lg-12">
                                                                        <label>Email<span class="required" title="required">*</span></label>
                                                                        <input type="text" name="subject" class="form-control">
                                                                    </div>
                                                                    <div class="form-group col-sm-12 col-md-12 col-lg-12">
                                                                        <label>Nội dung<span class="required" title="required">*</span></label>
                                                                        <textarea name="message" class="yourmessage"></textarea>
                                                                    </div>
                                                                </div>    
                                                            </div>    
                                                        </div>
                                                        <div class="buttons-set">
                                                            <button class="button" type="submit"><span>Gửi</span></button>
                                                        </div>
                                                    </form>    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                
                                </div>
                            </div>
                        </div>
                        <div class="product-carousel-area section-top-padding">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section-title"><h2>Sản phẩm khác</h2></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="upsell-product-details-carousel">
                                    
                                    <div class="col-md-3">
                                        <div class="single-product-item">
                            <div class="new-product-label"><span>new</span></div>
                            <div class="single-product clearfix">
                                <a href="#">
                                    <span class="product-image">
                                        <img src="<?php echo base_url(); ?>publics/img/product/9.jpg" alt="">
                                    </span>
                                    <span class="product-image hover-image">
                                        <img src="<?php echo base_url(); ?>publics/img/product/8.jpg" alt="">
                                    </span>
                                </a>
                                <div class="button-actions1 clearfix">   
                                 <ul class="add-to-links1">
                                   <li class="quickview1">
                                    <a class="btn-quickview add-to-cart1" href="" >
                                        <i class="fa fa-shopping-cart"></i>
                                    </a>
                                </li>  
                                <li class="quickview1">
                                    <a class="btn-quickview modal-view1" >
                                        <i class="fa fa-search-plus"></i>
                                    </a>
                                </li>                                          
                            </ul>
                        </div>
                    </div>
                    <h2 class="single-product-name"><a href="#">Fusce aliquam</a></h2>
                    <div class="price-box">
                        <p class="old-price">
                            <span class="price">$123.00</span>
                        </p>   
                        <p class="special-price">
                            <span class="price">$123.00</span>
                        </p>                                          
                    </div>
                </div>
                                    </div>
                                  
                                </div>
                            </div>
                        </div>    
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="single-products-category">
                            <div class="section-title"><h2>Danh mục sản phẩm</h2></div>
                            <div class="category-products">
                                <div class="product-items">
                                    <div class="p-category-image">
                                        <a href="#">
                                            <img alt="" src="<?php echo base_url(); ?>publics/img/product/small/8.jpg">
                                        </a>
                                    </div>
                                    <div class="p-category-text">
                                        <h2 class="category-product-name"><a href="#">Aliquam consequat</a></h2>
                                        <div class="price-box">
                                            <p class="special-price">
                                                <span class="price">$345.00</span>
                                            </p>                                            
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                        <div class="sidebar-content">
                            <div class="section-title no-margin"><h2>Tags</h2></div>
                            <div class="popular-tags">
                                <ul class="tag-list">                  
                                    <li><a href="#">Curae</a></li>
                                    <li><a href="#">Vestibulum</a></li>
                                    <li><a href="#">ante</a></li>
                                    <li><a href="#">cubilia</a></li>
                                    <li><a href="#">et</a></li>
                                    <li><a href="#">faucibus</a></li>
                                    <li><a href="#">in</a></li>
                                    <li><a href="#">ipsum</a></li>
                                    <li><a href="#">luctus</a></li>
                                    <li><a href="#">orci</a></li>
                                    <li><a href="#">posuere</a></li>
                                    <li><a href="#">primis</a></li>
                                    <li><a href="#">ultrices</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-content">
                            <div class="section-title no-margin"><h2>Compare Products </h2></div>
                            <div class="block-content">
                                <p class="empty">You have no items to compare.</p>
                            </div>
                        </div>
                        <div class="sidebar-content">
                            <div class="banner-box">
                                <a href="#"><img alt="" src="<?php echo base_url(); ?>publics/img/banner/14.jpg"></a>
                            </div>product-image
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End of Product Details Area-->