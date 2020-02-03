<!DOCTYPE HTML>
<html lang="fr">
    <head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=0.8" />
            <title>(nom de l'entreprise)</title> <!-- Modifier la parenthèse --> 
            <link rel="stylesheet" href="format.css" type="text/css" />
		<link rel="shortcut icon" href="images/bg_ico_aside/logo_onglet.ico"/>
		<link rel="stylesheet" href="nav.css" type="text/css"/>
        <link rel="stylesheet" href="slider.css" type="text/css"/>
    </head>	
    <body class="parcour">
		<?php include("navigation.php");?>
        <div class="conteneur">
            <section id="section" class="section_tel">
                
                <h3> Notre histoire </h3>
                <p>
                    Voici comment <br />nous avons créé notre produit
                </p>
                <div id="slider_pc">
                    
                    <span id="sl_play" class="sl_command"></span>
                    <span id="sl_pause" class="sl_command"></span>
                    <span id="sl_i1" class="sl_command sl_i"></span>
                    <span id="sl_i2" class="sl_command sl_i"></span>
                    <span id="sl_i3" class="sl_command sl_i"></span>
                    <span id="sl_i4" class="sl_command sl_i"></span>

                    <div id="slideshow"> 
                        <a class="play_commands pause" href="#sl_pause" title="Maintain paused">Pause</a>  
                        <a class="play_commands play" href="#sl_play" title="Play the animation">Play</a>
                        
                        <div class="container">  
                            <div class="slider">  
                                <figure>  
                                    <img src="images/slider/parcour_1.jpg" alt="" width="640" height="310" />  
                                    <figcaption>Nous faisons ci</figcaption>  <!-- voir paul pour modifier -->
                                </figure><!-- 
                                --><figure>  
                                    <img src="images/slider/parcour_2.jpg" alt="" width="640" height="310" />  
                                    <figcaption>Nous faisons cela</figcaption>  <!-- voir paul pour modifier -->
                                </figure><!-- 
                                --><figure>  
                                    <img src="images/slider/parcour_3.jpg" alt="" width="640" height="310" />  
                                    <figcaption>Ensuite nous faisons ça </figcaption>  <!-- voir paul pour modifier -->
                                </figure><!-- 
                                --><figure>  
                                    <img src="images/slider/parcour_4.jpg" alt="" width="640" height="310" />  
                                    <figcaption>Et enfin ça</figcaption>  <!-- voir paul pour modifier -->
                                </figure>  
                            </div>  
                        </div>  
                        <ul class="dots_commands"><!-- 
                            --><li><a title="Afficher la slide 1" href="#sl_i1">Slide 1</a></li><!-- 
                            --><li><a title="Afficher la slide 2" href="#sl_i2">Slide 2</a></li><!-- 
                            --><li><a title="Afficher la slide 3" href="#sl_i3">Slide 3</a></li><!-- 
                            --><li><a title="Afficher la slide 4" href="#sl_i4">Slide 4</a></li>  
                        </ul>
                        <div class="slider_tel">
                            <br /><a href="images/max/parcour_1_max.jpg"><img src="images/parcour_1.jpg" alt="Photo de notre parcours au début" title="Cliquez pour agrandir" /></a>
                            <br /><a href="images/max/parcour_2_max.jpg"><img src="images/parcour_2.jpg" alt="Photo de notre parcours au milieu" title="Cliquez pour agrandir" /></a>
                            <br /><a href="images/max/parcour_3_max.jpg"><img src="images/parcour_3.jpg" alt="Photo de notre parcours au milieu" title="Cliquez pour agrandir" /></a>
                            <br /><a href="images/max/parcour_4_max.jpg"><img src="images/parcour_4.jpg" alt="Photo de notre parcours à la fin" title="Cliquez pour agrandir" /></a>
                        </div> 	
                    </div> 
                </div>
            </section> 
        </div>
	</body>
</html>