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
<form action="<?php echo URLROOT; ?>/ArticleController/editid/<?php echo $data->id; ?>" method="POST">

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Naming Blog</label>
  <input type="text" name="name_blog" class="form-control"  id="exampleFormControlInput1" value="<?php echo $data->name_blog?>" placeholder="titel">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">TITLE BLOG</label>
  <input class="form-control" value="<?php echo $data->chapiter_blog?>"  name="chapiter_blog" id="exampleFormControlTextarea1" rows="3" ></input>
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Textarea</label>
  <input class="form-control" name="description" value="<?php echo $data->description?>" id="exampleFormControlTextarea1" rows="3"></input>
</div>
<input type="submit" name="edit" class="btn btn-primary" value="Edit"></input>
</form>

</body>
</html>
<?php

var_dump($data);
?>