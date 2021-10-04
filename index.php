<?php

    require_once 'estructurahtml.php';

?>
<!DOCTYPE html>
<html>
	<!-- Esto es el head donde van los metadatos, el título
	y los enlaces a los archivos .css, para darle estilo a la página -->
    <?php

        //Variables
        $titulo = 'Inicio | Las Mujeres en la Historia de la Informática';
        $css = 'index';

       cabecera($titulo, $css);

    ?>
	<!-- Esto es el body, que es donde va la estructura visual 
	principal del programa -->
	<body>
		<!-- Esto es un nav, que es la barra de navegación,
		para cambiar de una página a otra -->
        <?php

            //Variables
            $pagina = 'index';

            barraNavegacion($pagina);

        ?>
		<!-- Este es el main, que es donde irán todos los contenidos
		de la página -->
		<main>
			<!-- Este es un section, que tiene una imagen de 
			fondo y un texto por encima, haciendo de banner 
			principal de la página -->
			<section class="banner">
				<div class="bannertext">
					<h1>Las Mujeres en la Historia <br/>de la Informática</h1>
				</div>
			</section>
			<!-- Este es un section que contiene un div
			vacío con una imagen de fondo, y otro div con
			un título y un texto, explicando el concepto
			general de que trata la página -->
			<section>
				<article class="card carddiv">
					<div></div>
					<div>
						<h1>Mujeres en Informática</h1>
						<p>
							La preocupación mundial sobre el papel actual y futuro 
							de las mujeres en tareas de computación adquirió más 
							importancia con la aparición de la era de la información. 
							Estas preocupaciones motivaron la organización de debates 
							públicos sobre la igualdad de género al verse que las 
							aplicaciones informáticas ejercen una creciente influencia 
							en la sociedad. Este diálogo ha ayudado a difundir las 
							innovaciones en tecnología de la información y a reducir 
							los efectos involuntarios del sexismo percibido.<br/><br/>
							En los Estados Unidos, el número de mujeres presentes en 
							estudios de pregrado en informática, en cuadros de la 
							tecnología de la información alcanzó su punto máximo a 
							mediados de la década de 1980. Sobre todo en informática, 
							ha habido una caída dramática en el número de mujeres que 
							consiguen el título de grado. Las cifras recientes de la 
							asociación de investigación de informática Taulbee de la 
							encuesta indican que el número cayó recientemente a por 
							debajo del 12%, viniendo de casi un 40% a mediados de los 
							80.​ Una situación similar se observa en Canadá, donde la 
							disminución de mujeres en la informática es evidente.<br/><br/>
							La investigación ha demostrado que muchos conceptos erróneos 
							sobre la computación persisten y pueden desalentar a las 
							mujeres.​ Uno de los mayores malentendidos con la informática 
							es el "factor geek" o del "maquinitas chiflado asocial", 
							Se cree que un estudiante de universidad ha de pasarse todo 
							el día trabajando delante de un teclado y ordenador . El 
							"factor geek" afecta tanto a chicas como a chicas de 
							secundaria, pero parece producir más de un efecto negativo 
							sobre las estudiantes.<br/><br/>
							El catedrático Paul De Palma, de la Universidad de Gonzaga, 
							cree que más chicas pueden ser atraídas hacia el estudio de 
							informática, y resalta su similitud con las matemáticas. 
						</p>
					</div>
				</article>
			</section>
			<!-- Este es un section que contiene 2 articles
			con información y enlaces a las otras dos páginas -->
			<section class="container">
				<article class="card">
					<div></div>
					<div>
						<h1>MUJERES</h1>
						<p>
							Fueron muchas las mujeres que tuvieron papeles muy 
							importantes en el desarrollo de las primeras computadoras 
							y la informática, marcando un antes y un después en la 
							historia de la programación.
						</p>
						<a href="mujeres.php">Ver más <span>></span></a>
					</div>
				</article>
				<article class="card">
					<h1>CONTACTO</h1>
					<div>
						<i class="fa fa-phone" aria-hidden="true"></i>
						<div>
							<h2>TELÉFONO</h2>
							<p>678 543 921</p>
						</div>
					</div>
					<div>
						<i class="fa fa-map-marker" aria-hidden="true"></i>
						<div>
							<h2>DIRECCIÓN</h2>
							<p>C/ Corte de Peleas, 79</p>
						</div>
					</div>
					<div>
						<i class="fa fa-envelope" aria-hidden="true"></i>
						<div>
							<h2>E-MAIL</h2>
							<p>contacto@rubeninformatica.com</p>
						</div>
					</div>
					<a href="contacto.php">Ver más <span>></span></a>
				</article>
			</section>
		</main>
		<!-- Este es el footer, situado en la zona más inferior de
		la página, que es donde van los enlaces a la politica de privacidad, 
		el aviso legal... -->
        <?php

            footer();

        ?>
	</body>
</html>
