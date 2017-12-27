<div class="content-wrapper right_col">
<style type="text/css" media="screen">
th, td {
border-bottom: 1px solid #ddd;
}
</style>
<div class="row">
<h2 class="text-center">Danh sách đơn hàng !!!</h2>
</div>
<div class="row">
<?php foreach ($listOrders as $key => $value): ?>
<div class="col-md-12" style="border-bottom: 2px dotted green ; margin: 20px 0px;background-color: #CCFFFF;">
<div class="col-md-2">
<p>
<img width="100%" height="250px;" src="" alt="">
</p>
<h3 class="text-center"><?php echo $value['nameBook']; ?></h3>
</div>
<div class="col-md-10" style="background-color: white;">
<div class="table-responsive">
<table class="table table-bordered" style="margin-top: 10px;">
<thead>
<?php if(isset($value['listOrder'])): ?>
<?php foreach ($value['listOrder'] as $k => $v): ?>
<tr>
<th>#</th>
<th>Name</th>
<th>Phone</th>
<th>Email</th>
<th>Address</th>
<th>Qty</th>
<th>Money</th>
<th>Create</th>
<th>Note</th>
<th colspan="2" class="text-center">Action</th>
</tr>
</thead>
<tbody>
<tr>
<td><?php echo $k+1; ?></td>
<td><?php echo  $v['TenKH'];?></td>
<td><?php echo  $v['SDT']; ?></td>
<td><?php echo  $v['Email']; ?></td>
<td><?php echo  $v['DiaChi']; ?>i</td>
<td><?php echo  $v['qty']; ?></td>
<td><?php echo  number_format($v['ThanhTien']); ?></td>
<td><?php echo  $v['create_time']; ?></td>
<td><?php echo  $v['GhiChu']; ?></td>
<td>
<button onclick="updateOrdres(1,<?php echo $v['id_hd']; ?>);" type="button" class="btn btn-small btn-primary">Xác nhận</button>
</td>
<td>
<button onclick="updateOrdres(2,<?php echo $v['id_hd']; ?>);" type="button" class="btn btn-small btn-danger">Hủy</button>
</td>
</tr>
<?php endforeach; ?>
<?php endif; ?>
</tbody>
</table>
</div>
</div>
</div>
<?php endforeach; ?>
</div>
</div>
<script>
	function updateOrdres(status,id_hd) {
		$.ajax({

			url:"<?php echo site_url('orders/handle'); ?>",
			type:'POST',
			data:{'status':status,'id':id_hd},
			success:function(res)
			{
				if(res=='OK')
				{
					alert('Thanh Cong');
					window.location.reload();
				}
				else if (res=='ERR' ) {
					alert('Co loi say ra');
					
				}
				else if (res=='FAIL') {
					alert('Co loi ');
				}
				return false;
			}
		})


	}
</script>