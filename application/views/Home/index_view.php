 <!--Timer Product Carousel Area Start-->
 <div class="timer-product-carousel-area">
    <div class="container">
        <div class="section-padding">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title"><h2>Sản phẩm giảm giá</h2></div>
                </div>
            </div>
            <div class="row">
                <div class="product-carousel">
                    <?php foreach ($saleProduct as $ksale => $vsale): ?>
                      <?php if($vsale['PromotionPrice']!=0): ?>
                        <div class="col-md-3">
                            <div class="single-product-item">
                                <div class="sale-product-label"><span>Sale:<?php echo round((($vsale['Price']-$vsale['PromotionPrice'])/$vsale['Price'])*100)."%"?></span></div>
                                <div class="single-product clearfix">
                                    <a href="#">
                                        <span class="product-image">
                                            <img  width="540" src="<?php echo base_url().IMG_PRODUCT_PATH.$vsale['ImagesUrl'];?>" alt="">
                                        </span>
                                    </a>
                               
                                      <div class="button-actions hidden-xs">   
                                        <button class="button add-to-cart" type="button"  title="Mua hàng" data-toggle="tooltip">
                                            <span><i class="fa fa-shopping-cart"></i></span>
                                        </button>
                                        <ul class="add-to-links">
                                            <li class="quickview">
                                                <a class="btn-quickview modal-view" data-toggle="tooltip" title="Xem nhanh" id="<?php echo $vsale['ProductID'];  ?>" data-url="<?php echo site_url('product/detailajax'); ?>">
                                                    <i class="fa fa-search-plus"></i>
                                                </a>
                                            </li>
                                                                                       
                                    </ul>
                                </div>
                                
                            </div>
                            <h2 class="single-product-name"><a href="#"><?php echo $vsale['ProductName']; ?></a></h2>
                            <div class="price-box">
                             <p class="special-price">
                                <span class="price"><?php echo number_format($vsale['PromotionPrice']).MOMNEY; ?> </span>
                            </p>
                            <p class="old-price">
                                <span class="price"><?php echo number_format($vsale['Price']).MOMNEY; ?> </span>
                            </p>                                         
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
</div>
</div>
</div>
</div>

<!--End of Timer Product Carousel Area-->
<!--Timer Product Carousel Area Start-->
<div class="timer-product-carousel-area">
    <div class="container">
        <div class="section-padding">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title"><h2>Sản phẩm mới</h2></div>
                </div>
            </div>
            <div class="row">
                <div class="product-carousel">

                     <?php foreach ($newProduct as $knew => $vnew): ?>
                        <div class="col-md-3">
                            <div class="single-product-item">
                                <div class="new-product-label"><span>New</span></div>
                                <div class="single-product clearfix">
                                    <a href="#">
                                        <span class="product-image">
                                            <img width="540" src="<?php echo base_url().IMG_PRODUCT_PATH.$vnew['ImagesUrl'];?>" alt="">
                                        </span>

                                    </a>
                                     <div class="button-actions hidden-xs">   
                                        <button class="button add-to-cart" type="button" data-toggle="tooltip" title="Mua hàng">
                                            <span><i class="fa fa-shopping-cart"></i></span>
                                        </button>
                                        <ul class="add-to-links">
                                            <li class="quickview">
                                               <a class="btn-quickview modal-view" data-toggle="tooltip" title="Xem nhanh" id="<?php echo $vnew['ProductID'];  ?>" data-url="<?php echo site_url('product/detailajax'); ?>">
                                                    <i class="fa fa-search-plus"></i>
                                                </a>
                                            </li>
                                                                              
                                    </ul>
                                </div>
                            </div>
                            <h2 class="single-product-name"><a href="#"><?php echo $vnew['ProductName']; ?></a></h2>
                            <div class="price-box">
                            <?php if(!empty($vnew['PromotionPrice'])): ?>
                                <p class="special-price">
                                    <span class="price"><?php echo number_format($vnew['PromotionPrice']).MOMNEY; ?> </span>
                                </p>
                                <p class="old-price">
                                    <span class="price"><?php echo number_format($vnew['Price']).MOMNEY; ?> </span>
                                </p>
                            <?php endif; ?>
                            <?php if(empty($vnew['PromotionPrice'])): ?>
                             <p class="special-price">
                                <span class="price"><?php echo number_format($vnew['Price']).MOMNEY; ?> </span>
                            </p>

                        <?php endif; ?>
                    </div>
                    </div>
                </div>
           
        <?php endforeach; ?>
        </div>
    </div>
</div>
</div>
</div>
<!--End of Timer Product Carousel Area-->
<!--Banner Area Start-->
<div class="banner-area">
    <div class="container">
        <div class="row">

            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="banner-box">
                    <a href="#">
                        <img src="<?php echo base_url().IMG_BANNER_PATH; ?>7.jpg" alt="">
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="banner-box">
                    <a href="#">
                        <img src="<?php echo base_url().IMG_BANNER_PATH; ?>7.jpg" alt="">
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="banner-box">
                    <a href="#">
                        <img src="<?php echo base_url().IMG_BANNER_PATH; ?>7.jpg" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End of Banner Area-->
<!--Product Area Start-->
<div class="product-area-home-three">
    <div class="container">
        <div class="section-top-padding"> 
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title"><h2>Sản phẩm</h2></div>
                </div>
            </div>
            <div class="row">
                <div class="product">
                 <?php foreach ($pnProduct as $key => $value): ?> 
                    <div class="col-md-3 fix-margin">
                        <div class="single-product-item">
                            <div class="<?php echo empty($value['PromotionPrice'])?'new-product-label':'sale-product-label'; ?>">
                                <span ><?php echo empty($value['PromotionPrice'])?'New':'Sale:'.round((($value['Price']-$value['PromotionPrice'])/$value['Price'])*100).'%'; ?></span></div>
                                <div class="single-product clearfix">
                                    <a href="#">
                                        <span class="product-image">
                                            <img width="540"  src="<?php echo base_url().IMG_PRODUCT_PATH.$value['ImagesUrl'];?>" alt="hình ảnh sản phẩm">
                                        </span>
                                    </a>
                                    <div class="button-actions hidden-xs">   
                                        <button class="button add-to-cart" type="button" data-toggle="tooltip" title="Mua hàng">
                                            <span><i class="fa fa-shopping-cart"></i></span>
                                        </button>
                                        <ul class="add-to-links">
                                            <li class="quickview">
                                               <a class="btn-quickview modal-view" data-toggle="tooltip" title="Xem nhanh" id="<?php echo $value['ProductID'];  ?>" data-url="<?php echo site_url('product/detailajax'); ?>">
                                                <i class="fa fa-search-plus"></i>
                                                </a>
                                            </li>                                 
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <h2 class="single-product-name"><a href="#"> <?php echo $value['ProductName']; ?> </a></h2>
                        <div class="price-box">
                            <?php if(!empty($value['PromotionPrice'])): ?>
                                <p class="special-price">
                                    <span class="price"><?php echo number_format($value['PromotionPrice']).MOMNEY; ?> </span>
                                </p>
                                <p class="old-price">
                      
                                      <span class="price"><?php echo number_format($value['Price']).MOMNEY; ?> </span>
                                </p>
                            <?php endif; ?>
                            <?php if(empty($value['PromotionPrice'])): ?>
                             <p class="special-price">
                                <span class="price"><?php echo number_format($value['Price']).MOMNEY; ?> </span>
                            </p>

                        <?php endif; ?>
                    </div>
                </div>

            <?php endforeach; ?>
                </div>
            </div>
        </div>
        <section class="grid-holder">
            <?php echo $links_paginations; ?>
        </section>
    </div>
</div> 


<!--End of Product Area-->
<!--Blog Area Start-->
<div class="blog-area">
    <div class="container">
        <div class="section-padding">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title"><h2>Tin tức</h2></div>
                </div>
            </div>
            <div class="row">
                <div class="blog-carousel">
                    <div class="col-md-4">
                        <div class="banner-box">
                            <a href="#" class="image-blog"><img src="<?php echo base_url(); ?>publics/img/blog/1.jpg" alt=""></a>
                            <div class="single-blog">
                                <span class="date-time">
                                    <span class="days">18</span>
                                    <span class="months">Feb</span>
                                </span>
                                <a class="blog-title" href="blog-details.html"><span>voluptatibus maiores aut</span></a>
                                <p class="author">By BootExperts<span> ( 0 comments )</span></p>
                                <p class="no-margin">Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores aut find fault with...</p>
                            </div>
                        </div>    
                    </div>
               
                </div>
            </div>
        </div>    
    </div>
</div>
            <!--End of Blog Area-->