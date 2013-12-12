<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>CV Jesus Luis Vazquez Montañez</title>

		<link type="text/css" rel="stylesheet" href="estilo.css"/>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="engine1/style.css" />
		<script type="text/javascript" src="engine1/jquery.js"></script>

		CONTADOR DE VISITAS</br>
		<a href="http://freehitcountercode.com/">
		<img border="0" src="http://www.freehitcountercode.com/counter.php?b=00ffff&r=000000&f=000000&unique=1&start=0" width="120" height="30" /></a>



<?php 
error_reporting(E_ERROR | E_PARSE);
$errors = "";
$myemail = 'jesus-vazquez291@hotmail.com';//<-----Put Your email address here.
if(empty($_POST['name'])  || 
   empty($_POST['email']) || 
   empty($_POST['message']))
{
    $errors .= "\n Error: all fields are required";
}

$name = $_POST['name']; 
$email_address = $_POST['email']; 
$message = $_POST['message']; 
 //if(isset($_POST['name'])){ $name = $_POST['name']; }

if (!preg_match(
"/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", 
$email_address))
{
    $errors .= "\n Error: Invalid email address";
}

if( empty($errors))
{
	$to = $myemail; 
	$email_subject = "Contact form submission: $name";
	$email_body = "You have received a new message. ".
	" Here are the details:\n Name: $name \n Email: $email_address \n Message \n $message"; 
	
	$headers = "From: $myemail\n"; 
	$headers .= "Reply-To: $email_address";
	
	mail($to,$email_subject,$email_body,$headers);
	header('Location: ComentarioEnviado.html');
	exit;
} 
?>





</head>
<body>

	<div class="titulo">
		CURRICULUM VITAE</br>
		JESUS LUIS VAZQUEZ MONTAÑEZ
	</div>


	<div id="header">
		<tr>
			<td>
				<ul>
			<a href="#Datos">Datos</a> |
			<a href="#Experiencia">Experiencia</a> |
			<a href="#Habilidades">Habilidades</a> |
			<a href="#Educacion">Educacion</a> |
			<a href="#Lenguajes">Lenguajes</a> |
			<a href="#Fotos">Fotos</a> |
			<a href="#Contacto">Contacto</a> 
				</ul>
			</td>
			<td>
				<img src="">
			</td>
		</tr>
	</div>


	<div class="datos">
		<a name="Datos"></a>
			<h4>Datos Personales</h4>
			<table>
				<tr>
					<td>
						<ul>
							<strong> Nombre:</strong>Jesus Luis Vazquez Montañez</br>
							<strong> Fecha de Nacimiento:</strong>29 Agosto 1990</br>
							<strong> Lugar de Nacimiento:</strong>Tijuana, Baja California</br>
							<strong> Direccion:</strong>Rafael Buelna #4064 Fracc. Soler</br> 
							<strong> Codigo Postal:</strong>22105</br>
							<strong> Numero Casa:</strong> 904-10-91</br>
							<strong> Numero Celular:</strong> 664 335-74-80</br>
							<strong> Email:</strong><a href="mailto:jesus-vazquez291@hotmail.com"><id="email">jesus-vazquez291@hotmail.com</a></br>
							<strong> Estado Civil: </strong>Soltero</br>
						</ul>
					</td>
					<td>
						<img border="0" src="../ProyectoFinal/Me.jpg" width="120" height="140" >
					</td>	
				</tr>
			</table>
	</div>


	<hr width=100>
	<div class="experiencia">
		<a name="Experiencia"></a>
				<h4>Experiencia</h4>
				<ul>
				<li>Servicio Social: Fundacion Castro-Limon</li>
				<li>AutoServicio Aries</li>
				<li>Club Regina Vacation Club</li>
				<li>Practicas Profesionales: AutoServicio Aries</li>
				</ul>
	</div>


	<hr width=100>
	<div class="habilidades">
		<a name="Habilidades"></a>
			<h4>Habilidades</h4>
			<table>
				<tr>
					<td>
						<ul>
							<li>Creacion de Paginas Web</li>
							<li>Desarrollo de Bases de datos</li>
							<li>Creacion de programas personalizados</li>
							<li>Reparacion de equipos de computo</li>			
						</ul>
					</td>
					<td>
						<p><strong>Actividades de oficina:</strong></p>
							<ul>
								<li>Soporte Tecnico via Remote desktop</li>
								<li>Uso de Computadora</li>
								<li>Mantenimiento de Redes</li>
								<li>Mantenimiento de Software</li>
								<li>Uso de Copiadora</li> 
							</ul>
					</td>
					<td>		
						<p><strong>Administradores de Base de Datos</strong></p>
							<ul>
								<li>Managment Studio</li>
								<li>MySQL</li>
							</ul>
					</td>
				</tr>
					
					<td>
						<p><strong>Lenguajes:</strong></p>
							<ul>
								<li>C#</li>
								<li>Java</li>
								<li>C</li>
								<li>Objective C</li>
								<li>Android</li>
								<li>JavaScirpt</li>
								<li>PHP</li>
								<li>Visual Basic</li>
							</ul>
					</td>
					<td>
						<p><strong>Frameworks:</strong></p>
						<ul>
								<li>.NET</li>
								<li>Play</li>
					</td>
				</tr>
			</table>
	</div>



	<hr width=100>
	<div class="educacion">
		<a name="Educacion"></a>
			<h4>Educacion</h4>
				<li><strong>Primaria</strong></br>
					<ul>
						<li>Colegio CADI (1996 - 1998)</li>
    					<li>Colegio Abraham Castellanos (1998 - 2002)</li>
					</ul>
				</li>
				<li><strong>Secundaria</strong></br>
					<ul>
						<li>Instituto Cuauhtlatohuac (2002 - 2005)</li>
					</ul>
				</li>
				<li><strong>Preparatoria</strong></br>
					<ul>
						<li>Colegio Juan de dios Fernández  (2005 - 2007)</li>
						<li>Colegio CADI (2007 - 2008)</li>
					</ul>
				</li>
				<li><strong>Universidad</strong></br>
					<ul>
						<li>CESUN Universidad, Ingeniería en Desarrollo de Software (2010 – a la fecha)</li>
					</ul>
				</li>
	</div>



	<hr width=100>
	<div class="lenguajes">
		<a name="Lenguajes"></a>
			<h4>Lenguajes Hablados</h4>
				<ul>
					<li>Español (Nativo)</li>
					<li>Ingles 75% (Hablado/Escrito)</li>
					<li>Japones 20 % </li>
				</ul>
	</div>



	<hr width=100>
	<div class="fotos">
		<a name="Fotos"></a>
			<h4>Fotos</h4>		
			<div id="wowslider-container1">
				<div class="ws_images">
					<ul>							
						<li><img src="data1/images/f2.jpg" alt="f2" title="f2" id="wows1_2"/></li>
						<li><img src="data1/images/f3.jpg" alt="f3" title="f3" id="wows1_3"/></li>
						<li><img src="data1/images/f4.jpg" alt="f4" title="f4" id="wows1_4"/></li>
					</ul>
				</div>
					<div class="ws_bullets">
						<div>	
						<a href="#" title="f2"><img src="data1/tooltips/f2.jpg" alt="f2"/>2</a>
						<a href="#" title="f3"><img src="data1/tooltips/f3.jpg" alt="f3"/>3</a>
						<a href="#" title="f4"><img src="data1/tooltips/f4.jpg" alt="f4"/>4</a>
						</div>
					</div>
						<span class="wsl"><a href="http://wowslider.com">jQuery Gallery</a> by WOWSlider.com v4.8m</span>
					
			</div>
					<script type="text/javascript" src="engine1/wowslider.js"></script>
					<script type="text/javascript" src="engine1/script.js"></script>
	</div>



	<hr width=100>
	<div class="contacto">
		<a name="Contacto"></a>
			<h4>Contacto</h4>
				<ul>


	<?php
$action=$_REQUEST['value'];  

if (!$action=="action")    /* display the contact form */
    {
    ?>
    <form  action="index.php" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="action" value="submit">
    Nombre:</br>
    <input name="name" type="text" value="" size="30"/></br>
    Email:</br>
    <input name="email" type="text" value="" size="30"/></br>
    Comentario:</br>
    <textarea name="message" rows="7" cols="30"></textarea></br>
    <input type="submit" value="Enviar"/>
    </form>


    <?php
    } 
else                /* send the submitted data */
    {
    $name=$_REQUEST['name'];
    $email=$_REQUEST['email'];
    $message=$_REQUEST['message'];
    if (($name=='name')||($email=='email')||($message=='message'))
        {
        echo "All fields are required, please fill <a href=\"\">the form</a> again.";
        }
    
    }  
?>
						
				</ul>	
	</div>		
		
	</div>


	<div id="footer">
		&copy;  Jesus Luis Vazquez 
	</div>


</body>
</html>