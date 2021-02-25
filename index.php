<?php
  require_once("database/connection.php");
  $query = $conn->prepare("select * from artists");
  $query->execute();
  $artists = $query->fetchAll();
  
?><!DOCTYPE html>
<html>
<head>
  <title></title>
  <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900italic,900' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/8.3.0/nouislider.min.css">
  <link rel="stylesheet" type="text/css" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" type="text/css" href="css/artist.css">
</head>
<body>
  <?php
  require_once("header.php");
  ?>
  <section class="playlist"><a href="#">
   <i class="ion-ios-plus-outline"></i>New Playlist
 </a>
</section>
<section class="playing"><div class="playing__art"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/7022/cputh.jpg" alt="Album Art" /></div>
 <div class="playing__song"><a class="playing__song__name">Some Type of Love</a><a class="playing__song__artist">Charlie Puth</a></div>
 <div class="playing__add"><i class="ion-checkmark"></i></div>
</section>
</div>
<div class="content__middle">
<!-- / -->
<!-- Related Artists -->
<div role="tabpanel" class="tab-pane" id="related-artists">
  <div class="media-cards">
    <!-- START ARTIST LOOP -->
    <?php foreach($artists as $a): ?>
          <div class="media-card">
            <div class="media-card__image" style="background-image: url(<?php echo $a['cover']; ?>);">
              <i class="ion-ios-play"></i>
            </div>
            <a href="artist.php?id=<?php echo $a['id']; ?>" class="media-card__footer"><?php echo $a["name"]; ?></a>
          </div>
    <?php endforeach; ?>
    <!-- END ARTIST LOOP -->
  </div>
</div>
</div>
</div>
</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/8.3.0/nouislider.min.js"></script>
<script type="text/javascript" src="js/artist.js"></script>
</body>
</html>