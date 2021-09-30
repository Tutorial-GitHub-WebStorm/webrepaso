<?php

    //Incluir
    require_once 'estructurahtml.php';

    //Funciones
    function mostrarArray(){

        //Variables
        $conocer = rellenarArray();

        for($i=0;$i<sizeof($conocer);$i++)
            echo '<option value="'.$i.'">'.$conocer[$i].'</option>';

    }

    function rellenarArray(){

        return array(
            'Por internet',
            'En la televisión',
            'Por amigos',
            'Otros'
        );

    }

?>
<!DOCTYPE html>
<html>
	<!-- Esto es el head donde van los metadatos, el título
	y los enlaces a los archivos .css, para darle estilo a la página -->
    <?php

        //Variables
        $titulo = 'Contacto | Las Mujeres en la Historia de la Informática';
        $css = 'contacto';

        head($titulo, $css);

    ?>
	<!-- Esto es el body, que es donde va la estructura visual 
	principal del programa -->
	<body>
		<!-- Esto es un nav, que es la barra de navegación,
		para cambiar de una página a otra -->
        <?php

            //Variables
            $pagina = 'contacto';

            barraNavegacion($pagina);

        ?>
		<!-- Este es el main, que es donde irán todos los contenidos
		de la página -->
		<main>
			<!-- Este es un section con estilo de una tarjeta
			de contacto, que almacenará en el lado izquierdo
			una tarjeta con información, y en el lado derecho
			un formulario de contacto -->
			<section>
				<!-- Este es un section que contiene información
				de contacto -->
                <section class="info">
                    <section class="info_title">
                        <i class="fa fa-user-circle"></i>
                        <h2>INFORMACIÓN<br/>DE CONTACTO</h2>
                    </section> 
                    <section class="info_items">
                        <p><i class="fa fa-phone" aria-hidden="true"></i>678 543 921</p>
                        <p><i class="fa fa-map-marker" aria-hidden="true"></i>C/ Corte de Peleas, 79</p>
                        <p><i class="fa fa-envelope" aria-hidden="true"></i>contacto@rubeninformatica.com</p>
                    </section>                   
                </section>
				<!-- Este es el formulario que contiene inputs,
				labels, textarea... Y sirve para que el usuario
				escriba sus datos y los envíe -->
                <form action="formulario.php" method="POST">
                    <h2>Enviar mensaje</h2>
                    <div class="user_info">
                        <label for="name">Nombre <span>*</span></label>
                        <input type="text" id="name" class="inputs"/>

                        <label for="intereses">Intereses:</label>
                        <div>
                            <input type="checkbox" name="intereses[]" id="cine" value="cine"/>
                            <label for="cine">Cine</label>
                        </div>
                        <div>
                            <input type="checkbox" name="intereses[]" id="musica" value="musica"/>
                            <label for="musica">Música</label>
                        </div>
                        <div>
                            <input type="checkbox" name="intereses[]" id="libros" value="libros"/>
                            <label for="libros">Libros</label>
                        </div>

                        <label for="conocer">¿Cómo nos conociste?</label>
                        <select name="conocer" id="conocer">
                            <option value="" hidden>-- Seleccionar --</option>
                            <?php

                                mostrarArray();

                            ?>
                        </select>

						<div class="button">
                        	<input type="reset" value="Cancela" id="btnSend">
                            <input type="submit" value="Enviar" id="btnSend">
						</div>
                    </div>
                </form>
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
