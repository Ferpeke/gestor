<!DOCTYPE html>
<html lang='es'>

<head>
  <meta charset='UTF-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0, shrink-to-fit=no'>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="librerias/Bootstrap4/bootstrap.min.css">
  <title>login</title>
  <link rel="stylesheet" href="css/login.css">
</head>

<body class="fondo">
  <div class="wrapper fadeInDown">
    <div id="formContent">
      <!-- Tabs Titles -->

      <!-- Icon -->
      <div class="fadeIn first">
        <img src="img/archivos.png" id="icon" alt="User Icon" />
        <h1>Gestor de Archivos</h1>
      </div>

      <!-- Login Form -->
      <form method="POST" id="frmLogin" onsubmit="return logear()">
        <input type="text" id="login" class="fadeIn second" name="login" placeholder="username" require="" autocomplete="off">
        <input type="password" id="password" class="fadeIn third" name="password" placeholder="password" require="">
        <input type="submit" class="fadeIn fourth" value="Entrar">
      </form>

      <!-- Remind Passowrd -->
      <div id="formFooter">
        <a class="underlineHover" href="registro.php">Registrar</a>
      </div>

    </div>
  </div>

<script src="js/jquery.js"></script>
<script src="librerias/Bootstrap4/popper.min.js"></script>
<script src="librerias/Bootstrap4//bootstrap.min.js"></script>
<script src="librerias/sweetalert/sweetalert.js"></script>

<script>

  function logear(){
    $.ajax({
      type: "POST",
      data: $('#frmLogin').serialize(),
      url: "procesos/usuario/login/login.php",
      success:function (respuesta) {
        
        respuesta = respuesta.trim();
        if (respuesta == 1) {
          window.location = "vistas/inicio.php";
        } else {
          swal(":(", "Fallo al entrar", "error");
        }
      }
    });
    return false;
  }
</script>



</body>

</html>