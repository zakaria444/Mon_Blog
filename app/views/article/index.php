<?php require APPROOT .'/views/inc/header.php';?>

    
    <title>Document</title>
</head>
<body>

<div class="container">
<input onkeyup="filter()" type="text" id="search" placeholder="search...">

<?php foreach ($data as $key ):?>

  <ul id="menu">
    <li><a><?php echo $key->name_blog ?></a></li>
  </ul>
  <?php endforeach ;?>



</div>
   
    <div  class="d-flex justify-content-center">
    <div class="main-title-img"  >
    <h3 class="title"> Welcom to blogithems </h3>
    <div class="titl-img">
    </div>
    </div>
    </div>
    
      <?php foreach($data as $row) : ?>
      <div class="card text-center" style="border: solid;width:1000px; margin: 25px auto 75px auto; ">
    <div class="card-header">
      ?
    </div>
    <div class="card-body" style=" background-image: url(css/chi.jpg);background-repeat: repeat-y;background-size: 994px 209px; ">
      <h5 class="card-title" ><?php echo $row->name_blog?></h5>
      <p class="card-text" style="margin: auto; margin-bottom:10px"><?php echo $row->description?></p>
      <a  href="<?php echo URLROOT; ?>/ArticleController/showview/<?php echo $row->id; ?>" class="btn btn-primary">ShowMore</a>
    </div>
    <div class="card-footer text-muted"></div>
  </div>
  <?php endforeach; ?>
    <footer class="bg-light text-center text-lg-start">
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
          © 2021 Copyright:
          <a class="text-dark" href="<?php echo URLROOT; ?>/articleController/index">blogithems.com</a>
        </div>
        <!-- Copyright -->
      </footer>

</body>
</html>