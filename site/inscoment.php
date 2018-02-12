<?php
	$comentario = htmlspecialchars($_POST['comentario']);
	$comentario = str_replace("&lt;br /&gt;", "<br/>", $comentario);

	/*$usuario = htmlspecialchars($_SESSION['usuario']);
	$foto = htmlspecialchars($_SESSION['foto']);*/
	//todo bd
?>
<div class="comentario">
  <div style="grid-area: foto">
    <img src="a.jpg" class="circle" width="45">
  </div>
  <div style="grid-area: dados">
    <span class="comentario-txt flow-text"><b>Jorge cara legaaaaaaaaaaaaaal</b></span><br>
    <span>agora</span>
  </div>
  <div style="grid-area: avaliacao; background-color: #fff;font-size: 1.2em" class="center">
    <div style="margin-top: 20%">
      <span class="black-text center" style="font-size: 1.7em;">0</span>
    </div>
  </div>
  <div style="grid-area: comentario; background-color: #fff; padding: 12px 0 12px 12px">
    <span class="tempo-comentario"><?php echo $comentario ?></span>
  </div>
  <div class="valign-wrapper" style="grid-area: responder; background-color: #fff; padding: 12px">
    <a class="avaliar-btn pointer verde-txt"><i class="material-icons avaliar-btn">keyboard_arrow_up</i></a>
    <a class="avaliar-btn pointer vermelho-txt"><i class="material-icons avaliar-btn">keyboard_arrow_down</i></a>
    <a class="responder-btn valign-wrapper lBlue-txt pointer"><i class="tiny material-icons">keyboard_return</i>Responder</a>
  </div>
</div>