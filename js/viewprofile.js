$(document).ready(function(e) {
   var uid = $('.uid').val();
	getUserDetails()
   function getUserDetails(){
   		$.ajax({
   			url:"mechanisms/userdetails.php",
   			type:"POST",
   			data:{
   				uid:uid
   			},
   			dataType : 'json',
   			success:function(resp){
   				
   				if(resp.msg == "No Users Found"){
   					alert(resp.msg);
   					window.location = "user.php";
   				}else{
   					$('.avatar img').attr('src', resp.pic);
   					$('.name').html(resp.fname+" "+resp.lname);
   				}   				
   			}
   		});
   }
   getUserFeeds();
   function getUserFeeds(){
   		$.ajax({
   			url:"mechanisms/userFeeds.php",
   			type:"POST",
   			data:{
   				uid:uid
   			},
   			success:function(resp){
   				$('.feeds').html(resp);   				
   			}
   		});
   }
   getFollowStatus();
   function getFollowStatus(){
   		$.ajax({
   			url:"mechanisms/status.php",
   			type:"POST",
   			data:{
   				uid:uid
   			},
   			success:function(resp){
               alert(resp);
   				if(resp == "Your cant follow yourself"){
   					$('.follow').fadeOut(900);
   				}else{
   					$('.follow').html(resp);
   				}
   			}
   		});
   }
   $('.follow').click(function(){
   		$.ajax({
   			url:"mechanisms/follow.php",
   			type:"POST",
   			data:{
   				uid:uid
   			},
   			success:function(resp){
   				if(resp == "Your cant follow yourself"){
   					//alert(resp);
   				}else{
   					$('.follow').html(resp);
   				}
   			}
   		});
   })
});