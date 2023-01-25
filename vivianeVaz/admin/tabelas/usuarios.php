<?php
    session_start();

    $users = array();
    if(isset($_SESSION["usuarios"])){
        $users = json_decode($_SESSION["usuarios"]);
    }   
?>
<!DOCTYPE html>
<html lang="pt-br">

    <?php include '../estrutura/head.php'; ?>

    <title>Viviane Vaz MDF - Tabela Usuários</title>

</head>

<body id="page-top">
    <div id="wrapper">

    <?php include '../estrutura/sidebar.php'; ?>

    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">

            <?php include '../estrutura/topbar.php'; ?>

            <div class="container-fluid">
                <div class="col-md-6" style="width: 48%; float: left;">
                    <h1 class="h3 mb-4 text-gray-800">Usuarios</h1>
                </div>

                <table id="table_id" class="display">
                    <thead>
                        <tr>
                            <td>nome</td>
                            <td>email</td>
                            <td>senha</td>
                            <td>categoria</td>
                            <th><a href="../cadastros/cadastro-usuario.php" type="button" class="btn btn-primary" style="float: right;">
                        Cadastrar Usuário</a></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if ($users) {
                            foreach ($users as $usuario) {
                                ?>
                                <tr>
                                    <td><?php echo $usuario->nome; ?></td>
                                    <td><?php echo $usuario->email; ?></td>
                                    <td><?php echo $usuario->senha; ?></td>
                                    <td><?php echo $usuario->categoria; ?></td>
                                    <td>
                                        <a href="../controllers/controllerUsuario.php?acao=del&id=<?php echo $usuario->id; ?>" class="btn btn-danger btn-sm" style="float: right;">Excluir</a>
                                    </td>
                                </tr>
                                <?php
                            }
                        } else {
                            ?>
                            <tr>
                                <td colspan="5">Nenhum registro encontrado</td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <strong>Viviane Vaz MDF 2021 &copy;</strong> | Todos os direitos reservados
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
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Você realmente deseja sair?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Não</button>
                <a class="btn btn-danger" href="../../index.php">Sim</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="../vendor/jquery/jquery.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="../js/sb-admin-2.min.js"></script>


<!-- Tabela -->
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>
<script>

$(document).ready( function () {
    $('#table_id').DataTable();
} );
</script>

</body>

</html>