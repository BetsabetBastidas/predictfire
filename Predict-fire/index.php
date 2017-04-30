<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Login | Predict Fire</title>
    <!-- Bootstrap CSS -->    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" /> 
    <link rel="shortcut icon" type="image/x-icon" href="img/log.png">   
    <script src="js/jquery.js" type="text/javascript"></script>
    <script src="js/jquery.js"></script>
</head>

<body class="login-img3-body">

<script type='text/javascript'>
	function registro()
  {
    document.location.href='register.php';
  }

  function login()
	{
		var username_i = $('#username').val();
		var pasword_i = $('#password').val();
		if ((username_i!="")&&(pasword_i!=""))
		{      
			$.ajax({
         type: 'POST',
         url: 'login.php',
         data:{usermane: username_i,password:pasword_i},
         success:function(resultado)
         {
         	  eval(resultado);           
         }
      });
		}
		else
		{
			alert("Username y Password deben poseer datos.");
		}
	}
</script>

<div class="container">
  <div class="login-form">        
    <div class="login-wrap">
        <p class="login-img"><i class="icon_lock_alt"></i></p>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_profile"></i></span>
          <input type="text" class="form-control" id="username" placeholder="Username" autofocus>
        </div>
        <div class="input-group">
            <span class="input-group-addon"><i class="icon_key_alt"></i></span>
            <input type="password" class="form-control" id="password" placeholder="Password">
        </div>        
        <button class="btn btn-primary btn-lg btn-block" onclick="login()" type="submit">Login</button>
        <button class="btn btn-info btn-lg btn-block" onclick="registro()">Signup</button>
    </div>
  </div>
</div>

</body>
</html>