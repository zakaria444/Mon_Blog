
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/style.css?v=<?php echo time();?>" >
    
    <title>Document</title>
</head>
<body>
<?php require APPROOT .'/views/inc/header.php';?>
   
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