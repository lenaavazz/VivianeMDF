<?php

Conexao::abrirConexao();
class Conexao
{

    public static function abrirConexao()
    {
        $ambiente = "dev";

        switch ($ambiente) {
            case 'dev':
                $servername = "localhost";     
                $username = "root";
                $password = "";
                $dbname = "mydb"; 
                break; 
            case 'tes':
                $servername = "";
                $username = "";
                $password = "";
                $dbname = "";
                break;
            case 'prd':
                $servername = "";
                $username = "";
                $password = "";
                $dbname = "";
                break;
            default:
                # code...
                break;
        }

        try {
            $conexao = new PDO("mysql:host=$servername;port=3306;dbname=$dbname", "$username", "$password");

            $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            //echo "Está funcionando!";
        } catch (PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        
        }
        return $conexao;
    }
}
