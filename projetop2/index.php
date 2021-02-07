
    <?php
            include("includes/topo.php");
            ?>
    <body>
        
    

        <div class="container-fluid">
          

            <div class="row">


            

            <?php
                include("includes/navbar.php");
            ?>


          <?php
          $v_login = $_COOKIE['login'];
          if (isset($v_login)) {
            echo "<h1 class='titulo1'>Bem-Vindo, $v_login </h1><br><br>";
            echo "<p style='width: 100%; margin: 0 100px'>Agora você pode acessar as listas de usuários, alterar e deletar.</p>";
          } else {
            echo "Bem-Vindo, convidado <br>";
            echo "Essas informações <font color='red'>NÃO PODEM</font> ser acessadas por você";
            echo "<br><a href='login.html'>Faça Login</a> Para ler o conteúdo";
          }
          ?>
        </div>
        </div>
  </main>
  </div>
        </div>
        
<?php
include("includes/rodape.php");
?>