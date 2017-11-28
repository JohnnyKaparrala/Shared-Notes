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
									<img src="a.png" width="50" >
								</div>
								<div class="truncate">
									Fulano de Talaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
								</div>
						</div>
					</a>
        </li>
        <li>
        	<a type="button" name="" class='dropdown-button' href='#' data-activates="a"><i class="large material-icons">expand_more</i></a>
				  <ul id="a" class='dropdown-content'>
				    <li><a href="#!">one</a></li>
				    <li><a href="#!">two</a></li>
				    <li class="divider"></li>
				    <li><a href="#!">three</a></li>
				    <li><a href="#!"><i class="material-icons">view_module</i>four</a></li>
				    <li><a href="#!"><i class="material-icons">cloud</i>five</a></li>
				  </ul>
         </li>
      </ul>
		</div>
		<nav class="dBlue">
			<div class="nav-content container">
	      <ul class="tabs tabs-transparent">
	      	<li class="tab" title="Menu"><a href="#"><i class="large material-icons ">menu</i></a></li>
	        <li class="tab" title="Home"><a href="#"><i class="large material-icons ">home</i></a></li>
		      <li class="tab" title="Notificações"><a href="#"><i class="large material-icons ">notifications</i></a></li>
		      <li class="tab" title="Postar um projeto"><a href="#"><i class="large material-icons ">note_add</i></a></li>
		      <li class="tab" title="Seus projetos"><a href="#"><i class="large material-icons ">note</i></a></li>
		      <li class="tab" title="Perguntas"><a href="#"><i class="large material-icons ">question_answer</i></a></li>
		      <li class="tab" title="Seguidores"><a href="#"><i class="large material-icons ">group</i></a></li>
		      <li class="right ">
			      <div class="input-field">
		          <input id="search" type="search" required style="width: 220px" >
		        </div>
		       </li>
	      </ul>
	    </div>
	  </nav>
  </nav>

  <div class="section no-pad-bot">
  	<div class="container" id="loader" style="min-height: 200px; background-color: #efefef">
  		
  	</div>
  </div>
  <script>
	function loadDoc() {
	  var xhttp = new XMLHttpRequest();
	  xhttp.onreadystatechange = function() {
	    if (this.readyState == 4 && this.status == 200) {
	      document.getElementById("loader").innerHTML =
	      this.responseText;
	    }
	  };
	  xhttp.open("GET", "b.php", true);
	  xhttp.send();
	}
</script>
</body>
</html>