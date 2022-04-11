<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Login</title>
</head>
<body>
    <form method="post" action="processa.php">
    <div class="main-login">
        <div class="left-login">
            <h1>Faça login<br>E entre para o nosso time</h1>
            <img src="animacao/animacaologin.svg" class="left-login-image" alt="animacao">
        </div>
        <div class="right-login">
            <div class="card-login">
                <h1>LOGIN</h1>
                <div class="textfield">
                    <label for="usuario">Usuário</label>
                    <input type="text" name="usuario" placeholder="Usuário">
                </div>
                <div class="textfield">
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" placeholder="Senha">
                </div>
                <div class="button">
                <input type="submit" value="login">
                </div>
            </div>
        </div>
    </div>
</body>
</html>
