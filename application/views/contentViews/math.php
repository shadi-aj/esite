<?php
$this->load->library('session');
if ($_SESSION['logged_in'] != TRUE) {
	redirect('home');
	}?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="E-Site" content="educational website for children">
	<title>E-site/Math</title>
	<?php $this->load->view('materialize.php');?>
	<style type="text/css">
		html,body{
			width: 100%;
			height: 100%;
			margin: 0px;
			padding: 0px;
			padding-top: 10px;
			 background-color: #847c79;
		    font-family: "Montserrat", sans-serif;	
		}
		.side{
			
			height: 441.41px ;
		}
		.main{
			height: auto;
			padding-top: 30px;
			margin-top:0 px;
			background: url(<?=base_url('assets/images/bg1.jpg')?>) no-repeat fixed center;
		    background-size: cover;
		}
		.v-cont{
			padding-left: 25px;
			margin-left: 50px;
			margin-top: 10px;
		}
	</style>
</head>
<body>
<?php $this->load->view('navbar.php');?>
<div class="body-div">
<div class="row">
		<div class="main card-panel col s12">
			<div class=" large card-panel deep-orange lighten-3 col s3 z-depth-4">
				<ul class="collection">
					
					<?php foreach ($less as $value) {?>
						<li class="collection-item">
						<a href="<?='/content/math

/'.$value['id'];?>"> 
						<?= $value['less_title'];?></a></li>
					<?php
					} ?>		
				</ul>
			</div>
			<div class="v-cont col s7 offset-s1">
				<h3><?= $less_url['less_title']?></h3>
				<div class="video-container z-depth-4">
					<iframe id="url" src="<?= $less_url['less_url']?>?rel=0" width="475" height="280"></iframe>
				</div>
				<br><hr>
				<form name="save" method="post" action="/content/save_math

_ach">
					<input type="hidden" name="less_id" value="<?= $this->uri->segment(3)?>">
					<input type="hidden" name="less_seq" value="<?= $less_url['less_id']?>">
					<input type="hidden" name="user_id" value="<?= $_SESSION['user_id']; ?>">
					<input type="submit" value="Next" class="waves-effect waves-light btn">
				</form>
			</div>
			<div class="card deep-orange lighten-3 col s7 offset-s4">
			<h6>type your comment here :</h6>
				<form class="card-content brown lighten-4 deep-orange darken-4-text" method="post" action="/content/comment_math

">
					<input type="hidden" name="less_id" value="<?= $this->uri->segment(3)?>">
					<input type="hidden" name="user_id" value="<?= $_SESSION['user_id']; ?>">
					<textarea name="comment">
					</textarea><br>
					<div class="card-action">
						<input type="submit" value="Post Comment" class="waves-effect waves-light btn">
					</div>
				</form>
				<div class="card brown lighten-4 col s12">
					
							<?php foreach ($comments as $value) {
								echo $value['username'].' '.':'."<br>";?>
								<div class="card-content brown lighten-4 darken-4-text">
								<?= $value['comment']."<br>"; ?>
								</div>
								<hr>
							<?php 
							}?>
			
				</div>
			</div>
		</div>
</div>
</div>
</body>
</html>