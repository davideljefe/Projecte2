<!DOCTYPE html>
<html>
    <head>
	
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		  
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    <link type="text/css" rel="stylesheet" href="index.css">
		<link type="text/css" rel="stylesheet" href="footer.css">
    <link type="text/css" rel="stylesheet" href="quisom.css">
    <link rel="stylesheet" href="fonts.css">
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="boto.js"></script>

		<title>SOBRE NOSALTRES</title>

    </head>

<body>
	<header>  
		<?php include("../src/vistes/header.php")?>
    </header>
<span class="up-button icon-arrow-up2"></span>
<section class="contingut">
<div class="contenttitol"><h1 class="titol">QUI SOM?</h1></div>
<br>

<p style="margin-right: 15px; text-align: justify; margin-left: 15px;">ABP és grup d'estudiants amb una idea de negoci format al 20121. Hem aconseguit obrir un hotel de tres estrelles situat a Figueres, la capital de l'Alt Empordà. En el nostre hotel hi podreu trobar allotjament per un preu econòmic durant totes les èpoques de l'any. El grup ABP sóm un projecte que acaba de néixer i amb molts plans de futur, però per ara només tenim aquest hotel però al nostra idea és expandir-nos a altres pobles i ciutats de Catalunya.</p>
<br>

<div style="text-align: center; margin-bottom: 50px">
<h3 style="margin-bottom: 20px;">On trobar-nos?</h3>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2952.2255688067917!2d2.962496514957594!3d42.27370804854392!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12ba8dd91251e3ff%3A0xe8dfb11cd9cdef78!2sInstitut%20Cendrassos!5e0!3m2!1ses!2ses!4v1636394894652!5m2!1ses!2ses" width="100%" height="480" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>

<div style="text-align: center; margin-bottom: 50px">
<h3 style="margin-bottom: 20px;">Contacta</h3>

<div class="contact_form">
  <h5>Escriu-nos i ens posarem en contacte el més aviat possible!</h5>
    <div class="formulario">      

          <form action="submeter-formulario.php" method="post">       

                <p>
                  <label for="nombre" class="colocar_nombre">Nom.
                    <span class="obligatorio">*</span>
                  </label>
                    <input type="text" name="introducir_nombre" id="nombre" required="obligatorio" placeholder="Escriu el teu nom">
                </p>
              
                <p>
                  <label for="email" class="colocar_email">Correu.
                    <span class="obligatorio">*</span>
                  </label>
                    <input type="email" name="introducir_email" id="email" required="obligatorio" placeholder="Escriu el teu correu">
                </p>
            
                <p>
                  <label for="telefone" class="colocar_telefono">Telèfon.
                  </label>
                    <input type="tel" name="introducir_telefono" id="telefono" placeholder="Escriu el teu telèfon">
                </p>
                <p>
                  <label for="asunto" class="colocar_asunto">Asumpte.
                    <span class="obligatorio">*</span>
                  </label>
                    <input type="text" name="introducir_asunto" id="assunto" required="obligatorio" placeholder="Escriu u assumpte">
                </p>    
              
                <p>
                  <label for="mensaje" class="colocar_mensaje">Missatge.
                    <span class="obligatorio">*</span>
                  </label>                     
                                    <textarea name="introducir_mensaje" class="texto_mensaje" id="mensaje" required="obligatorio" placeholder="Deixa el teu comentari..."></textarea> 
                                </p>                    
              
                <button type="submit" name="enviar_formulario" id="enviar"><p>Enviar</p></button>

                <p class="aviso">
                  <span class="obligatorio"> * </span>Els camps són obligatoris.
                </p>          
            
          </form>
    </div>  
  </div>
</div>
</section>
<footer class="text-center footer-style">
	<?php include("../src/vistes/footer.php"); ?>
</footer>

</body>



</html>