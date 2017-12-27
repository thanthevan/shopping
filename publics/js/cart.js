(function ($) {
/*quick view*/
$('.modal-view').each(function(index) {

  $(this).click(function(event){ 
    var id = $(this).attr('id');
    var url = $(this).attr('data-url');
    if(id!=null && url!=null){
      $.ajax({
        url: url,
        type: 'POST',
        data: {'id':id},
        success : function(res){
          $('#quickview-wrapper').html(res).show();
          $('#productModal').modal('show');
          CloudZoom.quickStart();
          $(".p-details-slider").owlCarousel({
            autoPlay: true, 
            slideSpeed:500,
            pagination:false,
            navigation:true,      
            items : 3,
            itemsDesktop : [1199,4],
            itemsDesktopSmall : [980,4],
            itemsTablet: [768,4],
            itemsMobile : [479,3]
          }); 

          $('.cloudzoomsub').each(function(index){
            $(this).click(function(event) {
              var datasrc = $(this).attr('data-img');
              $('#img-main').attr('src', datasrc);
              CloudZoom.quickStart();
              $.extend($.fn.CloudZoom.defaults, {
                disableOnScreenWidth: 991
              });

            });
          });

          $('.scolor').each(function(index){
            $(this).click(function(event) {
             var id= $(this).attr('id');
             id = '#'+id;
             $('.scolor').removeClass('choiced');
             $(id).addClass('choiced');
             var size = $(id).attr('data-color');
             $('.productColor').val(size);
           });
          });

          $('.csize').each(function(index){
            $(this).click(function(event) {
             var id= $(this).attr('id');
             id = '#'+id;
             $('.csize').removeClass('choiced');
             $(id).addClass('choiced');
             var size = $(id).attr('data-size');
             $('.productSize').val(size);
           });
          });


          $('.qty').attr('disabled', 'disabled');
          $('#minus').addClass('disable');
          $('#plus').click(function(event) {
            var qty = $('.qty').val();
            qty = parseInt(qty);
            if(qty>1)
            {
             $('#minus').removeClass('disable');
           }
           qty=qty+1;
           $('.qty').val(qty);
         });
          $('#minus').click(function(event) {
            var qty = $('.qty').val();
            if(qty==1)
            {
              $('#minus').addClass('disable');
            }
            else
            {
             qty=qty-1;
             $('.qty').val(qty);
           }});

          $('.single_add_to_cart_button').click(function(event){
            var id = $('#idpd').val();
            var qty = $('.qty').val();
            var color=$('.productColor').val();
            var size=$('.productSize').val();
            var url = $(this).attr('data-url');
            var flag= true;
            var path_img =$('#path_img').val();
            var center = 'VNĐ';
            var removeitem =$('#removeitem').val();


            if(color=='null')
            {
              flag= false;
              alert('Vui lòng chọn màu');
            }
            if(size=='null')
            {
               flag= false;
              alert('Vui lòng chọn kích cỡ');
            }
            if(flag)
            {

              $.ajax({
                url: url,
                 cache: false,
                type: 'POST',
                data: {'id':id,'qty':qty,'color':color,'size':size},
                success : function(res){
                var data = $.parseJSON(res);
            
                 var count = Object.keys(data).length;
                 var printvalue = function(value){
                        var html='';
                  $.each(value,function(key, item){
                   
                   html+='<div class="cart-body-item">';
                   html+='<div class="cart-col1">';
                   html+='<div class="cart-img">';
                   html+='<a href=""><img src="'+path_img+item['option']['image']+'" alt=""></a>';
                   html+='</div><div class="cart-info"><div class="cart-info-name">';
                   html+='<a href="#">'+item['name']+'</a></div><div class="cart-item-remove" style="width:113px;float:left;">';
                   html+='<a href="javascript:void(0)" data-url="'+removeitem+'" class="remove-item-cart" id="'+item['rowid']+'"  title="Xóa" ><i class="fa fa-trash-o"></i> Bỏ sản phẩm</a>';
                   html+='</div><div class="cart-item-color" style="float: left;width: 20px;height: 20px; background:'+item['option']['color']+'"><p></p></div>';
                   html+='<div class="cart-item-size" style="margin-left: 21px;width:20px;float: left;">';
                   html+='<p>'+item['option']['size']+'</p></div></div></div>';
                   html+='<div class="cart-col2">';
                   html+='<div class="cart-price">';
                   html+='<span class="cart-item-price">'+item['price']+ center+'</span></div></div>';
                   html+='<div class="cart-col3"><input type="hidden" name="" id="input" class="form-control" value="">';
                   html+='<button class="item-count mount" id="m'+key+'" key="'+key+'">-</button>';
                   html+='<input class="item-qty" type="text" id="sl'+key+'" value="'+item['qty']+'" disabled>';
                   html+='<button class="item-count plus" id="p'+key+'" key="'+key+'">+</button></div>';
                   html+='<div class="cart-col4"><div class="cart-price">';
                   html+='<span class="cart-item-price cart-total-price">'+item['subtotal']+ center+'</span></div></div></div>';
                 
                  });
                   var script = "<script>$('.plus').each(function(index){$(this).click(function(event) { var id ='#sl'+$(this).attr('key'); var qty =$(id).val(); qty = parseInt(qty);if(qty>1){$('#m'+id).prop('disabled',false);;}qty=qty+1;$(id).val(qty);});});  $('.mount').each(function(index){$(this).click(function(event) { var id ='#sl'+$(this).attr('key'); var qty =$(id).val(); qty = parseInt(qty);if(qty==1){$('#m'+id).prop('disabled',true) ;}qty=qty-1;$(id).val(qty);});}); </script>";
                   
                  return html+script;
                 }; 
                   $('#productModal').modal('hide');

                   $('#minicart').modal('show'); 
                   $('.cart-body').html(printvalue(data));
                   $('#countcartmini').html(count);
                   $('#countitem').html(count+" sản phẩm");
                  
                  

                 $(document).on('click','.remove-item-cart',function (e){
                     $.ajax({
                      url: removeitem,
                      cache: false,
                      type: 'POST',
                      data: {'id':$(this).attr('id')},
                      success : function(res){
                          var value= $.parseJSON(res);
                          var count1 = Object.keys(value).length;
                           $('.cart-body').html(printvalue(value));
                           $('#countcartmini').html(count1);
                           $('#countitem').html(count1+" sản phẩm");
                           
                           if( $('.cart-body').children().length==1)
                           {
                            $('.cart-body').html('<div style="color:red;padding:10px;">Giỏ hàng của bạn trống!</div>');
                            $('.action-cart-buy').attr('href', 'javascript:void(0)');
                          }
  

                  
                      //     $(document).on('each','.item-count',function (e){
                                  
                            


                      //           $.ajax({
                      // url: removeitem,
                      // cache: false,
                      // type: 'POST',
                      // data: {'id':$(this).attr('id')},
                      // success : function(res){

                      //      var value1= $.parseJSON(res);
                           
                      //      $('.cart-body').html(printvalue(value1));

                      // }});     
                      //     });
                      }});



                    });
                    
                       
                            

                   
                  
                }
              });

             
            }
          });



        }});}});});
/*end quick view*/

/*add to cart */
 
 
/*end add to cart*/



})(jQuery); 