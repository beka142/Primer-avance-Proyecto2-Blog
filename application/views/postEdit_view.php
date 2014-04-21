<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="/~Betzy/Proyecto2ProWeb/CodeIgniter/style/index.css">
	<title>Editar post</title>

	
</head>
<body id="header">
	<button id="Atras">
		<a href="http://localhost/~Betzy/Proyecto2ProWeb/CodeIgniter/index.php/admin_controller/goPostEdit/"> 
			Atrás
		</a> 
	</button>

<div id="container" style="height: 800px;">
	<h1 class="title"><?php echo $blog_name; ?></h1>
	<div>
			
		<FORM action="http://localhost/~Betzy/Proyecto2ProWeb/CodeIgniter/index.php/admin_controller/updatePost/<?php echo $entries->id?>" method="POST" name="post">
			<br/><br/>
			
			<div class="centerTable">
				<TABLE class="tabletest">
					<tr>
						<TD class="bordertest">
							Título:
							<input type="text" class="extend" name="title" value="<?php echo $entries->title?>">
							<br/><br/>
						</TD>
					</tr>
					<tr>
						<TD class="bordertest">
							Contenido:
							<input type="text" class="extend" name="content" value="<?php echo $entries->content?>">
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