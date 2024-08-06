<?php

class BDPDO{
	
	public static $instance;
	private static $endereco = "localhost";
	private static $banco = "lt_refrigeracao";
	private static $usuario = "postgres";
	private static $senha = "root";

    private function __construct(){
        
    }

    public static function getInstance(){ 
        if (!isset(self::$instance)) {
            try{
	            self::$instance = new PDO("pgsql:host = localhost; dbname = lt_refrigeracao", "postgres", "root", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	        }catch(PDOException $e){
	        	die("Erro de conexão:    " . $e->getMessage);
	        }
	    }
        return self::$instance;
    }

}

?>
