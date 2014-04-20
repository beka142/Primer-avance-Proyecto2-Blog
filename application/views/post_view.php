<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="/~Betzy/Proyecto2ProWeb/CodeIgniter/style/index.css">
	<title>Welcome to my blog</title>

	
</head>
<body id="header">
	<button id="User">
		<a href="http://localhost/~Betzy/Proyecto2ProWeb/CodeIgniter/"> 
			Inicio
		</a> 
	</button >

<div id="container" style="height: 800px;">
	<h1 class="title">Welcome to <?php echo $blog_name; ?></h1>
	<div id="bodyComment" >
			
		<h1 id="titlePost"><?php echo $entries->title?></h1>
		<p id="contentPost"><?php echo $entries->content?> <p/> 
			
		<div>
			<?php foreach ($comments as $key => $comment) : ?>
				<div id="body">
				<h2 id="contentComment"><?php echo $comment['autor'] ?></h2>	
				<p id="contentComment">
					<?php echo $comment['body'] ?> 
				</p>
				</div>
			<?php endforeach; ?>
		</div>

		<FORM action="http://localhost/~Betzy/Proyecto2ProWeb/CodeIgniter/index.php/comments_controller/index/<?php echo $id['id'] ?>" method="POST" name="post">
			<br/><br/>
			<h1 class="colorwhite">Agregar comentario</h1>
			
			<div class="centerTable">
				<TABLE class="tabletest">
					<tr>
						<TD class="bordertest">
							Autor:
							<input type="text" name="autor">
							<br/><br/>
						</TD>
					</tr>
					<tr>
						<TD class="bordertest">
							Comentario:
							<textarea type="textarea" name="comentario" rows="10" cols="50"></textarea>
							<br/><br/>
						</TD>
					</tr>
				</TABLE>
			</div>

			<div>
				<br/><br/>
				<td>
					<input type="reset" name="reset" value="Limpiar" />
					<INPUT NAME='boton' TYPE='SUBMIT' VALUE='Comentar'>
				</td>
			</div>

		</FORM>
	</div>

	<div style="float: right; border:1px solid #A4A4A4; width: 200px; height: 500px; ">
		<div>
			<div>
			<h1><?php echo $user->nombre?></h1>
			
			</div>
			<div>
				<img id="Image1_img" src="/~Betzy/Proyecto2ProWeb/CodeIgniter/me.jpg">
			</div>
			<div id="Info">
				<p><?php echo $user->carrera?></p>
				<p><?php echo $user->direccion?></p>
				<p><?php echo $user->correo?></p>
				<button>
					<a href="https://www.facebook.com/betzykarina.chiroldesleon" target ="_blank"> 
						<img src="/~Betzy/Proyecto2ProWeb/CodeIgniter/f.png">
					</a> 
				</button >
				
			</div>
		</div>	
	</div>
</div>

</body>
</html