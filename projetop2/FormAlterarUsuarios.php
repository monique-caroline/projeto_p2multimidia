
<?php
include("includes/topo.php"); 



$v_id = $_GET["id"];

$server = 'localhost';
    $user = 'root';
    $password = '';
    $bd = 'projetop2';
    $conn = mysqli_connect($server, $user, $password, $bd);

    if(mysqli_connect_errno()) {
        echo "erro" . $mysqli_error($conn);
    } else {
        echo "";
    }

    
   $consulta = "SELECT * FROM usuarios where id='{$v_id}'";
    $resposta = mysqli_query($conn, $consulta);

    if($resposta) {
      echo "";
?>

<div class="container-fluid">
<div class="row">
<?php
   include("includes/navbar.php");
   ?>
</div>
<div class="row">
<h1 class="titulo1">Edite os dados do Usuário</h1><br>

<form  style="padding: 0 100px; width: 100%" action="AlterarUsuarios.php" method="POST" id="form-login">
   <div class="form-group">
      <?php
        while ($linha = mysqli_fetch_array($resposta)) { ?>

         <input id="id" value="<?php echo $linha['id']; ?>" class="form-control" name="id" type="text" placeholder="id:" data-sr-id="6" style="margin-bottom: 20px">
         <input id="login" value="<?php echo $linha['login']; ?>" class="form-control" name="login" type="text" placeholder="login:" data-sr-id="6" style="margin-bottom: 20px">
         <input id="senha" value="<?php echo $linha['senha']; ?>" class="form-control" name="senha" type="text" placeholder="senha:" data-sr-id="6" style="margin-bottom: 20px">
         <input id="status" value="<?php echo $linha['status']; ?>" class="form-control" name="status" type="text" placeholder="status:" data-sr-id="6" style="margin-bottom: 20px">
         <input id="tipo" value="<?php echo $linha['tipo']; ?>" class="form-control" name="tipo" type="text" placeholder="tipo:" data-sr-id="6" style="margin-bottom: 20px">
      </div>
            <br>
            <input class="btn btn-lg btn-dark btn-block" type="submit" value="Alterar dados" id="entrar" name="entrar" data-sr-id="10">
      </form>
            
      <?php
        }

         } else {
         echo "erro" . $mysqli_error($conn);
         }

      ?>

    <!--
<form class="col-md-10 offset-md-1" action="AlterarPessoas.php" method="POST" id="form-login">
   <div class="form-group">
        <input id="login" class="form-control" name="nome" type="text" placeholder="nome:" data-sr-id="6" style="margin-bottom: 20px">
        <input id="senha" class="form-control" name="cpf" type="text" placeholder="cpf:" data-sr-id="6" style="margin-bottom: 20px">
        <input id="status" class="form-control" name="tipo" type="text" placeholder="tipo:" data-sr-id="6" style="margin-bottom: 20px">
        <input id="tipo" class="form-control" name="email" type="text" placeholder="email:" data-sr-id="6" style="margin-bottom: 20px">
    </div>
            <br>
            <input class="btn btn-lg btn-dark btn-block" type="submit" value="Alterar dados" id="entrar" name="entrar" data-sr-id="10">
    </form>
    

      -->
<?php
include("includes/rodape.php");
?>
