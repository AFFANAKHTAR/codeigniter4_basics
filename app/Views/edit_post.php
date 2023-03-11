<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>
    <?= $this->extend('layouts/main')?>
    <?=$this-> section('content')?>
      <h1><?= $title?></h1>

      <form action="" method="post">
        <div class="form-group">
        <label for="post"></label>
        <input type="text" class="form-control" name="post_title" id="#post_title" aria-describedby="helpId" placeholder="enter your new post title">
        <small id="helpId" class="form-text text-muted">post_title</small>
        <label for="content"></label>
        <textarea class="form-control" name="textarea" id="#blogtext" rows="3"></textarea>
        <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>

    <?=$this->endSection()?>

  </body>
</html>