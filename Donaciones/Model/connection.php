<?php
class Connection {
    private static $host = "localhost";
    private static $user = "root"; // tu usuario de MySQL
    private static $pass = "";     // tu contraseña
    private static $db   = "bd_donaciones"; // tu base de datos
    private static $conn;

    public static function getConnection() {
        if (!isset(self::$conn)) {
            self::$conn = new mysqli(self::$host, self::$user, self::$pass, self::$db);

            if (self::$conn->connect_error) {
                die("Error en la conexión: " . self::$conn->connect_error);
            }
        }
        return self::$conn;
    }
}
?>
