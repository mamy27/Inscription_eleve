<?php
include 'db.php';

$sql = "SELECT * FROM students";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Liste des élèves</title>
</head>
<body>

    <h1>Liste des élèves</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Classe</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $result->fetch_assoc()) { ?>
                <tr>
                    <td><?= $row['name'] ?></td>
                    <td><?= $row['class'] ?></td>
                    <td><?= $row['email'] ?></td>
                    <td>
                        <a href="edit_student.php?id=<?= $row['id'] ?>">Modifier</a>
                        <a href="delete_student.php?id=<?= $row['id'] ?>" onclick="return confirm('Supprimer cet élève ?')">Supprimer</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <a href="index.php"><button class="retour">Retour</button></a>
</body>

</html>