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
      <a href="<?= base_url()?>delete/<?=$post['id']?>" class="btn btn-danger">Delete</a>
      <a href="<?= base_url()?>edit/<?=$post['id']?>" class="btn btn-primary">Edit</a>

    <?=$this->endSection()?>

  </body>
</html>