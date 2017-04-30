<?php
	function registro()
	{
		$fullname = utf8_decode(ucwords($_POST["fullname"]));
		$address = ($_POST["address"]);
		$username = ($_POST["usermane"]);
		$password = ($_POST["password"]);
		$email = ($_POST["email"]);
		
    	$conn = mysqli_connect('localhost:3306', 'root', '','space_app_challenger');
		if ($conn->connect_error) 
		{
	    	die("Connection failed: " . $conn->connect_error);
	    } 	
		$sql = "insert into usuarios (full_name,addres,email,username,password) values ('".$fullname."','".$address."','".$email."','".$username."','".$password."')";
		if ($conn->query($sql) == TRUE) {
	    	$cadena = "alert('El usuario ".$fullname." ah sido creado con exito');";
		} else 	{
	    	$cadena = "alert('Algo salio mal en la conexiona a la base de datos');";
		}
		$conn->close();       
        return($cadena);
	}

	echo registro();
?>