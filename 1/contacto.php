<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2" />
<title>formulario</title>

<!-- Fav icon -->
<link rel="shortcut icon" href="./favicon.ico" />

<!-- Stylesheets -->
<link rel="stylesheet" type="text/css" href="./css/reset.css" />
<link rel="stylesheet" type="text/css" href="./style.css" />


<!-- jQuery -->
<script src="./js/jquery-1.4.2.min.js" type="text/javascript"></script>
<script src="./js/cufon-yui.js" type="text/javascript"></script>
<script src="./js/titt_100-titt_400.font.js" type="text/javascript"></script>



<!--[if ie]>
<style type="text/css" media="screen">
#Nombre, #Email, #Telefono,#Consulta {
border:1px solid #dedede;
}
}
</style>
<![endif]--> 

<meta charset="UTF-8"><style type="text/css">
<!--

-->
</style>
<link href="../styles.css" rel="stylesheet" type="text/css" />
</head>

<!-- Body starts -->
<body>
<!-- Footer -->
<table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr><script language="JavaScript" type="text/JavaScript">
	function verifica() {
		if ((document.form1.Nombre.value == "") || (document.form1.Nombre.value== null)) 
		{
			alert("Ingrese su Nombre"); 
			document.form1.Nombre.focus();
			return false;
		}
		else
		var checkOK = "ABCDEFGHIJKLMNNOPQRSTUVWXYZÁÉÍÓÚabcdefghijklmnnopqrstuvwxyzáéíóú ";
 		var checkStr = document.form1.Nombre.value;
  		var allValid = true;
  		for (i = 0;  i < checkStr.length;  i++)
  		{
    		ch = checkStr.charAt(i);
    		for (j = 0;  j < checkOK.length;  j++)
      			if (ch == checkOK.charAt(j))
       				break;
    			if (j == checkOK.length)
    			{
      				allValid = false;
      				break;
    			}
  		}
  		if (!allValid)
  		{
    		alert("Escriba sólo letras en el campo Nombres");
   			document.form1.Nombre.focus();
    		return (false);
  		}
		
	
		else 
		if ((document.form1.Email.value == "") || (document.form1.Email.value== null)) 
		{
			alert("Ingrese su E-mail"); 
			document.form1.Email.focus();
			return false;
		}
		else 
		if ((document.form1.Email.value.indexOf ('@', 0) == -1)||(document.form1.Email.value.length < 5)) 
		{ 
    		alert("Debes escribir una dirección de E-mail válida"); 
    		document.form1.Email.focus();
    		return (false); 
  		}
		
			else
				if ((document.form1.Telefono.value == "") || (document.form1.Telefono.value== null)) 
		{
			alert("Ingrese su Teléfono"); 
			document.form1.Telefono.focus();
			return false;
		}
		else
		var checkOK = "0123456789 ";
 		var checkStr = document.form1.Telefono.value;
  		var allValid = true;
  		for (i = 0;  i < checkStr.length;  i++)
  		{
    		ch = checkStr.charAt(i);
    		for (j = 0;  j < checkOK.length;  j++)
      			if (ch == checkOK.charAt(j))
       				break;
    			if (j == checkOK.length)
    			{
      				allValid = false;
      				break;
    			}
  		}
  		if (!allValid)
  		{
    		alert("Escriba sólo números en el campo Teléfono");
   			document.form1.Telefono.focus();
    		return (false);
  		}
		
		
		
		if ((document.form1.Consulta.value == "") || (document.form1.Consulta.value== null)) 
		{
			alert("Ingrese sus comentarios"); 
			document.form1.Consulta.focus();
			return false;
		}
		else 
		return true;
		}
</script>
    <td>&nbsp;</td>
    <td><table width="540" border="0" cellpadding="0" cellspacing="0" class="normaltext">
      <tr>
        <td colspan="3" class="normaltext">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="3" class="normaltext"><?
   
$Nombre = $_POST['Nombre'];
$Telefono = $_POST['Telefono'];
$Email = $_POST['Email'];
$Consulta = $_POST['Consulta'];

   $emailbody2 .= "\nDatos: \n\n";
   $emailbody2 .= "======================================================\n\n";
   $emailbody2 .= "Nombre................: $Nombre\n";
   $emailbody2 .= "Teléfono..............: $Telefono\n";
   $emailbody2 .= "E-mail................: $Email\n";
   $emailbody2 .= "Consulta..............: $Consulta\n";
   $emailbody2 .= "======================================================\n\n";
    
   $emailto2 = "DELTRONICS S.A.C.  <ventas@deltronicsperu.com >"; 
   $emailsubject2 = "Contacto Web DELTRONICS S.A.C."; 
   $emailfromaddr ="$Email";
   $emailrepply = $Email;
   $emailfromname = $Nombre;
   $emailheaders2 = "From: $emailfromname <$emailfromaddr>\n";
   $emailheaders2 .= "Reply-To: $emailrepply\n";
   $emailheaders2 .= "X-Mailer: PHP/" . phpversion(). "\n"; 
   $emailheaders2 .= "X-Sender-IP: $REMOTE_ADDR"; 
   mail( $emailto2,$emailsubject2, $emailbody2,$emailheaders2); 
   echo " <p>$Nombre,<br>Su Mensaje fue recibido con exito, muy pronto nos contactaremos con Ud.<p>DELTRONICS S.A.C.</td>"; 
?>
        </td>
      </tr>
      <tr>
        <td width="93" class="normaltext">&nbsp;</td>
        <td width="12" class="normaltext">&nbsp;</td>
        <td width="245">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="3" class="normaltext">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="3"><div align="center"> </div></td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>