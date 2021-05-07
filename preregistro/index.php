<!DOCTYPE html>
<html lang='es'>
  <head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0, shrink-to-fit=no'>
    <title>Home Peke</title>
    <!-- // revisa lo que trae y solo lo hace una vez, puede ir en cualquier documento -->
    <?php require_once 'app/config.php';?>
    <?php require_once 'app/dependecias.php';?>
    
  </head>
  <body>
    <?php 
  
      if (isset($_GET['vista_solicitada'])) {
        switch ($_GET['vista_solicitada']) {
          case 'tarjeta':
            require_once 'view/card.php';
            break;
          case 'Barra':
            require_once 'view/nav.php';
            break;
          case 'peke':
            require_once 'view/FerPeke.php';
            break;
          case 'registro':
            require_once 'view/registro.php';
            break;
          default:
            require_once 'view/default.php';
            break;
        }
      } else {
        require_once 'view/default.php';
      }
    
    ?>
    
    
  </body>
</html>