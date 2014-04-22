<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="/~Betzy/Proyecto2ProWeb/CodeIgniter/style/index.css">
	<title>Editar blog</title>

	
</head>
<body id="header">
	<button id="Atras">
		<a href="http://localhost/~Betzy/Proyecto2ProWeb/CodeIgniter/index.php/admin_controller/goGestionPosts/"> 
			Atrás
		</a> 
	</button >
	<div id="container">
		<h1 class="title"><?php echo $blog_name; ?></h1>
		<div>
			<?php foreach ($entries as $key => $entry) : ?>
				<div id="body">
				<h2><a id="titlePost" href="http://localhost/~Betzy/Proyecto2ProWeb/CodeIgniter/index.php/post_controller/edit/<?php echo $entry['id'] ?>"><?php echo $entry['title'] ?></a></h2>	
				<p id="contentPost">
					<?php echo $entry['content'] ?> 
				</p>
				<h2 id="date"> <?php echo $entry['create_date']?> </h2>

				</div>
			<?php endforeach; ?>
			
		</div>
	</div>

</body>
</html>