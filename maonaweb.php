<!DOCTYPE html>
<?php $thisPage="A MãonaWeb"; ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>MãonaWeb<?php if ($thisPage!="")  echo " | $thisPage"; ?></title>
<link rel="stylesheet" type="text/css" href="css/estilo.css" />
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-31544802-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>

<body>
	<div class="container">    	
        <header class="menu">
            <?php include("includes/navigation.php"); ?>
        </header>
        <div class="maonaweb">
        	<div class="breadcrumbs">
            	<h2>MãonaWeb <span>/ A MãonaWeb</span></h2>
            </div>
            <img src="img/hr-gd.jpg">
            <div class="top-internas">
            	<h1>A <b>MãonaWeb</b></h1>
                <h3>Conheça mais sobre nosso trabalho</h3>                
            </div>
            <img src="img/hr-gd.jpg">
            <div class="maonaweb1">
            	<p>Por ser uma empresa jovem e moderna a MãonaWeb tem como foco a sua <b>presença digital.</b></p>
                <p>O relacionamento direto entre empresa e cliente é algo básico, mas <b>o diferencial</b> está nas ferramentas utilizadas 
                no <b>desenvolvimento</b> desse <b>relacionamento</b>, é aí que a MãonaWeb arrojada, sem burocracia, com tecnologia e excelência
                 de atendimento traz para seu cliente a presença na Web.</p>
                 <p>Com segurança, criatividade e desenvolvimento ágil os <b>resultados</b> serão <b>sempre alcançados</b>. A MãonaWeb vê seu <b>cliente</b> como um <b>parceiro</b>, 
                 porque nenhum de nós é tão inteligente quanto nós juntos.</p>
                 <p class="last"><b>Deixe seu projeto na MãonaWeb!<br>Cliente + MãonaWeb =</b><img class="presenca" src="img/presenca.jpg"></p>                 
            </div>
            <img src="img/hr-gd.jpg">
            <div class="maonaweb2">
            	<div class="txt-maonaweb2">
                <h1>O que <b>fazemos?</b></h1>
                <h2>Entendemos sua necessidade</h2>
                <p>Identificar soluções que combinem com o seu negócio e eliminar os obstáculos de comunicação entre fornecedor e cliente. Estamos aqui para isso.</p>
                </div>
                <div class="txt-maonaweb3">
                	<div class="left">
                    <h3>Desenvolvimento</h3>
                    <h4>Web Software, Mobile, Integração de API, E-commerce, Front end, Back end, UI & UX</h4>
                    <a href="desenvolvimento.php">Saiba mais</a>
                    </div>
                    <div class="right">
                    <h3>Estratégia Digital</h3>
                    <h4>E-mail Marketing, Marketing de busca, Display Marketing, Redes sociais</h4>
                    <a href="estrategia.php">Saiba mais</a>
                    </div>
                </div>                
            </div>
        </div>        
   		  	<?php include("includes/footer.php"); ?>            
    </div><!--Fim container-->
</body>
</html>