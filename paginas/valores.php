<?php
include_once 'crud.php';
?>
<!DOCTYPE html>
<html>

<head>
<link href='http://fonts.googleapis.com/css?family=Arvo:400,700|Pacifico|Playball|Pinyon+Script' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="../estilos/despliegue.css">
 <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
   <title>CRUD CON PHP</title>
   <link rel="stylesheet" href="style.css" type="text/css" />

</head>

<body>
<div id="contenedor">
<header>
	<figure>
  	<img src="../imagenes/logonormal.gif" alt="Logo normal JDRH" style="float:right;width:100px;height:100px">
  	<img id="panoramica" src="../imagenes/normalp.jpg" alt="Fachada normal JDRH" style="float:left;width:440px;height:100px">
	</figure>

	<h2>Escuela Normal</h2>
	<h2> "Juan de Dios Rodriguez Heredia"</h2>
</header>

<nav>
 <ul id="menu">
    <li> <a href="../index.html">Pagina principal</a></li>  
 </ul>
</nav>

<div id="form">
	<form method="post">
	<table width="80%" border="0" cellpadding="15">
	   <tr>
	      <td><input type="text" name="fn" placeholder="First Name"
	       value="<?php if(isset($_GET['edit'])) echo $getROW['fn'];  ?>" />
	      </td>
	   </tr>
	   <tr>
	      <td><input type="text" name="ln" placeholder="Last Name"
	       value="<?php if(isset($_GET['edit'])) echo $getROW['ln'];  ?>" />
	      </td>
	   </tr>
	   <tr>
	      <td>
		    <?php
		     if(isset($_GET['edit']))
		      {
		    ?>
	        <button type="submit" name="update">update</button>
			 <?php
			}
			else
			{
			 ?>
			 <button type="submit" name="save">save</button>
			 <?php
			}
			?>
	      </td>
	    </tr>
	</table>
	</form>

	<br /><br />

	<table id="datos" width="100%" border="1" cellpadding="15" align="center">
		<?php
		$res = $MySQLiconn->query("SELECT * FROM data");
		while($row=$res->fetch_array())
		{
		 ?>
		    <tr>
		    <td><?php echo $row['id']; ?></td>
		    <td><?php echo $row['fn']; ?></td>
		    <td><?php echo $row['ln']; ?></td>
		    <td><a href="?edit=<?php echo $row['id']; ?>" onclick="return confirm('sure to edit !'); ">edit</a></td>
		    <td><a href="?del=<?php echo $row['id']; ?>" onclick="return confirm('sure to delete !'); ">delete</a></td>
		    </tr>
		    <?php
		}
		?>
	</table>
</div>

</p>
</section>

<footer>
Copyright © W3Schools.com
</footer>
</div>
</body>
</html>