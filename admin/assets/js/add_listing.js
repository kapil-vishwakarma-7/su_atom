$(document).ready(function (){
var count=2;
$("#spec_type").change(function(){
var a=$("#spec_type").val();
if(a=='')
{
	return;
}
else{
	$("#add_more_div").show();
	$(".spec_type").val(a);
}	
})
$("#add_more").click(function(){
var ap_row="";
var b=$("#spec_type").text();
ap_row+="<div class='row'><div class='col-md-1'><label>#</label><br><span>"+count+"</span></div>";
ap_row+=" <div class='col-md-4'><label>Specification</label><input type='text' class='form-control' name=''></div>";
ap_row+=" <div class='col-md-4'><label>Specification Name</label><input type='text' class='form-control name=''></div>";
ap_row+="<div class='col-md-1'><label>Action</label><button type='button' class='btn btn-danger  btn-block' id='remove'><span class='fas fa-minus' id='remove'></span></button></div></div>";
ap_row+="<hr>";
count++;
$("#add_more_div .new_row").append(ap_row);

});
$(".input_file").click(function(){
$('input[type="file"]').change(function(e){
	var path=$(this).attr();
            var fileName = e.target.files[0].name;
            alert('The file "' + fileName +  '" has been selected.');
        });
});
$('#add_more_div').on('click','#remove',function(){
 $(this).parents(".new_row").remove();
});
});
