<?php
class Connect {
    private static $host = 'localhost';
    private static $username = 'root';
    private static $password = '';
    private static $database = 'batch137_142';
    public function connectDB(){
        $connect = mysqli_connect(self::$host, self::$username, self::$password, self::$database);
        mysqli_set_charset($connect, "utf8");
        if(!$connect){
            die("Connection failed: " . mysqli_connect_error());
        }
        return $connect;
    }
}
?>