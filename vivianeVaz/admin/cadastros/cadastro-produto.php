<!DOCTYPE html>
<html lang="pt-br">

<?php include '../estrutura/head.php'; ?>

<title>Viviane Vaz MDF - Cadastro</title>

</head>

<body id="page-top">
    <?php include '../estrutura/sidebar.php'; ?>
    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">

            <?php include '../estrutura/topbar.php'; ?>

            <div class="container-fluid">
                <div style="max-width: 600px;margin: auto;">
                    <h1 class="h3 mb-4 text-gray-800">Cadastro Produto</h1>

                    <?php
                    $retorno = "";
                    if (isset($_GET["r"])) {
                        $retorno = $_GET["r"];
                    }

                    if ($retorno == "1") {
                    ?>
                        <div class="alert alert-success sucesso" role="alert">
                            Cadastro realizado com Sucesso!
                        </div>
                    <?php
                    } else if ($retorno == "2") {
                    ?>
                        <div class="alert alert-danger erro-cadastrar" role="alert">
                            Cadastro não realizado!
                        </div>
                    <?php
                    }
                    $retorno = "";
                    ?>
                    <div id="wrapper">
                        <form class="row g-3" method="POST" action="../controllers/controllerProduto.php?acao=cad">
                            <div class="col-md-6">
                                <label for="inputName" class="label-espaco espacamento-campos">Nome</label>
                                <input type="text" class="form-control" id="inputName" name="inputName">
                            </div>
                            <div class="col-md-6">
                                <label for="inputCategory" class="label-espaco espacamento-campos">Categoria</label>
                                <input type="text" class="form-control" id="inputCategory" name="inputCategory">
                            </div>
                            <div class="col-12 espacamento">
                                <button type="submit" class="btn btn-primary">Cadastrar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/sb-admin-2.min.js"></script>
</body>

</html>