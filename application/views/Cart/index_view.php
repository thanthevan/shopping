 <!--Cart Main Area Start-->
        <div class="cart-main-area area-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-title">
                            <h1>Shopping Cart</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <form action="#">
                            <div class="cart-table table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="p-image">Hình ảnh</th>
                                            <th class="p-name">Tên sản phẩm</th>
                                            <th class="p-edit"></th>
                                            <th class="p-amount">Gía</th>
                                            <th class="p-quantity">Số lượng</th>
                                            <th class="p-total">Tổng</th>
                                            <th class="p-times"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($carts as $key => $value):?>
                                        <tr>
                                            <td class="p-image">
                                                <a href="product-details.html"><img alt="" width="70px" src="<?php echo base_url().IMG_PRODUCT_PATH.$value['option']['image']; ?>" class="floatleft"></a>
                                            </td>
                                            <td class="p-name"><a href="product-details.html"><?php echo $value['name']; ?> </a></td>
                                            <td class="edit"><a href="product-details.html">Cập nhật</a></td>
                                            <td class="p-amount"><?php echo $value['price']; ?></td>
                                            <td class="p-quantity"><input maxlength="12" type="text" value="<?php echo $value['qty']; ?>" name="quantity"></td>
                                            <td class="p-total"><?php echo $value['subtotal'].MOMNEY; ?></td>
                                            <td class="p-action"><a href="#"><i class="fa fa-times"></i></a></td>
                                        </tr>
                                    <?php endforeach; ?>
                                        
                                    </tbody>
                                </table>
                                <div class="all-cart-buttons">
                                    <button class="button" type="button" onclick="continuebye();"><span>Tiếp tục mua hàng</span></button>
                                    <div class="floatright">
                                        <button class="button clear-cart" type="button"><span>Xóa toàn bộ giỏ hàng</span></button>
                                        <button  class="button" type="button" onclick="ordesr(<?php echo count($carts);?>);"><span style="color: red;background: white;border:1px solid red;">Tiến hành đặt hàng!</span></button>

                                        <script>
                                            function continuebye() {
                                                
                                               href = '<?php echo site_url("home"); ?>';
                                               window.location.assign(href);
                                            }
                                            function ordesr(a) {
                                                if(a>0)
                                                {
                                                href = '<?php echo site_url('cart/loadorders'); ?>';
                                               window.location.assign(href);
                                                 }
                                            }
                                        </script>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--End of Cart Main Area-->        