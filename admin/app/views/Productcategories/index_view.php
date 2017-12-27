
<h2 style="text-align: center;">Quản lý danh mục sản phẩm</h2>
<div class="container-fluid">
  <div class="row-fluid">
    <div class="span12">

      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
          <h5>Danh mục sản phẩm lớn</h5>
          <a data-toggle="modal" data-target="#addcp" href="<?php echo site_url('productcategories/add/0');?>" class="btn btn-mini btn-primary addvalue">Thêm</a>
        </div>
        <div class="widget-content nopadding">
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
               <th>Tên danh mục sản phẩm</th>
               <th>Cấp độ hiển thị</th>
               <th>Trạng thái</th>
               <th>Hoạt động</th>
             </tr>
           </thead>
           <tbody>

            <?php foreach ($productcategories as $key => $value):?>
              <?php if($value['ParentID']=='0'): ?>
                <tr style="text-align: center;">
                  <td style="text-align: center;"><?php echo $value['CategoryName'];?></td>
                  <td style="text-align: center;"><?php echo $value['Display'];?></td>
                  <td style="text-align: center;"><?php echo $value['Status']=='1'?'Đang hoạt động':'Ngừng hoạt động';?></td>
                  <td style="text-align: center;"><a data-toggle="modal" data-target="#updatecp" title="sửa" class="update1" href="<?php echo site_url('productcategories/update/'.$value['CategoryID'].'/'.$value['CategoryName'].'/'.$value['MetaDescription'].'/'.$value['MetaKeyword'].'/'.$value['Status']); ?>"><b class="icon-wrench"> Sửa</b></a>|<a class="remove1" href="<?php echo site_url('Productcategories/remove/'.$value['CategoryID']); ?>" title="xóa"><b class="icon-remove-sign"> Xóa</b></a></td>
                </tr>
              <?php endif; ?>
            <?php endforeach; ?>

          </tbody>
        </table>
      </div>
    </div>
    <?php foreach ($productcategories as $key => $value):?>
      <?php if($value['ParentID']=='0'): ?>
       <?php $id= $value['CategoryID']; unset($productcategories['$key']); ?>
       <hr/>
       <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
          <h5><?php echo $value['CategoryName'];?>  </h5>
          <a data-toggle="modal" data-target="#addcp" href="<?php echo site_url('productcategories/add/'.$id);?>" class="btn btn-mini btn-primary addvalue">Thêm</a>
        </div>
        <div class="widget-content nopadding">
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Tên danh mục sản phẩm</th>
                <th>Cấp độ hiển thị</th>
                <th>Trạng thái</th>
                <th>Hoạt động</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($productcategories as $k => $v):?>
                <?php if($v['ParentID']==$id): ?>
                  <tr style="text-align: center;">
                    <td style="text-align: center;"><?php echo $v['CategoryName'];?></td>
                    <td style="text-align: center;"><?php echo $v['Display'];?></td>
                    <td style="text-align: center;"><?php echo $v['Status']=='1'?'Đang hoạt động':'Ngừng hoạt động';?></td>
                    <td style="text-align: center;"><a data-toggle="modal" data-target="#updatecp" class="update1" title="sửa" href="<?php echo site_url('productcategories/update/'.$v['CategoryID'].'/'.$v['CategoryName'].'/'.$v['MetaDescription'].'/'.$v['MetaKeyword'].'/'.$v['Status']); ?>"><b class="icon-wrench"> Sửa</b></a>|<a class="remove1" href="<?php echo site_url('Productcategories/remove/'.$v['CategoryID']); ?>" title="xóa"><b class="icon-remove-sign"> Xóa</b></a></td>
                  </tr>

                <?php endif; ?>
              <?php endforeach; ?>
            </tbody>
          </table>

        </div>
      </div>
      
    <?php endif; ?>
  <?php endforeach; ?>
  <!-- ----- -->
  <?php foreach ($productcategories as $key => $value):?>
    <?php if($value['ParentID']=='0'): ?>

     <?php $id= $value['CategoryID']; $name=$value['CategoryName']; unset($productcategories['$key']); ?>

     <?php foreach ($productcategories as $k => $v):?>

      <?php if($v['ParentID']==$id): ?>

        <hr/>
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
            <h5><?php echo $name.' > '.$v['CategoryName'];?></h5>
            <a data-toggle="modal" data-target="#addcp" href="<?php echo site_url('productcategories/add/'.$v['CategoryID']);?>" class="btn btn-mini btn-primary addvalue">Thêm</a>

            <?php $id1= $v['CategoryID']; unset($productcategories['$k']); ?>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                 <th>Tên danh mục sản phẩm</th>
                 <th>Cấp độ hiển thị</th>
                 <th>Trạng thái</th>
                 <th>Hoạt động</th>
               </tr>
             </thead>
             <tbody>
              <?php foreach ($productcategories as $k1 => $v1):?>
                <?php if($v1['ParentID']==$id1): ?>
                  <tr style="text-align: center;">
                    <td style="text-align: center;"><?php echo $v1['CategoryName'];?></td>
                    <td style="text-align: center;"><?php echo $v1['Display'];?></td>
                    <td style="text-align: center;"><?php echo $v1['Status']=='1'?'Đang hoạt động':'Ngừng hoạt động';?></td>
                    <td style="text-align: center;"><a data-toggle="modal" data-target="#updatecp" class="update1" title="sửa" href="<?php echo site_url('productcategories/update/'.$v1['CategoryID'].'/'.$v1['CategoryName'].'/'.$v1['MetaDescription'].'/'.$v1['MetaKeyword'].'/'.$v1['Status']); ?>"><b class="icon-wrench"> Sửa</b></a>|<a class="remove1" href="<?php echo site_url('productcategories/remove/'.$v1['CategoryID']); ?>" title="xóa"><b class="icon-remove-sign"> Xóa</b></a></td>
                  </tr>

                <?php endif; ?>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    <?php endif; ?>

  <?php endforeach; ?>

<?php endif; ?>

<?php endforeach; ?>
</div>
</div>
</div>
<div id="addcp" class="modal fade" role="dialog">
 <div class="row-fluid">
  <div class="span12">
    <div class="widget-box">
      <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
        <h5>Thêm danh mục sản phẩm</h5>
      </div>
      <div class="widget-content nopadding">
        <form   method="POST" class="form-horizontal addform">
          <input type="hidden" />
          <div class="control-group">
            <label class="control-label">Tên danh mục</label>
            <div class="controls">
              <input name="txtname" type="text" class="span11" placeholder="Tên danh mục" />
            </div>
          </div>

          <div class="control-group">
            <label class="control-label">Mô tả</label>
            <div class="controls">
              <input name="txtdes" type="text" class="span11" placeholder="Mô tả" />
            </div>
          </div>
          <div class="control-group">
            <label  class="control-label">Từ khóa</label>
            <div class="controls">
              <input  name="txtkey" type="text" class="span11" placeholder="Từ khóa" />
            </div>
          </div>

          <div style="text-align: center;" class="form-actions">
            <button  type="submit" class="btn btn-success">Thêm</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Hủy</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</div>

<div id="updatecp" class="modal fade" role="dialog">
 <div class="row-fluid">
  <div class="span12">
    <div class="widget-box">
      <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
        <h5>Cập nhật mục sản phẩm</h5>
      </div>
      <div class="widget-content nopadding">
        <form   method="POST" class="form-horizontal updateform" >
          <input type="hidden" />
          <div class="control-group">
            <label class="control-label">Tên danh mục</label>
            <div class="controls">
              <input  name="txtname" type="text" class="span11 txtname" placeholder="Tên danh mục" />
            </div>
          </div>

          <div class="control-group">
            <label class="control-label">Mô tả</label>
            <div class="controls">
              <input name="txtdes" type="text" class="span11 txtdes" placeholder="Mô tả" />
            </div>
          </div>
          <div class="control-group">
            <label  class="control-label">Từ khóa</label>
            <div class="controls">
              <input  name="txtkey" type="text" class="span11 txtkey" placeholder="Từ khóa" />
            </div>
          </div>
          <div class="control-group">
            <label class="control-label">Trạng thái</label>
            <div class="controls">
              <label>

               <input class="rdo"  id="rdot" type="radio" name="radiost">Đang hoạt động
               <label>

                <input class="rdo" id="rdof" type="radio" name="radiosf" />Ngừng hoạt động</label>
              </div>
            </div>
            <div style="text-align: center;" class="form-actions">
              <button  type="submit" class="btn btn-success">Sửa</button>
              <button type="button" class="btn btn-danger" data-dismiss="modal">Hủy</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
