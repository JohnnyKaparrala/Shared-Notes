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
    <span class="comentario-txt truncate"><b>Fulano de Talaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</b></span><br>
    <span class="tempo-comentario">agora</span>
  </div>
  <div style="grid-area: avaliacao; background-color: #fff;font-size: 1.2em" class="center">
    <div style="margin-top: 20%">
      <span class="black-text center" style="font-size: 1.7em;">0</span>
    </div>
  </div>
  <div style="grid-area: comentario; background-color: #fff; padding: 12px 0 12px 12px">
    <?php echo $comentario ?>
  </div>
  <div class="valign-wrapper" style="grid-area: responder; background-color: #fff; padding: 12px">
    <a class="avaliar-btn pointer verde-txt"><i class="material-icons avaliar-btn">keyboard_arrow_up</i></a>
    <a class="avaliar-btn pointer vermelho-txt"><i class="material-icons avaliar-btn">keyboard_arrow_down</i></a>
    <!-- todo n pode responder o proprio comentario -->
  </div>
</div>