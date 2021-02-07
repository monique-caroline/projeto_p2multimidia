
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
                    <h1 class="titulo1">Lista de Usuários</h1>
                    <table id="ListaUsuarios" class="table ">
                        <thead class="thead-dark">
                            <tr>
                                
                                <th scope="col">ID</th>
                                <th scope="col">Login</th>
                                <th scope="col">Senha</th>
                                <th scope="col">Status</th>
                                <th scope="col">Tipo</th>
                                <th scope="col">Ações</th>
                            </tr>
                        </thead>
                    </table>
                </div>

</div>
        
<?php
include("includes/rodape.php");
?>