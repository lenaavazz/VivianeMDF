<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Importei a o bootstrap para o site ficar responsivo. Heliton-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- Coloquei o css externo na pasta "assets/css". Heliton-->
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Cadastro</title>
<html>
<body>
    <?php
        //Fiz alteração no codigo com condicional que prof explicou na aula, usando boostrap. Heliton
        //refiz as alterações pra pegar o retorno corretamente. Helena
        $retorno = "";
        if (isset($_GET["r"])) {
            $retorno = $_GET["r"];
        }
      
        if($retorno == "1"){
        ?>
            <div class="alert alert-success sucesso" role="alert">
                Cadastro realizado com Sucesso!
            </div>  
        <?php
        } else if($retorno == "2"){
        ?>
            <div class="alert alert-danger erro-cadastrar" role="alert">
                Cadastro não realizado, verifique se as senhas estão compatíveis!
            </div>
        <?php
        }
        ?>
 <div id="formulario-container">
    <h1>Cadastro</h1> 
        <form action="mvc/controller/controlUsuario.php?acao=cad" method="post">
            <input type="text" required class="form-control" id="exampleFormControlInput1" placeholder="Nome Completo" name="nome" autocomplete="off">
            <input type="text" required class="form-control" id="exampleFormControlInput1" placeholder="Email" name="email">
            <input type="text" required class="form-control" id="exampleFormControlInput1" placeholder="Telefone" name="telefone">
            <input type="text" required class="form-control" id="exampleFormControlInput1" placeholder="CEP" name="cep">
            <input type="text" required class="form-control" id="exampleFormControlInput1" placeholder="Cidade" name="cidade">
            <input type="password" required class="form-control" id="exampleFormControlInput1" placeholder="Senha" name="senha">
            <input type="password" required class="form-control" id="exampleFormControlInput1" placeholder="Confirmar Senha" name="confirmarS"><br>
            <button type="submit" class="btn btn-primary" id="button-cadastrar">Cadastrar</button>
            <!-- Falta finalizar CSS/HTML da página -->
            <div id="cadastro-login">
                <a href="">Login</a>
            </div>
        </form>
    </div>  
</body>     
</html>