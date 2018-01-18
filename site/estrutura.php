<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
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

		  switch(doc){
		  	case 1:{
		  		pagina = "h.php";
		  	}break;

		  	case 2:{
		  		pagina = "ar.php";
		  	}break;

		  	case 3:{
		  		pagina = "pup.php";
		  	}break;

		  	case 4:{
		  		pagina = "sp.php";
		  	}break;

		  	case 5:{
		  		pagina = "p.php";
		  	}break;

		  	case 6:{
		  		pagina = "s.php";
		  	}break;

		  	case 7:{

		  	}break;

		  	case 8:{

		  	}break;
		  }


		  xhttp.open("GET", pagina, true);
		  xhttp.send();
		}
	</script>
</head>
<body onload="loadDoc()">
	<nav class="lBlue nav-extended">
		<div class="container nav-wrapper">
			<a href="#" class="brand-logo dBlue-txt">Shared Notes</a>

			<ul id="nav-mobile" class="right hide-on-med-and-down">
        <li>
        	<a href="#">
							<div class="perfil-tres" title="Fulano de Talaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa">
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
						<i class="large material-icons" title="Configurações">settings</i>
					</div>
				</a>
	        </li>
				<li>
					<a>
						<div>
							<i class="large material-icons" title="Sair">power_settings_new</i>
						</div>
					</a>
	      </li>
	    </ul>
		</div>
		<nav id="sub_menu" class="dBlue valign-wrapper" style="height: 51px; position: sticky;">
			<div class="nav-content container ">
	      <ul class="tabs tabs-transparent">
	        <li onclick = 'loadDoc(1)' class="tab active" title="Home"><a href="#"><i class="large material-icons ">home</i></a></li>
			    <li onclick = 'loadDoc(2)' class="tab" title="Atividade recente"><a href="#"><i class="large material-icons ">notifications</i></a></li>
			    <li onclick = 'loadDoc(3)' class="tab" title="Postar um projeto"><a href="#"><i class="large material-icons ">note_add</i></a></li>
			    <li onclick = 'loadDoc(4)' class="tab" title="Seus projetos"><a href="#"><i class="large material-icons ">note</i></a></li>
			    <li onclick = 'loadDoc(5)' class="tab" title="Perguntas"><a href="#"><i class="large material-icons ">question_answer</i></a></li>
			    <li onclick = 'loadDoc(6)' class="tab" title="Seguidores"><a href="#"><i class="large material-icons ">group</i></a></li>
			    <li class="right">
				    <div class="input-field">
				    	<label class="label-icon" style="margin-top: -14px"><i class="material-icons">search</i></label>
	          	<input id="search" type="search" style="width: 220px">
	     		  </div>
				  </li>
		    </ul>
	    </div>
	  </nav>
  </nav>

  <div class="section no-pad-bot">
  	<div class="container" id="loader" style="min-height: 1000px; background-color: #fcfcfc">
  		
  	</div>
  </div>
</body>
	<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
 	<script>
		$(function(){
		    var stickyHeaderTop = $('#sub_menu').offset().top;

		    $(window).scroll(function(){
		      if( $(window).scrollTop() > stickyHeaderTop ) {
	          $('#sub_menu').css({position: 'fixed', top: '0px'});
	          $('#sticky').css('display', 'block');
		      } else {
	          $('#sub_menu').css({position: 'static', top: '0px'});
	          $('#sticky').css('display', 'none');
		      }
		    });
		});
	</script>
</html>