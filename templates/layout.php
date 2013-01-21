<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title><?php echo $config->site_title ?></title>
    <!-- Bootstrap -->
    <link href="<?php echo $config->base_directory ?>/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="<?php echo $config->base_directory ?>/assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="<?php echo $config->base_directory ?>/assets/css/style.css" media="screen">
  </head>
  <body>
    <div class="container-fluid" id="main">
      <div class="row-fluid">
          <!--Body content-->
          <h1>Hej Amalia Terese!</h1>
          <p>Vad roligt att du hittade hit. Först och främst ett stort, <strong>STORT grattis på din stora dag!</strong><br>
          Jag önskar verkligen att jag kunde ha varit hemma hos dig idag och uppvaktat dig på riktigt.
          Nåväl, det blir inte alltid som man vill. Här kommer ändå en liten present till dig.</p>

          <p>Först blir det dock lite uppvärmning. Du kommer väl ihåg hur rebusar fungerar? <br>
          <strong>Vi inleder med en enkel:</strong></p>
          
           
          <div class="rebus-container">
            <?php print_r( Rebus::renderRebus('json/simple.json') );  ?>
          </div>

          <p>Väldigt lätt va? Rätt svar var alltså: Jag Älskar Dig!</p>
          <p>Detta var dock så klart inte den riktiga utmaning. Den kommer istället här!<br>
            Om problem uppstår för du givetvis kontakta supporten på 070-370 69 29 (29,90:- per minut).</p>

          <h2>Den riktiga utmaningen:</h2>


            <div class="rebus-container">
            <?php 
            if(isset($template) && file_exists( realpath(".") . '/' . $config->templates_path . '/' . $template .'.php' )){
              include $template . '.php'; 
              }
            ?>
            </div>            
          </div>

          
      </div>
    </div>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="<?php echo $config->base_directory ?>/assets/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>