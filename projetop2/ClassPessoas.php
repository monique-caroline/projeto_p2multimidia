<?php
include("ClassConexao.php");

class ClassPessoas extends ClassConexao
{

    #Exibição dos pessoas em um json
    public function exibePessoas()
    {
        $BFetch = $this->conectaDB()->prepare("select * from pessoas");
        $BFetch->execute();

        $J = [];
        $I = 0;

        while ($Fetch = $BFetch->fetch(PDO::FETCH_ASSOC)) {
            $J[$I] = [
                "Id" => $Fetch['id'],
                "Nome" => $Fetch['nome'],
                "CPF" => $Fetch['cpf'],
                "Tipo" => $Fetch['tipo'],
                "Email" => $Fetch['email']
            ];
            $I++;
        }

        header("Access-Control-Allow-Origin:*");
        header("Content-type: application/json");
        echo json_encode($J);
    }


    public function inserirPessoas()
    {

        $v_nome = $_POST['nome'];
        $v_cpf = $_POST['cpf'];
        $v_tipo = $_POST['tipo'];
        $v_email = $_POST['email'];

        $Inserir = $this->conectaDB()->prepare("INSERT INTO pessoas (nome, cpf, tipo, email) VALUES ('{$v_nome}', '{$v_cpf}', '{$v_tipo}', '{$v_email}')");
        if ($Inserir->execute()) {
            echo "New record created successfully";
        } else {
            echo "Unable to create record";
        }
    }

    public function alterarPessoas()
    {
        $v_id = $_POST['id'];
        $v_nome = $_POST['nome'];
        $v_cpf = $_POST['cpf'];
        $v_tipo = $_POST['tipo'];
        $v_email = $_POST['email'];

        $Alterar = $this->conectaDB()->prepare("UPDATE pessoas SET nome='{$v_nome}', cpf='{$v_cpf}', tipo='{$v_tipo}', email='{$v_email}' WHERE id={$v_id}");
        $Alterar->execute();
        if ($Alterar->execute()) {
            echo "Alterado com sucesso";
        } else {
            echo "Unable to create record";
        }
    }

    public function excluirPessoas()
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
