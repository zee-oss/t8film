<?php
require_once 'Database.php';

$db = new Database();
$conn = $db->mysqli;


$conn->query("CREATE TABLE IF NOT EXISTS film (
    id INT AUTO_INCREMENT PRIMARY KEY,
    judul VARCHAR(100),
    genre VARCHAR(50),
    tahun INT
)");


$result = $conn->query("SELECT COUNT(*) as total FROM film");
$row = $result->fetch_assoc();
if ($row['total'] == 0) {
    $conn->query("INSERT INTO film (judul, genre, tahun) VALUES
        ('Inception', 'Sci-Fi', 2010),
        ('The Dark Knight', 'Action', 2008),
        ('Interstellar', 'Sci-Fi', 2014)
    ");
    echo "Data berhasil dimasukkan.";
} else {
    echo "Data sudah ada.";
}
?>
