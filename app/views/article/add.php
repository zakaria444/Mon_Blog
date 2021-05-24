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
<body >
<header>
        <nav class="navbar navbar-expand-lg navbar-light bg-secondary navbar-dark">
            <div class="container">
                <button class="btn" disabled>
                    <a class="navbar-brand spinner-grow spinner-grow-sm " href="#"></a>
                  </button>
                  <a class="navbar-brand " href="#">Blog Ithems</a>
              
                <ul class="navbar-nav me-auto mb-2 mb-lg-0"></ul>
                <form class="d-flex ">
                  <a class="btn btn-outline-light bg-dark navbar-light text-light" type="button" href="<?php echo URLROOT; ?>/BlogController/login"> Login </a>
                </form>
              </div>
          </nav>
    </header>
    <div class="d-flex justify-content-center">
        <h1 class="page-header">Adding Blog </h1>
    </div>
  <div class="d-flex justify-content-center " style="margin-top: 100px;" >
<form action="<?php echo URLROOT; ?>/ArticleController/add" method="POST" style="border: solid 1px; width:50%;" class="">
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Naming Blog</label>
  <input type="text" name="name_blog" class="form-control" id="exampleFormControlInput1" placeholder="title">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">TITLE BLOG</label>
  <textarea class="form-control"  name="chapiter_blog" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Textarea</label>
  <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
<div class="d-flex justify-content-around ">
<input type="submit" name="add" class="btn btn-success" value="add"></input>
<a type="button" href="<?php echo URLROOT; ?>/admin" class="btn btn-secondary">BACK</a></div>
  </div>
</form>
</div>
</body>
</html>