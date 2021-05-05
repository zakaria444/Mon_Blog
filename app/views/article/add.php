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
<form action="<?php echo URLROOT; ?>/ArticleController/add" method="POST">
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Naming Blog</label>
  <input type="text" name="name_blog" class="form-control" id="exampleFormControlInput1" placeholder="title">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
  <textarea class="form-control"  name="chapiter_blog" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
  <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
<input type="submit" name="add" class="btn btn-primary" value="add"></input>
</form>
</body>
</html>