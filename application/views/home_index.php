<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="/~Betzy/Proyecto2ProWeb/CodeIgniter/style/index.css">
	<title>Welcome to my blog</title>

	
</head>
<body id="header">
<button id="User">
	<a href="http://localhost/~Betzy/Proyecto2ProWeb/CodeIgniter/index.php/user_controller/index/"> 
		<img src="user.png">
	</a> 
</button >
<div id="container" style="height: 800px;">
	<h1 class="title">Welcome to <?php echo $blog_name; ?></h1>
	<div>
		<?php foreach ($entries as $key => $entry) : ?>
			<div id="body">
			<h2><a id="titlePost" href="http://localhost/~Betzy/Proyecto2ProWeb/CodeIgniter/index.php/post_controller/index/<?php echo $entry['id'] ?>"><?php echo $entry['title'] ?></a></h2>	
			<p id="contentPost">
				<?php echo $entry['content'] ?> 
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
				<img id="Image1_img" src="me.jpg">
			</div>
			<div id="Info">
				<p><?php echo $user->carrera?></p>
				<p><?php echo $user->direccion?></p>
				<p><?php echo $user->correo?></p>
				<button>
					<a href="https://www.facebook.com/betzykarina.chiroldesleon" target ="_blank"> 
						<img src="f.png">
					</a> 
				</button >
				
			</div>
		</div>	
	</div>

</div>

</body>
</html>