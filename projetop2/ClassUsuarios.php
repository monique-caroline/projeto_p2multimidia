<?php
include("ClassConexao.php");

class ClassUsuarios extends ClassConexao
{

    #Exibição dos usuarios em um json
    public function exibeUsuarios()
    {
        $BFetch = $this->conectaDB()->prepare("select * from usuarios");
        $BFetch->execute();

        $J = [];
        $I = 0;

        while ($Fetch = $BFetch->fetch(PDO::FETCH_ASSOC)) {
            $J[$I] = [
                "Id" => $Fetch['id'],
                "Login" => $Fetch['login'],
                "Senha" => $Fetch['senha'],
                "Status" => $Fetch['status'],
                "Tipo" => $Fetch['tipo']
            ];
            $I++;
        }

        header("Access-Control-Allow-Origin:*");
        header("Content-type: application/json");
        echo json_encode($J);
    }


    public function inserirUsuarios()
    {

        $v_login = $_POST['login'];
        $v_senha = $_POST['senha'];
        $v_status = $_POST['status'];
        $v_tipo = $_POST['tipo'];

        $Inserir = $this->conectaDB()->prepare("INSERT INTO usuarios (login, senha, status, tipo) VALUES ('{$v_login}', '{$v_senha}', '{$v_status}', '{$v_tipo}')");
        if ($Inserir->execute()) {
            echo "New record created successfully";
        } else {
            echo "Unable to create record";
        }
    }

    public function alterarUsuarios()
    {
        $v_id = $_POST['id'];
        $v_login = $_POST['login'];
        $v_senha = $_POST['senha'];
        $v_status = $_POST['status'];
        $v_tipo = $_POST['tipo'];

        $Alterar = $this->conectaDB()->prepare("UPDATE usuarios SET login='{$v_login}', senha='{$v_senha}', status='{$v_status}', tipo='{$v_tipo}' WHERE id={$v_id}");
        $Alterar->execute();
        if ($Alterar->execute()) {
            echo "Alterado com sucesso";
        } else {
            echo "Unable to create record";
        }
    }

    public function excluirUsuarios()
    {
        $v_id = $_GET['id'];

        $Excluir = $this->conectaDB()->prepare("DELETE FROM usuarios WHERE id = {$v_id}");
        $Excluir->execute();
        if ($Excluir->execute()) {
            echo "Deletado com successo";
        } else {
            echo "Unable to create record";
        }
    }

    public function login()
    {
        $v_login = $_POST['login'];
        $v_entrar = $_POST['entrar'];
        $v_senha = $_POST['senha'];

        if (isset($v_entrar)) {

            $BFetch = $this->conectaDB()->prepare("SELECT count(login) FROM usuarios WHERE login =
            '{$v_login}' AND senha = '{$v_senha}'");
            $BFetch->execute();

            $Fetch = $BFetch->fetch(PDO::FETCH_ASSOC);
            if ($Fetch['count(login)'] <= 0) {
                echo "<script language='javascript' type='text/javascript'>
                alert('Login e/ou senha incorretos');window.location
                .href='LoginInicio.php';</script>";
                die();
            } else {
                setcookie("login", $v_login);
                header("Location:index.php");
            }
        }
    }
}
