<?php
    require_once 'classes/usuarios.php';
    $u = new Usuario;

?>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cadastrar.css">
    <title>Cadastro</title>
</head>
<body>
    <form method="post">
    <div class="main-login">
        <div class="left-login">
            <h1>Faça seu cadastro<br>e entre para o nosso time</h1>
            <img src="animacao/animacaocadastro.svg" class="left-login-image" alt="animacao">
        </div>
        <div class="right-login">
            <div class="card-login">
                <h1>Cadastro</h1>
                <div class="textfield">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" placeholder="Nome completo" maxlength="30">
                </div>
                <div class="textfield">
                    <label for="email">Email</label>
                    <input type="email" name="email" placeholder="Email" maxlength="40">
                </div>
                <div class="textfield">
                    <label for="usuario">Usuário</label>
                    <input type="text" name="usuario" placeholder="Usuário" maxlength="25">
                </div>
                <div class="textfield">
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" placeholder="Senha" maxlength="15">
                </div>
                <div class="button">
                <input type="submit" value="cadastrar">
                </div>
            </div>
        </div>
    </div>
<?php
if (isset($_POST['nome']))
{
    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $usuario = addslashes($_POST['usuario']);
    $senha = addslashes($_POST['senha']);
    if(!empty($nome) && !empty($email) && !empty($usuario) && !empty($senha))
    {
        $u->conectar("projeto_acao","localhost","root","");
        if($u->msgErro == "")
        {
            if($u->cadastrar($nome,$email,$usuario,$senha));
            {
                echo "Cadastrado com sucesso!";
            }

        }
        else
        {
            echo "Erro: ".$u->msgErro;
        }
    }else
    {
        echo "Preencha todos os campos!";
    }
}



?>
</body>
</html>