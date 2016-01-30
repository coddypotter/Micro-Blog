$(document).ready(function(e) {
   $('.textarea').keyup(function(e){
      var text = $('.textarea').val();
      $('.charCount').html(text.length);
   });
   $('.post').click(function(){
   		var text = $('.textarea').val();
         if(text.length > 255){
            alert("You can only post less than 255 characters");
         }else{
            $.ajax({
               url:"mechanisms/insertFeed.php",
               type:"POST",
               data:{
                  text:text
               },
               success:function(resp){
                  if(resp == "Feed Posted"){
                     loadfeeds();
                     $('.textarea').val('');
                     $('.charCount').html('0');
                  }else{
                     alert(resp);
                  }
                  
               }
            });
         }
   		
   });
   loadfeeds();

   function loadfeeds(){
   		$.get("mechanisms/fetchFeed.php",function(data) {
    		$('.feeds').html(data);
		});

   }
});