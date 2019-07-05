<?php
?>
<html>
<head>
<link rel="icon" href="imagens/favicon.png">

<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/mouse.parallax.js" type="text/javascript"></script>
<style type="text/css">
	body{
		margin: 0;
	}
	html{
		background-color: rgba(0,0,0,0);
	}
	
	.row{
		padding-top: 50px;
		width: 100%;
	}
	.conteiner{
		position: absolute;
		width: 1000px;
		margin: 0 -500px;
		left:  50%;
		height: 880px;
		overflow: hidden;
	}
	/*CEU****************************/
	.seta{
		animation: seta 8s infinite;
		top: 150px;
		left: 200px;
		z-index: -2
	}
	.sol{
		animation: sol 120s infinite;
		top: 20px;
		left: 50px;
		z-index: 1
	}
	.nuvemP{
		animation: nuvens 2s infinite;
		width: 60px;
		top: 380px;
		left: 180px;
		z-index: 1
	}
	.nuvemM{
		animation: nuvens 3s infinite;
		width: 90px;
		top: 320px;
		left: 320px;
		z-index: 2
	}
	.nuvemG{
		animation: nuvens 4s infinite;
		width: 120px;
		top: 100px;
		left: 50px;
		z-index: 2
	}
	.nuvemGG{
		animation: nuvens 5s infinite;
		width: 140px;
		top: 210px;
		left: 540px;
		z-index: 4
	}
	.balao{
		animation: balao 10s infinite;
		top: 20px;
		left: 450px;
		z-index: 2
	}
	.passaroG{
		animation: passaro 20s infinite;
		width: 72px;
		top: 360px;
		left: 420px;
	}
	.passaroM{
		animation: passaro 25s infinite;
		width: 65px;
		top: 340px;
		left: 150px;
	}
	.passaroP{
		animation: passaro 30s infinite;
		width: 55px;
		top: 300px;
		left: 110px;
	}
	.folhaL{
		animation: folhas 1.5s infinite;
	    top: 319px;
	    left: 721px;
	    z-index: 0
	}
	.folhaR{
		animation: folhas 1.5s infinite;
	    top: 319px;
	    left: 771px;
	    z-index: 0
	}
	.gota1{
		animation: gotas 1s infinite;
	    top: 273px;
	    left: 560px;
	    z-index: 5
	}
	.gota2{
		animation: gotas 1s infinite;
	    top: 273px;
	    left: 590px;
	    z-index: 5
	}
	.gota3{
		animation: gotas 1s infinite;
	    top: 273px;
	    left: 620px;
	    z-index: 5
	}
	.gota4{
		animation: gotas .5s infinite;
	    top: 273px;
	    left: 575px;
	    z-index: 5
	}
	.gota5{
		animation: gotas .5s infinite;
	    top: 273px;
	    left: 605px;
	    z-index: 5
	}
	/*PAINEIS***************************/
	.painelR{
		top: 475px;
		left: 640px;
		z-index: 1
	}
	.painelL{
		top: 445px;
		left: 435px;
		z-index: 1
	}
	/*astes heolicas*********************/
	.aste_heolica1{
		top: 470px;
		left: 116px;
		z-index: 1
	}
	.aste_heolica2{
		top: 455px;
		left: 271px;
		z-index: 1
	}
	.aste_heolica3{
		top: 500px;
		left: 371px;
		z-index: 1
	}
	/*PAS heolicas****************/
	.pa_heolica1{
		top: 415px;
		left: 65px;
		z-index: 3
	}
	.pa_heolica2{
		top: 400px;
		left: 220px;
		z-index: 3
	}
	.pa_heolica3{
		top: 445px;
		left: 320px;
		z-index: 3
	}
	/*solo***************************/
	.fabrica{
	    top: 310px;
	    left: 710px;
	    z-index: 1
	}
	.setap{
		animation: setaP 3s infinite;
	    top: 364px;
	    left: 830px;
	    z-index: 1
	}
	.noSolo{
		 z-index: 1;
	}
	.montanha_front{
		top: 540px;
		left: 240px;
		z-index: 3;
	}
	.montanha_back{
		top: 480px;
		left: 20px;
		z-index: 2
	}
	.solo{
		top: 557px;
		left: 10px;
		z-index: 4
	}
	.row .conteiner img{
		position: absolute;
		-webkit-user-drag: none;
		  -khtml-user-drag: none;
		  -moz-user-drag: none;
		  -o-user-drag: none;
		  user-drag: none;
	}
	/*ANIMÇÔES****************/

	@keyframes seta {
	    0% {
	    	opacity: 0;
	        transform: rotate(45deg);
	        animation-timing-function: linear;
	    }
	    50% {
	    	opacity: 1;
	        transform: rotate(-90deg);
	         animation-timing-function: linear;
	    }
	    100% {
	    	opacity: 0;
	        transform: rotate(-225deg);
	         animation-timing-function: linear;
	    }
	}

	@keyframes nuvens {
	    0% {
	        transform: translate3d(0px, 0px, 0px);
	        animation-timing-function: ease-in;
	    }
	    50% {
	        transform: translate3d(10px, 2px, 0px);
	         animation-timing-function: ease-in;
	    }
	    100% {
	        transform: translate3d(0px, 0px, 0px);
	         animation-timing-function: ease-in;
	    }
	}

	@keyframes folhas {
	    0% {
			opacity: 1;
	        transform: translate3d(0px, 0px, 0px) scale(0.2);
	         animation-timing-function: ease-in-out;
	    }
	    100% {
	        transform: translate3d(0px, -100px, 0px);
	         animation-timing-function: linear;
	        opacity: 0;
	    }
	}
	@keyframes gotas {
	    0% {
			opacity: 1;
	        transform: translate3d(0px, 0px, 0px);
	         animation-timing-function: linear;
	    }
	    50% {
	    	opacity: 1;
	        transform: translate3d(0px, 100px, 0px);
	         animation-timing-function: linear;
	    }
	    100% {
	        transform: translate3d(0px, 200px, 0px);
	         animation-timing-function: linear;
	        opacity: 0;
	    }
	}
	@keyframes sol {
	   from {
	        transform:rotate(0deg);
	        animation-timing-function: linear;
	    }
	    to {
	        transform:rotate(360deg);
	        animation-timing-function: linear;
	    }
	}
	@keyframes setaP {
	   from {
	        transform:rotate(0deg);
	        animation-timing-function: linear;
	    }
	    to {
	        transform:rotate(360deg);
	        animation-timing-function: linear;
	    }
	}
	@keyframes passaro {
	    0% {
	        transform: translate3d(0px, 0px, 0px);
	        animation-timing-function: ease-in;
	    }
	    25% {
	        transform: translate3d(-70px, -30px, 0px);
	         animation-timing-function: ease-in;
	    }
	    50% {
	        transform: translate3d(-45px, -50px, 0px);
	         animation-timing-function: ease-in;
	    }
	    75% {
	        transform: translate3d(30px, -60px, 0px);
	         animation-timing-function: ease-in;
	    }
	    100% {
	        transform: translate3d(0px, 0px, 0px);
	         animation-timing-function: ease-in;
	    }
	}
	@keyframes balao {
	    0% {
	        transform: translate3d(0px, 0px, 0px);
	        animation-timing-function: ease-in;
	    }
	    25% {
	        transform: translate3d(2px, 15px, 0px) scale(1.08);
	         animation-timing-function: ease-in;
	    }
	    50% {
	        transform: translate3d(10px, 7px, 0px);
	         animation-timing-function: ease-in;
	    }
	    75% {
	        transform: translate3d(-5px, 4px, 0px) scale(0.9);
	         animation-timing-function: ease-in;
	    }
	    100% {
	        transform: translate3d(0px, 0px, 0px) ;
	         animation-timing-function: ease-in;
	    }
	}
	.rotacao{
		-webkit-animation-name: rotacao_heolica;
	    -webkit-animation-duration: 4000ms;
	    -webkit-animation-iteration-count: infinite;
	    -webkit-animation-timing-function: linear;
	    -moz-animation-name: rotacao_heolica;
	    -moz-animation-duration: 4000ms;
	    -moz-animation-iteration-count: infinite;
	    -moz-animation-timing-function: linear;
	    -ms-animation-name: rotacao_heolica;
	    -ms-animation-duration: 4000ms;
	    -ms-animation-iteration-count: infinite;
	    -ms-animation-timing-function: linear;
	    
	    animation-name: rotacao_heolica;
	    animation-duration: 4000ms;
	    animation-iteration-count: infinite;
	    animation-timing-function: linear;
	}
	@-moz-keyframes rotacao_heolica {
	    from { -moz-transform: rotate(0deg); }
	    to { -moz-transform: rotate(360deg); }
	}
	@-webkit-keyframes rotacao_heolica {
	    from { -webkit-transform: rotate(0deg); }
	    to { -webkit-transform: rotate(360deg); }
	}
	@keyframes rotacao_heolica {
	    from {
	        transform:rotate(0deg);
	    }
	    to {
	        transform:rotate(360deg);
	    }
	}
	#ceu_alto, #oSolo, #noSolo, #ceu_voando, #ceu_meio, #usina_heolica, #paineis, #meioSolo{
		position: absolute;
	}
/*
	.classname {
		-webkit-animation: cssAnimation 1s 16 ease-in;
		-moz-animation: cssAnimation 1s 16 ease-in;
		-o-animation: cssAnimation 1s 16 ease-in;
	}
	@-webkit-keyframes cssAnimation {
		from { -webkit-transform: rotate(4deg) scale(1.132) skew(1deg) translate(11px); }
		to { -webkit-transform: rotate(4deg) scale(1.208) skew(1deg) translate(11px); }
	}
	@-moz-keyframes cssAnimation {
		from { -moz-transform: rotate(4deg) scale(1.132) skew(1deg) translate(11px); }
		to { -moz-transform: rotate(4deg) scale(1.208) skew(1deg) translate(11px); }
	}
	@-o-keyframes cssAnimation {
		from { -o-transform: rotate(4deg) scale(1.132) skew(1deg) translate(11px); }
		to { -o-transform: rotate(4deg) scale(1.208) skew(1deg) translate(11px); }
	}
	*/
	.banner img{
		width: 100%
	}
	footer{
		position: absolute;
		bottom: 0;
		width: 100%;
		height: 80px;
		font-family: sans-serif;
		color: #2D7AA6;
	}
	footer .contato{
		width: 300px;
	    margin: 0 auto;
	    text-align: center;
	}
	.fbonfim{
		position: absolute;
	    right: 15px;
	    top: 20px;
	    font-size: 10px;
	}
	footer a{
		color: #2D7AA6;
		text-decoration: none;
	}
	footer a:visited{
		color: #2D7AA6;
	}
</style>
</head>
<body>
<div class="row">
	<div class="conteiner">
		<img class="seta" src="imagens/seta.png">
		<div id="ceu_alto">
			<img class="sol" src="imagens/sol.png">
		</div>
		<div id="ceu_meio">
			<img class="nuvem_anim nuvemP" src="imagens/nuven.png">
			<img class="nuvem_anim nuvemM" src="imagens/nuven.png">
			<img class="nuvem_anim nuvemG" src="imagens/nuven.png">
			<img class="nuvem_anim nuvemGG" src="imagens/nuven.png">
		</div>
		<div id="ceu_voando">
			<img class="balao" src="imagens/balao.png">
			<img class="passaros passaroP" src="imagens/passaro.gif">
			<img class="passaros passaroM" src="imagens/passaro.gif">
			<img class="passaros passaroG" src="imagens/passaro.gif">
			<img class="folhaL" src="imagens/folhas.png">
			<img class="folhaR" src="imagens/folhas.png">
			<img class="gota1" src="imagens/gota.png">
			<img class="gota2" src="imagens/gota.png">
			<img class="gota3" src="imagens/gota.png">
			<img class="gota4" src="imagens/gota.png">
			<img class="gota5" src="imagens/gota.png">
		</div>
		<div id="usina_heolica">
			<img class="aste_heolica1" src="imagens/heolica_aste.png">
			<img class="aste_heolica2" src="imagens/heolica_aste.png">
			<img class="aste_heolica3" src="imagens/heolica_aste.png">
			<img class="rotacao pa_heolica1" src="imagens/heolica_pa.png">
			<img class="rotacao pa_heolica2" src="imagens/heolica_pa.png">
			<img class="rotacao pa_heolica3" src="imagens/heolica_pa.png">
		</div>
		<div id="paineis">
			<img class="painelL" src="imagens/painel_solar.png">
			<img class="painelR" src="imagens/painel_solar.png">
			<img class="fabrica" src="imagens/fabrica.png">
			<img class="setap" src="imagens/setap.png">
		</div>
		<div id="noSolo">
			<img class="montanha_back" src="imagens/montanha_back.png">
		</div>
		<div id="meioSolo">
			<img class="montanha_front" src="imagens/montanha_front.png">
		</div>
		<div id="oSolo">
			<img class="solo" src="imagens/solo.png">	
		</div>
		<footer id="footer">
			<div class="contato"><b>Fale Conosco:</b><br>
				<a href="mailto:queroneutralizar@epmconsultoria.com ">queroneutralizar@epmconsultoria.com </a><br>
				+55 (61) 8104 0481<br>
			</div>
			<a class="fbonfim" href="http://fernandobonfim.esy.es" target="blank">By. FBonfim.</a>
		</footer>
	</div>
</div>
	

</body>
</html>
<script>
   $(document).ready(function(){
   		$('#ceu_alto').mouseParallax({ moveFactor: 1 });
   		$('#oSolo').mouseParallax({ moveFactor: 1 });
   		$('#noSolo').mouseParallax({ moveFactor: 2 });
   		$('#meioSolo').mouseParallax({ moveFactor: 3 });
		$('#paineis').mouseParallax({ moveFactor: 3 });
		$('#usina_heolica').mouseParallax({ moveFactor: 4 });
		$('#ceu_voando').mouseParallax({ moveFactor: 3 });
		$('#ceu_meio').mouseParallax({ moveFactor: 3 });
   });
</script>