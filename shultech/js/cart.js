$(document).ready(function(){
//continue shopping
$("#goback").click(function(){
  parent.history.back();
    return false;
  
});


//remove item from cart
$(".remove").click(function(){
  $(this).closest(".product_count").remove();
  product_count();
  productsum();
});
//product count
function product_count(){
  var count = $('.product_count').length;
  $(".p_count").html(count);
  productsum();
}
// total sum
function productsum()
{
  var sum=0;
  $(".sum").each(function() {
    sum+=parseInt($(this).text());
    $("#total_sum").html(sum);
});
}
// total sum
function productsum()
{
  var sum=0;
  $(".sum").each(function() {
    sum+=parseInt($(this).text());
    $("#total_sum").val(sum);
});
}
//product count call
product_count();
productsum();
//place order
$("#placeorder").click(function(){

});

//icrement
  $('.count').prop('disabled', true);

        $(document).on('click','.plus',function(){
          var myId = $(this).attr('id');
          var val_b=$("#myId").val();

        $('#'+myId).val(parseInt($('.count').val()) + 1 );
        });
          $(document).on('click','.minus',function(){
             var myid = $(this).attr('id');
          $('#'+myid).val(parseInt($('#'+myid).val()) - 1 );
            if ($('.count').val() == 0) {
            $('.count').val(1);
          }
            });
   			$(document).on('click','.plus',function(){
          var myId = $(this).attr('id');
          var val_b=$("#myId").val();

				$('.count').val(parseInt($('.count').val()) + 1 );
    		});
        	$(document).on('click','.minus',function(){
    			$('.count').val(parseInt($('.count').val()) - 1 );
    				if ($('.count').val() == 0) {
						$('.count').val(1);
					}
    	    	});
});