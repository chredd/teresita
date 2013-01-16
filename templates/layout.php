<!DOCTYPE html>
<html>
  <head>
    <title><?php echo $config->site_title ?></title>
    <!-- Bootstrap -->
    <link href="<?php echo $config->base_directory ?>/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="<?php echo $config->base_directory ?>/assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="<?php echo $config->base_directory ?>/assets/css/style.css" media="screen">
  </head>
  <body>
    <div class="container-fluid" id="main">
      <div class="row-fluid">
        <div class="span8">
          <!--Body content-->
          <h1>Hello there!</h1>
          <?php 
          if(isset($template) && file_exists( realpath(".") . '/' . $config->templates_path . '/' . $template .'.php' )){
            include $template . '.php'; 
            }
          ?>
        </div>
      </div>
    </div>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="<?php echo $config->base_directory ?>/assets/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>