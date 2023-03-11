<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>
    <?= $this->extend('layouts/main')?>
    <?=$this-> section('content')?>
      <div class="container">
        <h1><?=$title?></h1>
          <div class="row">
            <?= $this->include('partials/sidebar')?>
            <div class="col-12 col-sm-9">
              <div class="row">
                <?php foreach($posts as $post):?>
                <?= view_cell('\App\Libraries\Blog::postitem', ['title' => $post])?>
                <?php endforeach;?>  
              </div>


            </div>
          </div>
      </div>
    <?=$this->endSection()?>

  </body>
</html>