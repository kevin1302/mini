<!DOCTYPE html>
<html>
<head>
    <style type="text/css">
       
    </style>

    <script type="text/javascript">
        
    </script>
</head>

<body onload="initMap()">
    <div id="map_canvas"></div>
    <input type="text" id="latFld">
    <input type="text" id="lngFld">
    
    <?php foreach ($this->game as $game) {
          if (isset($game->name)) $name = $game->name;
          echo '<img src=' . URL .'public/img/'. $name .' alt="Foto" height="150px" width="150px">';
        } ?>
    <a href="<?php echo URL; ?>photos">Click If you think the picture is taken there Goodluck!</a>
</body>
</html>