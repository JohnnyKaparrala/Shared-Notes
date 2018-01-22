<html>
<head>
	<meta charset="utf-8">
	<link href="materialize/css/Material+Icons.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="materialize/css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="materialize/css/materialize.css">
	<script type="text/javascript" src="materialize/js/materialize.js"></script>
	<script type="text/javascript" src="materialize/js/materialize.min.js"></script>
</head>
<body>
	 <div class="docPerfil">
      <div class="container" style="grid-area: infoUm;display: grid;">
      	<div class="section">
      		<h4 class="light flow-text dSBlue-txt">Batatas Carinhosas(1.6)</h4>
      	</div>
      	<div class="section">
	      	<h6 class="dSBlue-txt" style="margin-left: 1em">Descrição:</h6>
	      	<div class="cinza" style="padding:1em;">
	      		<div class="flow-text" style="font-size: 1.1em;">
			      	<p class="margin0">Lorem ipsum dolor sit amet, cum ex impetus scripserit, paulo referrentur signiferumque vis ad. Usu ex erat petentium definiebas, recusabo posidonium nam id, has error ceteros ex. Vidisse fierent periculis sit no, vix at utinam propriae forensibus. Dignissim sententiae cum et, an duo fugit efficiantur.</p>
			      	<p class="margin0">Eros vero urbanitas at vix, usu sale scriptorem in. At nec atqui molestiae. Meis viderer facilis ius eu. Persius dolores per no.</p>
			      </div>
	      	</div>
	      </div>
	      <div class="section">
      		<h6 class="dSBlue-txt" style="margin-left: 1em">Notas de versão:</h6>
      		<div class="flow-text cinza" style="font-size: 1.1em ;padding:1em">
		      	<ul class="margin0">
		      		<li>- Bug fix</li>
		      		<li>- Novo menu</li>
		      		<li>- Novos features</li>
		      	</ul>
	      	</div>
      	</div>
      	<div class="section">
      		<h6 class="dSBlue-txt" style="margin-left: 1em">Outras versões:</h6>
      		<div class="flow-text cinza" style="font-size: 1.1em;padding:1em">
		      	
      			<!-- projeto menor-->

	      	</div>
      	</div>
      </div>
      <div class="" style="grid-area: infoDois;display: grid;">
      	<div id="infoDois" style=" position: fixed">
      		<div class="section">
      			<img src="c.jpg" width="220px">
      		</div>
      		<div class="section">
      			
      		</div>
      		<div class="section">
      			
      		</div>
      		<div class="section">
      			
      		</div>
      	</div>
      </div>
    </div>
</body>
<script type="text/javascript">
	var initTopPosition= $('#infoDois').offset().top;   
		$(window).scroll(function(){
		    if($(window).scrollTop() > initTopPosition)
		        $('#infoDois').css({'position':'fixed','top':'0px'});
		    else
		        $('#infoDois').css({'position':'absolute','top':initTopPosition+'px'});
		});
</script>
</html>