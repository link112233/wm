
$(document).ready(function(){
 $("#submit_login").click(function(){

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

         }
         else {
           alert("Something went wrong brah");
           return false;
         }
     })
   }
   else {
     alert('empty');
     return false;
   }
 });
 return false;
});
