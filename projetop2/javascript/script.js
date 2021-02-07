$(document).ready(function(){
    $.ajax({
        url: 'ListaPessoas.php',
        type: 'get',
        dataType: 'JSON',
        success: function(response){
            var len = response.length;
            for(var i=0; i<len; i++){
                var id = response[i].Id;
                var nome = response[i].Nome;
                var cpf = response[i].CPF;
                var tipo = response[i].Tipo;
                var email = response[i].Email;

                var tr_str = "<tr>" +
                    
                    "<td class='text-left'>" + id + "</td>" +
                    "<td align='center'>" + nome + "</td>" +
                    "<td align='center'>" + cpf + "</td>" +
                    "<td align='center'>" + tipo + "</td>" +
                    "<td align='center'>" + email + "</td>" +
                    "<td align='center'><a href='FormAlterarPessoas.php?id=" + id + "'>Altera</a> / <a href='ExcluirPessoas.php?id=" + id + "'>Deleta</a>" +
                    "</tr>";

                $("#ListaPessoa").append(tr_str);
            }

        }
    });
});

$(document).ready(function(){
    $.ajax({
        url: 'ListaUsuarios.php',
        type: 'get',
        dataType: 'JSON',
        success: function(response){
            var len = response.length;
            for(var i=0; i<len; i++){
                var id = response[i].Id;
                var login = response[i].Login;
                var senha = response[i].Senha;
                var status = response[i].Status;
                var tipo = response[i].Tipo;
                

                var tr_str = "<tr>" +
                    
                    "<td align='center'>" + id + "</td>" +
                    "<td align='center'>" + login + "</td>" +
                    "<td align='center'>" + senha + "</td>" +
                    "<td align='center'>" + status + "</td>" +
                    "<td align='center'>" + tipo + "</td>" +
                    "<td align='center'><a href='FormAlterarUsuarios.php?id=" + id + "'>Altera</a> / <a href='ExcluirUsuarios.php?id=" + id + "'>Deleta</a>" +
                    "</tr>";

                $("#ListaUsuarios").append(tr_str);
            }

        }
    });
});