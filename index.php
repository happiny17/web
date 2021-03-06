<?php
	session_start();
	include_once("motor/funciones.php");

?>
<!DOCTYPE html>
<html lang="es">
	<head>
        <title>ItlaBike - Oficial Web</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link rel="stylesheet" type="text/css" href="engine1/style.css"/>
        <link type="text/css" rel="stylesheet" a href="css_styles/hojaCSS3.css">
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/motor.js"></script>
			<style>
	body {
    background: #000000 url("img/bg.jpg") no-repeat fixed center;
		}
		</style>
	</head>
    <body>

     <div id="contenedorPrincipal">
        <?php
            include_once("header.php");
        ?>
        <!-- Start WOWSlider.com BODY section -->
            <div id="wowslider-container1">
            <div class="ws_images"><ul>
                  <li><img src="data1/images/banner3.jpg" alt="" title="" id="wows1_0"/></li>
		<li><img src="data1/images/nikelogo.jpg" alt="" title="" id="wows1_1"/></li>
		<li><a href="http://wowslider.com/vi"><img src="data1/images/02.jpg" alt="bootstrap carousel example" title="" id="wows1_2"/></a></li>
		<li><img src="data1/images/hypervenombanner_5.jpg" alt="" title="" id="wows1_3"/></li>

                </ul></div>
                <div class="ws_bullets"><div>
                    <a href="#" title=""><span><img src="data1/tooltips/bg.jpg" alt=""/>1</span></a>
                </div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.com">slider html5</a> by WOWSlider.com v8.2</div>
            </div>
            <script type="text/javascript" src="engine1/wowslider.js"></script>
            <script type="text/javascript" src="engine1/script.js"></script>
        <!-- End WOWSlider.com BODY section -->

            <div id="contenidoPrincipal">
                <div id="nuevosModelos">
                    <div class="tituloPrincipal centrarTexto">
                        <h1>New Season</h1>
                        <h3>The models for the next season</h3>
                    </div>
                    <section id="modelos">
                        <article>
                            <div>
                                <a href="shoe1.php"><img src="img/shoes/shoe1.jpg" alt=""></a>
                                <h3>Nike Rebook</h3>
                                <div class="gradientDiv"></div>
                            </div>
                        </article>
                        <article>
                            <div>
                                <a href="shoe2.php"><img src="img/shoes/shoe2.jpg" alt=""></a>
                                <h3>Nike Air Force</h3>
                                <div class="gradientDiv"></div>
                            </div>
                        </article>
                        <article>
                            <div>
                                <a href="shoe3.php"><img src="img/shoes/shoe3.jpg" alt=""></a>
                                <h3>Lebron 12 Ext</h3>
                                <div class="gradientDiv"></div>
                            </div>
                        </article>
                        <article>
                            <div>
                                <a href="shoe4.php"><img src="img/shoes/shoe4.jpg" alt=""></a>
                                <h3>Nike SpringBreak</h3>
                                <div class="gradientDiv"></div>
                            </div>
                        </article>
                    </section>
                    <div class="titulo tit2 centrarTexto">
                        <a href="shoes.php" class="boxLink">Explore Shoes</a>
                    </div>
                 </div>
                <section id="cuerpoPrincipal">
                    <div id="contenido">
                        <div class="latestTitulo tituloPrincipal centrarTexto">
                            <h2>Latest from Nike</h2>
                        </div>
                        <div class="welcomeTitle tituloPrincipal centrarTexto">
                            <h1>Welcome to our Site!</h1>
                            <h2><a href="IniciarSesion.php">Sign Up</a> to enjoy our content or <a href="registrate.php">Register</a></h2>

							</br>
							<img id="bannerhome" src="img/banner1.jpg" style="border-radius: 104px 0px 63px 0px;-moz-border-radius: 104px 0px 63px 0px;-webkit-border-radius: 104px 0px 63px 0px;
							border: 3px solid #pink;"  alt="Banner Nike 1" width="737" height="326">
							</br>
                        </div>
                    </div>
                    <aside class="panelLateral">
                        <a class="twitter-timeline" href="https://twitter.com/Nike" data-widget-id="625127423625949184">Tweets por el @Nike.</a>
						<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

                    </aside>
                </section>
            </div>
        </div>
       <?php
            include_once( "footer.php");
        ?>
    </body>
</html>
