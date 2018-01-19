<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="../imagens/s/logo.ico" />
	<meta charset="utf-8">
	<title>Home - Shared Notes</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="materialize/css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="materialize/css/materialize.css">
	<script type="text/javascript" src="materialize/js/materialize.js"></script>
	<script type="text/javascript" src="materialize/js/materialize.min.js"></script>
	<script type="text/javascript">
		function loadDoc(doc) {
		  var xhttp = new XMLHttpRequest();
		  xhttp.onreadystatechange = function() {
		    if (this.readyState == 4 && this.status == 200) {
		      document.getElementById("loader").innerHTML = this.responseText;
		    }
		  };

		  var pagina;

		  for(i = 1; i <= 6; i++){
		  	if ( $("#" + i).hasClass("active") ){
		  		$("#" + i).removeClass("active");
		  			break;
		  	}
		  }
		   switch(doc){
		  	case 1:{
		  		pagina = "h.php";
		  		document.title = "Home - Shared Notes";
		  		document.getElementById("1").classList.add('active');
		  	}break;

		  	case 2:{
		  		pagina = "ar.php";
		  		document.title = "Atividades recentes - Shared Notes";
		  		document.getElementById("2").classList.add('active');
		  	}break;

		  	case 3:{
		  		pagina = "pup.php";
		  		document.title = "Projeto novo - Shared Notes";
		  		document.getElementById("3").classList.add('active');
		  	}break;

		  	case 4:{
		  		pagina = "sp.php";
		  		document.title = "Projetos - Shared Notes";
		  		document.getElementById("4").classList.add('active');
		  	}break;

		  	case 5:{
		  		pagina = "p.php";
		  		document.title = "Perguntas - Shared Notes";
		  		document.getElementById("5").classList.add('active');
		  	}break;

		  	case 6:{
		  		pagina = "s.php";
		  		document.title = "Seguidores - Shared Notes";
		  		document.getElementById("6").classList.add('active');
		  	}break;

		  	case 7:{
		  		pagina = "pr.php";
		  		document.title = "Seguidores - Shared Notes";
		  		document.getElementById("6").classList.add('active');
		  	}break;

		  	default:{
		  		pagina = "Erro 69. Essa página não existe. <b>:(</b>";
		  	}
		  }

		  xhttp.open("GET", pagina, true);
		  xhttp.send();
		}
	</script>
</head>
<body onload="loadDoc(1)">

	<div>
		<nav class="lBlue nav">
			<div class="container nav-wrapper">
				<a href="#" class="brand-logo dBlue-txt" title="Shared Notes"><img src="../imagens/s/logo.png" width="64"></a>

				<ul id="nav-mobile" class="right hide-on-med-and-down">
		      <li>
		      	<a href="#">
								<div class="perfil-dois" id="7" onclick = 'loadDoc(7)' title="Fulano de Talaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa">
									<div class="valign-wrapper">
										<img class=" circle" src="a.jpg" width="50" >
									</div>
									<div class="truncate">
										Fulano de Talaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
									</div>
							</div>
						</a>
					</li>
					<li>
		        	<a>
						<div>
						<i class=" tab large material-icons" title="Configurações">settings</i>
						</div>
					</a>
		        </li>
					<li>
						<a>
							<div>
								<i class="tab large material-icons" title="Sair">power_settings_new</i>
							</div>
						</a>
		      </li>
		    </ul>
			</div>
		</nav>
	</div>
	<nav id="sub_menu" class="dBlue valign-wrapper" style="height: 51px; position:absolute">
		<div class="nav-content container ">
      <ul class="tabs tabs-transparent">
        <li id="1" onclick = 'loadDoc(1)' class="tab" title="Home"><a href="#"><i class="large material-icons ">home</i></a></li>
		    <li id="2" onclick = 'loadDoc(2)' class="tab" title="Atividade recente"><a href="#"><i class="large material-icons ">notifications</i></a></li>
		    <li id="3" onclick = 'loadDoc(3)' class="tab" title="Postar um projeto"><a href="#"><i class="large material-icons ">note_add</i></a></li>
		    <li id="4" onclick = 'loadDoc(4)' class="tab" title="Seus projetos"><a href="#"><i class="large material-icons ">note</i></a></li>
		    <li id="5" onclick = 'loadDoc(5)' class="tab" title="Perguntas"><a href="#"><i class="large material-icons ">question_answer</i></a></li>
		    <li id="6" onclick = 'loadDoc(6)' class="tab" title="Seguidores"><a href="#"><i class="large material-icons ">group</i></a></li>
		    <li class="right">
			    <div class="input-field" title="Procurar no site">
			    	<label class="label-icon" style="margin-top: -14px"><i class="material-icons">search</i></label>
	        	<input id="search" type="search" style="width: 220px">
	   		  </div>
			  </li>
	    </ul>
	  </div>
	</nav>

	<div class="container" id="loader" style="min-height: 800px; background-color: #fcfcfc; margin-top: 61px;margin-bottom: 10px">
	</div>

  <footer class="page-footer lBlue" >
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h4 class="white-text header col s12 light">Junte-se a discussão</h4>
          <p class="grey-text text-lighten-4">Você pode nos contatar diretamente pelo nosso chat do **.</p>
          <a class="waves-effect dSBlue btn" >Chat</a>
        </div>
        <div class="col l4 offset-l2 s12">
          <h5 class="white-text">Siga-nos</h5>
          <ul>
            <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
            <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
            <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
            <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright dSBlue">
      <div class="container">
      © 2018 The Shared Inc., Todos os direitos reservados.
      <a class="grey-text text-lighten-4 right" href="#!">Termos de Serviço - Privacidade</a>
      </div>
    </div>
  </footer>
</body>
	<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
 	<script>
		var initTopPosition= $('#sub_menu').offset().top;   
			$(window).scroll(function(){
			    if($(window).scrollTop() > initTopPosition)
			        $('#sub_menu').css({'position':'fixed','top':'0px'});
			    else
			        $('#sub_menu').css({'position':'absolute','top':initTopPosition+'px'});
			});
	</script>
</html>