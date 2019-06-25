<?php  
class Database {
    public static $servername = 'localhost';
    public static $username = 'root';
    public static $password = '';
    public static $dbname = 'batch137_142';
    public static function  Connect() {
        $connect = mysqli_connect(self::$servername,self::$username,self::$password,self::$dbname);
        mysqli_set_charset($connect, 'utf8');
        if (!$connect) {
            die("Connection failed: " . mysqli_connect_error());
            } 
        return $connect ; 
    }
}
?>