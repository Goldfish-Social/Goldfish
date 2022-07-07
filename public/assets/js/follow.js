$(document).ready(function() {     
    
    $('.action-follow').click(function(){    
        var user_id = $(this).data('id');
        var cObj = $(this);
        var c = $(this).parent("div").find(".tl-follower").text();

        $.ajax({
           type:'POST',
           url: urlFollow,
           data:{user_id:user_id, _token: token},
           dataType: 'json',
           success:function(data){
              console.log(data.success);
              if(jQuery.isEmptyObject(data.success.attached)){
                cObj.find("span").text("Follow");
                cObj.parent("div").find(".tl-follower").text(parseInt(c)-1);
              }else{
                cObj.find("span").text("Unfollow");
                cObj.parent("div").find(".tl-follower").text(parseInt(c)+1);
              }
           }
        });
    });
});