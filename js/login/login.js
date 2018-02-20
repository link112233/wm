

$(document).ready(function(){
 $("#add_err").css('display', 'none', 'important');
 $("#add_err").css('color', 'red', 'important');
 $("#submit_login").click(function(){
   var username=$("#email").val();
   var password=$("#password").val();
   $.ajax({
    type: "POST",
    url: "php/login/login.php",
 data: "username="+username+"&password="+password,
    success: function(html){
 if(html==true)    {
 $("#add_err").html("right username or password");
 window.location="admin-dashboard";
 }
 else{
 $("#add_err").css('display', 'inline', 'important');
 $("#add_err").html("Onjuiste inloggegevens");
 }
    },
    beforeSend:function()
    {
 $("#add_err").css('display', 'inline', 'important');
 $("#add_err").html("<img src='images/loader.gif' /> Loading...")
    }
   });
 return false;
 });
});
