<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="/~Betzy/Proyecto2ProWeb/CodeIgniter/style/index.css">
	<title>Welcome to my blog</title>

	
</head>
<body id="header">

<div id="container" style="height: 800px;">
	<h1 class="title">Welcome to <?php echo $blog_name; ?></h1>
	<div id="body" style="float: left; height: 800px; ">
			
			<h1><?php echo $entries->title?></h1>
			<?php echo $entries->content?> 
			

		<?php foreach ($comments as $key => $comment) : ?>
			<div>
			<h2><?php echo $comment['autor'] ?></h2>	
			<p>
				<?php echo $comment['body'] ?> 
			</p>
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
</html