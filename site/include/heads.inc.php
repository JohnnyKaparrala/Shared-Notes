<ul id="slide-out" class="side-nav hide-on-large-only">
	<li>
  	<a href="../site/perf.php?p=1">
			<div class="perfil-dois" id="7" title="Fulano de Talaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa">
				<div class="valign-wrapper">
					<img class=" circle" src="a.jpg" width="46" >
				</div>
				<div class="truncate ">
					Fulano de Talaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
				</div>
			</div>
		</a>
	</li>
	<li><div class="divider"></div></li>
	<?php
	$pag = $_SERVER['REQUEST_URI'];
	$arq = end(explode("/", $pag));

	if (strpos($arq, 'e.php') === false) {
	?>
  <li class="pointer"><a onclick="parJs(4)"><i class="tab small material-icons ">create_new_folder</i> <span>Publicar um projeto</span></a></li>
  <li class="pointer"><a onclick="parJs(5)"><i class="tab small material-icons ">folder</i><span>Projetos</span></a></li>
  <li class="pointer"><a onclick="parJs(6)"><i class="tab small material-icons ">question_answer</i><span>Perguntas</span></a></li>
	<?php
 	}else{
 	?>
  <li class="pointer" onclick = 'loadDoc(4)'><a> <i class="tab small material-icons ">create_new_folder</i> <span>Publicar um projeto</span></a></li>
  <li class="pointer" onclick = 'loadDoc(5)'><a> <i class="tab small material-icons ">folder</i> <span>Projetos</span></a></li>
  <li class="pointer" onclick = 'loadDoc(6)'><a> <i class="tab small material-icons ">question_answer</i> <span>Perguntas</span></a></li>
  <?php
	 	}
	?>
	<li><div class="divider"></div></li>
	<li><a href="conf.php"><i class=" tab small material-icons" title="Configurações">settings</i><span>Configurações</span></a>	</li>
	<li><a href="ajuda.php"><i class=" tab small material-icons" title="Ajuda">help_outline</i><span>Ajuda</span></a>	</li>
	<li><a href="sair.php"><i class="tab small material-icons" title="Sair">power_settings_new</i><span>Sair</span></a></li>
</ul>

<div>
	<nav class="lBlue nav">
		<div class="container nav-wrapper">
			<div>
				<ul class="brand-logo dBlue-txt">
					<img src="../imagens/s/logo.png" width="64" class="hide-on-med-and-down">
					<a href="#" data-activates="slide-out" title="Menu" class="button-collapse show-on-medium-and-down"><i class="large material-icons" style="font-size: 2.7em;">menu</i></a>
				</ul>
				<ul id="nav-mobile" class="right hide-on-med-and-down">
		      <li>
		      	<a href="../site/perf.php?p=1"><div class="perfil-dois" id="7" title="Fulano de Talaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa"><div class="valign-wrapper"><img class=" circle" src="a.jpg" width="50" ></div>
						<div class="truncate ">Fulano de Talaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</div></div></a>
					</li>
					<li><a href="conf.php"><div><i class=" tab large material-icons" title="Configurações">settings</i></div></a>	</li>
					<li><a href="ajuda.php"><div><i class=" tab large material-icons" title="Ajuda">help_outline</i></div></a></li>
					<li><a href="sair.php"><div><i class="tab large material-icons" title="Sair">power_settings_new</i></div></a></li>
		  	</ul>
			</div>
		</div>
	</nav>
</div>

<nav id="sub_menu" class="dBlue valign-wrapper" style="height: 49px; position:absolute; z-index: 30">
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
		$(document).ready(function(){
			$("li.indicator").css("display","none");

		 	for(i = 1; i <= 6; i++){
		  	if ( $("#a" + i).hasClass("active") ){
		  		$("#a" + i).removeClass("active");
		  			break;
		  	}
		  }

			pag = window.location.href;
		},90);
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

	  var pagina;
	  switch(doc){
	  	case 1:{
	  		pagina = "home.php";
	  		document.title = "Home - Shared Notes";
	  		document.getElementById("a1").classList.add('active');
	  		document.getElementById("li1").classList.add('active');
	  		document.cookie = "1";
	  	}break;

	  	case 2:{
	  		pagina = "atirec.php";
	  		document.title = "Atividades recentes - Shared Notes";
	  		document.getElementById("a2").classList.add('active');
	  		document.getElementById("li2").classList.add('active');
	  		document.cookie = "2";
	  	}break;

	  	case 3:{
	  		pagina = "seg.php";
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
	  		pagina = "projaba.php";
	  		document.title = "Projetos - Shared Notes";
	  		document.getElementById("a5").classList.add('active');
	  		document.getElementById("li5").classList.add('active');
	  		document.cookie = "5";
	  	}break;

	  	case 6:{
	  		pagina = "pergaba.php";
	  		document.title = "Perguntas - Shared Notes";
	  		document.getElementById("a6").classList.add('active');
	  		document.getElementById("li6").classList.add('active');
	  		document.cookie = "6";
	  	}break;

	  	default:{
	  		pagina = "Erro 1. Essa página não existe. <b>:(</b>";
	  	}
		}

	  xhttp.open("GET", pagina, true);
	  xhttp.send();
	}

	function parJs(tab){
		document.cookie = tab;
		window.location.href = "e.php";
	}

	$(document).on('click', "a.dl", function() {
		Materialize.toast('Adicionado aos downloads!', 4000);
	});

	$(document).on('click', "a.coment", function() {
		var comentario = $("#textarea1").val().trim();
		comentario = comentario.replace(/\n\r?/g, '<br />');

		if( comentario.length == 0){
			return;
		}

		var data = new FormData();
		data.append('comentario', comentario);
		//data.append('pwd', 'password');

	  var xhttp = new XMLHttpRequest();
	  
	  xhttp.onreadystatechange = function() {
    	if (this.readyState == 4 && this.status == 200) {
    		$(this.responseText).hide().prependTo("#area-comentarios").fadeIn();
      	//$("#area-comentarios").prepend(this.responseText);
    	}
    }
    xhttp.open("POST", "inscoment.php", true);
  	xhttp.send(data);

		Materialize.toast('Comentário adicionado!', 4000);
		$("#textarea1").val("");
		$("#textarea1").focusout();
	});

	$(".button-collapse").sideNav();

	function responder(u){
		$('html, body').animate({
        scrollTop: $("#scroll-point").offset().top - 49
    }, 200);

		$("#textarea1").val("@" + u);
		$("#textarea1").focus();

	}


	if($( window ).width() >= 992){
		$('.button-collapse').sideNav('hide');
	};

</script>

<?php 

	function check_input($data)
	{
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}
?>