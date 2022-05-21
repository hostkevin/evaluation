<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V4</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" >
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form action="<?php echo site_url(); ?>/BackofficeController/Backoffice/ajouter_voiture" class="login100-form validate-form" method="post" enctype="multipart/form-data">
			      
					<span class="login100-form-title p-b-49">
						Ajout Voiture
					</span>

					<div class="wrap-input100 validate-input m-b-23" >
						
						<input class="input100" type="text" placeholder=" Numero" name="num" required>
						
					</div>

					 	<div class="wrap-input100 validate-input m-b-23" >
						
						<input class="input100" type="text"  placeholder="Modele" name="modele" required>
						
					</div>

                    	
                           <div class="wrap-input100 validate-input" >
						
						<input class="input100" type="text" name="marque" placeholder="marque" required>
						
					</div>
                          


                    	<div class="wrap-input100 validate-input m-b-23" >
					
						<input class="input100" type="text"  placeholder="Type" name="type" required>
						
					</div>

					
			     
                
                     <div class="wrap-input100 validate-input" >
						
						<input class="input100" type="file" name="image" placeholder="images" required>
						
					</div>
			     <div class="text-right p-t-8 p-b-31">
						<a href="#">


			     <div class="text-right p-t-8 p-b-31">
						<a href="#">
						
						</a>
					</div>
					
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
							Ajouter
							</button>
						</div>
					</div>

				
					</div>

					

					<div class="flex-col-c p-t-155">
						  <?php if($this->session->flashdata('ok')) { ?>
                    <p class="text-success"><?=$this->session->flashdata('ok') ?>   
 
				<?php } ?>

						<a href="<?php echo site_url(); ?>/BackofficeController/Backoffice/index" class="txt2">
							retour
						</a>
					 
					</div>
				
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>assets/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/popper.js"></script>
	<script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>assets/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>assets/vendor/daterangepicker/moment.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>assets/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>assets/js/main.js"></script>

</body>
</html>