<HTML>
	<HEAD>
		<meta charset="UTF-8">
		<TITLE>Logear Administrador</TITLE>
		<link rel="stylesheet" type="text/css" href="/~Betzy/Proyecto2ProWeb/CodeIgniter/style/index.css">

	</HEAD>
	<BODY background="/~Betzy/Proyecto2ProWeb/CodeIgniter/madera.jpg">
		<button id="User">
			<a href="http://localhost/~Betzy/Proyecto2ProWeb/CodeIgniter/"> 
				Inicio
			</a> 
		</button >

		<FORM action="http://localhost/~Betzy/Proyecto2ProWeb/CodeIgniter/index.php/admin_controller/index/" method="POST" name="post">

			
			<br/><br/>
			<h1 class="colorwhite">Formulario de ingreso Administrador</h1>
			<br/><br/>
			

			<div class="centerTable">
				<TABLE class="tabletest">
					<tr>
						<TD class="bordertest">
							Nombre usuario:
							<input type="text" name="nombre">
							<br/><br/>
						</TD>
					</tr>

					<tr>
						<TD class="bordertest">
							Contraseña:
							<input type="text" name="contrasena">
							<br/><br/>
						</TD>
					</tr>
				</TABLE>
			</div>

			<div>
				<br/><br/>
				<td>
					<input type="reset" name="reset" value="Limpiar" />
					<INPUT NAME='boton' TYPE='SUBMIT' VALUE='Registrar'>
				</td>
			</div>

		</FORM>
	</BODY>
</HTML>