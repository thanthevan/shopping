
<div class="container-fluid">
  <div class="row-fluid">
    <div class="span6">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Thông tin chi tiết</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="<?php echo site_url('user/update');?>" method="POST" class="form-horizontal">
            <input type="hidden" value="<?php echo $this->session->userdata['UserId']; ?>"/>
            <div class="control-group">
              <label class="control-label">Họ tên</label>
              <div class="controls">
                <input type="text" value="<?php echo $this->session->userdata['FullName']; ?>" class="span11" placeholder="Họ và tên" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Giới tính</label>
              <div class="controls">
                <select>
                  <option <?php echo  $this->session->userdata['Gender']=='nam'?"selected='Nam' value='Nam' ":"value='Nam'";  ?>>Nam</option>
                  <option <?php echo $this->session->userdata['Gender']=='nữ'?"selected='Nữ'value='Nữ'":"value='Nữ'";  ?>>Nữ</option>
                </select>

              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Ngày sinh</label>
              <div class="controls">
                <div  data-date="12-02-2012" class="input-append date datepicker">
                  <input type="text" value="12-02-2012"  data-date-format="mm-dd-yyyy" class="span11" >
                  <span class="add-on"><i class="icon-th"></i></span> </div>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Email</label>
                <div class="controls">
                  <input value="<?php echo $this->session->userdata['Email']; ?>" type="text" class="span11" placeholder="Email" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Số điện thoại</label>
                <div class="controls">
                  <input value="<?php echo $this->session->userdata['PhoneNo']; ?>" type="text" class="span11" placeholder="Số điện thoại" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Địa chỉ</label>
                <div class="controls">
                  <input value="<?php echo $this->session->userdata['Address']; ?>" type="text" class="span11" placeholder="Địa chỉ" />
                </div>
              </div>

              <div class="form-actions">
                <button type="submit" class="btn btn-success">Cập nhật</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="span6">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
            <h5>Ảnh đại diện</h5>
          </div>
          <div class="widget-content nopadding">
          
       </div>
     </div>
   </div>
 </div>
</div>