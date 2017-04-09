<?php
	session_start();
	include_once("motor/funciones.php");
?>


<!DOCTYPE html>
<html lang="es">
	<head>
        <title>Nike - Oficial Web</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link rel="stylesheet" type="text/css" href="engine1/style.css"/>
        <link type="text/css" rel="stylesheet" a href="css_styles/hojaCSS3.css">
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/motor.js"></script>
	</head>
    <body>
        <div id="contenedorPrincipal">
            <?php
                include_once("header.php");
            ?>
            <div id="contenidoPrincipal">  
                <section id="cuerpoPrincipal" >
                    <div id="contenido" class="widthDe100">
                        <div class="tituloPrincipal centrarTexto">
                            <h1>Services</h1>
                        </div>
                        <div id="formContactoDiv">
                            <div class="formDiv">
                                <form id="formmm" class="formLayout" method="post" name="formContacto" action="sservices.php" onsubmit="return Validarr();">
                                    <input type="text" name="txtNombre" placeholder="Nombre" required autocomplete="off">
                                    <input type="text" name="txtPrecio" placeholder="Precio" required autocomlete="off">
                                    <input type="text" name="txtCiudad" placeholder="Ciudad" required autocomlete="off">
									<input type="text" name="txtCorreo" placeholder="Correo" required autocomlete="off">
                                    <input type="text" name="txtDireccion" placeholder="Direccion" required autocomlete="off">
									<input type="text" name="txtNumero" placeholder="Numero" required autocomlete="off">
									<input type="text" name="txtSugerencia" placeholder="Sugerencia" required autocomlete="off">
									<input type="text" name="txtQueja" placeholder="Queja" required autocomlete="off">
                                    <textarea placeholder="Mensaje" required name='txtMensaje' class="form-control" rows="3"></textarea>
                                    <input type="submit" value="Enviar" class="formBtn" onclick="recibido();">
																	
									
                                </form>
                            </div> 
                        </div>
				    </div>
                </section> 
            </div>
        </div>				
       <?php
            include_once( "footer.php");
        ?>	
    </body>
</html>