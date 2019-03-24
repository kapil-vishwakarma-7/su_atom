$(document).ready(function (){
var count=2;
$("#add_more").click(function(){
var ap_row="";

ap_row+="<div class='row'><div class='col-md-1'><label>#</label><br><span>"+count+"</span></div>";
    
    ap_row+=" <div class='col-md-2'><label>Heading</label><select class='form-control'><option>General</option><option>Option2</option> <option>Option 3</option> </select></div>";
    
ap_row+=" <div class='col-md-4'><label>Specification</label><input type='text' class='form-control name=''></div>";
ap_row+=" <div class='col-md-4'><label>Specification Name</label><input type='text' class='form-control name=''></div>";
ap_row+="<div class='col-md-1'><label>Action</label><button type='button' class='btn btn-danger  btn-block' id='remove'><span class='fas fa-minus' id='remove'></span></button></div></div>";
ap_row+="<hr>";
count++;
$("#add_more_div .new_row").append(ap_row);

});
$('#add_more_div').on('click','#remove',function(){
 $(this).parents(".new_row").remove();
});
});