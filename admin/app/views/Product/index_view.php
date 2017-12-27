
<h2 style="text-align: center;">Quản lý sản phẩm</h2>
<div class="container-fluid">
  <div class="row-fluid">
    <div class="widget-box">
      <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
        <h5>Sản phẩm</h5>
        <div  class="dataTables_length " >
          <select style="width:250px;" id="selectdata" class="pull-right" name="changeproduct" onchange="changeproduct(this)";>
            <option <?php echo $select==1?'selected="selected"' : '' ?> value="1" >Tất cả</option>
            <option <?php echo $select==2?'selected="selected"' : '' ?> value="2">Mới</option>
            <option <?php echo $select==3?'selected="selected"' : '' ?> value="3">Giảm giá</option>
            <option <?php echo $select==4?'selected="selected"' : '' ?> value="4">Hết hàng</option>
          </select> 
        </div>
        <a href="<?php echo site_url('product/addproductview');?>" class=" btn btn-mini btn-primary addvalue">Xóa tất cả</a>
        <a href="<?php echo site_url('product/addproductview');?>" class=" btn btn-mini btn-primary addvalue">Thêm</a>

      </div>
      <div class="widget-content ">
        <table class="table table-bordered table-striped with-check">
          <thead>
            <tr>
              <tr>
              <th><input type="checkbox" id="title-table-checkbox" name="title-table-checkbox"/></th>
                <th>Mã sản phẩm</th>
                <th>Tên sản phẩm</th>
                <th>Số lượng</th>
                <th>Hình ảnh</th>
                <th>Giá</th>
                <th>Giảm giá</th>
                <th>Kích cỡ</th>
                <th>Màu sắc</th>
                <th>Lượt xem</th>
                <th>Trạng thái</th>
                <th>Hoạt động</th>
              </tr>
            </thead>
            <tbody>
             <?php if(!empty($dtProduct)): ?>
              <?php foreach ($dtProduct as $key => $value): ?>
                <tr>
                  <td><input type="checkbox" class="childcheck" /></td>
                  <td><?php echo $value['ProductCode']; ?></td>
                  <td><?php echo $value['ProductName']; ?></td>
                  <td><?php echo $value['Quantity']; ?></td>
                  <td><img width="120" height="60" src="<?php echo base_url().IMG_PRODUCT_PATH.$value['ImagesUrl']; ?>" alt=""></td>
                  <td><?php echo  number_format($value['Price']).MOMNEY; ?></td>
                  <td><?php echo  number_format($value['PromotionPrice']).MOMNEY; ?></td>
                  <td><?php echo $value['Size']; ?></td>
                  <td><?php echo $value['Color']; ?></td>
                  <td><?php echo $value['ViewCount']; ?></td>
                  <td ><?php echo $value['Status']=='1'?'Đang hoạt động':'Ngừng hoạt động';?></td>
                  <td ><a  title="Chi tiết" class="tip-top" href=""><i class="icon-info-sign"> Chi tiết</i></a>|<a  title="sửa" class="tip-top" href=""><i class="icon-wrench"> Sửa</i></a>|<a class="tip-top" href="" title="xóa" ><b class="icon-remove-sign"> Xóa</b></a></td>
                </tr>
              <?php endforeach; ?>
            <?php endif; ?>
          </tbody>
        </table>
      </div>
    </div>
    <?php echo $links_paginations; ?>;
  </div>
</div>




