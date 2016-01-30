$(document).ready(function(e) {
   $('.searchbox').keyup(function(){
   		var key = $('.searchbox').val();
   		$.ajax({
   			url:"mechanisms/searchuser.php",
   			type:"POST",
   			data:{
   				key:key
   			},
   			success:function(resp){
   				if(resp != "No Users Found"){
   					$('.results').html(resp);
   				}else{
   					alert(resp);
   				}
   				
   			}
   		});
   });
});