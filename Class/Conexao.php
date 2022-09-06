<?php
/**
 * Conexão com o banco de dados
 */
class Conexao 
{
     # Variável que guarda a conexão PDO.
    protected static $db;

    private function __construct()
    {
        # Informações sobre o banco de dados:
        $db_host    = "localhost";   // servidor
        $db_nome    = "senagran";   //nome do banco
        $db_usuario = "root";       //usuario do banco
        $db_senha   = "";
        $db_driver  = "mysql";
        $db_porta   = "3306";

       try
        {
            # Atribui o objeto PDO à variável $db.
            self::$db = new PDO("$db_driver:host=$db_host; port=$db_porta; dbname=$db_nome", $db_usuario, $db_senha);
            # Garante que o PDO lance exceções durante erros.
            self::$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            # Garante que os dados sejam armazenados com codificação UTF-8.
            self::$db->exec('SET NAMES utf8');
        }
        catch (PDOException $e)
        {
            # Então não carrega nada mais da página.
            // die("Connection Error: " . $e->getMessage());
            echo 'Falha na conexão: ' . $e->getMessage();
        }
    }

	# Método estático - acessível sem instanciação.
	# Conexao::conexao();
    public static function conexao()
    {
        # Garante uma única instância. Se não existe uma conexão, criamos uma nova.
        if (!self::$db)
        {
            new Conexao();
        }
        # Retorna a conexão.
        return self::$db;
    }



}

?>