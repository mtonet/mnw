<!DOCTYPE html>
<?php $thisPage="Home"; ?>
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
            <div class="main-slogan">
                <div class="slogan1">
                    <h1>Construindo sua<br><b>presença digital</b></h1>
                    <img src="img/hr-pq.jpg">
                    <h2>Algumas de nossas soluções teste</h2>
                </div>
                <div class="slogan2">
                    <img src="img/slogan-img1.jpg">
                </div>
                <div class="slogan3">
                    <img src="img/slogan-img2.jpg">
                </div>
                <div class="slogan4">
                    <img src="img/slogan-img3.jpg">
                    <a href="desenvolvimento.php"><img src="img/bt-slogan.jpg"></a>
                </div>
            </div><!--Fim main-slogan-->
        <div class="resume">
            <img src="img/hr-gd.jpg">
            <h3>Presença digital em todas as <b>plataformas</b></h3>
            <h4>A Web de hoje não se resume apenas a computadores de mesa. É preciso pensar grande e longe. O mundo digital está mudando. Acompanhe esta mudança!</h4>
            <div><a href="estrategia.php"><img src="img/bt-resume.jpg"></a></div>
        </div><!--Fim resume-->
        <div class="destaque">
            <img src="img/hr-gd.jpg">
            <div class="txt-destaque">
            <h1><b>Destaque</h1>
            <p>Nosso mais recente case de sucesso!</p>
            <p class="nome-destaque">TV Paparazzi</p>
            <a target="_blank" href="http://www.tvpaparazzi.com.br"><img src="img/bt-destaque.jpg"></a>
            </div>
        </div><!--Fim destaque-->
        <div class="outros">
            <img src="img/hr-gd.jpg" class="hr0">
            <h1>Clientes</h1>
            <img src="img/hr-gd.jpg">
            <div class="left">
                <img src="img/fvc.jpg">
                <img src="img/omegamidia.jpg">
                <img src="img/jwt.jpg">
            </div>
            <div class="center">
                <img src="img/claritas.jpg">
                <img src="img/caluma.jpg">
                <img src="img/africa.jpg">
            </div>
            <div class="right">
                <img src="img/orto.jpg">
                <img src="img/paparazzi-logo.jpg">
                <img src="img/bazaar.jpg">
            </div>
        </div><!--Fim outros-->
     	<?php include("includes/footer.php"); ?>            
    </div><!--Fim container-->
</body>
</html>