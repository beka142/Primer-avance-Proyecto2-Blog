<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="/~Betzy/Proyecto2ProWeb/CodeIgniter/style/index.css">
	<title>Eliminar Posts</title>

	
</head>
<body id="header">
	<button id="Atras">
		<a href="http://localhost/~Betzy/Proyecto2ProWeb/CodeIgniter/index.php/admin_controller/goGestionPosts/"> 
			Atrás
		</a> 
	</button >

<div id="container" style="height: 800px;">
	<h1 class="title"><?php echo $blog_name; ?></h1>
	<div>
			
		<div>
			<?php foreach ($entries as $key => $entry) : ?>
				<div id="body">
					<h2><a id="titlePost"><?php echo $entry['title'] ?></a></h2>	
					<p id="contentPost">
						<?php echo $entry['content']?> 
						<h2> <?php echo $entry['create_date']?> </h2>
					</p>
					
					<FORM style="float: right;" action="" method="POST" name="post">
						<INPUT NAME='boton' TYPE='SUBMIT' VALUE='Eliminar'>
					</FORM>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>

</body>
</html