<?php
namespace models;
final class DatabaseConnection {
    
    private static $instance = null;
    private static $connection;
    
    public static function getInstance() {
        if (is_null(self::$instance)){
            self::$instance = new DatabaseConnection();
        }
        
        return self::$instance;
    }
    
    private function __construct() {}
    
    private function __clone() {}
    // function executeResult($sql){
    //     $conn = mysqli_connect($this->hostname, $this->username, $this->pass, $this->dbname);
        
    //     $result = mysqli_query($conn, $sql);
    //     $list = [];
    //     while ($row = mysqli_fetch_array($result, 1)) {
    //         $list[] = $row;
    //     }
    //     mysqli_close($conn);
        
    //     return $list;
    // }

    
    // private function __wakeup() {}
    
    
    public static function connect($host, $dbName, $user, $password){
        self::$connection = new \PDO("mysql:dbname=$dbName;host=$host", $user, $password);
        // $this->conn = new mysqli($this->hostname, $this->username, $this->pass, $this->dbname);
       if(!self::$connection){
           echo "Kết nối thất bại";
            exit();
       }else{
            

        //    mysqli_set_charset(self::$connection,'utf8');
       }
       return self::$connection;
    }
    
    public static function getConnection() {
        return self::$connection;
    }
    

}
?>