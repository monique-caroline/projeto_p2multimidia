
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
<h1 class="titulo1">Inserir dados da Pessoa</h1><br>


<form style="padding: 0 100px; width: 100%" action="InserirPessoas.php" method="POST" id="form-login">
   <div class="form-group">
        <input id="nome" class="form-control" name="nome" type="text" placeholder="nome:" data-sr-id="6" style="margin-bottom: 20px;">
        <input id="cpf" class="form-control" name="cpf" type="text" placeholder="cpf:" data-sr-id="6" style="margin-bottom: 20px">
        <input id="tipo" class="form-control" name="tipo" type="text" placeholder="tipo:" data-sr-id="6" style="margin-bottom: 20px">
        <input id="email" class="form-control" name="email" type="text" placeholder="email:" data-sr-id="6" style="margin-bottom: 20px">
    </div>
            <br>
            <input class="btn btn-lg btn-dark btn-block" type="submit" value="Inserir dados" id="entrar" name="entrar" data-sr-id="10">
    </form>
    

    
<?php
include("includes/rodape.php");
?>
