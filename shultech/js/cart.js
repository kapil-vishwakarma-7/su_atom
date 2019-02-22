$(document).ready(function(){
//continue shopping
$("#goback").click(function(){
	parent.history.back();
		return false;
	
});


//remove item from cart
$().click(function(){
function removeitem(){

}	
});

//place order
$("#placeorder").click(function(){

});

//icrement
  $('.count').prop('disabled', true);
   			$(document).on('click','.plus',function(){
				$('.count').val(parseInt($('.count').val()) + 1 );
    		});
        	$(document).on('click','.minus',function(){
    			$('.count').val(parseInt($('.count').val()) - 1 );
    				if ($('.count').val() == 0) {
						$('.count').val(1);
					}
    	    	});
});