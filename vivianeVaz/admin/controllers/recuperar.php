<?php
      include('../../bancoDeDados/Conexao.php');
      include('../model/Email.php');

      if(isset($_POST['esqueciasenha'])){
        $token = uniqid();

            $_SESSION['email'] = $_POST['email'];
            $_SESSION['token'] = $token;

            $c = new Conexao;
            $conexao = $c->abrirConexao();
            
            $sql = $conexao->prepare("SELECT * FROM usuarios WHERE email = ?");
            $sql->execute([$_SESSION['email']]);

            if($sql->rowCount() == 1){
                $info = $sql->fetch();

                $mail = new Email('localhost','vivianemariavaz@gmail.com','vi10192108','Viviane Maria Vaz');
                $mail->enviarPara($_POST['email'], $info['nome']);
                $url = 'http://localhost:3000/vivianeVaz/admin/controllers/redefinir.php';    
                $corpo = 'Olá '.$info['nome'].', <br>
                Foi solicitada uma redefinição da sua senha na Viviane Vaz MDF. Acesse o link abaixo para redefinir sua senha.<br>
                <h3><a href="'.$url.'?token='.$_SESSION['token'].'">Redefinir a sua senha</a></h3> 
                <br>            
                Caso você não tenha solicitado essa redefinição, ignore esta mensagem.<br>
                Qualquer problema ou dúvida entre em contato pelo email vivianemariavaz@gmail.com';

                $informacoes = ['Assunto'=>'Redefinição de senha', 'Corpo'=>$corpo];           
                $mail->formatarEmail($informacoes);
                
                if($mail->enviarEmail()){
                    $data['sucesso'] = true;
                }else{
                        $data['erro'] = true;
                }

                die('As orientações para criar uma nova senha no site Viviane Vaz MDF foram enviadas ao seu e-mail.');
            }else{
                die('Não encontramos esse <b>email</b> em nossa base de dados.');
            }





   }
?>