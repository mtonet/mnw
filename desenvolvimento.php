<!DOCTYPE html>
<?php $thisPage="Desenvolvimento"; ?>
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
        <div class="desenvolvimento">
        <div class="breadcrumbs">
            	<h2>MãonaWeb <span>/ Desenvolvimento</span></h2>
            </div>
            <img src="img/hr-gd.jpg">
            <div class="top-internas">
            	<h1>Soluções em <b>Desenvolvimento</b></h1>
                <h3>Acompanhamos as mudanças com a velocidade e eficiência que a Web exige</h3>                
            </div>
            <img src="img/hr-gd.jpg">
            <ul>
            	<li>
                	<h4>Web Software</h4>
                    <h5>Sistemas, sites e todo seu conteúdo na Web. acesse de qualquer lugar, a qualquer hora</h5>                    
                    <!--<a href="#">Exemplo de projeto de Web Software</a>-->
                </li>
                <li class="li1">
                	<h4>Mobile</h4>
                    <h5>São milhões de aparelhos com acesso à internet no mundo todo. Vamos aparecer para eles?</h5> 
                    <!--<a href="#">Exemplo de projeto de Mobile</a>-->                   
                </li>
                <li class="li2">
                	<h4>Integração de API</h4>
                    <h5>O melhor de outros sites dentro do seu site. Mapas, vídeos, fotos. E isto é só o começo!</h5>                  
                    <!--<a href="#">Exemplo de projeto de API</a>-->
                </li>
                <li class="li3">
                	<h4>E-Commerce</h4>
                    <h5>Sua loja virtual personalizada, com a forma de pagamento e produtos que você quiser</h5>                    
                    <!--<a href="#">Exemplo de projeto de E-commerce</a>-->
                </li>
                <li class="li4">
                	<h4>Front End</h4>
                    <h5>HTML5, CSS3, PHP, Javascript. Performance e compatibilidade com os browsers atuais </h5>                   
                    <!--<a href="#">Exemplo de projeto de Front end</a>-->
                </li>
                <li class="li5">
                	<h4>Back End</h4>
                    <h5>Gerenciamento e desenvolvimento de sistemas, banco de dados, integração com outros sistemas</h5>                   
                    <!--<a href="#">Exemplo de projeto de Back end</a>-->
                </li>
                <li>
                	<h4>UI & UX</h4>
                    <h5>Considere a experiência do usuário como o reator ou o núcleo de uma marca. A união de elementos que permitem o usuário a interagir com um sistema</h5>                   
                    <!--<a href="#">Exemplo de projeto de UI & UX</a>-->
                </li>                
            </ul>
        </div>
   		  	<?php include("includes/footer.php"); ?>            
    </div><!--Fim container-->
</body>
</html>