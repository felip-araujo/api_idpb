<?php 

    class Database {
        protected static $db; 

        private function __construct()
        {
            $driver = "mysql";
            $host = "108.167.151.34";
            $dbname = "evolud85_idpb";
            $username = "evolud85_chris";
            
            try {
                self::$db = new PDO("$driver: host=$host; dbname=$dbname", $username); 

                self::$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
                self::$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false); 

            } catch(PDOException $e) {
                echo $e->getMessage();
            }
        
        
        } 
        public static function getConexao(){
            if(!self::$db) {
                new Database();
            }

            return self::$db;
        }
        



        
    }


?>