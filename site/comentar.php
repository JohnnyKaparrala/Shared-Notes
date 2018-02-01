<form class="col s12 margin0" action="comentar.php" >
  <div class="row margin0">
    <div class="input-field col s9">
      <textarea id="textarea1" class="materialize-textarea"></textarea>
      <label for="textarea1" name="comentArea">Comentario</label>
    </div>
    <div class="col s3">
      <a onclick="document.getElementById('input').click()" class="waves-effect waves-light btn coment"><span class="valign-wrapper">enviar</span></a>
      <input name="comentBtn" style="display: none" type="submit" id="input">
    </div>
  </div>
</form>
<?php 
  include 'include/head.inc.php';

  if (isset($_POST["comentArea"]) && isset($_POST["comentBtn"])) {
    $comentario = check_input($_POST["textarea1"]);
    echo "<script>alert('c');</script>"; 
  }
?>