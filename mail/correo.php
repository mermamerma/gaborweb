<?php
require_once ('conec.php');
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Consumibles Venezuela - Distribuidores</title>
		<meta name="description" content="Somos una organización especializada en ventas y distribucion de consumibles" />
	<meta name="keywords" content="Pañales, crema dental, dentrifico, colgate, Insumos de Oficina, papel, papel carta" />

    <meta NAME="robots" CONTENT="index, follow">
	<meta name="copyright" content="(c) 2015 Arlisistem" />
	<meta name="author" content="www.arlisistem.com.ve" />
    <link rel="shortcut icon" href="img/9715logo_p.ico" type="image/x-icon" />
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/animate.css">
	<link href="css/animate.min.css" rel="stylesheet"> 
	<link href="css/style.css" rel="stylesheet" />	
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	 <style>
	.zoom {
		transition: transform .2s;
		width: 50%;
		height: 50%;
		margin: 0 auto;
	}

	.zoom:hover {
		-ms-transform: scale(1.3); /* IE 9 */
		-webkit-transform: scale(1.3); /* Safari 3-8 */
		transform: scale(1.3); 
	}
	</style>
  </head>
  <body>
	  <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.12&appId=160570127317148&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
	<header id="header">
    
    <div style="height:40px; align-content: space-between; padding-top:3px; vertical-align:middle;"> 
       <div style="padding-left: 4%; margin-left: 4%; float: left;">
		<a href="#" title="Telefonos">
		 <i class="glyphicon glyphicon-phone" style="font-size:26px;"></i>  (0412) 9600374
		</a>
	   </div>

		
		
	 <div align="right" style="margin-right: 4%">
		<a href="https://www.facebook.com/consumiblesvenezuela/" target="_blank" title="Facebook">
		 <i class="fa fa-facebook-square"  style="font-size:26px;"></i>
		</a>
		</a>
		
		<a href="https://www.instagram.com/consumibles_venezuela" target="_blank" title="Instagram">
		 <i class="fa fa-instagram" style="font-size:26px;"></i>
		</a>
		
		<a href="http://www.twitter.com/consumiblesVzla" target="_blank" title="Twitter">
		 <i class="fa fa-twitter-square" style="font-size:26px;"></i>
		</a>


		<!--
        <a href="https://plus.google.com/u/0/?tab=wX" target="_blank" title="Google +">
		 <i class="fa fa-google-plus-square" style="font-size:26px;"></i>
		</a>
        -->
		<a href="afiliado.php" title="Registro de Afiliado">
		 <i class="fa fa-edit" style="font-size:26px;"></i>
		</a>
		<a href="pagos.php" title="Notificar Pago">
		 <i class="glyphicon glyphicon-bullhorn" style="font-size:26px;"></i>
		</a>

		<a href="correo.php" title="Contactenos">
		 <i class="fa fa-envelope" style="font-size:26px;"></i>
		</a>
	 </div>		

    </div>
        <nav class="navbar navbar-default navbar-static-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
                    </button>
                     <div class="navbar-brand" >
						<a href="index.php">
                        <img src="img/logo_p.jpg" class="img-responsive" alt="" width="200 px"></a>
					</div>
                </div>				
                <div class="navbar-collapse collapse">							
					<div class="menu">
						<ul class="nav nav-tabs" role="tablist">
							<li role="presentation">
                            <a href="index.php">Inicio</a></li>
							<li role="presentation">
                            <a href="laempresa.php">La Empresa</a></li>
							<li role="presentation">
                            <a href="catalogo.php">Catálogo</a></li>
							<li role="presentation">
                            <a href="galeria.php">Galeria</a></li>
							<li role="presentation">
                            <a href="afiliado.php">Registrese</a></li>
							<li role="presentation">
                            <a href="correo.php" class="active">Contacto</a></li>		
							<li role="presentation">
							<a href="culminarpedidos.php" class="glyphicon glyphicon-shopping-cart" title="Carrito de Padidos"></a>
								</li>					
						</ul>
					</div>
				</div>		
            </div><!--/.container-->
        </nav><!--/nav-->		
    </header><!--/header-->	
	

	
	<div class="about">
	<div style="background-color: #51A496; padding-left:8%; padding-top: 30px; padding-bottom: 30px;">
	  <h2>MODULO DE CONTACTO</h2>
	</div>
		<br />
  		<div class="container" ><div class="pi-row">
			<div class="pi-col-sm-12">

				
	
	<?php 
    @$pfw_ip= $_SERVER['REMOTE_ADDR'];
    if(isset($_POST['enviarCorreo'])){
        //se muestra el formulario de nuevo
		$nombre=filter_input(INPUT_POST,"nombre",FILTER_SANITIZE_STRING);
		if($nombre=="")
			$errores[]="El campo nombre no puede estar vacio";

		if(!$correo=filter_input(INPUT_POST,"correo",FILTER_VALIDATE_EMAIL))
			$errores[]="El correo introducido no es v&aacute;lido.";
					
		$telefono=filter_input(INPUT_POST,"telefono",FILTER_SANITIZE_STRING);
		if($telefono=="")
			$errores[]="El campo Telefono no puede estar vacio";

		$mensaje=filter_input(INPUT_POST,"mensaje",FILTER_SANITIZE_STRING);
		if($mensaje=="")
			$errores[]="El campo mensaje no puede estar vacio";
		if(isset($errores)){
			?>
			<br />  
			<span class="Estilo7">El correo no puede enviarse debido a los siguiente Errores</span>
            <br />
         <?php	
			//echo "<ul>";
			foreach($errores as $error)
				echo '<h2>'.$error.'</h2>';
			//echo '</ul></div>';			
			?>
              <br />  <br />
	  <form name="formularioContacto" action="correo.php" method="post">
                <table  width="618" class="formulario">
                    <tr>
                    <td width="72" class="izquierda Estilo7 Estilo14">
						<font color="#131212">
						Nombre:
						</font>
							</td>
                  <td width="299">
                    <input type="text"  name="nombre" value="<?php echo $nombre;?>" class="form-control required email"  size="38" style="width:100%" />  <br />
                   
                  </td></tr>
                    <tr>
						<td class="izquierda Estilo7 Estilo14"><font color="#131212">Correo:</font></td>
                  <td><div align="left">
                    <input type="text" value="<?php echo $correo;?>"  name="correo" class="form-control required email"  size="38"/><br />
                  </div></td></tr>
                        <tr>
							<td class="izquierda Estilo7 Estilo14"><font color="#131212">Telefono:</font></td>
                  <td>
                    <input type="text" value="<?php echo $telefono;?>"  name="telefono"  class="form-control required email"  size="38"/><br />
                 </td></tr>
                    <tr><td class="izquierda Estilo7"><br /></td>
            <td>
              <textarea name="mensaje"  rows="5" cols="50" class="input-text" style="width:100%" ><?php echo $mensaje;?></textarea><br />
            </td></tr>
                    <tr><td class="izquierda"></td><td>
                    <br />
                    <input type="submit" name="enviarCorreo" value="Enviar Correo con su solicitud" class="wpcf7-form-control wpcf7-submit btn btn-primary"/>
                    </td></tr>
                </table>
     <div align="left"></div>       
</form>

		<?php
		}
		else{
		
			$to= "info@consumiblesve.com";
			$subject = 'Informacion: '.$_POST['nombre'];
			$message = "<table width='593' border='0'><tr><td>
			<img src=\"http://www.consumiblesve.com/img/logotecho.jpg\" width='593' height='170' /></td></tr><tr><td><i>Tienes un nuevo Correo desde tu portal Web </i></td></tr><tr><td>";
			$message .= '<strong>Nombre:</strong> '.$nombre."<br />".'<strong>Telerfono:</strong> '.$telefono."<br />".'<strong>Mensaje:</strong> '.$mensaje."<br /><br />".'<strong>IP del visitante:</strong> '.$pfw_ip."<br />
			Sistema realizado por departamento de desarrollo Web y de Software de www.arlisistem.com.ve V-2.1.49
			<a href='https://twitter.com/consumiblesVzla' style='text-decoration: none;'>
			<img src='http://arlisistem.com.ve/img_correo/ecommerce_t_trans.png' style='text-decoration: none; border: 0'>
			</a><a href='https://www.facebook.com/consumiblesvenezuela/'>
			<img src='http://arlisistem.com.ve/img_correo/ecommerce_f_trans.png' style='text-decoration: none; border: 0'>
			</a>
			</a><a href='https://www.instagram.com/consumibles_venezuela/'>
			<img src='http://arlisistem.com.ve/img_correo/ecommerce_i_trans.png' style='text-decoration: none; border: 0'>
			</a>
			</td></tr></table>";
			$headers = 'Content-type: text/html; charset=utf-8' . "\r\n";
			$headers .= "From: $correo\r\n" .

				'Reply-To:'.$correo."\r\n" .
				'X-Mailer: PHP/' . phpversion();
			    $resultado=mail($to, $subject, $message, $headers);
			     if($resultado)
				 echo "<br /><b><span class='blanco'>Correo enviado correctamente</span></b><br />
				 <img src='img/correo.jpg' width='100%'/>";
			     else 
			    $correo2="gerencia@arlisistem.com.ve";
				echo "<br /><b><span class='blanco'>El correo fue enviado correctamente. Puede contactar a trav&eacute;s del nuestro e-mail: info@consumiblesve.com </span></b>";
			//Enviando auto respuesta.
				$pfw_header .= 'Content-type: text/html; charset=utf-8' . "\r\n";
                $pfw_header .= "From: info@consumiblesve.com \r\n" .
				'Reply-To:'.$correo2."\r\n" .
				'X-Mailer: PHP/' . phpversion();
		        $pfw_subject = "Mensaje desde el Modulo de Contacto en la pagina de www.consumiblesve.com de Arturo Bracamonte";	
                $pfw_email_to = "$correo";
                $pfw_message = "<table width='593' border='0'>
                              <tr>
                              <td><img src=\"http://www.consumiblesve.com/img/logotecho.jpg\" width='593' height='170' /></td></tr><tr>                              <td>Muchas Gracias $nombre, por su mensaje: $mensaje el correo con la informacion de contacto ha sido recibido satisfactoriamente. </td></tr><tr>"
                 . "<td>Nos pondremos en contacto con usted lo antes posible en su e-mail: $correo <br />"
                 . " </td></tr><tr><td>"
                 . "--------------------------------------------------------------------------<br />"
				 . "Este correo es enviado de forma Automatica por el sistema.<br />"
				 . "Atte. Departamento de atencion al cliemte, gracias por preferirnos como su proveedor de servicios de Internet<br />"
				 . "www.consumiblesve.com <br /><br />Todos los derechos reservados a Consumibles Venezuela
			       <a href='https://twitter.com/consumiblesVzla' style='text-decoration: none;'>
			       <img src='http://arlisistem.com.ve/img_correo/ecommerce_t_trans.png' style='text-decoration: none; border: 0'>
			       </a><a href='https://www.facebook.com/consumiblesvenezuela/'>
			       <img src='http://arlisistem.com.ve/img_correo/ecommerce_f_trans.png' style='text-decoration: none; border: 0'>
			       </a>
				   <a href='https://www.instagram.com/consumibles_venezuela/'>
			       <img src='http://arlisistem.com.ve/img_correo/ecommerce_i_trans.png' style='text-decoration: none; border: 0'>
			       </a></td></tr></table>";
            @mail($pfw_email_to, $pfw_subject ,$pfw_message ,$pfw_header );
		    # Identificador = 405564075141541
			## Codigo Secreto = FVSQcdrrHCGWUZGpTfyl
			##$SMS = new CentauroSMS('405564075141541', 'FVSQcdrrHCGWUZGpTfyl');
			#$json = '{"id":"0","cel":"'.$telefono.'","nom":"'.$nombre.'"}';
			#$msge = 'Estimado(a) '.$nombre.', Recibimos su correo para mayor información escriba a info@arlisistem.com.ve';
			#$SMS->set_sms_send($json,$msge);
	    }
	   }	
    else{
		?>
        <form name="formularioContacto" action="correo.php" method="post">
        <table width="618" class="formulario">
			<tr><td width="60" class="izquierda Estilo7 Estilo14"><font color="#131212">Nombre:</font><font color="#131212"></td>
        <td width="446">
        <input type="text"  name="nombre" value="<?php echo $nombre;?>" class="form-control required email"  size="38" style="width:100%" />
        <br />
        </td></tr>
        <tr><td class="izquierda Estilo7 Estilo14"><font color="#131212">Correo:</font></td>
        <td>
        <input type="text" value="" name="correo"  class="form-control required email" size="38"/><br />
        </td></tr>
        <tr><td class="izquierda Estilo7 Estilo14"><font color="#131212">Telefono:</font></td>
        <td><div align="left">
        <input type="text" value="" name="telefono" class="form-control required email" size="38"/><br />
        </div></td></tr>
			<tr><td valign="top" class="izquierda Estilo7"><span class="Estilo14"><font color="#131212">Mensaje:</font></span><br /></td>
        <td><div align="left">
        <textarea name="mensaje" rows="5" cols="50" class="input-text" style="width:100%"></textarea><br />
        </div></td></tr>
        <tr><td class="izquierda"></td><td>
        <br />
        <input type="submit" name="enviarCorreo" value="Enviar Correo con su solicitud" class="wpcf7-form-control wpcf7-submit btn btn-primary"/></td></tr>
        </table>
        <div align="left"></div>
        </form>
        <?php
    }
	
?>  
				
		   </div>
		  </div>	
		</div>			
	   </div>
	<hr>
	</div>
	</div>
		

	
	<div class="sub-footer">
		<div class="container">
			<div class="social-icon">
				<div class="col-md-4">
					<ul class="social-network">
						<li><a href="https://www.instagram.com/consumibles_venezuela" class="instagram tool-tip" title="Linkedin" target="_blank">
							<i class="fa fa-instagram"></i>
							</a>
						</li>
						<li><a href="https://www.facebook.com/consumiblesvenezuela/" class="fb tool-tip" title="Facebook"><i class="fa fa-facebook"></i></a></li>
						<li>
							<a href="https://twitter.com/consumiblesVzla" class="twitter tool-tip" title="Twitter">
								<i class="fa fa-twitter"></i>
							</a>
						</li>


						<!--
						<li>
							<a href="#" class="gplus tool-tip" title="Google Plus">
								<i class="fa fa-google-plus"></i>
							</a>
						</li>
						 <li>
							<a href="#" class="ytube tool-tip" title="You Tube"><i class="fa fa-youtube-play">
							</i>
							</a>
						 </li>
                        -->
					</ul>	
				</div>
				
							<i class="fa fa-map-marker fa"></i> TODO TECNOLOGIA, CA.
Ave. Fco de Miranda, Conj Resd Don Bosco, Resd Vilma, Nivel PB, Local TODO Tecnologia. Los Ruices., Pto. Referencia. Estacion METRO Los Cortijos, Salida Calle A,, Final del Pasillo entre Banco EXTERIOR y Panaderia Gran Muro., Caracas 1071, Distrito Federal
				
			</div>
			
			<div class="col-md-7" style="padding-right: 0%">
				<div class="copyright">
										<div style="float: left;"> 
						<i class="fa fa-phone fa"></i> (0412) 9600374<br />
						<i class="fa fa-envelope fa"></i>consumiblesve@gmail.com | info@consumiblesve.com | ventas@consumiblesve.com </div>
					<img src="img/logoinv.png" class="img-responsive" alt="" width="90 px">
					
				</div>
			</div>		
			
		</div>	
			
			
					
	</div>		
<div align="center" style="background-color: lavender; width: 100%; padding: 20px">
	<font color="#000000">
		&copy; 2018 | Todos los derechos reservados a Consumibles Venezuela | Elaborado por <a href="https://arlisistem.com.ve/" target="_blank">Arlisistem</a></font>
</div>

	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.js"></script>		
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>	
	<script src="js/wow.min.js"></script>
	<script>wow = new WOW({}).init();</script>	
    


 <form name="form5" method="post" action="">
   <input name="txtoculto" type="hidden" id="txtoculto">
   <input name="txtseleccion" type="hidden" id="txtseleccion" value="<?php print $seleccion; ?>" />
   </form>

   <form name="form_buscar" method="post" action="">
   <input name="buscar" type="hidden" id="buscar">
   </form>

</body>
 
<script language="JavaScript">
  function cambiar()
   {
    var seleccion=document.idioma.country.selectedIndex;
	// var seleccion=document.getElementById('country');
   // fvalida.articulo.length=0;
    if(seleccion==1) es();
	if(seleccion==2) ing();
   }
</script>

<script languague="javascript">
        function es() {
		var pagina="http://www.supermark.com/index.php";
        location.href=pagina;
        }
        function ing() {
         
		 window.location="http://www.supermark.com/entrar.php";
        }
 </script>
 
<script language="javascript">
function buscar()
{
	   document.buscar_a.action="busqueda.php";
	   document.buscar_a.submit();
}
</script> 


<script language="javascript">
  function buscar_catalogo(c)
  {
	//alert("si esta corriendo");
	document.form_buscar.buscar.value=c;
	document.form_buscar.action="buscador.php";
    document.form_buscar.submit();
	//opener.document.location.reload();
  }
    function aceptar1(c)
  {
    location.href=c;
  }
</script>
<script language="javascript">
  function detalles(c)
  {
	document.form_buscar.buscar.value=c;
	document.form_buscar.action="detalles.php";
    document.form_buscar.submit();
   }
    function aceptar1(c)
   {
    location.href=c;
  }
</script>
<script language="javascript">
  function buscar_noticia(c)
  {
	document.form_buscar.buscar.value=c;
	document.form_buscar.action="noticias.php";
    document.form_buscar.submit();
   }
    function aceptar1(c)
   {
    location.href=c;
  }
</script>


<script> 
function enviar_formulario(){ 
   document.form1.submit();
} 
</script> 

<script language="javascript">
  function retornar(c)
  {
	//alert("si esta corriendo");
	document.form_buscar.buscar.value=form1.tipo_producto2.value;
	document.form_buscar.action="buscador.php";
    document.form_buscar.submit();
	//opener.document.location.reload();
  }
    function aceptar1(c)
  {
    location.href=c;
  }
</script>

  <script language="javascript">
function incluir()
{
	 if (document.contacto.cedula_asc.value=="")
	  {
	    alert("Operacion Cancelada (El Campo Cedula no puede estar Vacio)");
	  }
	   else
	  {
	  if (document.contacto.nombre_asc.value=="")
	  {
		alert("Operacion Cancelada (El Campo Nombre no puede estar Vacio)");
	  }
       else
	{
	 if (document.contacto.email.value=="")
	  {
	   alert("Operacion Cancelada (El Campo e-mail no puede estar Vacio)");
	  }
       else
	  {

 if (document.contacto.aceptar_terminos.checked) { 

	     document.contacto.txtoperacion.value="incluir";
	     document.contacto.action="incluir.php";
	     document.contacto.submit();
		 
		  }else{
 alert("Debes aceptar los términos y condiciones");
 document.contacto.aceptar_terminos.focus();
 return false; 
    }
 
	  }
	}
  }
}
</script>
</html>	