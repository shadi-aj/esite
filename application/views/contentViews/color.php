<?php
$this->load->library('session');
if ($_SESSION['logged_in'] != TRUE) {
    redirect('home');
    }?>
<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
		<title>E-Color</title>
		<meta name="E-Site" content="educational website for children">
    <?php $this->load->view('materialize.php');?>
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/CSS/color.css')?>">
    <script type="text/javascript" src="<?= base_url('assets/js/aboutus.js')?>"></script>

</head>
 <body>

  <?php $this->load->view('navbar.php');?> 
    <div class="container">
      <div class="content">
        <div class="row center-align">
          <div class="col s12">
            <h5 class=" text-accent-4" style="font-weight:bold;">Choose one of the Coloring photos to Print it </h5>
          </div>
        </div>

        <div class="section"></div>

        <div class="row center-align">
          <div class="col s12">
        <?php for ($i=1; $i < 4; $i++) { ?> 
            
            <a href="/content/print/<?= $i?>" ><img class="cir" src="<?= base_url('assets/images/pic ('. $i .').jpg')?>" alt="Photo for coloring should be here"></a>
        <?php } ?>
          </div>
        </div>
        <div class="row center-align">
          <div class="col s12">
        <?php for ($i=4; $i < 7; $i++) { ?> 
            
            <a href="/content/print/<?= $i?>" ><img class="cir" src="<?= base_url('assets/images/pic ('. $i .').jpg')?>" alt="Photo for coloring should be here"></a>
        <?php } ?>
          </div>
        </div>
      </div>
    </div>

</body>
</html>