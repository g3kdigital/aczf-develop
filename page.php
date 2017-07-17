<?php get_header(); ?>
<!--=================================
  INDICE
  ===================================
	* PORTADA 
	* CONTENIDO
	* BOTONES POP UP
-->

<main id="comercio-exterior" class="contenido pagina <?php the_field('pagina_cssclass')?>">
<!--=================================
* PORTADA 
=================================--> 
	<h1 class="cover">
      <strong class="titulo">
      	<?php the_title()?>
      </strong>
      <span class="icono"></span>
    </h1><!--FIN COVER-->

<!--=================================
* CONTENIDO
=================================--> 
    <article class="articulo">

		<figure class="img-container">
			<img class="logo bspsa" src="img/bspsa-logo.gif" alt="Agencia de Aduanas Nivel 1, BSP S.A." />
		</figure>
		<div class="grupo">
			<p class="parrafo">
		  		Gracias a nuestra experiencia, brindamos a nuestros clientes la asesoría necesaria para llevar a cabo todas las operaciones legales en comercio exterior, tales como importaciones, exportaciones y tránsitos aduaneros.
			</p>
			<p 	class="parrafo">
		 		 Apoyamos a nuestros clientes en el cumplimiento de sus requisitos legales, relacionados con:
			<ul class="listado vertical">
		      <li class="item">La clasificación arancelaria de sus productos.</li>
		      <li class="item">La elaboración de contratos de negociación internacional.</li>
		      <li class="item">El cumplimiento de requisitos de productos, que requieren Norma Técnica, Licencias o Registros de Importación, Certificados Fitosanitarios y Zoosanitarios, etc.</li>
		      <li class="item">La consecución de proveedores (fabricantes) en el exterior.</li>
		      <li class="item">La gestión de trámites ante los entes de control (DIAN, Invima, Ica, Superintendencia de Industria y Comercio, etc)</li>
		      <li class="item">La Gestión integral de Exportaciones</li>
			</ul>
			<p class="parrafo">
		  		Contamos con oficinas en Cartagena, Buenaventura, Medellín, Leticia y Cali. AGENCIA DE ADUANAS BSP S.A. NIVEL 1 
			</p>
		</div>

<!--=================================
* BOTONES POP UP
=================================-->
      <section class="botones">
        <a href="cotice-servicios.html" class="boton popup cotiza">
          COTICE SERVICIOS
        </a>
        <a href="http://181.143.150.243/Consultas" class="boton externo inventario" target="_blank">
          CONSULTE SU INVENTARIO
        </a>  
        <button class="boton popup  equipo">
          NUESTRO EQUIPO
        </button>
        <button class="boton popup  ventajas">
          NUESTRA VENTAJA COMPETITIVA
        </button>
        <button class="boton popup  consejos">
          CONSEJOS DE SEGURIDAD PARA SU CARGA
        </button>
      </section><!--FIN MENU BOTONES-->

    </article><!--FIN DE CONTENIDO-->

  </main><!--FIN CONTENIDO PAGINA PLANTILLA-->

<?php get_footer(); ?>
