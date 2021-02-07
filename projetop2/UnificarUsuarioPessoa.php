
<?php
include("includes/topo.php"); 


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

    
   $consultaUsuario = "SELECT * FROM usuarios";
   $consultaPessoa = "SELECT * FROM pessoas";
   $resposta1 = mysqli_query($conn, $consultaUsuario);
   $resposta2 = mysqli_query($conn, $consultaPessoa);

    if($resposta1) {
    echo "";

    if($resposta2) {
      echo "";
?>

<div class="container-fluid">
<div class="row">
<?php
   include("includes/navbar.php");
   ?>
</div>
    <div class="row">
      <h1 class="titulo1">Unificar Usuário - Pessoa</h1><br>
    </div>


    <div class="row">
    <div class="form-group col-12">
      <form  style="padding: 0 100px; width: 100%" action="UnificarUsuariosPessoas.php" method="POST" id="form-login">
        
            <label style="width: 100%">Usuário <br>
            <select name="id1" id="id1" class="form-control" style="width: 100%">
              <?php
                while ($linha1 = mysqli_fetch_array($resposta1)) { ?>
                
                <option value="<?php echo $linha1['id']; ?>"><?php echo $linha1['id']; ?> <?php echo $linha1['login']; ?> <?php echo $linha1['senha']; ?> <?php echo $linha1['status']; ?> <?php echo $linha1['tipo']; ?></option>
                <?php
                    }

                    } else {
                    echo "erro" . $mysqli_error($conn);
                    }

                ?>
    
            </select>
          </label>
                    
          <br><br><br>

          <label style="width: 100%">Pessoas<br>
            <select name="id2" id="id2" class="form-control" style="width: 100%">
              <?php
                while ($linha2= mysqli_fetch_array($resposta2)) { ?>

                <option value="<?php echo $linha2['id']; ?>"><?php echo $linha2['id']; ?> <?php echo $linha2['nome']; ?> <?php echo $linha2['cpf']; ?> <?php echo $linha2['tipo']; ?> <?php echo $linha2['email']; ?></option>
                <?php
                    }

                  } else {
                  echo "erro" . $mysqli_error($conn);
                  }


                    
                  ?>
              </select>
              </label>
              <br><br><br>
              <input id="observacao" class="form-control" name="observacao" placeholder="observação" style="width: 100%">

              <br><br><br>
            <input class="btn btn-lg btn-dark btn-block" type="submit" value="Alterar dados" id="entrar" name="entrar" data-sr-id="10" style="width: 100%">
      </form>
            
      


<?php
include("includes/rodape.php");
?>
