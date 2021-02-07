
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
      
              <?php
                while ($linha1 = mysqli_fetch_array($resposta1)) { ?>
                
                <?php echo $linha1['id']; ?>"><?php echo $linha1['id']; ?> <?php echo $linha1['login']; ?> <?php echo $linha1['senha']; ?> <?php echo $linha1['status']; ?> <?php echo $linha1['tipo']; ?>
                <?php
                    }

                    } else {
                    echo "erro" . $mysqli_error($conn);
                    }

                ?>
    
              <?php
                while ($linha2= mysqli_fetch_array($resposta2)) { ?>

                <?php echo $linha2['id']; ?>"><?php echo $linha2['id']; ?> <?php echo $linha2['nome']; ?> <?php echo $linha2['cpf']; ?> <?php echo $linha2['tipo']; ?> <?php echo $linha2['email']; ?>
                <?php
                    }

                  } else {
                  echo "erro" . $mysqli_error($conn);
                  }

?>
            
      


<?php
include("includes/rodape.php");
?>
