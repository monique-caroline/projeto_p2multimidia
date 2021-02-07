
<?php
include("includes/topo.php");
?>
    <body>
        
    

        <div class="container-fluid">
            <div class="row">
            <?php
                include("includes/navbar.php");
            ?>
            </div>
            <div class="row">
            <h1 class="titulo1">Lista de Pessoas</h1>
                <table id="ListaPessoa" class="table ">
                    <thead class="thead-dark">
                        <tr>
                            
                            <th scope="col">ID</th>
                            <th scope="col">Nome</th>
                            <th scope="col">CPF</th>
                            <th scope="col">Tipo</th>
                            <th scope="col">E-mail</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
        
<?php
include("includes/rodape.php");
?>