<!DOCTYPE html>
<html lang="en">

<?php
    include "../estrutura/head.php";
?>

<title>SB Admin 2 - Forgot Password</title>
<body class="bg-gradient-primary-viviane">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card-viviane o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image-viviane"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-2">Esqueceu sua senha?</h1>
                                        <p class="mb-4">Nós entendemos, coisas acontecem. Basta inserir seu endereço de e-mail abaixo
                                            e enviaremos um link para redefinir sua senha!</p>
                                    </div>
                                    <form class="user" method="post" action="../controllers/recuperar.php">
                                        <div class="form-group">
                                        <input type="email" name="email" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Insira o endereço de e-mail...">
                                        </div>
                                        <div>
                                            <input type="submit" value="Redefinir senha" name="esqueciasenha" class="btn btn-primary btn-user btn-block">
                                        </div>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="login.php">Já tem uma conta? Conecte-se!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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