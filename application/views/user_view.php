<HTML>
	<HEAD>
		<meta charset="UTF-8">
		<TITLE>Logear Administrador</TITLE>
		<link rel="stylesheet" type="text/css" href="style/index.css">

	</HEAD>
	<BODY>

		<FORM action="http://localhost/~Betzy/Proyecto2ProWeb/CodeIgniter/index.php/validarUser_controller/index/" method="post">

			
			<br/><br/>
			<h1 class="colorwhite">Formulario de ingreso Administrador</h1>
			<br/><br/>
			

			<div class="centerTable">
				<TABLE class="tabletest">
					<tr>
						<TD class="bordertest">
							Nombre usuario:
							<input type="text" name="user_view[nombre]">
							<br/><br/>
						</TD>
					</tr>

					<tr>
						<TD class="bordertest">
							Contraseña:
							<input type="text" name="user_view[contrasena]">
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