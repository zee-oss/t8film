<?php
require_once 'Database.php';
$db = new Database();
$data = $db->select('film');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Film Favorit</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Daftar Film Favorit</h2>
    <table>
        <tr>
            <th>Judul</th>
            <th>Genre</th>
            <th>Tahun</th>
        </tr>
        <?php foreach ($data as $film): ?>
        <tr>
            <td><?= htmlspecialchars($film['judul']) ?></td>
            <td><?= htmlspecialchars($film['genre']) ?></td>
            <td><?= htmlspecialchars($film['tahun']) ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
