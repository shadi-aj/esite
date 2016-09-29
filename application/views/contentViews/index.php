<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="elearn" content="educational website for children">
	<title>E-Site/Subjects</title>
	<?php $this->load->view('materialize.php');?>
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/CSS/subjects.css') ?>">
</head>
<body>
<?php $this->load->view('navbar.php');?>
<!-- curreculum :  -->
	<div class="container">
      <div class="content">
        <div class="row center-align">
          <div class="col s12">
            <h5 class=" text-accent-4" style="font-weight:bold;">Welcome <?= $retVal = (array_key_exists('username', $_SESSION)) ? $_SESSION['username'] : ', please log in or sign up to access the content ' ; ?></h5>
          </div>
        </div>
        <div class="section"></div>
        <div class="row center-align">
          <div class="col s12 m6">
            <a href="/content/math/1"><img src="<?= base_url('assets/images/logos/e-math.png') ?>" alt="there should be a e-math logo here"></a>
          </div>
          <div class="col s12 m6">
            <a href="/content/color"><img src="<?= base_url('assets/images/logos/e-color.png') ?>" alt="there should be a e-color logo here"></a>
          </div>
        </div>
        <div class="row center-align">
          <div class="col s12 m6">
            <a href="/content/story"><img src="<?= base_url('assets/images/logos/e-story.png') ?>" alt="there should be a e-story logo here"></a>
          </div>
          <div class="col s12 m6">
            <a href="/content/lang/1"><img src="<?= base_url('assets/images/logos/e-language.png') ?>" alt="there should be a e-Language logo here"></a>
          </div>
        </div>
      </div>
    </div>
</body>
</html>