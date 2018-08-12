<?php
class DbConnect{
//Your Mysql Config
    private $host = 'localhost';
    private $user = "root";
    private $password = "root";
    private $dbname = "jobportal";
    public function connect(){
        try {
            $conn= new PDO('mysql:host=' .$this->host . '; dbname=' .$this->dbName, $this->user, $this->password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return conn;
            
        } catch (PDOException $e) {
            echo 'Database Error: '. $e.getMessage();
        }
    }
}
?>