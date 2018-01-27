<ul id="slide-out" class="side-nav">
  <li><div class="user-view">
    <div class="background">

    </div>
    
  </div></li>
  <li><a href="#!"><i class="material-icons">cloud</i>First Link With Icon</a></li>
  <li><a href="#!">Second Link</a></li>
  <li><div class="divider"></div></li>
  <li><a class="subheader">Subheader</a></li>
  <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
</ul>


<div>
	<nav class="lBlue nav">
		<div class="container nav-wrapper">
			<div>
				<ul class="brand-logo dBlue-txt">
					<img src="../imagens/s/logo.png" width="64" class="hide-on-med-and-down">
					<a data-activates="slide-out" title="Menu" class="show-on-medium-and-down"><i class="large material-icons" style="font-size: 2.7em;">menu</i></a>
				</ul>
			<ul id="nav-mobile" class="right hide-on-med-and-down">
	      <li >
	      	<a href="../pr.php?p=1">
						<div class="perfil-dois" id="7" title="Fulano de Talaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa">
							<div class="valign-wrapper">
								<img class=" circle" src="a.jpg" width="50" >
							</div>
							<div class="truncate ">
								Fulano de Talaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
							</div>
						</div>
					</a>
				</li>
				<li>
	        <a href="c.php">
						<div>
							<i class=" tab large material-icons" title="Configurações">settings</i>
						</div>
					</a>	
	      </li>
				<li>
	        <a href="a.php">
						<div>
							<i class=" tab large material-icons" title="Ajuda">help_outline</i>
						</div>
					</a>	
	      </li>
				<li>
					<a href="sair.php">
						<div>
							<i class="tab large material-icons" title="Sair">power_settings_new</i>
						</div>
					</a>
	      </li>
	    </ul>
		</div>
	</nav>
</div>

<nav id="sub_menu" class="dBlue valign-wrapper" style="height: 49px; position:absolute; z-index: 100000">
	<div class="nav-content container" >
    <ul class="tabs tabs-transparent">
    	<?php
    		$pag = $_SERVER['REQUEST_URI'];
    		$arq = end(explode("/", $pag));

    		if (strpos($arq, 'e.php') === false) {
    		?>
	      <li id="li1" class="tab" title="Home"><a id="a1" onclick="parJs(1)"><i class="large material-icons ">home</i></a></li>
		    <li id="li2" class="tab" title="Atividade recente"><a id="a2" onclick="parJs(2)"><i class="large material-icons ">notifications</i></a></li>
		    <li id="li3" class="tab" title="Seguidores"><a id="a3" onclick="parJs(3)"><i class="large material-icons ">group</i></a></li>
		    <li id="li4" class="tab hide-on-med-and-down" title="Publicar um projeto"><a id="a4" onclick="parJs(4)"><i class="large material-icons ">create_new_folder</i></a></li>
		    <li id="li5" class="tab hide-on-med-and-down" title="Projetos"><a id="a5" onclick="parJs(5)"><i class="large material-icons ">folder</i></a></li>
		    <li id="li6" class="tab hide-on-med-and-down" title="Perguntas"><a id="a6" onclick="parJs(6)"><i class="large material-icons ">question_answer</i></a></li>
		   	<?php
		   	}else{
		   	?>
		   	<li id="li1" onclick = 'loadDoc(1)' class="tab" title="Home"><a id="a1"><i class="large material-icons ">home</i></a></li>
		    <li id="li2" onclick = 'loadDoc(2)' class="tab" title="Atividade recente"><a id="a2"><i class="large material-icons ">notifications</i></a></li>
		    <li id="li3" onclick = 'loadDoc(3)' class="tab" title="Seguidores"><a id="a3"><i class="large material-icons ">group</i></a></li>
		    <li id="li4" onclick = 'loadDoc(4)' class="tab hide-on-med-and-down" title="Publicar um projeto"><a id="a4"><i class="large material-icons ">create_new_folder</i></a></li>
		    <li id="li5" onclick = 'loadDoc(5)' class="tab hide-on-med-and-down" title="Projetos"><a id="a5"><i class="large material-icons ">folder</i></a></li>
		    <li id="li6" onclick = 'loadDoc(6)' class="tab hide-on-med-and-down" title="Perguntas"><a id="a6"><i class="large material-icons ">question_answer</i></a></li>
		   		<?php
		   	}
	    ?>
	    <li class="right">
		    <div class="input-field" title="Procurar no site">
		    	<label class="label-icon" style="margin-top: -14px"><i class="material-icons">search</i></label>
        	<input id="search" type="search" style="width: 15em">
   		  </div>
		  </li>
    </ul>
  </div>
</nav>

<script>
	var initTopPosition= $('#sub_menu').offset().top;   
		$(window).scroll(function(){
		    if($(window).scrollTop() > initTopPosition)
		        $('#sub_menu').css({'position':'fixed','top':'0px'});
		    else
		        $('#sub_menu').css({'position':'absolute','top':initTopPosition+'px'});
		});
</script>

<script type="text/javascript">

	function onload(){
		setTimeout(function(){
			$("li.indicator").css("display","none");

		 	for(i = 1; i <= 6; i++){
		  	if ( $("#a" + i).hasClass("active") ){
		  		$("#a" + i).removeClass("active");
		  			break;
		  	}
		  }

			pag = window.location.href;
		},1);
	}

	function loadDoc(doc) {
	  var xhttp = new XMLHttpRequest();
	  xhttp.onreadystatechange = function() {
	    if (this.readyState == 4 && this.status == 200) {
	      document.getElementById("loader").innerHTML = this.responseText;
	    }
	  };

	  for(i = 1; i <= 6; i++){
	  	if ( $("#li" + i).hasClass("active") ){
	  		$("#li" + i).removeClass("active");
	  			break;
	  	}
	  }


		var body = $("html, body");
		body.stop().animate({scrollTop:0}, 200, 'swing', function() {});

	  var m = document.cookie;
	  if(doc == 0){
	  	if(m === null || m == ""){
	  		doc = 1;
	  	}else{
	  		doc = parseInt(m);
	  	}
	  }

	  console.log(m);

	  var pagina;
	  switch(doc){
	  	case 1:{
	  		pagina = "h.php";
	  		document.title = "Home - Shared Notes";
	  		document.getElementById("a1").classList.add('active');
	  		document.getElementById("li1").classList.add('active');
	  		document.cookie = "1";
	  	}break;

	  	case 2:{
	  		pagina = "ar.php";
	  		document.title = "Atividades recentes - Shared Notes";
	  		document.getElementById("a2").classList.add('active');
	  		document.getElementById("li2").classList.add('active');
	  		document.cookie = "2";
	  	}break;

	  	case 3:{
	  		pagina = "s.php";
	  		document.title = "Seguidores - Shared Notes";
	  		document.getElementById("a3").classList.add('active');
	  		document.getElementById("li3").classList.add('active');
	  		document.cookie = "3";
	  	}break;

	  	case 4:{
	  		pagina = "pup.php";
	  		document.title = "Projeto novo - Shared Notes";
	  		document.getElementById("a4").classList.add('active');
	  		document.getElementById("li4").classList.add('active');
	  		document.cookie = "4";
	  	}break;

	  	case 5:{
	  		pagina = "pp.php";
	  		document.title = "Projetos - Shared Notes";
	  		document.getElementById("a5").classList.add('active');
	  		document.getElementById("li5").classList.add('active');
	  		document.cookie = "5";
	  	}break;

	  	case 6:{
	  		pagina = "p.php";
	  		document.title = "Perguntas - Shared Notes";
	  		document.getElementById("a6").classList.add('active');
	  		document.getElementById("li6").classList.add('active');
	  		document.cookie = "6";
	  	}break;

	  	default:{
	  		pagina = "Erro 69. Essa página não existe. <b>:(</b>";
	  	}
		}

	  xhttp.open("GET", pagina, true);
	  xhttp.send();
	}

	function parJs(tab){
		document.cookie = tab;
		window.location.href = "e.php";
	}

	$(".button-collapse").sideNav('show');
</script>