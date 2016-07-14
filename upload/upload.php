<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="webm, webm host, webm upload, webm sharing, webm edit, webm convert">
    <meta name="description" content="upload webm files. share webm files. webm hosting. convert gif, avi, mp4 to webm">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/ico"/>

    <title>webmLOVERS</title>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="../css/materialize.css" media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="../css/style.css" media="screen,projection"/>
    
</head>
<body>
    
    <!-- Navbar -->
    <nav class="light-blue darken-2" role="navigation">
        <div class="nav-wrapper container">
          <a id="logo-container" href="../index.html" class="brand-logo"><img class="logo-webmlovers" src="../img/logo_uno.png" alt="logo"></a>
          <ul class="right hide-on-med-and-down">
            <li><a href="../index.html"><i class="small material-icons left">publish</i>SUBIR</a></li>
            <li><a href="../contacto.html"><i class="small material-icons left">email</i>CONTACTO</a></li>
          </ul>

          <ul id="nav-mobile" class="side-nav">
            <li><a href="../index.html"><i class="small material-icons left">publish</i>SUBIR</a></li>
            <li><a href="../contacto.html"><i class="small material-icons left">email</i>CONTACTO</a></li>
          </ul>
          <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
        </div>
    </nav>
    
    <!-- Contenido -->
    <div class="container">

        <div class="section">
            
            <div class="upload-done"><br>
                 
                <?php 

                    if($_POST['url']){
                        require_once('config-upload-url.php');
                    } else {
                        require_once('config-upload.php');
                    }

                ?>

            </div>
            
            <br><div class="divider"></div>
            
            <!-- Pie de página -->
            <footer>
                <div class="row">

                    <div class="col s10">
                        <small>
                            <a href="../terminos.html" target="_blank">términos y condiciones</a>&nbsp;&nbsp;&nbsp;
                            <a href="../faq.html" target="_blank">faq</a>
                        </small>
                    </div>
                    <div class="col s2">
                        <small>©2016 - Host Webm</small>
                    </div>
                    
                </div><br><br>
            </footer>

        </div>

    </div>
    
<script src="../js/jquery.min.js"></script>
<script src="../js/materialize.min.js"></script>
<script src="../js/scripts.js"></script>
</body>
</html>