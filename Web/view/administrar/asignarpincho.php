<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8"/>
	<title>Dashboard I Admin Panel</title>

	<link rel="stylesheet" href="../../css/layout.css" type="text/css" media="screen" />
	<!--[if lt IE 9]>
	<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen" />
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<script src="../../js/jquery-1.5.2.min.js" type="text/javascript"></script>
	<script src="../../js/hideshow.js" type="text/javascript"></script>
	<script src="../../js/jquery.tablesorter.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="../../js/jquery.equalHeight.js"></script>
	<script type="text/javascript">

	$(document).ready(function()
    	{
      	  $(".tablesorter").tablesorter();
   	 }
	);
	$(document).ready(function() {

	//When page loads...
	$(".tab_content").hide(); //Hide all content
	$("ul.tabs li:first").addClass("active").show(); //Activate first tab
	$(".tab_content:first").show(); //Show first tab content

	//On Click Event
	$("ul.tabs li").click(function() {

		$("ul.tabs li").removeClass("active"); //Remove any "active" class
		$(this).addClass("active"); //Add "active" class to selected tab
		$(".tab_content").hide(); //Hide all tab content

		var activeTab = $(this).find("a").attr("href"); //Find the href attribute value to identify the active tab + content
		$(activeTab).fadeIn(); //Fade in the active ID content
		return false;
	});

});
    </script>
    <script type="text/javascript">
    $(function(){
        $('.column').equalHeight();
    });
</script>

</head>


<body>
	<?php
	require_once '../../controller/prueba.php';
	session_start();
	if(isset($_SESSION["name"])){
		$user=$_SESSION["name"];
		if(comprobar($user,'1')!=true){
			session_destroy();
			header('Location: ../../index.php');
		}
	}
	?>
	<header id="header">
		<hgroup>
			<h1 class="site_title">Website Admin</a></h1>
			<h2 class="section_title">Dashboard</h2><div class="btn_view_site"><a href="../../controller/controlSesiones.php">Volver</a></div>
		</hgroup>
	</header> <!-- end of header bar -->

	<section id="secondary_bar">
		<div class="user">

			<!-- <a class="logout_user" href="#" title="Logout">Logout</a> -->
		</div>
		<div class="breadcrumbs_container">
			<article class="breadcrumbs"><div class="breadcrumb_divider"></div> <a class="current">Dashboard</a></article>
		</div>
	</section><!-- end of secondary bar -->

	<aside id="sidebar" class="column" style="height: 1700px;">
		<form class="quick_search">
			<input type="text" value="Quick Search" onfocus="if(!this._haschanged){this.value=''};this._haschanged=true;">
		</form>
		<hr/>
		<h3>Pinchos</h3>
		<ul class="toggle">
			<li class="icn_new_article"><a href="listarpincho.php">Listar Pincho</a></li>
			<li class="icn_categories"><a href="validarpincho.php">Validar Pinchos</a></li>
			<li class="icn_tags"><a href="asignarpincho.php">Asignar Pinchos Jurado Profesional</a></li>
		</ul>
		<h3>Usuarios</h3>
		<ul class="toggle">
			<li class="icn_profile"><a href="listarusuarios.php">Listar Usuarios</a></li>
		</ul>
		<h3>Establecimientos</h3>
		<ul class="toggle">
			<li class="icn_folder"><a href="listarestablecimientos.php">Listar Establecimiento</a></li>
		</ul>
		<h3>Noticias</h3>
		<ul class="toggle">
			<li class="icn_settings"><a href="listarnoticias.php">Listar Noticias</a></li>
		</ul>
		<h3>Comentarios</h3>
		<ul class="toggle">
			<li class="icn_settings"><a href="listarcomentarios.php">Listar Comentarios</a></li>
		</ul>

		<footer>
			<hr />
			<p><strong>Copyright &copy; 2011 Website Admin</strong></p>
			<p>Theme by <a href="http://www.medialoot.com">MediaLoot</a></p>
		</footer>
	</aside><!-- end of sidebar -->

	<section id="main" class="column">

		<article class="module width_full">
			<header><h3>Asignar Pincho</h3></header>
				<div class="module_content">

<form name="jppin" action="../../controller/asignarpinchoControl.php" method="POST" >

<?php
/*Conexion a la bd*/
require_once '../../functions/BDconectar.php';
ConectarBD();

$consulta_mysql='select TablaUsuarios_login from juradoprofesional';
$resultado_consulta_mysql=mysql_query($consulta_mysql);

$consulta_mysql_pin='select idPincho,nombrePIN from pincho';
$resultado_consulta_mysql_pin=mysql_query($consulta_mysql_pin);

?>

<select name='JP'>
<?php
while($fila=mysql_fetch_array($resultado_consulta_mysql)){
?>
		<option value=" <?php echo $fila['TablaUsuarios_login'] ?> " >
		<?php echo $fila['TablaUsuarios_login']; ?>
		</option>
		<?php
}
?>

</select>
<select name='PIN'>
	<?php
	while($fila2=mysql_fetch_array($resultado_consulta_mysql_pin)){
	?>
			<option value=" <?php echo $fila2['idPincho'] ?> " >
			<?php echo $fila2['nombrePIN']; ?>
			</option>
			<?php
	}
	?>
</select>
<input type="submit" value="Asignar">

					</form>

				</div>
		</article><!-- end of styles article -->
	</section>


</body>

</html>
