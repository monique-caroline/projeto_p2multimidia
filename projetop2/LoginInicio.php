
<?php
include("includes/topo.php");
?>
<body class="text-center">
<h1 class="h3 font-weight-normal"> <img src="img/logo.png" width="200" style="margin-top: 40px"></h1><br>
<form class="col-md-8 offset-md-2" action="Login.php" method="POST" id="form-login">

   <div class="form-group">
        <input id="login" class="form-control" name="login" type="text" placeholder="Usuario:" data-sr-id="6">
    </div>
    <div class="form-group">
        <input id="senha" class="form-control" name="senha" type="password" placeholder="Senha:" data-sr-id="7">
        </div>
            <br>
            <input class="btn btn-lg btn-dark btn-block" type="submit" value="Entrar" id="entrar" name="entrar" data-sr-id="10">
    </form>
    

<?php
include("includes/rodape.php");
?>
