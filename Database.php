
<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 't8film');

class Database {
    public $mysqli;

    function __construct() {
        // Buat koneksi ke MySQL (tanpa database dulu)
        $this->mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS);

        // Cek dan buat database jika belum ada
        $this->mysqli->query("CREATE DATABASE IF NOT EXISTS " . DB_NAME);
        $this->mysqli->select_db(DB_NAME);
    }

    function select($table) {
        $sql = "SELECT * FROM $table";
        $result = $this->mysqli->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    function __destruct() {
        $this->mysqli->close();
    }
}
?>
