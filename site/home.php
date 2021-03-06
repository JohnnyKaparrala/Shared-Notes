<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link href="materialize/css/Material+Icons.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="materialize/css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="materialize/css/materialize.css">
	<link rel="stylesheet" type="text/css" href="materialize/css/meu.css">
	<script type="text/javascript" src="materialize/js/materialize.js"></script>
	<script type="text/javascript" src="materialize/js/materialize.min.js"></script>
</head>
<body>
	<div class="dBlue">
		<div class="lBlue">
			<div class=" container lBlue" >
				<h3 class=" header center-on-small-only valign-wrapper margin0 light dBlue-txt">Shared Notes</h3>
			</div>
		</div>

		<div class="container" style="color: #c1c5ca; margin-bottom: 2.5em; padding-bottom: 1em">
			<h4 class="header col s12 light flow-text">
				<h5 class="light flow-text">é uma comunidade na qual você pode compartilhar seus conhecimentos e projetos relacionados a programação.</h5>
			</h4>
		</div>
	</div>

	<div class="container">

		<div class="cont white" style="margin:7em 0; border: 1px solid #efefef;">
			<div style="grid-area: tipo;">
				<div class="dSBlue white-text tipo center">
					<h6 class="margin0 light">Projeto</h6>
				</div>
			</div>
			<div style="grid-area: foto;">
				<img src="c.jpg" class="circle img">
			</div>
			<div style="grid-area: titulo" class="truncate center">
				<h5 class="light dSBlue-txt">Batatas carinhosas (1.6)</h5>
			</div>
			<div style="grid-area: descricao; margin-top: 1.6em" class="truncate">
				Lorem ipsum dolor sit amet, mollis blandit accusamus at est. At nullam legimus phaedrum pro, vero atomorum theophrastus vel ad, cum dolor vocibus concludaturque in. Nam novum utinam prompta id. Ex ornatus impedit cum. Possim vituperata et eum, luptatum facilisi salutatus ius in. An eum idque pericula intellegat, ea phaedrum recusabo ius, his et consul soluta audire.
			</div>
			<div style="grid-area: nome;text-align: center;line-height: 45px" class="dSBlue-txt truncate">
				<a title="Fulano de talaaaaaaaaaaaaaaaaaaaaaaa" href="perf.php?p=1"><h7 class="light dSBlue-txt">Fulano de talaaaaaaaaaaa</h7></a>
			</div>
			<div style="grid-area: notas; line-height: 45px">
				<div class="right" style="margin-right: 1.8em;">
					<div style="display: inline-block;margin-right: 1.3em; ">
						<h5 class="light margin0" style="display: inline-block; font-size: 1.6em;vertical-align: middle">
							<i class="material-icons" style="font-size: 0.8em">insert_comment</i> 2 |
							<i class="material-icons" style="font-size: 1em">keyboard_arrow_up</i> <span style="color: #2BBB80">6</span> |
							<i class="material-icons" style="font-size: 1em">keyboard_arrow_down</i> <span style="color: #EF535B">1</span>
						</h5>
					</div>
					<div style="display: inline-block;">
						<a title="Mais detalhes" href="projpag.php?p=1" class="waves-effect waves-light btn"><i class="tiny material-icons">details</i></a>
						<a title="Baixar" class="waves-effect waves-light btn dl"><i class="tiny material-icons">file_download</i></a>
					</div>
				</div>
			</div>
		</div>

		<div class="cont white" style="margin: 7em 0; border: 1px solid #efefef;">
			<div style="grid-area: tipo;">
				<div class="dSBlue white-text tipo center">
					<h6 class="margin0 light">Pergunta</h6>
				</div>
			</div>
			<div style="grid-area: foto;">
				<img src="b.jpg" class="circle img">
			</div>
			<div style="grid-area: titulo" class="truncate center">
				<h5 class="light dSBlue-txt">Como n sei?</h5>
			</div>
			<div style="grid-area: descricao; margin-top: 1.6em" class="truncate">
				pergunta relacionada a programação.
			</div>
			<div style="grid-area: nome;text-align: center;line-height: 45px" class="dSBlue-txt truncate">
				<a title="Nodoya" style="cursor:pointer" onclick=" loadDocPar(10,'fulanoDeTal')"><h7 class="light dSBlue-txt">Nodoya</h7></a>
			</div>
			<div style="grid-area: notas; line-height: 45px">
				<div class="right" style="margin-right: 1.8em;">
					<div style="display: inline-block;margin-right: 1.3em; ">
						<h5 class="light margin0" style="display: inline-block; font-size: 1.6em;vertical-align: middle">
							<i class="material-icons" style="font-size: 0.8em">insert_comment</i> 3 |
							<i class="material-icons" style="font-size: 1em">keyboard_arrow_up</i > <span style="color: #2BBB80">4</span> |
							<i class="material-icons" style="font-size: 1em">keyboard_arrow_down</i> <span style="color: #EF535B">0</span>
						</h5>
					</div>
					<div style="display: inline-block;">
						<a href="pergpag.php?p=1" title="Visualizar pergunta" class="waves-effect waves-light btn"><i class="small material-icons">pageview</i></a>
					</div>
				</div>
			</div>
		</div>
	</div>

</body>
</html>