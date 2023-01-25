<!DOCTYPE html>
<html lang="en">

<?php

include '../estrutura/head.php';

?>

<title>Viviane Vaz MDF - Cadastro</title>

</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php

        include '../estrutura/sidebar.php';

        ?>


        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <?php

                include '../estrutura/topbar.php';

                ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div style="max-width: 600px;margin: auto;">
                        <h1 class="h3 mb-4 text-gray-800">Cadastro Clientes</h1>
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
                        <form class="row g-3" method="POST" action="../controllers/controllerCliente.php?acao=cad">
                            <div class="col-md-6">
                                <label for="inputEmail4" class="label-espaco espacamento-campos">Nome Completo</label>
                                <input type="text" class="form-control" id="inputName" name="inputName">
                            </div>
                            <div class="col-md-6">
                                <label for="inputEmail4" class="label-espaco espacamento-campos">Email</label>
                                <input type="email" class="form-control" id="inputEmail" name="inputEmail">
                            </div>
                            <div class="col-md-7">
                                <label for="inputAddress" class="label-espaco espacamento-campos">Endereço</label>
                                <input type="text" class="form-control" id="inputAddress" name="inputAddress" placeholder="Rua Marechal Deodoro">
                            </div>
                            <div class="col-md-3">
                                <label for="inputZip" class="label-espaco espacamento-campos">Complemento</label>
                                <input type="text" class="form-control" id="inputComplement" name="inputComplement" placeholder="Casa, Apartamento, Estúdio ou Andar">
                            </div>
                            <div class="col-2">
                                <label for="inputAddress2" class="label-espaco espacamento-campos">Número</label>
                                <input type="number" class="form-control" id="inputHomeNumber" name="inputHomeNumber" nameplaceholder="n°">
                            </div>
                            <div class="col-md-4">
                                <label for="inputState" class="label-espaco espacamento-campos">Estado</label>
                                <input type="text" class="form-control" id="inputState" name="inputState" placeholder="Paraná">
                            </div>
                            <div class="col-md-4">
                                <label for="inputCity" class="label-espaco espacamento-campos">Cidade</label>
                                <input type="text" class="form-control" id="inputCity" name="inputCity" placeholder="Curitiba">
                            </div>
                            <div class="col-md-4">
                                <label for="inputPhoneNumber" class="label-espaco espacamento-campos">Telefone</label>
                                <input type="tel" class="form-control" id="inputPhoneNumber" name="inputPhoneNumber" placeholder="(xx) xxxx-xxxx">
                            </div>
                            <div class="col-12 espacamento">
                                <button type="submit" class="btn btn-primary">Cadastrar</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
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

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>