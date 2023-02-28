<!doctype html>
<html lang="en" data-bs-theme="dark">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>our blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <center><h1>welcome to our blog section<br><?= isset($meta_title)? $meta_title : 'codeigniter4 blog'?></h1></center>
    <!-- As a link -->
    <nav class="navbar bg-body-tertiary">
    <div class="container-fluid">
        <ul>
            <li>
            <a class="navbar-brand" href="/blog">blog</a>
            </li>
            <li>
            <a class="navbar-brand" href="/blog/post">post</a>
            </li>
        </ul>
        
        
    </div>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>