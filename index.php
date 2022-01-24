<?php require "admin/database.php";
require "admin/hash.php"; 
header ('Content-type: text/html; charset=iso8859-15');?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Tayba Dates</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- styles -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/bootstrap-responsive.css" rel="stylesheet">
  <link href="css/prettyPhoto.css" rel="stylesheet">
  <link href="font/stylesheet.css" rel="stylesheet">
  <link href="css/animate.css" rel="stylesheet">
  <link href="css/flexslider.css" rel="stylesheet">
  <link rel="stylesheet" media="screen" href="css/sequencejs.css">
  <link href="css/style.css" rel="stylesheet">
  <link href="color/default.css" rel="stylesheet">

  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">
  <link rel="shortcut icon" href="img/logo.png">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
  <header>

    <!-- start top -->
    <div id="topnav" class="navbar navbar-fixed-top default">
      <div class="navbar-inner">
        <div class="container">
          <div class="logo">
            <a class="brand" href="index.php" style="padding: 0; top: -20px;"><img src="img/logo.png" alt="" style="max-width: 18%; "></a>
          </div>
          <div class="navigation">
            <nav>
              <ul class="nav pull-right">
                <li class="current"><a href="#featured">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#works">Products</a></li>
                <li><a href="#contact">Contact us</a></li>
              </ul>
            </nav>
          </div>
          <!--/.nav-collapse -->
        </div>
      </div>
    </div>
    <!-- end top -->
  </header>

  <!-- section featured -->
  <section id="featured" >
    <?php $slides = $database->query("SELECT * FROM slides"); ?>
    <!-- sequence slider -->
    <div id="sequence-theme">
      <img class="prev" src="img/bt-prev.png" alt="Previous">
      <img class="next" src="img/bt-next.png" alt="Next">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div id="sequence">
              <ul>
                <?php while ($slide = $slides->fetch()) { ?>
                <li class="animate-in">
                  <div class="info letter-container">
                    <h2 class="fade">Tayba dates</h2>
                  </div>
                  <h4 class="subtitle">Grower, packer and exporter of organic and conventional dates of Algeria </h4>
                  <div class="bottomup">
                    <img src="img/slider/parallax/<?php echo decrypt($slide['img']); ?>" style="border-radius: 5%; box-shadow: 3px 3px 3px 3px black;" alt="">
                  </div>
                </li>
                <?php } ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end sequence slider -->
  </section>
  <!-- end featured -->

  <!-- Section about -->
  <section id="about" class="section">
    <div class="gray-shadow">
    </div>
    <div class="container">
      <div class="row">
        <div class="span12">
          <div class="headline">
            <h3><span>About our company</span></h3>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="span12">
          <div class="section-intro">

            <?php
            $req = $database->query('SELECT * FROM about WHERE id = 2');
            $abt = $req->fetch(PDO::FETCH_ASSOC);
            $str = decrypt($abt['text']);
            $str = str_replace("\n", "<br>", $str);
            $str = str_replace("â¢", "&bull;", $str);
            $str = str_replace("  ", "&nbsp;&nbsp;", $str);
            ?>
            <p style="text-align: left;"><?php echo $str ?></p>
            <br id="certificates"> 
            

          </div>
        </div>
      </div>
      <hr>
      <br>
      <div class="headline" >
            <h3><span>Our certificates</span></h3>
          </div>
      <br><br>

    <?php $certificates = $database->query("SELECT * from certificates"); ?>
    <div class="row hidden-sm hidden-md hidden-lg">
        <div class="span12">
          <div class="flexslider">
              <ul class="slides ">
                <?php while ($certificate = $certificates->fetch()){ ?>
                <li class="row">
                <div class="col-xs-offset-1 col-xs-10">
                  <a class="lightbox" href="#cert" onclick='cert("img/slider/flexslider/<?php echo decrypt($certificate['image']);?>")'><img src="img/slider/flexslider/<?php echo decrypt($certificate['front_img']) ?>" alt="" style="border-radius: 5%; box-shadow: 3px 3px 3px 3px black;" ></a>
                </div>
              </li>
                <?php } ?>
              
            </ul>
            

        </div>
      </div>
    </div>
    <?php $certificates = $database->query("SELECT * from certificates"); 
        $n = $certificates->rowCount();
        $left = "false";
        if ($n === 4) {
          $class = "col-sm-3";
        }else if ($n === 5) {
          $class = "col-sm-2";
          $left = "true";
        }else {
          $class = "col-sm-2";
        } ?>
    <div class="row hidden-xs">
        <div class="span12">
          <div class="flexslider">
            <ul class="slides">
              <li class="row">
                <?php if($left === "true"){ ?>
                <div class="col-sm-1">
                  &emsp;
                </div>
                <?php } ?>
                <?php while ($certificate = $certificates->fetch()){ ?>
                <div class="<?php echo $class ?>">
                  <a class="lightbox" href="#cert" onclick='cert("img/slider/flexslider/<?php echo decrypt($certificate['image']);?>")'><img src="img/slider/flexslider/<?php echo decrypt($certificate['front_img']) ?>" alt="" style="border-radius: 5%; box-shadow: 3px 3px 3px 3px black;" ></a>
                </div>
                <?php } ?>
              </li>
            </ul>
            

        </div>
      </div>
    </div>
  </section>
  <!-- end section about -->

  <!-- section services -->
  <section id="services" class="section parallax">
    <div class="container">
      <div class="row">
        <div class="span12">
          <div class="headline">
            <h3><span>Our services</span></h3>
          </div>
        </div>
        <div class="span12">
          <div class="section-intro">
            <p>
              
            </p>
          </div>
        </div>
      </div>
      <?php $query="SELECT * FROM services";
      $products = $database->query($query);
      $n = $products->rowCount();
      $product = $products->fetchAll(\PDO::FETCH_ASSOC);
      $columns = $n % 3;
      $rows = floor($n / 3);;
      if($columns != 0){
        $rows++;
      }
      $normalClasses ="col-xs-12 col-sm-4";
      if($columns == 1){
        $ubnormal = "col-xs-12 col-sm-offset-4 col-sm-4";
      }else {
        $ubnormal = "col-xs-12 col-sm-offset-1 col-sm-4";
      }
      $j = 0;
      for ($i=0; $i < $rows; $i++) { ?>
        <div class="row">
        <?php while($j < count($product) && $j < (($i+1)*3)){
        if(($i+1) == $rows && $columns != 0){ ?>
          <div class="<?php echo($ubnormal) ?>">
        <?php }else { ?>
          <div class="<?php echo($normalClasses) ?>">
        <?php } ?>
          
            <div class="well box aligncenter">
              <i ><img src="img/slider/flexslider/<?php echo decrypt($product[$j]['front_img']) ?>" style="border-radius: 5%; box-shadow: 3px 3px 3px 3px black;"></i>
              <h3><?php echo decrypt($product[$j]['title']) ?></h3>
              <br>
              <button type="button" class="btn btn-color" data-toggle="modal" data-target="#myModal<?php echo $j ?>">Details</button>
                <!-- Modal -->
                <div class="modal fade" id="myModal<?php echo $j ?>" tabindex="-1" role="dialog" aria-labelledby="purchaseLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg">
                  
                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title"><?php echo decrypt($product[$j]['title']) ?></h4>
                      </div>
                      <div class="modal-body">
                        <div class="row">
                          <div class="col-xs-4">
                            <img src="img/slider/flexslider/<?php echo decrypt($product[$j]['img1']) ?>" style="border-radius: 5%; box-shadow: 3px 3px 3px 3px black;">
                          </div>
                          <div class="col-xs-4">
                            <img src="img/slider/flexslider/<?php echo decrypt($product[$j]['img2']) ?>" style="border-radius: 5%; box-shadow: 3px 3px 3px 3px black;">
                          </div>
                          <div class="col-xs-4">
                            <img src="img/slider/flexslider/<?php echo decrypt($product[$j]['img3']) ?>" style="border-radius: 5%; box-shadow: 3px 3px 3px 3px black;">
                          </div>
                        </div>
                      </div>
                      <p><?php echo decrypt($product[$j]['description']) ?></p>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                    
                  </div>
                </div>
                <!-- end of Modal -->
            </div>
          </div>
          
        <?php if ($columns == 2 && ($j % 2) == 0){ ?>
          <div class="col-sm-1"></div>
        <?php }$j++; }     ?>
        </div>     
      <?php } ?>

      </div>

    </div>
  </section>
  <!-- end section services -->

  <!-- section works -->
  <section id="works" class="section gray-bg">
    <div class="container">
      <div class="row">
        <div class="span12">
          <div class="headline">
            <h3><span>Our products</span></h3>
          </div>
        </div>
        <div class="span12">
          <div class="section-intro">
            <p>
              <br>
            </p>
          </div>
        </div>
        <div class="span12">
          <ul class="filter">
            <li><a onclick="getAll()" href="javascript:void(0);" class="btn btn-color">All categories</a></li>
            <li class="dropdown">
              <div class="hidden-lg hidden-md">
                <button class="btn btn-color" type="button" onclick="smsx(this.innerHTML)">Bio dates</button>
              </div>

                <button class="btn btn-color hidden-xs hidden-sm" type="button" data-toggle="dropdown">Bio dates
              <i class=" glyphicon glyphicon-chevron-down" style="color : white;  font-size: 0.8em; padding-left: 5%;"></i></button>
              
              <ul class="dropdown-menu">
                <li style="width: 100%;" class="dropdown" id="html1"><a id="html3" onclick="getB(this.id)" href="javascript:void(0);" class="dropbtn">Deglet nour&emsp;&emsp;<i class=" glyphicon glyphicon-chevron-right" style="color : black;  font-size: 0.8em; padding-left: 5%;"></i></a>
                  <div class="dropdown-content" id="html2">
                    <div id="OnBB1"><a onclick="get(this.id)" href="javascript:void(0);" id="OnBB13">On branch<i class=" glyphicon glyphicon-chevron-right pull-right" style="color : black;  font-size: 0.8em; padding-left: 5%;"></i></a>
                      <div class="dropdown-subCat" id="OnBB12">
                        <a onclick="get(this.id)" href="javascript:void(0);" id="branch1">Cards</a>
                      </div>

                    </div>
                    <div id="OnBB2"><a onclick="get(this.id)" href="javascript:void(0);" id="OnBB23">Regime<i class=" glyphicon glyphicon-chevron-right pull-right" style="color : black;  font-size: 0.8em; padding-left: 5%;"></i></a>
                      <div class="dropdown-subCat" id="OnBB22">
                        <a onclick="get(this.id)" href="javascript:void(0);" id="regime1">Cards</a>
                        <a onclick="get(this.id)" href="javascript:void(0);" id="regime2">Stand up boxes</a>
                        
                      </div>
                    </div>
                    <div id="OnBB3"><a onclick="get(this.id)" href="javascript:void(0);" id="OnBB33">Pitted dates<i class=" glyphicon glyphicon-chevron-right pull-right" style="color : black;  font-size: 0.8em; padding-left: 5%;"></i></a>
                      <div class="dropdown-subCat" id="OnBB32">
                        <a onclick="get(this.id)" href="javascript:void(0);" id="pitted1">Cards</a>
                        <a onclick="get(this.id)" href="javascript:void(0);" id="pitted2">Cups</a>
                        <a onclick="get(this.id)" href="javascript:void(0);" id="pitted3">Stand up pouch</a>
                        <a onclick="get(this.id)" href="javascript:void(0);" id="pitted4">Wooden boxes</a>
                      </div>
                    </div>
                    <div id="OnBB4"><a onclick="get(this.id)" href="javascript:void(0);" id="OnBB43">Bulk dates<i class=" glyphicon glyphicon-chevron-right pull-right" style="color : black;  font-size: 0.8em; padding-left: 5%;"></i></a>
                      <div class="dropdown-subCat" id="OnBB42">
                        <a onclick="get(this.id)" href="javascript:void(0);" id="bulk1">Cards</a>
                        <a onclick="get(this.id)" href="javascript:void(0);" id="bulk2">Stand up boxes</a>
                        <a onclick="get(this.id)" href="javascript:void(0);" id="bulk3">Stand up pouch</a>
                        <a onclick="get(this.id)" href="javascript:void(0);" id="bulk4">Ravier</a>
                      </div>
                    </div>
                  </div>
                </li>
                <li style="width: 100%;" class="dropdown" id="css1" ><a class="dropbtn" id="css3" onclick="getB(this.id)" href="javascript:void(0);">Other varieties&emsp;<i class=" glyphicon glyphicon-chevron-right" style="color : black;  font-size: 0.8em; padding-left: 5%;"></i></a>
                  <div class="dropdown-content" id="css2">
                    <a id="Other1B" onclick="get(this.id)" href="javascript:void(0);">Ghers</a>
                    <a id="Other2B" onclick="get(this.id)" href="javascript:void(0);">Tafzwinin</a>
                    <a id="Other3B" onclick="get(this.id)" href="javascript:void(0);">Tatcour</a>
                  </div>
                </li>
              </ul>
            </li>
            <li class="dropdown">
              <div class="hidden-lg hidden-md">
                <button class="btn btn-color" type="button" onclick="smsx(this.innerHTML)">Conventional</button>
              </div>

                <button class="btn btn-color hidden-xs hidden-sm" type="button" data-toggle="dropdown">Conventional
              <i class=" glyphicon glyphicon-chevron-down" style="color : white;  font-size: 0.8em; padding-left: 5%;"></i></button>
              <ul class="dropdown-menu">
                <li style="width: 100%;" class="dropdown" id="html1"><a id="html3" onclick="getC(this.id)" href="javascript:void(0);" class="dropbtn">Deglet nour&emsp;&emsp;<i class=" glyphicon glyphicon-chevron-right" style="color : black;  font-size: 0.8em; padding-left: 5%;"></i></a>
                  <div class="dropdown-content" id="html2">
                    <div id="OnBC1"><a onclick="get(this.id)" href="javascript:void(0);" id="OnBC13">On branch<i class=" glyphicon glyphicon-chevron-right pull-right" style="color : black;  font-size: 0.8em; padding-left: 5%;"></i></a>
                      <div class="dropdown-subCat" id="OnBC12">
                        <a onclick="get(this.id)" href="javascript:void(0);" id="branch1C">Cards</a>
                      </div>

                    </div>
                    <div id="OnBC2"><a onclick="get(this.id)" href="javascript:void(0);" id="OnBC23">Regime<i class=" glyphicon glyphicon-chevron-right pull-right" style="color : black;  font-size: 0.8em; padding-left: 5%;"></i></a>
                      <div class="dropdown-subCat" id="OnBC22">
                        <a onclick="get(this.id)" href="javascript:void(0);" id="regime1C">Cards</a>
                        <a onclick="get(this.id)" href="javascript:void(0);" id="regime2C">Stand up boxes</a>
                        
                      </div>
                    </div>
                    <div id="OnBC3"><a onclick="get(this.id)" href="javascript:void(0);" id="OnBC33">Pitted dates<i class=" glyphicon glyphicon-chevron-right pull-right" style="color : black;  font-size: 0.8em; padding-left: 5%;"></i></a>
                      <div class="dropdown-subCat" id="OnBC32">
                        <a onclick="get(this.id)" href="javascript:void(0);" id="pitted1C">Cards</a>
                        <a onclick="get(this.id)" href="javascript:void(0);" id="pitted2C">Cups</a>
                        <a onclick="get(this.id)" href="javascript:void(0);" id="pitted3C">Stand up pouch</a>
                        <a onclick="get(this.id)" href="javascript:void(0);" id="pitted4C">Wooden boxes</a>
                      </div>
                    </div>
                    <div id="OnBC4"><a onclick="get(this.id)" href="javascript:void(0);" id="OnBC43">Bulk dates<i class=" glyphicon glyphicon-chevron-right pull-right" style="color : black;  font-size: 0.8em; padding-left: 5%;"></i></a>
                      <div class="dropdown-subCat" id="OnBC42">
                        <a onclick="get(this.id)" href="javascript:void(0);" id="bulk1C">Cards</a>
                        <a onclick="get(this.id)" href="javascript:void(0);" id="bulk2C">Stand up boxes</a>
                        <a onclick="get(this.id)" href="javascript:void(0);" id="bulk3C">Stand up pouch</a>
                        <a onclick="get(this.id)" href="javascript:void(0);" id="bulk4C">Ravier</a>
                      </div>
                    </div>
                  </div>
                </li>
                <li style="width: 100%;" class="dropdown" id="css1" ><a class="dropbtn" id="css3" onclick="getC(this.id)" href="javascript:void(0);">Other varieties&emsp;<i class=" glyphicon glyphicon-chevron-right" style="color : black;  font-size: 0.8em; padding-left: 5%;"></i></a>
                  <div class="dropdown-content" id="css2">
                    <a id="Other1C" onclick="get(this.id)" href="javascript:void(0);">Ghers</a>
                    <a id="Other2C" onclick="get(this.id)" href="javascript:void(0);">Tafzwinin</a>
                    <a id="Other3C" onclick="get(this.id)" href="javascript:void(0);">Tatcour</a>
                  </div>
                </li>
              </ul>
            </li>
            <li class="dropdown">
              <div class="hidden-lg hidden-md">
                <button class="btn btn-color" type="button" onclick="smsx(this.innerHTML)">Derived from dates</button>
              </div>
                <button class="btn btn-color hidden-xs hidden-sm" type="button" data-toggle="dropdown">Derived from dates
              <i class=" glyphicon glyphicon-chevron-down" style="color : white;  font-size: 0.8em; padding-left: 5%;"></i></button>
              <ul class="dropdown-menu">
                <li style="width: 100%;"><a onclick="getD(this.id)" href="javascript:void(0);" id="Dervied1">Date paste</a></li>
                <li style="width: 100%;"><a onclick="getD(this.id)" href="javascript:void(0);" id="Dervied2">Date syrup</a></li>
                <li style="width: 100%;"><a onclick="getD(this.id)" href="javascript:void(0);" id="Dervied3">Chopped dates</a></li>
                <li style="width: 100%;"><a onclick="getD(this.id)" href="javascript:void(0);" id="Dervied4">Date powder</a></li>
                <li style="width: 100%;"><a onclick="getD(this.id)" href="javascript:void(0);" id="Dervied5">Stuffed dates and confectioners</a></li>
              </ul>
            </li>
          </ul>
          <div class="row">
            <ul class="portfolio-area" id="sadFace">
              <div>
                <h5 id="heads">&emsp;All <i class="glyphicon glyphicon-chevron-right"></i></h5>
              </div>
              <br>

            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- section works -->
  <hr>
  <!-- section contact -->
  <section id="contact" class="section">
    <div class="container">
      <div class="row">
        <div class="span12">
          <div class="headline">
            <h3><span>Contact us</span></h3>
          </div>
        </div>

      </div>
      <div class="row">
        <div class="span5">
          <h4><i class="icon-circled icon-32 icon-user"></i> Get in touch with us</h4>
          <p>
            Feel free to ask if you have any question regarding our services or if you just want to say Hello, we would love to hear from you.
          </p>
          <div class="dotted_line">
          </div>
          <?php $q = $database->prepare("DESCRIBE infos");
              $q->execute();
              $infos = $q->fetchAll(PDO::FETCH_COLUMN);
              $query = 'SELECT * FROM infos LIMIT 1';
              $exist = $database->prepare($query);
              $exist->execute();
              $donnees=$exist->fetch(PDO::FETCH_ASSOC); 

              foreach($infos as $info) { 
                if($info === "Phone"){
                  $classe = "icon-phone";
                }else if($info === "Address"){
                  $classe = "glyphicon glyphicon-map-marker";
                }else if($info === "Email"){
                  $classe = "icon-envelope-alt";
                }else {
                  $classe = "glyphicon glyphicon-list-alt";
                } 
            ?>
              <p>
                <span><i class="<?php echo $classe ?>"></i>&emsp; <strong><?php echo $info." : " ?></strong><?php echo decrypt($donnees[$info]) ?></span>
              </p>          
            <?php } ?>

        </div>
        
        <div class="span6">
          <div class="contact-form" id="formMap">
                              <div align="center">
                                <h5>Tayba dates on map</h5>
                              </div>
                            <div class="span6 center contact-info" id="map">
                        
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6771.921222517953!2d5.318357455013596!3d31.934826732335942!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xfc092f8f327afe51!2sTayba+Dattes!5e0!3m2!1sen!2sdz!4v1515709797525" style="width: 100%;height: 100%;" align="center" allowfullscreen ></iframe>
                        
                                                             
                    </div>
                    </div>

        </div>
      </div>
    </div>
  </section>
  <!-- end section contact -->
  <div class="lightbox-target" id="dog">
           <img id="foto" src="">
           <a class="lightbox-close" href="#works"></a>
        </div>

  <footer>
    <div class="lightbox-target" id="cert">
           <img id="fotocert" src="">
           <a class="lightbox-close" href="#certificates"></a>
        </div>

  <footer>
    <div class="verybottom">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="aligncenter">
              <div class="logo">
                <a class="brand" href="index.php">
								<img src="img/logo.png" alt="">
							</a>
              </div>
              <p><br></p>
              <div class="social-links">
                <ul class="social-links">
                  <?php $q = $database->prepare("DESCRIBE links");
              $q->execute();
              $infos = $q->fetchAll(PDO::FETCH_COLUMN);
              $query = 'SELECT * FROM links LIMIT 1';
              $exist = $database->prepare($query);
              $exist->execute();
              $donnees=$exist->fetch(PDO::FETCH_ASSOC); 

              foreach($infos as $info) { 
                if($info === "Twitter"){
                  $classe = "icon-circled icon-64 icon-twitter";
                }else if($info === "Facebook"){
                  $classe = "icon-circled icon-64 icon-facebook";
                }else if($info === "Google plus"){
                  $classe = "icon-circled icon-64 icon-google-plus";
                }else if($info === "Linkedin") {
                  $classe = "icon-circled icon-64 icon-linkedin";
                }else{
                  $classe = "icon-circled icon-64 icon-link";
                } 
            if($donnees[$info] === ""){ ?>
              <li><a title="<?php echo $info ?>"><i class="<?php echo $classe ?>"></i></a></li> 
           <?php  }else { ?>

            
              <li><a href="<?php echo "http://".decrypt($donnees[$info]) ?>" target="_blank" title="<?php echo $info ?>"><i class="<?php echo $classe ?>"></i></a></li>         
            <?php } } ?>

                </ul>

              </div>

              <p>
                &copy; Tayba Dates - All rights reserved
              </p>
              <div class="credits">

                Created by <a href="http://www.optidevs.com" target="_blank">OptiDevs</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- Javascript Library Files -->
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.easing.js"></script>

  <script src="js/jquery.lettering.js"></script>
  <script src="js/parallax/jquery.parallax-1.1.3.js"></script>
  <script src="js/nagging-menu.js"></script>
  <script src="js/sequence.jquery-min.js"></script>
  <script src="js/sequencejs-options.sliding-horizontal-parallax.js"></script>

  <script src="js/jquery.scrollTo.js"></script>
  <script src="js/jquery.nav.js"></script>
  <script src="js/modernizr.custom.js"></script>
  <script src="js/prettyPhoto/jquery.prettyPhoto.js"></script>
  <script src="js/prettyPhoto/setting.js"></script>
  <script src="js/prettyPhoto/config.js"></script>
  <script src="js/jquery.flexslider.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>
  <script src="js/custom.js"></script>
  
</body>

</html>
