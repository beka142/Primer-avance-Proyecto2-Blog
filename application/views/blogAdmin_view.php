<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="/~Betzy/Proyecto2ProWeb/CodeIgniter/style/index.css">
	<title>My Blog</title>

	
</head>
<body id="header">
	<button id="Atras">
		<a href="http://localhost/~Betzy/Proyecto2ProWeb/CodeIgniter/index.php/admin_controller/index/"> 
			Atrás
		</a> 
	</button >

<div id="container" style="height: 550px;">
	<h1 class="title"><?php echo $blog_name; ?></h1>
	<div>

		<FORM action="http://localhost/~Betzy/Proyecto2ProWeb/CodeIgniter/index.php/blog_controller/updateData/<?php echo $blog->id?>" method="POST" name="post">
			<br/><br/>
			
			<div class="centerTable">
				<TABLE class="tabletest">
					<tr>
						<TD class="bordertest">
							Nombre:
							<input class="largo" type="text" name="nombre" value="<?php echo $blog->nombre?>">
							<br/><br/>
						</TD>
					</tr>
					<tr>
						<TD class="bordertest">
							Detalle:
							<input class="extend" type="text" name="detalle" value="<?php echo $blog->detalle?>">
							<br/><br/>
						</TD>
					</tr>
				</TABLE>
			</div>

			<div>
				<br/><br/>
				<td>
					<INPUT NAME='boton' TYPE='SUBMIT' VALUE='Actualizar'>
				</td>
			</div>

		</FORM>
	</div>
</div>

</body>
</html