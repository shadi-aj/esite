<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>E-Site/Rigester</title>
	<meta name="elearn" content="educational website for children">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/CSS/rigester.css');?>">
	<?php $this->load->view('materialize.php');?>
</head>
<body>

<div class="row">
	<div class="col s12 m4 offset-m4">
		<div class="card-panel">
		    <h5 class="center pink-text text-accent-4" style="font-weight:bold;">Welcome!</h5><br>
		    <h6 class="center light-green-text text-darken-4" style="font-weight:bold;">Sign up now</h6>
		    <div class="section"></div>
		    <div class="divider"></div>
				<div class="section"></div>
				<div class="section"></div>
				<div class="row">
					<form class="col s12" method="post" action="/users/store">
						<div>
						<label for="user_name">Username</label><br>
							<input type="text" name="username" class="validate">
						</div>
						<div>
						<label for="email">Email</label>
							<input type="email" name="email" class="validate">
						</div>
						<div>
						<label>Password</label>
							<input type="password" name="password">
						</div>
						<div>
						<label for="conf_pass">Confirm Password</label>
							<input type="password" name="conf_pass" class="validate">
						</div><br><br>
						<div class="row center-align">
							<button type="submit" class="pink accent-4 btn btn-default">Sign me up!</button>
						</div>
					</form>
					<ul class="collection">
					<?php 
					if (isset($_SESSION['Errors'])) {
						 foreach ($_SESSION['Errors'] as $value) { ?>
						 	<li class='collection-item red-text'> <?=  $value ?></li> 
					<?php }
						 $_SESSION['Errors'] = NULL;
					}?>
				</div>
		</div>
	</div>
</div>

</body>
</html>