
<?php if(!empty($info)): ?>
<div class="modal fade" id="productModal" tabindex="-1" role="dialog" style="z-index: 9988;overflow-y: hidden;">
            <div class="modal-dialog" role="document">
                <div class="modal-content ">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="modal-product">
                            <div class="product-images">
                            <?php foreach ($info as $key => $value):?>
                                <div class="zoomWrapper">

                                        <img id="img-main" style="max-width: 100%;user-select: none;height: 431px;margin-bottom:10px;" class="cloudzoom" src = "<?php echo base_url().IMG_PRODUCT_PATH.$value['ImagesUrl']; ?>" data-cloudzoom = "zoomSizeMode:'image',zoomPosition:'inside', zoomOffsetX:0"   />
                                    
                                </div>
                                <div class="product-thumb row">
                                    <ul class="p-details-slider"  >
                                        <li class="col-md-4">
                                            <a class="cloudzoomsub btn btn-large"  data-img='<?php echo base_url().IMG_PRODUCT_PATH.$value['ImagesUrl']; ?>' ><img src='<?php echo base_url().IMG_PRODUCT_PATH.$value['ImagesUrl']; ?>' alt=""></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        <div class="product-info">
                            <h1><?php echo $value['ProductName'] ?></h1>
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
                            <a href="<?php echo site_url('product/detail/').$value['ProductID']; ?>" class="see-all">Xem chi tiết</a>
                            <div class="quick-add-to-cart">
                                <form  method="post" class="cart">
                                 <input type="hidden" id="idpd" value="<?php echo $value['ProductID']; ?>">
                                    <div class="numbers-row">
                                     <div class="col-lg-4">
                                      <div class="choicec">
                                     <p>Số lượng</p>
                                       <span class="pre" id="minus">-</span>
                                        <input name="qty" type="text" value="1" class="qty">
                                         <span class="pre" id="plus">+</span>
                                        </div> 
                                        </div>
                                        </div>                                  
                                    <div class="numbers-row">
                                        <div class="col-lg-4">
                                            <div class="choicec">
                                                <p>Màu Sắc</p>
                                                <div class="selectt color">
                                                <?php  $color=explode(',',$value['Color']) ?>
                                                    <ul> 
                                                      <?php foreach ($color as $k => $v):?>
                                                        <li class="choiecec scolor" id ="c<?php echo $k; ?>" style="background-color:<?php echo $v; ?>" data-color="<?php echo $v; ?>"></li>
                                                        
                                                       <?php endforeach; ?> 
                                                    </ul>
                                                    <input type="hidden" value="null" name="Color" class="productColor">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="choicec">
                                                <p>Chọn Kích Thước</p>
                                                <div class="selectt size">
                                                 <?php  $size=explode(',',$value['Size']) ?>

                                                    <ul>
                                                    <?php if(!empty($size[0])): ?>
                                                    <?php foreach ($size as $k1 => $v1):?>
                                                        <li class="choiece csize" id="s<?php echo $k1; ?>" data-size="<?php echo $v1; ?>"><?php echo $v1; ?></li>
                                                       <?php  endforeach; ?>
                                                        <input type="hidden" value="null" name="Size" class="productSize">
                                                   <?php endif; ?>
                                                    </ul>
                                                   
                                                      <?php if($size[0]==null): ?>
                                                        <input type="hidden" value=" " name="Size" class="productSize">
                                                    <?php endif; ?>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button"  class="single_add_to_cart_button" data-url="<?php echo site_url('cart/addcartajax');?>">Thêm vào giỏ hàng</button>
                                </form>
                            </div>
                          <div class="label des">Mô tả:</div>
                            <div class="quick-desc">
                               <?php echo $value['Content']; ?>
                            </div>
                            <div class="social-sharing">
                                <div class="widget widget_socialsharing_widget">
                                    <h3 class="widget-title-modal">Chia sẻ</h3>
                                    <ul class="social-icons">
                                        <li><a target="_blank" title="Facebook" href="#" class="facebook social-icon"><i class="fa fa-facebook"></i></a></li>
                                        <li><a target="_blank" title="Twitter" href="#" class="twitter social-icon"><i class="fa fa-twitter"></i></a></li>
                                        <li><a target="_blank" title="Google +" href="#" class="gplus social-icon"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                </div>
            </div>
        </div>

    <?php endif; ?>