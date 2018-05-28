<!DOCTYPE html>
<?php $thisPage="Estratégia Digital"; ?>
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
        <div class="estrategia">
        <div class="breadcrumbs">
            	<h2>MãonaWeb <span>/ Estratégia Digital</span></h2>
            </div>
            <img src="img/hr-gd.jpg">
            <div class="top-internas">
            	<h1>Soluções em <b>Estratégia Digital</b></h1>
                <h3>Muitas ferramentas para colocar sua empresa no mapa da Web</h3>                
            </div>
            <img src="img/hr-gd.jpg">
            <ul>
            	<li>
                	<h4>E-mail Marketing</h4>
                    <h5>Desenvolvimento e envio de E-mail Marketing, análise de resultados e relatórios de cliques e recebimento.</h5>                    
                    <!--<a href="#">Exemplo de projeto de Web Software</a>-->
                </li>
                <li class="li1">
                	<h4>Marketing de Busca</h4>
                    <h5>Links patrocinados, gerenciamento de campanhas Adwords, análise de métricas e resultados.</h5> 
                    <!--<a href="#">Exemplo de projeto de Mobile</a>-->                   
                </li>
                <li class="li2">
                	<h4>Display Marketing</h4>
                    <h5>Anúncios em Flash ou estáticos, Hotsites e direcionamento de campanhas</h5>                  
                    <!--<a href="#">Exemplo de projeto de API</a>-->
                </li>
                <li class="li3">
                	<h4>Redes Sociais</h4>
                    <h5>Estratégia de campanhas, páginas corporativas, análise de resultados. Tudo para melhorar e manter sua posição na web.</h5>                    
                    <!--<a href="#">Exemplo de projeto de E-commerce</a>-->
                </li>
                <li class="li4">
                	<h4>Monitoramento de Resultados</h4>
                    <h5>Relatórios "on-demand", estudo de usabilidade e análise de acessos por página.</h5>                   
                    <!--<a href="#">Exemplo de projeto de Front end</a>-->
                </li>
                <li>
                	<h4>Otimização e produção de conteúdo</h4>
                    <h5>SEO, SEM, Revisão ortográfica, Estudo de conteúdo (texto), arquitetura da informação.</h5>                   
                    <!--<a href="#">Exemplo de projeto de Back end</a>-->
                </li>                          
            </ul>
        </div>
   		  	<?php include("includes/footer.php"); ?>            
    </div><!--Fim container-->
</body>
</html>