<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Abdel hamid</title>
  <?php wp_head(); ?>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body class="w3-light-grey">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

    <a class="navbar-brand font-weight-bold" href="https://github.com/Ahmed-Abd-elhamid">Github</a>

    <?php wp_nav_menu(array(
      'theme_location' => 'main-menu',
      'menu_class' => 'navbar-nav mr-auto',
      'container_class' => 'collapse navbar-collapse',
      "container_id" => "navbarSupportedContent"
    )); ?>

    <button class="navbar-toggler ml-auto font-weight-bold" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

  </nav>