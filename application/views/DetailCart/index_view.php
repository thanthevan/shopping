
<div class="modal fade" id="minicart"  style="z-index: 9988;padding-left:0;">
	<div class="modal-dialog dialog-content" role="document">
		<div class="modal-content " style="border-radius: 0">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<p class="cart_title">
					<i class="fa fa-shopping-cart" aria-hidden="true"></i> Giỏ hàng của bạn(<a href=""> sản phẩm</a>)
				</p>
				<p class="cart_status">
					<!-- <a href=""> --><i class="fa fa-check" aria-hidden="true"></i>bạn vừa thêm <span style="color:#ff5c01;text-decoration:underline;"><!-- <?php echo $cartproduct['name'] ; ?> --></span> vào giỏ hàng</a>
				</p>
			</div>
			
			<div class="modal-body">
				<div class="cart-header">
					<div class="cart-col1">Sản phẩm</div>
					<div class="cart-col2">Đơn giá</div>
					<div class="cart-col3">Số lượng</div>
					<div class="cart-col4">Thành tiền</div>
				</div>
				<div class="cart-body">
				<?php $cout_total=0; ?>
				<?php foreach ($content as $key => $value): ?>

				<div class="cart-body-item">
					<div class="cart-col1">
						<div class="cart-img">
							<a href=""><img src="" alt=""></a>
						</div>
						<div class="cart-info">
							<div class="cart-info-name">
								<a href="#"><?php echo $value['name']; ?></a>
							</div>
							<div class="cart-item-remove">
								<a href="javascript:void(0)" data-url="<?php echo site_url('cart/updatecartajax'); ?>" class="remove-item-cart" id="<?php echo $value['id']; ?>"  title="Xóa" ><i class="fa fa-trash-o"></i> Bỏ sản phẩm</a>
							</div>
						</div>
					</div>
					<div class="cart-col2">
						<div class="cart-price">
							<span class="cart-item-price"></span>
						</div>
					</div>
					<div class="cart-col3">
						<input type="hidden" name="" id="input" class="form-control" value="">
						<button class="item-count">-</button>
						<input class="item-qty" type="text" value="" disabled>
						<button class="item-count">+</button>
					</div>
					<div class="cart-col4">
						<div class="cart-price">
							<span class="cart-item-price cart-total-price">
						</div>
					</div>
				</div>
				
				</div>
			</div>
			<div class="modal-footer">
				<div class="cart-footer">
					<div class="total clearfix">
						<p class="total-cart-min">Tổng tiền:
						<span class="total-price"></span></p>
					</div>
					<div class="action-cart clearfix">
						<a href="" class="ctn-shop" data-dismiss="modal"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Tiếp tục mua hàng</a>
						<a href="" class="action-cart-buy"><i class="fa fa-money" aria-hidden="true"></i> Tiến hành đặt hàng</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
