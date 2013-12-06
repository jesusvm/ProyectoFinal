<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>CV Jesus Luis Vazquez Montañez</title>
		<link type="text/css" rel="stylesheet" href="stylesheet.css"/>
			<meta http-equiv="content-type" content="text/html; charset=utf-8" />
			<meta name="keywords" content="WOW Slider, Slideshow jQuery, Wordpress Gallery" />
			<meta name="description" content="WOWSlider created with WOW Slider, a free wizard program that helps you easily generate beautiful web slideshow" />
	<!-- Start WOWSlider.com HEAD section -->
		<link rel="stylesheet" type="text/css" href="engine1/style.css" />
			<script type="text/javascript" src="engine1/jquery.js"></script>

	<!-- End WOWSlider.com HEAD section -->
<?php 
error_reporting(E_ERROR | E_PARSE);
$errors = "";
$myemail = 'evilkanival55@hotmail.com';//<-----Put Your email address here.
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
	//redirect to the 'thank you' page
	header('Location: contact-form-thank-you.html');
} 
?>

</head>
<body style="background-color:#d7d7d7">
	<div id="header">
		<p id="name">Jesus Luis Vazquez Montañez </p>
		
	</div>
		<div class="left">
			 <a href="#Nombre">Nombre</a></br> 
			 <a href="#Experiencia">Experiencia</a> </br>
			 <a href="#Habilidades">Habilidades</a> </br>
			 <a href="#Educacion">Educacion</a></br>
			 <a href="#Lenguajes">Lenguajes</a></br> 
			 <a href="#Fotos">Fotos</a></br> 
			 <a href="#Contacto">Contacto</a></br>
		</div>
		<div class="right">
			<a name="Nombre"></a>
				<h3>Nombre</H3>
					<H4>Jesus Luis Vazquez Montañez</H4>
						<ul>
							<strong> Fecha de Nacimiento:</strong>29 Agosto 1990</br>
							<strong> Lugar de Nacimiento:</strong>Tijuana, Baja California</br>
							<strong> Direccion:</strong>Rafael Buelna #4064 Fracc. Soler</br> 
							<strong> Codigo Postal:</strong>22105</br>
							<strong> Numero Casa:</strong> (664) 904-10-91</br>
							<strong> Numero Celular:</strong> 664 335-74-80</br>
							<strong> Email:</strong><a href="mailto:jesus-vazquez291@hotmail.com"><id="email">evilkanival55@hotmail.com</a></br>
							<strong> Estado Civil: </strong>Soltero</br>
						</ul>
		
			<a name="Experiencia"></a>
				<h4>Experiencia</h4>
					<ul>
						<li><strong>Border Assembly</strong></br>
							Project Coordinator
							<ul>
								<li>Logistics Cordination</li>	
								<li>Work Order Entry</li> 
								<li>Coordination for Account Receivables</li>
								<li>Implementation of New Tecnologies</li>
							</ul>
				</ul>	
		<hr>
			<a name="Habilidades"></a>
				<h4>Habilidades</h4>
					<p><strong>Lenguajes:</strong> C#, Java, CSS, Android</p>
					<p><strong>Frameworks:</strong> .NET, Play</p>
					<p><strong>Actividades de oficina:</strong>
						<ul>
							<li>Soporte Tecnico via Remote desktop</li>
							<li>Uso de Computadora</li>
							<li>Mantenimiento de Redes</li>
							<li>Mantenimiento de Software</li>
							<li>Uso de Copiadora</li> 
						</ul>
		<hr>
			<a name="Educacion"></a>
				<h4>Educacion</h4>
					<li><strong>Primaria</strong></br>
						
						<ul>
							<li>Colegio CADI (1996 - 1998)</br>
    							Colegio Abraham Castellanos (1998 - 2002)
 							</li>
						</ul>
					</li>
					
					<li><strong>Secundaria</strong></br>
						<ul>
						Instituto Cuauhtlatohuac (2002 - 2005)
					</ul>
					</li>

					<li><strong>Preparatoria</strong></br>
						<ul>
							<li>Colegio Juan de dios Fernández  (2005 - 2007)</br>
							Colegio CADI (2007 - 2008)</li>
						</ul>
					</li>
					<li><strong>Universidad</strong></br>
						<ul>
							<li>CESUN Universidad, Ingeniería en Desarrollo de Software (2010 – a la fecha)</li>
						</ul>
					</li>

		<hr>
			<a name="Lenguajes"></a>
				<h4>Lenguajes</h4>
					<ul>
						<li>Español (Nativo)</li>
						<li>Ingles 75% (Hablado/Escrito)</li>
					</ul>
		<hr>
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
					<div class="ws_shadow">
					</div>
				</div>
					<script type="text/javascript" src="engine1/wowslider.js"></script>
					<script type="text/javascript" src="engine1/script.js"></script>
		<hr>
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
    else{        
        $from="From: $name<$email>\r\nReturn-path: $email";
        $subject="Message sent using your contact form";
        mail("evilkanival55@hotmail.com", $subject, $message, $from);
        echo "Email sent!";
        }
    }  
?>
						
					</ul>			
		</div>
		</div>
		<div id="footer">
			&copy; | Jesus Luis Vazquez | Tel: (664) 335-74-80
		</div>
	</body>
</html>