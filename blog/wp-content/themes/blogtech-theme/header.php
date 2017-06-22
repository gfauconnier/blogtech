<!doctype html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Blog Tech</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="icon" href="favicon.png">
  <link href="<?php echo get_bloginfo('template_directory'); ?>/css/bootstrap.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/normalize.css">
  <link href="<?php echo get_bloginfo('template_directory'); ?>/css/main.css" rel="stylesheet">
  <?php wp_head();?>
</head>

<body>

  <!-- ################ HEADER - Start ################ -->

  <header>
    <nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <h1 class="navbar-brand">Blog Tech</h1>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Username">
          <input class="form-control mr-sm-2" type="password" placeholder="Password">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Connect</button>
        </form>
      </div>
    </nav>
  </header>

  <!-- ################ HEADER - End ################ -->

    <!-- ################ MAIN - Start ################ -->

    <main class="container">
      <div class="row justify-content-around">
