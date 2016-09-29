
<!DOCTYPE html>
<html>
<head>
	<title>E-site/Home</title>
    <meta charset="utf-8">
    <meta name="elearn" content="educational website for children">
	<?php $this->load->view('materialize.php');?>
    <?php $this->load->library('session'); ?>
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/CSS/home.css')?>">
</head>
<body>
        <a href="/home/aboutus" ><img src="<?= base_url('assets/images/logos/e-site.png')?>" alt="there should be a esite logo here" style="height: 150px;"></a>
        <?php if ($_SESSION['logged_in']){ ?>
        <a href="/content" class="lime darken-3 black-text text-accent-4 waves-effect btn modal-trigger z-depth-4">go to subjects</a>
        <?php }else{ ?>    

        <a href="#modalLogin" class="red accent-2 black-text text-accent-4 waves-effect btn modal-trigger z-depth-4">log in</a>
        <span> Or </span>
        <a href="/users/register" class="lime darken-3 black-text text-accent-4 waves-effect btn modal-trigger z-depth-4">Register</a>
        <span> to access content</span>
        <?php } ?>




<!--login modal-->
<div id="modalLogin" class="modal">
    <div class="modal-content">
        <h2 class="center-align brown-text">Login</h2>
        <div class="center-align">
            <div class="divider"></div>
            <form class="col s12" id="loginform" method="post" action="/users/handle_login">
                <div class="row center-align">
                    <div class="input-field col m10 offset-m1 blue-text">
                        <input id="icon_prefix" type="text" name="username" class="validate">
                        <label for="icon_prefix">Username</label>
                    </div>
                    <div class="input-field col m10 offset-m1 blue-text ">
                        <input id="icon_password" type="password" name="password" class="validate">
                        <label for="icon_password">Password</label>
                    </div>
                    <div class="input-field col m10 offset-m1 blue-text">
                        <input type="checkbox" class="blue-text" id="filled-in-box" checked="checked">
                        <label for="filled-in-box">Remember me next time</label>
                    </div>
                </div>
            </form>
            <div class="divider"></div>
            <p>
                <a href="#"  class="btn btn-flat white modal-close">Cancel</a> &nbsp;
                <a href="#" onclick="document.getElementById('loginform').submit();" class="waves-effect waves-lime brown btn btn-flat modal-action modal-close">Login</a>
            </p>
        </div>
    </div>
</div>

<script>
	$(document).ready(function(){
	$('.modal-trigger').leanModal();})
</script>

</body>
</html>