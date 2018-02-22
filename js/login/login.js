
$(document).ready(function(){
 $("#submit_login").click(function(){

 $("#loader1").css("display","block");
   //serialize
   $("#login_form").serialize();

   //get data
   var username = $("#username").val();
   var password = $("#password").val();

   //check if not empty
   if(username !== '' && password !== '')
   {
     $.ajax({
       url:"php/login/login.php",
       method:"POST",
       data:{username:username, password:password},
         success:function(data)
         {
            window.location = 'admin-dashboard';
         }
     })
   }
   else {
     alert('Onjuiste gegevens');
     $("#loader1").css("display","none");
     return false;
   }
 });
 return false;
});
