<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html;" />
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1, maximum-scale=1, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="author" content="Grupo:301127_32" />
<title>Actualizado los Datos</title>
<link rel="icon" type="image/png" href="media/one.png" />

<link rel="stylesheet" href="css/formulario2.css" type="text/css"/>
<link rel="stylesheet" href="css/fonts/style.css" type="text/css"/>
	
<script src="js/jquery-latest.js"></script>

<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css" />
<script src="js/bootstrap.min.js"></script> 
<script src="js/2c36e9b7b1.js"></script>
		
</head>

<body>
<div class=" ir-arriba icon-chevron-small-up rounded-circle border border-danger"></div>
	<div class="contenedor">
	<div class="solluna">
	<button class="switch" id="switch">
					<span><i class="fas fa-sun"></i></span>
					<span><i class="fas fa-moon"></i></span>
		</button></div></div>
  <header style="background-color: transparent" >

	<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">


  <!--<a class="navbar-brand" href="#">Navbar</a>-->
		<img src="media/one.png" width="60" height="60" class="rounded-circle">&nbsp;&nbsp;&nbsp;

   <button class="navbar-toggler">

	<a href="#" class="icon-facebook"></a>
  </button>
<button class="navbar-toggler" >

	<a href="#" class="icon-twitter"></a>
  </button>
<button class="navbar-toggler" >

<a href="#" class="icon-google-with-circle"></a>
  </button>
<button class="navbar-toggler">

<a href="#" class="icon-pinterest"></a>
  </button>
<button class="navbar-toggler">

<a href="#" class="icon-instagram"></a>
  </button>

<button class="navbar-toggler">

<a href="#" class="icon-youtube-with-circle"></a>
  </button>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>

  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
		<li class="nav-item active">
        <a  class="nav-link"  href="index.html"><b><span class="icon-home hh"></span></b></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         <b> Adminitrador</b>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
         <a class="dropdown-item" href="crearbasededatos.php"><b>Crear Base de datos</b></a>
          <a class="dropdown-item" href="creartabla.php"><b>Crear Tabla</b></a>
          <a class="dropdown-item" href="pdf.php"><b>Generar reporte PDF</b></a>
		  <a class="dropdown-item" href="backup.php"><b>Generar Backup</b></a>
        </div>
      </li>
		<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         <b> Inventario</b>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="formulario1.html"><b>Usuario ingresar un producto</b></a>
               <a class="dropdown-item" href="formulario2.html"><b>Usuario actualizar un producto</b></a>
			    
          <a class="dropdown-item" href="formulario3.html"><b>Usuario eliminar un producto</b></a>
		  <a class="dropdown-item" href="formulario4.html"><b>Usuario consultar un producto</b></a>
        </div>
      </li>



      <li class="nav-item">
        <a class="nav-link" href="utilidades.html"><b>Utilidades</b></a>
      </li>

    </ul>
  </div>
</nav>

   </header>

	<br><br><br><br>



	<div class="container">


  <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="1000">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="media/apple-pen-on-macbook-concept-1200x630-c-ar1.91.jpg" alt="Los Angeles" width="1366" height="7680" class="img-thumbnail" />
    </div>
    <div class="carousel-item">
      <img src="media/XSTNQA7FMBGMHJT5BDADJSLOQY.jpg" alt="Chicago" width="1366" height="768" class="img-thumbnail" />
    </div>
    <div class="carousel-item">
      <img src="media/01_epson_expression_photo_thumb800.jpg" alt="New York" width="1366" height="768" class="img-thumbnail" />
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#myCarousel" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

</div>
<br><br>
	<center style="font-size: 38px;">
<?php
$servername = "localhost";
$username = "root";
$password = "12345678";
$dbname = "BDUNAD301127_30";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$codigo = $_POST['codigo'];


$sql = "SELECT Codigo, Nombre_Producto, Marca_Producto, Precio_Compra, Cantidad_Compra FROM tabla301127_30 WHERE Codigo=$codigo";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {


?> 

<div class="container">
  <h2><b>Actualizar datos</b></h2>


  <form class="form-horizontal" action="actualize2.php" role="form" method="POST">
 

    <div class="input">
    <center> <label style="font-size: 30px;"><b>Codigo:</b></label>
      <input type="text" class="form-control" value="<?php echo $row['Codigo'] ?>"  name="codigo" placeholder="Ingrese el codigo a actualizar" readonly style="width:100%; max-width:900px; padding: 20px 20px; 20px;"></center>
    </div>

    <div class="input">
     <center> <label style="font-size:30px;"><b>Nombre Producto:</b></label>
      <input type="text" class="form-control" value="<?php echo $row['Nombre_Producto'] ?>" name="NProducto" placeholder="Ingrese la nuevo nombre producto" style="width:100%; max-width:900px; padding: 20px 20px; 20px;"></center>
    </div>

    <div class="input">
      <center><label style="font-size: 30px;"><b>Marca Compra:</b></label>
      <input type="text" class="form-control"value="<?php echo $row['Marca_Producto'] ?>" name="MProdcuto" placeholder="Ingrese la nueva marca producto" style="width:100%; max-width:900px; padding: 20px 20px; 20px;"></center>
    </div>

    <div class="input">
      <center><label style="font-size:30px;"><b>Precio compra:</b></label>
      <input type="text" class="form-control" value="<?php echo $row['Precio_Compra'] ?>" name="PCompra" placeholder="Ingrese el nuevo valor de precio de compra" style="width:100%; max-width:900px; padding: 20px 20px; 20px;"></center>
    </div>

   <div class="input">
      <center><label style="font-size:30px;"><b>Cantidad Compra:</b></label>
      <input type="text" class="form-control" value="<?php echo $row['Cantidad_Compra'] ?>" name="CCompra" placeholder="Ingrese el nuevo valor de cantidad compra" style="width:100%; max-width:900px; padding: 20px 20px; 20px;"></center>
    </div>
 
  <br>
   <center> <button type="submit" name="submit" class="btn btn-default" style="width:100%; max-width:900px; padding: 20px 20px; 20px;"><b>Actualizar datos</b></button></center>
	 
  </form>
 <br>
</div>


<?php    

    }


} else {
    echo "<b>Ese Codigo no existe</b>";
}

mysqli_close($conn);
?> 
</center>
	<br><br>
<footer>
	<div class="container-fluid" style=" border-top: black 2px solid; border-radius: 15px 15px 0px 0px; box-shadow: -2px -2px 2px 2px #000000; background-color: #FBFBF4; background: -webkit-linear-gradient(#c5ecfc,#d8f7f9);">

		<div class="row">
			<div class="col-xs-12 col-sm-12  col-md-4 col-lg-4 col-xl-4 ">
			<p  clss="pin"> <b><center>Que hacemos?<br/>

				Desarrollo web
				<br/>
				Desarrollo movil
				<br/>
				Venta de tecnologia</center></b></p>
			</div>


			<div class="col-xs-12 col-sm-12  col-md-4 col-lg-4 col-xl-4 ">
				<p  clss="pin"> <b><center>Copyright <sapn class="icon-creative-commons"> </sapn> Computer Store. All rights reserved.</center></b>
				<a href="index.html" class="icon-home"></a></p>
			</div>

			<div class="col-xs-12 col-sm-12  col-md-4 col-lg-4 col-xl-4 ">

			<p  clss="pin"> <b><center>Contactenos<br/>
				<span class="icon-mail"></span>&nbsp; Al corero: computerstore@store.com.co</center></b></p>
			</div>

</div>
	</div>

	</footer>

	<div class="d-none d-lg-block">
	<div class="social">
		<ul>
			<li><a href="#" target="_blank" class="icon-facebook"  style=" border-radius: 10px 0px 0px 0px;"></a></li>
			<li><a href="#" target="_blank" class="icon-twitter"></a></li>
			<li><a href="#" target="_blank" class="icon-google-with-circle"></a></li>
			<li><a href="#" target="_blank" class="icon-pinterest"></a></li>
			<li><a href="#" class="icon-instagram-with-circle"></a></li>
			<li><a href="#" class="icon-youtube-with-circle"  style=" border-radius: 0px 0px 0px 10px;"></a></li>
		</ul>
	</div></div>
	<script src="js/main.js"></script>	
	
<script> $(document).ready(function(){
 
	$('.ir-arriba').click(function(){
		$('body, html').animate({
			scrollTop: '0px'
		}, 300);
	});
 
	$(window).scroll(function(){
		if( $(this).scrollTop() > 0 ){
			$('.ir-arriba').slideDown(200);
		} else {
			$('.ir-arriba').slideUp(200);
		}
	});
 
}); </script>

</body>
</html>

