<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="/~Betzy/Proyecto2ProWeb/CodeIgniter/style/index.css">
	<title>My blog</title>

	
</head>
<body id="header">
	<button id="Atras">
		<a href="http://localhost/~Betzy/Proyecto2ProWeb/CodeIgniter/index.php/admin_controller/index/"> 
			Atrás
		</a> 
	</button >

<div id="container">
	<h1 class="title"><?php echo $blog_name; ?></h1>
	<div>
			
		<div>
			<?php foreach ($comments as $key => $comment) : ?>
				<div id="body">
					<h2 id="contentComment"><?php echo $comment['autor'] ?></h2>	
					<p id="contentComment">
						<?php echo $comment['body'] ?> 
					</p>
					<FORM style="float: right;" action="http://localhost/~Betzy/Proyecto2ProWeb/CodeIgniter/index.php/comments_controller/activate/<?php echo $comment['id']?>" method="POST" name="post">
						<?php if($comment['estado'] == 'Activado'){
							echo "<INPUT NAME='boton' TYPE='SUBMIT' VALUE='Desactivar'>";
						}
						else{
							echo "<INPUT NAME='boton' TYPE='SUBMIT' VALUE='Activar'>";
						}

						?>
						
					</FORM>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>

</body>
</html