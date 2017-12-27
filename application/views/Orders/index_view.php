<!DOCTYPE html>
<html  class="anyflexbox boxshadow display-table">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Amobile - Thanh toán đơn hàng">

    <title>Trang hana - Thanh toán đơn hàng</title>

    <link href="<?php echo base_url();?>publics/css/checkout_new.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>publics/css/checkout.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url();?>publics/img/icon.png"> 
    <link rel="stylesheet" href=" <?php echo base_url();?>publics/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>publics/css/font-awesome.min.css">
    <script src="<?php echo base_url(); ?>publics/js/vendor/jquery-1.11.3.min.js"></script>
    <script src="<?php echo base_url(); ?>publics/js/bootstrap.min.js"></script>

</head>
<body >
   
    <form method="post" action="<?php echo site_url('orders/orders') ?>"  class="content stateful-form formCheckout" novalidate="true">
        <div class="wrap" context="checkout" >
            <div class="sidebar ">
                <div class="sidebar_header">
                    <h2>
                        <label class="control-label" style="font-weight:500;">Đơn hàng (<?php echo count($carts); ?> loại sản phẩm)</label>
                        
                    </h2>
                    <hr class="full_width">
                </div>
                <div class="sidebar__content">
                    <div class="order-summary order-summary--product-list order-summary--is-collapsed">
                        <div class="summary-body summary-section summary-product">
                            <div class="summary-product-list">
                                <table class="product-table">
                                    <tbody>
                                    <?php $s=0; ?>
                                <?php foreach ($carts as $key => $value): ?>

                                        <tr class="product product-has-image clearfix">
                                            <td>
                                                <div class="product-thumbnail">
                                                    <div class="product-thumbnail__wrapper">

                                                        <img src="<?php echo base_url().IMG_PRODUCT_PATH.$value['option']['image'];?>" alt="" class="product-thumbnail__image">

                                                    </div>
                                                    <span class="product-thumbnail__quantity" aria-hidden="true"><?php echo $value['qty'] ?></span>
                                                </div>
                                            </td>
                                            <td class="product-info">
                                                <span class="product-info-name">
                                                   <?php echo $value['name']; ?>
                                                   
                                                </span>


                                            </td>
                                            <td class="product-price text-right">
                                              <?php echo number_format($value['subtotal']).MOMNEY; ?>
                                            </td>
                                        </tr>
                                        <?php $s+=$value['subtotal']; ?>
                                <?php endforeach; ?> 
                                    </tbody>
                                </table>

                            </div>
                        </div>
                        <hr class="m0">
                    </div>
                    <div class="order-summary order-summary--discount">

                        <hr class="m0">
                    </div>
                    <div class="order-summary order-summary--total-lines">
                        <div class="summary-section border-top-none--mobile">
                            <div class="total-line total-line-subtotal clearfix">
                                <span class="total-line-name pull-left">
                                    Tạm tính
                                </span>
                                <span class="total-line-subprice pull-right"><?php echo number_format($s).MOMNEY; ?></span>
                            </div>
                            
                            <div class="total-line total-line-total clearfix">
                                <span class="total-line-name pull-left">
                                    Tổng cộng
                                </span>
                                <span class="total-line-price pull-right"><?php echo number_format($s).MOMNEY; ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group clearfix hidden-sm hidden-xs">
                        <div class="field__input-btn-wrapper mt10">
                            <a class="previous-link" href="<?php echo site_url('cart'); ?>">
                                <i class="fa fa-angle-left fa-lg" aria-hidden="true"></i>
                                <span style="color: #ff5c01;">Quay về giỏ hàng</span>
                            </a>
                            <input class="btn btn-primary btn-checkout" type="submit" value="ĐẶT HÀNG">
                        </div>
                    </div>

                </div>
            </div>
            <div class="main" role="main">
                <div class="main_header">
                    <div class="shop logo logo--left ">

                        <h1 class="shop__name">
                            <a href="<?php echo site_url('home'); ?>" style="color: #ff5c01">
                                Trang Hana Shop
                            </a>
                        </h1>

                    </div>
                </div>
                <div class="main_content">
                    <div class="row">
                        <div class="col-md-6 col-lg-6">
                            <div class="section" define="{billing_address: {}}">
                                <div class="section__header">
                                    <div class="layout-flex layout-flex--wrap">
                                        <h2 class="section__title layout-flex__item layout-flex__item--stretch">
                                            <i class="fa fa-id-card-o fa-lg section__title--icon hidden-md hidden-lg" aria-hidden="true"></i>
                                            <label class="control-label">Thông tin mua hàng</label>
                                        </h2>
                                        
                                
                                        
                                    </div>
                                </div>
                                <div class="section__content">


                                    <div class="form-group">
                                        <div>
                                            <label class="field__input-wrapper" >
                                               
                                                <input name="email" type="email" class="field__input form-control"  required="" value="<?php echo $this->session->userdata('email'); ?>" pattern="^([a-zA-Z0-9_\-\.\+]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$" placeholder="Email">
                                            </label>
                                        </div>
                                        <div class="help-block with-errors">
                                        </div>
                                    </div>
                                    
                                    <div class="billing">
                                        <div>
                                            <div class="form-group">
                                                <div class="field__input-wrapper" >
                                                    
                                                    <input name="fullname" type="text" class="field__input form-control" id=""  required="" placeholder="Họ và tên" value="<?php echo $this->session->userdata('fullname'); ?>" >
                                                </div>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <div class="field__input-wrapper" >
                                                   
                                                    <input name="phone" type="text" value="<?php echo $this->session->userdata('phone'); ?>"  class="field__input form-control" id="" placeholder="Số điện thoại" >
                                                </div>

                                            </div>
                                            
                                            
                                            <div class="form-group">
                                                <div class="field__input-wrapper" >
                                                   
                                                    <input name="address" placeholder="Địa chỉ" type="text"  class="field__input form-control" id=""  value="<?php echo $this->session->userdata('address'); ?>">
                                                </div>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="section pt10">
                                <div class="section__content">
                                    <div class="form-group m0">
                                        <textarea name="note" value="" class="field__input form-control m0" placeholder="Ghi chú"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="section shipping-method" >
                                <div class="section__header">
                                    <h2 class="section__title">
                                        <i class="fa fa-truck fa-lg section__title--icon hidden-md hidden-lg" aria-hidden="true"></i>
                                        <label class="control-label">Vận chuyển</label>
                                    </h2>
                                </div>
                                <div class="section__content">
                                    <div class="content-box">
                                        <div class="content-box__row">
                                            <div class="radio-wrapper">
                                                <div class="radio__input">
                                                    <input class="input-radio" type="radio" value="" name="ShippingMethod" id="" bind="shippingMethod">
                                                </div>
                                                <label class="radio__label" for="shipping_method_237356">
                                                   <span class="radio__label__primary">Miễn phí</span>
                                                   <span class="radio__label__accessory">
                                                       <span class="content-box__emphasis">Miễn phí</span>
                                                   </span>
                                               </label> 
                                           </div> 
                                       </div>
                                   </div>
                               </div>
                               <div class="section payment-methods">
                                <div class="section__header">
                                    <h2 class="section__title">
                                        <i class="fa fa-credit-card fa-lg section__title--icon hidden-md hidden-lg" aria-hidden="true"></i>
                                        <label class="control-label">Thanh toán</label>
                                    </h2>
                                </div>
                                <div class="section__content">
                                    <div class="content-box">

                                        <div class="content-box__row">
                                            <div class="radio-wrapper">
                                                <div class="radio__input">
                                                    <input class="input-radio" type="radio" value="" name="" id=""  >
                                                </div>
                                                <label class="radio__label" >
                                                    <span class="radio__label__primary">Thanh toán khi giao hàng (COD)</span>
                                                    <span class="radio__label__accessory">
                                                        <ul>
                                                            <li class="payment-icon-v2 payment-icon--4">

                                                                <i class="fa fa-money payment-icon-fa" aria-hidden="true"></i>

                                                            </li>
                                                        </ul>
                                                    </span>
                                                </label> 
                                            </div> 
                                        </div>

                                        <div class="radio-wrapper content-box__row content-box__row--secondary" >
                                            <div class="blank-slate">
                                                <p>cod</p>


                                            </div>
                                        </div>


                                      
                                      

                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

     <script src="<?php echo base_url(); ?>publics/js/vendor/jquery-1.11.3.min.js"></script>
     <script src="<?php echo base_url(); ?>publics/js/bootstrap.min.js"></script>
</body>
</html>