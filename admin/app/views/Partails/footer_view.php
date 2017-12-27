
</div>
</div>
<!--Footer-part-->
<div class="row-fluid">
  <div id="footer" class="span12"> 2017 &copy; trang tra shop.<a href="">Trangtrashop.com</a> </di>
  </div>

  <!--end-Footer-part-->




<script src="<?php echo base_url(); ?>publics/js/jquery.min.js"></script> 
<script src="<?php echo base_url(); ?>publics/js/jquery.ui.custom.js"></script> 
<script src="<?php echo base_url(); ?>publics/js/bootstrap.min.js"></script> 
<script src="<?php echo base_url(); ?>publics/js/bootstrap-colorpicker.js"></script> 
<script src="<?php echo base_url(); ?>publics/js/bootstrap-datepicker.js"></script> 
<script src="<?php echo base_url(); ?>publics/js/jquery.uniform.js"></script> 
<script src="<?php echo base_url(); ?>publics/js/select2.min.js"></script> 
<script src="<?php echo base_url(); ?>publics/js/matrix.js"></script> 
<script src="<?php echo base_url(); ?>publics/js/matrix.form_common.js"></script> 
<script src="<?php echo base_url(); ?>publics/js/jquery.peity.min.js"></script> 




  <!-- //// -->
  <script type="text/javascript">
    function changeproduct(obj){
      var value = $.trim($(obj).val());
      var url  = "<?php echo base_url(); ?>" + "product/index";
      window.location.href = url  + '/'+value ;


    }
  </script>


  <!-- popup -->
  <script type="text/javascript">
    $(document).ready(function(){

     $(window).scroll(function() {
      sessionStorage.scrollTop = $(this).scrollTop();
    });

     $(document).ready(function() {
      if (sessionStorage.scrollTop != "undefined") {
        $(window).scrollTop(sessionStorage.scrollTop);
      }
    });
     
      $('#title-table-checkbox').click(function(event) {
       
      });



     $("#selectvl").select2({
      placeholder: "Màu sắc",
      allowClear: true
    });
     $("#selectvl1").select2({
      placeholder: "Kích cho giày và quần",
      allowClear: true
    });

     $("#selectvl2").select2({
      placeholder: "Kích thước cho áo"
    });

     $('#selectvl1').change(function(){
      var meals = $(this).val();



      if(meals!=null)
        var selectedmeals = meals.join(","); 
      else
        selectedmeals = meals;
      if(selectedmeals!=null)
        $('#dt1').attr('value', selectedmeals);
      else
        $('#dt1').attr('value', '');


    }); 
    
     $('#selectvl2').change(function(){
      var meals = $(this).val();



      if(meals!=null)
        var selectedmeals = meals.join(","); 
      else
        selectedmeals = meals;
      if(selectedmeals!=null)
        $('#dt2').attr('value', selectedmeals);
      else
        $('#dt2').attr('value', '');


    });
     $('#selectvl').change(function(){
      var meals = $(this).val();



      if(meals!=null)
        var selectedmeals = meals.join(","); 
      else
        selectedmeals = meals;
      if(selectedmeals!=null)
        $('#datacl').attr('value', selectedmeals);
      else
        $('#datacl').attr('value', '');


    });


     $('.addvalue').focus(function(){
      var href = $(this).attr('href');
      $('.addform').attr('action',href);
    });


     $('.update1').focus(function(){
      var href = $(this).attr('href');

      var vt1 = href.lastIndexOf('/');
      var vt2 = href.lastIndexOf('.');
      var status = href.slice(vt1+1,vt2);
      var deskey = href.slice(0,vt1);
      var vt3 = deskey.lastIndexOf('/');
      var key =deskey.slice(vt3+1);
      var namedes= href.slice(0,vt3);
      var vt4 = namedes.lastIndexOf('/');
      var des = namedes.slice(vt4+1);
      var nameid = href.slice(0,vt4);
      var vt5 = nameid.lastIndexOf('/');
      var name = nameid.slice(vt5+1);
      href = href.slice(0, vt5);
      $('.updateform').attr('action',href);
      $('.txtname').attr('value',name );
      $('.txtdes').attr('value',des );
      $('.txtkey').attr('value',key );
    //   if(status=='1')
    //   {
    //     $('#rdot').attr('checked', true);

    //  }
    //   else
    //   {

    //     $('#rdot').prop('checked', false);
    // }

  });

   });

 </script>
</body>
</html>
