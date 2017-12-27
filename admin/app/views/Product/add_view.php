<div class="container-fluid">
  <div class="row-fluid" >
    <div class="span12">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Thêm chi tiết sản phẩm</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="<?php echo site_url('product/addproduct');?>" method="POST" enctype='multipart/form-data'
          class="form-horizontal">
            <div class="control-group">
              <label class="control-label">Mã sản phẩm</label>
              <div class="controls">
                <input name='txtmsp' type="text" class="span11" placeholder="Mã sản phẩm" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Tên sản phẩm</label>
              <div class="controls">
                <input name='txttsp' type="text" class="span11" placeholder="Tên sản phẩm" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Số lượng</label>
              <div class="controls">
                <input name='txtsl' type="text" class="span11" placeholder="Số lượng" />
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Danh mục sản phẩm</label>
              <div class="controls" >
                <select name="txtdmsp">
                <?php foreach ($dmsp as $kdm => $vdm): ?>
                  <?php if ($vdm['ParentID']==0): ?>
                  <optgroup label="<?php echo $vdm['CategoryName'];?>" >
                  <?php $id=$vdm['CategoryID']; unset($dmsp[$kdm]); ?>
                  <?php foreach ($dmsp as $k1 => $v1): ?>
                         <?php if ($v1['ParentID']==$id): ?>
                            <option value="<?php echo $v1['CategoryID']; ?>">
                            <?php echo $v1['CategoryName']; ?>
                            </option>
                         <?php endif ?>

                  <?php endforeach; ?>
                  </optgroup>
                  <?php endif ?>
                <?php endforeach; ?>
                </select>

              </div>
            </div>
             <div class="control-group">
              <label class="control-label">Hình ảnh sản phẩm</label>
              <div class="controls">
                <input name='txtfile' type="file" class="span11" />
              </div>
            </div>
             <div class="control-group">
              <label class="control-label">Giá</label>
              <div class="controls">
                <input name='txtgia' type="text" class="span11" placeholder="VNĐ" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Giảm giá</label>
              <div class="controls">
                <input name='txtgiamgia' type="text" class="span11" placeholder="VNĐ" />
              </div>
            </div>
             <div class="control-group">
              <label class="control-label">Kích thước</label>
              <input name='txtkichcogq' id="dt1" type="hidden" class="span11" placeholder="Kích cỡ" />
               <input name='txtkichcoao' id="dt2" type="hidden" class="span11" placeholder="Kích cỡ" />

              <div class="controls" id="choice1">
                  
                  <select  id="selectvl1"  class="span11" multiple>
                  <?php for ($i=20; $i <=50 ; $i++): ?>
                  <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                 <?php endfor; ?>
                </select>
              </div>
              </div>
               <div class="control-group">
                <div class="control-group">
              <div class="controls" id="choice2">
               
                  <select  id="selectvl2"  class="span11" multiple>
                
                  <option value="XS">XS</option>
                  <option value="S">S</option>
                  <option value="M">M</option>
                  <option value="L">L</option>
                  <option value="XL">XL</option>
                  <option value="XXL">XXL</option>
                
                </select>
              </div>
              </div>
            </div>
             <div class="control-group">
              <label class="control-label">Màu sắc</label>
              <input type="hidden" id="datacl" name='colordata'/>
              <div class="controls">
                <select  id="selectvl"  class="span11" multiple>
                <?php $datacolor=array(
                  'Đỏ'=>'#ff0000',
                  'Vàng'=>'#ffff00',
                  'Cam'=>'#ff8000',
                  'Xanh lá cây'=>'#008000',
                  'Xanh da trời'=>'#0000ff',
                  'Chàm'=>'#4B0082',
                  'Tím'=>'#9400D3',
                  'Nâu'=>'#8B4513',
                  'Trắng'=>'#FFFFFF',
                  'Đen'=>'#000000',
                  'Ghi'=>'#CCCCCC'
                ); ?>
                 <?php foreach ($datacolor  as  $key =>  $value): ?>
                  <option value="<?php echo $value; ?>"><?php echo $key; ?></option>
                 <?php endforeach; ?>
                </select>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Nội dung</label>
              <div class="controls">
                <textarea name='txtmota' class="span11" rows="5" placeholder="Mô tả chi tiết sản phẩm" ></textarea>
              </div>
            </div>
             <div class="control-group">
              <label class="control-label">Thẻ SEO</label>
              <div class="controls">
                <input name='txtdes' type="text" class="span11" placeholder="MetaDescription" />
                </div>
              <div class="controls">
                 <input name='txtkey' type="text" class="span11" placeholder="MetaKeyword"/>
              </div>
            
              <div class="form-actions" style="text-align: center;">
                <button type="submit" class="btn btn-success">Thêm</button>
              </div>
            </form>
          </div>
        </div>
      </div>
 </div>
</div>



           