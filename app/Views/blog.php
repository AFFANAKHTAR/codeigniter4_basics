<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>
    <h1><?=$title?></h1>

        <?php foreach($posts as $post):?>
            <div>
                <h3><?=$post?></h3>
                <p>this is a post</p>
                <img src="/assets/images/avatar1.png" style="width:200px;height:auto;" alt="altimage">
            </div>
        <?php endforeach;?>
  </body>
</html>