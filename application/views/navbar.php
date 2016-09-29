<?php $this->load->library('session'); ?>
<?php $this->load->view('materialize'); ?>
<div class="container">
  <div class="row">
    <div class="col s12">
      <div class="nav-wrapper">
        <nav class="navbar">
          <a href="/home" class="brand-logo" style="position:relative;left:50px;"><img class="responsive-img" id="logo" src="<?= base_url('assets/images/logos/e-site.png') ?>"></a>
          <a href="#" data-activates="mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    			<ul class="right hide-on-med-and-down">
              <li><a class="pink-text text-accent-4" href="/content">Subjects</a></li>
              <li><a class="pink-text text-accent-4" href="/home/aboutus">About Us</a></li>
              <li><a href="/users/logout" class="transparent pink-text text-accent-4 waves-effect btn" style="font-size: small; font-weight:bold;">Log out</a></li>      	
          </ul>
          <ul class="side-nav" id="mobile">
              <li><a class="pink-text text-accent-4" href="/content">Subjects</a></li>
              <li><a class="pink-text text-accent-4" href="/home/aboutus">About Us</a></li>
              <li><a href="/users/logout" class="transparent pink-text text-accent-4 waves-effect btn" style="font-size: small; font-weight:bold;">Log out</a></li>     
          </ul>
	      </nav>
	    </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  $( document ).ready(function(){
    $('.button-collapse').sideNav();
  })
</script>
<style type="text/css">              
.nav-wrapper .brand-logo img {
    height: 84px;
    position: relative;
    bottom: 10px;
}
.navbar{
    background-color: #ffebee;
}
</style>