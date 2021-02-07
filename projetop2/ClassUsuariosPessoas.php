<?php
include("ClassConexao.php");

class ClassUsuariosPessoas extends ClassConexao
{

    


    public function inserirUsuariosPessoas()
    {

        $v_id1 = $_POST['id1'];
        $v_id2 = $_POST['id2'];
        $v_observacao = $_POST['observacao'];


        $Inserir = $this->conectaDB()->prepare("INSERT INTO usuarios_pessoas (idUsuario, idPessoa, observacao) VALUES ('{$v_id1}', '{$v_id2}', '{$v_observacao}')");
        if ($Inserir->execute()) {
            echo "New record created successfully";
        } else {
            echo "Unable to create record";
        }
    }

    public function alterarUsuariosPessoas()
    {
        $v_id1 = $_POST['id1'];
        $v_id2 = $_POST['id2'];
        $v_observacao = $_POST['observacao'];

        $Alterar = $this->conectaDB()->prepare("UPDATE pessoas SET nome='{$v_nome}', cpf='{$v_cpf}', tipo='{$v_tipo}', email='{$v_email}' WHERE id={$v_id}");
        $Alterar->execute();
        if ($Alterar->execute()) {
            echo "Alterado com sucesso";
        } else {
            echo "Unable to create record";
        }
    }

    public function excluirUsuariosPessoas()
    {
        $v_id = $_GET['id'];

        $Excluir = $this->conectaDB()->prepare("DELETE FROM pessoas WHERE id = {$v_id}");
        $Excluir->execute();
        if ($Excluir->execute()) {
            echo "Deletado com successo";
        } else {
            echo "Unable to create record";
        }
    }

}
