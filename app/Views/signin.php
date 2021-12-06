<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Biblioteca CBTis-147 - Login</title>
    
    <!--===============================================================================================-->	
		<link rel="icon" type="image/png" href="images/favicon/favicon.ico"/>
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="frontend/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="frontend/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="frontend/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="frontend/vendor/animate/animate.css">
    <!--===============================================================================================-->	
        <link rel="stylesheet" type="text/css" href="frontend/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="frontend/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="frontend/vendor/select2/select2.min.css">
    <!--===============================================================================================-->	
        <link rel="stylesheet" type="text/css" href="frontend/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="frontend/css/util.css">
        <link rel="stylesheet" type="text/css" href="frontend/css/main.css">
    <!--===============================================================================================-->

</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" >
                    <span class="login100-form-title-1">
                        <img src="images/logo.png" class="logotipo">
					</span>
				</div>

				<?php if(isset($validation)):?>
                <div class="alert alert-warning">
                   <?= $validation->listErrors() ?>
                </div>
                <?php endif;?>
 
				<form action="<?php echo base_url(); ?>/UsuariosController/loginAuth" class="login100-form validate-form"  method="post">

					<div class="wrap-input100 validate-input m-b-26" data-validate="Se requiere un usuario">
						<span class="label-input100">Usuario</span>
						<input class="input100" type="text" name="matricula" value="<?= old('matricula') ?>" placeholder="Ingrese su matrícula">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Se require una contraseña">
						<span class="label-input100">Contraseña</span>
						<input class="input100" type="password" name="password" placeholder="*********" >
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit">
							Iniciar sesión
						</button>
					</div>
				</form>
                
			</div>
		</div>
	</div>
    <div class="footer">    
        <p class="text-center"> <small> Centro de Bachillerato Tecnológico Industrial y de Servicios No.147 <br>
        Calle  Carrillo Flores #100, Col. Velasco Ibarra <br>
        C.P. 38687 Acámbaro, Guanajuato. México <br>
        Tels. 417 172 5030 y 417 172 0929
    </small></p>     
    </div>

	
<!--===============================================================================================-->
	<script src="frontend/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="frontend/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="frontend/vendor/bootstrap/js/popper.js"></script>
	<script src="frontend/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="frontend/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="frontend/vendor/daterangepicker/moment.min.js"></script>
	<script src="frontend/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="frontend/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="frontend/js/main.js"></script>

</body>
</html>

