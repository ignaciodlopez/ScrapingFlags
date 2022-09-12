<html>
<form method="post">
<input name="url" size="50" />
<input name="submit" type="submit" />
</form>
<?php
    set_time_limit (24 * 60 * 60);
    
    if (!isset($_POST['submit']) ||!(isset($_GET['code']) && $_GET['code'] == 'micodigo') ) die();
    
    $destination_folder = 'C:/Users/nacho/Downloads/Nueva carpeta';

    $url = $_POST['https://cdn5.wyscout.com/photos/area4/public/flat/new/Afghanistan.png'];
    $newfname = $destination_folder . basename($url);

    $file = fopen ($url, "rb");
    if ($file) {
      $newf = fopen ($newfname, "wb");

      if ($newf)
      while(!feof($file)) {
        fwrite($newf, fread($file, 1024 * 8 ), 1024 * 8 );
      }
    }

    if ($file) {
      fclose($file);
    }

    if ($newf) {
      fclose($newf);
    }
?>
</html>  