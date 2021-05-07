<?php
var_dump($data);
?>
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
                  <a class="btn btn-outline-light bg-dark navbar-light text-light" type="button" href="<?php echo URLROOT; ?>/articleController/index"> logout </a>
                </form>
              </div>
          </nav>
    </header>
    <div>
    
    </div>
    <div class="card bg-dark text-white">
  <img class="card-img"  src="<?php echo URLROOT; ?>/css/img1.jpg" alt="Card image">
  <div class="card-img-overlay">
    <h5 class="card-title"><?php echo $data->name_blog?></h5>
    <p class="card-text"><?php echo $data->description?></p>
    <p class="card-text"><?php echo $data->chapiter_blog?></p>
    <a type="button" href="<?php echo URLROOT; ?>" class="btn btn-secondary">BACK</a>
  </div>
</div>
    
</body>
</html>