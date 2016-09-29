<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="E-Site" content="educational website for children">
  <title>E-Site/About Us</title>
  <?php $this->load->view('materialize.php');?>
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/CSS/aboutus.css')?>">
  <script type="text/javascript" src="<?= base_url('assets/js/aboutus.js')?>"></script>
  
</head>
<body>

<!--SLIDER-->
<div class="slider">
  <ul class="slides">
    <li>
      <img src="<?= base_url('assets/images/5.jpg')?>"> <!-- random image -->
      <div class="caption center-align">
        <h3>13% of the Children</h3>
        <h5 class="light grey-text text-lighten-3"> between 7-17 in 'Al-Zatari'are working instade of STUDYING<br>
        "UNICEF"</h5>
      </div>
    </li>
    <li>
      <img src="<?= base_url('assets/images/1.jpg')?>"> <!-- random image -->
      <div class="caption left-align">
        <h3>Almost 70% of SYRIAN refugees</h3>
        <h5 class="light grey-text text-lighten-3">live outside of camps and there is a major difference between education opportunuties of wealthy and poor refugees </h5>
      </div>
    </li>
    <li>
      <img src="<?= base_url('assets/images/2.jpg')?>"> <!-- random image -->
      <div class="caption right-align">
        <h3>Out of 2.3 Million</h3>
        <h5 class="light grey-text text-lighten-3"><strong>Regstered</strong> Syrian refugees <br> there are more than 865 thousand child, 70% of them can not go to school</h5>
      </div>
    </li>
    <li>
      <img src="<?= base_url('assets/images/4.jpg')?>"> <!-- random image -->
      <div class="caption center-align">
        <h3></h3>
        <h5 class="light grey-text text-lighten-3"></h5>
      </div>
    </li>
  </ul>
</div>

<h1 class="mot"> One of our INSPIRATION Stories</h1>
          <div class="row">
        <div class="col  s12">
          <div class="row valign-wrapper">
            <div class="col m6">
            <!--card-->
            <div class="row">
        <div class="col s10">
          <div class="card">
            <div class="card-image">
              <img  src="<?= base_url('assets/images/kid.jpg')?>">
            </div>
           
          </div>
        </div>
      </div>  
            </div>
           <div class="col s12 m7">
    
    <div class="card horizontal">
      
      <div class="card-stacked">
        <div class="card-content">
          <h2>Ahmed</h2><h5>escaped with his family from Syria 2 years ago
              <br>Ahmed left the school 3 years ago because of the situation in his home city 'Daraa'<br>
              After he arrived to the camp in Jordan, Ahmed realised that he can not go back to school as he wished </h5>
        </div>
        
      </div>
    </div>
  </div>
          </div>
        </div>
        </div>

       
    <!--footer-->
          <footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Developers Team</h5>
                <p class="grey-text text-lighten-4"></p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text"></h5>
                <div class="us"><a href="https://nl.linkedin.com/in/omar-al-kasem-8071b8122/en"><img class="img-circle us" src="<?= base_url('assets/images/omar.jpg')?>"><br>
                OMAR AL KASEM</a></div>
                <div class="us"><a href="https://nl.linkedin.com/in/rashashaar"><img class="img-circle us"  src="<?= base_url('assets/images/rasha.jpg')?>"><br>
                RASHA SHAAR</a></div>
                <div class="us"><a href="#"><img class="img-circle us" src="<?= base_url('assets/images/shadi.jpg')?>"><br>
                SHADI AJLYAKIN</a></div>
                <div class="us"><a  href="https://nl.linkedin.com/in/msbarbour"><img class="img-circle us" src="<?= base_url('assets/images/shuker.jpg')?>"><br>
                SHUKER BARBOUR</a>
              </div>
            </div>
          </div>
         
                <br><hr>
                 <a href="/content" class="lime darken-3 black-text text-accent-4 waves-effect btn modal-trigger z-depth-4">back to subjects</a>
                  
        </footer>
          </div>  
    </div>
    </div>
</body>
</html>