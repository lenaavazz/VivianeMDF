<!--criei a view do produto. Helena-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Cadastro</title>
<html>
<body>
    <?php
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
                Cadastro não realizado!
            </div>
        <?php
        }
        ?>

    <div id="cadproduto-container">
        <h1>Cadastro</h1>
            <form action="mvc/controller/controlProduto.php?acao=cad" method="post">
                <input type="text" required class="form-control" id="exampleFormControlInput2" placeholder="Descrição do Produto" name="n_descricao">
                <input type="number" required class="form-control" id="exampleFormControlInput1" placeholder="Quantidade" name="n_quantidade">
                <input type="text" required class="form-control" id="exampleFormControlInput1" placeholder="Valor" name="n_valor">
                <input type="text" required class="form-control" id="exampleFormControlInput1" placeholder="Altura" name="n_altura">
                <input type="text" required class="form-control" id="exampleFormControlInput1" placeholder="Largura" name="n_largura">
                <input type="text" required class="form-control" id="exampleFormControlInput1" placeholder="Profundidade" name="n_profundidade">
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </form>
    </div>
</body>     
</html>