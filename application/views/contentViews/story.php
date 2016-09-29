<?php
$this->load->library('session');
if ($_SESSION['logged_in'] != TRUE) {
    redirect('home');
    }?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>E-Site/Stories</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/CSS/style-story.css')?>">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <link href="<?= base_url('assets/CSS/main.css')?>" rel="stylesheet">    
    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


</head>
<body>

	<section id="story" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">

                <div class="row"> 
                <!--navbar-->
    <div class="col-lg-12">
      <nav  class="navbar navbar-inverse">
             <div class="container-fluid">
                 <div class="navbar-header">
                    <a href="/home"><img class="navbar-brand" src="<?= base_url('assets/images/logos/E-Story.PNG')?>" ></a>
                </div>
                        <ul class="nav navbar-nav">
                        <li class="active"><a href="/content">Subjects</a></li>
                            
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                        <li><a href="/users/logout"><span class="glyphicon glyphicon-user"></span>Log Out</a></li>
                        </ul>
            </div>
        </nav>
     </div>
                <!--logo-->
                    <img src="<?= base_url('assets/images/logos/E-Story.PNG')?>">
                    <h2 class="section-heading"></h2><br>
                    <h3 class="section-subheading text-muted"></h3><br>
                </div>
            </div>
            <div class="row">

            <!--story-1-->

              <div class="col-md-4 col-sm-6 story1-item">
                    <a href="<?= base_url('assets/stories/SarbasstsTales6.pdf')?>" class="hover hover-grow" >
                        <div class="story-hover">
                            <div class="story-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="<?= base_url('assets/images/stories_pic/SarbasstsTales6.png')?>" class="img-responsive" alt="">
                    </a><br>
                    <div class="story-caption text-center">
                        <h4>Sarbasst's Tales 1</h4>
                       <p class="text-muted"></p>
                    </div> <br>
                </div> 

                <!--story2-->

                <div class="col-md-4 col-sm-6 story2-item">
                    <a href="<?= base_url('assets/stories/SarbasstsTales5.pdf')?>" class="hover hover-grow" >
                        <div class="story-hover">
                            <div class="story-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="<?= base_url('assets/images/stories_pic/SarbasstsTales5.png')?>" class="img-responsive" alt="">
                    </a><br>
                    <div class="story-caption text-center">
                        <h4>Sarbasst's Tales 2</h4>
                        <p class="text-muted"></p>
                    </div> <br>
                </div>

                <!--story3-->

                <div class="col-md-4 col-sm-6 story3-item">
                    <a href="<?= base_url('assets/stories/SarbasstsTales4.pdf')?>" class="hover hover-grow" >
                        <div class="story-hover">
                            <div class="story-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="<?= base_url('assets/images/stories_pic/SarbasstsTales4.png')?>" class="img-responsive" alt="">
                    </a><br>
                    <div class="story-caption text-center">
                        <h4>Sarbasst's Tales 3</h4>
                        <p class="text-muted"></p>
                    </div>
                </div> <br>
            </div>



            <div class="row">

            <!--story4-->

                 <div class="col-md-4 col-sm-6 story3-item">
                    <a href="<?= base_url('assets/stories/Smile-Please.pdf')?>" class="hover hover-grow" >
                        <div class="story-hover">
                            <div class="story-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="<?= base_url('assets/images/stories_pic/smileplease.png')?>" class="img-responsive" alt="">
                    </a><br>
                    <div class="story-caption text-center">
                        <h4>Smile Please</h4>
                        <p class="text-muted"></p>
                    </div> <br>
                </div> 
            

                <!--story5-->

                <div class="col-md-4 col-sm-6 story2-item">
                    <a href="<?= base_url('assets/stories/singing-in-the-rain.pdf')?>" class="hover hover-grow" >
                        <div class="story-hover">
                            <div class="story-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="<?= base_url('assets/images/stories_pic/singing in the rain.png')?>" class="img-responsive" alt="">
                    </a><br>
                    <div class="story-caption">
                        <h4>Singing in the rain</h4>
                        <p class="text-muted"></p>
                    </div> <br>
                </div>

                <!--story6-->

                <div class="col-md-4 col-sm-6 story3-item">
                    <a href="<?= base_url('assets/stories/fat-king-thin-dog.pdf')?>" class="hover hover-grow" >
                        <div class="story-hover">
                            <div class="story-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="<?= base_url('assets/images/stories_pic/Fat king thin dog.png')?>" class="img-responsive" alt="" width="300">
                    </a><br>
                    <div class="story-caption">
                        <h4>king thin dog</h4>
                        <p class="text-muted"></p>
                    </div> <br>
                </div> 

            </div>



             <div class="row">

            <!--story7-->

                 <div class="col-md-4 col-sm-6 story3-item">
                    <a href="<?= base_url('assets/stories/Sleepy-Mr-Sloth.pdf')?>" class="hover hover-grow" >
                        <div class="story-hover">
                            <div class="story-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="<?= base_url('assets/images/stories_pic/sleepy mr sloth.png')?>" class="img-responsive" alt="" width="300">
                    </a><br>
                    <div class="story-caption text-center">
                        <h4>Sleepy My Sloth</h4>
                        <p class="text-muted"></p>
                    </div><br>
                </div> 
            

                <!--story8-->

                <div class="col-md-4 col-sm-6 story2-item">
                    <a href="<?= base_url('assets/stories/Come-Back-Cat.pdf')?>" class="hover hover-grow" >
                        <div class="story-hover">
                            <div class="story-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="<?= base_url('assets/images/stories_pic/Come back cat.png')?>" class="img-responsive" alt="" width="300">
                    </a><br>
                    <div class="story-caption">
                        <h4>Come Back Cat</h4>
                        <p class="text-muted"></p>
                    </div><br>
                </div>

                <!--story9-->

                <div class="col-md-4 col-sm-6 story3-item">
                    <a href="<?= base_url('assets/stories/Bees-Like-Flowers.pdf')?>" class="hover hover-grow" >
                        <div class="story-hover">
                            <div class="story-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="<?= base_url('assets/images/stories_pic/bees like flowers.png')?>" class="img-responsive" alt="" width="300">
                    </a><br>
                    <div class="story-caption">
                        <h4>Bees Like Flowers</h4>
                        <p class="text-muted"></p>
                    </div><br>
                </div> 
            </div>
        </div>
    </section>
</body>
</html>