<?php

    function cabecera($titulo, $css){
        echo '<head>'.
                '<meta charset="utf-8" />'.
                '<meta name="author" content="Ruben Torres"/>'.
                '<meta name="description" content="mujeres historia informatica"/>'.
                '<title>'.$titulo.'</title>'.
                '<link rel="stylesheet" href="CSS/style.css" type="text/css" />'.
                '<link rel="stylesheet" href="CSS/'.$css.'.css" type="text/css" />'.
                '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">'.
             '</head>';
    }

    function barraNavegacion($pagina){

        //Variables
        $elementos = array(
          array('index', 'inicio'),
          array('mujeres', 'mujeres'),
          array('contacto', 'contacto')
        );

        echo '<nav>'.
                '<a href="#">'.
                    '<img src="img/logo.png">'.
                '</a>'.
                '<ul>';
                    foreach ($elementos as $elemento){
                        if($elemento[0] == $pagina){
                            echo '<li>'.
                                    '<a href="#.php" class="selected">'.
                                        //ucfirst = Upper Case First (Primera letra en mayúscula)
                                        '<p>'.ucfirst($elemento[1]).'</p>'.
                                    '</a>'.
                                '</li>';
                        }else{
                            echo '<li>'.
                                    '<a href="'.$elemento[0].'.php">' .
                                        '<p>'.ucfirst($elemento[1]).'</p>'.
                                    '</a>'.
                                '</li>';
                        }
                    }
                echo '</ul>'.
            '</nav>';
    }

    function footer(){
        echo '<footer>'.
                '<p>'.
                    '&copy;2021 Todos los derechos reservados | <a href="https://fundacionloyola.com/vguadalupe/" target="_blank">'.
                'Escuela Virgen de Guadalupe</a> '.
                '</p>'.
                '<p>'.
                    '<a href="http://fundacionloyola.com/vguadalupe/aviso-legal/" target="_blank">Aviso Legal</a> '.
                    '| '.
                    '<a href="https://docs.google.com/document/d/1iepLUcJUnY6fm8Prx63hDC89X487iQmjMEDSQm5f3Pc/edit?ts=5ce268c6#" target="_blank">Política de Privacidad</a>'.
                '</p>'.
            '</footer>';
    }

?>