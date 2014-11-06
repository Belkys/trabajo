<?php require_once('Connections/conexioncreacion.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
  $insertSQL = sprintf("INSERT INTO usuarios (nombre, correo) VALUES (%s, %s)",
                       GetSQLValueString($_POST['strNombre'], "text"),
                       GetSQLValueString($_POST['strEmail'], "text"));
  mysql_select_db($database_conexioncreacion, $conexioncreacion);
  $Result1 = mysql_query($insertSQL, $conexioncreacion) or die(mysql_error());

  $insertGoTo = "usuarios_lista.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}

mysql_select_db($database_conexioncreacion, $conexioncreacion);
$query_ConsultaCategorias = "SELECT * FROM usuarios ORDER BY usuarios.nombre ASC";
$ConsultaCategorias = mysql_query($query_ConsultaCategorias, $conexioncreacion) or die(mysql_error());
$row_ConsultaCategorias = mysql_fetch_assoc($ConsultaCategorias);
$totalRows_ConsultaCategorias = mysql_num_rows($ConsultaCategorias);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Carousel Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
     <link href="css/personalizado2.css" rel="stylesheet">
    <link href="css/estiloadmin.css" rel="stylesheet" type="text/css" />
    <script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
   <link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
  
  </head>
<!-- NAVBAR
================================================== -->
  <body>
    <div class="navbar-wrapper">
      <div class="container">
        <div class="banner">
              <img src="images/banner.jpg"/>
        </div>
        <div class="navbar navbar-inverse navbar-static-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <!--<a class="navbar-brand" href="#">Project name</a>-->
            

            </div>

            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="index.html">Inicio</a></li>
                <li><a href="#about">Acerca De</a></li>
                <li><a href="#contact">Contacto</a></li>
                <li><a href="sesion.php  ?>">Iinisiar Session</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li class="dropdown-header">Nav header</li>
                    <li><a href="#">Separated link</a></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>
   
    <script>
function subirimagen(nombrecampo)
{
  self.name = 'opener';
  remote = open('gestionimagen1.php?campo='+nombrecampo, 'remote', 'width=400,height=150,location=no,scrollbars=yes,menubars=no,toolbars=no,resizable=yes,fullscreen=no, status=yes');
  remote.focus();
  }

</script>
    <h1 class="registrarse">A&ntilde;adir Usuarios</h1>
    <p>&nbsp;</p>
     <form action="<?php echo $editFormAction; ?>" method="post" name="form1" id="form1">
      <table align="center">
        <tr valign="baseline">
          <td width="86" align="right" nowrap="nowrap">Nombre:</td>
          <td width="259"><span id="sprytextfield1">
            <input type="text" name="strNombre" value="" size="32" />
            <span class="textfieldRequiredMsg">Necesario.</span></span>
          *</td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right">Email:</td>
          <td><span id="sprytextfield2">
            <input type="text" name="strEmail" value="" size="32" />
            <span class="textfieldRequiredMsg">Necesario.</span></span>
          *</td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right">&nbsp;</td>
          <td><input type="submit" value="Registrar Usuario" /></td>
        </tr>
      </table>
      <input type="hidden" name="MM_insert" value="form1" />
    </form>
    <p>&nbsp;</p>
    <script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
    </script>
          
    </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <footer>
        <!--<p class="pull-right"><a href="#">Back to top</a></p>-->
        <p>&copy; 2014 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
