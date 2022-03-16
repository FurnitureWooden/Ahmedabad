<html>
<head>
<title>Login Page</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
.login-form{
	width:340px;
    margin:100px auto;	
}
.login-form form{
	margin-bottom:15px;
	background:#e7e7e7;
	box-shadow:0px 2px 2px rgba(0,0,0,0.3);
	padding:30px;
}
.login-form h2{
	margin:0 0 15px;
}
form-control , .btn{
	min-height:30px;
	border-radius:2px;
}
 .btn{
	 font-size:15px;
	 font-weight:bold;
 }
</style>
<body>
 <div class="login-form">
  <form  method="POST">
   <h2 class="text-center">Log in </h2>
   <div class="form-group">
		<input type="text" class="form-control mt-4" id="email" required="required" placeholder="Email" required="required">
   </div>
   <div class="form-group"> 
		<button type="button" class="btn btn-primary btn-block mt-4" required="required" onclick="send_otp()">Send OTP</button>
   </div>
  </form>
 </div>
</body>
<script>
 
 function send_otp(){
		var email=jQuery('#email').val();
		jQuery.ajax({
			url:'send_otp.php',
			type:'POST',
			data:'email='+email ,
			success:function (result){
				
			}
			
		});
 }
 
</script>
</html>




