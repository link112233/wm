
$(document).ready(function(){
 $("#submit_login").click(function(){
   //serialize
   $("#login_form").serialize();

   //get data
   var username = $("#username").val();
   var password = $("#password").val();

   //check if not empty
   if(username !== '' && password !== '')
   {
          $.ajax({
          type: 'POST',
          url: 'php/login/login.php',
          data: { username: username, password: password },
          beforeSend:function(){
            // this is where we append a loading image
            $('#error_l').html('loading');
          },
          success:function(data){
            // successful request; do something with the data
            window.location.href('admin-dashboard');
          },
          error:function(){
            // failed request; give feedback to user
            $("#error_l").removeClass('hidden');
          }
        });
   }

 });
 return false;
});
