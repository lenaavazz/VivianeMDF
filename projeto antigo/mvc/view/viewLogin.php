<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Importei a o bootstrap para o site ficar responsivo. Heliton-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- Coloquei o css externo na pasta "assets/css". Heliton-->
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Login</title>
<html>
<body>
    <div id="login-container">
        <h1>Login</h1>
            <!--adicionei a acao de login mandando para o arquivo CONTROL. Helena-->
            <form action="../Controller/controllerUsuario.php?acao=login" method="post">
            <label for="email">Email</label>
            <input type="email" name="" id="email" placeholder="Digite o seu email" autocomplete="off">
            <label for="password">Senha</label>
            <input type="password" name="password" id="password" placeholder="Digite a sua senha">
            <button type="submit" class="btn btn-primary" id="button-cadastrar">Entrar</button>
            
            <div id="register-container">
                <a href="">Criar conta</a><br>
                <a href="" id="forgot-pass">Esqueceu a senha?</a>
            </div>
        </form>
    </div>
</body>     
</html>