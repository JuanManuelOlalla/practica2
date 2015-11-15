<?php
    require 'clases/AutoCarga.php';
    $c = Request::get("c");
    $intentos = Request::get("intentos");
    $subidas = Request::get("subidas");
    $nosubidas = Request::get("nosubidas");
    $imagenes = Array();
    $cita = new Cita();
    $imagenes = $cita->buscarCitas($c);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="Description" content="Oficina Virtual Sistema Sanitario Publico Andalucia" />
        <title>Ver Cita</title>
        <link rel="stylesheet" type="text/css" href="../estilo/intersas.css" />
    </head>
    <body>
        <div style="width: 24%; float:left; padding: 0px;">
            <map name="logocorporativo" id="logocorporativo">
                <area href="#contenido_principal" shape="rect" coords="1, 0, 202, 5" accesskey="s" alt="Acceso al contenido principal de esta página" title="Acceso al contenido principal de esta página" />
                <area href="http://www.andaluciajunta.es/" shape="rect" coords="1, 6, 68, 64" target="_blank" alt="Acceso en una nueva ventana a la página web de la Junta de Andalucía" title="Acceso en una nueva ventana a la página web de la Junta de Andalucía"/>
                <area href="http://www.juntadeandalucia.es/servicioandaluzdesalud/" shape="rect" coords="81, 28, 202, 38" target="_blank" alt="Acceso en una nueva ventana a la página web del Servicio Andaluz de Salud" title="Acceso en una nueva ventana a la página web del Servicio Andaluz de Salud"/>
                <area href="http://www.juntadeandalucia.es/salud" shape="rect" coords="80, 44, 202, 54" target="_blank" alt="Acceso en una nueva ventana a la página web de la Consejería de Salud" title="Acceso en una nueva ventana a la página web de la Consejería de Salud"/>
            </map>
            <img src="../img/logo_consejeria_verde_2015_07.gif" style="border: medium none;" usemap="#logocorporativo" alt="" height="64"/>
        </div>
        <div class="tabla_formulario" style="text-align:center;padding-top:2px; padding-bottom:9px; border:0px;">
            <h2 class="etiquetas_campos" style="padding-bottom: 0px; margin-bottom: 0px;">
                <img style="border:none" src="../img/cuadradito_verde.gif" alt="" />&nbsp;
                Acceso a servicios personales 
                (<a class="enlaces2" href="/pls/intersas/servicios.motivos_identificacion" title="Razones por las que es conveniente identificarse en este portal">&iquest;Por qu&eacute; identificarse?&nbsp;</a>):
            </h2>
            <br />
            <ul style="display:inline;">
                <li style="display:inline; padding-right:20px">
                    <a href="/pls/intersas/servicios.inicio_identificacion?tipo_identificacion=1" class="boton_identificacion" title="Acceso a identificación con Certificado Digital">Mediante Certificado Digital</a>
                </li>
                <li style="display:inline; padding-left:10px">
                    <a href="/pls/intersas/servicios.inicio_identificacion?tipo_identificacion=2" class="boton_identificacion" title="Acceso a identificación sin Certificado Digital">Introduciendo datos personales</a>
                </li>
            </ul>
        </div>
        <div id="menu_lateral">
            <dl style="display:inline; padding:0">
                <dt class="titulo">
                    <a href="servicios.inicio" title="P&aacute;gina de Inicio de InterS@S" class="anagrama"><abbr title="InterSaS">INTERS@S</abbr></a>
                </dt>
                <dt class="menu_servicios">
                    <a href="servicios.carpeta_salud.tramite_enlinea_cs" class="enlaces_servicios" title="Acceso a Clic Salud">Clic Salud</a>
                </dt>
                <dt class="menu_servicios">
                    <a href="servicios.informacion_tarjeta" class="enlaces_servicios" title="Acceso a p&#225;gina de informaci&#243;n sobre la Tarjeta Sanitaria." >Tarjeta Sanitaria</a>
                </dt>
                <dt class="menu_servicios">
                    <a href="servicios.datos_usuario_consulta" class="enlaces_servicios" title="Acceso a consulta de datos personales.">Consulta de datos personales</a>
                </dt>
                <dt class="menu_servicios">
                    <a href="servicios.tramite_enlinea_citamedico" class="enlaces_servicios" title="Obtención de citas para su médico.">Cita para el médico</a>
                </dt>
                <dt class="menu_servicios">
                    <a href="servicios.tramite_enlinea_citamedico?p_id_servicio=2" class="enlaces_servicios" title="Obtención de citas para vacunación antigripal.">Cita para vacunación antigripal</a>
                </dt>
                <dt class="menu_servicios">
                    <a href="servicios.tramite_enlinea_medico" class="enlaces_servicios" title="Acceso a cambio de m&#233;dico de atenci&#243;n primaria.">Elecci&#243;n de M&#233;dico</a>
                </dt>
                <dt class="menu_servicios">
                    <a href="servicios.tramite_enlinea_domicilio" class="enlaces_servicios" title="Acceso a modificaci&#243;n de datos de contacto.">Cambio de datos de contacto</a>
                </dt>
                <dt class="menu_servicios">
                    <a href="servicios.tramite_enlinea_desplazamiento" class="enlaces_servicios" title="Acceso a realizaci&#243;n de un desplazamiento temporal.">Desplazamiento temporal a otro municipio</a>
                </dt>
                <dt class="menu_servicios">
                    <a href="servicios.rdq.tramite_enlinea_rdq" class="enlaces_servicios" title="Intervenciones quirúrgicas sujetas a garantía de tiempo de respuesta">Lista de Espera Quirúrgica</a>
                </dt>
                <dt class="menu_servicios">
                    <a href="servicios.tramite_enlinea_seg_opinion"  class="enlaces_servicios" title="Acceso a Segunda Opini&#243;n M&#233;dica.">Segunda Opini&#243;n M&#233;dica</a>
                </dt>
                <dt class="menu_servicios">
                    <a href="servicios.descarga_de_formularios" class="enlaces_servicios" title="Acceso a descarga de Formularios.">Formularios Disponibles</a>
                </dt>
                <dt class="menu_contactar">
                    <a href="http://www.juntadeandalucia.es/servicioandaluzdesalud/sugerencias/suger.asp?idp=3A5734812AB44%7C2756A3%7C14AB5F&ctrl=%5B51413169493153%5D" class="enlaces_contactar" title="Acceso a la p&#225;gina de sugerencias del Servicio Andaluz de Salud."><img style="border: none;" src="../img/ic_suge.gif" alt="" width="22" height="20" /><br />Sugerencias</a>
                </dt>
                <dt class="menu_administracion">
                    <a href="http://www.juntadeandalucia.es/SaludResponde/AppMovil/" class="enlaces_contactar" title="Acceso a la web de App Cita Médica"><span style="text-decoration: underline; padding-left: 2%; padding-right: 2%;">App Cita Médica</span></a>
                </dt>
                <dt class="menu_administracion">
                    <a href="https://www.juntadeandalucia.es/salud/rv2/inicioCiudadania.action" class="enlaces_contactar" title="Registro de Voluntades Vitales Anticipadas"><span style="text-decoration: underline; padding-left: 2%; padding-right: 2%;">Registro de Voluntades Vitales Anticipadas</span></a>
                </dt>
                <dt class="menu_administracion" style="border-top-width:1px; border-top-style:outset; border-top-color: none;">
                    <a href="http://www.juntadeandalucia.es/temas/personas/administracion/ae.html" class="enlaces_contactar" title="Servicios de administraci&oacute;n electr&oacute;nica de la Junta de Andaluc&iacute;a">&nbsp;<span style="font-size: 1.7 em;">@</span><span style="text-decoration: underline; padding-left: 2%; padding-right: 2%;"> e-Administración&nbsp;</span></a>
                </dt>
                <dt class="menu_final">
                    <a href="servicios.informacion_intersas" class="enlaces2" title="Informaci&oacute;n sobre InterS@S">Qu&eacute; es InterS@S</a>
                </dt>
                <dt class="menu_final">
                    <a href="servicios.infor_certificado_digital" class="enlaces2" title="Acceso a obtenci&oacute;n de Certificado Digital.">Certificado digital</a>
                </dt>
                <dt class="menu_final">
                    <a href="servicios.seguridad_y_acceso" class="enlaces2" title="Informaci&oacute;n sobre seguridad y acceso a este portal">Seguridad y Acceso</a>
                </dt>
                <dt class="menu_final">
                    <a href="servicios.informacion_accesibilidad" class="enlaces2" title="Informaci&oacute;n sobre accesibilidad">Accesibilidad del sitio</a>
                </dt>
            </dl>
        </div>
        <div id="imagen_central">
            <br />
            <div class="situacion">
                <h1 id="titulo_pagina" class="etiquetas_campos">
                    <a name="contenido_principal"><?php echo "<h2>Cita de: ".$c."</h2>";?></a>
                </h1>
            </div>
            <ul id="second_menu">
                
            </ul>
            <div style="padding-top:1%; padding-bottom:2%; width:99%; text-align:justify;">
                <div style="margin-left: 2%;  width: 90%;">
                    <?php 
                    if(empty($imagenes) && $intentos!==null){
                        echo "No habia ningun archivo valido";
                        echo "<h3>Archivos enviados: ".$intentos."</h3>";
                        echo "<h3>Subidos: ".$subidas."</h3>";
                        echo "<h3>No subidos: ".$nosubidas."</h3><br/><hr><br/>";
                    }elseif($intentos!==null){
                           echo "<h3>Archivos enviados: ".$intentos."</h3>";
                           echo "<h3>Subidos: ".$subidas."</h3>";
                           echo "<h3>No subidos: ".$nosubidas."</h3><br/><hr><br/>";
                       
                       foreach ($imagenes as $key => $valor) {
                   ?>
                           <img class="imagenCita" class="imagenes" src="leer.php?imagen=<?php echo $imagenes[$key]; ?>"/>
                           <a class="borrar" href="borrar.php?numero=<?php echo $imagenes[$key]; ?>">Borrar</a>
                   <?php
                        }
                    }elseif($c==="" || $c===null || empty($imagenes)){
                        echo "No tiene cita";
                    }elseif(true){
                        foreach ($imagenes as $key => $valor) {
                   ?>
                           <img class="imagenCita" class="imagenes" src="leer.php?imagen=<?php echo $imagenes[$key]; ?>"/>
                           <a class="borrar" href="borrar.php?numero=<?php echo $imagenes[$key]; ?>">Borrar</a>
                   <?php
                        }
                    }
                   ?>
                </div>
                <br />
                <br />
            </div>
            <br />
            <a href="./../index.php" title="Atras">Volver</a>
            <div id="direcciones_junta">
                <ul style="margin-left:0px; padding-left:0px;" title="Lista con enlaces a direcciones web de la Junta de Andaluc&iacute;a">
                    <li><a href="http://www.juntadeandalucia.es/servicioandaluzdesalud/" title="Ir a la p&aacute;gina web del Servicio Andaluz de Salud">Servicio Andaluz de Salud</a></li>
                    <li><a href="http://www.juntadeandalucia.es/salud/principal/" title="Ir a la p&aacute;gina web de la Consejer&#237;a de Salud">Consejer&#237;a de Salud</a></li>
                    <li><a href="http://www.andaluciajunta.es" title="Ir a la p&aacute;gina web de la Junta de Andaluc&iacute;a">JUNTA DE ANDALUC&#205;A</a></li>
                </ul>
            </div>
            <span class="texto_oculto">Fin de la p&aacute;gina</span>
        </div>
        <script src="../js/intersas.js"></script>
    </body>
</html>
<script>
    var x = document.getElementsByClassName("borrar");
    for(var i= 0; i<x.length; i++){
        x[i].addEventListener("click", function(e){
        if(!confirm("¿Quieres borrar esta imagen?")){
            e.preventDefault();
        }
    });
    }
</script>