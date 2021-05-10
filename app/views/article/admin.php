
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/style.css?v=<?php echo time();?>" >
    
    <title>Document</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-secondary navbar-dark">
            <div class="container">
                <button class="btn" disabled>
                    <a class="navbar-brand spinner-grow spinner-grow-sm " href="#"></a>
                  </button>
                  <a class="navbar-brand " href="#">Blog Ithems</a>
              
                <ul class="navbar-nav me-auto mb-2 mb-lg-0"></ul>
                <form class="d-flex ">
                <h3>welcom <?php echo  $_SESSION['name'];?></h3>
                  <a class="btn btn-outline-light bg-dark navbar-light text-light" type="button" href="<?php echo URLROOT; ?>"> logout </a>
                </form>
              </div>
          </nav>
    </header>
    <div class="title" >
    <h3> Welcom to blogithems </h3>
    </div>
    <div  class="d-flex justify-content-around  bd-highlight">
    <a type="" class=""></a>
    <a type="button" href="<?php echo URLROOT; ?>/ArticleController/add"  class="btn btn-success">Add</a>

    
    </div>
    
    <?php foreach($data as $row) : ?>
      <div class="card text-center" style="border: solid;width:1000px; margin: 25px auto 75px auto; ">
    <div class="card-header">
      ?
    </div>
    <div class="card-body" style=" background-image: url(css/chi.jpg);background-repeat: repeat-y;background-size: 994px 209px; ">
      <h5 class="card-title" ><?php echo $row->name_blog?></h5>
      <p class="card-text" style="margin: auto; margin-bottom:10px"><?php echo $row->description?></p>
      <div class="crud">
        <a class="btn btn-outline-light bg-dark navbar-light text-light" type="button" href="<?php echo URLROOT; ?>/ArticleController/edit/<?php echo $row->id; ?>"> Edit </a>
        
        <a class="btn btn-outline-light bg-dark navbar-light text-light" type="button" href="<?php echo URLROOT; ?>/ArticleController/show/<?php echo $row->id; ?>" >ShowMore</a>
        <a class="btn btn-outline-light bg-dark navbar-light text-light" type="button" href="<?php echo URLROOT; ?>/ArticleController/delete/<?php echo $row->id; ?>" >Delete</a>

        </div>
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