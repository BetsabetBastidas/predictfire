<?php
	function login()
	{
		$username = ($_POST["usermane"]);
		$password = ($_POST["password"]);
		$id =''; $fullname='';
		$link = mysql_connect('localhost:3306', 'root', '')or die('No se pudo conectar: ' . mysql_error());
        mysql_select_db('space_app_challenger') or die('No se pudo seleccionar la base de datos');

	    $query = "select id,full_name from usuarios where username = '".$username."' and password = '".$password."' ;";
        $result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());            
        while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) 
        {            
            $id= sprintf("%s",$row["id"]);            
            $fullname= sprintf("%s",$row["full_name"]);
        }
        mysql_free_result($result);     
        mysql_close($link);
        $cadena="";
        if ($id!="") 
        {
        	$conn = mysqli_connect('localhost:3306', 'root', '','space_app_challenger');
			if ($conn->connect_error) 
			{
		    	die("Connection failed: " . $conn->connect_error);
		    }
			$sql = "insert into regaistro_login (nickuser,fecha_hora) values ('".$username."','".date("Y-m-d H:i:s")."')";
			if ($conn->query($sql) == TRUE) {
		    	$cadena = "document.location.href='profile.php';";
			} else 	{
		    	$cadena = "alert('Algo salio mal en la conexiona a la base de datos');";
			}

			$sql = "insert into temporal_login (nick,fullnombre) values ('".$username."','".$fullname."')";
			if ($conn->query($sql) == TRUE) {
		    	$cadena .= "";
			} else 	{
		    	$cadena = "";
			}

			$conn->close();
        }
        else
        {
        	$cadena = "alert('Sus credenciales pueden ser erroneas. Revisar');";
        }
        return($cadena);
	}

	echo login();
?>