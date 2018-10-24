<?php
	
	session_start();
	
	include_once('../includes/connection.php');
	
	if(isset($_SESSION['logged_in'])) {
		//Index
		header('Location: cms.php');
	} else {
		//login
		if(isset($_POST['username'], $_POST['password'])){
			$username = $_POST['username'];
			$password = $_POST['password'];
			
			if(empty($username) or empty($password)) {
				$error = "Todos los campos son obligatorios";
			} else {
				$query = $pdo->prepare("SELECT * FROM user WHERE correo = ? AND user_password = ?");
				
				$query->bindValue(1, $username);
				$query->bindValue(2, md5($password));
				
				$query->execute();
				
				
				$num = $query->rowCount();
				$result = $query->fetch();
				$id_user = $result['user_id'];
				$nombre_user = $result['user_name'];
				
				if($num == 1){
					//existe usuario
					$_SESSION['logged_in'] = true;
					$_SESSION['user_id'] = $id_user;
					$_SESSION['correo'] = $username;
					$_SESSION['username'] = $nombre_user;
					$_SESSION['ultima_pagina'] = "login";
					header('Location: cms.php');
					exit();
				} else {
					//No existe usuario
					$error = "Usuario o Contraseña inválidos";
				}
				
			}
		}
?>

<html>
	<head>
		<title>Panel de Control</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">

		<?php include_once('../includes/header.php'); ?>

		<!-- Main -->
				<section id="main" class="wrapper">
					<div class="inner">
						<header class="major">
							<div class="row">
								<div class="col-6 col-12-medium">
									<h2>NOS ALEGRAMOS DE VOLVER A VERTE</h2>
								</div>
							</div>
						</header>
						
						<div class="content">
							<div class="table-wrapper" align="center">
								<?php if(isset($error)){ ?>
									<div class="alert"  style="max-width:500px;">
									  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
										<strong class="strongMssg">Atención: </strong><?php echo $error; ?>
									</div>
								<?php } ?>
								<table class="alt" style="max-width:500px;">
									<tr>
										<td style="padding-left:50px;padding-right:50px;">
											<form action="login.php" method="post" autocomplete="off"><br />
												<input type="text" name="username" placeholder="Nombre de usuario" style="font-size:18px;"><br />
												<input type="password" name="password" placeholder="Contraseña" style="font-size:18px;"><br />
												<input type="submit" value="Entrar" class="button primary fit" style="font-size:18px;">
											</form>
										</td>
									</tr>
								</table>
							</div>
							
						</div>
					</div>
				</section>
		<?php include_once('../includes/pie.php'); ?>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			<script src="assets/js/etiquetas.js"></script>
			<script src="assets/js/mensaje.js"></script>

	</body>
</html>

	<?php } ?>