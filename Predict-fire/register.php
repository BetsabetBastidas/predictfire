<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>User Register | Predict Fire</title>
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

      function  atras()
      {
        document.location.href='index.php';
      }

      function cancelar()
      {
        setTimeout('document.location.reload()',250);
      }

    function registrar()
    {
    	var address_i = $('#address').val();
        var fullname_i = ($('#fullname').val());
        var email_i = $('#email').val();
        var username_i = $('#username').val();
    	var pasword_i = $('#password').val();
        var confirm_pasword_i = $('#confirm_password').val();
    	if ((email_i!="")&&(fullname_i!="")&&(address_i!="")&&(username_i!="")&&(pasword_i!="")&&(confirm_pasword_i!=""))
    	{
          if(pasword_i == confirm_pasword_i)
          {
            $.ajax({
               type: 'POST',
               url: 'registroUsuario.php',
               data:{fullname:fullname_i,address: address_i,usermane: username_i,password:pasword_i,email:email_i},
               success:function(resultado)
               {
                 eval(resultado);
               }
            });
          }
          else
          {
            alert("La conatraseña y la confirmacioón no coinciden.");
          }			
    	}
    	else
    	{
    		alert("Existen campos sin datos. Todos loc campos son obligatorios.");
    	}
    }
</script>
</br></br></br></br></br>
<div class="container" style="margin-left: 24em;">
    <div class="col-lg-8">
        <section class="panel">
            <header class="panel-heading">
               User Register 
            </header>
            <div class="panel-body">
                    <div class="form-validate form-horizontal ">
                        <div class="form-group ">
                            <label class="control-label col-lg-2">Full name <span class="required">*</span></label>
                            <div class="col-lg-10">
                                <input class=" form-control" id="fullname" type="text" style="text-transform:capitalize"/>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label class="control-label col-lg-2">Address <span class="required">*</span></label>
                            <div class="col-lg-10">
                                <input class=" form-control" id="address" type="text" />
                            </div>
                        </div>
                        <div class="form-group ">
                            <label class="control-label col-lg-2">Username <span class="required">*</span></label>
                            <div class="col-lg-10">
                                <input class="form-control " id="username" type="text" />
                            </div>
                        </div>
                        <div class="form-group ">
                            <label class="control-label col-lg-2">Password <span class="required">*</span></label>
                            <div class="col-lg-10">
                                <input class="form-control " id="password" type="password" />
                            </div>
                        </div>
                        <div class="form-group ">
                            <label class="control-label col-lg-2">Confirm Password <span class="required">*</span></label>
                            <div class="col-lg-10">
                                <input class="form-control " id="confirm_password" type="password" />
                            </div>
                        </div>
                        <div class="form-group ">
                            <label class="control-label col-lg-2">Email <span class="required">*</span></label>
                            <div class="col-lg-10">
                                <input class="form-control " id="email" type="email" />
                            </div>
                        </div></br>
                        <div >
                            <div class="col-lg-offset-2 col-lg-10">
                                <button class="btn btn-primary" type="submit" onclick="registrar()">Save</button>
                                <button class="btn btn-default" type="button" onclick="cancelar()">Cancel</button>
                                <button class="btn btn-default" type="button" onclick="atras()">Return</button>
                            </div>
                        </div>
                    </div>
            </div>
        </section>
    </div>
</div>
</body>
</html>