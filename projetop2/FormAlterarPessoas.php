
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

    
   $consulta = "SELECT * FROM pessoas where id='{$v_id}'";
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

<form style="padding: 0 100px; width: 100%" action="AlterarPessoas.php" method="POST" id="form-login">
   <div class="form-group">
      <?php
        while ($linha = mysqli_fetch_array($resposta)) { ?>

         <input id="id" value="<?php echo $linha['id']; ?>" class="form-control" name="id" type="text" placeholder="id:" data-sr-id="6" style="margin-bottom: 20px">
         <input id="nome" value="<?php echo $linha['nome']; ?>" class="form-control" name="nome" type="text" placeholder="nome:" data-sr-id="6" style="margin-bottom: 20px">
         <input id="cpf" value="<?php echo $linha['cpf']; ?>" class="form-control" name="cpf" type="text" placeholder="cpf:" data-sr-id="6" style="margin-bottom: 20px">
         <input id="tipo" value="<?php echo $linha['tipo']; ?>" class="form-control" name="tipo" type="text" placeholder="tipo:" data-sr-id="6" style="margin-bottom: 20px">
         <input id="email" value="<?php echo $linha['email']; ?>" class="form-control" name="email" type="text" placeholder="email:" data-sr-id="6" style="margin-bottom: 20px">
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
