<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="/~Betzy/Proyecto2ProWeb/CodeIgniter/style/index.css">
	<title>Welcome to my blog</title>

	
</head>
<body id="header">
<button id="User">
	<a href="http://localhost/~Betzy/Proyecto2ProWeb/CodeIgniter/index.php/admin_controller/goLogin/"> 
		<img src="/~Betzy/Proyecto2ProWeb/CodeIgniter/user.png">
	</a> 
</button >
<div id="container">
	<h1 class="title">Welcome to <?php echo $blog_name; echo $blog->nombre;?></h1>
	<div id="detalle">
		<p>
			<?php echo $blog->detalle?> 
		</p>
	</div>
	<br></br>
	<div id="bioUser">
		<?php foreach ($entries as $key => $entry) : ?>
			<div id="body">
			<h2><a id="titlePost" href="http://localhost/~Betzy/Proyecto2ProWeb/CodeIgniter/index.php/post_controller/show/<?php echo $entry['id'] ?>"><?php echo $entry['title'] ?></a></h2>	
			<p id="contentPost">
				<?php $continue = substr($entry['content'], 0, 100);  
					echo $continue."...";
				?> 
			</p>
			<h2 id="date"> <?php echo $entry['create_date']?> </h2>

			</div>
		<?php endforeach; ?>
		
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
					<a href="<?php echo $user->red_social?>" target ="_blank"> 
						<img src="/~Betzy/Proyecto2ProWeb/CodeIgniter/f.png">
					</a> 
				</button >
				
			</div>
		</div>	
	</div>

</div>

</body>
</html>