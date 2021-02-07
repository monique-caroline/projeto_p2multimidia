
<?php
include("includes/topo.php");
?>

<div class="container-fluid">
<div class="row">
<?php
   include("includes/navbar.php");
   ?>
</div>
<div class="row">
<h1 class="titulo1">Inserir Usuário</h1><br>

<form style="padding: 0 100px; width: 100%" action="InserirUsuarios.php" method="POST" id="form-login">
   <div class="form-group">


         
         <input id="login" class="form-control" name="login" type="text" placeholder="login:" data-sr-id="6" style="margin-bottom: 20px">
         <input id="senha" class="form-control" name="senha" type="text" placeholder="senha:" data-sr-id="6" style="margin-bottom: 20px">
         <input id="status" class="form-control" name="status" type="text" placeholder="status:" data-sr-id="6" style="margin-bottom: 20px">
         <input id="tipo" class="form-control" name="tipo" type="text" placeholder="tipo:" data-sr-id="6" style="margin-bottom: 20px">
      </div>
            <br>
            <input class="btn btn-lg btn-dark btn-block" type="submit" value="Adicionar usuário" id="entrar" name="entrar" data-sr-id="10">
      </form>
 
<?php
include("includes/rodape.php");
?>
