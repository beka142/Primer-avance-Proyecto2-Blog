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

		<FORM action="http://localhost/~Betzy/Proyecto2ProWeb/CodeIgniter/index.php/admin_controller/updateData/" method="POST" name="post">
			<br/><br/>
			
			<div class="centerTable">
				<TABLE class="tabletest">
					<tr>
						<TD class="bordertest">
							Cedula:
							<input type="text" name="cedula" value="<?php echo $user->cedula?>">
							<br/><br/>
						</TD>
					</tr>
					<tr>
						<TD class="bordertest">
							Nombre:
							<input type="text" name="nombre" value="<?php echo $user->nombre?>">
							<br/><br/>
						</TD>
					</tr>
					<tr>
						<TD class="bordertest">
							Alias:
							<input type="text" name="alias" value="<?php echo $user->alias?>">
							<br/><br/>
						</TD>
					</tr>
					<tr>
						<TD class="bordertest">
							Contraseña:
							<input type="password" name="contrasena" value="<?php echo $user->contraseña?>">
							<br/><br/>
						</TD>
					</tr>
					<tr>
						<TD class="bordertest">
							Carrera:
							<input class="largo" type="text" name="carrera" value="<?php echo $user->carrera?>">
							<br/><br/>
						</TD>
					</tr>
					<tr>
						<TD class="bordertest">
							Dirección:
							<input class="largo" type="text" name="direccion" value="<?php echo $user->direccion?>">
							<br/><br/>
						</TD>
					</tr>
					<tr>
						<TD class="bordertest">
							Correo:
							<input class="largo" type="text" name="correo" value="<?php echo $user->correo?>">
							<br/><br/>
						</TD>
					</tr>
					<tr>
						<TD class="bordertest">
							Red Social:
							<input class="largo" type="text" name="redSocial" value="<?php echo $user->red_social?>">
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